<?php
if(isset($_GET['p'])){
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
  
} else {
  
}
        



?>

<!DOCTYPE html>
<html lang="en" id="html" class="ap-open hfix tb_on" prefix="og: https://ogp.me/ns#">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?php echo $appName ;?> - Download - AppsPages</title>
      <link rel="stylesheet" href="https://an1.com/templates/an1/css/styles.css?v=6.0">
     <link rel="icon" href="<?php echo $appIcon;?>"/>
   </head>
   <body>
     <div class="header"> <header> 
       <div class="logo">
         <a href="./">
         <img src="../logo.png" style="width:40px;margin-top:10px;"/></a>
       </div> <button onclick='document.getElementById("html").classList.remove("hm")' class="head_menu_btn d-block d-lg-none" type="button" aria-label="Menu"><span class="butterbrod"><i></i><i></i><i></i></span></button> <div class="hmenu open" style="display:none"> <button class="btn-close hmenu_close d-block d-lg-none" type="button"><svg class="i__close"><use xlink:href="#i__close"></use></svg></button> <div class="head_menu"> <ul class="head_menu_f"> <li> <a class="xsmf fbold" href="/"> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect fill="none" width="24" height="24"></rect><path fill="currentColor" class="icon_lightcolor" d="M12,2.8L2,12.2V19h20v-6.8L12,2.8 M12,0.1l12,11.2V21H0v-9.7L12,0.1z"></path><circle fill="currentColor" cx="15" cy="19" r="5"></circle></svg></i> <span>Home</span> </a> </li> <li class="active"> <a class="xsmf fbold" href="/games/"> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect fill="none" width="24" height="24"></rect><circle fill="currentColor" cx="8" cy="16" r="3"></circle><path fill="currentColor" class="icon_lightcolor" d="M16,8h-2V7c0-1.7-1.3-3-3-3H8C7.4,4,7,3.6,7,3s0.4-1,1-1h10V0H8C6.3,0,5,1.3,5,3s1.3,3,3,3h3c0.6,0,1,0.4,1,1v1H8c-4.4,0-8,3.6-8,8s3.6,8,8,8h8c4.4,0,8-3.6,8-8S20.4,8,16,8z M16,22H8c-3.3,0-6-2.7-6-6s2.7-6,6-6h8c3.3,0,6,2.7,6,6S19.3,22,16,22z"></path></svg></i> <span>Games</span> </a> <div class="submenu"> <button class="toggle_submenu muted" type="button"><svg class="i__arrowleft"><use xlink:href="#i__arrowleft"></use></svg></button> <ul> <li class="d-lg-none"><a class="fbold" href="/games/">All Games</a></li> <li><a href="/games/action/"><span>Action (699)</span></a></li><li><a href="/games/cards/"><span>Cards (35)</span></a></li><li><a href="/games/arcade/"><span>Arcade (511)</span></a></li><li><a href="/games/rpg/"><span>RPG (4)</span></a></li><li><a href="/games/shooter/"><span>Shooter (6)</span></a></li><li><a href="/games/casual/"><span>Casual (289)</span></a></li><li><a href="/games/strategy/"><span>Strategy (275)</span></a></li><li><a href="/games/sport/"><span>Sport (194)</span></a></li><li><a href="/games/simulations/"><span>Simulations (416)</span></a></li><li><a href="/games/race/"><span>Race (299)</span></a></li><li><a href="/games/desktop/"><span>Desktop (32)</span></a></li><li><a href="/games/logical/"><span>Logical (153)</span></a></li><li><a href="/games/quests/"><span>Quests (8)</span></a></li><li><a href="/games/adventure/"><span>Adventure (256)</span></a></li><li><a href="/games/music/"><span>Music (30)</span></a></li><li><a href="/games/role-playing/"><span>Role Playing (246)</span></a></li><li><a href="/games/puzzle/"><span>Puzzle (157)</span></a></li> </ul> </div> </li> <li> <a class="xsmf fbold" href="/programmy/"> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect fill="none" width="24" height="24"></rect><path fill="currentColor" d="M14,0h8c1.1,0,2,0.9,2,2v8c0,1.1-0.9,2-2,2h-8c-1.1,0-2-0.9-2-2V2C12,0.9,12.9,0,14,0z"></path><path fill="currentColor" class="icon_lightcolor" d="M10,14V6H2.8C1.2,6,0,7.2,0,8.8v12.4C0,22.8,1.2,24,2.8,24h12.4c1.5,0,2.8-1.2,2.8-2.8V14H10zM2.8,8H8v6H2V8.8C2,8.3,2.3,8,2.8,8z M2.8,22C2.3,22,2,21.7,2,21.2V16h6v6H2.8z M15.2,22H10v-6h6v5.2C16,21.7,15.7,22,15.2,22z"></path></svg></i> <span>Programs</span> </a> <div class="submenu"> <button class="toggle_submenu muted" type="button"><svg class="i__arrowleft"><use xlink:href="#i__arrowleft"></use></svg></button> <ul> <li class="d-lg-none"><a class="fbold" href="/programmy/">All Programs</a></li> <li><a href="https://an1.com/programmy/business-amp-finance/"><span>Business &amp; Finance (11)</span></a></li><li><a href="https://an1.com/programmy/health-and-sport/"><span>Health and Sport (14)</span></a></li><li><a href="https://an1.com/programmy/internet/"><span>Internet (12)</span></a></li><li><a href="https://an1.com/programmy/social/"><span>Social (13)</span></a></li><li><a href="https://an1.com/programmy/music-and-video/"><span>Music and Video (32)</span></a></li><li><a href="https://an1.com/programmy/personalization/"><span>Personalization (36)</span></a></li><li><a href="https://an1.com/programmy/education/"><span>Education (9)</span></a></li><li><a href="https://an1.com/programmy/office/"><span>Office (7)</span></a></li><li><a href="https://an1.com/programmy/weather/"><span>Weather (4)</span></a></li><li><a href="https://an1.com/programmy/travel/"><span>Travel (16)</span></a></li><li><a href="https://an1.com/programmy/camera/"><span>Camera (18)</span></a></li><li><a href="https://an1.com/programmy/photography/"><span>Photography (25)</span></a></li><li><a href="https://an1.com/programmy/file-managers/"><span>File Managers (3)</span></a></li><li><a href="https://an1.com/programmy/translators/"><span>Translators (1)</span></a></li><li><a href="https://an1.com/programmy/link/"><span>Link (23)</span></a></li><li><a href="https://an1.com/programmy/tools/"><span>Tools (139)</span></a></li> </ul> </div> </li> <li> <a class="xsmf fbold" href="/news/"> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect fill="none" width="24" height="24"></rect><path fill="currentColor" class="icon_lightcolor" d="M10,4.8L6.6,8.2c-1.4,1.4-2.3,3.2-2.5,5.2c-0.2,2,0.3,3.9,1.5,5.4c1.5,2,3.9,3.2,6.4,3.2c3,0,5.6-1.6,7.1-4.4c0.9-1.6,1.1-3.5,0.7-5.2C18.9,12.8,17.9,13,17,13c-3.9,0-7-3.1-7-7V4.8 M11.9,0C11.9,0,12,0,11.9,0l0,6c0,2.8,2.2,5,5,5c1.5,0,2.8-0.7,3.7-1.7c1.6,2.9,1.7,6.4,0.1,9.3C18.9,22.2,15.4,24,12,24c-3,0-6-1.3-8-4c-3-4-2.4-9.7,1.2-13.2L11.9,0C11.9,0,11.9,0,11.9,0z"></path><path fill="currentColor" d="M7.9,11.5c-1.4,2.3-0.8,5.3,1.5,6.8c2.2,1.4,5.1,0.8,6.6-1.3C12.5,16.8,9.3,14.7,7.9,11.5z"></path></svg></i> <span>News</span> </a> <div class="submenu"> <button class="toggle_submenu muted" type="button"><svg class="i__arrowleft"><use xlink:href="#i__arrowleft"></use></svg></button> <ul> <li class="d-lg-none"><a class="fbold" href="/news/">All News</a></li> <li><a href="https://an1.com/news/android/"><span>Android (239)</span></a></li><li><a href="https://an1.com/news/apple/"><span>Apple (148)</span></a></li><li><a href="https://an1.com/news/novelty/"><span>Novelty (1119)</span></a></li><li><a href="https://an1.com/news/windows/"><span>Windows (10)</span></a></li> </ul> </div> </li> <li> <a class="xsmf fbold" href="/articles/"> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect x="0" fill="none" width="24" height="24"></rect><path fill="currentColor" class="icon_lightcolor" d="M22,5.2V4.7c0-2-1.7-3.7-3.7-3.7H5.7C3.7,1,2,2.7,2,4.7v0.5C0.8,5.6,0,6.7,0,8v12c0,1.7,1.3,3,3,3h18c1.7,0,3-1.3,3-3V8C24,6.7,23.2,5.6,22,5.2z M5.7,3h12.6C19.2,3,20,3.8,20,4.7V5H4V4.7C4,3.8,4.8,3,5.7,3z M22,20c0,0.6-0.4,1-1,1H3c-0.6,0-1-0.4-1-1V8c0-0.6,0.4-1,1-1h18c0.6,0,1,0.4,1,1V20z"></path><path fill="currentColor" d="M6,10h12c0.6,0,1,0.4,1,1l0,0c0,0.6-0.4,1-1,1H6c-0.6,0-1-0.4-1-1l0,0C5,10.4,5.4,10,6,10z"></path><path fill="currentColor" d="M5.9,14h7.1c0.5,0,0.9,0.4,0.9,0.9v0.1c0,0.5-0.4,0.9-0.9,0.9H5.9C5.4,16,5,15.6,5,15.1v-0.1C5,14.4,5.4,14,5.9,14z"></path></svg></i> <span>Articles</span> </a> <div class="submenu"> <button class="toggle_submenu muted" type="button"><svg class="i__arrowleft"><use xlink:href="#i__arrowleft"></use></svg></button> <ul> <li class="d-lg-none"><a class="fbold" href="/articles/">All Articles</a></li> <li><a href="https://an1.com/articles/interview/"><span>Interview (1)</span></a></li><li><a href="https://an1.com/articles/useful-tips/"><span>Useful Tips (9)</span></a></li><li><a href="https://an1.com/articles/history/"><span>History (4)</span></a></li><li><a href="https://an1.com/articles/reports/"><span>Reports (6)</span></a></li> </ul> </div> </li> <li> <a class="xsmf fbold" href="/faq.html"> <i><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><rect y="0" width="24" height="24" fill="none"></rect><circle fill="currentColor" cx="5" cy="9" r="1"></circle><circle fill="currentColor" cx="9" cy="9" r="1"></circle><circle fill="currentColor" cx="13" cy="9" r="1"></circle><path fill="currentColor" class="icon_lightcolor" d="M17.6,6.4C16.5,2.7,13.1,0,9,0C4,0,0,4,0,9c0,3.9,2.5,7.2,6,8.5V24h9c5,0,9-4,9-9C24,11,21.4,7.5,17.6,6.4zM16,16H9c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7V16z"></path></svg></i> <span>FAQ</span> </a> </li> </ul> <ul class="head_menu_s d-lg-none"> <li><a href="/dmca.html">DMCA Policy</a></li><li><a href="/privacy-policy.html">Privacy Policy</a></li><li><a href="/index.php?do=feedback">Feedback</a></li> </ul> <div class="head_menu_s_foot d-lg-none"> <a href="https://an1.com/ru/4980-magic-tiles-3-mod.html" class="lang xsmf fbold" title="Russian"> <span class="minbtn"> <i class="flag" style="background-image: url('/templates/an1/images/ru.png')"></i> Russian </span></a> <div class="social" title="Read Us"> <a class="soc_tg" href="https://t.me/android1com" rel="noopener nofollow" target="_blank"><svg class="i__tg" width="32" height="32"><use xlink:href="#i__tg"></use></svg></a><a class="soc_fb" href="https://www.facebook.com/an1com" rel="noopener nofollow" target="_blank"><svg class="i__fb" width="32" height="32"><use xlink:href="#i__fb"></use></svg></a><a class="soc_yt" href="https://www.youtube.com/android1c" rel="noopener nofollow" target="_blank"><svg class="i__yt" width="32" height="32"><use xlink:href="#i__yt"></use></svg></a> </div> </div> </div> </div> <div class="tools"> <button id="darkmod_btn" class="darkmod_btn tool-btn" aria-label="Dark Theme"> <svg width="24" height="24"><use xlink:href="#i__darkmod"></use></svg> </button> <button id="qsearch_btn" class="qsearch tool-btn" aria-label="Search"> <svg width="24" height="24"><use xlink:href="#i__search"></use></svg> </button> <a href="https://an1.com/ru/4980-magic-tiles-3-mod.html" class="lang xsmf fbold" title="Russian"> <span class="minbtn"> <i class="flag" style="background-image: url('/templates/an1/images/ru.png')"></i> Russian </span></a> </div> </header></div>
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
                              <a href="/" itemprop="item"><span itemprop="name">AN1.com</span></a>
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
                        <div class="developer smf muted" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization"> <span itemprop="name">AMANOTES PTE LTD</span> </div>
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
                                 <div class="app-faq-text">After releasing a new version of the MOD on our website, download the new APK and install it over the previous version without uninstalling it, it will only update to the new version, and your progress will be saved!</div>
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
                                    <li class="current-rating" style="width:68%;">3.4</li>
                                    <li><a href="#" title="Useless" class="r1-unit" onclick="doRate('1', '4980'); return false;">1</a></li>
                                    <li><a href="#" title="Poor" class="r2-unit" onclick="doRate('2', '4980'); return false;">2</a></li>
                                    <li><a href="#" title="Fair" class="r3-unit" onclick="doRate('3', '4980'); return false;">3</a></li>
                                    <li><a href="#" title="Good" class="r4-unit" onclick="doRate('4', '4980'); return false;">4</a></li>
                                    <li><a href="#" title="Excellent" class="r5-unit" onclick="doRate('5', '4980'); return false;">5</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="rate_num"><span class="fbold" itemprop="ratingValue">3.4</span> (<span id="vote-num-id-4980" class="count" itemprop="ratingCount">3753</span>)</div>
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
                        <a class="download_line brand" rel="sponsored nofollow" href="https://www.ldplayer.net?n=88467245#utm_source=aff&amp;utm_medium=aff&amp;utm_campaign=aff88467245" style="display:none;">
                           <div>
                              <i>
                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
                                    <path fill="currentColor" d="M12,28V22h4a6,6,0,1,0-6-6v4H4V16A12,12,0,1,1,16,28ZM2.67,28,4,26.62V22h6v6Zm12.7-11.33H12l5.05-5.33-1.36,4h3.5l-5.11,5.6Z"></path>
                                 </svg>
                              </i>
                              Play in <?php echo $appName ;?> on PC
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
      <script src="index.js"></script>
   </body>
</html>