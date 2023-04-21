<?php   
    $username = $_SESSION['username'];
    if (isset($_POST['put_money'])) {
        $host = $_POST['host'];
        $input = $_POST['input'];
        $code = $_POST['code'];
        $seri = $_POST['seri'];
        if (!$host || !$input || !$code || !$seri || $host=='0' || $input =='0') {
            $error_input = "Vui lòng nhập đầy đủ thông tin !";
          }
          else{
                $error_input = "Bạn vừa nạp thành công vào tài khoản số tiền ".number_format($input, 0, '', '.')." đ";
                $sql_u = "SELECT * FROM table_user WHERE username='$_SESSION[username]'";
                $log_u = mysqli_query($db, $sql_u);
                    if (mysqli_num_rows($log_u) != 0) {
                        $row = mysqli_fetch_array($log_u);
                        $balance = $row['balance'];
                        $balance = $balance + $input ;
                        $sql_update_user = "UPDATE table_user SET balance='$balance' WHERE username= '$username'"  ;
                        mysqli_query($db, $sql_update_user);
                    }
          }
    }
?>