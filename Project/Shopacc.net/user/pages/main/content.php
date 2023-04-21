<div id="main-content">
            <h2>Danh sách tài khoản</h2>
            <div class="list-acc">
            <?php
                $sql_select_item = mysqli_query($db, "SELECT * FROM table_items ORDER BY id DESC");
                while ($row_item = mysqli_fetch_array($sql_select_item)) {
                    if ($row_item['status']== 'Còn hàng') {

                    
            ?>
                <div class="acc-info col4">
                    <div class="acc-info-cover ">
                        <div class="id-acc-box">
                            <p>#ID: <?php echo $row_item['id'] ?></p>
                        </div>
                        <img src="/shopacc.net/uploads/<?php echo $row_item['coverImg'] ?>" class="info-img">
                    </div>
                    <div class="acc-info-text">
                        <div class="info-content">
                            <p>Tướng: <strong><?php echo $row_item['agent'] ?></strong></p>
                            <p>Trang phục: <strong><?php echo $row_item['skin'] ?></strong> </p>
                            <p>Rank: <strong><?php echo $row_item['rank'] ?></strong> </p>
                            <p>Liên kết: <strong><?php echo $row_item['link'] ?></strong></p>
                        </div>
                        <div class="info-btn">
                            <p><ion-icon name="pricetag-outline"></ion-icon> <?php echo number_format($row_item['price'], 0, '', '.') ?> đ</p>
                            <a href="/shopacc.net/user/pages/info-account/info-acc.php?locate=info-acc&id=<?php echo $row_item['id'] ?>">CHI TIẾT</a>
                        </div>
                    </div>
                </div>
            <?php }} ?>


            </div>
            
        </div>