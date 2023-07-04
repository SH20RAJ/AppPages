<?php
include 'conn.php';
// Fetch app data from the "apps" table
$sql = "SELECT * FROM apps where package_name='".$_GET['p']."' or app_id='".$_GET['p']."' ";
$result = $conn->query($sql);

function bytesToMB($bytes) {
    $megabytes = round($bytes / 1024 / 1024 , 1);
    return $megabytes;
}


if ($result->num_rows > 0) {
    // Output data for each app
    while ($row = $result->fetch_assoc()) {
        $appName = $row["app_name"];
        $appCategory = $row["app_category"];
        $appDesc = $row["app_description"];
        $appVersion = $row["app_version"];
        $appIcon = $row["app_icon"];
        $appSize = bytesToMB($row["app_size"]);
        $packageName = $row["package_name"];
        $screenshots = explode(",", $row["screenshots"]);
        $appUrl = $row["app_url"];
        $appplat = $row["supported_platforms"];
        $time = $row["upload_time"];
        $downloads = $row["downloads"];
        $views = $row["views"];
        $verified = $row["verified"];
        $rating = '5';
        $ratingcounter = '1000000';
    }
} else {
    echo "No apps found in the database.";
  die();
}



?>

<!DOCTYPE html>
<html lang="en" id="html" class="ap-open hfix tb_on" prefix="og: https://ogp.me/ns#">
   <?php include 'assets/head.php' ; ?>
   <body>
     <?php include "assets/nav.php";include "assets/search.php" ?>
      <div class="page" style="height: auto !important;">
         <div class="wrp" style="height: auto !important;">
            <div class="content no-toolbar" style="height: auto !important;">
               <article class="app_view ignore-select" itemscope="" itemtype="https://schema.org/MobileApplication" style="height: auto !important;">
                  <div class="app_view_wrp">
                     <div class="app_view_pad">
                        <meta itemprop="applicationCategory" content="Games">
                        <meta itemprop="applicationSubCategory" content="Music">
                        <ul class="catbar" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                           <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                              <meta itemprop="position" content="1">
                              <a href="/" itemprop="item"><span itemprop="name">AppsPages</span></a>
                           </li>
                           <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                              <meta itemprop="position" content="2">
                              <a href="/games/" itemprop="item"><span itemprop="name">Games</span></a>
                           </li>
                           <li itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                              <meta itemprop="position" content="3">
                              <a href="/apps/" itemprop="item"><span itemprop="name">Apps</span></a>
                           </li>
                        </ul>
                        <h1 class="title xxlgf" itemprop="headline"><?php echo $appName ;?></h1>
                        <meta itemprop="name" content="<?php echo $appName ;?>">
                        <div class="app_view-first">
                           <figure class="img"> <img itemprop="image" src="<?php echo $appIcon;?>" alt="<?php echo $appName ;?>"> <span class="label-offline"><span>Offline</span></span> </figure>
                           <div class="cont inline">
                              <ul class="spec smf">
                                 <li>
                                    <i class="spec_icon muted">
                                       <svg class="i__duocheck">
                                          <use xlink:href="#i__duocheck"></use>
                                       </svg>
                                    </i>
                                    <span itemprop="operatingSystem" content="Android"><?php echo $appplat; ?></span> + 
                                 </li>
                                 <li>
                                    <i class="spec_icon muted">
                                       <svg class="i__version">
                                          <use xlink:href="#i__version"></use>
                                       </svg>
                                    </i>
                                    Version: <span itemprop="softwareVersion"><?php echo $appVersion ; ?></span> 
                                 </li>
                                 <li>
                                    <i class="spec_icon muted">
                                       <svg class="i__size">
                                          <use xlink:href="#i__size"></use>
                                       </svg>
                                    </i>
                                    <span itemprop="fileSize"><?php echo $appSize; ?>Mb</span> 
                                 </li>
                              </ul>
                              <div class="spec_addon">
                                 <a href="<?php echo $appUrl; ?>" class="btn btn-lg btn-green" role="button" rel="nofollow"><span class="uppercase fbold">Download (<?php echo $appSize; ?>Mb)</span></a> 
                                 <p class="smf d-none d-md-block">
                                    <i class="muted">
                                       <svg class="i__reload" style="width: 24px; height: 24px;">
                                          <use xlink:href="#i__reload"></use>
                                       </svg>
                                    </i>
                                    Updated to version <?php echo $appVersion ; ?>! 
                                 </p>
                              </div>
                           </div>
                        </div>
                        <div class="developer smf muted" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization"> <span itemprop="name">
                           <?php echo $developer.'<br/>'.$packageName ;?>
                        </span> </div>
                        <div class="description">
                           <div id="spoiler" class="spoiler" itemprop="description"><?php echo $appDesc ;?>  </div>
                           <button id="spoiler-btn" class="btn btn-sm spoiler-btn uppercase fbold" type="button">
                              <svg class="i__more" xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                 <g>
                                    <circle fill="none" cx="12" cy="12" r="12"></circle>
                                    <circle fill="none" style="stroke:currentColor;stroke-width:2;" cx="12" cy="12" r="11"></circle>
                                 </g>
                                 <circle class="i__more_c1" fill="currentColor" cx="8" cy="12" r="1"></circle>
                                 <circle class="i__more_c2" fill="currentColor" cx="12" cy="12" r="1"></circle>
                                 <circle class="i__more_c3" fill="currentColor" cx="16" cy="12" r="1"></circle>
                              </svg>
                              <span class="spoiler-btn-o">Full</span><span class="spoiler-btn-h">Hide</span> description 
                           </button>
                        </div>
                        <div class="app-faq">
                           <div class="app-faq-heading">
                              <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"></path>
                              </svg>
                              <span>Questions and Answers</span>
                           </div>
                           <ul class="app-faq-list" style="display:none;">
                              <li>
                                 <h4 class="app-faq-title">How do I update a game or program without losing progress/save?</h4>
                                 <div class="app-faq-text">How to install?</div>
                              </li>
                           </ul>
                        </div>
                        <div class="version_upload" style="display:none;">
                           <i class="muted">
                              <svg class="i__reload" width="24" height="24">
                                 <use xlink:href="#i__reload"></use>
                              </svg>
                           </i>
                           Updated to version <?php echo $appVersion ; ?>! 
                        </div>
                        <div style="display:none" class="share">
                           <div class="share-box">
                              <a class="share-btn share-fb" href="https://www.facebook.com/sharer.php?src=sp&amp;u=https://an1.com/4980-magic-tiles-3-mod.html&amp;title=Download&nbsp;Magic+Tiles+3+%28MOD%2C+Unlimited+Money%29&nbsp;<?php echo $appVersion ; ?>" target="_blank" rel="noopener nofollow" title="Share on Facebook" aria-label="Share on Facebook" onclick="minWin(this.href); return false;">
                                 <svg width="24" height="24">
                                    <use xlink:href="#i__share-fb"></use>
                                 </svg>
                              </a>
                              <a class="share-btn share-tw" href="https://twitter.com/intent/tweet?text=Download&nbsp;Magic+Tiles+3+%28MOD%2C+Unlimited+Money%29&nbsp;<?php echo $appVersion ; ?>&amp;url=https://an1.com/4980-magic-tiles-3-mod.html" target="_blank" rel="noopener nofollow" title="Share on Twitter" aria-label="Share on Twitter" onclick="minWin(this.href); return false;">
                                 <svg width="24" height="24">
                                    <use xlink:href="#i__share-tw"></use>
                                 </svg>
                              </a>
                              <a class="share-btn share-tg" href="https://t.me/share/url?url=https://an1.com/4980-magic-tiles-3-mod.html&amp;text=Download&nbsp;Magic+Tiles+3+%28MOD%2C+Unlimited+Money%29&nbsp;<?php echo $appVersion ; ?>" target="_blank" rel="noopener nofollow" title="Share on Telegram" aria-label="Share on Telegram" onclick="minWin(this.href); return false;">
                                 <svg width="20" height="20">
                                    <use xlink:href="#i__share-tg"></use>
                                 </svg>
                              </a>
                              <a class="share-btn share-wa" href="https://api.whatsapp.com/send?text=Download&nbsp;Magic+Tiles+3+%28MOD%2C+Unlimited+Money%29&nbsp;<?php echo $appVersion ; ?>&nbsp;https://an1.com/4980-magic-tiles-3-mod.html" target="_blank" rel="noopener nofollow" title="Share on WhatsApp" aria-label="Share on WhatsApp" onclick="minWin(this.href); return false;">
                                 <svg width="20" height="20">
                                    <use xlink:href="#i__share-wa"></use>
                                 </svg>
                              </a>
                           </div>
                        </div>
                        <div class="rate" itemprop="aggregateRating" itemscope="" itemtype="https://schema.org/AggregateRating">
                           <meta itemprop="itemReviewed" content="<?php echo $appName ;?>">
                           <meta itemprop="bestRating" content="5">
                           <meta itemprop="worstRating" content="1">
                           <div id="ratig-layer-4980">
                              <div class="rating">
                                 <ul class="unit-rating">
                                    <li class="current-rating" style="width:68%;"><?php echo $rating ;?></li>
                                    <li><a title="Useless" class="r1-unit" onclick="doRate('1', '4980'); return false;">1</a></li>
                                    <li><a title="Poor" class="r2-unit" onclick="doRate('2', '4980'); return false;">2</a></li>
                                    <li><a title="Fair" class="r3-unit" onclick="doRate('3', '4980'); return false;">3</a></li>
                                    <li><a title="Good" class="r4-unit" onclick="doRate('4', '4980'); return false;">4</a></li>
                                    <li><a title="Excellent" class="r5-unit" onclick="doRate('5', '4980'); return false;">5</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="rate_num"><span class="fbold" itemprop="ratingValue"><?php echo $rating ;?></span> (<span id="vote-num-id-4980" class="count" itemprop="ratingCount"><?php echo $ratingcounter; ?></span>)</div>
                        </div>
                     </div>
                     <div class="app_screens">
                        <div class="sep_line"></div>
                        <div class="section-title fbold">Screenshots</div>
                        <div class="app_screens_in">
                           <div class="app_screens_list">
                           <?php
                        foreach ($screenshots as $url) {
                           echo '<a href="'.$url.'" target="_blank">
                                                         <meta itemprop="screenshot" content="'.$url.'">
                                                         <img src="'.$url.'" width="169" height="300" alt="'.$appName .'" loading="lazy">
                                                      </a>';
                        }

