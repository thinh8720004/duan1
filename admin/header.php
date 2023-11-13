<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/83357b9d64.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</head>
<body>
    <div class="boxcenter">
        <!-- <div class="mb20 headeradmin dis-flex"> 
            <div> Trang quản trị</div>
            <div class="dis-flex">
                <i class="fa-regular fa-circle-user"></i>
                Xin chào: <div>Nguyễn Đoàn</div>
            </div>
        </div> -->
<?php 
                //   Session::init();
                ?>
                 <?php
                                    
                                    // $_SESSION['user'] = $user_admin;
                                    
                                        ?>
        <div class="box-main">

        <div class="box-left">
            <div class="inf-admin mb10"     >
            <i class="fa-regular fa-circle-user"></i>
                <div>
                    <div class="name-adm">Trang Quản Trị</div>
                    <div class="qtv-adm">Quản trị viên</div>
           
                </div>
            </div>

            <ul>
                <li>
                    <a href="index.php?act=adddm">
                        <i class="fa-brands fa-windows"></i>
                        Danh mục
                    </a>
                </li>
                <li>
                    <a href="index.php?act=addsp">
                        <i class="fa-solid fa-gift"></i>
                        Sản phẩm
                    </a>
                </li>
                <li>
                    <a href="index.php?act=addtk">
                        <i class="fa-regular fa-user"></i>
                        Tài khoản
                    </a>
                </li>
                <li>
                    <a href="index.php?act=dsbl">
                        <i class="fa-regular fa-message"></i>
                        Bình luận
                    </a>
                </li>
                <li>
                    <a href="index.php?act=listlh">
                    <i class="fa-regular fa-address-book"></i>
                    Liên Hệ
                    </a>
                </li>
                <li>
                    <a href="index.php?act=thongke">
                        <i class="fa-solid fa-bars"></i>
                        Thống kê
                    </a>
                </li>
                <li>
                    <a href="index.php?act=listbill">
                    <i class="fa-regular fa-bookmark"></i>
                        Danh sách đơn hàng
                    </a>
                </li>
                <li>
                    <a href="../index.php">
                        <i class="fa-solid fa-house-chimney"></i>
                        Về giao diện Trang chủ
                    </a>
                </li>
            </ul>
        </div>