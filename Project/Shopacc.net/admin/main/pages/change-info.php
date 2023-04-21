
<div class="header">
        <p><ion-icon name="people-outline"></ion-icon>Chỉnh sửa tài khoản</p>
</div>


<form method="post">
    <div class="content">
        <div class="info-admin">
            <ion-icon name="person-circle-outline"></ion-icon>
            <div class="info">
                <h2>ID: <?php echo $_GET['id']?></h2>
                <p>Họ và tên: <?php echo $row['name']?></p>
                <p>Tài khoản: <?php echo $row['username']?></p>
                <p>Phân quyền: <?php echo $row['status']?></p>
            </div>
        </div>
        <div class="change-info-box">
            <div class="change-name">
                <h2>Đổi tên</h2>
                <div class="form_error">
                    <?php if (isset($error1)): ?>
                            <span><?php echo $error1; ?></span>
                    <?php endif ?>
                </div>
                <p>Tên mới</p>
                <input type="text" placeholder="Nhập tên mới" name="new_name">
                <p>Nhập mật khẩu</p>
                <input type="password" placeholder="Nhập mật khẩu để xác nhận" name="password1">
                <div>
                    <button type="submit" name="change_name_admin"><ion-icon name="cloud-upload-outline"></ion-icon> Cập nhật</button>
                </div>
                
            </div>
            <div class="change-username">
                <h2>Đổi tài khoản</h2>
                <div class="form_error">
                    <?php if (isset($error2)): ?>
                            <span><?php echo $error2; ?></span>
                    <?php endif ?>
                </div>
                <p>Tài khoản mới</p>
                <input type="text" placeholder="Nhập tài khoản mới" name="new_username">
                <p>Nhập mật khẩu</p>
                <input type="password" placeholder="Nhập mật khẩu để xác nhận" name="password2">
                <div>
                    <button type="submit" name="change_username_admin"><ion-icon name="cloud-upload-outline"></ion-icon> Cập nhật</button>
                </div>
            </div>
            <div class="change-password">
                <h2>Đổi mật khẩu</h2>
                <div class="form_error">
                    <?php if (isset($error3)): ?>
                            <span><?php echo $error3; ?></span>
                    <?php endif ?>
                </div>
                <p>Mật khẩu cũ</p>
                <input type="password" placeholder="Nhập mật khẩu" name="password_old">
                <p>Mật khẩu mới</p>
                <input type="password" placeholder="Nhập mật khẩu mới" name="password_new">
                <p>Nhập lại mật khẩu mới</p>
                <input type="password" placeholder="Nhập lại mật khẩu mới" name="repassword_new">
                <div>
                    <button type="submit" name="change_password_admin"><ion-icon name="cloud-upload-outline"></ion-icon> Cập nhật</button>
                </div>
            </div>
        </div>
</form>