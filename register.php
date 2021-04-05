<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome To Registration Form</title>
  <link rel="stylesheet" href="css/form_style.css">
  <script src="js/script1.js"></script>
</head>

<body>
  <div id="login-box">
    <div class="left">
      <h1>Sign up</h1>
      <form action="register_a.php" method="post" enctype="multipart/form-data">
        <input type="text" name="username" placeholder="Username" id="t1" />
        <input type="text" name="email" placeholder="E-mail" id="t2" />
        <input type="password" name="password" placeholder="Password" id="t3" />
        <input type="password" name="password2" placeholder="Retype password" id="t4" />
        Gender:
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label>
        <input type="submit" name="signup_submit" value="Sign me up" onclick="registration()" />
    </div>
    </form>
    <div class="right">
      <span class="loginwith">Sign in with<br />social network</span>

      <button class="social-signin facebook">Log in with facebook</button>
      <button class="social-signin twitter">Log in with Twitter</button>
      <button class="social-signin google">Log in with Google+</button>
    </div>
    <div class="or">OR</div>
  </div>
</body>

</html>