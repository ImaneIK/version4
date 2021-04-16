
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
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;1,700&family=Ballet&display=swap" rel="stylesheet">


    <style type="text/css">
    	*{
    		padding: 0;
    		margin: 0;
    	}


    	body{
    		height: 100%;
    	}
    </style>
</head>






<body>
    <div class="header">
       
             <div class="navbar">
              <div class="logo">
           <a class = "logo" href="dashboard.php" style="font-family: serif; font-weight: bold; font-size: 40px;">E-BAZZAR</a> 
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





</body>


</html>

