<?php
include 'dbconnect.php';
$name    = $_POST['name'];
$email   = $_POST['email'];
$age   = $_POST['age'];
$gender   = $_POST['gender'];
$height   = $_POST['height'];
$weight   = $_POST['weight'];
$password   = $_POST['password'];
$cnfpassword   = $_POST['cnfpassword'];
$response = array();
if($password==$cnfpassword)
{
            $sql = "INSERT INTO user_details (id,name,age,gender,height,weight,email,password) VALUES ('','$name','$age','$gender','$height','$weight','$email','$password')";
            if ($conn->query($sql) === TRUE) {
              echo "<h1>Registration Sucessfull :) &nbsp;<i class='fa fa-spinner fa-spin' aria-hidden='true'></i> </h1>";
            } else {
              echo "<h1>Registration Unsucessfull :( &nbsp;<i class='fa fa-spinner fa-spin' aria-hidden='true'></i></h1>";
            }



}else{
  $response['registraion_success'] = false;
  $response['registration_error'] = "Passwords did not match";
}

?>
