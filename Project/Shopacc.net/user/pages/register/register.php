<?php include('./process.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký - Shopacc.net</title>
    <link rel="SHORTCUT ICON"  href="../public/img/logo/logo-title.jpg">
    <link rel="stylesheet" href="../public/base.css">
    <link rel="stylesheet" href="./register.css">
    <link rel="stylesheet" href="../public/iconFont/themify-icons/themify-icons.css">
</head>
<body>
    <?php include('../main/header-scroll.php') ?>
    
    <div class="slider">
        <form method="post" id="register-form" class="register">
            <h1><ion-icon name="person-add-outline"></ion-icon> ĐĂNG KÝ TÀI KHOẢN</h1>
            <div class="form_error">
                <?php if (isset($info_error)): ?>
                            <span><?php echo $info_error; ?></span>
                <?php endif ?>
            </div>

            <div <?php if (isset ($name_error)): ?>  class="form_error" <?php endif ?> >
                <p class="ingame_text"><ion-icon name="person-circle-outline"></ion-icon> Tên tài khoản</p>
                <input type="text" name="username" placeholder="Nhập tài khoản" value="<?php echo $username; ?>">
                <?php if (isset($name_error)): ?>
                        <span><?php echo $name_error; ?></span>
                <?php endif ?>
            </div>
    
            <div <?php if (isset ($password_error)): ?>  class="form_error" <?php endif ?>>
                <p class="ingame_text"><ion-icon name="key-outline"></ion-icon> Mật khẩu</p>
                <input type="password"  placeholder="Nhập mật khẩu" name="password">
                <p class="ingame_text"><ion-icon name="key-outline"></ion-icon> Nhập lại mật khẩu</p>
                <input type="password"  placeholder="Nhập lại mật khẩu" name="password_again">
                <?php if (isset($password_error)): ?>
                        <span><?php echo $password_error; ?></span>
                <?php endif ?>
              </div>
    
            <div class="reg_box">
                <button type="submit" name="register" id="reg_btn" class="regis_btn">Đăng ký</button>
            </div>
              
            <div class="reg-nofi" <?php if ($reg_status == 1 ): ?> style = "display:block" <?php endif ?>>
                <div class="reg-container">
                    <div class="reg-nofi-box">
                        <div class="box-top">
                            <i class="ti-bell icon-nofi"></i>
                            <p>THÀNH CÔNG</p>
                            <i class="ti-close icon-close"></i>
                        </div>
                        <div class="box-content">
                            <p>Đăng ký thành công. Đăng nhập ngay?</p>
                            <a href="http://localhost/shopacc.net/user/pages/login/login.php?locate=login"><ion-icon name="log-in-outline"></ion-icon> Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        
    </div>

    <?php include('../main/footer.php') ?>

    
    

    <!-- scrpit signin nofication -->
    <script>
        const RegNofiBox = document.querySelector('.reg-nofi')
        const RegNofiBoxClose = document.querySelector('.icon-close')

        function hideRegNofi() {
            RegNofiBox.classList.add('close')
        }
        RegNofiBoxClose.addEventListener('click', hideRegNofi)
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>