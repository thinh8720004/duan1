<div class="row mb">
<div class="menu-main mb">
                    <?php include "view/menu-main.php"?>
                </div>
<div class="boxtrai1 mr">
    
    <div class="row mb">
             <?php
global $check;
?>
           
            <div class="boxtitle">
                <h1 class="spct text-size">ĐĂNG KÝ TÀI KHOẢN</h1>
            </div>
            <div class="boxcontent row formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb">
                        Email
                        <input type="email" name="email" id="email" required>

                    </div>
                    <div class="row mb">
                        Username
                        <input  oninput="return changeName()" type="text" name="user" required>
                        <strong class="user-error" style="color: red; display: none;"></strong>

                    </div>
                    <div class="row mb">
                        Password
                        <input oninput="return checkPass()" type="password" name="pass" required>
                     <strong class="pass-error" style="color: red; display: none;"></strong>


                    </div>

                    <div class="row mb">
                        Nhập lại Password

                     <input oninput="return CheckconfirmPass()" type="password" name="confirmpassword" placeholder="Nhập Lại Password">
        <strong class="confirm-password-error" style="color: red; display: none;"></strong>

                    </div>


                    <div class="row mb">
                        Address
                        <input type="text" name="address" required>
                    </div>
                    <div class="row mb">
                        Phone Number
                        <input oninput="return checktel()"   
                        style="width:100%;border: 1px solid #CCC;padding: 5px 10px; border-radius: 5px;" type="number" name="tel" required>
                    
                        <strong class="tel-error" style="color: red; display: none;"></strong>

                    </div>
                        <!-- Loại tài khoản O là tài khoản của khách-->
                        <input type="number" name="role" value="0" disabled hidden>
                  
                    <div class="row mb">
                        <input type="submit" value="Đăng ký" name="dangky">
                        <input type="reset" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php 
                    
                        if(isset($thongbao) && ($thongbao != "")){
                            echo $thongbao;
                        }


                    ?>
                </h2>
            </div>
        </div>
        
        
    </div>

    <div class="boxphai">
        <?php include "view/boxright.php"?>;
    </div>
    <script>

        function checktel(){
            var tel = document.getElementsByName('tel')[0];
            // var confirmPass = document.getElementsByName('confirm-password')[0];
            var telError = document.getElementsByClassName('tel-error')[0];
            if(tel.value === ''){
                <?php $check = 5 ?>
                tel.style.backgroundColor = 'orange';
                tel.style.color = 'black';
                // confirmPass.style.backgroundColor = 'orange';
                // confirmPass.style.color = 'white';
                telError.style.display = 'block';
                telError.innerText = 'Nhập Số Điện Thoại Không Được Bỏ Trống';
return false;
            } else if(tel.value.length <10 ||tel.value.length > 10 ){


                tel.style.backgroundColor = 'orange';
                tel.style.color = 'black';
                // confirmPass.style.backgroundColor = 'orange';
                // confirmPass.style.color = 'white';
                telError.style.display = 'block';
                telError.innerText = 'Số Điện Thoại Không Đúng';
return false;

            } else if(tel.value !==3) {
                tel.style.backgroundColor = 'green';
                tel.style.color = 'black';
                telError.style.display = 'none';
            }

        }
         function changeName(){
            var input = event.target;
            var userError = document.getElementsByClassName('user-error')[0];


            if(input.value === ''){
                input.style.backgroundColor = 'orange';
                input.style.color = 'white';
                userError.style.display = 'block';
                userError.innerText = 'Tên Tài Khoản Không Được Bỏ Trống';
return false;

            } else if(input.value.length <= 3){
                input.style.backgroundColor = 'orange';
                input.style.color = 'white';
                userError.style.display = 'block';
                userError.innerText = 'Tên Tài Khoản Không Dưới 3 Kí Tự';
return false;

            } else {
                input.style.backgroundColor = 'green';
                input.style.color = 'white';
                userError.style.display = 'none';
            }
        }
        function checkPass(){
            var pass = document.getElementsByName('pass')[0];
            // var confirmPass = document.getElementsByName('confirm-password')[0];
            var passError = document.getElementsByClassName('pass-error')[0];
            if(pass.value === ''){
                pass.style.backgroundColor = 'orange';
                pass.style.color = 'white';
                // confirmPass.style.backgroundColor = 'orange';
                // confirmPass.style.color = 'white';
                passError.style.display = 'block';
                passError.innerText = 'Nhập Mật Khẩu Không Được Bỏ Trống';
return false;

            } else if(pass.value.length <= 3){
                pass.style.backgroundColor = 'orange';
                pass.style.color = 'white';
                // confirmPass.style.backgroundColor = 'orange';
                // confirmPass.style.color = 'white';
                passError.style.display = 'block';
                passError.innerText = 'Mật Khẩu Không Dưới 3 Kí Tự';
return false;

            } else if(pass.value !==3) {
                pass.style.backgroundColor = 'green';
                pass.style.color = 'white';
                passError.style.display = 'none';
            }
        }
        function CheckconfirmPass() {
  var password = document.getElementsByName('pass')[0];
  var confirmPass = document.getElementsByName('confirmpassword')[0];
  var confirmpasswordError = document.getElementsByClassName('confirm-password-error')[0];

  if (password.value == confirmPass.value) {
    confirmPass.style.backgroundColor = 'green';
    confirmpasswordError.style.display = 'none';
    confirmPass.style.color = 'black';
  } else {
    confirmPass.style.backgroundColor = 'red';
    confirmpasswordError.style.display = 'block';
    confirmpasswordError.innerText = 'Không Khớp';
    confirmpasswordError.style.color = 'black'
return false;


  }
}

    </script>
</div>