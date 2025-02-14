<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interactive </title>
    <link rel="stylesheet" href="css/dashbord.css">
</head>

<body>
    <!-- flow
     one div hain
     us ka andar 2 div hian 
     1.left sidebar dashboard hian
     2.main dash board hian  -->
    <div class="admin-dashboard">
        <!-- Left Sidebar -->
        <div class="sidebar">
            <!-- Admin Profile Section -->
            <div class="admin-profile">
                <img src="image/afabsb 22.jpeg" alt="Admin Photo" class="admin-photo">
                <h3 class="admin-name">Sir Aftab Ahmad</h3>
                <p class="admin-role">Admin</p>
            </div>

            <!-- Sidebar navigation hian hamray pass es  main  -->
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Reports</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>




        

        <!-- Main Content -->
        <div class="main-content" >
        
            <div class="dashboard">
            <h1 class="dashboard-header"> Interactive CMS Dashboard</h1>
                <!-- Top Section: Buttons -->
                <div class="top-section">
                    <button id="sliderBtn" class="btn">Slider</button>
                    <button id="newsBtn" class="btn">News</button>
                    <button id="marqueeBtn" class="btn">Marquee</button>
                </div>
                <!-- Middle Section: Containers -->
                <div class="middle-section">
                    <div id="sliderContainer" class="container">
                        <h2>Slider</h2>
                        <div id="sliderDisplay" class="slider-display">
                            <!-- uahn harmray pass image show hngi  -->
                        </div>
                    </div>
                    <div id="newsContainer" class="container">
                        <h2>News</h2>
                        <div id="newsDisplay" class="news-display">
                            <!-- News updates will be displayed here -->
                        </div>
                    </div>
                    <div id="marqueeContainer" class="container">
                        <h2>Marquee</h2>
                        <div id="marqueeDisplay" class="marquee-display">
                            <!-- Scrolling text will be displayed here -->
                        </div>
                    </div>
                </div>

                <!-- Bottom Section: Interactive Form -->
                <div id="formSection" class="bottom-section">
                    <!-- Form will dynamically appear here -->
                </div>
            </div>
        
         
        </div>

        




        </div>
        
     








            
        </div>
            
       



    </div>
    <script src="js/dashbord.js"></script>
</body>

</html>