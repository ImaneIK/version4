<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../dashboard.php");
}

?>


 
<?php

	error_reporting( ~E_NOTICE );
	
	require_once 'config.php';
	
	if(isset($_GET['previous_id']) && !empty($_GET['previous_id']))
	{
		$view_id = $_GET['previous_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM users WHERE user_id=:user_id');
		$stmt_edit->execute(array(':user_id'=>$view_id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: customers.php");
	}
	
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-BAZZAR</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
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

        <div id="page-wrapper">
            
			
	
			 <div class="alert alert-danger">
                        
                          <center> <h3><strong>Customer Previous Item Ordered</strong> </h3></center>
						  
						  </div>
						  
						  <br />
						  
						  <div class="table-responsive">
            <table class="display table table-bordered" id="example" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Price</th>
				  <th>Quantity</th>
                  <th>Total</th>
				  <th>Date Ordered</th>
                 
                </tr>
              </thead>
              <tbody>

			  <?php
include("config.php");
	$stmt = $DB_con->prepare("SELECT * FROM orderdetails where user_id='$user_id' and order_status='Ordered_Finished'");
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>
                <tr>
                  
                 <td><?php echo $order_name; ?></td>
				 <td><?php echo $order_price; ?>$</td>
				 <td><?php echo $order_quantity; ?></td>
				 <td><?php echo $order_total; ?>$</td>
				 <td><?php echo $order_date; ?></td>
				 
				 
                </tr>
               
              <?php
		}
		echo "<tr>";
		echo "<td colspan='4' align='center' >"."Customer Name: <span >".$user_firstname." ".$user_lastname."</span> | "."Email: <span >".$user_email."</span> | "."Address: ".$user_address." </span>";
		echo "</td>";
		
		echo "<td>"."<a class = 'button' href='customers.php'>Back<a/>";
		echo "</td>";
		
		echo "</td>";
		
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
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No ordered items yet...
            </div>
        </div>
        <?php
	}
	
?>
		
	</div>
	
	<!--
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
