<?php 
    $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
    $db -> set_charset("utf8");
    session_start(); 
    
    if (!$_SESSION['username']) {
        header('location: http://localhost/shopacc.net/index.php');
    }
    $username = $_GET['user'];
    $sql_select_info = "SELECT * FROM table_user WHERE username= '$username'";
    $row_info = mysqli_query($db, $sql_select_info);
    while ($info = mysqli_fetch_array($row_info)) {

        if (isset($_POST['update'])) {
            $phoneNum = $_POST['phone_num'];
            $email = $_POST['email'];
            $partten = "/^[A-Za-z0-9_.]{6,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
            if (ctype_digit($phoneNum) == FALSE) {
                $error_num = "Số điện thoại không đúng định dạng!";
            }
            elseif(!preg_match($partten ,$email, $matchs)) {
                $error_num = "Email không đúng định dạng!";
            }
            else {
                $sql_update = "UPDATE table_user SET email='$email', phone_num='$phoneNum' WHERE id= '$info[id]'"  ;
                mysqli_query($db, $sql_update);
                header('location: http://localhost/shopacc.net/user/pages/info-user/info.php?locate=info-user&user='.$username);
            }
            
            
        } 
        if (isset($_POST['change'])) {
            $password = md5($_POST['password']);
            $new_password = md5($_POST['new_password']);
            $new_pass_again = md5($_POST['new_password_again']);
            if ($password != $info['password']) {
                $error = "Mật khẩu cũ sai";
            }
            elseif ($new_password != $new_pass_again) {
                $error = "Mật khẩu mới không khớp";
            }
            else {
                $sql_update_pass = "UPDATE table_user SET password = '$new_password' WHERE id= '$info[id]' ";
                mysqli_query($db, $sql_update_pass);
                // header('location: http://localhost/shopacc.net/user/pages/info-user/info.php?locate=info-user&user='.$username);
            }
        } 

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopacc.net</title>
    <link rel="SHORTCUT ICON"  href="../public/img/logo/logo.png">
    <link rel="stylesheet" href="../public/base.css">
    <link rel="stylesheet" href="../info-account/info-acc.css">
    <link rel="stylesheet" href="../public/iconFont/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include('../main/header-scroll.php') ?>

    <div class="body">
        <div class="body-info">
            <div class="body-content ">
                <div class="body-container">
                    <ul class="container-info">
                        <h3>TÀI KHOẢN</h3>
                    </ul>
                </div>

                <div class="body-container-info js-content">
                    <ul class="information">
                        <h3>Thông tin tài khoản </h3>
                        
                        <li>ID TÀI KHOẢN : <?php echo $info['id'] ?></li>
                        <li>SỐ DƯ : <?php echo $info['balance'] ?> đ</li>
                        <li>TÊN TÀI KHOẢN : <?php echo $info['username'] ?></li>
                        <li>SỐ ĐIỆN THOẠI : <?php echo $info['phone_num'] ?></li>
                        <li>EMAIL : <?php echo $info['email'] ?></li>
                    </ul>
                    <form method="post">
                    <ul class="information">
                        <h3>Thay đổi thông tin tài khoản </h3>
                        <?php if (isset($error_num)) {?>
                            <span style="color: red; margin-left: 1rem;"><?php echo $error_num; ?></span>
                            <?php } ?>
                        <li>SỐ ĐIỆN THOẠI :  <input type="text" name="phone_num" placeholder="Nhập số điện thoại mới"></li>
                        <li>EMAIL :  <input type="text" name="email" placeholder="Nhập email mới"></li>
                        <button type="submit" name="update">Cập nhật</button>
                    </ul>
                    <ul class="information">
                            <h3>ĐỔI MẬT KHẨU
                            <?php if (isset($error)) {?>
                            <span style="color: red;"><?php echo $error; ?></span>
                            <?php } ?>
                            </h3>
                            
                            <input type="password" placeholder="Mật khẩu cũ" class="pass-old" name="password">
                            <input type="password" placeholder="Mật khẩu mới" class="pass-new" name="new_password">
                            <input type="password" placeholder="Nhập lại mật khẩu" class="pass-new" name="new_password_again">
                            <button class="resetpass-btn" name="change">Đổi mật khẩu</button>
                        </ul>
                    </form>
                </div>
            </div>

        </div>          
    </div>
    ​
    <?php include('../main/footer.php') ?>


    <div class="logout-nofi">
        <div class="logout-container">
            <div class="logout-nofi-box">
                <div class="box-top">
                    <i class="ti-bell icon-nofi"></i>
                    <p>ĐĂNG XUẤT ?</p>
                    <i class="ti-close icon-close"></i>
                </div>
                <div class="box-content">
                    <p>Bạn có chắc chắn muốn đăng xuất?</p>
                    <a href="../index/logout.php"><ion-icon name="log-out-outline"></ion-icon>  Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>

    <!-- scrpit logout nofication -->
    <script>
        const logOutBtn = document.querySelectorAll('.logout-btn')
        const logOutBox = document.querySelector('.logout-nofi')
        const logOutBoxClose = document.querySelector('.icon-close')

        function showBuyTickets() {
            logOutBox.classList.add('open')
        }

        function hideBuyTickets() {
            logOutBox.classList.remove('open')
        }

        for (const logOut of logOutBtn) {
            logOut.addEventListener('click', showBuyTickets)
        }
        
        logOutBoxClose.addEventListener('click', hideBuyTickets)

    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>


<?php } ?>