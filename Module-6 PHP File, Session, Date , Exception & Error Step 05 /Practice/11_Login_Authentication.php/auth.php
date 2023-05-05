<?php
session_start([
  'cookie_lifetime'=>300, //5 Min.
]);

$error=false;

if(isset($_POST['username']) && isset($_POST['password'])){
  if('admin'==$_POST['username'] && '21232f297a57a5a743894a0e4a801fc3'==md5($_POST['password'])){
    $_SESSION['loggedin']=true;
  }else{
    $error=true; 
    $_SESSION['loggedin']=false;
  }
}

if(isset($_POST['logout'])){
  $_SESSION['loggedin']=false;
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <title>Login System</title>
  </head>
  <body>
  <div class="demo-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 mx-auto">
        <div class="text-center image-size-small position-relative">
        <img src="https://annedece.sirv.com/Images/user-vector.jpg" class="rounded-circle p-2 bg-white">
        <div class="icon-camera">
        <a href="" class="text-primary"><i class="lni lni-camera"></i></a>
        </div>
        </div>
        <div class="p-5 bg-white rounded shadow-lg">
          <h3 class="mb-2 text-center pt-5">Sign In</h3>
          <div class="text-center">
            <?php
                if(true == $_SESSION['loggedin']){
                  echo "Hello Admin, Welcome!";
                }else{
                  echo "Hello Stranger, Login Below!";
                }
            ?>
          </div>
            <?php
              if($error){
                echo "<blockquote>Username & Password didn't match! </blockquote>";
              }
              if(false == $_SESSION['loggedin']):
            ?>
            <form method="POST">
              <label class="font-500">Usernmae</label>
              <input name="username" id="username" class="form-control form-control-lg mb-3" type="text">
              <label class="font-500">Password</label>
              <input name="password" id="password" class="form-control form-control-lg" type="password">
              <p class="m-0 py-4"><a href="" class="text-muted">Forget password?</a></p>
              <button class="btn btn-primary btn-lg w-100 shadow-lg">SIGN IN</button>
            </form>
            <?php
              else:
            ?>
            <form action="auth.php" method="POST">
              <input type="hidden" name="logout" value=" 1">
              <button class="btn btn-primary btn-lg w-100 shadow-lg">Log out</button>
            </form>
            <?php
              endif;
            ?>
         <div class="text-center pt-4">
          <p class="m-0">Do not have an account? <a href="" class="text-dark font-weight-bold">Sign Up</a></p>
        </div>          
        </div>        
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
