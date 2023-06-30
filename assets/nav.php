    <div class="header">
      <header>

        <h1 class="logo">
          <div class="logo">
         <a href="../"><img src="../logo.png" style="width:40px;margin-top:10px;"/></a>
       </div>
          
        </h1>
        <button class="head_menu_btn d-block d-lg-none" type="button" aria-label="Menu">
          <span class="butterbrod">
            <i></i>
            <i></i>
            <i></i>
          </span>
        </button>
        <div class="hmenu">
          <button class="btn-close hmenu_close d-block d-lg-none" type="button" onclick="document.getElementById('html').classList.remove('qs');document.getElementById('qsearch_modal').classList.remove('open');">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
          </button>
          <div class="head_menu">
            <ul class="head_menu_f">
              <li class="active">
                <a class="xsmf fbold" href="/">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <rect fill="none" width="24" height="24"></rect>
                      <path fill="currentColor" class="icon_lightcolor" d="M12,2.8L2,12.2V19h20v-6.8L12,2.8 M12,0.1l12,11.2V21H0v-9.7L12,0.1z"></path>
                      <circle fill="currentColor" cx="15" cy="19" r="5"></circle>
                    </svg>
                  </i>
                  <span>Home</span>
                </a>
              </li>
              <li>
                <a class="xsmf fbold" href="/games/">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <rect fill="none" width="24" height="24"></rect>
                      <circle fill="currentColor" cx="8" cy="16" r="3"></circle>
                      <path fill="currentColor" class="icon_lightcolor" d="M16,8h-2V7c0-1.7-1.3-3-3-3H8C7.4,4,7,3.6,7,3s0.4-1,1-1h10V0H8C6.3,0,5,1.3,5,3s1.3,3,3,3h3c0.6,0,1,0.4,1,1v1H8c-4.4,0-8,3.6-8,8s3.6,8,8,8h8c4.4,0,8-3.6,8-8S20.4,8,16,8z M16,22H8c-3.3,0-6-2.7-6-6s2.7-6,6-6h8c3.3,0,6,2.7,6,6S19.3,22,16,22z"></path>
                    </svg>
                  </i>
                  <span>Games</span>
                </a>
                <div class="submenu">
                  <button class="toggle_submenu muted" type="button">
                    <svg class="i__arrowleft">
                      <use xlink:href="#i__arrowleft"></use>
                    </svg>
                  </button>
                  <?php
$menuItems = [
    ["text" => "All Games", "url" => "/games/"],
    ["text" => "Action", "url" => "../games/action/"],
    ["text" => "Cards", "url" => "../games/cards/"],
    ["text" => "Arcade", "url" => "../games/arcade/"],
    ["text" => "RPG", "url" => "../games/rpg/"],
    ["text" => "Shooter", "url" => "../games/shooter/"],
    ["text" => "Casual", "url" => "../games/casual/"],
    ["text" => "Strategy", "url" => "../games/strategy/"],
    ["text" => "Sport", "url" => "../games/sport/"],
    ["text" => "Simulations", "url" => "../games/simulations/"],
    ["text" => "Adventure", "url" => "../games/adventure/"],
    ["text" => "Music", "url" => "../games/music/"]
    ["text" => "Puzzle", "url" => "../games/puzzle/"]
];
?>

<ul>
    <li class="d-lg-none">
        <a class="fbold" href="<?php echo $menuItems[0]['url']; ?>"><?php echo $menuItems[0]['text']; ?></a>
    </li>
    <?php for ($i = 1; $i < count($menuItems); $i++) { ?>
        <li>
            <a href="<?php echo $menuItems[$i]['url']; ?>">
                <span><?php echo $menuItems[$i]['text']; ?></span>
            </a>
        </li>
    <?php } ?>
