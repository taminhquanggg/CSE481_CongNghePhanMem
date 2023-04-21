<?php 
    $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
    $db -> set_charset("utf8");
    session_start(); 
    if (!$_SESSION['username']) {
        header('location: http://localhost/shopacc.net/index.php');
    }
    else {

        $sql_u = "SELECT * FROM table_user WHERE username='$_SESSION[username]'";

        $log_u = mysqli_query($db, $sql_u);

        if (mysqli_num_rows($log_u) != 0) {
            $row = mysqli_fetch_array($log_u);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopacc.net</title>
    <link rel="SHORTCUT ICON"  href="./pages/public/img/logo/logo-title.jpg">
    <link rel="stylesheet" href="./pages/index/index.css">
    <link rel="stylesheet" href="./pages/public/base.css">
    <link rel="stylesheet" href="./pages/public/iconFont/themify-icons/themify-icons.css">
    
</head>
<body">
    <div id="main">
        <!-- header -->
        <div id="main-header">
            <div class="header-container">
                <div class="header-item">
                    <!-- begin header logo -->
                    <div class="header-logo">
                        <div class="header-logo-box">
                            <div class="logo">
                                <a href="">
                                    <img src="/shopacc.net/user/pages/public/img/logo/logo.png" class="logo-img">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end header logo -->

                    <!-- begin header content -->
                    <div class="header-content">
                        <!-- header top -->
                        <div class="header-top">
                            <!-- header top left -->
                            <div class="header-top-left">
                                Chào mừng các bạn đến với 
                                <strong class="text-warning">SHOPACC.NET</strong>
                            </div>
                            <!-- header top right -->
                            <div class="header-top-right">
                                <ul class="contact-info">
                                    <li><a href=""><ion-icon name="call-outline"></ion-icon> 0987-654-321</a></li>
                                    <li><a href=""><ion-icon name="mail-outline"></ion-icon> shopacc.net@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- header upper -->
                        
                
                            <div class="header-upper">
                                <!-- header upper nav -->
                                <div class="header-upper-nav">
                                    <ul class="nav">
                                        <li><a href="#"><ion-icon name="home-outline"></ion-icon> Trang chủ</a></li>
                                        <li>
                                            <a href="http://localhost/shopacc.net/user/pages/put-money/put_money.php?locate=put_money"><ion-icon name="cash-outline"></ion-icon> Nạp tiền</a>
                                            
                                        </li>
                                        <li>
                                            <a href=""><ion-icon name="paper-plane-outline"></ion-icon> Tiện ích</a>
                                            <!-- subnav -->
                                            <ul class="subnav">
                                                <li><a href=""><ion-icon name="newspaper-outline"></ion-icon> Tin tức</a></li>
                                                <li><a href=""><ion-icon name="barcode-outline"></ion-icon> Độ uy tín của Shop</a></li>
                                                <li><a href=""><ion-icon name="swap-horizontal-outline"></ion-icon> Hướng dẫn giao dịch</a></li>
                                                <li><a href=""><ion-icon name="call-outline"></ion-icon> Liên hệ admin</a></li>
                                            </ul>
                                        </li>
                                       
                                        <li>
                                        
                                            <a href="http://localhost/shopacc.net/user/pages/info-user/info.php?locate=info-user&user=<?php echo $_SESSION['username'] ?>" style="font-weight: 600;"> <ion-icon name="person-outline"></ion-icon>  <?php echo $_SESSION['username']?> </a>
                                            <ul class="subnav">
                                                <li><a><ion-icon name="wallet-outline"></ion-icon> Số dư: <?php echo number_format($row['balance'], 0, '', '.') ?> đ</a></li>
                                                <li><a type="button" class="logout-btn"><ion-icon name="log-out-outline"></ion-icon>  Đăng xuất</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                    
                    </div>
                    <!-- end header content -->
                </div>
            </div> 
        </div>



        <?php include('./pages/main/header-scroll.php') ?>

        <?php include('./pages/main/slide.php') ?>

        <?php include('./pages/main/content.php') ?>

        <?php include('./pages/main/footer.php') ?>
    </div>

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
                    <a href="./pages/index/logout.php"><ion-icon name="log-out-outline"></ion-icon>  Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>


    <!-- script header slide -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        function scrollHeader() {
            var innerWindowHeight = window.innerHeight; //Windows height
            var headerMotherHeight = $(".header-container").height(); //header height
            var windowOffSet = window.pageYOffset; //window offset
            // visible/ invisible
            if (windowOffSet > headerMotherHeight) {
                if (innerWindowHeight > headerMotherHeight) {
                    $(".header-scroll").show();
                    $(".header-scroll").css({"position":"fixed", "top": "0"});
                }
                else {
                    $(".header-scroll").hide()
                    $(".header-scroll").css({"position":"static"})
                }
            }
            else {
                $(".header-scroll").hide()
                $(".header-scroll").css({"position":"static"})
            }
        }

        //make header visible on scroll
        window.onscroll = scrollHeader;
    </script>

    <!-- script auto slide -->
    <script type="text/javascript">
    var t = 1;
    setInterval(function() {
        document.getElementById('radio' + t).checked = true;
        t++;
        if (t > 2) {
            t = 1;
        }
    }, 5000);
    </script>


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
<?php } } ?>