<hr hint="popular-apps">
    <div class="page">
      <div class="wrp">
        <h1>Popular Apps</h1>
        <div class="content">
          <div class="app_list">
            <?php
// Retrieve the latest 20 uploaded apps data from the "apps" table
$sql = "SELECT * FROM apps ORDER BY upload_time DESC LIMIT 20";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through the result and fetch app data
    while ($row = $result->fetch_assoc()) {
        $appName = $row['app_name'];
        $appCategory = $row['app_category'];
        $appDescription = $row['app_description'];
        $appVersion = $row['app_version'];
        $appIcon = $row['app_icon'];
        $appSize = $row['app_size'];
        $packageName = $row['package_name'];
        $screenshots = $row['screenshots'];
        $appUrl = $row['app_url'];

              // Use heredoc syntax to define the HTML code
        $html = <<<HTML
<div class="item">
  <div class="item_app mod">
    <div class="img">
      <img src="$appIcon" alt="$appName" loading="lazy">
    </div>
    <div class="cont">
      <div class="data">
        <div class="name">
          <a href="view?p=$packageName" title="$appName">
            <span>$appName</span>
          </a>
        </div>
        <div class="developer xsmf muted">Max Games Studios</div>
      </div>
      <div class="meta muted">
        <div class="rate_star">
          <div id="ratig-layer-3381">
            <div class="rating">
              <ul class="unit-rating">
                <li class="current-rating" style="width:72%;">3.6</li>
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

        // Output the HTML code
        echo $html;
    }
} else {
    echo "No apps found.";
}

?>
            

            <!--<div class="navigation open" id="navcollapse"><div class="collapse"><div class="navigation_ext"><span><svg class="i__arrowleft"><use xlink:href="#i__arrowleft"></use></svg><span class="vhide">Back</span></span><div class="pages"><span>1</span><a href="https://an1.com/games/page/2/">2</a><a href="https://an1.com/games/page/3/">3</a><a href="https://an1.com/games/page/4/">4</a><span class="nav_ext">...</span><a href="https://an1.com/games/page/258/">258</a></div><a href="https://an1.com/games/page/2/"><svg class="i__arrowright"><use xlink:href="#i__arrowright"></use></svg><span class="vhide">Next</span></a></div></div><div class="navigation_in"><div id="ajax-next-page" class="nav_more"><a href="https://an1.com/games/page/2/"><span class="btn btn-dark"><span class="uppercase fbold smf">More...</span></span></a></div><button id="navcollapse_btn" class="btn uppercase smf" type="button"><span class="fbold">Page 1</span> of 258 <i class="arrow_drop"></i></button></div></div>-->
          </div>
        </div>
      </div>
    </div>