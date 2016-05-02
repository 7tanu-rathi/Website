<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/reset.css">
    <!--<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>-->
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <style>
    body
    {
      background-color:black ;
    }
  </style>
    </head>

  <body>

<div class="pen-title">
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form method="post" action="user.php">
     <?php 
       if($_GET['msg']=="1")
       { ?>
         <p> <label for="username" style="color:red">Username or Password do not match</label></p>
        <?php
       }?>
      <div class="input-container">
        <input type="text" id="Username" name="username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" name="password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit"><span>Go</span></button>
      </div>
      
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    </div>
  </div>
 </body>
</html>
