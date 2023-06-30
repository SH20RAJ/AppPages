<?php
include "conn.php";

function loadcate($cate,$title){
include 'assets/loadapps.php';
}

  echo '<!DOCTYPE html><html lang="en" id="html" class="ap-open hfix" prefix="og: https://ogp.me/ns#">';

include "assets/head.php";

  echo "<body>";

include "assets/nav.php";
include "assets/search.php";
$c = $_GET['q'];
//include 'assets/main_hero.php';

loadcate($c,ucfirst($c));
//loadapps("Apps",0,0);


//include 'assets/loaddbapps.php';
include 'assets/footer.php'; 
?>

  </body>
</html>