<?php
require_once("../admin/incs/connection.php");
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive CMS Dashboard</title>
    <link rel="stylesheet" href="css/dashbord.css">
</head>
<body>
    <?php require_once("./incs/side_dashboard.php") ?>

    <div class="main-content">
        <div class="dashboard">
            <div class="dashboard-topbar">
                <h1 class="dashboard-header">Interactive CMS Dashboard</h1>
                <a href="../logout.php" class="logout-btn">Logout</a>
            </div>
            <!-- Buttons to show Forms -->
            <div class="top-section">
                <button id="sliderBtn" class="btn">Slider</button>
                <button id="newsBtn" class="btn">News</button>
                <button id="marqueeBtn" class="btn">Marquee</button>
            </div>
            <!-- Forms Section -->
            <div id="formSection" class="bottom-section">
                <div class="form-container" id="sliderForm" style="display:none;">
                    <h3>Add Slider Image</h3>
                    <form action="./incs/slider_backend.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="sliderTitle" placeholder="Enter title" required>
                        <input type="file" name="sliderImage" accept="image/*" required>
                        <button type="submit" name="submit" value="sub">Submit</button>
                    </form>
                </div>
                <div class="form-container" id="newsForm" style="display:none;">
                    <h3>Add News</h3>
                    <form action="./incs/news_backend.php" method="POST">
                        <input type="text" name="newsTitle" placeholder="Enter news title" required>
                        <textarea name="newsDescription" placeholder="Enter news description" required></textarea>
                        <button type="submit" name="submit" value="sub">Submit</button>
                    </form>
                </div>
                <div class="form-container" id="marqueeForm" style="display:none;">
                    <h3>Add Marquee Text</h3>
                    <form action="./incs/marquee_backend.php" method="POST">
                        <input type="text" name="marqueeText" placeholder="Enter scrolling text" required>
                        <button type="submit" name="submit" value="sub">Submit</button>
                    </form>
                </div>
                <div class="form-container" id="marqueeForm" style="display:none;">
                    <h3>Add Marquee Text</h3>
                    <form action="./incs/marquee_backend.php" method="POST">
                        <input type="text" name="marqueeText" placeholder="Enter scrolling text" required>
                        <button type="submit" name="submit" value="sub">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/dashbord.js"></script>
</body>
</html>
