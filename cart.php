<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - Saree</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        
    
      
        <div class="container">
        <div class="navbar">
        <div class="logo">
            <img src="images/logo.png" width="125px">
            </div>
            <nav>
                <ul id="menuitems">
                    <li> <a href="home.php">Home</a></li>
                    <li> <a href="products.php">Products</a></li>
                    <li> <a href="">About</a></li>
                    <li> <a href="">Contact</a></li>
                     <?php 
session_start();
echo "welcome!!  &nbsp;" .$_SESSION['Username'];
?>
                </ul>
            </nav>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        </div>    
        
<!---------- cart items details --------->
        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td> 
                         <div class="cart-info">
                            <img src="images/Red_cotton.jpg">
                            <div>
                                <p>Red saree yellow doted</p>
                            <small>price:&#8377;1000</small>
                                <br>
                                <a href="product-details.php">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td>&#8377;1000</td>
                </tr>
            </table>
            
            <div class="total-price">
            
                 <table> 
                    <tr>
                        <td>Subtotal</td>
                        <td>&#8377;1000</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>&#8377;30</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>&#8377;1030</td>
                    </tr>
                </table>
                                    
            </div>
            <center>
            <a href="orderdet.php"class="btn">buy now</a>
                </center>
            
        </div>
        
    
<!---------- footer --------->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h3>Download our App</h3>
                        <p>Download App for Android and ios mobile phone.</p>
                        <div class="app-logo">
                        <img src="images/app-logo.png">
                        <img src="images/ios-log.png">
                     </div>
                    </div>
                    
                        <div class="footer-col-2">
                            <img src="images/logo2.png">
                            <p>Our purpose is to develop Our culture!! we have pleasure to save that culture to make our nation to vintage!</p>
                </div>
                    <div class="footer-col-3">
                        <h3>Useful Links</h3>
                        <ul>
                            <li>Coupons</li>
                            <li>Blog Post</li>
                            <li>Return Policy</li>
                            <li>Join Affiliate</li>
                        </ul>
                    </div>
                    
                    <div class="footer-col-4">
                        <h3>Follow Us</h3>
                        <ul>
                            <li>Facebook</li>
                            <li>Twiete</li>
                            <li>Instagram</li>
                            <li>Youtube</li>
                        </ul>
                    </div>   
            </div>
                <hr>
                <p class="copyright">Coypyright 2020 </p>
            </div>
        </div>
        
<!---------- js for toogle menu--------->
        <script type="text/javascript">  function preventBack() {window.history.forward();}  setTimeout("preventBack()", 0);  window.onunload = function () {null};</script>
        <script>
            var menuitems = document.getElementById("menuitems");
            
            menuitems.style.maxHeight = "0px";
            
            function menutoggle(){
                
                if(menuitems.style.maxHeight == "0px")
                    {
                        menuitems.style.maxHeight = "200px";
                    }
                else{
                    menuitems.style.maxHeight = "0px";
                }
        
            
            }
        </script>
    </body>
</html>