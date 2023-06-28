<nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search...">
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <img src="images/profile.jpg" alt="">
          <span class="admin_name"><?php echo $_SESSION['username'] ;?></span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>