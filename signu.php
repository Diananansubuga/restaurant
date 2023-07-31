<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sighnup</title>
</head>
<style>
    .form{
  background-color:antiquewhite;
  padding: 10px;
  margin: 0 auto;
  width: 400px;
  height: 500px;
  display: block;
  text-align: center;
  margin-top:30px;
}
  .input{
    height: 200px;

}


</style>
<body>
    <div class="form">
    <form action="signup.php" method="post" >
        <h3>SIGN UP</h3>
        <label for="username">Username</label><br>
        <input type="text" name="username" class="username" required><br><br>
        <label for="email">Email</label><br>
        <input type="email" name="email" class="email" required><br><br>
        <label for="phone number">Phone number</label><br>
        <input type="number" name="contact" class="contact" required><br><br>
        <label for="password">Password</label><br>
        <input type="password" name="password" class="password" required><br><br>
        <label for="confirm_password">Confirm Password</label><br>
        <input type="password" name="confirm_password" class="confirm_password" required><br><br>
        <p>already have an account? log in</p>
        <a href="login.html"><input type="submit" value="Sign Up"><br></a>
       
      </form>
    </div>
</body>
</html>