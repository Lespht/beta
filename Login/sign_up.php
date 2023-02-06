<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="sign_up.css" rel="stylesheet" type="text/css">
        <meta charset="utf-8">
        <title>login</title>
    </head>
<form method="post" action="registrar.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="text"><b>Usuario</b></label>
    <input type="text" placeholder="Enter username" id ="user"name="user" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id ="password" name="password" required>

    <label for="password-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a class="tp" href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <a href= 'index.php' type="button" class="cancelbtn">Cancel</a>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>