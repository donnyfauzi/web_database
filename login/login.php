<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <!-- link icon -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <title>Login&Register</title>
  </head>
  <body>
    <div class="wrapper">
      <div class="form-box-login" id="loginpage">
        <h2>Login</h2>
        <form action="../config/controler.php" method="post">
          <div class="input-box">
            <span class="icon"><i class="bx bxs-envelope"></i></span>
            <input type="email" name="username" required />
            <label>Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-lock-alt"></i></span>
            <input type="password" name="password" required />
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <label><input type="checkbox" />Remember Me</label>
            <a href="#">Forgot Password?</a>
          </div>
          <button type="submit" class="btn" name="login">Login</button>
          <div class="login-register">
            <p>
              Don't have an account?<a href="#registerpage" class="register-link"
                >Register</a
              >
            </p>
          </div>
        </form>
      </div>

      <div class="form-box-register" id="registerpage">
        <h2>Registration</h2>
        <form action="../config/controler.php" method="post">
          <div class="input-box">
            <span class="icon"><i class="bx bxs-user"></i></span>
            <input type="text" name="name" required />
            <label>Username</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-envelope"></i></span>
            <input type="email" name="username" required />
            <label>Email</label>
          </div>
          <div class="input-box">
            <span class="icon"><i class="bx bxs-lock-alt"></i></span>
            <input type="password" name="password" required />
            <label>Password</label>
          </div>
          <div class="remember-forgot">
            <label
              ><input type="checkbox" />I agree to the terms & conditions</label
            >
            <a href="#"></a>
          </div>
          <button type="submit" class="btn" name="register">Register</button>
          <div class="login-register">
            <p>
              Already have an account?<a href="#loginpage" class="login-link">Login</a>
            </p>
          </div>
        </form>
      </div>
    </div>

    <script src="script.js"></script>
  </body>
</html>
