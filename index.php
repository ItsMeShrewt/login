<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <title>Login Page</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="sign-up">
        <form method="post" action="register.php">
          <h1>Create Account</h1>
          <div class="icons">
            <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
          </div>
          <span>or use email for registration</span>
          <input type="text" name="fName" id="fName" placeholder="First Name" required />
          <input type="text" name="lName" id="lname" placeholder="Last Name" required />
          <input type="text" name="email" id="email" placeholder="Email" required />
          <input type="password" name="password"
          id="password" placeholder="Password" required />
          <button type="submit" name="sign-up">Sign Up</button>
        </form>
      </div>
      <div class="sign-in">
        <form method="post" action="register.php">
          <h1>Sign In</h1>
          <div class="icons">
            <a href="#" class="icon"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-google"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
          </div>
          <span>or use email password</span>
          <input type="text" name="email" id="email" placeholder="Email" required />
          <input type="password" name="password"
          id="password" placeholder="Password" required />
          <button type="submit" name="sign-in">Sign In</button>
        </form>
      </div>
      <div class="toogle-container">
        <div class="toogle">
          <div class="toogle-panel toogle-left">
            <h1>Welcome to <h1 style="color: cadetblue;">TutorSpot!</h1></h1>
            <p><b>Where you can hire a Tutor for your kid</b></p>
            <p>If you already have an account</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toogle-panel toogle-right">
          <h1>Welcome to <h1 style="color: cadetblue;">TutorSpot!</h1></h1>
            <p><b>Where you can hire a Tutor for your kid</b></p>
            <p>If you don't have an account</p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>