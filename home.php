<?php
session_start();
require_once('../bdfilms/connexion.inc.php');
if (!isset($_SESSION['username'])) {
	header('location: login.php');
}

?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP2 de Valeriya Popenko</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> Welcome <?php echo $_SESSION['username']; ?> </a></li>
                            <li><a href="logout.php"><i class="fa fa-user"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="../accueil.html">MOVIE<span>Shop</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart - <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../accueil.html">Home</a></li>
                        <li><a href="listfilm.php">CATALOGUE</a></li>
                        <li><a href="films.php">Add film</a></li>
                        <li><a href="listfilm.php">Modify film</a></li>
                        <li><a href="listfilm.php">Delete film</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
  
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">CATALOQUE</h2>


        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../img/El_Camino.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="cart.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                
                                <h2>El camino a breaking bad movie (blu-ray)</h2>
                                <div class="product-carousel-price">
                                    <ins>$19.90</ins><del>$35.00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../img/Jaws.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="cart.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                
                                <h2>Jaws (3 movie collection) (blu-ray)</h2>
                                <div class="product-carousel-price">
                                    <ins>$23.00</ins><del>$45.00</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../img/Vikings.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="cart.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                
                                <h2>Vikings (season 6 part 1)</h2>

                                <div class="product-carousel-price">
                                    <ins>$45.00</ins> <del>$55.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../img/Outlander.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="cart.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                
                                <h2>Outlander (season 5)</h2>

                                <div class="product-carousel-price">
                                    <ins>$32.00</ins> <del>$43.00</del>
                                </div>                            
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../img/Outlander4.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="cart.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                
                                <h2>Outlander (season 4)</h2>

                                <div class="product-carousel-price">
                                    <ins>$12.00</ins> <del>$20.00</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../img/Outlander3.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="cart.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                
                                <h2>Outlander (season 3)</h2>

                                <div class="product-carousel-price">
                                    <ins>$12.00</ins> <del>$20.00</del>
                                </div>                            
                            </div>
                                <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../img/Outlander2.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="cart.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                
                                <h2>Outlander (season 2)</h2>

                                <div class="product-carousel-price">
                                    <ins>$12.00</ins> <del>$20.00</del>
                                </div>                            
                            </div>
                                <div class="single-product">
                                <div class="product-f-image">
                                    <img src="../img/Outlander1.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="cart.php" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                    </div>
                                </div>
                                
                                <h2>Outlander (season 1)</h2>

                                <div class="product-carousel-price">
                                    <ins>$12.00</ins> <del>$20.00</del>
                                </div>                            
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    

 
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>e<span>Electronics</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Drame</a></li>
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Suspense</a></li>
                            <li><a href="#">Historique</a></li>
                        </ul>                        
                    </div>
                </div>
                

            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
        		 <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="../js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="../js/main.js"></script>
  </body>
</html>