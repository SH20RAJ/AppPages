<?php
include "conn.php";

function loadsearch($search){
$title = 'Search Result : ';
include 'assets/loadapps.php';
}

  echo '<!DOCTYPE html><html lang="en" id="html" class="ap-open hfix" prefix="og: https://ogp.me/ns#">';

include "assets/head.php";

  echo "<body>";

include "assets/nav.php";
//include 'assets/main_hero.php';

//loadapps("Must Have",'must-have',0);
loadsearch('PUBG');



//include 'assets/loaddbapps.php';
include 'assets/footer.php'; 
?>

  </body>
</html>