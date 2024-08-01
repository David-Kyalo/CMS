<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: admin/index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>

	<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<section class="forms-section">
  <h1 class="section-title">Login/Signup</h1>

  <?php if ($is_invalid): ?>
        <em>Invalid login</em>
      <?php endif; ?>

  <div class="forms">
    <div class="form-wrapper is-active">
      <button type="button" class="switcher switcher-login">
        Login
        <span class="underline"></span>
      </button>

	

      <form method="post" class="form form-login" >
        <fieldset>
          <legend>Please, enter your email and password for login.</legend>
          <div class="input-block">
		  <label for="email">email</label>
          <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
          </div>
          <div class="input-block">
            <label for="password">Password</label>
            <input type="password" name="password"id="password">
          </div>
        </fieldset>
        
		<button type="submit" class="btn-login">Login</button>
		<a href="forgot-password.php">Forgot password?</a>
      </form>	  
    </div>


    <div class="form-wrapper">
      <button type="button" class="switcher switcher-signup">
        Sign Up
        <span class="underline"></span>
      </button>

	
      <form class="form form-signup" action="process-signup.php" method="post" id="signup" novalidate>
        <fieldset>
          <legend>Please, enter your email, password and password confirmation for sign up.</legend>
          <div class="input-block">
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
          </div>

		  <div class="input-block">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email">
          </div>

          <div class="input-block">
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
          </div>

          <div class="input-block">
            <label for="password_confirmation">Confirm password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
          </div>

        </fieldset>
        <button type="submit" class="btn-signup">Sign up</button>
      </form>
    </div>
  </div>
</section>

<script src="js/scripts.js"></script>
</body>
</html>