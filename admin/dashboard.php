
<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-BAZZAR | Dashboard</title>
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
          <a class = "logo" href="dashboard.php"><img src="img/logo1.png" width="200px"></a> 
        </div>
                <nav>
        
                    <ul>
                         <li><a href="dashboard.php">Home</a></li>
                        <li><a href="additems.php">upload items</a></li>
                        <li><a href="items.php">item management</a></li>
                        <li><a href="customers.php ">customer management</a></li>
                        <li><a href="orderdetails.php">order details</a></li>
                        <li><a href="logout.php">logout</a></li>
                        
                    </ul>
                    
                </nav>
              
            </div>







             <div class="container">
            <!-- image slider here -->
            <div class="row">
                <div class="col-2">
                    <h1>  #Admin page# <br> A Journey to disecover the treasures of a deep rooted culture...
                        <br>Morocco</h1>
                    <P>E-BAZZAR<br>An online shopping plateform that provides<br> traditional natural and 100% original oroducts from all over Morocco....</P>
                   
                       
                  <!--  <a href="" class="btn">Let's dive in &#8594; </a>-->
                </div>
                
                <div class="col-2">
                   <!-- <img src="img/Some Pretty Thing.png" alt=""> -->
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

