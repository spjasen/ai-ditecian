<?php
include 'dbconnect.php';
session_start();
$id = $_SESSION['user_id'];

$sql = "SELECT name FROM user_details where id = $id";

if ($result = $conn->query($sql)) {
    // output data of each row
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      echo $row["name"];
    }

}
$conn->close();
?>
