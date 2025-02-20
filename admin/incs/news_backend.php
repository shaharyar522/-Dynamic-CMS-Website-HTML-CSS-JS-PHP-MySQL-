<?php
include("connection.php");
if(isset($_POST['submit'])  && $_POST['submit'] == 'sub') {
    $newsTitle = $_POST['newsTitle'];
    $newsDescription = $_POST['newsDescription'];
    
    // Insert data into the database
    $query = "INSERT INTO news (news_title, news_description) VALUES ('$newsTitle', '$newsDescription')";
    $result = mysqli_query($conn,$query);

    if($result){
        echo "<script> window.location.href='../index.php';</script>";
    }else
    {
        echo "<script>alert('Error: " . mysqli_error($conn) . "'); window.location.href='index.php';</script>";
    }
}
?>
