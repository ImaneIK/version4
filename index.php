
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-BAZZAR | Ecommerce Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;1,700&family=Ballet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>






<body>
    <div class="header">
       
            <div class="navbar">
              <div class="logo">
          <a class = "logo" href="index.php"><img src="img/logo1.png" width="200px"></a> 
        </div>
                <nav>
        
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="Account-page1.php ">Contact</a></li>
                       
                        
                    </ul>
                    
                </nav>
              
            </div>







             <div class="container">
            <!-- image slider here -->
            <div class="row">
                <div class="col-2">
                    <h1>  -Index page- <br> A Journey to discover the treasures of a deep rooted culture...
                        <br>Morocco</h1>
                    <P>E-BAZZAR<br>An online shopping plateform that provides<br> traditional natural and 100% original Products from all over Morocco....</P>
                    
                  <!--  <a href="" class="btn">Let's dive in &#8594; </a>-->
                </div>
                
                <div class="col-2">
                   <img src="img/Some Pretty Thing.png" alt=""> 
                </div> 

            </div>
        </div>
    </div>










    <!-------featured categories---->
    <div class="categories">
        <div class="row">
            <div class="small-container">
              <h2 class="title">Categories</h2>
                <div id="CAT-ROw">
                <div class="col-3">
                    <h4> Clothing</h4>
                    <img src="img/clothing.jpg" alt="">
                </div>
                <div class="col-3">
                    <h4>Accessories</h4>
                    <img src="img/accessories.jpg" alt="">
                </div>
                <div class="col-3">
                    <h4>Decor</h4>
                    <img src="img/decor.jpg" alt="">
                </div>
                 <div class="col-3">
                    <h4>Cosmetics</h4>
                    <img src="img/cosmetic.jpg" alt="">
                </div>
                 <div class="col-3">
                    <h4>Nutrition</h4>
                    <img src="img/nutrition.jpg" alt="">
                </div>
            </div>
            </div>
        </div>
    </div>









    <!----featured products-->
    <div class="small-container">
        <h2 class="title">Featured products</h2>
        <div class="row">
            <div class="col-4">
                <img src="img/Amlou Pistache 190g.jpg" >
                <h4 style="text-align: center;">Amlou Pistache 190g</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>60 DH</p>
            </div>
            <div class="col-4">
                
                <img src="img/Barebones Seagrass Market Tote with Linen Liner - Machine Washable, Long Over-the-Shoulder Straps.jpg" >
                <h4 style="text-align: center;">Navy Blue Patterned Planter Ethical African Sisal Storage Basket</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>75 DH</p>
            </div>
            <div class="col-4">
                <img src="img/Lanterns.jpg" alt="">
                <h4 style="text-align: center;">Silver hand-made lamp</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>55 DH</p>
            </div>
            <div class="col-4">
                <img src="img/Moroccan Berber Tribal Silver Cuff.jpg" alt="">
                <h4 style="text-align: center;">Moroccan Berber Tribal Silver Cuff</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>100 DH</p>
            </div>
        </div>











        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-1">
                <img src="img/Organic-Argan-Oil.jpg" >
                <h4 style="text-align: center;">Organic Argan oil</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>200 DH</p>
            </div>
            <div class="col-1">
                <img src="img/Silver Earing.jpg" >
                <h4 style="text-align: center;">Silver Earing</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>2000 DH</p>
            </div>
            <div class="col-1">
                <img src="img/Floral Dress.jpg" alt="">
                <h4 style="text-align: center;">Floral Dress</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>890 DH</p>
            </div>
            <div class="col-1">
                <img src="img/Babouch Slippers.jpg" alt="">
                <h4 style="text-align: center;">Babouch Slippers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>200 DH</p>
            </div>
            <div class="col-1">
                <img src="img/tea-glass.png" alt="">
                <h4 style="text-align: center;">Tea Glasses</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>150 DH</p>
            </div>
            <div class="col-1">
                <img src="img/Moroccan Glass Pendant Lantern.png" alt="">
                <h4 style="text-align: center;">Moroccan Glass Pendant Lantern</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>5 DH</p>
            </div>
            <div class="col-1">
                <img src="img/Seagrass & Cotton Belly Basket White_Natural.jpg" alt="">
                <h4 style="text-align: center;">Belly Basket</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>59 DH</p>
            </div>
            <div class="col-1">
                <img src="img/olive oil.png" alt="">
                <h4 style="text-align: center;">Olive Oil 500ml</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>70 DH</p>
            </div>
        </div>
    </div>














    <!-------offer------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="offer-image">
                <img src="img/Moroccan Lantern- Handcrafted - Turkish Lamp-Attractive Design- Hanging Home Decor Lamp - Black_Gold.jpg" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusively Avaible on E-Bazzar </p>
                <h1> <b>Moroccan ceiling Lamp</b></h1>
                    <p>ceiling lamp ornate pendant lamp made 
                        of solid brass in a timeless, elegant design. The hanging lamp adapts to every living style 
                        due to its simple elegance and can be combined not only with ornate furniture but also particularly with modern interiors.
                    </p>
                <a href="" class="btn">buy me now &#8594;</a>   
            </div>
        </div>
    </div>
</div>





   <div class="testimonials">
        <div class="small-container">
          <h2 class="title">Testimonials</h2>
            <div class="row">
                    <div class="col-5">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p>“You just keep pushing yourself harder and harder to achieve more and more - 
                            I don't think it's ever quite as glamorous as it appears on the outside.”</p> <br>
                            <div class="rating-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                           <img src="img/user-1.png" class="user">
                           <h3> Sean Parker</h3>
                    </div>
                    <div class="col-5">
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                        <p>“Every country I would go to, even if it was just on a modeling job, I would go to their markets. I would be in the spice markets during my off time and just come back with a suitcase full of stuff that I really wanted to try.” </p> <br>
                            <div class="rating-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                           <img src="img/user-2.png" class="user">
                           <h3 style=" margin-left: 5.5vw;">Padma Lakshmi</h3>
                    </div>
                    <div class="col-5">
                        <i class="fa fa-quote-left" aria-hidden="true "></i>
                        <p>“There's just really interesting facets of culture just swirling in Morocco. They all have slightly different colours, so it's just an inspiring place to be.”</p> <br>
                            <div class="rating-1">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                           <img src="img/user-3.png" class="user">
                           <h3>Mark Foster</h3>
                    </div>
            </div>
        </div>
   </div>





   <div class="brands">
        <div class="small-container">
            <div class="row">
                  <div class="col-6">
                        <img src="img/logo-coca-cola.png" alt="">
                  </div>
                  <div class="col-6">
                         <img src="img/logo-godrej.png" alt="">
                  </div>
                  <div class="col-6">
                         <img src="img/logo-paypal.png" alt="">
                  </div>
                  <div class="col-6">
                         <img src="img/logo-philips.png" alt="">
                  </div>
            </div>
        </div>
   </div>
<!-- footer -->
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




