
<?php
 

?>


<?php 
    include "../model/pdo.php";

    include "../model/lienhe.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    include "../model/binhluan.php";
    include "../model/cart.php";


    

    // Controller
   
    if(isset($_GET['act'])){
        

        $act = $_GET['act'];
        switch($act){

            case 'login_admin':
                session_start(); // Start the session at the beginning of your script.

                // include_once "./admin/login.php";

                if(isset($_POST['login_admin'])){
                    $user_admin=$_POST['user_admin'];
                    $pass_admin=$_POST['pass_admin'];
                    $role = "1";
                    $checkadmin= checkadmin($user_admin,$pass_admin, $role);
                    // $checkuser = checkuser($user,$pass);
                    if(is_array($checkadmin)){
                //   Session::init();
               
                $_SESSION['user'] = $user_admin; // Store the username in the session.

                        $thongbao = "Bạn đã đăng nhập thành công !";
                        // header('location: index.php');
                include "./header.php";

                    }else{
                    $thongbao = "Tài khoản không tồn tại !";
                    }
                    // insert_danhmuc($tenloai);
                    echo $thongbao;
                    
                // include "./header.php";
                if(isset($_POST['user_admin'])&&($_POST['pass_admin'])){
                // include "./header.php";

                }else {
                    // include_once "./admin/login.php";

                }
            }
                // echo $user_admin;
                // include_once "./admin/login.php";
                break;
                case 'home1':
                    // include "./header.php";
    
                    // Kiểm tra xem người dùng có click vào nút add hay không
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tenloai=$_POST['tenloai'];
                        insert_danhmuc($tenloai);
                        $thongbao="Thêm thành công";
                        
                    }

                    include "danhmuc/add.php";
                    break;
                
            case 'adddm':
                include "./header.php";

                // $_SESSION['user'] = $user_admin;
                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $tenloai=$_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao="Thêm thành công";
                    
                }
                
                include "danhmuc/add.php";
                break;
            
            case 'listdm':
                include "./header.php";

                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;

            case 'xoadm':
                include "./header.php";

                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc = loadall_danhmuc();
                include "danhmuc/list.php";
                break;
            
            case 'suadm':
                include "./header.php";

                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        $dm = loadone_danhmuc($_GET['id']);
                    }
                    include "danhmuc/update.php";
                    break;
            case 'updatedm':
                include "./header.php";

                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $tenloai=$_POST['tenloai'];
                    $id=$_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao="Cập nhật thành công thành công";
                    
                }
                $listdanhmuc = loadall_danhmuc();
                                include "./header.php";

                break;
            // Sản phẩm


            case 'addsp':
                include "./header.php";

                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $giasp_old=$_POST['giasp_old'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                         //quá là ok
                    }else{
                        // lỗi r
                    }

                    insert_sanpham($tensp,$giasp,$giasp_old,$hinh,$mota,$iddm);
                    $thongbao="Thêm thành công";
                    
                }
                $listdanhmuc = loadall_danhmuc();
                include "./sanpham/add.php";
                break;
            
            case 'listsp':
                include "./header.php";

                if(isset($_POST['listok'])&&($_POST['listok'])){
                    $kyw = $_POST['kyw'];
                    $iddm = $_POST['iddm'];
                }else{
                    $kyw = '';
                    $iddm = 0;
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham($kyw,$iddm);
                include "sanpham/list.php";
                break;

            case 'xoasp':
                include "./header.php";

                if(isset($_GET['id']) && ($_GET['id'] >0)){
                    delete_sanpham($_GET['id']);
                }
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;
            
            case 'suasp':
                include "./header.php";

                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $listdanhmuc = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;
            case 'updatesp':
                include "./header.php";

                // Kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id=$_POST['id'];
                    $iddm=$_POST['iddm'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $giasp_old=$_POST['giasp_old'];
                    $mota=$_POST['mota'];
                    $hinh=$_FILES['hinh']['name'];
                    $target_dir = "../upload/";
                    $target_file = $target_dir .basename($_FILES["hinh"]["name"]);
                    if(move_uploaded_file($_FILES["hinh"]["tmp_name"],$target_file)){
                         //quá là ok
                    }else{
                        // lỗi r
                    }
                    update_sanpham($id,$iddm,$tensp,$giasp,$giasp_old,$mota,$hinh);
                    $thongbao="Cập nhật thành công thành công";
                    
                }
                $listdanhmuc = loadall_danhmuc();
                $listsanpham = loadall_sanpham("",0);
                include "sanpham/list.php";
                break;

                // Tài khoản
                case 'addtk':
                include "./header.php";

                    // Kiểm tra xem người dùng có click vào nút add hay không
                    if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                        $tentk=$_POST['tenuser'];
                        $mktk=$_POST['mkuser'];
                        $emailtk=$_POST['emailuser'];
                        $addresstk=$_POST['aduser'];
                        $phonetk=$_POST['phoneuser'];
                        $role=$_POST['role'];
                        insert_taikhoan($emailtk,$tentk,$mktk,$addresstk,$phonetk,$role);
                        $thongbao="Thêm thành công";
                        
                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "./taikhoan/add.php";
                    break;
                case 'dskh':
                include "./header.php";
                    
                    $listtaikhoan = loadall_taikhoan();
                    // $listtaikhoan = loadall_taikhoan("",0);
                    include "taikhoan/list.php";
                    break;
               
                case 'xoatk':
                include "./header.php";

                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        delete_user($_GET['id']);
                    }
                    $listtaikhoan = loadall_taikhoan();
                    // $listtaikhoan = loadall_taikhoan("",0);
                    include "taikhoan/list.php";
                    break;
                case 'suatk':
                include "./header.php";

                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        $taikhoan = loadone_taikhoan($_GET['id']);
                    }
                    include "taikhoan/update.php";
                    break;
                case 'updatetk':
                include "./header.php";

                    // Kiểm tra xem người dùng có click vào nút add hay không
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $user=$_POST['user'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $tel=$_POST['tel'];
                        $role=$_POST['role'];
                        $id=$_POST['id'];
                        update_taikhoan_admin($id,$user,$pass,$email,$address,$tel,$role);
                        $thongbao="Cập nhật thành công thành công";    
                    }
                    $listtaikhoan = loadall_taikhoan();
                    include "taikhoan/list.php";
                    break;

                // Bình luận
                
                case 'dsbl':
                include "./header.php";
                    
                    $listbinhluan = loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'xoabl':
                include "./header.php";

                    if(isset($_GET['id']) && ($_GET['id'] >0)){        
                        delete_binhluan($_GET['id']);
                    }
                    $listbinhluan = loadall_binhluan(0);
                    include "binhluan/list.php";
                    break;
                case 'listb-luan':
                include "./header.php";

                    if(isset($_POST["kyw"]) && $_POST["kyw"] != ""){
                        $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                    }
                    $listbinhluan =  loadall_binhluan($kyw);
                    include "binhluan/list.php";
                    break;
            
                // Thống kê
                case 'thongke':
                include "./header.php";

                    $listthongke = loadall_thongke();
                    include "thongke/list.php";
                    break;
                // Biểu đồ 
                case 'bieudo':
                include "./header.php";

                    $listthongke = loadall_thongke();
                    include "thongke/bieudo.php";
                    break;
                // Bill
                case 'listbill':
                include "./header.php";

                    if(isset($_POST["kyw"]) && $_POST["kyw"] != ""){
                        $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                    }
                    $listbill =  loadall_bill($kyw,0);
                    include "bill/listbill.php";
                    break;
                case 'xoabill':
                include "./header.php";

                    if(isset($_GET['id']) && ($_GET['id'] >0)){                    
                        delete_bill($_GET['id']);
                    }
                    if(isset($_POST["kyw"]) && $_POST["kyw"] != ""){
                        $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                    }
                    $listbill =  loadall_bill($kyw,0);
                    include "bill/listbill.php";
                    break;
                
                case 'ctbill':
                include "./header.php";

                    if(isset($_POST["kyw"]) && $_POST["kyw"] != ""){
                        $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                    }
                    
                    if(isset($_GET['idbill']) && ($_GET['idbill'] >0)){
                        $listbill =  loadall_bill_ct($_GET['idbill']);
                    }
                    include "bill/chitietbill.php";
                    break;
                case 'xoacart':
                include "./header.php";

                    if(isset($_GET['id']) && ($_GET['id'] >0)){                    
                        delete_cart($_GET['id']);
                    }

                    if(isset($_POST["kyw"]) && $_POST["kyw"] != ""){
                        $kyw = $_POST['kyw'];
                    }else{
                        $kyw = "";
                    }

                    if(isset($_GET['idbill']) && ($_GET['idbill'] >0)){
                        $listbill =  loadall_bill_ct($_GET['idbill']);
                    }
                    include "bill/chitietbill.php";
                    
                    break;


                case 'suabill':
                include "./header.php";

                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        $bill = loadone_bill($_GET['id']);
                    }
                    include "bill/update.php";
                    break;
                case 'updatebill':
                include "./header.php";

                    // Kiểm tra xem người dùng có click vào nút add hay không
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $bill_stt=$_POST['bill_stt'];
                        $id=$_POST['id'];
                        update_bill($id,$bill_stt);
                        $thongbao="Cập nhật thành công thành công";    
                    }
                    $listbill =  loadall_bill_update();
                    include "bill/listbill.php";
                    break;
                // Liên hệ
                case 'listlh':
                include "./header.php";

                    $listlienhe = loadall_lienhe();
                    include 'baiviet/list.php';
                    break;
                case 'xoalh':
                include "./header.php";

                    if(isset($_GET['id']) && ($_GET['id'] >0)){
                        delete_lienhe($_GET['id']);
                    }
                    $listlienhe = loadall_lienhe();
                    include "baiviet/list.php";
                    break;
            default:
                include "home.php";
                // include "login.php";

                break;
            
        }
    }
    else{
        // include "home.php";    
            // include "./header.php";

        // include "danhmuc/add.php";
        // include "login.php";

    }

    include "footer.php"
?>