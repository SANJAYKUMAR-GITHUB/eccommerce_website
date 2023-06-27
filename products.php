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
                    
                    <li><a href="account.html">&nbsp;&nbsp;Logout &nbsp;</a></li>
                </ul>
            </nav>
            <a href="cart.html"><img src="images/cart.png" class="cart-icon"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        </div>
        
        <div class="small-container">
            
            <div class="row row-2">
                <h2>All Products</h2>
                <select>
                    <option>Default Shorting</option>
                    <option>Short by price</option>
                    <option>Short by popularity</option>
                    <option>Short by rating</option>
                    <option>Short by sale</option>
                </select>
            </div>
            
            
            
            
            <div class="row">
                <div class="col-4">
                    <a href="product-details.php"><img src="images/Red_cotton.jpg"></a>
                    <a href="product-details.php"><h4>Red saree</h4></a>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                    <div class="col-4">
                        <a href="Product-details1.php"><img src="images/product2.png"></a>
                    <h4>yellow saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                <div class="col-4">
                    <img src="images/product3.jfif">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                    
                <div class="col-4">
                    <img src="images/product4.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
            </div>
            
        <div class="row">
                <div class="col-4">
                    <img src="images/product1.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                    <div class="col-4">
                    <img src="images/product2.png">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                <div class="col-4">
                    <img src="images/product3.jfif">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                    
                <div class="col-4">
                    <img src="images/product4.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-4">
                    <img src="images/product1.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                    <div class="col-4">
                    <img src="images/product2.png">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                <div class="col-4">
                    <img src="images/product3.jfif">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                    
                <div class="col-4">
                    <img src="images/product4.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                    <div class="col-4">
                    <img src="images/product4.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                    <div class="col-4">
                    <img src="images/product4.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                    <div class="col-4">
                    <img src="images/product4.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                    <div class="col-4">
                    <img src="images/product4.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                    <div class="col-4">
                    <img src="images/product4.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                    <div class="col-4">
                    <img src="images/product4.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
                
                    <div class="col-4">
                    <img src="images/product4.webp">
                    <h4>Red saree</h4>
                    <div class="checked">
                    <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p>&#8377;600</p>
                </div>
            </div>
            
            <div class="page-btn">
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>&#8594;</span>
            </div>
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