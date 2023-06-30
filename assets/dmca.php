<?php


  echo '<!DOCTYPE html><html lang="en" id="html" class="ap-open hfix" prefix="og: https://ogp.me/ns#">';
echo "<title>DMCA Policy - AppsPages</title>";

include "head.php";

  echo "<body>";

include "nav.php";
include "search.php";

$html = <<<HTML
  <div class="app_view_wrp">
   <h1>DMCA Policy</h1>
  
  <h2>Introduction</h2>
  <p>This website respects the intellectual property rights of others and expects its users to do the same.</p>
  
  <h2>Copyright Infringement Reporting</h2>
  <p>If you believe that your copyrighted work has been infringed upon, please provide the following information to report the infringement:</p>
  <ul>
    <li>Your contact information (name, address, phone number, and email address)</li>
    <li>The copyrighted work (provide specific details and the URL of the infringing material)</li>
    <li>A statement that you have a good faith belief that the use of the copyrighted material is not authorized by the owner</li>
    <li>A statement that the information in your report is accurate and that you are the copyright owner or authorized to act on behalf of the copyright owner</li>
    <li>Your electronic or physical signature</li>
  </ul>
  
  <h2>Notice and Takedown Procedure</h2>
  <p>Upon receipt of a valid DMCA notice, we will:</p>
  <ul>
    <li>Investigate the claim of infringement</li>
    <li>Take appropriate action, which may include removing or disabling access to the infringing material</li>
    <li>Notify the user responsible for the infringing material</li>
  </ul>
  
  <h2>Counter-Notification</h2>
  <p>If you believe that your content was wrongly removed due to a DMCA notice, you may submit a counter-notification. The counter-notification must include:</p>
  <ul>
    <li>Your contact information (name, address, phone number, and email address)</li>
    <li>A statement under penalty of perjury that you have a good faith belief that the material was removed or disabled as a result of a mistake or misidentification</li>
    <li>Your electronic or physical signature</li>
  </ul>
  
  <h2>Repeat Infringers</h2>
  <p>We have a policy of terminating user accounts of repeat infringers.</p>
  
  </div>

  HTML;
echo $html;

//include 'assets/loaddbapps.php';
include 'footer.php'; 
?>

  </body>
</html>