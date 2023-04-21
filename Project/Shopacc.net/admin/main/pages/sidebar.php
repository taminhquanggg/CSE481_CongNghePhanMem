<div class="sidebar">
        <header>ShopAcc.net</header>
        <ul>
            <li><a href="?locate=home-page"><ion-icon name="home-outline"></ion-icon>Trang chủ</a></li>
            <li <?php if ($_SESSION['status'] != 'Administrator') :?> style="display: none;" <?php endif ?>><a href="?locate=mem-manager"><ion-icon name="people-outline"></ion-icon>Quản lý tài khoản</a></li>
            <li><a href="?locate=items-manager"><ion-icon name="list-outline"></ion-icon>Quản lý sản phẩm</a></li>
            <li><a href="?locate=revenue-manager"><ion-icon name="cash-outline"></ion-icon>Quản lý doanh thu</a></li>
            <li><a href="/shopacc.net/admin/main/process/logout.php"><ion-icon name="log-out-outline"></ion-icon>Đăng xuất</a></li>
        </ul>
    </div>