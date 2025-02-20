<?php
include("connection.php");
if(isset($_POST['submit']) && $_POST['submit'] == 'sub') {
    $sliderTitle = $_POST['sliderTitle'];
    $sliderImage = $_FILES['sliderImage']['name'];  // uay original name store kary gi jo file hngi
    $imageTmpName = $_FILES['sliderImage']['tmp_name'];  // uy tem anme stoe kray gi upldo fule 
    $uploadDir = "../incs/uploads/";
    $accessdir = "uploads/".$sliderImage;
    $imagePath = $uploadDir . $sliderImage;
    // $imagepath = ../incs/uploads . 
    
    // Move file to uploads folder
    if (move_uploaded_file($imageTmpName, $imagePath)) {
        $query = "INSERT INTO slider (slider_title, slider_image) VALUES ('$sliderTitle', '$accessdir')";
        if (mysqli_query($conn, $query)) {
            echo "<script> window.location.href='../index.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('File upload failed!'); window.location.href='../index.php';</script>";
    }
}
?>