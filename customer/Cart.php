<?php
session_start();

if(!$_SESSION['user_email'])
{

    header("Location: home.php");
    
}

?>

<?php
 include("config.php");
 extract($_SESSION); 
        $stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_email =:user_email');
        $stmt_edit->execute(array(':user_email'=>$user_email));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
        
        ?>
        
        <?php
 include("config.php");
        $stmt_edit = $DB_con->prepare("select sum(order_total) as total from orderdetails where user_id=:user_id and order_status='Ordered'");
        $stmt_edit->execute(array(':user_id'=>$user_id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
        
        ?>
        
        <?php

    require_once 'config.php';
    
    if(isset($_GET['delete_id']))
    {
        
        
        
    
        $stmt_delete = $DB_con->prepare('DELETE FROM orderdetails WHERE order_id =:order_id');
        $stmt_delete->bindParam(':order_id',$_GET['delete_id']);
        $stmt_delete->execute();
        
        header("Location: Cart.php");
    }

?>
<?php

    require_once 'config.php';
    
    if(isset($_GET['update_id']))
    {
        
        
        
    
        $stmt_delete = $DB_con->prepare('update orderdetails set order_status="Ordered" WHERE order_status="Pending" and user_id =:user_id');
        $stmt_delete->bindParam(':user_id',$_GET['update_id']);
        $stmt_delete->execute();
        echo "<script>alert('Item/s successfully ordered!')</script>";  
        header("Location: orders.php");
    }

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products-delails-page E_bazzar| Ecommerce Website Design</title>
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
            height: auto;
        }


        table{
            height: 30vh;
            margin: 50px;
            padding: 30px;
        }

        table tr th{
            background: #03a9f4;
        }


        .button{
            margin-right: 30%;
            padding: 5px;
            font-size: 17px;
            background: transparent;
            border: 2px solid #03a9f4;
            border-radius: 20px;
            color: #03a9f4;
        }

</style>


</head>



<body class="Cart-Page">


	 <div class="navbar">
              <div class="logo">
                    <a class = "logo" href="home.php" style="font-family: serif; font-weight: bold; font-size: 40px;">E-BAZZAR</a> 
                </div>
                <nav>
                
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="Cart.php">Cart</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                        
                    </ul>
                    
                </nav>
             
            </div>

        
        <!---cart items details--->
        <div>
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>




<tbody>
              <?php
include("config.php");
 
    $stmt = $DB_con->prepare("SELECT * FROM orderdetails where order_status='Pending' and user_id='$user_id'");
    $stmt->execute();
    
    if($stmt->rowCount() > 0)
    {
        while($row=$stmt->fetch(PDO::FETCH_ASSOC))
        {
            extract($row);
            
            
            ?>
                <tr>
                  
                 <td><?php echo $order_name; ?></td>
                 <td><?php echo $order_price; ?>$ </td>
                 <td><?php echo $order_quantity; ?></td>
                 <td><?php echo $order_total; ?>$ </td>
                 
                 <td>
                
                 
                
                
                
                  <a class = 'button' href="?delete_id=<?php echo $row['order_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove this item?')">Remove Item</a>
                
                  </td>
                </tr>

               
              <?php
        }
         include("config.php");
          $stmt_edit = $DB_con->prepare("select sum(order_total) as totalx from orderdetails where user_id=:user_id and order_status='Pending'");
        $stmt_edit->execute(array(':user_id'=>$user_id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
        
        echo "<tr>";
        echo "<td colspan='3' align='right'>Total Price:";
        echo "</td>";
        
        echo "<td> ".$totalx.'$';
        echo "</td>";
        
        echo "<td>";
        echo "<a class = 'button' href='?update_id=".$user_id."' > Order Now!</a>";
        echo "</td>";
        
        echo "</tr>";
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
        echo "<br />";
        echo '<div class="alert alert-default" style="background-color:#033c73;">
                       <p style="color:white;text-align:center;">
                       &copy E-BAZZAR| All Rights Reserved |  Design by E-BAZZAR

                        </p>
                        
                    </div>
    </div>';
    
        echo "</div>";
    }
    else
    {
        ?>
            
        <div class="col-xs-12">
            <div class="alert alert-warning">
                <span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Item Found ...
            </div>
        </div>
        <?php
    }
    
?>
        </div>
        </div>
        
   <!-----footer---->
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