<div class="header">
    <p><ion-icon name="bag-check-outline"></ion-icon>Sản phẩm đã bán</p>
</div>

<div class="content">
    
    <?php 
        $sql_select_items = mysqli_query($db, "SELECT * FROM table_items ORDER BY id DESC");
    ?>
    <table>
        <tr>
            <td>ID</td>
            <td>Giá</td>
            <td>Trạng thái</td>
            <td>Người đăng</td>
        </tr>
        <?php 
            while ($row_items = mysqli_fetch_array($sql_select_items)) {
                if ($row_items['status']=='Đã bán') {
        ?>
        <tr>
            <td><?php echo $row_items['id'] ?></td>
            <td><?php echo number_format($row_items['price'], 0, '', '.')  ?> đ</td>
            
            <td><?php echo $row_items['status'] ?></td>
            <td><?php echo $row_items['author'] ?></td>
            
        </tr>
        <?php } }?>
    </table>
</div>