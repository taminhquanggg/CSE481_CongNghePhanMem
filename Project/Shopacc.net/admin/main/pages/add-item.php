
<div class="header">
        <p><ion-icon name="bag-add-outline"></ion-icon>Thêm sản phẩm</p>
</div>

<form method="post" enctype="multipart/form-data">
    <div class="content">
        <div class="add-item-box">
            <div class="header-box">
                <h2><ion-icon name="add-circle-outline"></ion-icon> Thêm một sản phẩm</h2>
            </div>
            <div class="content-box">
                <?php if(isset($error_add)) { ?>
                    <p style="color: red;"><?php echo $error_add ?></p>
                <?php } ?>
                <div class="content-nav">
                    <p>Ảnh bìa: </p>
                    <input type="file" name="imageCover" >
                </div>
                <div class="content-nav">
                    <p>Giá: </p>
                    <input type="text" name="price" placeholder="Nhập giá" >
                    <p>VNĐ</p>
                </div>
                <div class="content-nav">
                    <p>Rank: </p>
                    <select name="rank">
                        <option value="Unrank">Unrank</option>
                        <option value="Sắt I">Sắt I</option>
                        <option value="Sắt II">Sắt II</option>
                        <option value="Sắt III">Sắt III</option>
                        <option value="Sắt IV">Sắt IV</option>
                        <option value="Đồng I">Đồng I</option>
                        <option value="Đồng II">Đồng II</option>
                        <option value="Đồng III">Đồng III</option>
                        <option value="Đồng IV">Đồng IV</option>
                        <option value="Bạc I">Bạc I</option>
                        <option value="Bạc II">Bạc II</option>
                        <option value="Bạc III">Bạc III</option>
                        <option value="Bạc IV">Bạc IV</option>
                        <option value="Vàng I">Vàng I</option>
                        <option value="Vàng II">Vàng II</option>
                        <option value="Vàng III">Vàng III</option>
                        <option value="Vàng IV">Vàng IV</option>
                        <option value="Bạch kim I">Bạch kim I</option>
                        <option value="Bạch kim II">Bạch kim II</option>
                        <option value="Bạch kim III">Bạch kim III</option>
                        <option value="Bạch kim IV">Bạch kim IV</option>
                        <option value="Kim cương I">Kim cương I</option>
                        <option value="Kim cương II">Kim cương II</option>
                        <option value="Kim cương III">Kim cương III</option>
                        <option value="Kim cương IV">Kim cương IV</option>
                        <option value="Cao thủ">Cao thủ</option>
                        <option value="Đại cao thủ">Đại cao thủ</option>
                        <option value="Thách đấu">Thách đấu</option>
                    </select>
                </div>
                <div class="content-nav">
                    <p>Tướng: </p>
                    <input type="text" name="agent" placeholder="Nhập số lượng tướng" >
                    <input type="file" name="imageAgent[]" multiple="multiple" >
                </div>
                <div class="content-nav">
                    <p>Trang phục: </p>
                    <input type="text" name="skin" placeholder="Nhập số lượng trang phục" >
                    <input type="file" name="imageSkin[]" multiple="multiple" >
                </div>
                <div class="content-nav">
                    <p>Thông tin thêm: </p>
                    <input type="file" name="imageAbout[]" multiple="multiple" >
                </div>
                <div class="content-nav">
                    <p>Thông tin liên kết: </p>
                    <select name="link">
                        <option value="Trắng">Trắng</option>
                        <option value="SĐT">SĐT</option>
                        <option value="Gmail">Gmail</option>
                    </select>
                </div>

                <div class="content-nav">
                    <p>Tài khoản: </p>
                    <input type="text" name="username" placeholder="Nhập tài khoản" >
                </div>

                <div class="content-nav">
                    <p>Mật khẩu: </p>
                    <input type="password" name="password" placeholder="Nhập mật khẩu" >
                </div>

                <div class="content-nav content-footer">
                    <button type="submit" name="addItem"><ion-icon name="add-circle-outline"></ion-icon> Thêm</button>
                    <button type="submit"><ion-icon name="close-outline"></ion-icon> Hủy</button>
                </div>
            </div>
        </div>
    </div>
</form>