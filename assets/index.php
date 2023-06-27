<?php

include 'conn.php';

?>

<html>
  <head>
    
  <link rel="stylesheet" href="assets/index.css"/>
      <title>AppsPages - Host, Showcase, and Manage Your Apps with Ease</title>
  <meta name="description" content="AppsPages is a leading platform that empowers app owners to easily host, showcase, and manage their applications. Create dedicated app pages, share links, and gain valuable insights with comprehensive app statistics.">
  
  <!-- Open Graph Tags -->
  <meta property="og:title" content="AppsPages - Host, Showcase, and Manage Your Apps with Ease">
  <meta property="og:description" content="AppsPages is a leading platform that empowers app owners to easily host, showcase, and manage their applications. Create dedicated app pages, share links, and gain valuable insights with comprehensive app statistics.">
  <meta property="og:image" content="[URL to the website logo or an image representing AppsPages]">
  <meta property="og:url" content="logo.png">
  <meta property="og:type" content="website">
  
  <!-- Twitter Card Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="AppsPages - Host, Showcase, and Manage Your Apps with Ease">
  <meta name="twitter:description" content="AppsPages is a leading platform that empowers app owners to easily host, showcase, and manage their applications. Create dedicated app pages, share links, and gain valuable insights with comprehensive app statistics.">
  <meta name="twitter:image" content="[URL to the website logo or an image representing AppsPages]">
  <meta name="twitter:site" content="sh20raj">
    <link rel="icon" href="logo.png"/>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>

    
    <header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
      <img src="logo.png" width="25px" class="mr-2"/>
      <span class="text-gray-900">Apps
        <span class="px-2 h-12 font-semibold tracking-wider border-2 border-black bg-indigo-400 text-white" style="padding-bottom:4px">Pages</span>
      </span>
    </a>
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="/">Apps</a>
      <a class="mr-5 hover:text-gray-900" href="/">Games</a>
      <a class="mr-5 hover:text-gray-900" href="/">Categories</a>
      <a class="mr-5 hover:text-gray-900" href="/">Home</a>
      <a class="mr-5 hover:text-gray-900" href="/">Features</a>
      <a class="mr-5 hover:text-gray-900" href="/">Contact</a>
    </nav>
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="cpanel">
<?php if(isset($user)){ echo $user->login;} else { echo "Join";}?>
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg></a>
    </button>
  </div>
</header>

    
    <hr hint="hero">
    <section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900"> Apps
        <span class="px-2 h-12 font-semibold tracking-wider border-2 border-black bg-indigo-400 text-white" style="padding-bottom:4px">Pages</span>
      </h1>
      <p class="mb-8 leading-relaxed">Effortlessly showcase your apps to a wide audience with AppsPages. Host and manage your applications, share app links, and track app performance with powerful analytics tools.</p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Join</button>
        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Submit</button>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="https://images.unsplash.com/photo-1600950058730-94e24bcdefc3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzB8fGFwcHN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60">
    </div>
  </div>
        
 </section>

    <hr hint="apps">
    <section>
      <div id="content-wrapper" style="transform: none;">
<div class="container outer-container" style="transform: none;">
<!-- Main Wrapper -->
<main id="main-wrapper" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">






