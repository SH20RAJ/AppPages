<?php
include "conn.php";

function loadapps($title,$category,$url){
include 'assets/loadapps.php';
}

  echo '<!DOCTYPE html><html lang="en" id="html" class="ap-open hfix" prefix="og: https://ogp.me/ns#">';

include "assets/head.php";

  echo "<body>";

include "assets/nav.php";
include "assets/search.php";

include 'assets/main_hero.php';

loadapps("Must Have",'must-have',0);
loadapps("Apps",0,0);


//include 'assets/loaddbapps.php';
include 'assets/footer.php'; 
?>

  </body>
</html>