

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

	error_reporting( ~E_NOTICE );
	
	require_once 'config.php';
	
	if(isset($_GET['cart']) && !empty($_GET['cart']))
	{
		$id = $_GET['cart'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM items WHERE item_id =:item_id');
		$stmt_edit->execute(array(':item_id'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: products.php");
	}
	
	
	?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-BAZZAR</title>
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


        table{
          
            margin: 50px;
            padding: 30px;
        }

        table tr th{
            background: #03a9f4;
        }


        .button{
        	width: 60px;
        	height: 50px;
            margin: 10px;
            padding: 8px;
            font-size: 17px;
            background: transparent;
            border: 2px solid #03a9f4;
            border-radius: 20px;
            color: #03a9f4;
        }

        form{
        	width: 80%;
        	height:30vh;
        }

</style>
    

</head>

   
    
</head>
<body>
       

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



        <div id="page-wrapper">
            
			<center>
 <form role="form" method="post" action="save_order.php">
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
   
    <div>
         <center><h3>Order Details</h3></center>
        </div>
		
		 <td><input  type="hidden" name="order_name" value="<?php echo $item_name; ?>" /></td>
		<td><input  type="hidden" name="order_price" value="<?php echo $item_price; ?>" /></td>
		<td><input  type="hidden" name="user_id" value="<?php echo $user_id; ?>" /></td>
		
	<table>
	 
	
	 
    <tr>
    	<td><label >Name of Item:</label></td>
        <td><input type="text" name="v1" value="<?php $item_name="";  echo $item_name;  ?>" disabled/></td>
		
		
		
		
    </tr>
    

	 <tr>
    	<td><label >Price:</label></td>
        <td><input type="text" name="v2" value="<?php $item_price=0;  echo $item_price; ?>" disabled/></td>
    </tr>
	
	
	
    <tr>
    	<td><label >Image:</label></td>
        <td>
        	<p> <center><img src="../img/<?php echo $item_image; ?>" style="height:250px;width:350px;" /></center></p>
        	
        </td>
		
		 <tr>
    	<td><label >Quantity:</label></td>
        <td><input type="text" placeholder="Quantity" name="order_quantity" value="1" onkeypress="return isNumber(event)" onpaste="return false"  required />
		
			
		
		</td>
    </tr>
	
	
    </tr>
    
    <tr>

        <td colspan="2">
        	<center> <button class="button" type="submit" name="order_save">OK</button>
        
        <a class="button" href="products.php?id=1"> Cancel </a>
        </center>
        </td>
    </tr>
    
    </table>
    
</form>
		</center>			
					
					
					
					
					<br />
			
			<div>
                       <p style="color:white;text-align:center;">
                       &copy E-BAZZAR shop| All Rights Reserved |  Design by E-BAZZAR

						</p>
                        
                    </div>
            
                </div>
  
</body>

<script>
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
</html>


