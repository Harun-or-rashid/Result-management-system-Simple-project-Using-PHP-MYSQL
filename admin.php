<?php
$host='localhost';
$user='root';
$pass='';
$name='rms';

session_start();
$con=mysqli_connect($host,$user,$pass,$name);
 

// if($con){
  
// echo "string";
// }
// else{
//     echo "not connected";
// }



if (isset($_POST['register-submit'])) {
  $name=$_POST['username'];
  $emails=$_POST['email'];

  $passs=$_POST['password'];
  $repass=$_POST['confirm-password'];
  //echo $repass;
$insert="INSERT INTO admin(ad_name,ad_email,ad_password,ad_repassword) values('$name','$emails','$passs','$repass')";
// $ins=;
if(mysqli_query($con,$insert))
  {

    echo "insert Succesfully ";
  }


else{
  echo "Not Insert";
}
}


if(isset($_POST['login-submit'])){
$name=$_POST['username'];
$pass=$_POST['password'];
$select="SELECT * FROM admin WHERE ad_name='$name' AND ad_password='$pass'";
$query=mysqli_query($con,$select);
if (mysqli_num_rows($query)>0) {

  $data=mysqli_fetch_array($query);
  $_SESSION['log']=$data['id'];

echo "<script>location.href='info.php'</script>";

}else{
 echo "<script>location.href='admin.php'</script>";
}

}


?>














<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/admin.js"></script> -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/admin.css">
<!------ Include the above in your HEAD tag ---------->
<div id="addQuestion">
<div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading ">
            <h2>Admin-Section</h2>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-6">
                <form id="login-form" action="" method="post" role="form" ">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">

                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


              <div class="col-lg-6">
                <form id="register-form" action="" method="post" role="form" ">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>