</ul>

                </div>
              </li>
             <!-- <li>
                <a class="xsmf fbold" href="/programmy/">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <rect fill="none" width="24" height="24"></rect>
                      <path fill="currentColor" d="M14,0h8c1.1,0,2,0.9,2,2v8c0,1.1-0.9,2-2,2h-8c-1.1,0-2-0.9-2-2V2C12,0.9,12.9,0,14,0z"></path>
                      <path fill="currentColor" class="icon_lightcolor" d="M10,14V6H2.8C1.2,6,0,7.2,0,8.8v12.4C0,22.8,1.2,24,2.8,24h12.4c1.5,0,2.8-1.2,2.8-2.8V14H10zM2.8,8H8v6H2V8.8C2,8.3,2.3,8,2.8,8z M2.8,22C2.3,22,2,21.7,2,21.2V16h6v6H2.8z M15.2,22H10v-6h6v5.2C16,21.7,15.7,22,15.2,22z"></path>
                    </svg>
                  </i>
                  <span>Programs</span>
                </a>
                <div class="submenu">
                  <button class="toggle_submenu muted" type="button">
                    <svg class="i__arrowleft">
                      <use xlink:href="#i__arrowleft"></use>
                    </svg>
                  </button>
                  <ul>
                    <li class="d-lg-none">
                      <a class="fbold" href="/programmy/">All Programs</a>
                    </li>
                    <li>
                      <a href="../programmy/business-amp-finance/">
                        <span>Business &amp; Finance (11)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/health-and-sport/">
                        <span>Health and Sport (14)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/internet/">
                        <span>Internet (12)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/social/">
                        <span>Social (13)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/music-and-video/">
                        <span>Music and Video (32)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/personalization/">
                        <span>Personalization (36)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/education/">
                        <span>Education (9)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/office/">
                        <span>Office (7)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/weather/">
                        <span>Weather (4)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/travel/">
                        <span>Travel (16)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/camera/">
                        <span>Camera (18)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/photography/">
                        <span>Photography (25)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/file-managers/">
                        <span>File Managers (3)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/translators/">
                        <span>Translators (1)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/link/">
                        <span>Link (23)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../programmy/tools/">
                        <span>Tools (139)</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>-->
              <li>
                <a class="xsmf fbold" href="/news/">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <rect fill="none" width="24" height="24"></rect>
                      <path fill="currentColor" class="icon_lightcolor" d="M10,4.8L6.6,8.2c-1.4,1.4-2.3,3.2-2.5,5.2c-0.2,2,0.3,3.9,1.5,5.4c1.5,2,3.9,3.2,6.4,3.2c3,0,5.6-1.6,7.1-4.4c0.9-1.6,1.1-3.5,0.7-5.2C18.9,12.8,17.9,13,17,13c-3.9,0-7-3.1-7-7V4.8 M11.9,0C11.9,0,12,0,11.9,0l0,6c0,2.8,2.2,5,5,5c1.5,0,2.8-0.7,3.7-1.7c1.6,2.9,1.7,6.4,0.1,9.3C18.9,22.2,15.4,24,12,24c-3,0-6-1.3-8-4c-3-4-2.4-9.7,1.2-13.2L11.9,0C11.9,0,11.9,0,11.9,0z"></path>
                      <path fill="currentColor" d="M7.9,11.5c-1.4,2.3-0.8,5.3,1.5,6.8c2.2,1.4,5.1,0.8,6.6-1.3C12.5,16.8,9.3,14.7,7.9,11.5z"></path>
                    </svg>
                  </i>
                  <span>News</span>
                </a>
                <div class="submenu">
                  <button class="toggle_submenu muted" type="button">
                    <svg class="i__arrowleft">
                      <use xlink:href="#i__arrowleft"></use>
                    </svg>
                  </button>
                  <ul>
                    <li class="d-lg-none">
                      <a class="fbold" href="/news/">All News</a>
                    </li>
                    <li>
                      <a href="../news/android/">
                        <span>Android (239)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../news/apple/">
                        <span>Apple (148)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../news/novelty/">
                        <span>Novelty (1119)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../news/windows/">
                        <span>Windows (10)</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a class="xsmf fbold" href="/articles/">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <rect x="0" fill="none" width="24" height="24"></rect>
                      <path fill="currentColor" class="icon_lightcolor" d="M22,5.2V4.7c0-2-1.7-3.7-3.7-3.7H5.7C3.7,1,2,2.7,2,4.7v0.5C0.8,5.6,0,6.7,0,8v12c0,1.7,1.3,3,3,3h18c1.7,0,3-1.3,3-3V8C24,6.7,23.2,5.6,22,5.2z M5.7,3h12.6C19.2,3,20,3.8,20,4.7V5H4V4.7C4,3.8,4.8,3,5.7,3z M22,20c0,0.6-0.4,1-1,1H3c-0.6,0-1-0.4-1-1V8c0-0.6,0.4-1,1-1h18c0.6,0,1,0.4,1,1V20z"></path>
                      <path fill="currentColor" d="M6,10h12c0.6,0,1,0.4,1,1l0,0c0,0.6-0.4,1-1,1H6c-0.6,0-1-0.4-1-1l0,0C5,10.4,5.4,10,6,10z"></path>
                      <path fill="currentColor" d="M5.9,14h7.1c0.5,0,0.9,0.4,0.9,0.9v0.1c0,0.5-0.4,0.9-0.9,0.9H5.9C5.4,16,5,15.6,5,15.1v-0.1C5,14.4,5.4,14,5.9,14z"></path>
                    </svg>
                  </i>
                  <span>Articles</span>
                </a>
                <div class="submenu">
                  <button class="toggle_submenu muted" type="button">
                    <svg class="i__arrowleft">
                      <use xlink:href="#i__arrowleft"></use>
                    </svg>
                  </button>
                  <ul>
                    <li class="d-lg-none">
                      <a class="fbold" href="/articles/">All Articles</a>
                    </li>
                    <li>
                      <a href="../articles/interview/">
                        <span>Interview (1)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../articles/useful-tips/">
                        <span>Useful Tips (9)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../articles/history/">
                        <span>History (4)</span>
                      </a>
                    </li>
                    <li>
                      <a href="../articles/reports/">
                        <span>Reports (6)</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a class="xsmf fbold" href="/faq.html">
                  <i>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <rect y="0" width="24" height="24" fill="none"></rect>
                      <circle fill="currentColor" cx="5" cy="9" r="1"></circle>
                      <circle fill="currentColor" cx="9" cy="9" r="1"></circle>
                      <circle fill="currentColor" cx="13" cy="9" r="1"></circle>
                      <path fill="currentColor" class="icon_lightcolor" d="M17.6,6.4C16.5,2.7,13.1,0,9,0C4,0,0,4,0,9c0,3.9,2.5,7.2,6,8.5V24h9c5,0,9-4,9-9C24,11,21.4,7.5,17.6,6.4zM16,16H9c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7V16z"></path>
                    </svg>
                  </i>
                  <span>FAQ</span>
                </a>
              </li>
            </ul>
            <ul class="head_menu_s d-lg-none">
              <li>
                <a href="/dmca.php">DMCA Policy</a>
              </li>
              <li>
                <a href="/privacy-policy.php">Privacy Policy</a>
              </li>
              <li>
                <a href="/index.php?do=feedback">Feedback</a>
              </li>
            </ul>
            <div class="head_menu_s_foot d-lg-none">
              <a href="Join" class="lang xsmf fbold" title="Dashboard">
                <span class="minbtn">
                  <i class="flag" style="background-image: url('../templates/an1/images/ru.png');"></i> Login </span>
              </a>
              <div class="social" title="Read Us">
                <a class="soc_tg" href="https://t.me/cxdiin" rel="noopener nofollow" target="_blank">
                  <svg class="i__tg" width="32" height="32">
                    <use xlink:href="#i__tg"></use>
                  </svg>
                </a>
                <a class="soc_fb" href="https://www.facebook.com/cxdiin" rel="noopener nofollow" target="_blank">
                  <svg class="i__fb" width="32" height="32">
                    <use xlink:href="#i__fb"></use>
                  </svg>
                </a>
                <a class="soc_yt" href="https://www.youtube.com/cxdiin" rel="noopener nofollow" target="_blank">
                  <svg class="i__yt" width="32" height="32">
                    <use xlink:href="#i__yt"></use>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="tools">
          <button id="darkmod_btn" class="darkmod_btn tool-btn" aria-label="Dark Theme">
            <svg width="24" height="24">
              <use xlink:href="#i__darkmod"></use>
            </svg>
          </button>
          <button id="qsearch_btn" class="qsearch tool-btn" aria-label="Search" onclick="document.getElementById('html').classList.add('qs');document.getElementById('qsearch_modal').classList.add('open');">
            <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
          </button>
          <a href="cpanel/" class="lang xsmf fbold" title="Russian">
            <span class="minbtn">
              <i class="flag" style="background-image: url('https://cdn.icon-icons.com/icons2/506/PNG/512/cloud_icon-icons.com_49310.png');"></i> Dashboard </span>
          </a>
        </div>
      </header>
    </div>