<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 5px;"><div id="ListB">
<div class="ListButtons-area section" id="ListButtons-area" name="Category Labels (A)"><div class="widget Image" data-version="2" id="Image4">
<div class="widget-content">
<div class="ListButtons-area-img">
<a href="/search/label/Apps">
<img alt="Puzzle Game" height="225" id="Image4_img" src="https://1.bp.blogspot.com/-lORQC1rkOIA/YNyosvKJBoI/AAAAAAAAB9w/hk-dTMXRdIcOU4vhXY3KZifOtqZlGEnLwCLcBGAsYHQ/Piki%2BTemplates%2Bicon%2Bgames%2B%25284%2529.jpg" width="300">
</a>
</div>
</div>
<div class="ListButtons-area-title">
<h2>
<a href="/search/label/Apps">
Puzzle Game
</a>
</h2>
</div>
</div><div class="widget Image" data-version="2" id="Image5">
<div class="widget-content">
<div class="ListButtons-area-img">
<a href="/search/label/Apps">
<img alt="Free Fire Game" height="381" id="Image5_img" src="https://1.bp.blogspot.com/-fZN0n3qsc7Q/YNyo2AxvNxI/AAAAAAAAB90/37upyg6JY0UcWJEGz7cYYL4fK3wqT_b8ACLcBGAsYHQ/Piki%2BTemplates%2Bicon%2Bgames%2B%25282%2529.jpg" width="686">
</a>
</div>
</div>
<div class="ListButtons-area-title">
<h2>
<a href="/search/label/Apps">
Free Fire Game
</a>
</h2>
</div>
</div><div class="widget Image" data-version="2" id="Image6">
<div class="widget-content">
<div class="ListButtons-area-img">
<a href="/search/label/Apps">
<img alt="Angry Birds Game" height="281" id="Image6_img" src="https://1.bp.blogspot.com/-rLipI9vhRr8/YNyo62jECOI/AAAAAAAAB94/vBbkeiw3E9cSe6ShFquXfWpWPvw54Fy3ACLcBGAsYHQ/Piki%2BTemplates%2Bicon%2Bgames%2B%25286%2529.jpg" width="499">
</a>
</div>
</div>
<div class="ListButtons-area-title">
<h2>
<a href="/search/label/Apps">
Angry Birds Game
</a>
</h2>
</div>
</div></div>
<div class="xx0ooj-wrap section" id="top-NewsPro-main-widget-3" name="Main Store Section (A)"><div class="widget HTML type-store open-iki" data-version="2" id="HTML5">
<div class="widget-title icon">
<h3 class="title">
Top Best Mod Games
</h3>
</div>
<div class="widget-content"><div class="store-story"><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/cat-runner.html"><img class="snip-thumbnail lazy-img" alt="Cat Runner" data-src="https://1.bp.blogspot.com/-pH9-RT3ToKs/YNvqK_mRE8I/AAAAAAAAB60/wV_grtXFbFsUYfCB7wx_U0O_UYhm_FuIgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252817%2529.png" src="https://1.bp.blogspot.com/-pH9-RT3ToKs/YNvqK_mRE8I/AAAAAAAAB60/wV_grtXFbFsUYfCB7wx_U0O_UYhm_FuIgCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252817%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/cat-runner.html">Cat Runner</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/cat-runner.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/super-mario.html"><img class="snip-thumbnail lazy-img" alt="Super Mario" data-src="https://1.bp.blogspot.com/-RGC4vkR9n6M/YNvp-i4HlrI/AAAAAAAAB6s/nOgatQ8YvjMQ86mCga3uqm6247PZnHhmgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252818%2529.png" src="https://1.bp.blogspot.com/-RGC4vkR9n6M/YNvp-i4HlrI/AAAAAAAAB6s/nOgatQ8YvjMQ86mCga3uqm6247PZnHhmgCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252818%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/super-mario.html">Super Mario</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/super-mario.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/penguin.html"><img class="snip-thumbnail lazy-img" alt="Penguin" data-src="https://1.bp.blogspot.com/-DDPlk9v2y-k/YNvq4b01B0I/AAAAAAAAB7Q/y9-rymI5dgEB3O06K8lROXncbgbjwQYQgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252813%2529.png" src="https://1.bp.blogspot.com/-DDPlk9v2y-k/YNvq4b01B0I/AAAAAAAAB7Q/y9-rymI5dgEB3O06K8lROXncbgbjwQYQgCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252813%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/penguin.html">Penguin</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/penguin.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/angry-birds.html"><img class="snip-thumbnail lazy-img" alt="Angry Birds" data-src="https://1.bp.blogspot.com/-365K9xH0HIw/YNvqr5L3TDI/AAAAAAAAB7I/frychuiH-kE5_Rpe6cBHz4L6LueSURruQCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252812%2529.png" src="https://1.bp.blogspot.com/-365K9xH0HIw/YNvqr5L3TDI/AAAAAAAAB7I/frychuiH-kE5_Rpe6cBHz4L6LueSURruQCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252812%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/angry-birds.html">Angry Birds</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/angry-birds.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/rockstar-gta.html"><img class="snip-thumbnail lazy-img" alt="Rockstar GTA" data-src="https://1.bp.blogspot.com/-YhZfY26tHnU/YNvqfwEHcdI/AAAAAAAAB7E/a9ceps38jPYspTy-J_FDbMPj--t41MNSACLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252815%2529.png" src="https://1.bp.blogspot.com/-YhZfY26tHnU/YNvqfwEHcdI/AAAAAAAAB7E/a9ceps38jPYspTy-J_FDbMPj--t41MNSACLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252815%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/rockstar-gta.html">Rockstar GTA</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/rockstar-gta.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/pubg-lite.html"><img class="snip-thumbnail lazy-img" alt="PubG Lite" data-src="https://1.bp.blogspot.com/-qXsK55nxVd4/YNvqUENDAiI/AAAAAAAAB68/Tvg1RPJuN0kHrs0x4_-tqbgZB0xrjchnACLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252814%2529.png" src="https://1.bp.blogspot.com/-qXsK55nxVd4/YNvqUENDAiI/AAAAAAAAB68/Tvg1RPJuN0kHrs0x4_-tqbgZB0xrjchnACLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252814%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/pubg-lite.html">PubG Lite</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/pubg-lite.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/tinder.html"><img class="snip-thumbnail lazy-img" alt="Tinder" data-src="https://1.bp.blogspot.com/-bAZ-QcZ0TEo/YNvrkWDubnI/AAAAAAAAB7o/HqxBnC3Bt2Mmh6bmUMKGTpiNJKugzeqjQCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25289%2529.png" src="https://1.bp.blogspot.com/-bAZ-QcZ0TEo/YNvrkWDubnI/AAAAAAAAB7o/HqxBnC3Bt2Mmh6bmUMKGTpiNJKugzeqjQCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25289%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/tinder.html">Tinder</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/tinder.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/love-mate.html"><img class="snip-thumbnail lazy-img" alt="Love Mate" data-src="https://1.bp.blogspot.com/-75DUYRPzplk/YNvrt7_-SvI/AAAAAAAAB7w/-G90KnOXk3USE1_zGpnEGkE_DTRA6D4awCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25286%2529.png" src="https://1.bp.blogspot.com/-75DUYRPzplk/YNvrt7_-SvI/AAAAAAAAB7w/-G90KnOXk3USE1_zGpnEGkE_DTRA6D4awCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25286%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/love-mate.html">Love Mate</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/love-mate.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/adobe-vs.html"><img class="snip-thumbnail lazy-img" alt="Adobe VS" data-src="https://1.bp.blogspot.com/-UJxIKqxbTGM/YNvrHIt1uoI/AAAAAAAAB7Y/n0dgNlwhYpAwehAYcDk_fgN-HnV6iHB3QCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252810%2529.png" src="https://1.bp.blogspot.com/-UJxIKqxbTGM/YNvrHIt1uoI/AAAAAAAAB7Y/n0dgNlwhYpAwehAYcDk_fgN-HnV6iHB3QCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252810%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/adobe-vs.html">Adobe VS</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/adobe-vs.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/photo-gallery.html"><img class="snip-thumbnail lazy-img" alt="Photo Gallery" data-src="https://1.bp.blogspot.com/-WnL71KgcSlM/YNvr2h71VjI/AAAAAAAAB74/FAYLt8oxHd8BKD6J2-2Wu0lird5SKLt9ACLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25285%2529.png" src="https://1.bp.blogspot.com/-WnL71KgcSlM/YNvr2h71VjI/AAAAAAAAB74/FAYLt8oxHd8BKD6J2-2Wu0lird5SKLt9ACLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25285%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/photo-gallery.html">Photo Gallery</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/photo-gallery.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/fire-database.html"><img class="snip-thumbnail lazy-img" alt="Fire Database" data-src="https://1.bp.blogspot.com/-0MPJcrAWZh4/YNvr_9YIrOI/AAAAAAAAB8A/X7H4cg9TVSsh0V_zJkyUl5GwNPG9LG9IQCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25284%2529.png" src="https://1.bp.blogspot.com/-0MPJcrAWZh4/YNvr_9YIrOI/AAAAAAAAB8A/X7H4cg9TVSsh0V_zJkyUl5GwNPG9LG9IQCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25284%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/fire-database.html">Fire Database</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/fire-database.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/anti-virus.html"><img class="snip-thumbnail lazy-img" alt="Anti Virus" data-src="https://1.bp.blogspot.com/-O3cx9LEtK2w/YNvsXhYKTXI/AAAAAAAAB8U/au47QBKygtAY63H5_6MXniTGrdl_pFTeACLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25281%2529.png" src="https://1.bp.blogspot.com/-O3cx9LEtK2w/YNvsXhYKTXI/AAAAAAAAB8U/au47QBKygtAY63H5_6MXniTGrdl_pFTeACLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25281%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/anti-virus.html">Anti Virus</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/anti-virus.html" class="download-ui">Download</a></div></div></div></div></div>
</div></div>
</div><div class="clearfix"></div><div class="main section" id="main" name="Main Recent Posts"><div class="widget Blog" data-version="2" id="Blog1">
<div class="blog-posts hfeed container post-filter-wrap">
<div class="main-title"><h3 class="title"><span>Read more</span></h3><a class="simple-viewmore" href="/search">Show more</a></div>
<div class="grid-posts">
<article class="blog-post hentry post-filter post-0" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html?m=1">
<img alt="Facebook" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-AhfnhbJEr8w/YNsRX1-TsGI/AAAAAAAAB5s/9KSfLTwMBEcgKibxEkU3vjWRi1WUed-vgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252827%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-AhfnhbJEr8w/YNsRX1-TsGI/AAAAAAAAB5s/9KSfLTwMBEcgKibxEkU3vjWRi1WUed-vgCLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252827%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html?m=1" rel="bookmark" title="Facebook">Facebook</a>
</h2>
<span class="label-news-ui">
Social Media
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-1" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/telegram.html?m=1">
<img alt="Telegram" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-4kcPDFkRQHQ/YNsRzCSymII/AAAAAAAAB50/lhkdEZENcKMu6uwl8W45jBgSD1uevAK_gCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252828%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-4kcPDFkRQHQ/YNsRzCSymII/AAAAAAAAB50/lhkdEZENcKMu6uwl8W45jBgSD1uevAK_gCLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252828%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2021/05/telegram.html?m=1" rel="bookmark" title="Telegram">Telegram</a>
</h2>
<span class="label-news-ui">
Social Media
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2021/05/telegram.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-2" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/whatsapp.html?m=1">
<img alt="Whatsapp" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-HpoWmY38h_E/YNsSF6Y-ZSI/AAAAAAAAB6A/lb1X-yKh4eIC0XD34t3NrsJ_4-S_uuWHwCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252826%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-HpoWmY38h_E/YNsSF6Y-ZSI/AAAAAAAAB6A/lb1X-yKh4eIC0XD34t3NrsJ_4-S_uuWHwCLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252826%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2021/05/whatsapp.html?m=1" rel="bookmark" title="Whatsapp">Whatsapp</a>
</h2>
<span class="label-news-ui">
Social Media
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2021/05/whatsapp.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-3" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/instagram.html?m=1">
<img alt="Instagram" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-iA3luNHIVPM/YNsR8VUHzxI/AAAAAAAAB54/Lx4nbjjHDq8dXHBPv4RhZNK_Meabg6naQCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252825%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-iA3luNHIVPM/YNsR8VUHzxI/AAAAAAAAB54/Lx4nbjjHDq8dXHBPv4RhZNK_Meabg6naQCLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252825%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2021/05/instagram.html?m=1" rel="bookmark" title="Instagram">Instagram</a>
</h2>
<span class="label-news-ui">
Social Media
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2021/05/instagram.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-4" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/youtube.html?m=1">
<img alt="Youtube" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-ekeC8opdPY4/YNsStjWctpI/AAAAAAAAB6Q/g61liQ0fWWsUJBxZV9mcU8__vDxzSs5KACLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252823%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-ekeC8opdPY4/YNsStjWctpI/AAAAAAAAB6Q/g61liQ0fWWsUJBxZV9mcU8__vDxzSs5KACLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252823%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2020/01/youtube.html?m=1" rel="bookmark" title="Youtube">Youtube</a>
</h2>
<span class="label-news-ui">
Social Media
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2020/01/youtube.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-5" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/cat-runner.html?m=1">
<img alt="Cat Runner" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-pH9-RT3ToKs/YNvqK_mRE8I/AAAAAAAAB60/wV_grtXFbFsUYfCB7wx_U0O_UYhm_FuIgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252817%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-pH9-RT3ToKs/YNvqK_mRE8I/AAAAAAAAB60/wV_grtXFbFsUYfCB7wx_U0O_UYhm_FuIgCLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252817%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2020/01/cat-runner.html?m=1" rel="bookmark" title="Cat Runner">Cat Runner</a>
</h2>
<span class="label-news-ui">
Games
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2020/01/cat-runner.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-6" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/super-mario.html?m=1">
<img alt="Super Mario" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-RGC4vkR9n6M/YNvp-i4HlrI/AAAAAAAAB6s/nOgatQ8YvjMQ86mCga3uqm6247PZnHhmgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252818%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-RGC4vkR9n6M/YNvp-i4HlrI/AAAAAAAAB6s/nOgatQ8YvjMQ86mCga3uqm6247PZnHhmgCLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252818%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2020/01/super-mario.html?m=1" rel="bookmark" title="Super Mario">Super Mario</a>
</h2>
<span class="label-news-ui">
Games
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2020/01/super-mario.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-7" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/twitter.html?m=1">
<img alt="Twitter" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-Vn_f5RiOz3E/YNvp09BQO0I/AAAAAAAAB6o/TNKPlwp1q7oaYXb6woc7jr25SdPpBxfRwCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252820%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-Vn_f5RiOz3E/YNvp09BQO0I/AAAAAAAAB6o/TNKPlwp1q7oaYXb6woc7jr25SdPpBxfRwCLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252820%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2020/01/twitter.html?m=1" rel="bookmark" title="Twitter">Twitter</a>
</h2>
<span class="label-news-ui">
Social Media
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2020/01/twitter.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-8" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/google-duo.html?m=1">
<img alt="Google Duo" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-mH6Z31r7ms0/YNvpgTC6yoI/AAAAAAAAB6g/PxeGOiQdS_gD5oaWrGf87eDLX4vDVOGCgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252821%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-mH6Z31r7ms0/YNvpgTC6yoI/AAAAAAAAB6g/PxeGOiQdS_gD5oaWrGf87eDLX4vDVOGCgCLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252821%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2020/01/google-duo.html?m=1" rel="bookmark" title="Google Duo">Google Duo</a>
</h2>
<span class="label-news-ui">
Social Media
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2020/01/google-duo.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-9" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/penguin.html?m=1">
<img alt="Penguin" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-DDPlk9v2y-k/YNvq4b01B0I/AAAAAAAAB7Q/y9-rymI5dgEB3O06K8lROXncbgbjwQYQgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252813%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-DDPlk9v2y-k/YNvq4b01B0I/AAAAAAAAB7Q/y9-rymI5dgEB3O06K8lROXncbgbjwQYQgCLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252813%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2020/01/penguin.html?m=1" rel="bookmark" title="Penguin">Penguin</a>
</h2>
<span class="label-news-ui">
Games
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2020/01/penguin.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-10" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/angry-birds.html?m=1">
<img alt="Angry Birds" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-365K9xH0HIw/YNvqr5L3TDI/AAAAAAAAB7I/frychuiH-kE5_Rpe6cBHz4L6LueSURruQCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252812%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-365K9xH0HIw/YNvqr5L3TDI/AAAAAAAAB7I/frychuiH-kE5_Rpe6cBHz4L6LueSURruQCLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252812%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2020/01/angry-birds.html?m=1" rel="bookmark" title="Angry Birds">Angry Birds</a>
</h2>
<span class="label-news-ui">
Games
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2020/01/angry-birds.html?m=1">Download</a>
</div>
</div>
</article>
<article class="blog-post hentry post-filter post-11" itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
<div class="post-filter-inside-wrap">
<div class="post-filter-image" itemprop="image" itemscope="itemscope" itemtype="https://schema.org/ImageObject">
<a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/rockstar-gta.html?m=1">
<img alt="Rockstar GTA" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-YhZfY26tHnU/YNvqfwEHcdI/AAAAAAAAB7E/a9ceps38jPYspTy-J_FDbMPj--t41MNSACLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252815%2529.png" itemprop="url" src="https://1.bp.blogspot.com/-YhZfY26tHnU/YNvqfwEHcdI/AAAAAAAAB7E/a9ceps38jPYspTy-J_FDbMPj--t41MNSACLcBGAsYHQ/w93-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252815%2529.png">
</a>
</div>
<div class="relatedStory-box">
<h2 class="entry-title vcard" itemprop="mainEntityOfPage" itemtype="https://schema.org/mainEntityOfPage">
<a href="https://appiki-pikitemplates.blogspot.com/2020/01/rockstar-gta.html?m=1" rel="bookmark" title="Rockstar GTA">Rockstar GTA</a>
</h2>
<span class="label-news-ui">
Games
</span>
<a class="download-ui" href="https://appiki-pikitemplates.blogspot.com/2020/01/rockstar-gta.html?m=1">Download</a>
</div>
</div>
</article>
</div>
</div>
<div class="blog-pager-ok container" id="blog-pager-ok">
<a class="load-more" href="https://appiki-pikitemplates.blogspot.com/search?updated-max=2020-01-09T18:58:00-08:00&amp;max-results=12&amp;m=1#PageNo=2" title="Older Posts">
Load More
                
