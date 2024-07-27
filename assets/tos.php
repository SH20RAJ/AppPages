<?php


  echo '<!DOCTYPE html><html lang="en" id="html" class="ap-open hfix" prefix="og: https://ogp.me/ns#">';

echo "<title>Terms of Service - AppsPages</title>";
include "head.php";

  echo "<body>";

include "nav.php";
include "search.php";

$html = <<<HTML
  <div class="app_view_wrp">
    
  <h1>Terms of Service</h1>
  
  <h2>Acceptance of Terms</h2>
  <p>By using our website and downloading apps from our platform, you agree to comply with and be bound by the following Terms of Service.</p>
  
  <h2>App Downloading</h2>
  <p>Our website provides a platform for users to download and install third-party apps. Please note the following:</p>
  <ul>
    <li>We do not develop or publish the apps available on our platform.</li>
    <li>We do not endorse or guarantee the quality, safety, or legality of the apps.</li>
    <li>Users download and use the apps at their own risk, and we shall not be held responsible for any damages or losses arising from their use.</li>
  </ul>
  
  <h2>Account Creation</h2>
  <p>To access certain features and services, you may need to create an account. By creating an account, you agree to provide accurate and complete information and to keep your account credentials confidential.</p>
  
  <h2>Intellectual Property</h2>
  <p>The content on our website, including logos, trademarks, and app listings, are protected by intellectual property laws. You may not reproduce, distribute, or modify the content without our prior written consent.</p>
  
  <h2>User Conduct</h2>
  <p>When using our website, you agree to:</p>
  <ul>
    <li>Comply with all applicable laws and regulations.</li>
    <li>Respect the intellectual property rights of others.</li>
    <li>Not engage in any unauthorized access or interference with our systems.</li>
    <li>Not upload or distribute any malicious software or harmful content.</li>
  </ul>
  
  <h2>Limitation of Liability</h2>
  <p>We shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising from the use of our website or the downloading and use of the apps available on our platform.</p>
  
  <h2>Termination</h2>
  <p>We reserve the right to suspend or terminate user accounts for any violations of our Terms of Service or for any other reason at our discretion.</p>
  
  <h2>Changes to the Terms of Service</h2>
  <p>We may revise these Terms of Service at any time. By continuing to use our website after the changes are made, you accept the revised Terms of Service.</p>
  
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
