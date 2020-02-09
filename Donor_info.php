<?php  
session_start();//session starts here  
  
?> 

<!DOCTYPE html>
<html>
<head>
	<title>Donor's Info</title>
</head>
<body>
	<form role="form" method="post" action="Donor_info.php">  
                        <fieldset>  
                            <div class="form-group">  
                                Username :<input class="form-control"  name="name" type="text" autofocus required="">  
                            </div>  
  
                            <div class="form-group">  
                               Phone :<input class="form-control" name="phone" type="number" autofocus required>  
                            </div>  
                            <div class="form-group">  
                                Location :<input class="form-control"  name="location" type="text" value="" required>  
                            </div>  
                            <div class="form-group">  
                                Email :<input class="form-control" name="email" type="email" value="" required>  
                            </div> 
                            <div class="form-group">  
                                Blood Group :<input class="form-control" name="bg" type="text" value="" required>  
                            </div> 
                            <div class="form-group">  
                                RHFactor :<input class="form-control" name="rh" type="text" value="" required>  
                            </div> 
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="registers" name="registers" >  
  
                        </fieldset>  
                    </form>

</body>
</html>

<?php  
  
include("db_conection.php");  
  
if(isset($_POST['registers']))  
{  
    $user_name=$_POST['name'];  
    $user_phone=$_POST['phone']; 
    $user_location=$_POST['location'] ;
    $user_email=$_POST['email'];
    $user_bg=$_POST['bg'];
    $user_rh=$_POST['rh'];


	     $conn = new mysqli('localhost','root', '', 'users');
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

     $insert_user="insert into info (name,Phone,Location,Email,BG,RHFactor) VALUE ('$user_name','$user_phone','$user_location','$user_email','$user_bg','$user_rh')";
	

	if ($conn->query($insert_user) === TRUE) {
	} 

  
  
  
}  
?>