<?php
include 'dbconnect.php';
session_start();
$exercise   = $_POST['exercise'];
$cali   = $_POST['cali'];
$id = $_SESSION['user_id'];
$u_name = "";
$u_height = "";
$u_weight = "";
$u_age = "";
$u_gender = "";
$total="";

$sql = "SELECT name, height, weight, age, gender FROM user_details where id = $id";

if ($result = $conn->query($sql)) {
    // output data of each row
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $u_name = $row["name"];
      $u_height = $row["height"];
      $u_weight = $row["weight"];
      $u_age = $row["age"];
      $u_gender = $row["gender"];
    }
}
$conn->close();



if($u_gender === "male")
{
  $total = $exercise * (066 + (13.7 * $u_weight) + (5 * $u_height) - (6.8 * $u_age));

}
else
{
  $total = $exercise * (655 + (9.6 * $u_weight) + (1.8 * $u_height) - (4.7 * $u_age));

}

if($cali === "addg500")
{
  echo round($total + 500);
}
elseif ($cali === "addg1000") {
  echo round($total + 1000);
}
elseif ($cali === "subl500") {
  echo round($total - 500);
}
elseif ($cali === "subl1000") {
  echo round($total - 1000);
}
else {
  echo round($total);
}



?>
