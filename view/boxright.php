<div class="codinh">
    <div class="row mt3 mb dichuyen">
        <div class="boxtitle" style="color: #772f2d;font-weight: bold;font-size: 1.4vw;text-align: center;">TÀI KHOẢN</div>
        <div class="boxcontent formtaikhoan">
            <?php 
                if(isset($_SESSION['user'])){
                    extract($_SESSION['user']);
            ?>
            <div class="row mb10">
            <span style="color:gray">Xin chào </span>
                    <span style="color:red ;font-size: 1vw;"><?=$user?></span>
                </div>
                
                <div class="row mb10 tk-right">
                    <li><a href="index.php?act=mybill">> Đơn hàng của tôi</a></li>
                    <li><a href="index.php?act=quenmk">> Quên mật khẩu</a></li>
                    <li><a href="index.php?act=edit_taikhoan">> Cập nhật tài khoản</a></li>
                    <?php if($role == 1){ ?>
                    <li><a href="admin/index.php?act=bieudo">> Đăng nhập Admin</a></li>
                    <?php } ?>
                    <li><a href="index.php?act=thoat">> Đăng xuất</a></li>
                </div>
            <?php
                }else{

                
            ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="row mb10">
                    <div>Tên đăng nhập</div>
                    <input type="text" name="user" >
                </div>
                
                <div class="row mb10">
                    <div>Mật khẩu</div>
                    <input type="password" name="pass" ><br>
                </div>

                <div class="row mb10">
                    <input type="checkbox"> Ghi nhớ tài khoản?
                </div>
                <div class="row mb10">
                    <input type="submit" value="Đăng nhập" name="dangnhap" id="">
                </div>
                
            </form>
            <div class="q-dk">
                <li><a href="index.php?act=quenmk">> Quên mật khẩu</a></li>
                <li><a href="index.php?act=dangky">> Đăng ký thành viên</a></li>
            </div>
            
            <?php } ?>
        </div>
    </div>
</div>
                