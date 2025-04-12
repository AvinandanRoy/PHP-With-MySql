<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f5f5;
      display: flex;
      flex-direction: column;
      height: 100vh;
      justify-content: center;
      align-items: center;
    }
    .login-box {
      background: white;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 300px;
    }
    .login-box h2 {
      text-align: center;
      margin-bottom: 1.5rem;
    }
    .login-box input {
      width: 100%;
      padding: 10px;
      margin: 0.5rem 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .login-box button {
      width: 100%;
      padding: 10px;
      margin-top: 1rem;
      background-color: #007bff;
      border: none;
      color: white;
      border-radius: 5px;
      cursor: pointer;
    }
    .login-box button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form action="index.php" method="POST">
      <input type="text" name="username" placeholder="username"  />
      <input type="password" name="password" placeholder="Password"  />
      <button type="submit" name="login" value="login">Log In</button>
    </form>
  </div>
</body>
</html>

<?php


// checking button working and alsoo is it empty or else.
if( isset($_POST["login"]) ){
    foreach($_POST as $key => $value){
        if(!empty($value)){
            echo "{$key}==>{$value}<br>";
        }elseif($key == "login"){
            echo "This is login key<br>";
        }else{
            echo "Value is empty.<br>";
        }
    }
}else{
    echo "Please Click login button for login this website.";
}


// for login 
if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username) && empty($password)){
        echo "Please enter username and password for login.<br>";
    }elseif(!empty($username) && !empty($password)){
        echo "Successfully login. Hello {$username}.<br>";
    }elseif(empty($username)){
        echo "Please entered username.<br>";
    }elseif(empty($password)){
        echo "Please entered password<br>";
    }
}


?>
