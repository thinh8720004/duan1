<?php 
    function loadall_taikhoan(){
        $sql = "select * from taikhoan order by id";
        $listtaikhoan =pdo_query($sql);
        return $listtaikhoan;
    }
    function loadone_taikhoan($id){
        $sql = "select * from taikhoan where id =".$id;
        $taikhoan=pdo_query_one($sql);
        return $taikhoan;
    }
    function insert_taikhoan($email,$user,$pass,$address,$tel,$role){
        $sql="insert into taikhoan(email,user,pass,address,tel,role) values('$email','$user','$pass','$address','$tel','$role')";
        pdo_execute($sql);
    }

    function checkuser($user,$pass){
        $sql = "select * from taikhoan where user ='".$user."' and pass = '".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql = "select * from taikhoan where email ='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }

    function update_taikhoan($id,$user,$pass,$email,$address,$tel){
        $sql="update taikhoan set user = '".$user."', pass = '".$pass."',email = '".$email."', address = '".$address."', tel = '".$tel."' where id =".$id; 
        pdo_execute($sql);
    }
    function update_taikhoan_admin($id,$user,$pass,$email,$address,$tel,$role){
        $sql="update taikhoan set user = '".$user."', pass = '".$pass."',email = '".$email."', address = '".$address."', tel = '".$tel."', role = '".$role."' where id =".$id; 
        pdo_execute($sql);
    }

    function delete_user($id){
        $sql = "delete from taikhoan where id =".$id;
        pdo_execute($sql);
    }
    //  function getLogin($tab_admin, $email, $password){
    //     $sql = "SELECT * FROM $tab_admin WHERE admin_email=? AND admin_password=? ";
    //     return $this->db->selectAccount($sql, $email, $password);
    // }
    function  checkadmin($user_admin,$pass_admin, $role)
    {
        $sql = "SELECT * FROM taikhoan WHERE user = '".$user_admin."' AND pass = '".$pass_admin."' AND role = '".$role."'";

        // $sql = "select * from taikhoan where user ='".$user_admin."' and pass = '".$user_admin."'  role ='".$role."'";
        $check=pdo_query_one($sql);
        return $check;
    }
    function update_taikhoan_qmk($email,$matkhaumoi){
        // $sql="update taikhoan set  pass = '".$matkhaumoi."' where email ='".$email; 
        $sql = "update taikhoan set `pass` = '" . $matkhaumoi . "' where email = '" . $email . "'";

        pdo_execute($sql);
    }
    function guimail($email,$matkhaumoi){
        require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'phanq3379@gmail.com'; // SMTP username
        $mail->Password = 'rijyaeebafsficmy';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('phanq3379@gmail.com','Nhóm6'); 
        $mail->addAddress($email); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'mật khẩu mới';
        $noidungthu = "mật khẩu mới là {$matkhaumoi}"; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
    }
    

?>