<?php
    session_start(); 
    $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
    $db -> set_charset("utf8");
    include('./process.php');
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

    <div class="body-buycode">
        <form method="post">
            <div class="box">
                <h3><ion-icon name="wallet-outline"></ion-icon>  Khu nạp thẻ</h3>
                    <?php if (isset($error_input)) { ?>
                        <p style="color: red;"><?php echo $error_input ?></p>
                    <?php } ?>
                    <div class="napthe">
                        <select class="napthe-input" name="host">
                            <option value="0">Chọn nhà mạng</option>
                            <option value="1">VIETTEL</option>
                            <option value="2">VINAPHONE</option>
                            <option value="3">MOBIPHONE</option>
                        </select>
                        <select class="napthe-input" name="input">
                            <option value="0">Chọn mệnh giá</option>
                            <option value="50000">50.000 VNĐ</option>
                            <option value="100000">100.000 VNĐ</option>
                            <option value="200000">200.000 VNĐ</option>
                            <option value="500000">500.000 VNĐ</option>                                             
                        </select>
                        <input type="text" class="napthe-input" placeholder="Mã số thẻ" name="code">
                        <input type="text" class="napthe-input" placeholder="Số serial" name="seri">
                        <button type="submit" name="put_money">NẠP THẺ</button>
                    </div>
            </div>
        </form>
    </div>
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