<?php
  include("header.php")
?>
<?php  
session_start();//session starts here  
  
?> 
    <div class="container">
        <img src="./images/blood-donation2.png" style="width: 150px; margin-left: 450px; margin-top: 30px">
<form class="form" method="post">
  <div class="form-group">
    <input type="text" class="form-control" name="fname" placeholder="Full Name" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Location</label>
    <select class="form-control" id="exampleFormControlSelect1" name="location">
      <option>Shimla</option>
      <option>Chandigarh</option>
      <option>Solan</option>
      <option>Dehradun</option>
    </select>
  </div>
  <div class="form-group">
    <input type="number" class="form-control" name="number" placeholder="Mobile Number" required>
  </div>
    <div class="form-group">
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
 </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Blood Group</label>
    <select class="form-control" id="exampleFormControlSelect1" name="bg">
      <option>AB</option>
      <option>B</option>
      <option>A</option>
      <option>O</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">RH Factor</label>
    <select class="form-control" id="exampleFormControlSelect1" name="rh">
      <option>+</option>
      <option>-</option>
    </select>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" >
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

    </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php  
  
include("db_conection.php");  
  
if(isset($_POST['submit']))  
{  
    $user_name=$_POST['fname'];  
    $user_phone=$_POST['number']; 
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
<?php
  include("footer.php")
?>
 </body>   
</html>