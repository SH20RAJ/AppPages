<?php
include "conn.php";




  echo '<!DOCTYPE html><html lang="en" id="html" class="ap-open hfix" prefix="og: https://ogp.me/ns#">';

include "assets/head.php";

 echo "<body>";

include "assets/nav.php";
include "assets/search.php";


//loadcate($c,ucfirst($c));
$user = $_GET['user'];
include 'assets/loaddbapps.php';


//include 'assets/loaddbapps.php';
include 'assets/footer.php'; 
?>

  </body>
</html>
