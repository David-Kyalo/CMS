<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resident.css">
</head>
<body>
<div class="container">
    <div class="card">
      <div class="inner-box" id="card">
        <div class="card-front">
          <h2>LOGIN</h2>
          <form action="">
            <input type="email" class="input-box" placeholder="example@mail.com" required>
            <input type="password" class="input-box" placeholder="Password" required>
            <button type="submit" class="submit-btn">Submit</button>
            <input type="checkbox"><span>Remember Me</span>
          </form>
          <button type="button" class="btn" onclick="openRegister()">I'm New Here</button>
          <a href="#">Forget Password</a>
        </div>

        <div class="card-back">
          <h2>SIGNUP</h2>
          <form action="">
            <input type="text" class="input-box" placeholder="Jhon" required>
            <input type="email" class="input-box" placeholder="example@mail.com" required>
            <input type="password" class="input-box" placeholder="Password" required>
            <button type="submit" class="submit-btn">Submit</button>
            <input type="checkbox"><span>Remember Me</span>
          </form>
          <button type="button" class="btn" onclick="openLogin()">I've an account</button>
          <a href="#">Forget Password</a>
        </div>
      </div>
    </div>
  </div>
</body>

<script src ="resident.js"></script>
</html>