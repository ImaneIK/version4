

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
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;1,700&family=Ballet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

   
    
</head>
<body>
    <div class="header">
       
            <div class="navbar">
              <div class="logo">
					<a class = "logo" href="home.php"><img src="img/logo1.png" width="200px"></a> 
				</div>
                <nav>
				
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Account</a></li>
                        <li><a href="logout.php">Log Out</a></li>
                        
                    </ul>
                    
                </nav>
              <a href="add_to_cart.php"><img src="img/cart.png" width="29px" height="29px" class="cart"></a>
            </div>


    </div>

        <div id="page-wrapper">
            
	
			
					
					
					
					
 <form role="form" method="post" action="save_order.php">
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
   
    <div class="alert alert-default" style="color:white;background-color:#008CBA">
         <center><h3> <span class="glyphicon glyphicon-info-sign"></span> Order Details</h3></center>
        </div>
		
		 <td><input class="form-control" type="hidden" name="order_name" value="<?php echo $item_name; ?>" /></td>
		<td><input class="form-control" type="hidden" name="order_price" value="<?php echo $item_price; ?>" /></td>
		<td><input class="form-control" type="hidden" name="user_id" value="<?php echo $user_id; ?>" /></td>
		
	<table class="table table-bordered table-responsive">
	 
	
	 
    <tr>
    	<td><label class="control-label">Name of Item.</label></td>
        <td><input class="form-control" type="text" name="v1" value="<?php $item_name="";  echo $item_name;  ?>" disabled/></td>
		
		
		
		
    </tr>
    

	 <tr>
    	<td><label class="control-label">Price.</label></td>
        <td><input class="form-control" type="text" name="v2" value="<?php $item_price=0;  echo $item_price; ?>" disabled/></td>
    </tr>
	
	
	
    <tr>
    	<td><label class="control-label">Image.</label></td>
        <td>
        	<p><img class="img img-thumbnail" src="../Admin/item_images/<?php echo $item_image; ?>" style="height:250px;width:350px;" /></p>
        	
        </td>
		
		 <tr>
    	<td><label class="control-label">Quantity.</label></td>
        <td><input class="form-control" type="text" placeholder="Quantity" name="order_quantity" value="1" onkeypress="return isNumber(event)" onpaste="return false"  required />
		
			
		
		</td>
    </tr>
	
	
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="order_save" class="btn btn-primary">
        <span class="glyphicon glyphicon-shopping-cart"></span> OK
        </button>
        
        <a class="btn btn-danger" href="products.php?id=1"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>
					
					
					
					
					
					<br />
			
			<div class="alert alert-default" style="background-color:#033c73;">
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


