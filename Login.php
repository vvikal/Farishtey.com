<?php  
session_start();//session starts here  
  
?>    
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
    <title>Login</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 50px;  
  
</style>  
  
<body>  
  
  
<div class="container">  
    <div class="row">  
         <div class="container" id="homePageContainer">
      
    <img src="./images/blood-donation3.png" style="margin-left: 500px; width: 150px; margin-top: 50px">
       
        <div class="col-md-8 col-md-offset-4" style="margin-top: 75px; padding-left: 400px;">  
            
                  <div class="login-panel panel panel-success"> 
                <div class="panel-heading">  
                    <h3 class="panel-title" style="align-content: center; padding-left: 120px;">Sign In</h3>  <br>
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action="login.php">  
                        <fieldset>  
                            <div class="form-group"  >  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus required style="padding-right: 150px;">  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="" required>  
                            </div>  
  
  
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" > 
                                <br>
                                <a href="./Registration.php" class="btn btn-primary" style="margin-left: 100px;">Register here</a> 

  
                        </fieldset>  
                    </form>  
                </div>  
            </div>
            
            
        </div> 
        <div class="col-md-3 col-md-offset-4"></div> 
    </div>  
</div>  
  
  
</body>  
  
</html>  
  
<?php  
  
include("db_conection.php");  
  
if(isset($_POST['login']))  
{  
    $user_email=$_POST['email'];  
    $user_pass=$_POST['pass'];  
  
    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";  
  
    $run=mysqli_query($dbcon,$check_user);  
  
    if(mysqli_num_rows($run))  
    {  
        echo "<script>window.open('donor_output.php','_self')</script>";  
  
        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.  
  
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?>
