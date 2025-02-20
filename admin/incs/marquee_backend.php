<?php
include("connection.php");

if(isset($_POST['submit']) && $_POST['submit'] == 'sub')
{
  $marquetext = $_POST['marqueeText'];
  $query = "INSERT INTO `marquee` ( marquee_text) VALUES ( '$marquetext');";
  $result = mysqli_query($conn,$query);
  if($result){
    echo "<script> window.location.href='../index.php';</script>";
  }else
  {
    echo "failsed ";
  }
}

?>