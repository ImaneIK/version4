<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../dashboard.php");
}

?>

<?php
include("db_conection.php");
if(isset($_POST['item_save']))
{
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];

 
 $check_item="select * from items WHERE item_name='$item_name'";
 $run_query=mysqli_query($dbcon,$check_item);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Item is already exist, Please try another one!')</script>";
 echo"<script>window.open('dashboard.php','_self')</script>";
exit();
    }
 
$imgFile = $_FILES['item_image']['name'];
$tmp_dir = $_FILES['item_image']['tmp_name'];
$imgSize = $_FILES['item_image']['size'];

$upload_dir = '../img/';
$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
$itempic = rand(1000,1000000).".".$imgExt;


				
	
			if(in_array($imgExt, $valid_extensions)){			
		
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$itempic);
					$saveitem="insert into items (item_name,item_price,item_image,item_date) VALUE ('$item_name','$item_price','$itempic',CURDATE())";
					mysqli_query($dbcon,$saveitem);
					 echo "<script>alert('Data successfully saved!')</script>";				
					 echo "<script>window.open('items.php','_self')</script>";
				}
				else{
					
					 echo "<script>alert('Sorry, your file is too large.')</script>";				
					 echo "<script>window.open('items.php','_self')</script>";
				}
			}
			else{
				
				 echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";				
					 echo "<script>window.open('items.php','_self')</script>";
				
			}
		
	
		

}

?>



<!DOCTYPE html>
<html>
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

    <style type="text/css">

    	*{
    		padding: 0;
    		margin: 0;
    		
    	}

    	body{
    		height: 30vh;
    	}


    	.tab{
    		width: 80%;
    		
    	}

    	.block{
    		margin: 60px auto;
    		border: none
    	}

    	h2{
    		padding: 50px auto;
    		color:white
    	}

    	form fieldset p{
    		margin: 20px;
    		color: #fff;
    		font-size: 30px;
    	}

    	button{
    		margin: 20px;
    		padding: 10px;
    		font-size: 20px;
    		background: transparent;
    		border: 2px solid #fff;
    		border-radius: 20px;
    		color: #fff;
    	}

    </style>
 </head>


<body>


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



	<!-- Mediul Modal -->
	<center>
        <div class="tab" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="block" >
            <div style="color:white;background-color:#03a9f4">
              <div >
                <h2>Upload Items</h2>
              </div>
              <div>
         
				 <form enctype="multipart/form-data" method="post" action="additems.php">
                   <fieldset>
					
                            <p>Name of Item:</p>
                            <div>
							
                                <input placeholder="Name of Item" name="item_name" type="text" required>
                         
							</div>
							
							
							<p>Price:</p>
                            <div>
							
                                <input id="priceinput" class="form-control" placeholder="Price" name="item_price" type="text" required>
                           
							 
							</div>
							
							
							<p>Choose Image:</p>
							<div>
						
                                <input class="form-control"  type="file" name="item_image" accept="image/*" required/>
                           
							</div>
				   
					 </fieldset>
                  
            
              </div>
              <div >
               
                <button name="item_save">Save</button>
				
				 <button type="button" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div>
        </center>
		

</body>
</html>









