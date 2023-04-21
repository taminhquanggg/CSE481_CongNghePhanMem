<?php
    $db = mysqli_connect('localhost', 'root', '', 'shopacc_data');
    $db -> set_charset("utf8");
    if (isset($_SESSION['username'])) {
        $sql_u = "SELECT * FROM table_user WHERE username='$_SESSION[username]'";

        $log_u = mysqli_query($db, $sql_u);

        if (mysqli_num_rows($log_u) != 0) {
            $row = mysqli_fetch_array($log_u);
            $balance = $row['balance'];
        }
    }
?>

<div id="main-header">
        <div class="header-scroll">
            <div class="header-scroll-nav">
                <ul class="scroll-nav">
                    <li>
                        <a href="
                            <?php if (!isset($_GET['locate']) or (isset($_GET['locate']) and ($_GET['locate']=='welcome'))): ?> # 
                                <?php else: ?> http://localhost/shopacc.net/
                            <?php endif ?>" >
                            <ion-icon name="home-outline"></ion-icon> Trang chủ
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/shopacc.net/user/pages/put-money/put_money.php?locate=put_money"><ion-icon name="cash-outline"></ion-icon> Nạp tiền</a>
        
                    </li>
                    <li>
                        <a href="#"><ion-icon name="paper-plane-outline"></ion-icon> Tiện ích</a>
                        <!-- subnav -->
                        <ul class="subnav">
                            <li><a href="#"><ion-icon name="newspaper-outline"></ion-icon> Tin tức</a></li>
                            <li><a href="#"><ion-icon name="barcode-outline"></ion-icon> Độ uy tín của Shop</a></li>
                            <li><a href="#"><ion-icon name="swap-horizontal-outline"></ion-icon> Hướng dẫn giao dịch</a></li>
                            <li><a href="#"><ion-icon name="call-outline"></ion-icon> Liên hệ admin</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php if (!isset($_SESSION['username'])) : ?> http://localhost/shopacc.net/user/pages/login/login.php?locate=login 
                                <?php else : ?> http://localhost/shopacc.net/user/pages/info-user/info.php?locate=info-user&user=<?php echo $_SESSION['username'] ?> <?php endif ?>" 
                                     style = "<?php if (isset($_SESSION['username'])) : ?>font-weight:600; <?php endif ?>" >  
                                    <?php if (!isset($_SESSION['username'])) : ?><ion-icon name="log-in-outline"></ion-icon> Đăng nhập 
                                        <?php else : ?> 
                                            <ion-icon name="person-outline"></ion-icon> 
                                            <?php echo $_SESSION['username']?>
                                        <?php endif ?>
                        </a>
                        <ul class="subnav" 
                            <?php if (!isset($_SESSION['username'])) : ?> 
                                style="display: none;" 
                            <?php endif ?>>

                                <li>
                                    <a href="#"><ion-icon name="wallet-outline">
                                        </ion-icon> Số dư: <?php echo number_format($balance, 0, '', '.') ?> đ
                                    </a>
                                </li>
                                <li>
                                <li>
                                    <a type="button" class="logout-btn" >
                                        <ion-icon name="log-out-outline"></ion-icon>  Đăng xuất
                                    </a>
                                </li>
                        </ul>
                    </li>

                    <?php if (!isset($_SESSION['username'])) :?>
                        <li>
                            <a href="http://localhost/shopacc.net/user/pages/register/register.php?locate=register "><ion-icon name="person-add-outline"></ion-icon> Đăng ký  </a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
</div>