</a>
</div>
<div class="blog-pager container" id="blog-pager">
<a class="blog-pager-older-link" href="https://appiki-pikitemplates.blogspot.com/search?updated-max=2020-01-09T18:58:00-08:00&amp;max-results=12&amp;m=1" id="Blog1_blog-pager-older-link" title="Older Posts">
Older Posts
</a>
</div>
</div></div><div id="custom-ads-placeholder">
</div><div class="clearfix"></div><div id="ListB">
<div id="main-ads-post">
<div class="main-ads-pikihome section" id="main-ads-below" name="Ads Placement"><div class="widget HTML" data-version="2" id="HTML7">
<div class="widget-content">
<a class="piki-ads" href="javascript:;">Your Responsive Ads code (Google Ads)</a>
</div>
</div></div>
<div class="clearfix"></div>
</div>
<div class="ListButtons-area section" id="ListButtons-area1" name="Category Labels (B)"><div class="widget Image" data-version="2" id="Image13">
<div class="widget-content">
<div class="ListButtons-area-img">
<a href="/search/label/Apps">
<img alt="Car Racing" height="307" id="Image13_img" src="https://1.bp.blogspot.com/-b4__aQ9C8Hg/YNyo_n3kJPI/AAAAAAAAB98/bInIM3K7aSUwFQ_EGxUHFP3Q04NaznTJgCLcBGAsYHQ/Piki%2BTemplates%2Bicon%2Bgames%2B%25285%2529.jpg" width="545">
</a>
</div>
</div>
<div class="ListButtons-area-title">
<h2>
<a href="/search/label/Apps">
Car Racing
</a>
</h2>
</div>
</div><div class="widget Image" data-version="2" id="Image2">
<div class="widget-content">
<div class="ListButtons-area-img">
<a href="/search/label/Apps">
<img alt="GTA San Andreas" height="381" id="Image2_img" src="https://1.bp.blogspot.com/-3GKP31YA1ao/YNypF6U4N3I/AAAAAAAAB-E/GkeqOxra8ksHASbSjuslHUGoYPAwiqhQQCLcBGAsYHQ/Piki%2BTemplates%2Bicon%2Bgames%2B%25283%2529.jpg" width="677">
</a>
</div>
</div>
<div class="ListButtons-area-title">
<h2>
<a href="/search/label/Apps">
GTA San Andreas
</a>
</h2>
</div>
</div><div class="widget Image" data-version="2" id="Image3">
<div class="widget-content">
<div class="ListButtons-area-img">
<a href="/search/label/Apps">
<img alt="PubG Game" height="450" id="Image3_img" src="https://1.bp.blogspot.com/-6sLM1J8xtjI/YNypKb4zHmI/AAAAAAAAB-I/RdJn5LnuNZQ-XaqIlgjaUGIoME7dPDMLACLcBGAsYHQ/Piki%2BTemplates%2Bicon%2Bgames%2B%25281%2529.webp" width="660">
</a>
</div>
</div>
<div class="ListButtons-area-title">
<h2>
<a href="/search/label/Apps">
PubG Game
</a>
</h2>
</div>
</div></div>
<div class="clearfix"></div>
<div class="xx0ooj-wrap section" id="top-NewsPro-main-widget-4" name="Main Store Section (B)"><div class="widget HTML type-store open-iki" data-version="2" id="HTML6">
<div class="widget-title icon">
<h3 class="title">
Top Best Social Apps
</h3>
</div>
<div class="widget-content"><div class="store-story"><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html"><img class="snip-thumbnail lazy-img" alt="Facebook" data-src="https://1.bp.blogspot.com/-AhfnhbJEr8w/YNsRX1-TsGI/AAAAAAAAB5s/9KSfLTwMBEcgKibxEkU3vjWRi1WUed-vgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252827%2529.png" src="https://1.bp.blogspot.com/-AhfnhbJEr8w/YNsRX1-TsGI/AAAAAAAAB5s/9KSfLTwMBEcgKibxEkU3vjWRi1WUed-vgCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252827%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html">Facebook</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/telegram.html"><img class="snip-thumbnail lazy-img" alt="Telegram" data-src="https://1.bp.blogspot.com/-4kcPDFkRQHQ/YNsRzCSymII/AAAAAAAAB50/lhkdEZENcKMu6uwl8W45jBgSD1uevAK_gCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252828%2529.png" src="https://1.bp.blogspot.com/-4kcPDFkRQHQ/YNsRzCSymII/AAAAAAAAB50/lhkdEZENcKMu6uwl8W45jBgSD1uevAK_gCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252828%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2021/05/telegram.html">Telegram</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2021/05/telegram.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/whatsapp.html"><img class="snip-thumbnail lazy-img" alt="Whatsapp" data-src="https://1.bp.blogspot.com/-HpoWmY38h_E/YNsSF6Y-ZSI/AAAAAAAAB6A/lb1X-yKh4eIC0XD34t3NrsJ_4-S_uuWHwCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252826%2529.png" src="https://1.bp.blogspot.com/-HpoWmY38h_E/YNsSF6Y-ZSI/AAAAAAAAB6A/lb1X-yKh4eIC0XD34t3NrsJ_4-S_uuWHwCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252826%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2021/05/whatsapp.html">Whatsapp</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2021/05/whatsapp.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/instagram.html"><img class="snip-thumbnail lazy-img" alt="Instagram" data-src="https://1.bp.blogspot.com/-iA3luNHIVPM/YNsR8VUHzxI/AAAAAAAAB54/Lx4nbjjHDq8dXHBPv4RhZNK_Meabg6naQCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252825%2529.png" src="https://1.bp.blogspot.com/-iA3luNHIVPM/YNsR8VUHzxI/AAAAAAAAB54/Lx4nbjjHDq8dXHBPv4RhZNK_Meabg6naQCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252825%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2021/05/instagram.html">Instagram</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2021/05/instagram.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/youtube.html"><img class="snip-thumbnail lazy-img" alt="Youtube" data-src="https://1.bp.blogspot.com/-ekeC8opdPY4/YNsStjWctpI/AAAAAAAAB6Q/g61liQ0fWWsUJBxZV9mcU8__vDxzSs5KACLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252823%2529.png" src="https://1.bp.blogspot.com/-ekeC8opdPY4/YNsStjWctpI/AAAAAAAAB6Q/g61liQ0fWWsUJBxZV9mcU8__vDxzSs5KACLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252823%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/youtube.html">Youtube</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/youtube.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/twitter.html"><img class="snip-thumbnail lazy-img" alt="Twitter" data-src="https://1.bp.blogspot.com/-Vn_f5RiOz3E/YNvp09BQO0I/AAAAAAAAB6o/TNKPlwp1q7oaYXb6woc7jr25SdPpBxfRwCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252820%2529.png" src="https://1.bp.blogspot.com/-Vn_f5RiOz3E/YNvp09BQO0I/AAAAAAAAB6o/TNKPlwp1q7oaYXb6woc7jr25SdPpBxfRwCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252820%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/twitter.html">Twitter</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/twitter.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/google-duo.html"><img class="snip-thumbnail lazy-img" alt="Google Duo" data-src="https://1.bp.blogspot.com/-mH6Z31r7ms0/YNvpgTC6yoI/AAAAAAAAB6g/PxeGOiQdS_gD5oaWrGf87eDLX4vDVOGCgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252821%2529.png" src="https://1.bp.blogspot.com/-mH6Z31r7ms0/YNvpgTC6yoI/AAAAAAAAB6g/PxeGOiQdS_gD5oaWrGf87eDLX4vDVOGCgCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252821%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/google-duo.html">Google Duo</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/google-duo.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/google-classroom.html"><img class="snip-thumbnail lazy-img" alt="Google Classroom" data-src="https://1.bp.blogspot.com/-OuSisV28cH8/YNvraG1l_SI/AAAAAAAAB7k/0LkSNM2s1L8K-HVY4VaMLLb_R7Z6dhTBQCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252811%2529.png" src="https://1.bp.blogspot.com/-OuSisV28cH8/YNvraG1l_SI/AAAAAAAAB7k/0LkSNM2s1L8K-HVY4VaMLLb_R7Z6dhTBQCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252811%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/google-classroom.html">Google Classroom</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/google-classroom.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/tinder.html"><img class="snip-thumbnail lazy-img" alt="Tinder" data-src="https://1.bp.blogspot.com/-bAZ-QcZ0TEo/YNvrkWDubnI/AAAAAAAAB7o/HqxBnC3Bt2Mmh6bmUMKGTpiNJKugzeqjQCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25289%2529.png" src="https://1.bp.blogspot.com/-bAZ-QcZ0TEo/YNvrkWDubnI/AAAAAAAAB7o/HqxBnC3Bt2Mmh6bmUMKGTpiNJKugzeqjQCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25289%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/tinder.html">Tinder</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/tinder.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/love-mate.html"><img class="snip-thumbnail lazy-img" alt="Love Mate" data-src="https://1.bp.blogspot.com/-75DUYRPzplk/YNvrt7_-SvI/AAAAAAAAB7w/-G90KnOXk3USE1_zGpnEGkE_DTRA6D4awCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25286%2529.png" src="https://1.bp.blogspot.com/-75DUYRPzplk/YNvrt7_-SvI/AAAAAAAAB7w/-G90KnOXk3USE1_zGpnEGkE_DTRA6D4awCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25286%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/love-mate.html">Love Mate</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/love-mate.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/gmail.html"><img class="snip-thumbnail lazy-img" alt="Gmail" data-src="https://1.bp.blogspot.com/-yBALCgZg8sM/YNsVKojMh0I/AAAAAAAAB6Y/-5smb61ubFkJDSGX2SwEqkwiQkNuKlHNQCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252822%2529.png" src="https://1.bp.blogspot.com/-yBALCgZg8sM/YNsVKojMh0I/AAAAAAAAB6Y/-5smb61ubFkJDSGX2SwEqkwiQkNuKlHNQCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252822%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/gmail.html">Gmail</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/gmail.html" class="download-ui">Download</a></div></div></div><div class="storeStory"><div class="storeStory-wrap"><div class="post-filter-image"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/adobe-photoshop.html"><img class="snip-thumbnail lazy-img" alt="Adobe Photoshop" data-src="https://1.bp.blogspot.com/-vxwHsaLyXJc/YNvsHJg2X7I/AAAAAAAAB8I/ZLhqj1LdMv44q59wLVGsU9bfI_3WgqJ9QCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25283%2529.png" src="https://1.bp.blogspot.com/-vxwHsaLyXJc/YNvsHJg2X7I/AAAAAAAAB8I/ZLhqj1LdMv44q59wLVGsU9bfI_3WgqJ9QCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%25283%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/adobe-photoshop.html">Adobe Photoshop</a></h2><span class="label-news-ui">Apps</span><a href="https://appiki-pikitemplates.blogspot.com/2020/01/adobe-photoshop.html" class="download-ui">Download</a></div></div></div></div></div>
</div></div>
<div class="clearfix"></div>
</div></div></main>
<!-- Sidebar Wrapper -->
<div id="sidebar-wrapper" itemscope="itemscope" itemtype="https://schema.org/WPSideBar" role="banner" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 582px;"><div class="sidebar section" id="sidebar" name="Sidebar Right"><div class="widget LinkList" data-version="2" id="LinkList76">
<div class="widget-title icon">
<h3 class="title">
Social Plugin
</h3>
</div>
<div class="widget-content">
<ul class="socialFilter social-bg social">
<li>
<a class="facebook" href="http://fb.com/pikitemplates" rel="noopener noreferrer" target="_blank" title="facebook">
facebook
</a>
</li>
<li>
<a class="twitter" href="#" rel="noopener noreferrer" target="_blank" title="twitter">
twitter
</a>
</li>
<li>
<a class="whatsapp" href="#" rel="noopener noreferrer" target="_blank" title="whatsapp">
whatsapp
</a>
</li>
<li>
<a class="reddit" href="#" rel="noopener noreferrer" target="_blank" title="reddit">
reddit
</a>
</li>
<li>
<a class="pinterest" href="#" rel="noopener noreferrer" target="_blank" title="pinterest">
pinterest
</a>
</li>
<li>
<a class="vk" href="#" rel="noopener noreferrer" target="_blank" title="vk">
vk
</a>
</li>
<li>
<a class="instagram" href="#" rel="noopener noreferrer" target="_blank" title="instagram">
instagram
</a>
</li>
<li>
<a class="youtube" href="#" rel="noopener noreferrer" target="_blank" title="youtube">
youtube
</a>
</li>
</ul>
</div>
</div><div class="widget PopularPosts" data-version="2" id="PopularPosts1">
<div class="widget-title icon">
<h3 class="title">
Popular Posts
</h3>
</div>
<div class="widget-content sidebar-posts">
<div class="popular-post post item0">
<div class="Popular-img-wrap"><a class="post-filter-link image-nos image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html" title="Facebook">
<img alt="Facebook" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-AhfnhbJEr8w/YNsRX1-TsGI/AAAAAAAAB5s/9KSfLTwMBEcgKibxEkU3vjWRi1WUed-vgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252827%2529.png" src="https://1.bp.blogspot.com/-AhfnhbJEr8w/YNsRX1-TsGI/AAAAAAAAB5s/9KSfLTwMBEcgKibxEkU3vjWRi1WUed-vgCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252827%2529.png">
</a></div>
<div class="relatedStory-box">
<h2 class="entry-title vcard"><a href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html?m=1" rel="bookmark" title="Facebook">Facebook</a></h2>
<span class="label-news-ui">Apps</span>
</div>
</div>
<div class="popular-post post item1">
<div class="Popular-img-wrap"><a class="post-filter-link image-nos image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/telegram.html" title="Telegram">
<img alt="Telegram" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-4kcPDFkRQHQ/YNsRzCSymII/AAAAAAAAB50/lhkdEZENcKMu6uwl8W45jBgSD1uevAK_gCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252828%2529.png" src="https://1.bp.blogspot.com/-4kcPDFkRQHQ/YNsRzCSymII/AAAAAAAAB50/lhkdEZENcKMu6uwl8W45jBgSD1uevAK_gCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252828%2529.png">
</a></div>
<div class="relatedStory-box">
<h2 class="entry-title vcard"><a href="https://appiki-pikitemplates.blogspot.com/2021/05/telegram.html?m=1" rel="bookmark" title="Telegram">Telegram</a></h2>
<span class="label-news-ui">Apps</span>
</div>
</div>
<div class="popular-post post item2">
<div class="Popular-img-wrap"><a class="post-filter-link image-nos image-nos" href="https://appiki-pikitemplates.blogspot.com/2020/01/cat-runner.html" title="Cat Runner">
<img alt="Cat Runner" class="snip-thumbnail lazy-img" data-src="https://1.bp.blogspot.com/-pH9-RT3ToKs/YNvqK_mRE8I/AAAAAAAAB60/wV_grtXFbFsUYfCB7wx_U0O_UYhm_FuIgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252817%2529.png" src="https://1.bp.blogspot.com/-pH9-RT3ToKs/YNvqK_mRE8I/AAAAAAAAB60/wV_grtXFbFsUYfCB7wx_U0O_UYhm_FuIgCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252817%2529.png">
</a></div>
<div class="relatedStory-box">
<h2 class="entry-title vcard"><a href="https://appiki-pikitemplates.blogspot.com/2020/01/cat-runner.html?m=1" rel="bookmark" title="Cat Runner">Cat Runner</a></h2>
<span class="label-news-ui">Apps</span>
</div>
</div>
</div>
</div><div class="widget Label" data-version="2" id="Label2">
<div class="widget-title icon">
<h3 class="title">
Labels
</h3>
</div>
<div class="widget-content cloud-label">
<ul>
<li>
<a class="label-name" href="https://appiki-pikitemplates.blogspot.com/search/label/Apps?m=1">
Apps
<span class="label-count">23</span>
</a>
</li>
<li>
<a class="label-name" href="https://appiki-pikitemplates.blogspot.com/search/label/Communication?m=1">
Communication
<span class="label-count">9</span>
</a>
</li>
<li>
<a class="label-name" href="https://appiki-pikitemplates.blogspot.com/search/label/Games?m=1">
Games
<span class="label-count">12</span>
</a>
</li>
<li>
<a class="label-name" href="https://appiki-pikitemplates.blogspot.com/search/label/Social%20Media?m=1">
Social Media
<span class="label-count">12</span>
</a>
</li>
</ul>
</div>
</div><div class="widget HTML type-sidebar open-iki" data-version="2" id="HTML19">
<div class="widget-title icon">
<h3 class="title">
Most Recent
</h3>
</div>
<div class="widget-content"><div class="sidebar-story"><div class="sidebarStory"><div class="glax-img"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html"><img class="snip-thumbnail lazy-img" alt="Facebook" data-src="https://1.bp.blogspot.com/-AhfnhbJEr8w/YNsRX1-TsGI/AAAAAAAAB5s/9KSfLTwMBEcgKibxEkU3vjWRi1WUed-vgCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252827%2529.png" src="https://1.bp.blogspot.com/-AhfnhbJEr8w/YNsRX1-TsGI/AAAAAAAAB5s/9KSfLTwMBEcgKibxEkU3vjWRi1WUed-vgCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252827%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html">Facebook</a></h2><span class="label-news-ui">Apps</span></div></div><div class="sidebarStory"><div class="glax-img"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/telegram.html"><img class="snip-thumbnail lazy-img" alt="Telegram" data-src="https://1.bp.blogspot.com/-4kcPDFkRQHQ/YNsRzCSymII/AAAAAAAAB50/lhkdEZENcKMu6uwl8W45jBgSD1uevAK_gCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252828%2529.png" src="https://1.bp.blogspot.com/-4kcPDFkRQHQ/YNsRzCSymII/AAAAAAAAB50/lhkdEZENcKMu6uwl8W45jBgSD1uevAK_gCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252828%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2021/05/telegram.html">Telegram</a></h2><span class="label-news-ui">Apps</span></div></div><div class="sidebarStory"><div class="glax-img"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/whatsapp.html"><img class="snip-thumbnail lazy-img" alt="Whatsapp" data-src="https://1.bp.blogspot.com/-HpoWmY38h_E/YNsSF6Y-ZSI/AAAAAAAAB6A/lb1X-yKh4eIC0XD34t3NrsJ_4-S_uuWHwCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252826%2529.png" src="https://1.bp.blogspot.com/-HpoWmY38h_E/YNsSF6Y-ZSI/AAAAAAAAB6A/lb1X-yKh4eIC0XD34t3NrsJ_4-S_uuWHwCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252826%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2021/05/whatsapp.html">Whatsapp</a></h2><span class="label-news-ui">Apps</span></div></div><div class="sidebarStory"><div class="glax-img"><a class="post-filter-link image-nos" href="https://appiki-pikitemplates.blogspot.com/2021/05/instagram.html"><img class="snip-thumbnail lazy-img" alt="Instagram" data-src="https://1.bp.blogspot.com/-iA3luNHIVPM/YNsR8VUHzxI/AAAAAAAAB54/Lx4nbjjHDq8dXHBPv4RhZNK_Meabg6naQCLcBGAsYHQ/w74-h74-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252825%2529.png" src="https://1.bp.blogspot.com/-iA3luNHIVPM/YNsR8VUHzxI/AAAAAAAAB54/Lx4nbjjHDq8dXHBPv4RhZNK_Meabg6naQCLcBGAsYHQ/w94-h94-p-k-no-nu/Piki%2BTemplates%2BIcons%2BDemo%2BPurpose%2B%252825%2529.png"></a></div><div class="relatedStory-box"><h2 class="entry-title"><a href="https://appiki-pikitemplates.blogspot.com/2021/05/instagram.html">Instagram</a></h2><span class="label-news-ui">Apps</span></div></div></div></div>
</div><div class="widget HTML type-comments open-iki" data-version="2" id="HTML2">
<div class="widget-title icon">
<h3 class="title">
Comments
</h3>
</div>
<div class="widget-content"><div class="comment-list"><div class="commentsStory"><a class="appiki-link" href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html?showComment=1625073310219#c4961273671370908547"><span class="comment-image"><img class="snip-thumbnail lazy-img" data-src="//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNhdeGnAaSnSI_ujAZ8aozZCvN7PEItpN8CpoLgRCJY_c-D6wK-Z6HsWScvs7HVK6zbfxDSh4rzM0GyVMmKnuNUReBBx6hcYq4W-k_uQANspVqU1NVwGW9c7HSYzYC8w/s113/jane-doe-img+%281%29.png" src="//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNhdeGnAaSnSI_ujAZ8aozZCvN7PEItpN8CpoLgRCJY_c-D6wK-Z6HsWScvs7HVK6zbfxDSh4rzM0GyVMmKnuNUReBBx6hcYq4W-k_uQANspVqU1NVwGW9c7HSYzYC8w/s113/jane-doe-img+%281%29.png=w39-h39-p-k-no-nu"></span><div class="comment-hero"><h2 class="entry-title cmm-title">Jane Doe</h2><p class="comment-snippet">This is reply comment test.</p></div></a></div><div class="commentsStory"><a class="appiki-link" href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html?showComment=1625073294721#c3255106031808475052"><span class="comment-image"><img class="snip-thumbnail lazy-img" data-src="//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNhdeGnAaSnSI_ujAZ8aozZCvN7PEItpN8CpoLgRCJY_c-D6wK-Z6HsWScvs7HVK6zbfxDSh4rzM0GyVMmKnuNUReBBx6hcYq4W-k_uQANspVqU1NVwGW9c7HSYzYC8w/s113/jane-doe-img+%281%29.png" src="//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNhdeGnAaSnSI_ujAZ8aozZCvN7PEItpN8CpoLgRCJY_c-D6wK-Z6HsWScvs7HVK6zbfxDSh4rzM0GyVMmKnuNUReBBx6hcYq4W-k_uQANspVqU1NVwGW9c7HSYzYC8w/s113/jane-doe-img+%281%29.png=w39-h39-p-k-no-nu"></span><div class="comment-hero"><h2 class="entry-title cmm-title">Jane Doe</h2><p class="comment-snippet">This is Third Comment Testing.</p></div></a></div><div class="commentsStory"><a class="appiki-link" href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html?showComment=1625073283207#c376568717855226205"><span class="comment-image"><img class="snip-thumbnail lazy-img" data-src="//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNhdeGnAaSnSI_ujAZ8aozZCvN7PEItpN8CpoLgRCJY_c-D6wK-Z6HsWScvs7HVK6zbfxDSh4rzM0GyVMmKnuNUReBBx6hcYq4W-k_uQANspVqU1NVwGW9c7HSYzYC8w/s113/jane-doe-img+%281%29.png" src="//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNhdeGnAaSnSI_ujAZ8aozZCvN7PEItpN8CpoLgRCJY_c-D6wK-Z6HsWScvs7HVK6zbfxDSh4rzM0GyVMmKnuNUReBBx6hcYq4W-k_uQANspVqU1NVwGW9c7HSYzYC8w/s113/jane-doe-img+%281%29.png=w39-h39-p-k-no-nu"></span><div class="comment-hero"><h2 class="entry-title cmm-title">Jane Doe</h2><p class="comment-snippet">This is Second Comment Testing.</p></div></a></div><div class="commentsStory"><a class="appiki-link" href="https://appiki-pikitemplates.blogspot.com/2021/05/facebook.html?showComment=1625073270785#c8400428161581529441"><span class="comment-image"><img class="snip-thumbnail lazy-img" data-src="//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNhdeGnAaSnSI_ujAZ8aozZCvN7PEItpN8CpoLgRCJY_c-D6wK-Z6HsWScvs7HVK6zbfxDSh4rzM0GyVMmKnuNUReBBx6hcYq4W-k_uQANspVqU1NVwGW9c7HSYzYC8w/s113/jane-doe-img+%281%29.png" src="//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNhdeGnAaSnSI_ujAZ8aozZCvN7PEItpN8CpoLgRCJY_c-D6wK-Z6HsWScvs7HVK6zbfxDSh4rzM0GyVMmKnuNUReBBx6hcYq4W-k_uQANspVqU1NVwGW9c7HSYzYC8w/s113/jane-doe-img+%281%29.png=w39-h39-p-k-no-nu"></span><div class="comment-hero"><h2 class="entry-title cmm-title">Jane Doe</h2><p class="comment-snippet">This is First Comment Testing.</p></div></a></div></div></div>
</div></div></div></div>
</div>
</div>

    </section>

    <hr hint="randomapps">
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
    </div>
  </div>
