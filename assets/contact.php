<?php


  echo '<!DOCTYPE html><html lang="en" id="html" class="ap-open hfix" prefix="og: https://ogp.me/ns#">';

echo "<title>Terms of Service - AppsPages</title>";
include "head.php";

  echo "<body>";

include "nav.php";
include "search.php";

$html = <<<HTML
  <div class="app_view_wrp">

  <h2>Contact Us</h2>
  <p>If you have any questions or concerns regarding our Terms of Service, please contact us using the provided contact details.</p>
  mail@appspages.sh20raj.com
  </div>

  HTML;
echo $html;

//include 'assets/loaddbapps.php';
include 'footer.php'; 
?>

  </body>
</html>
