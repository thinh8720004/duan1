<div class="row">
    <div class="menu-main mb">
        <?php include "menu-main.php"?>
        <?php include "view/menu-main.php"?>

    </div>
    <div class="boxtitle">LIÊN HỆ</div>
    <div class="boxcontent row">
        <main style="display: grid;
    grid-template-columns: 30% auto;
    grid-gap: 10px;
        "
        >
        <section class="contact">
            <p><strong>DNS</strong> chuyên cung cấp các sản phẩm thiết bị điện tử gúa rẻ</p>
            <!-- <p>Địa chỉ: 18 Hoàng Cầu, Đống Đa, Hà Nội</p>
            <p>Điện thoại: 036.37.38.586</p>
            <p>Email : dhpd-duan-bandoannhanh@gmail.com</p> -->
        </section>
        <section class="contact-form">
            <form action="index.php?act=addlh" method="post">
                <h1 style="font-size:30px;
                margin-bottom:20px;">Liên hệ với chúng tôi</h1>
                <div class="row-form">
                    <div>
                    <label for="">Họ và tên</label>
                    <input type="text" name="name" placeholder="Nhập họ và tên">
                    </div>
                    <div>
                    <label for="">Email</label>
                    <input type="text" name="email" placeholder="Nhập địa chỉ email">
                    </div>
                    <div>
                    <label for="">Điện Thoại</label>
                    <input type="number" placeholder="Nhập số điện thoại" name="sdt">
                    </div>
                </div>
                <label for="">Nội dung</label><textarea name="noidung" id="" cols="30" rows="10"></textarea>
                <button name="themmoi-lh">GỬI TIN NHẮN</button>
            </form>
        </section>
        </main>
    </div>
</div>