</section>


    
    <hr>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Our Top Apps</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Discover the Top Performing Apps in Our Store! We have carefully curated a collection of the most popular and highly rated apps that are making waves in the digital world. From innovative productivity solutions to addictive gaming experiences, our selection is sure to cater to your every need. Stay ahead of the curve and explore the best apps that our store has to offer. Find the perfect app to enhance your daily life and make the most out of your digital devices.</p>
    </div>
    <div class="flex flex-wrap -m-2">
      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">SnapChatClone</h2>
      <p class="text-gray-500">TechGenius</p>
    </div>
  </div>
</div>

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">FitnessTrackerPro</h2>
      <p class="text-gray-500">FitLife Inc.</p>
    </div>
  </div>
</div>

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">MusicStream</h2>
      <p class="text-gray-500">TuneIn Corp.</p>
    </div>
  </div>
</div>

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">Newsify</h2>
      <p class="text-gray-500">Media Corp.</p>
    </div>
  </div>
</div>

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">WeatherApp</h2>
      <p class="text-gray-500">Forecast Systems</p>
    </div>
  </div>
</div>

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">FinanceTracker</h2>
      <p class="text-gray-500">MoneyWise</p>
    </div>
  </div>
</div>

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">TaskMaster</h2>
      <p class="text-gray-500">Productivity Inc.</p>
    </div>
  </div>
