<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account | E-BAZZAR</title>
    <link rel="stylesheet" href="style.css">
    
  
</head>


<style type="text/css">
  .navbar-Auth {
    height: 10vh;
    display: flex;
    align-items: center;
    padding: 20px;
    font-size: 130%;
    margin-left: 30px;
    margin-right: 30px;
}


.logo a h2{
  float: left;
  margin-left: 20px;
}

</style>
<body>

 <div class="navbar-Auth" >
              <div class="logo">
          <a class = "logo" href="index.php">
            <h2 style="font-family: serif;">E-BAZZAR</h2>
          </a> 
        </div>
                <nav >
        
                    <ul>
                        <li ><a href="index.php" >Home</a></li>
                        <li><a href="product.php" >Product</a></li>
                        <li><a href="Account-page.php">Contact</a></li>
                    </ul>
                    
                </nav>
             
               
            </div>


            <div class="hero">
        <div class="form-box">
          <div class="button-box">


          <div id="btn"></div>

        <button type="button" class="toogle-btn"  onclick="admin()">Admin</button>

        <button type="button" class="toogle-btn" onclick="login()">Login</button>

        <button type="button" class="toogle-btn"  onclick="register()">Sign up</button>

        

      </div>

      <form id="login" class="input-group" role="form" method="post" action="userlogin.php">

        <input type="email" class="input-feild" placeholder="email" name="user_email" required>

        <input type="password" class="input-feild" name="user_password"placeholder="Password" required>
        
        <input type="checkbox" class="check-box" name="user_login" ><span>Remember password</span>

        <button type="submit" class="submit-btn">Login</button>

      </form>


      <form id="register" class="input-group" role="form" method="post" action="register.php">

        
        <input class="input-feild" placeholder="Firstname" name="ruser_firstname" type="text" required>

        <input class="input-feild" placeholder="Lastname" name="ruser_lastname" type="text" required>

        <input type="text" class="input-feild" placeholder="email" required>

        <input class="input-feild" placeholder="Address" name="ruser_address" type="text" required>

        <input type="password" class="input-feild" placeholder="Password" name="ruser_password" required>
        
        <input type="checkbox" class="check-box" ><span>I accept the terms of use</span>

        <button type="submit" class="submit-btn" name="register">Register</button>

      </form>


      <form id="admin" class="input-group" role="form" method="post" action="adminlogin.php">

        <input type="text" name="admin_username" class="input-feild" placeholder="admin id or email" required>

        <input type="password" name="admin_password" class="input-feild" placeholder="Password" required>
        
        <input type="checkbox" class="check-box" ><span>Remember password</span>

        <button type="submit" name="admin_login" class="submit-btn">Login</button>
        

      </form>

      <div class="social-icons">
      <img src="fb.png">
      <img src="tw.png">
      <img src="gp.png">

    </div>
    </div>
    
  </div>






  </div>

<script type="text/javascript">
  var x = document.getElementById("login");
  var w = document.getElementById("admin");
  var y = document.getElementById("register");
  var z = document.getElementById("btn");

  function register(){
    w.style.left = "-450px";
    x.style.left = "-450px";
    y.style.left = "50px";
    z.style.left = "210px";
    y.style.height="550px";
  }


  function login(){
    w.style.left = "-350px";
    x.style.left = "40px";
    y.style.left = "400px";
    z.style.left = "100px";
  }


  function admin(){
    w.style.left = "50px";
    x.style.left = "400px";
    y.style.left = "850px";
    z.style.left = "0";
  }
</script>
</body>
</html>