<?php

include 'conn.php';

?>

<html>
  <head>
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
    <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Submit
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
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


    <hr hint="randomapps">
    <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
<?php

// Retrieve 12 random app details from the 'apps' table
$query = "SELECT * FROM apps ORDER BY RANDOM() LIMIT 12";
$result = pg_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . pg_last_error($conn));
}

// Fetch the app details as an associative array
$appDetails = pg_fetch_all($result);

// Check if there are any app details
if (!$appDetails) {
    echo "No app details found.";
} else {
    // Output the app details
    foreach ($appDetails as $app) {
        echo '
          
            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
              <a class="block relative h-48 rounded overflow-hidden">
                <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="' . $app['icon'] . '">
              </a>
              <div class="mt-4">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">' . $app['category'] . '</h3>
                <h2 class="text-gray-900 title-font text-lg font-medium">' . $app['name'] . '</h2>
                <p class="mt-1">' . $app['downloads'] . '</p>
              </div>
            </div>
          
        ';
    }
}

pg_close($conn);

?>
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