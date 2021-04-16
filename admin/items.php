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
		
		$stmt_select = $DB_con->prepare('SELECT item_image FROM items WHERE item_id =:item_id');
		$stmt_select->execute(array(':item_id'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink('../img/'.$imgRow['item_image']);
		
	
		$stmt_delete = $DB_con->prepare('DELETE FROM items WHERE item_id =:item_id');
		$stmt_delete->bindParam(':item_id',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: items.php");
	}

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
  height: auto;
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
                        
                          <center> <h3><strong>Item Management</strong> </h3></center>
						  
						  </div>
						  
						  <br />
						  
						  <div>
            <table cellspacing="0">
              <thead>
                <tr >
                  <th style="background: #03a9f4;"><center>Image</center></th>
                  <th style="background: #03a9f4;">Name of Item</th>
				          <th style="background: #03a9f4;">Price</th>
				          <th style="background: #03a9f4;">Date Added</th>
                  <th style="background: #03a9f4;"><center>Actions</center></th>
                 
                </tr>
              </thead>

              <tbody>
			  <?php
include("config.php");
	$stmt = $DB_con->prepare('SELECT * FROM items');
	$stmt->execute();
	
	if($stmt->rowCount() > 0)
	{
		while($row=$stmt->fetch(PDO::FETCH_ASSOC))
		{
			extract($row);
			
			
			?>

                <tr>
                  <td>
        <center>
				 <img src="../img/"<?php echo $item_image; ?>  />
        </center>
				 </td>

         <center>
         <td><?php echo $item_name; ?></td>
         </center>

         <center>
				 <td>$<?php echo $item_price; ?></td>
        </center>

        <center>
				 <td><?php echo $item_date; ?></td>
        </center>
				 

         <center>
				 <td >
				 <a style=" margin: 20PX; border: 1px solid #03a9f4; color: #03a9f4; background: transparent; border-radius: 20px; font-size: 25px; padding: 10px;  "href="edititem.php?edit_id=<?php echo $row['item_id']; ?>" title="click for edit" >Edit Item</a> 
				
                  <a style="margin: 20PX; border: 1px solid #03a9f4; color: #03a9f4; background: transparent; border-radius: 20px; font-size: 25px; padding: 10px; "href="?delete_id=<?php echo $row['item_id']; ?>" title="click for delete" onclick="return confirm('Are you sure to remove this item?')"><span class='glyphicon glyphicon-trash'></span> Remove Item</a>
				</center>
        </td>
                </tr>
               
              <?php
		}
		echo "</tbody>";
		echo "</table>";
		echo "</div>";
		echo "<br />";
		
	'</div>';
	
		echo "</div>";
	}
	else
	{
		?>
		

			
        <div>
        	<div>
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>


</body>
</html>
