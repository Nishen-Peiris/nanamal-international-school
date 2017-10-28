
<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
       // username and password sent from form

       $myusername = mysqli_real_escape_string($db,$_POST['username']);
       $mypassword = mysqli_real_escape_string($db,$_POST['password']);

       $sql = "SELECT id FROM login WHERE username = '$myusername' and password = '$mypassword'";
       $result = mysqli_query($db,$sql);
       $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       $active = $row['active'];

       $count = mysqli_num_rows($result);

       // If result matched $myusername and $mypassword, table row must be 1 row

       if($count == 1) {
//           session_register("myusername");
           $_SESSION['login_user'] = $myusername;

           header("location: ../admin/admin.php");
       }else {
           $message = "Username or Password incorrect.\\nTry again.";
           echo "<script type='text/javascript'>alert('$message');</script>";

       }
   }
?>






<!DOCTYPE html>

<html >
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>


<body>
  <div class="login-form">
      <form name=myForm" action="" method="post" id="formLogin">
     <h1>Nenamal Login</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username " id="UserName" name="username">
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="Passwod" name="password">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="#">Lost your password?</a>
<!--     <button type="button" class="log-btn" name="submit" >Log in</button>-->
          <input type="submit" class="log-btn" name="submit" value="Log in">
      </form>
    
   </div>




</body>
</html>
