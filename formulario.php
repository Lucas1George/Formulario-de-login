<?php

// if(isset($_POST['submit']) )
// {
//   print_r($_POST['name'])
//   print_r($_POST['email'])
//   print_r($_POST['username'])
//   print_r($_POST['password'])
// }

$name = $_POST ['name'];
$email = $_POST['email'];
$username = $_POST['username']
$password = $_POST['password']

$result = mysqli_query($conexao, "INSERT INTO usuario(name, email, username,password) VALUES ($name, $email, $username, $password)");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./config.php">
  <title>Formulario de Login</title>
</head>
<body>
  
  <div>
    <h1>Sign up</h1>
  </div>
  <form action="formulario.php" method = "POST">
  <nav class="box">
    <div>
      <label for="name">Name</label>
      <input type="text" id="name" name="name">
    </div>
    <div>
      <label for="email">Email</label>
      <input type="email" id="email" name="email">
     <div>
      <label for="username">Username</label>
      <input type="text" id="username" name="username">
    </div>
    <div>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required minlength="3">
    </div>
    <div class="checkbox">
      <input type="checkbox" id="termos" name="termos" value="termos" />
      <label for="termos">I accept the terms of use.</label>
      <input type="submit" name="submit" id="submit">
      <button>Enviar</button>
      <input type="submit" name="submit" id="submit">
    </div>
  
  </nav>
  </form>

</body>
</html>