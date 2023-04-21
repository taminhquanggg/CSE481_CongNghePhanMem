<?php 
    session_start(); 
    $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
    $db -> set_charset("utf8");
    $sql_select_item =  "SELECT * FROM table_items WHERE id= '$_GET[id]'";
    $row_item = mysqli_query($db, $sql_select_item);

    $sql_select_imgagent =  "SELECT * FROM table_imgagent WHERE id_item= '$_GET[id]'";
    $row_imgagent = mysqli_query($db, $sql_select_imgagent);

    $sql_select_imgskin =  "SELECT * FROM table_imgskin WHERE id_item= '$_GET[id]'";
    $row_imgskin = mysqli_query($db, $sql_select_imgskin);

    $sql_select_imgabout =  "SELECT * FROM table_imgabout WHERE id_item= '$_GET[id]'";
    $row_imgabout = mysqli_query($db, $sql_select_imgabout);

    while($item = mysqli_fetch_array($row_item)) {
        include('./buy-item.php');


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
</head>
<body>
    <div class="main">

        <?php include('../main/header-scroll.php') ?>
        <div id="main-content">
            <div class="top-content">
                <h2>#ID: <?php echo $item['id'] ?></h2>
                <form method = "post">
                    <div class="buy-btn">
                        <h2 name="price"><ion-icon name="pricetag-outline" style="color: #fff;"></ion-icon> <?php echo number_format($item['price'], 0, '', '.')  ?> đ</h2>
                        <a type="submit"  class="buy-now">MUA NGAY </a>
                    </div>
                </form>
            </div>
            <div class="content-tabs">
                <!-- tab 1 -->
                <input type="radio" id="tab-1" name="content-tabs" checked="checked">
                <label for="tab-1" class="label-1">TÀI KHOẢN</label>
                <div class="content-tab">
                    <img src="/shopacc.net/uploads/<?php echo $item['coverImg'] ?>">
                </div>
    
                <!-- tab 2 -->
                <input type="radio" id="tab-2" name="content-tabs">
                <label for="tab-2">TƯỚNG [<?php echo $item['agent'] ?>]</label>
                <div  class="content-tab">
                    <?php while($imgagent = mysqli_fetch_array($row_imgagent)) { ?>
                        <img src="/shopacc.net/uploads/<?php echo $imgagent['image'] ?>">
                    <?php } ?> 
                </div>
    
                <!-- tab 3 -->
                <input type="radio" id="tab-3" name="content-tabs">
                <label for="tab-3">TRANG PHỤC [<?php echo $item['skin'] ?>]</label>
                <div class="content-tab">
                    <?php while($imgskin = mysqli_fetch_array($row_imgskin)) { ?>
                        <img src="/shopacc.net/uploads/<?php echo $imgskin['image'] ?>">
                    <?php } ?> 
                </div>
                
    
                <!-- tab 4 -->
                <input type="radio" id="tab-4" name="content-tabs">
                <label for="tab-4">THÔNG TIN KHÁC</label>
                <div class="content-tab">
                    <?php while($imgabout = mysqli_fetch_array($row_imgabout)) { ?>
                        <img src="/shopacc.net/uploads/<?php echo $imgabout['image'] ?>">
                    <?php } ?> 
                </div>
    
            </div>
        </div>
        
    
        <?php include('../main/footer.php') ?>
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
                    <a href="../index/logout.php"><ion-icon name="log-out-outline"></ion-icon>  Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
    <form method="post">
        <div class="buy-nofi">
            <div class="logout-container">
                <div class="logout-nofi-box">
                    <div class="box-top">
                        <i class="ti-bell icon-nofi"></i>
                        <p>MUA NGAY ?</p>
                        <i class="ti-close icon-close"></i>
                    </div>
                    <div class="box-content">
                        <p>THÔNG TIN TÀI KHOẢN</p>
                        <p>--------------------------</p>
                        <p>TÀI KHOẢN ID: <?php echo $item['id'] ?></p>
                        <p>GIÁ: <?php echo number_format($item['price'], 0, '', '.')  ?> đ</p>
                        <p>TƯỚNG: <?php echo $item['agent'] ?></p>
                        <p>TRANG PHỤC: <?php echo $item['skin'] ?></p>
                        <p>RANK: <?php echo $item['rank'] ?></p>
                        <p>LIÊN KẾT: <?php echo $item['link'] ?></p>
                        <p>--------------------------</p>
                        <p>Bạn có chắc chắn muốn mua tài khoản này?</p>
                        <button type="submit" name="buy_now"><ion-icon name="bag-check-outline"></ion-icon>  MUA</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php if (!isset($_SESSION['username'])) { ?>
        <div class="buy-nofi">
            <div class="logout-container">
                <div class="logout-nofi-box">
                    <div class="box-top">
                        <i class="ti-bell icon-nofi"></i>
                        <p>CHƯA ĐĂNG NHẬP ?</p>
                        <i class="ti-close icon-close"></i>
                    </div>
                    <div class="box-content">
                        <p>Bạn chưa đăng nhập, hãy đăng nhập để sử dụng dịch vụ !</p>
                        <a href="http://localhost/shopacc.net/user/pages/login/login.php?locate=login"><ion-icon name="log-in-outline"></ion-icon>  ĐĂNG NHẬP</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php if (isset($error_buy)) {  ?>
        <div class="buy-nofi" style="display: flex;">
            <div class="logout-container">
                <div class="logout-nofi-box">
                    <div class="box-top">
                        <i class="ti-bell icon-nofi"></i>
                        <p>KHÔNG THÀNH CÔNG !</p>
                    </div>
                    <div class="box-content">
                        <p><?php echo $error_buy?></p>
                        <a href="http://localhost/shopacc.net/user/pages/put-money/put_money.php?locate=put_money"><ion-icon name="cash-outline"></ion-icon>  NẠP TIỀN</a>
                        <a href="/shopacc.net/user/pages/info-account/info-acc.php?locate=info-acc&id=<?php echo $item['id'] ?>" style="margin-right: 7rem;"><ion-icon name="arrow-back-outline"></ion-icon>  TRỞ LẠI</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

    <?php if (isset($done)) {  ?>
        <div class="buy-nofi" style="display: flex;">
            <div class="logout-container">
                <div class="logout-nofi-box">
                    <div class="box-top">
                        <i class="ti-bell icon-nofi"></i>
                        <p>THÀNH CÔNG !</p>
                    </div>
                    <div class="box-content">
                        <p><?php echo $done ?></p>
                        <p>--------------</p>
                        <p>Thông tin tài khoản :</p>
                        
                        <p>Tài khoản: <?php echo $item['username']?></p>
                        <p>Mật khẩu: <?php echo $item['password']?></p>
                        <p>--------------</p>
                        <a href="http://localhost/shopacc.net/user/welcome.php?locate=welcome"><ion-icon name="home-outline"></ion-icon>  TRANG CHỦ</a>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>


    <!-- scrpit buy-btn box -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        function scrollHeader() {
            var innerWindowHeight = window.innerHeight; //Windows height
            var buyBtnBoxHeight = $(".buy-btn").height(); //header height
            var windowOffSet = window.pageYOffset; //window offset scroll Y
            // visible/ invisible
            if (windowOffSet > buyBtnBoxHeight) {
                if (innerWindowHeight > buyBtnBoxHeight) {
                    $(".buy-btn").show();
                    $(".buy-btn").css({"position":"fixed", "top": "56px", "left":"5%", "right":"5%"});
                }
                else {
                    $(".buy-btn").css({"position":"static"})
                }
            }
            else {
                $(".buy-btn").css({"position":"static"})
            }
        }

        //make header visible on scroll
        window.onscroll = scrollHeader;
    </script>

    <!-- scrpit logout nofication -->
    <script>
        const logOutBtn = document.querySelectorAll('.logout-btn')
        const logOutBox = document.querySelector('.logout-nofi')
        const logOutBoxClose = document.querySelectorAll('.icon-close')

        function showLogOutBox() {
            logOutBox.classList.add('open')
        }

        function hideLogOutBox() {
            logOutBox.classList.remove('open')
        }

        for (const logOut of logOutBtn) {
            logOut.addEventListener('click', showLogOutBox)
        }

        for (const close of logOutBoxClose) {
            close.addEventListener('click', hideLogOutBox)
        }

    </script>


    <!-- scrpit buy nofication -->
    <script>
        const buyBtn = document.querySelectorAll('.buy-now')
        const buyBox = document.querySelector('.buy-nofi')
        const buyBoxClose = document.querySelectorAll('.icon-close')

        function showBuyBox() {
            buyBox.classList.add('open')
        }

        function hideBuyBox() {
            buyBox.classList.remove('open')
        }

        for (const buy of buyBtn) {
            buy.addEventListener('click', showBuyBox)
        }
        for (const close of buyBoxClose) {
            close.addEventListener('click', hideBuyBox)
        }
    </script>


    <script>
        const buyBtn = document.querySelectorAll('.buy_now')
        const buyBox = document.querySelector('.buy-nofi')
        const buyBoxClose = document.querySelectorAll('.icon-close')

        function showBuyBox() {
            buyBox.classList.add('open')
        }

        function hideBuyBox() {
            buyBox.classList.remove('open')
        }

        for (const buy of buyBtn) {
            buy.addEventListener('click', showBuyBox)
        }
        for (const close of buyBoxClose) {
            close.addEventListener('click', hideBuyBox)
        }
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php } ?>