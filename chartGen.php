<?php

$calo   = $_POST['calo'];
$typeC   = $_POST['typeC'];

if($typeC === "veg")
{
  $xml = simplexml_load_file("vegchart.xml") or die("Error: Cannot create object");
}
else
{
    $xml = simplexml_load_file("nonveg.xml") or die("Error: Cannot create object");
}

$i = 0;
$j=0;
$z = 1;
$total=0;
$data = array();


foreach ($xml as $v)
{
    $i++;
}
while($total < $calo )
{
  $garb = rand(0,$i-1);
  $vcal = $xml->veg[$garb]->calories;
  $total = $total+$vcal;
  $data[$j] = $garb;
  $j++;
}
$result = array_unique($data);
$count = Round(count($data)/3);

foreach ($result as $s)
{

  echo "<p class='w3-text-red'>&nbsp└─<span class='w3-badge w3-pale-green'>".$z."</span>────<span class='w3-tag w3-green w3-round-large w3-large'>Food : ".$xml->veg[$s]->food."</span>──ᴏ──<span class='w3-tag w3-yellow w3-round-large w3-large'>Calories : ".$xml->veg[$s]->calories."</span>──ᴏ──<span class='w3-tag w3-pink w3-round-large w3-large'>Quantity : ".$xml->veg[$s]->desc."</span>──Ͻ</p><br>";
  $z++;
}

?>
