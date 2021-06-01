<!DOCTYPE html>
<html>
<head>
  <title>anzalakaasir</title>
  <style type="text/css">
  @font-face{
  font-family: titillium;
  src:url(assets/TitilliumWeb-SemiBold.ttf);
}
    *{margin: 0;padding: 0;font-family: titillium;}
    @keyframes muncul{
    0%{opacity: 0;}
    100%{opacity: 1;}
}
    body{overflow: hidden;animation-name: muncul;animation-duration: 2s}
    .both{clear: both;}
    .loginpage{position: fixed;background:url("Zahwa.jpeg");height: 100%;width: 100%;background-size: 60%;}
      .padding{padding:80px 25px;}
      .login{float: left;width: 400px;background:#fff;height: 100%;}
      .login input,.login select,.login button{width: 100%;box-sizing: border-box;margin-bottom: 20px;border: 0px;padding: 10px;border-bottom: 1px solid #e4e7ea;outline: 0;color: #565656;font-size: 14px;}
      .login input:focus,.login select:focus{border-bottom: 1px solid #707cd2;transition: 0.2s}
      .login select{cursor: pointer;}
      .login button{cursor: pointer;background: #41b3f9;color: #fff;font-size: 20px;border-radius: 3px;}
      .login button:hover{background: #5bc0de}
      form{margin-top: 70px;}
      h3{text-align: center;}
      #status{width: 100%;color: #565656;font-size: 15px;display: none;box-sizing: border-box;border-radius: 3px}
      .red{color: #c7254e;background: #f9f2f4;padding: 10px;border-radius: 3px;}
      .green{color: rgb(1,186,56);background: rgb(230,255,230);padding: 10px;border-radius: 3px;}
      .link-forgot{color: #565656;padding: 0px 0px 20px 0px;display: inline-block;}
    }
    </style>
    <link rel="stylesheet" type="text/css" href="assets/awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/wow/animate.css">
    <script type="text/javascript" src="assets/jquery.js"></script>
</head>
<body>
  <div class="loginpage">
    <div class="login">  
    <div class="padding">
      <h3>Login</h3>
    <form action ="../controller/proses.login.php?aksi=login" method="post">
      <input type="text" name="username" placeholder="Username" required="">
      <input type="password" name="password" placeholder="Password" required="">
      <button type="submit"><i class="fa fa-sign-in"></i> Login</button>
      <div class="both"></div>
      <h3>atau</h3><br>
        <center><a href="login.php" class="btn btn-secondary"><i class="fa fa-google"></i><h2>GOOGLE</h2></a></center>
    </form>
</body>
</html>
