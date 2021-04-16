<?php
session_start();


?>


    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-BAZZAR</title>
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
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

       button{
        margin:  20px 75px;
        padding: 5px;
        width: 100px;
        height: 30px;
        background: transparent;
        border:2px solid #99C8F4;
        border-radius: 10px;
        color: #99C8F4;

       }


   </style>

</head>
<body>
       
            <div class="navbar">
              <div class="logo">
          <a class = "logo" href="index.php" style="font-family: serif; font-weight: bold; font-size: 40px;">E-BAZZAR</a> 
        </div>
                <nav>
        
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="Account-page1.php ">Contact</a></li>
                    </ul>
                    
                </nav>
              
            </div>     
  
      
        <div id="page-wrapper">

       
      

<?php




$host = "127.0.0.1";
$username = "root";
$pass = "";
$query1 = mysqli_connect($host, $username, $pass, "magasin");
$start=0;
$limit=8;
$id = 0;
$id = !empty($_POST['id']) ? $_POST['id'] : -1;
if(isset($_GET['id']))
{
  $id=$_GET['id'];
  $start=($id-1)*$limit;
}

$query=mysqli_query($query1,"select * from items LIMIT $start, $limit");

for ($i=0; $i <8 ; $i++) { 
    # code...
}

   echo"<div class='small-container'>
    <div class='row'>";


while($query2=mysqli_fetch_array($query))
{
  
echo "
    
    <div class='col-4'>
   
           
            <img  href='img/".$query2['item_image']."' title='Page ".$id."- ".$query2['item_name']."'/>

                    
          
          <img src='img/".$query2['item_image']."' />
          </a>

          <center>

                     <h4>".$query2['item_name']."</h4>

                    <p> Price: ".$query2['item_price']." $</p>

                    </center>

          <button onclick='myFunction()' id='btn' id = add_to_cart >Add to cart</button> ​ 
          <script> function myFunction() { alert('sign in to order');
          window.open('Account-page1.php','_self')}
          </script>
                   



                   
            </div>
          
        ";    
  
}
echo"</div>
</div>";


$rows=mysqli_num_rows(mysqli_query($query1,"select * from items"));
$total=ceil($rows/$limit);
echo "<br /><ul class='pager'>";
if($id>1)
{
  echo "<li><a href='?id=".($id-1)."'>Previous Page</a><li>";
}
if($id!=$total)
{
  echo "<li><a style=' border: 2px solid; border-radius:5px; margin:20px; padding:10px;' href='?id=".($id+1)."' class='pager'>Next Page</a></li>";
}
echo "</ul>";


echo "<center><ul >";
    for($i=1;$i<=$total;$i++)
    {
      if($i==$id) { echo "<li><a>".$i."</a></li>"; }
      
  
      
      else { echo "<li><a href='?id=".$i."'>".$i."</a></li>"; }
    }
echo "</ul></center>";
?>
          
                </div>
    
</body>
</html>