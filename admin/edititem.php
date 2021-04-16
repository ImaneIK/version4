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
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		$stmt_edit = $DB_con->prepare('SELECT * FROM items WHERE item_id =:item_id');
		$stmt_edit->execute(array(':item_id'=>$id));
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
	}
	else
	{
		header("Location: items.php");
	}
	
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$item_name = $_POST['item_name'];
		$item_price = $_POST['item_price'];
		
			
		$imgFile = $_FILES['item_image']['name'];
		$tmp_dir = $_FILES['item_image']['tmp_name'];
		$imgSize = $_FILES['item_image']['size'];
					
		if($imgFile)
		{
			$upload_dir = '../img/'; // upload directory	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
			$itempic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['item_image']);
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
					echo "<script>alert('Sorry, your file is too large it should be less then 5MB')</script>";				
					 
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";	
              echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";					
			}	
		}
		else
		{
		
			$itempic = $edit_row['item_image']; 
		}	
						
		

		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('UPDATE items
									     SET item_name=:item_name, 
											 item_price=:item_price, 
										     item_image=:item_image 
								       WHERE item_id=:item_id');
			$stmt->bindParam(':item_name',$item_name);
			$stmt->bindParam(':item_price',$item_price);
			$stmt->bindParam(':item_image',$itempic);
			$stmt->bindParam(':item_id',$id);
				
			if($stmt->execute()){
				?>
                <script>
				alert('Successfully Updated ...');
				window.location.href='items.php';
				</script>
                <?php
			}
			else{
				$errMSG = "Sorry Data Could Not Updated !";
				 echo "<script>alert('Sorry Data Could Not Updated !')</script>";				
			}
		
		}
		
						
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

    	table thead tr th{
    		background: #03a9f4;
    	}


    	.button{
    		width: 100px;
    		height: 40px;
    		margin: 10px;
    		padding: 5px;
    		font-size: 17px;
    		background: transparent;
    		border: 2px solid #03a9f4;
    		border-radius: 20px;
    		color: #03a9f4;
    	}

    	input{
    		margin: 10px;
    		padding: 30px;
    		font-size: 17px;
    		background: transparent;
    		border: 2px solid #03a9f4;
    		border-radius: 5px;
    		
    	}

    	label{
    		font-size: 20px;
    		margin: 10px;

    	}

    	form{
    		width: 50%;
    		margin: 20px;
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


<center>
<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
			 <div>
                 <center> <h3><strong>Update Item</strong> </h3></center>
			</div>
						  
			<table>
	 
    <tr>
    	<td><label> <center>Name of the Item:  </center></label></td>
        <td><input type="text" name="item_name" value="<?php echo $item_name; ?>" required /></td>
    </tr>
	
	 <tr>
    	<td><label> <center> Price: </center></label></td>
        <td><input class="form-control" type="text" name="item_price" value="<?php echo $item_price; ?>" required /></td>
    </tr>
	
	
    <tr>
    	:<td><label> <center> Image: </center></label></td>
        <td>
        	<p><img src="item_images/<?php echo $item_image; ?>" height="150" width="150" /></p>
        	<input type="file" name="item_image" accept="image/*" />
        </td>
    </tr>
    
    <tr>
        <td>
        <button type="submit" name="btn_save_updates" class="button">Update</button>
        
        <a class="button" href="items.php">Cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>
						  
 </center>
                </div>

				  
		
		
</body>
</html>
