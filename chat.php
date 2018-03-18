<?php
include 'dbconnect.php';



$sql = "SELECT uname,msg FROM chat";

if ($result = $conn->query($sql)) {
    // output data of each row
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      echo "<p class='w3-text-red'><b>".$row["uname"].": </b><span class='w3-tag w3-pale-green w3-round-xxlarge'>".$row["msg"]."</span></p>";
    }

}
$conn->close();
?>
