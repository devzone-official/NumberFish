<?php
$number = $_GET['number'];
$link = mysqli_connect('localhost', 'u661228777_app', 'NFish_pass', 'u661228777_nfish');
if($link){
  $stmt = "SELECT * FROM info WHERE number='$number'";
  $query = mysqli_query($link,$stmt);
  if($query){
    $result = mysqli_fetch_array($query);
    if($result == null){
      echo json_encode(["number"=>"Number Unavailable","status"=>"2"]);
    }
    else {
      echo json_encode($result);
    }
  }
  else{
    echo json_encode(["number"=>"Data Unavailable","status"=>"3"]);
  }
}
else {
  echo json_encode(["number"=>"Server not Responding","status"=>"4"]);
}
mysqli_close($link);
?>
