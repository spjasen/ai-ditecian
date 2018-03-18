<?php
include 'dbconnect.php';

$val = $_POST['vale'];
$name = "";
session_start();
$id = $_SESSION['user_id'];

$sqlo = "SELECT name FROM user_details where id = $id";

if ($result = $conn->query($sqlo)) {
    // output data of each row
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $name= $row["name"];
    }

}

$sql = "INSERT INTO chat (cid,uname,msg) VALUES ('','$name','$val')";

if ($result = $conn->query($sql)) {
    // output data of each row
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      echo "<p class='w3-text-red'><b>".$row["uname"].": </b><span class='w3-tag w3-pale-green w3-round-xxlarge'>".$row["msg"]."</span></p>";
    }

}
$conn->close();
?>
