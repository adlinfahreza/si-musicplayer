<html>
  <head>
    <title> Login form </title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
  

  </head>
  <body>

  <div class="main">


<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign In</h2>
                <form action="login_proses.php" method="POST">
                    <div class="form-group">
                        <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name = "user_email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name = "user_password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name = "submit" class="btn btn-primary" value="Login">
                        <br><a href="signup-form.php">Create an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

  </body>
</html>
</html>