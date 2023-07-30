<?php include 'config.php'; ?>
<!DOCTYPE html>
<head>
    <title>Login</title>
    <!--<meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style type="text/css">
    body{
      background: url('x9.png') no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      

    }
      form{
        margin-top:6em;
        background-color:#fff;
        margin-right:10em;
        margin-left:30em;
        padding:30px;
        box-shadow: 10px 10px 8px 10px #888888; 

      }
    </style> 
</head>
<body>
    <div class="container">
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <button type="submit" class="btn btn-primary" name="Login">Submit</button>
  <p style="text-align: center;">New User ?<br>Create Account <a href="register.php">Sign Up</a></p>
  </form>
    </div>
</body>
</html>