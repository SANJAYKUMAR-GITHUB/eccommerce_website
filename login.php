<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'saree_login_reg');

$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

$Username = stripcslashes($Username);
$Email = stripcslashes($Email);
$Password = stripcslashes($Password);

$s = "select * from register where Username = '$Username' && Email = '$Email' && Password = '$Password'";

$result = mysqli_query($con, $s);
$rnum = mysqli_num_rows($result);

if($rnum == 1){
    $_SESSION['Username']=$Username;
    $_SESSION['Email']=$Email;
   echo"
   <script> 
   alert('Login successfully');
   window.location.href='./home.php'
   </script> ";
} 
else{
    echo"
    <script>
    alert('Invalid username / Email / password');
    window.location.href='./account.html';
    </script>
    ";
}
?>