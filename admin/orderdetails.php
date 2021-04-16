<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../dashboard.php");
}

?>

<?php

	require_once 'config.php';
	
	if(isset($_GET['delete_id']))
	{
		
		
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM orderdetails WHERE order_id =:order_id');
		$stmt_delete->bindParam(':order_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: orderdetails.php");
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
            height: auto;
        }

        table thead tr th{
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
<body>
    <div id="wrapper">
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

        <div id="page-wrapper">

		 <div class="alert alert-danger">
                        
                          <center> <h3><strong>Order Details Management</strong> </h3></center>
						  
						  </div>
						  
						  <br />
						  
						  <div>
            <table  id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Date Ordered</th>
                  <th>Customer Name</th>
				  <th>Item</th>
                  <th>Price</th>
				  <th>Quantity</th>
				  <th>Total</th>
				  <th><center> Actions </center></th>
                 
                </tr>
              </thead>
              <tbody>
			  <?php
include("config.php");
	$stmt = $DB_con->prepare('select order_id, order_date,users.user_firstname, users.user_lastname, order_name, order_price, order_quantity, order_total from orderdetails, users where orderdetails.user_id=users.user_id and order_status="Ordered" order by order_date desc');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                <tr>
                  
                 <td><?php echo $order_date; ?></td>
				 <td><?php echo $user_firstname; ?> <?php echo $user_lastname; ?></td>
				 <td><?php echo $order_name; ?></td>
				 <td><?php echo $order_price; ?>$</td>
				 <td><?php echo $order_quantity; ?></td>
				 <td><?php echo $order_total; ?>$</td>
				 
				 <td>
				
				 
				
				<a class = "button" href="?delete_id=<?php echo $row['order_id']; ?>" title="click for delete" onclick="return confirm('Are you sur  e to remove this item ordered?')">
				  <span class='glyphicon glyphicon-trash'></span>
				  Remove Item Ordered</a>
                  
                  </td>
                </tr>
               
              <?php
		}
		echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "</div>";
	}
	else
	{
		?>
		
			
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>
		
	</div>
	
		<script type="text/javascript" charset="utf-8">
	$(document).ready(function() {
	  $('#example').dataTable();
	});
    </script>
	  	  <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
</body>
</html>
