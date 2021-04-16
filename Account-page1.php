<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-BAZZAR | Authentification </title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    
    <style type="text/css">
      *{
        margin: 0;
        padding: 0;
      }


      body{
        height: 100%;
        width: 100%;
        background-image: url("footage/banner.jpg");
      }



.navbar {
    height: 10vh;
    display: flex;
    align-items: center;
    padding: 20px;
    font-size: 130%;
    
}

nav {
    flex: 1;
    text-align: right;
    height: 5vh;
}

nav ul {
    display: inline-block;
    list-style-type: none;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

a {
    text-decoration: none;
    color: #333333;
}


p {
    color: #333333;
}


.banner{
    width: 100%;
    height: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}



.form-box{
    width: 360px;
    height: 550px;
    position: relative;
    margin: 6% auto;
    background: #fff;
    padding: 5px;
    overflow: hidden;
    border-radius: 32px;

}

.button-box{
    width: 310px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
}


.toogle-btn{
    padding: 10px 20px;
    margin: 10px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
}


#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 30%;
    height: 100%;
    background: linear-gradient(to right, #03a9f4, #e1f5fe);
    border-radius: 32px;
    transition: .5s;
}


.social-icons{
    margin: 30px auto;
    text-align: center;
}

.social-icons img{
    width: 30px;
    margin: 0 12px;
    box-shadow: 0 0 20px #7f7f7f3d;
    cursor: pointer;
    border-radius: 50%;
}

.input-group {
    top: 180px;
    position: absolute;
    width: 300px;
    transition: .5s;
}



.input-feild{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
}




.submit-btn{
    width: 85%;
    padding: 10px;
    cursor: pointer;
    display: block;
    margin: auto;
    background: linear-gradient(to right, #03a9f4, #e1f5fe);
    border: 0;
    outline: none;
    border-radius: 30px;
}



.check-box{
     margin: 30px 10px 30px 0;
}


 span{
    color:#777;
    font-size: 12px;
    bottom: 65px;
    position: absolute;
}


#login{
    left: 50px;
}

#register{
    left: 450px;
}

#admin{
    left: 850px;
}

nav ul li a{
  color: #fff;
}



    </style>
  
</head>


<body>

 <div class="navbar" style="color: #fff;">
              <div class="logo">
          <a class = "logo" href="index.php" style="font-family: serif; font-weight: bold; font-size: 40px; color: #fff;">E-BAZZAR</a> 
        </div>
                <nav>
        
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="Account-page1.php ">Contact</a></li>
                       
                        
                    </ul>
                    
                </nav>
              
            </div>



           
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

        <button type="submit" class="submit-btn" name="login">Login</button>

      </form>


      <form id="register" class="input-group" role="form" method="post" action="register.php">

        
        <input class="input-feild" placeholder="Firstname" name="ruser_firstname" type="text" required>

        <input class="input-feild" placeholder="Lastname" name="ruser_lastname" type="text" required>

        <input type="text" class="input-feild" placeholder="email" required>

        <input class="input-feild" placeholder="Address" name="ruser_address" type="text" required>

        <input type="password" class="input-feild" placeholder="Password" name="ruser_password" required>
        
        <input type="checkbox" class="check-box" ><span style="bottom: -28px;">I accept the terms of use</span>

        <button type="submit" class="submit-btn" name="register">Sign up</button>

      </form>


      <form id="admin" class="input-group" role="form" method="post" action="adminlogin.php">

        <input type="text" name="admin_username" class="input-feild" placeholder="admin id or email" required>

        <input type="password" name="admin_password" class="input-feild" placeholder="Password" required>
        
        <input type="checkbox" class="check-box" ><span>Remember password</span>

        <button type="submit" name="admin_login" class="submit-btn">Login</button>
        

      </form>

      <div class="social-icons">
      <a href="https://facebook.com"><img src="footage/fb.png"></a>
      <a href="https://twitter.com"><img src="footage/tw.png"></a>
      <a href="https://instagram.com"><img src="footage/tg.png"></a>

    </div>
    </div>
    
  






  </div>

  <script type="text/javascript" src="script.js"></script>


</body>
</html>