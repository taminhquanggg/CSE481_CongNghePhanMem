<div class="header">
    <p><ion-icon name="list-outline"></ion-icon>Quản lý sản phẩm</p>
</div>

<div class="content">
    <div class="add-btn">
        <button class="add-member" onclick="window.location.href='?locate=addItem'"><ion-icon name="add-outline"></ion-icon>Thêm mới</button>
    </div>
    <?php 
        $sql_select_items = mysqli_query($db, "SELECT * FROM table_items ORDER BY id DESC");
    ?>
    <table>
        <tr>
            <td>ID</td>
            <td>Giá</td>
            <td>Rank</td>
            <td>Tướng</td>
            <td>Trang phục</td>
            <td>Liên kết</td>
            <td>Trạng thái</td>
            <td>Người đăng</td>
            <td>Tác vụ</td>
        </tr>
        <?php 
            while ($row_items = mysqli_fetch_array($sql_select_items)) {
        ?>
        <tr>
            <td><?php echo $row_items['id'] ?></td>
            <td><?php echo number_format($row_items['price'], 0, '', '.')  ?> đ</td>
            <td><?php echo $row_items['rank'] ?></td>
            <td><?php echo $row_items['agent'] ?></td>
            <td><?php echo $row_items['skin'] ?></td>
            <td><?php echo $row_items['link'] ?></td>
            <td><?php echo $row_items['status'] ?></td>
            <td><?php echo $row_items['author'] ?></td>
            <td>

                <button onclick="window.location.href='?locate=deleteItem&id=<?php echo $row_items['id']?>'"  type="submit" class="delete"><ion-icon name="close-outline"></ion-icon></button>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>