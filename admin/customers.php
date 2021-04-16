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
		
		
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM users WHERE user_id =:user_id');
		$stmt_delete->bindParam(':user_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: customers.php");
	}

?>

<?php

	require_once 'config.php';
	
	if(isset($_GET['order_id']))
	{
		
		
		
	
		$stmt_delete = $DB_con->prepare('update orderdetails set order_status="Ordered_Finished"  WHERE user_id =:user_id and order_status="Ordered"');
		$stmt_delete->bindParam(':user_id',$_GET['order_id']);
		$stmt_delete->execute();
		
		header("Location: customers.php");
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
    		margin-bottom: 10px;
    	}


    	.button{
    		margin: 10px;
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


        <div>
            
			<div >
                 <center> <h3><strong>Customer Management</strong> </h3></center>	  
			</div>
						  
						  <br/>
						  
			<div>
            <table cellspacing="0" width="100%">
            <thead>
                <tr>
                  <th>Customer Email</th>
                  <th>Name</th>
				  <th>Address</th>
                  <th> <center>Actions </center></th>


                </tr>
              </thead>
              <tbody>


			  <?php
include("config.php");
	$stmt = $DB_con->prepare('SELECT * FROM users');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                <tr>
                  
                 <td><?php echo $user_email; ?></td>
				 <td><?php echo $user_firstname; ?> <?php echo $user_lastname; ?></td>
				 <td><?php echo $user_address; ?></td>
				 
				 <td>
				
				 
				<center>
				 <a class="button" href="view_orders.php?view_id=<?php echo $row['user_id']; ?>"> View Orders</a> 
				 <a class = "button" href="?order_id=<?php echo $row['user_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to reset the customer items ordered?')">
				  Reset Order</a>

				 <a  class="button" href="previous_orders.php?previous_id=<?php echo $row['user_id']; ?>">Previous Items Ordered</a> 
				
				
                  <a   class="button" href="?delete_id=<?php echo $row['user_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove this customer?')">
				  Remove Account</a>
				</center>
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
	
        <div>
        	<div>
            	 &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>
		
	</div>
	<!--
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
</script> -->
</body>
</html>
