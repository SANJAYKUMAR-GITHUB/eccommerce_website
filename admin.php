<?php
$Username = $_POST['Username'];
$Email = $_POST['Email'];
$Password = $_POST['Password'];

if(!empty($Username) || !empty($Email) || !empty($Password))
{
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "saree_login_reg";
//create connection
$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

if(mysqli_connect_error()){
die('connect Error('.mysqli_connect_error().')'. mysqli_connect_error());

}
else{
$SELECT = "SELECT Email From register Where Email = ? Limit 1";
$INSERT = "INSERT Into register (Username,Email,Password) values(?,?,?)";

//prepare statement
$stmt = $conn->prepare($SELECT);
$stmt->bind_param("s", $Email);
$stmt->execute();
$stmt->bind_result($Email);
$stmt->store_result();
$rnum = $stmt->num_rows;

if($rnum==0){
$stmt->close();
$stmt = $conn->prepare($INSERT);
$stmt->bind_param("sss",$Username,$Email,$Password);
$stmt->execute();

   echo '<font color="#006400">yay!! your account created.<a href="account.html">click here</a> to account page to login in!</font>';
}
else {
echo '<center><font color="#FF0000">this account already created.<a href="account.html">click here</a> to register new account!!</font></center>';
}
$stmt->close();
$conn->close();
}
}
else{
echo "All field are required";
die();

}
?>