</div>

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">PhotoEditorPro</h2>
      <p class="text-gray-500">Imaginary Studios</p>
    </div>
  </div>
</div>

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">LanguageLearner</h2>
      <p class="text-gray-500">Polyglot Labs</p>
    </div>
  </div>
</div>

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">SleepTracker</h2>
      <p class="text-gray-500">DreamZ Inc.</p>
    </div>
  </div>
</div>

<div class="p-2 lg:w-1/3 md:w-1/2 w-full">
  <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
    <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/80x80">
    <div class="flex-grow">
      <h2 class="text-gray-900 title-font font-medium">RecipeFinder</h2>
      <p class="text-gray-500">Foodie Labs</p>
    </div>
  </div>
</div>

      <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <img alt="team" class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="https://dummyimage.com/108x98">
          <div class="flex-grow">
            <h2 class="text-gray-900 title-font font-medium">Rodrigo Monchi</h2>
            <p class="text-gray-500">Product Manager</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
    
    <hr>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Statics of AppsPages</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Welcome to the statistical overview of our app pages. Here, we present valuable insights and data related to the performance and engagement of our apps. These statistics provide a glimpse into the popularity, user feedback, and usage trends of our apps. Take a closer look at the numbers below:

</p>
    </div>
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M8 17l4 4 4-4m-4-5v9"></path>
            <path d="M20.88 18.09A5 5 0 0018 9h-1.26A8 8 0 103 16.29"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
          <p class="leading-relaxed">Downloads</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">1.3K</h2>
          <p class="leading-relaxed">Users</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M3 18v-6a9 9 0 0118 0v6"></path>
            <path d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3z"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
          <p class="leading-relaxed">Apps</p>
        </div>
      </div>
      <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
        <div class="border-2 border-gray-200 px-4 py-6 rounded-lg">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-indigo-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
          </svg>
          <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
          <p class="leading-relaxed">PageViews</p>
        </div>
      </div>
    </div>
  </div>
</section>




    <hr>
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Recent Apps</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Discover our latest additions to the app family. We are excited to introduce the following apps that have been recently released and are now available for download</p>
    </div>
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Shooting Stars</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/601x361">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Catalyzer</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/603x363">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The 400 Blows</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/602x362">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Neptune</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/605x365">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Holden Caulfield</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
      <div class="lg:w-1/3 sm:w-1/2 p-4">
        <div class="flex relative">
          <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/606x366">
          <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
            <h2 class="tracking-widest text-sm title-font font-medium text-indigo-500 mb-1">THE SUBTITLE</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Alper Kamu</h1>
            <p class="leading-relaxed">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing microdosing tousled waistcoat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



    <hr>
    <footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
    <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            <img src="logo.png" width="25px" />

      <span class="ml-3 text-xl">AppsPages</span>
    </a>
    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 AppsPages —
      <a href="https://github.com/sh20raj" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@sh20raj</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
      <a class="text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
          <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
          <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
        </svg>
      </a>
      <a class="ml-3 text-gray-500">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </div>
</footer>



    
  </body>
</html>