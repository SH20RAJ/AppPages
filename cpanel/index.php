<?php
session_start();
include "logincheck.php";
include "../conn.php";
?>
<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>AppsPages - Dashboard </title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="../logo.png"/>
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <?php include "sidebar.php"?>
    <section class="home-section">
      <?php include "nav.php"?>

      <div class="home-content">
        <?php

if(isset($_GET['p'])){
  include $_GET['p'].".php";
} else {
  include "default.php";
}

?>
      </div>
    </section>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>
