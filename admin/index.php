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
    <!-- sweet alert  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/dashbord.css">
    <!-- css botstarp -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include("./incs/left_admin_dashboard.php") ?>
    <div class="main-content">
        <div class="dashboard">
            <div class="dashboard-topbar">
                <h1 class="dashboard-header">Interactive CMS Dashboard</h1>
                <a href="../logout.php" class="logout-btn">Logout</a>
            </div>

            <!-- Only Dashboard Section -->
            <div id="dashboardSection" style="display: none;">
                <?php include("incs/dashboard.php"); ?>
            </div>
            <!-- Slider List Section (Initially Hidden) -->
            <div id="sliderListSection" style="display: none;">
                <?php include("incs/slider_list.php"); ?>
            </div>
            <!-- News List Section (Initially Hidden) -->
            <div id="newsListSection" style="display: none;">
                <?php include("incs/news_list.php"); ?>
            </div>

            <!-- Marquee List Section (Initially Hidden) -->
            <div id="marqueeListSection" style="display: none;">
                <?php include("incs/marquee_list.php"); ?>
            </div>





        </div>
    </div>









    <!-- //es main wo hidern hain  jab hum side par click kartain hian to haumay wo file show hntin hian -->
    <script src="js/hidden_sidebar.js"></script>
    <!-- uay siraf only dashbord ki js hian jb hum click karay guty tab uay form show hnguy -->
    <script src="js/dashbord.js"></script>
</body>

</html>