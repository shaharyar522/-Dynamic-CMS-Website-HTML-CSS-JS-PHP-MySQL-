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
            <div id="homeSection" style="display: none;">
                <?php include("incs/home.php"); ?>
            </div>

            <!-- Slider List Page (Initially Hidden) -->
            <div id="sliderPage" style="display: none;">
                <?php require_once("incs/slider_list.php"); ?>
            </div>

            <!-- News List Page (Initially Hidden) -->
        <div id="newsPage" style="display: none;">
            <?php require_once("incs/news_list.php"); ?>
        </div>

        <!-- Marquee List Page (Initially Hidden) -->
        <div id="marqueePage" style="display: none;">
            <?php require_once("incs/marquee_list.php"); ?>
        </div>





        </div>
    </div>
    <script src="js/dashbord.js"></script>
    <script>
document.addEventListener("DOMContentLoaded", function() {
    let homeSection = document.getElementById("homeSection");
    let sliderPage = document.getElementById("sliderPage");
    let newsPage = document.getElementById("newsPage");
    let marqueePage = document.getElementById("marqueePage");

    function showOnly(section) {
      
        homeSection.style.display = "none";
        sliderPage.style.display = "none";
        newsPage.style.display = "none";
        marqueePage.style.display = "none";

        // صرف منتخب شدہ سیکشن کو دکھائیں
        section.style.display = "block";
    }

    document.getElementById("homeLink").addEventListener("click", function(event) {
        event.preventDefault();
        showOnly(homeSection);
    });

    document.getElementById("sliderLink").addEventListener("click", function(event) {
        event.preventDefault();
        showOnly(sliderPage);
    });

    document.getElementById("newsLink").addEventListener("click", function(event) {
        event.preventDefault();
        showOnly(newsPage);
    });

    document.getElementById("marqueeLink").addEventListener("click", function(event) {
        event.preventDefault();
        showOnly(marqueePage);
    });
});

    </script>
</body>

</html>