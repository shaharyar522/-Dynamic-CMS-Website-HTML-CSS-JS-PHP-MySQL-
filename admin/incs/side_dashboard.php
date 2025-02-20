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
              <img src="image/shari.jpeg" alt="Admin Photo" class="admin-photo">
              <h3 class="admin-name">Shahar Yar</h3>
              <p class="admin-role">Admin</p>
          </div>

          <!-- Sidebar navigation hian hamray pass es  main  -->
          <ul>
              <li><a href="#">Home</a></li>
              <li onclick="showTable('slider-table')">Slider List</li>
              <li onclick="showTable('news-table')">News List</li>
              <li onclick="showTable('marquee-table')">Marquee List</li>
          </ul>
      </div>
      