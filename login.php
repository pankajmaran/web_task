<?php
    session_start();
?>
<html>

<head>
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="css/login.css">
  <title>Sign in</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Sign in</p>
    <form class="form1" action="loginProcess.php" method="post" enctype="multipart/form-data">
      <input class="un " type="text" align="center" placeholder="Username" name="user">
      <input class="pass" type="password" align="center" placeholder="Password" name="pass">
      <!-- <a class="submit" align="center">Sign in</a> -->
      <button type="submit" name="save" class="submit btn btn-success btn-lg btn-block">Login</button>
     
      
    </form>      
    <button type="forgot" class="submit btn btn-success btn-lg btn-block"><a href="forgetPswd.php" style="color:white;">forgot<a/></button>
    </div>
     
</body>

</html>


