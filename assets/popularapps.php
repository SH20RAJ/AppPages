
        <hr hint="popular-apps">
    <div class="page">
      <div class="wrp">
        <h1>Popular Apps</h1>
        <div class="content">
          <div class="app_list">
        <?php
$url = 'https://appspages.sh20raj.com/api/aptoide.php';  // Replace with the URL of your JSON file
// Fetch the JSON data
$jsonData = file_get_contents($url);

// Decode the JSON data
 $data = json_decode($jsonData, true);  // Set the second parameter to 'true' for associative array
$data = $data['props']['pageProps'];

$topAppsBundle = $data['topAppsBundle']['list'];

// Iterate through each app and display the details
foreach ($topAppsBundle as $app) {
    $appName = $app['name'];
    $packageName = $app['package'];
    $appIcon = $app['icon'];
    $developer = $app['downloads'];
    $rating = $app['score'];
    $uname = $app['uname'];


 // Use heredoc syntax to define the HTML code
$html = <<<HTML
  <style>
  .item_app.mod .meta::before {
    content: "Download";
}
  </style>
<div class="item">
  <div class="item_app mod">
    <div class="img">
      <img src="$appIcon" alt="$appName" loading="lazy">
    </div>
    <div class="cont">
      <div class="data">
        <div class="name">
          <a href="app?p=$uname" title="$appName">
            <span>$appName</span>
          </a>
        </div>
        <div class="developer xsmf muted">$developer</div>
      </div>
      <div class="meta muted">
        <div class="rate_star">
          <div id="ratig-layer-3381">
            <div class="rating">
              <ul class="unit-rating">
                <li class="current-rating" style="width:72%;">$rating</li>
                <li>
                  <a href="#" title="Useless" class="r1-unit" onclick="doRate('1', '3381'); return false;">1</a>
                </li>
                <li>
                  <a href="#" title="Poor" class="r2-unit" onclick="doRate('2', '3381'); return false;">2</a>
                </li>
                <li>
                  <a href="#" title="Fair" class="r3-unit" onclick="doRate('3', '3381'); return false;">3</a>
                </li>
                <li>
                  <a href="#" title="Good" class="r4-unit" onclick="doRate('4', '3381'); return false;">4</a>
                </li>
                <li>
                  <a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '3381'); return false;">5</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
HTML;
echo $html;
}
?>
            

            <!--<div class="navigation open" id="navcollapse"><div class="collapse"><div class="navigation_ext"><span><svg class="i__arrowleft"><use xlink:href="#i__arrowleft"></use></svg><span class="vhide">Back</span></span><div class="pages"><span>1</span><a href="https://an1.com/games/page/2/">2</a><a href="https://an1.com/games/page/3/">3</a><a href="https://an1.com/games/page/4/">4</a><span class="nav_ext">...</span><a href="https://an1.com/games/page/258/">258</a></div><a href="https://an1.com/games/page/2/"><svg class="i__arrowright"><use xlink:href="#i__arrowright"></use></svg><span class="vhide">Next</span></a></div></div><div class="navigation_in"><div id="ajax-next-page" class="nav_more"><a href="https://an1.com/games/page/2/"><span class="btn btn-dark"><span class="uppercase fbold smf">More...</span></span></a></div><button id="navcollapse_btn" class="btn uppercase smf" type="button"><span class="fbold">Page 1</span> of 258 <i class="arrow_drop"></i></button></div></div>-->
          </div>
        </div>
      </div>
    </div>
    
   