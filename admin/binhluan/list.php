<div class="box-right">
    <div class="row frmtitle mb10">
        <h1>DANH SÁCH TÀI KHOẢN</h1>
    </div>
    <form action="index.php?act=listb-luan" method="post">
        <input class="tk-form" type="text" name="kyw" placeholder="Nhập mã sản phẩm">
        <input class="tk-form-bt" type="submit" name="listbl" value="Check">
    </form>
    <div class="row frmcontent">
        <!-- <form action="index.php?act=dsbl" .$id method="post"> -->
            <div class="row mb10 frmdsloai">
                <table>
                    <thead>
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Nội dung
                            <th>
                            <th>Mã tài khoản
                            <th>
                            <th>Mã sản phẩm
                            <th>
                            <th>Ngày bình luận
                            <th>Xoá
                            <th>Ẩn hiện bình luận
                            <th>         

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listbinhluan as $binhluan) {
                            extract($binhluan);
                            $xoabl = "index.php?act=xoabl&id=" . $id;
                            $anbl = "index.php?act=anbl&id=" . $id;

                            ?>
                            <tr>
                                <td><input type="checkbox" name="" id="hidden"></td>
                                <td>
                                    <?= $id ?>
                                </td>

                                <td>
                                    <?= $noidung ?>
                                </td>
                                <td></td>
                                <td>
                                    <?= $iduser ?>
                                </td>
                                <td></td>
                                <td>
                                    <?= $idpro ?>
                                </td>
                                <td></td>
                                <td>
                                    <?= $ngaybinhluan ?>
                                </td>
                                <td>
                                    <a href="<?= $xoabl ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><input
                                            type="button" value="Xóa"></a>
                                </td>
                                <td>
                                    <form action="<?= $anbl ?>" method="post">
                                        <select name="hidden" id="">
                                            <?php
                                            if ($hidden == 0) {
                                                echo '
                                                        
                                                    <option selected value="0">Ẩn</option>
                                                    <option value="1">Hiện</option>
                                                    
                                                    '
                                                    ?>
                                                <?php
                                            } else {
                                                echo '
                                                        <option value="0">Ẩn</option>
                                                        <option selected value="1">Hiện</option>
                                                        '
                                                    ?>

                                                <?php
                                            } ?>

                                        </select>

                                        <a href="<?= $anbl ?>"
                                        onclick="return confirm('Bạn có chắc chắn muốn <?php echo $hidden == 1 ? 'ẩn' : 'hiện' ?> bình luận')"><input type="submit"
                                                value="gửi"></a>
                                </td>
                                      </form>
            <td>

            </td>

            </tr>
            <?php
            ?>

        <?php } ?>


        </tbody>
        </table>
    </div>
    <div class="row mb10 mt10">
        <input type="button" class="mr5" value="Chọn tất cả">
        <input type="button" class="mr5" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục tất tả">
    </div>
    <!-- </form> -->
</div>
</div>
</div>