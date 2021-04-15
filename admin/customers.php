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
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:ital,wght@0,400;1,700&family=Ballet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/datatables.min.js"></script>

   
    
</head>
<body>
    <div id="wrapper">
       
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


        <div id="page-wrapper">
            
			
	
			 <div class="alert alert-danger">
                        
                          <center> <h3><strong>Customer Management</strong> </h3></center>
						  
						  </div>
						  
						  <br />
						  
						  <div class="table-responsive">
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Customer Email</th>
                  <th>Name</th>
				  <th>Address</th>
                  <th>Actions</th>
                 
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
				
				 
				
				 <a class="btn btn-success" href="view_orders.php?view_id=<?php echo $row['user_id']; ?>"><span class='glyphicon glyphicon-shopping-cart'></span> View Orders</a> 
				  <a class="btn btn-warning" href="?order_id=<?php echo $row['user_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to reset the customer items ordered?')">
				  <span class='glyphicon glyphicon-ban-circle'></span>
				  Reset Order</a>
				 <a class="btn btn-primary" href="previous_orders.php?previous_id=<?php echo $row['user_id']; ?>"><span class='glyphicon glyphicon-eye-open'></span> Previous Items Ordered</a> 
				
				
                  <a class="btn btn-danger" href="?delete_id=<?php echo $row['user_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove this customer?')">
				  <span class='glyphicon glyphicon-trash'></span>
				  Remove Account</a>
				
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
