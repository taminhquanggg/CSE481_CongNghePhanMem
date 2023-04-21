<div class="header">
        <p><ion-icon name="bar-chart-outline"></ion-icon>Quản lý doanh thu</p>
</div>
<div class="content">
    <div class="total-manager">
        <div class="total-item">
            <div class="icon"><ion-icon name="bag-handle-outline"></ion-icon></div>
            <div class="total-content">
                <h2>TỔNG SỐ SẢN PHẨM</h2>
                <p><?php echo $all ?> <a href="?locate=items-manager" style="text-decoration: underline; color: #659DBD">CHI TIẾT</a></p>
                
            </div>
        </div>

        <div class="total-item">
            <div class="icon"><ion-icon name="bag-check-outline"></ion-icon></div>
            <div class="total-content">
                <h2>SẢN PHẨM ĐÃ BÁN</h2>
                <p><?php echo $sold ?> <a href="?locate=sold-item-manager" style="text-decoration: underline; color: #659DBD">CHI TIẾT</a></p>
            </div>
        </div>

        <div class="total-item">
            <div class="icon"><ion-icon name="cash-outline"></ion-icon></div>
            <div class="total-content">
                <h2>TỔNG DOANH THU</h2>
                <p><?php echo number_format($revenue, 0, '', '.') ?> VNĐ</p>
            </div>
        </div>
    </div>
</div>