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
            <a href="cart1.php"><img src="images/cart.png" class="cart-icon"></a>
            <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
        </div>
        
    <!---------- single product details ---------->
        <div class="small-container single-product">
            <div class="row">
                <div class="col-2">
                    <img src="images/product2.png" width="100%" id="ProductImg">
                    
                    <div class="small-img-row">
                        <div class="small-img-col">
                            <img src="images/product2.png" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/product2.png" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/product2.png" width="100%" class="small-img">
                        </div>
                        <div class="small-img-col">
                            <img src="images/product2.png" width="100%" class="small-img">
                        </div>
                    </div>
                    
                         
                    
                </div>
                <div class="col-2">
                    <p>Home / Cotton-saree</p>
                    <br>
                    <h1>yellow color cotton saree by our own production!</h1><br>
                    
                    <h4>&#8377;600</h4>
                    <input type="number" value="1"> 
                    <a href="cart1.php"class="btn">Add To Cart</a>
                    
                    <h3>Product Details <i class="fa fa-indent"></i></h3>
                    <br>
                    <p> Give us chance to develop our culture!! Red color saree full cotton with best quality with best rating.
                    with best price and best style...</p>
                </div>
            </div>
        </div>
        
    <!----------title--------->
        <div class="small-container">
            <div class="row row-2">
                <h2>Related Products</h2>
                <p>View More</p>
            </div>
        
        </div>
        
        
    <!----------products--------->
        <div class="small-container">
     
            <div class="row">
                <div class="col-4">
                    <a href="product-details.php"> <img src="images/Red_cotton.jpg"></a>
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
                    <img src="images/exclusive1.jpg">
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
        
        <!---------- js for product gallery ---------->
        
        <script>
            var ProductImg = document.getElementById("ProductImg");
            var SmallImg = document.getElementsByClassName("small-img");
            
            SmallImg[0].onclick = function()
            {
                ProductImg.src = SmallImg[0].src;
            }
            SmallImg[1].onclick = function()
            {
                ProductImg.src = SmallImg[1].src;
            }
            SmallImg[2].onclick = function()
            {
                ProductImg.src = SmallImg[2].src;
            }
            SmallImg[3].onclick = function()
            {
                ProductImg.src = SmallImg[3].src;
            }
            
        </script>
        
        
    </body>
</html>