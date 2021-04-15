<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products-delails-page E_bazzar| Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;1,700&family=Ballet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="P-D-page">

	<div class="navbar">
              <div class="logo">
					<a class = "logo" href="home.html"><img src="img/logo1.png" width="200px"></a> 
				</div>
                <nav>
				
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="Account-page.php">Contact</a></li>
                        <li><a href="#">Account</a></li>
                        
                    </ul>
                    
                </nav>
              <a href="Cart.php"><img src="img/cart.png" width="29px" height="29px" class="cart"></a>
               
            </div>
        <div class="container">
             
        </div>
        <!---single product details---->
        <div class="small-container single-product">
          <div class="row P-D">
            <div class="P-D col-2">
               <img src="img/caf-Noir-1.png" width="100%" height="100%" id="ProductImg" >
               <div class="small-img-row">
                   <div class="small-img-col">
                       <img src="img/caf-Noir-2.png" width="100%" height="" class="Small-img">
                   </div>
                   <div class="small-img-col">
                       <img src="img/caf-Noir-3.png"  width="100%" class="Small-img">
                   </div>
               </div>
            </div>
            
            <div class="P-D col-2">
                <div class="text">Home / Gandoora  </div>    
                     <h2 class="P-D-h">Black caftan</h2>
                     <h4 > 105 DH</h4>
                     <select>
                        <option>Select size</option>
                        <option>Xll</option>
                        <option>Xl</option>
                        <option>M</option>
                        <option>S</option>
                     </select>
                     <input type="number" value="1">
                     <a href="" class="btn"> Add to Cart</a>
                     <!-- <h3>Product Details   <i class="fa fa-indent"></i></h3> -->
                     <div class="text"> This Moroccan caftan is so cozy,
                        it's for wearing dearing during
                     the weekend,or when youjust want to relax at home. </div>
            </div>
         </div>
       </div>
        <!-- title---->
        <div class="small-container">
           <div class="row row-2">
                <h2>Related Products</h2>
                <p>View More</p>
                
           </div>
        </div>
        <!---- product----->

        <div class="small-container">
        <div class="row">
            <div class="col-4">
                <img src="img/caftoun.jpg" >
                <h4>white Caftan</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>1000DH</p>
            </div>
            <div class="col-4">
                <img src="img/caftan.png" alt="">
                <h4>Pink Caftan</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>3000DH</p>
            </div>
            <div class="col-4">
                <img src="img/tazrtitbj.jpg" alt="">
                <h4>Tazerzit</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>600DH</p>
            </div>
           
           
        </div>
    </div>
       <footer>
         <div class="small-container-f">
              <div class="row">
                  <div class="footer-col" >
                      <h2 style="text-align: center; margin-top: 40px;">Download our app</h2>
                      <p class="footer-p" style="text-align: center; margin-top: 5px;">Download our app on Play Store and Google Play </p>
                      <img src="img/app-store.png" class="footer-img" >
                      <img src="img/play.png" class="footer-img">
                  </div>
                  <div class="footer-col">
                      <br> <br>
                   <h1 style="font-family: serif; font-size: 60px; color: rgb(204, 201, 201);">E-BAZZAR</h1>
                    <p class="footer-p">our purpose is to provide sustainable and astetic products<br> for nature lovers worldwide</p>
                </div>
                <div class="follow">
                    <br>
                    <br>
                    <h2 style="text-align: center;">Follow us</h2>
                    <img class="footer-p" src="img/facebook_white.png">
                    <img class="footer-p" src="img/twitter_white.png">
                    <img class="footer-p" src="img/instagram_white.png">
                </div>
              </div>
               <div class="copyright text-center bg-dark text-white py-2" style="margin: 10px;">
                    <p class="footer-Copyright-msg">&copy; Copyrights 2021. Desing By E-Bazzar</p>
                </div>
         </div>
    </footer>
   
        </body>
</html>