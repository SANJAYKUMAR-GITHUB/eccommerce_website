  <?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'saree_login_reg');

$Username = $_SESSION['Username'];
$Email = $_SESSION['Email'];

$sql = "INSERT INTO order_details (username,Email,product_name)
VALUES ('$Username', '$Email', 'Red saree')";

if ($con->query($sql) === TRUE) {
    echo"
   <script> 
   alert('order placed successfully');
   window.location.href='./order.php'
   </script> ";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }
  
  $con->close();
  
  ?>
  <script type="text/javascript">  function preventBack() {window.history.forward();}  setTimeout("preventBack()", 0);  window.onunload = function () {null};</script>