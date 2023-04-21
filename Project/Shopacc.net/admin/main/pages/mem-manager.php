<div class="header">
        <p><ion-icon name="people-outline"></ion-icon>Quản lý tài khoản</p>
</div>
    <div class="content">
        <div class="add-btn">
            <button class="add-member"><ion-icon name="add-outline"></ion-icon>Thêm mới</button>
        </div>
        <?php 
        $sql_select_admin = mysqli_query($db, "SELECT * FROM table_admin ORDER BY id DESC");
        ?>
        <table>
            <tr>
                <td>ID</td>
                <td>Họ và tên</td>
                <td>Quyền hạn</td>
                <td>Tác vụ</td>
            </tr>
            <?php 
                while ($row_admin = mysqli_fetch_array($sql_select_admin)) {
    
            ?>
            <tr>
                <td><?php echo $row_admin['id'] ?></td>
                <td><?php echo $row_admin['name'] ?></td>
                <td><?php echo $row_admin['status'] ?></td>
                <td>
                    <button onclick="window.location.href='?locate=change&id=<?php echo $row_admin['id']?>'"  type="submit" class="change" ><ion-icon name="create-outline"></ion-icon></button>
                    <button onclick="window.location.href='?locate=deleteAdmin&id=<?php echo $row_admin['id']?>'"  type="submit" class="delete"><ion-icon name="close-outline"></ion-icon></button>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

<form method="post">
    <div class="add-nofi">
        <div class="add-container">
            <div class="add-nofi-box">
                <div class="box-top">
                    <p> <ion-icon class="icon-nofi" name="person-add-outline"></ion-icon> THÊM TÀI KHOẢN</p>
                </div>
                <div class="form_error">
                    <?php if (isset($reg_status)): ?>
                            <span><?php echo $reg_status; ?></span>
                    <?php endif ?>
                    <?php if (isset($info_error)): ?>
                                <span><?php echo $info_error; ?></span>
                    <?php endif ?>
                </div>
                <div class="box-content">
    
                    <div>
                        <p>Họ và tên</p>
                        <input type="text" placeholder="Nhập họ và tên" name="name_admin">
                    </div>
    
                    <div <?php if (isset ($name_error)): ?>  class="form_error" <?php endif ?> >
                        <p>Tên tài khoản</p>
                        <input type="text" name="username" placeholder="Nhập tài khoản">
                        <?php if (isset($name_error)): ?>
                                <span><?php echo $name_error; ?></span>
                        <?php endif ?>
                    </div>
    
                    <div <?php if (isset ($password_error)): ?>  class="form_error" <?php endif ?>>
                        <p >Mật khẩu</p>
                        <input type="password"  placeholder="Nhập mật khẩu" name="password">
                        <p >Nhập lại mật khẩu</p>
                        <input type="password"  placeholder="Nhập lại mật khẩu" name="password_again">
                        <?php if (isset($password_error)): ?>
                                <span><?php echo $password_error; ?></span>
                        <?php endif ?>
                    </div>            
    
                    <div>
                        <p>Phân quyền</p>
                        <select name="status">
                            <option value="Member">Member</option>
                            <option value="Administrator">Administrator</option>
                        </select>
                    </div>
                    <div class="btn">
                        <button type="submit" class="add" name="add"><ion-icon name="checkmark-outline"></ion-icon> Thêm</button>
                        <button type="submit" class="close"><ion-icon name="close-outline"></ion-icon>Hủy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>