<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saree | Ecommerce Website Desing</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
    <body>
        
        <div class="header">
        <div class="container">
        <div class="navbar">
        <div class="logo">
            <a href="home.php"><img src="images/logo.png" width="125px"></a>
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
            <a href="cart.php"><img src="images/cart.png" class="cart-icon"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">  
        </div>
            <div class="row">
                <div class="col-2">
                    <h1>Give Your Workout<br>A New Style!</h1>
                    <p>Elegance never goes out of style. Beauty in simplicity<br>No Indian girl can ever say no to the magic of saree! <br>Reigning my love for the timeless classic!</p>
                    <a href="products.php"class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.png">
                </div>
            </div>
        </div>
    </div>
        <!--------- featured categories ---------->
        <div class="categories">
            <div class="small-container">
            <div class="row">
                <div class ="col-3">
                    <img src="images/category1.jpg">
                </div>
                <div class ="col-3">
                    <img src="images/category2.jpeg">
                </div>
                <div class ="col-3">
                    <img src="images/category3.jpg">
                </div>
            </div>
        </div>
        </div>
        <!--------- featured products ---------->
        <div class="small-container">
            <h2 class="title">Featured Products</h2>
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
                    <p>&#8377;1000</p>
                </div>
                
                    <div class="col-4">
                        <a href="Product-details1.php"><img src="images/product2.png"></a>
                    <a href="product-details.php"><h4>yellow saree</h4></a>
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
            
            <h2 class="title">Latest Products</h2>
            
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
        </div>
        <!--------- offer ---------->
        <div class="offer">
            <div class="small-conatiner">
                <div class="row">
                    <div class="col-2">
                        <img src="images/exclusive1.jpg" class="offer-img">
                    </div>
                    <div class="col-2">
                        <p>Exclusively Available in Sareestore<br></p>
                        <h1>Stylish saree! beast quality!!!!<br></h1>
                        <small>If you aim at nothing, you will hit it every time.” “For every sale you miss because you're too enthusiastic, you will miss a hundred because you're not enthusiastic enough.”</small><br>
                        <a href="" class="btn">Buy Now &#8594;</a>
                    </div>
                </div>
            </div>
        </div>
        
<!---------- testimonial --------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p> “Every choice you make has an end result.” "Your attitude, not your aptitude, will determine your altitude." </p>
                    <div class="checked">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <img src="images/user-3.jfif">
                    <h3> samutha</h3>
                </div>
                
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p> “Every choice you make has an end result.” "Your attitude, not your aptitude, will determine your altitude." </p>
                    <div class="checked">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <img src="images/user-3.jfif">
                    <h3>Maha</h3>
                </div>
                
                <div class="col-3">
                    <i class="fa fa-quote-left"></i>
                    <p> “Every choice you make has an end result.” "Your attitude, not your aptitude, will determine your altitude." </p>
                    <div class="checked">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <img src="images/user-3.jfif">
                    <h3> sofy </h3>
                </div>
                
            </div>
        </div>
        </div>
        
<!---------- brands ----------->
        <div class="brands">
            <div class="small-container">
                <div class="row">
                <div class="col-5">
                        <img src="images/logo1.png">
                </div>
                <div class="col-5">
                        <img src="images/logo1.png">
                </div>
                <div class="col-5">
                        <img src="images/logo1.png">
                </div>
                <div class="col-5">
                        <img src="images/logo1.png">
                </div>
                <div class="col-5">
                        <img src="images/logo1.png">
                </div>
                </div>
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