?>                  

                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="anchor-line"><span id="dw"></span></div>
                  <div class="box_download box_shadow">
                     <div class="cont">
                        <a class="download_line green" href="<?php echo $appUrl; ?>" rel="nofollow">
                           <div>
                              <i>
                                 <svg class="i__download" width="24" height="24">
                                    <use xlink:href="#i__download"></use>
                                 </svg>
                              </i>
                              Download <?php echo $appName ;?>  <?php echo $appVersion ; ?>.apk
                           </div>
                           <i class="size"><?php echo $appSize; ?>Mb</i> 
                        </a>
                        <a class="download_line brand" rel="sponsored nofollow" href="<?php echo $appLinkAlt ;?>" style="display:none;">
                           <div>
                              <i>
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
                                    <path fill="currentColor" d="M12,28V22h4a6,6,0,1,0-6-6v4H4V16A12,12,0,1,1,16,28ZM2.67,28,4,26.62V22h6v6Zm12.7-11.33H12l5.05-5.33-1.36,4h3.5l-5.11,5.6Z"></path>
                                 </svg>
                              </i>
                              Download <?php echo $appName ;?>
                           </div>
                           <i class="size">Play now</i> 
                        </a>
                     </div>
                  </div>
                  <div class="box_grey app_moreinfo" style="height: auto !important;">
                     <div class="grid">
                        <div class="grid-2">
                           <div class="app_moreinfo_item gplay">
                              <i class="c-green">
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="24" height="24">
                                    <path fill="#68CB5B" d="M245.4 1.5c-3.4.7-8.5 2.5-11.5 4-6.6 3.4-16.5 13.3-20.2 20.2-5.6 10.5-5.7 11.5-5.7 100.5V208h-81.7c-88.8 0-89.6.1-100.4 5.6-2.9 1.4-8.2 5.5-11.6 9C-.1 237-3.7 258 5 276.8c3.6 7.8 13.3 17.8 20.9 21.6 10.8 5.5 11.6 5.6 100.4 5.6H208v81.7c0 88.8.1 89.6 5.6 100.4 3.8 7.6 13.8 17.3 21.6 20.9 18.8 8.7 39.8 5.1 54.2-9.3 3.5-3.4 7.6-8.7 9-11.6 5.5-10.8 5.6-11.6 5.6-100.4V304h81.8c88.7 0 89.5-.1 100.3-5.6 7.6-3.8 17.3-13.8 20.9-21.6 8.7-18.8 5.1-39.8-9.3-54.2-3.4-3.5-8.7-7.6-11.6-9-10.8-5.5-11.6-5.6-100.3-5.6H304v-81.8c0-88.7-.1-89.5-5.6-100.3C295 19 285 9 278.1 5.6 272.2 2.5 261.6 0 255.5.1c-2.2 0-6.7.7-10.1 1.4z"></path>
                                 </svg>
                              </i>
                              <div class="fbold">Additional Information:</div>
                              <div class="smf">
                                 <ul class="spec">
                                    <li><span class="d-block"><b>Updated</b></span> <time itemprop="datePublished" datetime="2023-06-27T00:01:07+03:00"><?php echo $time; ?></time></li>
                                    <li itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
                                       <span class="d-block"><b>Price</b></span><span itemprop="price" content="0">$0</span>
                                       <meta itemprop="priceCurrency" content="USD">
                                    </li>
                                    <li><span class="d-block"><b>Installs</b></span> <?php echo $downloads; ?></li>
                                    <li><span class="d-block"><b>Last Updated</b></span> <?php echo $time; ?></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="grid-2">
                           <div class="app_moreinfo_item novirus">
                              <i class="c-green">
                                 <svg class="i__shield" width="24" height="24">
                                    <use xlink:href="#i__shield"></use>
                                 </svg>
                              </i>
                              <div class="fbold">Good speed and no viruses!</div>
                              <p class="smf">On our site you can easily download <?php echo $appName ;?> .apk! All without registration and send SMS!</p>
                           </div>
                        </div>
                     </div>
<!--Google Ads-->
               </article>
            </div>
         </div>
      </div>
<?php
$title = 'Releted Apps';
//$group = 'strategy';
$newurl = 'https://ws75.aptoide.com/api/7/apps/getRecommended?limit=21&app_id='.$app_id;
include 'assets/loadapps.php';
include('assets/footer.php');

$sql = "UPDATE apps SET views = views + 1 where package_name='".$_GET['p']."' or app_id='".$_GET['p']."'";
$conn->query($sql) ;

?>
      <script src="index.js"></script>
   </body>
</html>
