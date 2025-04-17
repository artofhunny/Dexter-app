<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game App Store</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=check" />


    <script defer>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'dark-bg': '#121212',
                        'dark-card': '#1E1E1E',
                        'primary-blue': '#00A3FF',
                        'dark-navy': '#0F172A',
                        'hot-red': '#FF3A5E'
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="{{ asset('css/listing.css') }}">

    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper {
            width: 100%;
            height: 300px;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 5px;
        }
    </style>
  
    <!-- Load Quill -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <style>
        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 10px;
        }

        .tab-btn {
            padding: 10px 20px;

            border: none;
            cursor: pointer;
            font-weight: bold;
            border-radius: 8px;
        }

        .tab-btn.active {
            background: #007bff;
            color: #fff;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .editor-box {
            height: 300px;
            background: #fff;
            margin-bottom: 20px;
        }

        .ql-editor {
            color: #000;
            /* Make the text black */
            font-size: 16px;
            /* Optional: make it a bit bigger and cleaner */
        }
        /* .inpp{
            display: none;
        } */
        .chk span{
            display: none;
        }
        .paid-plan-container{
            display: flex;
        }
    </style>

</head>

<body class="bg-white dark:bg-gray-800 text-black dark:text-white font-sans">

    <!-- ==== go top btn ===  -->
    <div id="goTop">
        <a href="#nav">⬆️</a>
    </div>
    <div id="app" class=" mx-auto max-w-[1650px]">
        <!-- Top Banner -->
        <!-- <div id="nav"
      class="w-full bg-gray-800 text-white px-[23px] py-[13px] text-center text-sm flex items-center justify-between">
    
      <div class="justify-start top_bar_text"><span class="text-white   font-medium font-['Montserrat']">Play
        </span><span class="text-red-600   font-bold font-['Montserrat']">God of War</span><span
          class="text-white   font-medium font-['Montserrat']"> and earn exculisive prizes - </span><span
          class="text-cyan-300  font-bold font-['Montserrat']">Play Now</span></div>
      <div class="h-7 w-32 hidden md:block">
        <img src="./assets/images/god-of-war-logo.png" alt="God of War" class="h-full w-full object-contain">
      </div>
    </div> -->



        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="fixed left-[-100%] top-[71px] w-64 h-screen bg-white dark:bg-gray-900 p-4 transition-all duration-300 z-[99] md:hidden shadow-xl">

            <div class="relative mb-4">
                <input type="text" placeholder="Search..."
                    class="w-full bg-gray-100 dark:bg-dark-bg rounded-lg pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-blue">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>
            <div class="space-y-1">
                <div class="sidebar-link text-lg active">
                    <img src="./assets/icons/home.svg" class="fas fa-home mr-3 h-5 w-5" alt=""> Home
                </div>
                <div class="sidebar-link text-lg">
                    <img src="./assets/icons/categories.svg" class="fas fa-home mr-3 h-5 w-5" alt=""> Categories
                </div>
                <div class="sidebar-link text-lg">
                    <img src="./assets/icons/message.svg" class="fas fa-home mr-3 h-5 w-5" alt=""> Message
                </div>
                <div class="sidebar-link text-lg">
                    <img src="./assets/icons/recent.svg" class="fas fa-home mr-3 h-5 w-5" alt=""> Recently
                    Played
                </div>
                <div class="sidebar-link text-lg">
                    <img src="./assets/icons/admin.svg" class="fas fa-home mr-3 h-5 w-5" alt=""> Account
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row dark:bg-gray-900">
            <!-- Sidebar -->
            <aside
                class="hidden border-r-2 border-gray-800 md:block w-64 h-screen bg-white dark:bg-gray-900 p-4 sticky top-[0px]">
                <div class="space-y-6 ">
                    <div class="text-center pt-[10px] text-white text-2xl font-bold font-['Montserrat']">APP STORE</div>

                    <div class="relative">
                        <input type="text" placeholder="Search Apps and Games"
                            class="search_field w-full  dark:bg-gray-900 rounded-md border-2 border-gray-800  pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-blue">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                    </div>
                    <div class="space-y-5 border-b-2 border-gray-800">
                        <div
                            class="sidebar-link active text-white  flex items-center text-base font-medium font-['Montserrat']  py-2 px-[10px] h-10 bg-gray-800 rounded-md">
                            <img src="./assets/icons/home.svg" class="fas fa-home mr-3 h-5 w-5" alt=""> Home
                        </div>
                        <div
                            class="sidebar-link flex text-white items-center  text-base font-medium font-['Montserrat']  py-2 px-[10px] h-10  rounded-md">
                            <img src="./assets/icons/categories.svg" class="fas fa-home mr-3 h-5 w-5" alt="">
                            Categories
                        </div>
                        <div
                            class="sidebar-link items-center text-base font-medium font-['Montserrat']  py-2 px-[10px] h-10  rounded-md">
                            <img src="./assets/icons/message.svg" class="fas fa-home mr-3 h-5 w-5" alt="">
                            Message
                        </div>
                        <div
                            class="sidebar-link items-center text-base font-medium font-['Montserrat']  py-2 px-[10px] h-10  rounded-md">
                            <img src="./assets/icons/recent.svg" class="fas fa-home mr-3 h-5 w-5" alt="">
                            Recently Played
                        </div>
                        <div style="margin-bottom: 20px;"
                            class="sidebar-link items-center  text-base font-medium font-['Montserrat']  py-2 px-[10px] h-10  rounded-md">
                            <img src="./assets/icons/admin.svg" class="fas fa-home mr-3 h-5 w-5" alt=""> Account
                        </div>
                    </div>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="flex-1 px-4 pb-6 dark:bg-gray-900 max-w-[1500px] mx-auto ">

                <!-- Navigation -->
                <nav class="sticky top-0 w-full bg-white/80 dark:bg-gray-900 backdrop-blur-md z-50 shadow-sm">
                    <div class=" flex justify-between items-center px-0  py-5">
                        <div class="flex items-center relative flex-col flex-1 md:flex-row space-x-4">
                            <button id="mobile-menu-button" class="md:hidden text-right text-2xl">
                                <i class="fas fa-bars"></i>
                            </button>
                            <nav class="navbar mt-6 lg:mt-0">
                                <div class="background"></div>
                                <div class="navbar-links">
                                    <a class="nav-item " href="index.html"
                                        onclick="delayedRedirect(event, 'index.html')" data-index="0">Games</a>
                                    <a class="nav-item active" href="app.html" data-index="1">Apps</a>
                                    <a class="nav-item" data-index="2">P2E</a>
                                    <a class="nav-item" href="#contact_form" data-index="3">Contact</a>
                                </div>
                            </nav>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button id="theme-toggle"
                                class="text-2xl text-gray-600 dark:text-gray-300 p-2 rounded-full hover:bg-gray-200 dark:hover:bg-dark-card transition-all">
                                <i class="fas fa-moon dark:hidden"></i>
                                <i class="fas fa-sun hidden dark:block"></i>
                            </button>
                            <div class="hidden md:flex space-x-6">
                                <button
                                    class="  px-[24px] py-2  hover:bg-cyan-600 hover:text-white transition-all dark:text-white text-lg font-medium font-['Montserrat'] rounded-[5px] border-2 border-cyan-300"><a
                                        href="login.html">Sign In</a></button>
                                <button
                                    class=" text-slate-950 text-lg font-medium font-['Montserrat']  px-[24px] py-2 bg-cyan-300 rounded-[5px] hover:bg-cyan-600 hover:text-white transition-all">Sign
                                    Up</button>
                            </div>
                        </div>
                    </div>
                </nav>


                {{-- APp listing --}}
                <h1 class="app_listing_heading">List Your App</h1>
                <div class="form_section">
                    <form id="app_listing-form" action="{{ route('launchpad') }}" method="POST"
                        enctype="multipart/form-data">
                        <div class="app_listing-container">
                            <!-- Row 1 -->
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-app-name">App Name</label>
                                <input type="text" class="app_listing-input" id="app_listing-app-name"
                                    name="app_name" placeholder="Enter your app name">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-app-category">App Category</label>
                                <select class="app_listing-input" id="app_listing-app-subcategory"
                                    name="app_category">
                                    <option disabled selected>Select a category</option>
                                    <option value="AI Driven">AI Driven</option>
                                    <option value="Airdrop">Airdrop</option>
                                    <option value="Arbitrage">Arbitrage</option>
                                    <option value="Audit">Audit</option>
                                    <option value="Browser">Browser</option>
                                    <option value="DAO">DAO</option>
                                    <option value="Defi">Defi</option>
                                    <option value="DEX">DEX</option>
                                    <option value="DIA">DIA</option>
                                    <option value="Exchange">Exchange</option>
                                    <option value="GameFi">GameFi</option>
                                    <option value="Launchpad">Launchpad</option>
                                    <option value="Marketplace">Marketplace</option>
                                    <option value="Metaverse">Metaverse</option>
                                    <option value="NFT">NFT</option>
                                    <option value="Play-to-Earn">Play-to-Earn</option>
                                    <option value="Research & Analysis">Research & Analysis</option>
                                    <option value="Staking">Staking</option>
                                    <option value="Swapping">Swapping</option>
                                    <option value="Token">Token</option>
                                    <option value="Trading">Trading</option>
                                    <option value="Use to Earn">Use to Earn</option>
                                    <option value="Utilities">Utilities</option>
                                    <option value="Wallet">Wallet</option>
                                </select>
                            </div>

                            {{-- Subcategory --}}
                            <div class="app_listing-field">
                              <label class="app_listing-label" for="app_listing-app-category">Sub Category</label>
                              <select class="app_listing-input" id="app_listing-app-subcategory"
                                  name="Sub_category">
                                  <option disabled selected>Select a Sub Category</option>
                                  <option value="AI Driven">AI Driven</option>
                                  <option value="Airdrop">Airdrop</option>
                                  <option value="Arbitrage">Arbitrage</option>
                                  <option value="Audit">Audit</option>
                                  <option value="Browser">Browser</option>
                                  <option value="DAO">DAO</option>
                                  <option value="Defi">Defi</option>
                                  <option value="DEX">DEX</option>
                                  <option value="DIA">DIA</option>
                                  <option value="Exchange">Exchange</option>
                                  <option value="GameFi">GameFi</option>
                                  <option value="Launchpad">Launchpad</option>
                                  <option value="Marketplace">Marketplace</option>
                                  <option value="Metaverse">Metaverse</option>
                                  <option value="NFT">NFT</option>
                                  <option value="Play-to-Earn">Play-to-Earn</option>
                                  <option value="Research & Analysis">Research & Analysis</option>
                                  <option value="Staking">Staking</option>
                                  <option value="Swapping">Swapping</option>
                                  <option value="Token">Token</option>
                                  <option value="Trading">Trading</option>
                                  <option value="Use to Earn">Use to Earn</option>
                                  <option value="Utilities">Utilities</option>
                                  <option value="Wallet">Wallet</option>
                              </select>
                            </div>

                            <!-- Row 2 -->
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-website-url">Website URL</label>
                                <input type="text" class="app_listing-input" name="website_url"
                                    id="app_listing-website-url" placeholder="https://www.yourwebsite.com">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-instagram-url">Instagram URL</label>
                                <input type="text" class="app_listing-input" id="app_listing-instagram-url"
                                    name="instagram_url" placeholder="https://www.instagram.com/yourhandle">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-facebook-url">Facebook URL</label>
                                <input type="text" class="app_listing-input" id="app_listing-facebook-url"
                                    name="facebook_url" placeholder="https://www.facebook.com/yourhandle">
                            </div>

                            <!-- Row 3 -->
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-twitter-url">Twitter URL</label>
                                <input type="text" class="app_listing-input active" id="app_listing-twitter-url"
                                    name="x_url" placeholder="https://www.x.com/yourhandle">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-medium-url">Medium URL</label>
                                <input type="text" class="app_listing-input" id="app_listing-medium-url"
                                    placeholder="Enter your email address">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-linkedin-url">LinkedIn URL</label>
                                <input type="text" class="app_listing-input" id="app_listing-linkedin-url"
                                    placeholder="Enter your email address">

                            </div>

                            <!-- Row 4 -->
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-about">About Your App</label>
                                <textarea class="app_listing-input" name="about_intro" id="app_listing-about" placeholder="Enter About your app"></textarea>
                            
                            </div>
                            
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-introduction">Introduction</label>
                                <textarea class="app_listing-input" id="app_listing-introduction" placeholder="Enter your phone number"></textarea>
                            </div>
                            
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-overview">Overview</label>
                                <textarea class="app_listing-input" id="app_listing-overview" placeholder="Enter your phone number"></textarea>
                            </div>
                


                            <!-- Tabs -->
                            {{-- <div class="app_listing-field">
                                <label class="app_listing-label">App Details</label>

                                <div class="tabs">
                                    <button type="button" class="tab-btn active" data-tab="about">About</button>
                                    <button type="button" class="tab-btn"
                                        data-tab="introduction">Introduction</button>
                                    <button type="button" class="tab-btn" data-tab="overview">Overview</button>
                                </div>

                                <div id="about" class="tab-content active">
                                    <div id="about_intro_editor" class="editor-box"></div>
                                </div>

                                <div id="introduction" class="tab-content">
                                    <div id="introduction_editor" class="editor-box"></div>
                                </div>

                                <div id="overview" class="tab-content">
                                    <div id="overview_editor" class="editor-box"></div>
                                </div>

                                <!-- Hidden inputs to submit form data -->
                                <input type="hidden" name="about_intro" id="about_intro">
                                <input type="hidden" name="introduction" id="introduction_input">
                                <input type="hidden" name="overview" id="overview_input">
                            </div> --}}




                                        {{-- <!-- Row 5 -->
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-faqs">FAQs</label>
                                <textarea class="app_listing-input" id="app_listing-faqs" placeholder="Enter your full name"></textarea>
                            </div> --}}

                            {{-- FAQ --}}

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-faq">FAQ</label>
                                <textarea class="app_listing-input" id="app_listing-faq" placeholder="Enter the question"></textarea>
                            </div>

                            {{-- <div class="mb-3">
                                <label class="app_listing-label" for="app_listing-faqs">FAQs</label>
                                <div id="faq-container"></div>
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="addFAQ()">Add
                                    FAQ</button>
                            </div> --}}


                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-benefits">Benefits</label>
                                <textarea class="app_listing-input" id="app_listing-benefits" placeholder="Enter your phone number"></textarea>
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-press-url">Press Release URL</label>
                                <!-- <input type="text" class="app_listing-input" id="app_listing-press-url" placeholder="Enter your phone number"> -->
                                <textarea class="app_listing-input" id="app_listing-press-url" placeholder="Enter your phone number"></textarea>
                            </div>

                            <!-- Row 6 -->
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-developed-by">Developed By</label>
                                <input type="text" class="app_listing-input" id="app_listing-developed-by"
                                    placeholder="Enter your full name">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-published-by">Published by</label>
                                <input type="text" class="app_listing-input" id="app_listing-published-by"
                                    placeholder="Enter your email address">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-release-date">Release Date</label>
                                <input type="text" class="app_listing-input" id="app_listing-release-date"
                                    placeholder="Enter your email address">
                            </div>

                            <!-- Row 7 -->
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-supported-language">Supported
                                    Language</label>
                                <input type="text" class="app_listing-input" id="app_listing-supported-language"
                                    placeholder="Enter your full name">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-additional-terms">Additional
                                    Terms</label>
                                <input type="text" class="app_listing-input" id="app_listing-additional-terms"
                                    placeholder="Enter your email address">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-publisher-name">Publisher
                                    Name</label>
                                <input type="text" class="app_listing-input" id="app_listing-publisher-name"
                                    placeholder="Enter your email address">
                            </div>

                            <!-- Row 8 -->
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-tokens-coins">Tokens and Coins
                                    Supported</label>
                                <input type="text" class="app_listing-input" id="app_listing-tokens-coins"
                                    placeholder="Enter your full name">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-availability">Availability</label>
                                <input type="text" class="app_listing-input" id="app_listing-availability"
                                    placeholder="Enter your email address">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-publisher-name2">Publisher
                                    Name</label>
                                <input type="text" class="app_listing-input" id="app_listing-publisher-name2"
                                    placeholder="Enter your email address">
                            </div>

                            <!-- Row 9 -->
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-app-logo">App Logo <p
                                        class="app_listing-subtext">(Recommended Size: 800x750px)</p></label>

                                <div class="app_listing-file-section">
                                    <span class="type_files">Files</span>
                                    <label class="app_listing-file-label" for="app_listing-logo-upload">Upload your
                                        App logo</label>
                                    <input type="file" class="app_listing-file-input"
                                        id="app_listing-logo-upload">
                                    <span class="app_listing-file-name" id="app_listing-logo-file-name"></span>
                                </div>
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-app-images">App Images <p
                                        class="app_listing-subtext">(Recommended Size: 2048×1536px)</p></label>

                                <div class="app_listing-file-section">
                                    <span class="type_files">Files</span>
                                    <label class="app_listing-file-label" for="app_listing-images-upload">Upload your
                                        App Images</label>
                                    <input type="file" class="app_listing-file-input"
                                        id="app_listing-images-upload" multiple>
                                    <span class="app_listing-file-name" id="app_listing-images-file-name"></span>
                                </div>
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-awards">Awards <p
                                        class="app_listing-subtext">(Recommended Size: 800×750px)</p></label>

                                <div class="app_listing-file-section">
                                    <span class="type_files">Files</span>
                                    <label class="app_listing-file-label" for="app_listing-awards-upload">Upload your
                                        Awards</label>
                                    <input type="file" class="app_listing-file-input"
                                        id="app_listing-awards-upload">
                                    <span class="app_listing-file-name" id="app_listing-awards-file-name"></span>
                                </div>
                            </div>

                            <!-- Row 10 -->
                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-token-name">Token Name</label>
                                <input type="text" class="app_listing-input" id="app_listing-token-name"
                                    placeholder="Upload your App logo">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-token-platform">Token Listed on
                                    which Platform</label>
                                <input type="text" class="app_listing-input" id="app_listing-token-platform"
                                    placeholder="Upload at least 5 Screenshots">
                            </div>

                            <div class="app_listing-field">
                                <label class="app_listing-label" for="app_listing-other-detail">Other Detail</label>
                                <input type="text" class="app_listing-input" id="app_listing-other-detail"
                                    placeholder="Enter your email address">
                            </div>

                            
                        </div>

                        {{-- SEO Section --}}
                        <h1 class="app_listing_heading mt-5">
                            SEO Details
                        </h1>
                        <div class="bg-[#222C34] flex gap-5 px-4 py-6">
                            <div class="flex flex-col  w-[50%]">
                                <label for="app-listing-seo" class="app_listing-label">SEO Title</label>
                                <input type="text" id="app-listing-seo" placeholder="55 - 60 Words" class="w-full app_listing-input">
                            </div>
                            <div class="flex flex-col w-[50%]">
                                <label for="app-listing-seo" class="app_listing-label" >SEO Description</label>
                                <input type="text" id="app-listing-seo" placeholder="155 - 160 Words" class="w-full app_listing-input">
                            </div>

                        </div>

                        {{-- Paid plans Section --}}
                        <h1 class="app_listing_heading mt-5 paid-plan-heading cursor-pointer">
                            Paid Plans
                        </h1>

                        <div class="bg-[#222C34] flex flex-col gap-6 px-4 py-6 paid-plan-container">
                            <div class="flex flex-col md:flex-row gap-4 md:gap-4 md:flex-nowrap justify-between lg:gap-24">
                                <div class="md:w-[50%] flex justify-between">
                                    <div class="">
                                        <p class="">Home Page Hero Banner ($25)</p>
                                        {{-- <input type="file" class="bg-gray-700 mt-2 w-56 rounded inpp app_listing-input"
                                        id=""> --}}
                                        <div class="flex items-center rounded mt-2 overflow-hidden inpp">
                                            <p class="bg-[#545D77] py-2 px-3">File</p>
                                            <label for="upload-hero-banner" class="px-3 bg-[#545D7770] py-3 text-xs">Upload home page hero banner</label>
                                            <input type="file" id="upload-hero-banner" class="hidden">
                                        </div>
                                    </div>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk show-inp">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                                <div class="md:w-[50%] flex justify-between">
                                    <p>Pool Tag</p>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk ">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between lg:gap-24 flex-col md:flex-row gap-4 md:gap-4 md:flex-nowrap">
                                <div class="md:w-[50%] flex justify-between">
                                    <div>
                                        <p class="show-inp">Home Page Featured Listing ($25)</p>
                                        <input type="text" class="bg-gray-700 mt-2 w-full rounded inpp app_listing-input"
                                        id="">
                                    </div>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk show-inp">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                                <div class="md:w-[50%] flex justify-between">
                                    <p>Pool Tag</p>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between lg:gap-24 flex-col md:flex-row gap-4 md:gap-4 md:flex-nowrap">
                                <div class="md:w-[50%] flex justify-between">
                                    <div>
                                        <p class="show-inp">Home Page Featured Banner ($25)</p>
                                        <div class="flex items-center rounded mt-2 overflow-hidden inpp">
                                            <p class="bg-[#545D77] py-2 px-3">File</p>
                                            <label for="upload-hero-banner" class="px-3 bg-[#545D7770] py-3 text-xs">Upload home page hero banner</label>
                                            <input type="file" id="upload-hero-banner" class="hidden">
                                        </div>
                                    </div>
                                    <div class="md:w-[25px] h-[25px] bg-[#545D7780] rounded chk show-inp">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                                <div class="md:w-[50%] flex justify-between">
                                    <p>Pool Tag</p>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between lg:gap-24 flex-col md:flex-row gap-4 md:gap-4 md:flex-nowrap">
                                <div class="md:w-[50%] flex justify-between">
                                    <div>
                                        <p class="show-inp">Category Page Top Listing ($25)</p>
                                        <input type="text" class="bg-gray-700 mt-2 rounded w-full inpp"
                                        id="">
                                    </div>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk show-inp">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                                <div class="md:w-[50%] flex justify-between">
                                    <p>Pool Tag</p>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between lg:gap-24 flex-col md:flex-row gap-4 md:gap-4 md:flex-nowrap">
                                <div class="md:w-[50%] flex justify-between">
                                    <div>
                                        <p class="show-inp">Category Page Top 2 & 3 Listing ($25)</p>
                                        <input type="text" class="bg-gray-700 mt-2 w-full rounded inpp"
                                        id="">
                                    </div>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk show-inp">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                                <div class="md:w-[50%] flex justify-between">
                                    <p>Pool Tag</p>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between lg:gap-24 flex-col md:flex-row gap-4 md:gap-4 md:flex-nowrap">
                                <div class="md:w-[50%] flex justify-between">
                                    <p>Home Page Hero Banner</p>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                                <div class="md:w-[50%] flex justify-between">
                                    <p>Pool Tag</p>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between lg:gap-24 flex-col md:flex-row gap-4 md:gap-4 md:flex-nowrap">
                                <div class="md:w-[50%] flex justify-between">
                                    <p>Home Page Hero Banner</p>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                                <div class="md:w-[50%] flex justify-between">
                                    <p>Pool Tag</p>
                                    <div class="w-[25px] h-[25px] bg-[#545D7780] rounded chk">
                                        <span class="material-symbols-outlined">
                                            check
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-8">
                            <button type="submit" class="app_listing-submit" id="app_listing-submit-btn">Submit
                                Your App</button>
                        </div>



                    </form>


                </div>

            </main>
        </div>
        <footer class="footer">
            <div class="social-banner">
                <div class="social-text">Get Connected with us on Social Media</div>
                <div class="social-icons">
                    <div class="social-icon">
                        <i>in</i>
                    </div>
                    <div class="social-icon">
                        <i>f</i>
                    </div>
                    <div class="social-icon">
                        <i>t</i>
                    </div>
                </div>
            </div>

            <div class="footer-content">
                <div class="footer-column company_info">
                    <h3 class="footer-heading">Company Name</h3>
                    <p class="company-info">
                        Dextr Apps is a Web3 app store featuring web-based dApps and games where users can explore,
                        play, and engage
                        with blockchain-powered applications directly from your browser.
                    </p>
                </div>

                <div class="footer-column other_info">
                    <h3 class="footer-heading">Pages</h3>
                    <ul class="footer-links">
                        <li class="footer-link">Games</li>
                        <li class="footer-link">Apps</li>
                        <li class="footer-link">Play 2 Earn</li>
                        <li class="footer-link">Contact</li>
                    </ul>
                </div>

                <div class="footer-column other_info">
                    <h3 class="footer-heading">Pages</h3>
                    <ul class="footer-links">
                        <li class="footer-link">Games</li>
                        <li class="footer-link">Apps</li>
                        <li class="footer-link">Play 2 Earn</li>
                        <li class="footer-link">Contact</li>
                    </ul>
                </div>

                <div class="footer-column other_info">
                    <h3 class="footer-heading">Pages</h3>
                    <ul class="footer-links">
                        <li class="footer-link">Games</li>
                        <li class="footer-link">Apps</li>
                        <li class="footer-link">Play 2 Earn</li>
                        <li class="footer-link">Contact</li>
                    </ul>
                </div>
            </div>

            <div class="copyright-bar">
                All Rights Reserved 2025-26 © Copyright - Dextr Apps |
                <a href="#" class="copyright-link">Privacy</a> |
                <a href="#" class="copyright-link">Disclaimer</a> |
                <a href="#" class="copyright-link">Terms & Conditions</a>
            </div>
        </footer>
    </div>

    <!-- Initialize Quill and Tabs -->
    <script>
        // Initialize Quill editors
        var aboutIntroEditor = new Quill('#about_intro_editor', {
            theme: 'snow',
            modules: {
                toolbar: true
            }
        });
        var introductionEditor = new Quill('#introduction_editor', {
            theme: 'snow',
            modules: {
                toolbar: true
            }
        });
        var overviewEditor = new Quill('#overview_editor', {
            theme: 'snow',
            modules: {
                toolbar: true
            }
        });

        // Tabs switch
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const tab = button.getAttribute('data-tab');

                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));

                button.classList.add('active');
                document.getElementById(tab).classList.add('active');
            });
        });

        // On form submit: copy editors data to hidden inputs
        const form = document.querySelector('form');
        form.onsubmit = function() {
            document.querySelector('#about_intro').value = aboutIntroEditor.root.innerHTML;
            document.querySelector('#introduction_input').value = introductionEditor.root.innerHTML;
            document.querySelector('#overview_input').value = overviewEditor.root.innerHTML;
        };
    </script>


    <script>
        function addFAQ() {
            let faqContainer = document.getElementById("faq-container");
            let index = faqContainer.children.length + 1;
            let faqHtml = `
          <div class="faq-item mb-3 border p-3">
              <label class="form-label">Question ${index}</label>
              <input type="text" class="form-control" name="faq_question[]" placeholder="Enter Question">
              <label class="form-label mt-2">Answer</label>
              <textarea class="form-control" name="faq_answer[]" rows="2" placeholder="Enter Answer"></textarea>
              <button type="button" class="btn btn-danger btn-sm mt-2" onclick="removeFAQ(this)">Remove</button>
          </div>`;
            faqContainer.insertAdjacentHTML('beforeend', faqHtml);
        }

        function removeFAQ(button) {
            button.parentElement.remove();
        }

        const chkBoxes = document.querySelectorAll(".chk");
        const show_inp_chks = document.querySelectorAll(".show-inp");

        chkBoxes.forEach(chkbox => {
            // chkbox.addEventListener('click', function(){
                chkbox.firstElementChild.style.display = "none";
                
            // });
        });

        chkBoxes.forEach(chkbox => {
            chkbox.addEventListener('click', function(){
                if(this.firstElementChild.style.display === "none"){
                    this.firstElementChild.style.display = "inline"
                }
                else{
                    this.firstElementChild.style.display = "none"
                }
                
            });
        });

        show_inp_chks.forEach(btn => {
            btn.parentElement.querySelector(".inpp").style.display = "none";
        });

        show_inp_chks.forEach(btn => {
            btn.addEventListener('click', function(){
                if(this.parentElement.querySelector(".inpp").style.display === "none"){
                    this.parentElement.querySelector(".inpp").style.display = "flex";
                }
                else{
                    this.parentElement.querySelector(".inpp").style.display = "none";
                }
            });
        });


        const paidPlanHeading = document.querySelector(".paid-plan-heading");  
        const paidPlanContainer = document.querySelector(".paid-plan-container");  
        paidPlanContainer.style.display = "none";

        paidPlanHeading.addEventListener('click', function(){
            if(paidPlanContainer.style.display === "none"){
                paidPlanContainer.style.display = "flex";
            }
            else{
                paidPlanContainer.style.display = "none";
            }
        });

    </script>

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></>



</body>

</html>
