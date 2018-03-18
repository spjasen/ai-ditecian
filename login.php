<?php
include 'dbconnect.php';

$email   = $_POST['Lemail'];
$password   = $_POST['Lpassword'];

$query = "select id from user_details where email='$email'  and password='$password' ";

$query_run = mysqli_query($conn,$query);
$response = array();
if($query_run)
{
  if(mysqli_num_rows($query_run)>0)
  {
    while($row = mysqli_fetch_assoc($query_run))
    {
      session_start();
      $_SESSION['user_id'] = $row['id'];
      $response['login_status'] = true;
      echo json_encode($response);
    }
  }
  else
  {
    $response['login_status'] = false;
    echo json_encode($response);
  }
}

?>
