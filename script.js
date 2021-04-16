
  var x = document.getElementById("login");
  var w = document.getElementById("admin");
  var y = document.getElementById("register");
  var z = document.getElementById("btn");

  function register(){
    w.style.left = "-450px";
    x.style.left = "-450px";
    y.style.left = "35px";
    z.style.left = "217px";
    y.style.height="250px";
  }


  function login(){
    w.style.left = "-350px";
    x.style.left = "30px";
    y.style.left = "400px";
    z.style.left = "100px";
  }


  function admin(){
    w.style.left = "30px";
    x.style.left = "400px";
    y.style.left = "850px";
    z.style.left = "0";
  }
