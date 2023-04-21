<?php
    $username = $_SESSION['username'];
    if (isset($_POST['buy_now'])) {
        $sql_u = "SELECT * FROM table_user WHERE username='$_SESSION[username]'";
        $log_u = mysqli_query($db, $sql_u);
            if (mysqli_num_rows($log_u) != 0) {
                $row = mysqli_fetch_array($log_u);
                $price = $item['price'];
                $balance = $row['balance'];
                if ($balance<$price) {
                    $error_buy = "Số dư của bạn không đủ, hãy nạp thêm tiền!";
                }
                else {
                    $done = "Chúc mừng bạn đã giao dịch thành công!";
                    $balance = $balance - $price;
                    $sql_update_user = "UPDATE table_user SET balance='$balance' WHERE username= '$username'"  ;
                    mysqli_query($db, $sql_update_user);
                    $sql_update_items = "UPDATE table_items SET status='Đã bán' WHERE id= '$item[id]'"  ;
                    mysqli_query($db, $sql_update_items);
                }
            }
    }
?>