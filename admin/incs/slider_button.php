<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
<div class="top-section">
    <button id="sliderBtn" class="btn">Slider</button>
</div>






 <!-- Hidden Slider Form -->
 <div id="sliderForm" class="form-container" style="display: none;">
                    <h1>Slider Form</h1>
                    <form action="submit_slider.php" method="POST" enctype="multipart/form-data">
                        <input type="text" name="title" placeholder="Enter Title" required>
                        <input type="file" name="image" accept="image/*" required>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                 <!-- JavaScript to Show/Hide Form -->
                 <script>
                    document.getElementById("sliderBtn").addEventListener("click", function() {
                        var form = document.getElementById("sliderForm");
                        form.style.display = form.style.display === "none" ? "block" : "none";
                    });
                </script>
</body>
</html>