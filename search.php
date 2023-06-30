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
include "assets/search.php";

$search = $_GET['q'];

//include 'assets/main_hero.php';

//loadapps("Must Have",'must-have',0);

$html = <<<HTML
  <div class="app_list">
  <div class="box_grey"><form action="../search.php" method="get"><div class="search_field"><input name="q" id="searchinput2" value="$search" type="search"><button type="submit" title="Find">
  <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
  <span class="vhide">Search</span></button></div><input type="hidden" name="do" value="search"><input type="hidden" name="subaction" value="search"></form><div style="margin-top:8px" class="fbold smf uppercase">Found <span id="count"></span> responses : </div><div style="display:none;"><form name="fullsearch" id="fullsearch" action="search/" method="post" class="app-order"><div class="form-holder"><input type="hidden" name="do" id="do" value="search"><input type="hidden" name="subaction" id="subaction" value="search"><input type="hidden" name="search_start" id="search_start" value="0"><input type="hidden" name="full_search" id="full_search" value="0"><input type="hidden" name="result_from" id="result_from" value="1"> <input type="text" name="q" id="searchinput" class="input" value="" placeholder="" onchange="document.getElementById('result_from').value = 1"><br><br> <input type="button" class="btn btn-green" name="dosearch" id="dosearch" value="Start search" onclick="javascript:list_submit(-1); return false;"><span class="icon-search"></span></div></form></div></div>
  </div>
  HTML;



echo $html;
loadsearch($search);
//echo '<script>document.getElementById("count").innerText = "'.$count.'"</script>';

//include 'assets/loaddbapps.php';
include 'assets/footer.php'; 
?>

  </body>
</html>