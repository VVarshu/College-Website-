<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="style6.css">
  <style>
    .error {
      color: red;
    }
  </style>
  <script src="script.js"></script>
</head>
<body>
  <div class="b">
  <h2>Login Form</h2>
  <form method="post" action="loginphp.php" onsubmit="return validateForm()">
    <div id="a">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
    </div>
    <br>
    <div id="a">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>
    <br>
    <div id="button">
      <input type="submit" value="Login">
    </div>
  </form>
  <div id="error-msg" class="error"></div>
</div>
</body>
</html>