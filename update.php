<?php
include 'dbconnect.php';
session_start();
$id = $_SESSION['user_id'];
$tag = $_POST['tag'];
switch ($tag) {
    case "pass":
        $pass = $_POST['pass'];

        $sql = "UPDATE user_details SET password='".$pass."' WHERE id=".$id;

          if ($conn->query($sql) === TRUE) {
              echo "Record updated successfully";
          } else {
              echo "Error updating record: " . $conn->error;
          }

        break;
    case "hw":
        $uh = $_POST['uh'];
        $uw = $_POST['uw'];


        $sql = "UPDATE user_details SET height='".$uh."', weight='".$uw."' WHERE id=".$id;

          if ($conn->query($sql) === TRUE) {
              echo "Record updated successfully";
          } else {
              echo "Error updating record: " . $conn->error;
          }


        break;
    case "age":
        $a = $_POST['a'];

        $sql = "UPDATE user_details SET age='".$a."' WHERE id=".$id;

          if ($conn->query($sql) === TRUE) {
              echo "Record updated successfully";
          } else {
              echo "Error updating record: " . $conn->error;
          }


        break;
    default:
        echo "try again";
}
$conn->close();
?>
