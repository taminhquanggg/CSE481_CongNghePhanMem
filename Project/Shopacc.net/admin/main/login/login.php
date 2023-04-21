<?php include('./process.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Đăng nhập - Shopacc.net</title>
    <link rel="SHORTCUT ICON"  href="/shopacc.net/user/pages/public/img/logo/logo-title.jpg">
    <link rel="stylesheet" href="../login/login.css">
    <link rel="stylesheet" href="/shopacc.net/user/pages/public/base.css">
</head>
<body>
    <form method="post" id="login-form" class="login">
        <h1><ion-icon name="log-in-outline"></ion-icon> ĐĂNG NHẬP ADMIN</h1>
        <div class="form_error">
            <?php if (isset($info_error)): ?>
                        <span><?php echo $info_error; ?></span>
            <?php endif ?>
        </div>

        <div <?php if (isset ($log_error)): ?>  class="form_error" <?php endif ?> >
            <p class="ingame_text"><ion-icon name="person-circle-outline"></ion-icon> Tài khoản</p>
            <input type="text" name="username" placeholder="Nhập tài khoản" value="<?php echo $username; ?>">
        </div>

        <div <?php if (isset ($log_error)): ?>  class="form_error" <?php endif ?>>
            <p class="ingame_text"><ion-icon name="key-outline"></ion-icon> Mật khẩu</p>
            <input type="password"  placeholder="Nhập mật khẩu" name="password">
            <?php if (isset($log_error)): ?>
                    <span><?php echo $log_error; ?></span>
            <?php endif ?>
            </div>
        <div class="log_box">
            <button type="submit" name="login" id="log_btn" class="log_btn">Đăng nhập</button>
        </div>
    </form>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>