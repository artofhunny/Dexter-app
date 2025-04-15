<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game App Store</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
    {{-- 
        <style>
            .hero-card {
                position: relative;
                overflow: hidden;
                border-radius: 30px;
                width: 100%;
                height: 100%;
                border: none;
                box-shadow: none;
            }

            .image-carousel {
                position: relative;
                width: 100%;
                height: 100%;
            }

            .card-image {
                position: absolute;
                width: 100%;
                height: 100%;
                object-fit: cover;
                opacity: 0;
                transition: opacity 1s ease-in-out;
            }

            .hero-card:hover .card-image:nth-child(1) {
                opacity: 1;
                transition-delay: 0s;
            }

            .hero-card:hover .card-image:nth-child(2) {
                opacity: 1;
                transition-delay: 1s;
            }

            .hero-card:hover .card-image:nth-child(3) {
                opacity: 1;
                transition-delay: 2s;
            }
            
        </style> --}}

<style>
    .swiper-button-next,
    .swiper-button-prev {
      display: none !important;
    }
  </style>
  


    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


</head>

<body class="bg-white dark:bg-gray-800 text-black dark:text-white font-sans">
    <div id="app" class=" mx-auto">
    
        <!-- Top Banner -->
        <div
            class="w-full bg-gray-800 text-white px-[23px] py-[13px] text-center text-sm flex items-center justify-between">
            <!-- <div></div> -->
            <div class="justify-start"><span class="text-white text-lg font-medium font-['Montserrat']">Play
                </span><span class="text-red-600 text-lg font-bold font-['Montserrat']">God of War</span><span
                    class="text-white text-lg font-medium font-['Montserrat']"> and earn exculisive prizes -
                </span><span class="text-cyan-300 text-lg font-bold font-['Montserrat']">Play Now</span></div>
            <div class="h-7 w-32">
                <img src="./assets/images/god-of-war-logo.png" alt="God of War" class="h-full w-full object-contain">
            </div>
        </div>



        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="fixed left-[-100%] top-[86px] w-64 h-screen bg-white dark:bg-dark-card p-4 transition-all duration-300 z-40 md:hidden shadow-xl">
            <div class="relative mb-4">
                <input type="text" placeholder="Search..."
                    class="w-full bg-gray-100 dark:bg-dark-bg rounded-lg pl-10 pr-4 py-2 focus:outline-none focus:ring-2 focus:ring-primary-blue">
                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
            </div>
            <div class="space-y-1">
                <div class="sidebar-link active">
                    <i class="fas fa-home mr-3 w-5 text-center"></i> Home
                </div>
                <div class="sidebar-link">
                    <i class="fas fa-th-large mr-3 w-5 text-center"></i> Categories
                </div>
                <div class="sidebar-link">
                    <i class="fas fa-comment mr-3 w-5 text-center"></i> Message
                </div>
                <div class="sidebar-link">
                    <i class="fas fa-history mr-3 w-5 text-center"></i> Recently Played
                </div>
                <div class="sidebar-link">
                    <i class="fas fa-user mr-3 w-5 text-center"></i> Account
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row dark:bg-gray-900">
            <!-- Sidebar -->
            <aside
                class="hidden border-r-2 border-gray-800 md:block w-64 h-screen bg-white dark:bg-gray-900 p-4 sticky top-[0px]">
                <div class="space-y-6">
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
            <main class="flex-1 pb-6 dark:bg-gray-900 max-w-[1400px] mx-auto ">

                <!-- Navigation -->
                <nav class="sticky top-0 w-full bg-white/80 dark:bg-gray-900 backdrop-blur-md z-50 shadow-sm">
                    <div class=" flex justify-between items-center p-4 py-5">
                        <div class="flex items-center space-x-4">
                            <button id="mobile-menu-button" class="md:hidden text-2xl">
                                <i class="fas fa-bars"></i>
                            </button>
                            <nav class="navbar">
                                <div class="background"></div>
                                <div class="navbar-links">
                                    <a class="nav-item active" data-index="0">Games</a>
                                    <a class="nav-item" data-index="1">Apps</a>
                                    <a class="nav-item" data-index="2">P2E</a>
                                    <a href="#contactFormus" class="nav-item" data-index="3">Contact</a>
                                </div>
                            </nav>
                        </div>
                        @guest
                            <div class="flex items-center space-x-4">
                                <button id="theme-toggle"
                                    class="text-2xl text-gray-600 dark:text-gray-300 p-2 rounded-full hover:bg-gray-200 dark:hover:bg-dark-card transition-all">
                                    <i class="fas fa-moon dark:hidden"></i>
                                    <i class="fas fa-sun hidden dark:block"></i>
                                </button>
                                <div class="hidden md:flex space-x-6">
                                    <a href="{{ route('login') }}">
                                        <button
                                            class="px-[24px] py-2 hover:bg-cyan-600 hover:text-white transition-all dark:text-white text-lg font-medium font-['Montserrat'] rounded-[5px] border-2 border-cyan-300">
                                            Sign In
                                        </button>
                                    </a>

                                    <a href="{{ route('register') }}">
                                        <button
                                            class="text-slate-950 text-lg font-medium font-['Montserrat'] px-[24px] py-2 bg-cyan-300 rounded-[5px] hover:bg-cyan-600 hover:text-white transition-all">
                                            Sign Up
                                        </button>
                                    </a>

                                </div>
                            </div>

                        @endguest

                    </div>
                </nav>

                {{-- Hero section --}}
                <section class="flex flex-wrap gap-6 mb-8 justify-start">
                    @foreach ($hotOffers as $hotOffer)
                        <div class="flex-shrink-0 w-[400px] rounded-[30px] overflow-hidden shadow-md">
                            <!-- Card 1 -->
                            <div class="card-section mb-6">
                                <div class="swiper-container swiper-card-{{ $loop->index }}-1">
                                    <div class="swiper-wrapper">
                                        @foreach ($hotOffer->apps->where('pivot.card', 1)->take(3) as $app)
                                          
                                        <div class="swiper-slide">
                                                <div class="app-card border rounded-lg p-4 shadow-md mb-4">
                                                    <h5 class="text-md font-semibold mb-2 text-center">{{ $app->app_name }}</h5>
                                                    @php
                                                        $images = is_string($app->app_images) ? json_decode($app->app_images, true) : $app->app_images;
                                                    @endphp
                                                   <a href="{{route('app.view', $app->id)}}">
                                                    <img 
                                                            src="{{ asset('storage/' . ($images[0] ?? 'default-image.jpg')) }}" 
                                                            onerror="this.onerror=null;this.src='{{ asset('images/default-image.jpg') }}';"
                                                            alt="{{ $app->app_name }}" 
                                                            class="min-w-[341px] h-48 object-cover rounded-[30px] mb-4">
                                                    <a href="{{route('app.view', $app->id)}}">
                                                </div>
                                            </div>
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                
                            <!-- Card 2 -->
                            <div class="card-section mb-6">
                                <div class="swiper-container swiper-card-{{ $loop->index }}-2">
                                    <div class="swiper-wrapper">
                                        @foreach ($hotOffer->apps->where('pivot.card', 2)->take(3) as $app)
                                            <div class="swiper-slide">
                                                <div class="app-card border rounded-lg p-4 shadow-md mb-4">
                                                    <h5 class="text-md font-semibold mb-2 text-center">{{ $app->app_name }}</h5>
                                                    @php
                                                        $images = is_string($app->app_images) ? json_decode($app->app_images, true) : $app->app_images;
                                                    @endphp
                                                    <a href="{{route('app.view', $app->id)}}">
                                                    <img 
                                                        src="{{ asset('storage/' . ($images[0] ?? 'default-image.jpg')) }}" 
                                                        onerror="this.onerror=null;this.src='{{ asset('images/default-image.jpg') }}';"
                                                        alt="{{ $app->app_name }}" 
                                                        class="w-full h-48 object-cover rounded-md mb-4">
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                
                            <!-- Card 3 -->
                            <div class="card-section mb-6">
                                <div class="swiper-container swiper-card-{{ $loop->index }}-3">
                                    <div class="swiper-wrapper">
                                        @foreach ($hotOffer->apps->where('pivot.card', 3)->take(3) as $app)
                                            <div class="swiper-slide">
                                                <div class="app-card border rounded-lg p-4 shadow-md mb-4">
                                                    <h5 class="text-md font-semibold mb-2 text-center">{{ $app->app_name }}</h5>
                                                    @php
                                                        $images = is_string($app->app_images) ? json_decode($app->app_images, true) : $app->app_images;
                                                    @endphp
                                                    <a href="{{route('app.view', $app->id)}}">
                                                    <img 
                                                        src="{{ asset('storage/' . ($images[0] ?? 'default-image.jpg')) }}" 
                                                        onerror="this.onerror=null;this.src='{{ asset('images/default-image.jpg') }}';"
                                                        alt="{{ $app->app_name }}" 
                                                        class="w-full h-48 object-cover rounded-md mb-4">
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>


                {{-- CODE WRITTEN BY HUNNY --}}
                
                {{-- <section class="mb-8">
                        <div class=" flex overflow-hidden shadow-md gap-5 px-5">
                            <!-- Card 1 -->
                            <div class="card-section rounded-[30px] mb-6">
                                <div class="swiper-wrapper">
                                          
                                    <div class="swiper-slide">
                                        <img 
                                            src="https://cdn1.epicgames.com/offer/3ddd6a590da64e3686042d108968a6b2/EGS_GodofWar_SantaMonicaStudio_S1_2560x1440-5d74d9b240bba8f2c40920dcde7c5c67_2560x1440-5d74d9b240bba8f2c40920dcde7c5c67"
                                            class="min-w-[341px] h-48 object-cover rounded-[30px] mb-4">
                                    </div>
                                </div>
                            </div>
                
                            <!-- Card 2 -->
                            <div class="card-section mb-6 rounded-[30px]">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img 
                                            src="https://cdn1.epicgames.com/offer/3ddd6a590da64e3686042d108968a6b2/EGS_GodofWar_SantaMonicaStudio_S1_2560x1440-5d74d9b240bba8f2c40920dcde7c5c67_2560x1440-5d74d9b240bba8f2c40920dcde7c5c67"
                                            class="h-48 object-cover min-w-[341px] rounded-[30px] mb-4">
                                    </div>
                                </div>
                            </div>
                
                            <!-- Card 3 -->
                            <div class="card-section mb-6 rounded-[30px]">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                                    <img 
                                                    src="https://cdn1.epicgames.com/offer/3ddd6a590da64e3686042d108968a6b2/EGS_GodofWar_SantaMonicaStudio_S1_2560x1440-5d74d9b240bba8f2c40920dcde7c5c67_2560x1440-5d74d9b240bba8f2c40920dcde7c5c67"
                                                        class=" h-48 object-cover min-w-[341px]  rounded-[30px]  mb-4">
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section> --}}
                
                  

                  <script>
                  document.addEventListener('DOMContentLoaded', function () {
                    // Initialize all swiper containers
                    const swipers = document.querySelectorAll('.swiper-container');
                  
                    swipers.forEach((swiperEl, index) => {
                      new Swiper(swiperEl, {
                        loop: true,  // Infinite looping of slides
                        autoplay: {
                          delay: 5000,  // Auto-slide every 5 seconds
                          disableOnInteraction: false,  // Keep autoplay running even after user interaction
                        },
                        navigation: false,  // Hide next/prev buttons
                        pagination: false,  // Optional: Hide pagination if you don't want it
                      });
                    });
                  });
                  </script>
                  
                  
                
                
                

                <!-- Offer Categories -->
                <section class="mb-6 flex justify-between overflow-x-auto py-4 space-x-4 px-6">
                    <div
                        class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                        <img class="w-[27px] h-[27px]" src="./assets/icons/star.png" alt="">
                        <div class="flex flex-col ">
                            <span class="text-white  text-sm font-bold font-['Montserrat']">Rewards Pool</span>
                            <p class=" text-white dark:text-neutral-500 text-[8px]">Participate in Reward Pool</p>
                        </div>
                    </div>
                    <div
                        class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                        <img src="./assets/icons/campfire.png" alt="" class="w-[27px] h-[27px]">
                        <div class="flex flex-col ">
                            <span class="text-white  text-sm font-bold font-['Montserrat']">Hot Offers</span>
                            <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in Reward
                                Pool</p>
                        </div>
                    </div>
                    <div
                        class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                        <img src="./assets/icons/trophy.png" alt="" class="w-[27px] h-[27px]">
                        <div class="flex flex-col ">
                            <span class="text-white  text-sm font-bold font-['Montserrat']">Campaigns</span>
                            <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in Reward
                                Pool</p>
                        </div>
                    </div>


                    <div
                        class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                        <img src="./assets/icons/ticket.png" alt="" class="w-[27px] h-[27px]">
                        <div class="flex flex-col ">
                            <span class="text-white  text-sm font-bold font-['Montserrat']">Raffles</span>
                            <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in Reward
                                Pool</p>
                        </div>
                    </div>
                    <div
                        class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                        <img src="./assets/icons/question-mark.png" alt="" class="w-[27px] h-[27px]">
                        <div class="flex flex-col ">
                            <span class="text-white  text-sm font-bold font-['Montserrat']">Predictions</span>
                            <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in Reward
                                Pool</p>
                        </div>
                    </div>
                    <div
                        class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 py-2  whitespace-nowrap">
                        <img src="./assets/icons/star.png" alt="" class="w-[27px] h-[27px]">
                        <div class="flex flex-col ">
                            <span class="text-white  text-sm font-bold font-['Montserrat']">Top Offers</span>
                            <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in Reward
                                Pool</p>
                        </div>
                    </div>
                </section>

                <!-- Hot Offers Section -->
                <section class="mb-8 px-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Hot Offers</h2>
                        <a href="#" class="text-cyan-300 text-base font-bold font-['Montserrat']">See All >></a>
                    </div>
                    <div class="container">
                        <div class="app-grid">
                            <!-- Aave Card -->
                            <div class="app-card aave-card">
                                <div class="logo-container aave-bg">
                                    <img src="./assets/images/aavi.png" alt="Aave" class="">
                                </div>
                                <div class="card-content">
                                    <h2 class="card-title">Aave</h2>
                                    <div class="card-subtitle">DEFI · WALLET</div>
                                    <p class="card-description"></p>
                                    <div class="ratings-container">
                                        <div class="star-rating">
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span style="color: #64748b;">★</span>
                                        </div>
                                        <span class="ratings-text"> <strong>4.8 Ratings</strong> | 369 Reviews</span>
                                    </div>
                                    <div class="badges-container">
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/verified.svg"
                                                    alt=""></span>
                                            <span>Verified App</span>
                                        </div>
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/trusted.svg"
                                                    alt=""></span>
                                            <span>Trusted App</span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="explore-btn">Explore</button>
                                        <div class="types-container">
                                            <div class="info-tags">
                                                <div class="info-tag">
                                                    <span class="info-tag-label">APP TYPE</span>
                                                    <span class="info-tag-value">Free</span>
                                                </div>
                                                <div class="info-tag">
                                                    <span class="info-tag-label">OS TYPE</span>
                                                    <span class="info-tag-value">Web</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidus Heroes Card -->

                            @foreach ($apps as $app)
                                <div class="card">
                                    <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                    </div>

                                    <div class="app-icon">
                                        <img src="{{ $app->app_icon ? asset('storage/' . $app->app_icon) : asset('images/default-icon.png') }}"
                                            alt="">
                                    </div>

                                    <div class="content">
                                        <div>
                                            <h1 class="app-title">{{ $app->app_name }}</h1>
                                            <div class="app-category">
                                                {{ $app->app_category }} <span class="category-separator">•</span>
                                                WALLET
                                            </div>
                                            <p class="app-description">{{ $app->seo_title }}</p>
                                            {{-- Open-source non-custodial liquidity protocol. --}}
                                            <div class="rating-container">

                                                <div class="stars">

                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= floor($app->average_rating ?? 0))
                                                            <i class="fas fa-star text-warning"></i>
                                                            <!-- Filled Star -->
                                                        @elseif ($i == ceil($app->average_rating ?? 0) && $app->average_rating % 1 >= 0.5)
                                                            <i class="fas fa-star-half-alt text-warning"></i>
                                                            <!-- Half Star -->
                                                        @else
                                                            <i class="fas fa-star text-secondary"></i>
                                                            <!-- Empty Star -->
                                                        @endif
                                                    @endfor
                                                </div>


                                                <strong class="fs-4">
                                                    {{ number_format($app->average_rating ?? 0, 1) }} </strong>
                                                <span class="reviews"> | {{ optional($app->reviews)->count() ?? 0 }}
                                                    Reviews</span>
                                            </div>

                                            <div class="badges">
                                                <div class="badge">
                                                    <img src="{{ asset('assets/icons/verified.svg') }}"
                                                        alt="Verified">
                                                    Verified App
                                                </div>
                                                <div class="badge">
                                                    <img src="./assets/icons/trusted.svg" alt="">
                                                    Trusted App
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bottom-row">
                                            <button class="explore-btn">Explore</button>
                                            <div class="info-tags">
                                                <div class="info-tag">
                                                    <span class="info-tag-label">APP TYPE</span>
                                                    <span class="info-tag-value">Free</span>
                                                </div>
                                                <div class="info-tag">
                                                    <span class="info-tag-label">OS TYPE</span>
                                                    <span class="info-tag-value">Web</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>
                <section class="mb-8 px-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Hot Picks</h2>
                        <a href="#" class="text-cyan-300 text-base font-bold font-['Montserrat']">See All >></a>
                    </div>
                    <div class="container">
                        <div class="app-grid">
                            @foreach ($hotPicks as $index => $app)
                                @if ($index == 0)
                                    <!-- Special Layout for First App -->
                                    <div class="app-card aave-card col_end">
                                        <div class="logo-container aave-bg">
                                            <img src="{{ $app->app_icon ? asset('storage/' . $app->app_icon) : asset('images/default-icon.png') }}"
                                                alt="{{ $app->app_name }}" class="">
                                        </div>
                                        <div class="card-content">
                                            <h2 class="card-title">{{ $app->app_name }}</h2>
                                            <div class="card-subtitle">{{ $app->app_category }} · WALLET</div>
                                            <p class="card-description">{{ $app->seo_title }}</p>

                                            <div class="ratings-container">
                                                <div class="star-rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= floor($app->average_rating ?? 0))
                                                            <span>★</span>
                                                        @elseif ($i == ceil($app->average_rating ?? 0) && $app->average_rating % 1 >= 0.5)
                                                            <span>★</span>
                                                        @else
                                                            <span style="color: #64748b;">★</span>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span class="ratings-text">
                                                    <strong>{{ number_format($app->average_rating ?? 0, 1) }}
                                                        Ratings</strong> | {{ optional($app->reviews)->count() ?? 0 }}
                                                    Reviews</span>
                                            </div>

                                            <div class="badges-container">
                                                <div class="badge">
                                                    <span class="badge-icon"><img
                                                            src="{{ asset('assets/icons/verified.svg') }}"
                                                            alt=""></span>
                                                    <span>Verified App</span>
                                                </div>
                                                <div class="badge">
                                                    <span class="badge-icon"><img
                                                            src="{{ asset('assets/icons/trusted.svg') }}"
                                                            alt=""></span>
                                                    <span>Trusted App</span>
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <a href="{{ route('app.view', $app->id) }}"><button
                                                        class="explore-btn">Explore</button></a>
                                                <div class="types-container">
                                                    <div class="info-tags">
                                                        <div class="info-tag">
                                                            <span class="info-tag-label">APP TYPE</span>
                                                            <span class="info-tag-value">Free</span>
                                                        </div>
                                                        <div class="info-tag">
                                                            <span class="info-tag-label">OS TYPE</span>
                                                            <span class="info-tag-value">Web</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <!-- Normal Layout for Other Apps -->
                                    <div class="card">
                                        @if ($app->has_promotion)
                                            <div class="hot-offer">
                                                <img src="{{ asset('assets/images/offer-badge.png') }}"
                                                    alt="Special Offer">
                                            </div>
                                        @endif

                                        <div class="app-icon">
                                            <img src="{{ $app->app_icon ? asset('storage/' . $app->app_icon) : asset('images/default-icon.png') }}"
                                                alt="{{ $app->app_name }}" loading="lazy">
                                        </div>

                                        <div class="content">
                                            <div class="content-top">
                                                <h2 class="app-title">{{ $app->app_name }}</h2>
                                                <div class="app-category">
                                                    {{ $app->app_category }}<span class="category-separator"> •
                                                    </span>{{ $app->app_type ?? 'WALLET' }}
                                                </div>
                                                <p class="app-description">{{ Str::limit($app->seo_title, 80) }}</p>

                                                <div class="rating-container">
                                                    <div class="stars"
                                                        aria-label="Rating: {{ number_format($app->average_rating, 1) }} out of 5">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($app->average_rating ?? 0))
                                                                <span class="star filled">★</span>
                                                            @elseif ($i == ceil($app->average_rating ?? 0) && fmod($app->average_rating, 1) >= 0.5)
                                                                <span class="star half-filled">★</span>
                                                            @else
                                                                <span class="star">★</span>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                    <div class="rating-details">
                                                        <span
                                                            class="rating-value">{{ number_format($app->average_rating ?? 0, 1) }}</span>
                                                        <span
                                                            class="reviews">({{ optional($app->reviews)->count() ?? 0 }})</span>
                                                    </div>
                                                </div>

                                                <div class="badges">
                                                    @if ($app->is_verified)
                                                        <div class="badge verified">
                                                            <img src="{{ asset('assets/icons/verified.svg') }}"
                                                                alt="" aria-hidden="true">
                                                            <span>Verified</span>
                                                        </div>
                                                    @endif
                                                    @if ($app->is_trusted)
                                                        <div class="badge trusted">
                                                            <img src="{{ asset('assets/icons/trusted.svg') }}"
                                                                alt="" aria-hidden="true">
                                                            <span>Trusted</span>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <a href="{{ route('app.view', $app->id) }}" class="explore-btn">
                                                    Explore
                                                </a>

                                                <div class="app-meta">
                                                    <div class="meta-item">
                                                        <span class="meta-label">Type</span>
                                                        <span
                                                            class="meta-value">{{ $app->is_premium ? 'Premium' : 'Free' }}</span>
                                                    </div>
                                                    <div class="meta-item">
                                                        <span class="meta-label">Platform</span>
                                                        <span class="meta-value">{{ $app->platform ?? 'Web' }}</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </section>



                {{-- Hot games --}}


                <section class="mb-8 px-6">
                    <h2 class="text-2xl mb-5 font-bold">Top Games</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:pt-4 gap-4">
                        @foreach ($topGames as $game)
                            <a href="{{ $game->url }}" target="_blank" class="block">
                                <div class="hero-card overflow-hidden h-48 rounded-[30px] md:h-64 relative">
                                    <img src="{{ Storage::url($game->image) }}" alt="{{ $game->title }}"
                                        class="w-full h-full object-cover">
                                    <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80">
                                        <h3 class="text-white font-bold text-xl">{{ $game->title }}</h3>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </section>





                <!-- top games  -->
                {{-- <section class="mb-8 px-6">
                    <h2 class="text-2xl mb-5 font-bold">Top Games</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 lg:pt-4 gap-4 ">
                        <div class="hero-card overflow-hidden h-48 rounded-[30px] md:h-64">
                            <img src="./assets/images/drow-shop.png" alt="Red Dead Redemption"
                                class="w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80">
                                <h3 class="text-white font-bold text-xl">DRAWSHOP</h3>
                                <p class="text-gray-300">Open World Adventure</p>
                            </div> 
                        </div>
                        <div class="hero-card overflow-hidden rounded-[30px]  h-48 md:h-64">
                            <img src="./assets/images/rebel_bots_game.png" alt="God of War"
                                class="w-full h-full object-cover">
                            <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80">
                                <h3 class="text-white font-bold text-xl">REBELBOTS</h3>
                                <p class="text-gray-300">Epic Mythology</p>
                            </div> 
                        </div>
                        <div class="hero-card overflow-hidden rounded-[30px] h-48 md:h-64">
                            <img src="./assets/images/estfor_play.png" alt="Watch Dogs"
                                class="w-full h-full object-cover">
                             <div class="absolute bottom-0 left-0 right-0 p-4 bg-gradient-to-t from-black/80">
                                <h3 class="text-white font-bold text-xl">ESTFOR</h3>
                                <p class="text-gray-300">Cyberpunk Action</p>
                            </div> 
                        </div>
                    </div>
                </section>  --}}


                <section class="mb-8 px-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Top Utilities</h2>
                        <a href="#" class="text-cyan-300 text-base font-bold font-['Montserrat']">See All >></a>
                    </div>

                    <div class="container">
                        <div class="app-grid">

                            @foreach ($topUtilities as $index => $app)
                                @if ($index == 0)
                                    <!-- Special Layout for First App -->
                                    <div class="app-card aave-card">
                                        <div class="logo-container aave-bg">
                                            <img src="{{ $app->app_icon ? asset('storage/' . $app->app_icon) : asset('images/default-icon.png') }}"
                                                alt="{{ $app->app_name }}">
                                        </div>
                                        <div class="card-content">
                                            <h2 class="card-title">{{ $app->app_name }}</h2>
                                            <div class="card-subtitle">{{ $app->app_category }} · WALLET</div>
                                            <p class="card-description">{{ $app->seo_title }}</p>

                                            <div class="ratings-container">
                                                <div class="star-rating">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= floor($app->average_rating ?? 0))
                                                            <span>★</span>
                                                        @elseif ($i == ceil($app->average_rating ?? 0) && $app->average_rating % 1 >= 0.5)
                                                            <span>★</span>
                                                            <!-- Half star can be styled separately if needed -->
                                                        @else
                                                            <span style="color: #64748b;">★</span>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <span class="ratings-text">
                                                    <strong>{{ number_format($app->average_rating ?? 0, 1) }}
                                                        Ratings</strong> | {{ optional($app->reviews)->count() ?? 0 }}
                                                    Reviews
                                                </span>
                                            </div>

                                            <div class="badges-container">
                                                <div class="badge">
                                                    <span class="badge-icon"><img
                                                            src="{{ asset('assets/icons/verified.svg') }}"
                                                            alt=""></span>
                                                    <span>Verified App</span>
                                                </div>
                                                <div class="badge">
                                                    <span class="badge-icon"><img
                                                            src="{{ asset('assets/icons/trusted.svg') }}"
                                                            alt=""></span>
                                                    <span>Trusted App</span>
                                                </div>
                                            </div>

                                            <div class="card-footer">
                                                <a href="{{ route('app.view', $app->id) }}"><button
                                                        class="explore-btn">Explore</button></a>
                                                <div class="types-container">
                                                    <div class="info-tags">
                                                        <div class="info-tag">
                                                            <span class="info-tag-label">APP TYPE</span>
                                                            <span class="info-tag-value">Free</span>
                                                        </div>
                                                        <div class="info-tag">
                                                            <span class="info-tag-label">OS TYPE</span>
                                                            <span class="info-tag-value">Web</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <!-- Normal Layout for Other Apps -->
                                    <div class="card">
                                        <div class="hot-offer">
                                            <img src="./assets/images/offer-badge.png" alt="">
                                        </div>

                                        <div class="app-icon">
                                            <img src="{{ $app->app_icon ? asset('storage/' . $app->app_icon) : asset('images/default-icon.png') }}"
                                                alt="{{ $app->app_name }}">
                                        </div>

                                        <div class="content">
                                            <div>
                                                <h1 class="app-title">{{ $app->app_name }}</h1>
                                                <div class="app-category">
                                                    {{ $app->app_category }} <span class="category-separator">•</span>
                                                    WALLET
                                                </div>
                                                <p class="app-description">{{ $app->seo_title }}</p>

                                                <div class="rating-container">
                                                    <div class="stars">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= floor($app->average_rating ?? 0))
                                                                <i class="fas fa-star text-warning"></i>
                                                            @elseif ($i == ceil($app->average_rating ?? 0) && $app->average_rating % 1 >= 0.5)
                                                                <i class="fas fa-star-half-alt text-warning"></i>
                                                            @else
                                                                <i class="fas fa-star text-secondary"></i>
                                                            @endif
                                                        @endfor
                                                    </div>

                                                    <strong>{{ number_format($app->average_rating ?? 0, 1) }}</strong>
                                                    <span class="reviews">|
                                                        {{ optional($app->reviews)->count() ?? 0 }} Reviews</span>
                                                </div>

                                                <div class="badges">
                                                    <div class="badge">
                                                        <img src="{{ asset('assets/icons/verified.svg') }}"
                                                            alt="Verified">
                                                        Verified App
                                                    </div>
                                                    <div class="badge">
                                                        <img src="./assets/icons/trusted.svg" alt="">
                                                        Trusted App
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="bottom-row">
                                                <a href="{{ route('app.view', $app->id) }}"><button
                                                        class="explore-btn">Explore</button></a>
                                                <div class="info-tags">
                                                    <div class="info-tag">
                                                        <span class="info-tag-label">APP TYPE</span>
                                                        <span class="info-tag-value">Free</span>
                                                    </div>
                                                    <div class="info-tag">
                                                        <span class="info-tag-label">OS TYPE</span>
                                                        <span class="info-tag-value">Web</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </section>

                {{-- <!-- top utility aap  -->
                <section class="mb-8 px-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Top Utilities Apps</h2>
                        <a href="#" class="text-cyan-300 text-base font-bold font-['Montserrat']">See All >></a>
                    </div>
                    <div class="container">
                        <div class="app-grid">
                            <!-- Saros-->
                            <div class="app-card aave-card saros">
                                <div class="logo-container aave-bg">
                                    <img src="./assets/images/utility.png" alt="Aave" class="">
                                </div>
                                <div class="card-content">
                                    <h2 class="card-title text-white dark:text-white">Saros</h2>
                                    <div class="card-subtitle">DEFI · WALLET</div>
                                    <p class="card-description">Open-source non-custodial liquidity protocol.</p>
                                    <div class="ratings-container">
                                        <div class="star-rating">
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span style="color: #64748b;">★</span>
                                        </div>
                                        <span class="ratings-text"> <strong>4.8 Ratings</strong> | 369 Reviews</span>
                                    </div>
                                    <div class="badges-container">
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/verified.svg"
                                                    alt=""></span>
                                            <span>Verified App</span>
                                        </div>
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/trusted.svg"
                                                    alt=""></span>
                                            <span>Trusted App</span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="explore-btn">Explore</button>
                                        <div class="types-container">
                                            <div class="info-tags">
                                                <div class="info-tag">
                                                    <span class="info-tag-label">APP TYPE</span>
                                                    <span class="info-tag-value">Free</span>
                                                </div>
                                                <div class="info-tag">
                                                    <span class="info-tag-label">OS TYPE</span>
                                                    <span class="info-tag-value">Web</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Farm clicker -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/Farm-Clicker.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Farm Clicker</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 1 inch -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/one-inch.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">1 Inch</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">3.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Aqua Protocol Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/aqua-protocol.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Aqua Protocol</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- helno Card -->
                            <div class="card row_first">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/helno.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Henlo</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
 --}}

                <!-- ---Talk of the Town ---  -->
                <section class="mb-8 px-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Hot Offers</h2>
                        <a href="#" class="text-cyan-300 text-base font-bold font-['Montserrat']">See All >></a>
                    </div>
                    <div class="container">
                        <div class="app-grid">
                            <!-- Aave Card -->
                            <div class="app-card aave-card">
                                <div class="logo-container aave-bg">
                                    <img src="./assets/images/one-inch-2.png" alt="Aave" class="">
                                </div>
                                <div class="card-content">
                                    <h2 class="card-title">1Inch</h2>
                                    <div class="card-subtitle">DEFI · WALLET</div>
                                    <p class="card-description">Open-source non-custodial liquidity protocol.</p>
                                    <div class="ratings-container">
                                        <div class="star-rating">
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span style="color: #64748b;">★</span>
                                        </div>
                                        <span class="ratings-text"> <strong>4.8 Ratings</strong> | 369 Reviews</span>
                                    </div>
                                    <div class="badges-container">
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/verified.svg"
                                                    alt=""></span>
                                            <span>Verified App</span>
                                        </div>
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/trusted.svg"
                                                    alt=""></span>
                                            <span>Trusted App</span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="explore-btn">Explore</button>
                                        <div class="types-container">
                                            <div class="info-tags">
                                                <div class="info-tag">
                                                    <span class="info-tag-label">APP TYPE</span>
                                                    <span class="info-tag-value">Free</span>
                                                </div>
                                                <div class="info-tag">
                                                    <span class="info-tag-label">OS TYPE</span>
                                                    <span class="info-tag-value">Web</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidus Heroes Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/sidus-game.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Sidus Heroes</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PancakeSwap Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/pancake.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">PancakeSwap</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">3.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Aqua Protocol Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/aqua-protocol.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Aqua Protocol</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Houndrace Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/hound-race.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Houndrace</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- Top Games 2  -->
                <section class="mb-8 px-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Hot Picks</h2>
                        <a href="#" class="text-cyan-300 text-base font-bold font-['Montserrat']">See All
                            >></a>
                    </div>
                    <div class="container">
                        <div class="app-grid">
                            <!-- Saros-->
                            <div class="app-card aave-card col_end">
                                <div class="logo-container aave-bg">
                                    <img src="./assets/images/sidus-heroes.png" alt="Aave" class="">
                                </div>
                                <div class="card-content">
                                    <h2 class="card-title">Sidus Heroes</h2>
                                    <div class="card-subtitle">DEFI · WALLET</div>
                                    <p class="card-description">Open-source non-custodial liquidity protocol.</p>
                                    <div class="ratings-container">
                                        <div class="star-rating">
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span style="color: #64748b;">★</span>
                                        </div>
                                        <span class="ratings-text"> <strong>4.8 Ratings</strong> | 369 Reviews</span>
                                    </div>
                                    <div class="badges-container">
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/verified.svg"
                                                    alt=""></span>
                                            <span>Verified App</span>
                                        </div>
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/trusted.svg"
                                                    alt=""></span>
                                            <span>Trusted App</span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="explore-btn">Explore</button>
                                        <div class="types-container">
                                            <div class="info-tags">
                                                <div class="info-tag">
                                                    <span class="info-tag-label">APP TYPE</span>
                                                    <span class="info-tag-value">Free</span>
                                                </div>
                                                <div class="info-tag">
                                                    <span class="info-tag-label">OS TYPE</span>
                                                    <span class="info-tag-value">Web</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Sidus Heroes Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/Farm-Clicker.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Farm Clicker</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- one inch Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/one-inch.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">1 Inch</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">3.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Aqua Protocol Card -->
                            <div class="card row_first">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/ghost-aave.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Aqua Protocol</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- helno Card -->
                            <div class="card row_first">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/sidus-game.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Henlo</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



                <!-- start your search  -->
                <div class="px-6 mb-8 search_form">
                    <h2 class="text-2xl mb-5 font-bold">Start Your Search</h2>
                    <form id="searchForm" class="search-form">
                        <!-- <h1>App & Game Search</h1> -->
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="appName">App & Game Name</label>
                                <input type="text" id="appName" class="form-control"
                                    placeholder="Search apps and games">
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select id="category" class="form-control">
                                    <option value="">Select Category</option>
                                    <option value="games">Games</option>
                                    <option value="productivity">Productivity</option>
                                    <option value="education">Education</option>
                                    <option value="social">Social</option>
                                    <option value="entertainment">Entertainment</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subCategory">Sub Category</label>
                                <select id="subCategory" class="form-control" disabled>
                                    <option value="">Select Sub Category</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="rating">Rating</label>
                                <select id="rating" class="form-control">
                                    <option value="">Select Rating</option>
                                    <option value="5">5 Stars</option>
                                    <option value="4">4+ Stars</option>
                                    <option value="3">3+ Stars</option>
                                    <option value="2">2+ Stars</option>
                                    <option value="1">1+ Stars</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="users">No of Users</label>
                                <select id="users" class="form-control">
                                    <option value="">Select number of users</option>
                                    <option value="1m">1M+</option>
                                    <option value="500k">500K+</option>
                                    <option value="100k">100K+</option>
                                    <option value="10k">10K+</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <input type="text" id="subject" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <button type="submit">Search</button>
                    </form>

                    <div id="results" class="results">
                        <h2>Search Results</h2>
                        <div id="resultsList" class="results-list"></div>
                    </div>
                </div>


                <!-- ----categories ---  -->

                <div class=" mb-8 px-6 ">
                    <h2 class="text-2xl mb-5 font-bold">Start Your Search</h2>
                    <section class="mb-6 flex justify-between overflow-x-auto pt-2  space-x-4 ">

                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                            <img class="w-[27px] h-[27px]" src="./assets/icons/star.png" alt="">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Rewards Pool</span>
                                <p class=" text-white dark:text-neutral-500 text-[8px]">Participate in Reward Pool</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                            <img src="./assets/icons/campfire.png" alt="" class="w-[27px] h-[27px]">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Hot Offers</span>
                                <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in
                                    Reward Pool</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                            <img src="./assets/icons/trophy.png" alt="" class="w-[27px] h-[27px]">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Campaigns</span>
                                <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in
                                    Reward Pool</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                            <img src="./assets/icons/ticket.png" alt="" class="w-[27px] h-[27px]">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Raffles</span>
                                <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in
                                    Reward Pool</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                            <img src="./assets/icons/question-mark.png" alt="" class="w-[27px] h-[27px]">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Predictions</span>
                                <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in
                                    Reward Pool</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 py-2  whitespace-nowrap">
                            <img src="./assets/icons/star.png" alt="" class="w-[27px] h-[27px]">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Top Offers</span>
                                <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in
                                    Reward Pool</p>
                            </div>
                        </div>
                    </section>
                    <section class="mb-6 flex justify-between overflow-x-auto py-1 space-x-4 ">

                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                            <img class="w-[27px] h-[27px]" src="./assets/icons/star.png" alt="">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Rewards Pool</span>
                                <p class=" text-white dark:text-neutral-500 text-[8px]">Participate in Reward Pool</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                            <img src="./assets/icons/campfire.png" alt="" class="w-[27px] h-[27px]">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Hot Offers</span>
                                <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in
                                    Reward Pool</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                            <img src="./assets/icons/trophy.png" alt="" class="w-[27px] h-[27px]">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Campaigns</span>
                                <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in
                                    Reward Pool</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                            <img src="./assets/icons/ticket.png" alt="" class="w-[27px] h-[27px]">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Raffles</span>
                                <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in
                                    Reward Pool</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 min-w-[180px] py-2  whitespace-nowrap">
                            <img src="./assets/icons/question-mark.png" alt="" class="w-[27px] h-[27px]">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Predictions</span>
                                <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in
                                    Reward Pool</p>
                            </div>
                        </div>
                        <div
                            class="flex items-center space-x-2 dark:bg-gray-800 bg-gray-900 rounded-[5px]    px-4 py-2  whitespace-nowrap">
                            <img src="./assets/icons/star.png" alt="" class="w-[27px] h-[27px]">
                            <div class="flex flex-col ">
                                <span class="text-white  text-sm font-bold font-['Montserrat']">Top Offers</span>
                                <p class=" text-white dark:text-neutral-500 font-normal text-[8px]">Participate in
                                    Reward Pool</p>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- newly launched app  -->
                <section class="mb-8 px-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Hot Picks</h2>
                        <a href="#" class="text-cyan-300 text-base font-bold font-['Montserrat']">See All
                            &gt;&gt;</a>
                    </div>
                    <div class="container">
                        <div class="app-grid">
                            <!-- Saros-->
                            <div class="app-card aave-card banner col_end">
                                <div class="banner_card">
                                    <img src="./assets/images/cruma.png" alt="Aave" class="">
                                </div>
                                <!-- <div class="card-content">
                                    <h2 class="card-title">Saros</h2>
                                    <div class="card-subtitle">DEFI · WALLET</div>
                                    <p class="card-description">Open-source non-custodial liquidity protocol.</p>
                                    <div class="ratings-container">
                                        <div class="star-rating">
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span style="color: #64748b;">★</span>
                                        </div>
                                        <span class="ratings-text"> <strong>4.8 Ratings</strong> | 369 Reviews</span>
                                    </div>
                                    <div class="badges-container">
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/verified.svg" alt=""></span>
                                            <span>Verified App</span>
                                        </div>
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/trusted.svg" alt=""></span>
                                            <span>Trusted App</span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="explore-btn">Explore</button>
                                        <div class="types-container">
                                            <div class="info-tags">
                                                <div class="info-tag">
                                                  <span class="info-tag-label">APP TYPE</span>
                                                  <span class="info-tag-value">Free</span>
                                                </div>
                                                <div class="info-tag">
                                                  <span class="info-tag-label">OS TYPE</span>
                                                  <span class="info-tag-value">Web</span>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                            <!-- Sidus Heroes Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/Farm-Clicker.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Farm Clicker</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star" style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- one inch Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/one-inch.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">1 Inch</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star"
                                                    style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">3.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Aqua Protocol Card -->
                            <div class="card row_first">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/ghost-aave.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Aqua Protocol</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star"
                                                    style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- helno Card -->
                            <div class="card row_first">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/sidus-game.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Henlo</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star"
                                                    style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- ----- upcoming apps ----  -->
                <section class="mb-8 px-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Hot Offers</h2>
                        <a href="#" class="text-cyan-300 text-base font-bold font-['Montserrat']">See All
                            &gt;&gt;</a>
                    </div>
                    <div class="container">
                        <div class="app-grid">
                            <!-- Aave Card -->
                            <div class="app-card banner aave-card">
                                <div class="banner_card">
                                    <img src="./assets/images/pancake-swap.png" alt="Aave" class="">
                                </div>
                                <!-- <div class="card-content">
                                    <h2 class="card-title">Aave</h2>
                                    <div class="card-subtitle">DEFI · WALLET</div>
                                    <p class="card-description">Open-source non-custodial liquidity protocol.</p>
                                    <div class="ratings-container">
                                        <div class="star-rating">
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span>★</span>
                                            <span style="color: #64748b;">★</span>
                                        </div>
                                        <span class="ratings-text"> <strong>4.8 Ratings</strong> | 369 Reviews</span>
                                    </div>
                                    <div class="badges-container">
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/verified.svg" alt=""></span>
                                            <span>Verified App</span>
                                        </div>
                                        <div class="badge">
                                            <span class="badge-icon"><img src="./assets/icons/trusted.svg" alt=""></span>
                                            <span>Trusted App</span>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button class="explore-btn">Explore</button>
                                        <div class="types-container">
                                            <div class="info-tags">
                                                <div class="info-tag">
                                                  <span class="info-tag-label">APP TYPE</span>
                                                  <span class="info-tag-value">Free</span>
                                                </div>
                                                <div class="info-tag">
                                                  <span class="info-tag-label">OS TYPE</span>
                                                  <span class="info-tag-value">Web</span>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>

                            <!-- Sidus Heroes Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/sidus-game.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Sidus Heroes</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star"
                                                    style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- PancakeSwap Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/pancake.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">PancakeSwap</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star"
                                                    style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">3.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Aqua Protocol Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/aqua-protocol.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Aqua Protocol</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star"
                                                    style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Houndrace Card -->
                            <div class="card">
                                <div class="hot-offer"><img src="./assets/images/offer-badge.png" alt="">
                                </div>

                                <div class="app-icon">
                                    <img src="./assets/images/hound-race.png" alt="">
                                </div>

                                <div class="content">
                                    <div>
                                        <h1 class="app-title">Houndrace</h1>
                                        <div class="app-category">
                                            DEFI <span class="category-separator">•</span> WALLET
                                        </div>
                                        <p class="app-description">Open-source non-custodial liquidity protocol.</p>

                                        <div class="rating-container">
                                            <div class="stars">
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star">★</span>
                                                <span class="star"
                                                    style="color: rgba(255, 203, 69, 0.3);">★</span>
                                            </div>
                                            <span class="rating-text">4.8 Ratings</span>
                                            <span class="reviews">| 369 Reviews</span>
                                        </div>

                                        <div class="badges">
                                            <div class="badge">
                                                <img src="./assets/icons/verified.svg" alt="">
                                                Verified App
                                            </div>
                                            <div class="badge">
                                                <img src="./assets/icons/trusted.svg" alt="">
                                                Trusted App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="bottom-row">
                                        <button class="explore-btn">Explore</button>
                                        <div class="info-tags">
                                            <div class="info-tag">
                                                <span class="info-tag-label">APP TYPE</span>
                                                <span class="info-tag-value">Free</span>
                                            </div>
                                            <div class="info-tag">
                                                <span class="info-tag-label">OS TYPE</span>
                                                <span class="info-tag-value">Web</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- partners logos  -->
                <section class="partners_cards mb-8 px-6">
                    <h2 class="text-2xl mb-5 font-bold">Our Investors</h2>
                    <div class="logo-showcase">
                        <div class="logo-item">
                            <img src="./assets/logos/g-group.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/hyper-secure.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/lifelinkr.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/letshelpu.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/sra.png" alt="">
                        </div>
                    </div>
                </section>

                <!-- faq's partern  -->
                <div class="faq-container mb-8 px-6">
                    <h2 class="text-2xl mb-5 font-bold">Frequently Asked Questions</h2>
                    <div class="faq-item active">
                        <div class="faq-question">
                            What is Dextr Apps, and how does it work?
                            <div class="faq-icon">
                                <div class="faq-icon-plus"></div>
                                <div class="faq-icon-minus"></div>
                            </div>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Dextr Apps is a Web3-based app store featuring web-based apps and games that let users
                                earn rewards. Users can explore blockchain-powered apps, play games, and participate in
                                decentralized platforms, earning tokens, NFTs, or other digital assets while using them.
                                No downloads are needed—everything runs directly in the browser.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            How can I earn while using apps and games on Dextr Apps?
                            <div class="faq-icon">
                                <div class="faq-icon-plus"></div>
                                <div class="faq-icon-minus"></div>
                            </div>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                You can earn rewards in various ways on Dextr Apps. Many apps offer play-to-earn
                                mechanics where completing tasks, winning games, or simply spending time on the platform
                                rewards you with tokens or NFTs. Some apps may reward you for providing valuable
                                content, participating in governance, or contributing to the community. Each app has its
                                own reward system, but they all leverage blockchain technology to distribute digital
                                assets directly to your connected wallet.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            Are the apps and games on Dextr Apps safe and decentralized?
                            <div class="faq-icon">
                                <div class="faq-icon-plus"></div>
                                <div class="faq-icon-minus"></div>
                            </div>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Yes, Dextr Apps prioritizes safety and decentralization. All apps undergo security
                                reviews before being listed. The platform operates on blockchain technology, ensuring
                                transparency and censorship resistance. Your assets remain in your own wallet rather
                                than being held by a central authority. Smart contracts governing the apps are typically
                                open-source and audited. However, as with any Web3 platform, it's always recommended to
                                conduct your own research before connecting your wallet to any application.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            Do I need a crypto wallet to use Dextr Apps?
                            <div class="faq-icon">
                                <div class="faq-icon-plus"></div>
                                <div class="faq-icon-minus"></div>
                            </div>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Yes, you'll need a Web3 wallet like MetaMask, Trust Wallet, or Coinbase Wallet to fully
                                experience Dextr Apps. The wallet allows you to connect to the apps, sign transactions,
                                and store any earned rewards. Some apps might offer limited functionality for browsing
                                without a wallet, but to earn rewards and participate in most features, a compatible
                                wallet is necessary. If you're new to crypto wallets, Dextr Apps provides guides to help
                                you set one up securely.
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">
                            What types of apps and games can I find on Dextr Apps?
                            <div class="faq-icon">
                                <div class="faq-icon-plus"></div>
                                <div class="faq-icon-minus"></div>
                            </div>
                        </div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                Dextr Apps features a diverse range of applications including casual games, strategy
                                games, DeFi platforms, NFT marketplaces, social networks, content creation tools, and
                                utility apps. You'll find everything from simple puzzle games that reward players with
                                tokens to sophisticated decentralized exchanges. The catalog is constantly growing as
                                more developers bring their Web3 applications to the platform. All apps share the common
                                theme of rewarding users for their participation and engagement.
                            </div>
                        </div>
                    </div>
                </div>


                <!-- publication parterns  -->
                <section class="partners_cards mb-8 px-6">
                    <h2 class="text-2xl mb-5 font-bold">Publication Partner</h2>
                    <div class="logo-showcase">
                        <div class="logo-item">
                            <img src="./assets/logos/aisa-one.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/usa-wire.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/barchart.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/vents-magzine.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/yahoo.png" alt="">
                        </div>
                    </div>
                    <div class="logo-showcase">
                        <div class="logo-item">
                            <img src="./assets/logos/global-tech-times.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/united-kingdom-tn.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/fintech-reporter.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/msn.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/news-uk.png" alt="">
                        </div>
                    </div>
                </section>

                <!-- ==== news section =  -->
                <section class="px-6 mb-8">
                    <h2 class="text-2xl mb-5 font-bold">Our Investors</h2>
                    <div class="news-container ">

                        <!-- Card 1 -->
                        <div class="news-card">
                            <div class="news_imagage_div">
                                <img src="./assets/images/web3.png" alt="Dextr Apps" class="news-image">
                            </div>
                            <div class="news-content">
                                <h2 class="news-title">The Future of Web3: How Dextr Apps is Revolutionizing the
                                    Digital Economy</h2>
                                <p class="news-description">Discover how Dextr Apps is reshaping the way users
                                    interact with blockchain-based apps and games while earning rewards.</p>
                                <a href="#" class="news-read-more">Read More</a>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="news-card">
                            <div class="news_imagage_div">
                                <img src="./assets/images/web-games-news.png" alt="Web3 Games" class="news-image">
                            </div>
                            <div class="news-content">
                                <h2 class="news-title">Earn While You Play: Exploring the Best Web3 Games on Dextr
                                    Apps</h2>
                                <p class="news-description">A deep dive into the top play-to-earn games listed on
                                    Dextr Apps and how you can maximize your earnings.</p>
                                <a href="#" class="news-read-more">Read More</a>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="news-card">
                            <div class="news_imagage_div"> <img src="./assets/images/web-3-news.png"
                                    alt="Web3 Applications" class="news-image"></div>
                            <div class="news-content">
                                <h2 class="news-title">Why Web-Based dApps are the Future of Blockchain Technology
                                </h2>
                                <p class="news-description">Learn why browser-based Web3 applications offer a
                                    seamless, secure, and accessible experience for users worldwide.</p>
                                <a href="#" class="news-read-more">Read More</a>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- award recogination  -->
                <section class="partners_cards mb-8 px-6">
                    <h2 class="text-2xl mb-5 font-bold">Awards & Recogination
                    </h2>
                    <div class="logo-showcase">
                        <div class="logo-item">
                            <img src="./assets/logos/aisa-one.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/usa-wire.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/barchart.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/vents-magzine.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/yahoo.png" alt="">
                        </div>
                    </div>
                    <div class="logo-showcase">
                        <div class="logo-item">
                            <img src="./assets/logos/global-tech-times.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/united-kingdom-tn.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/fintech-reporter.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/msn.png" alt="">
                        </div>

                        <div class="logo-item">
                            <img src="./assets/logos/news-uk.png" alt="">
                        </div>
                    </div>
                </section>


                <!-- contact form section  -->
                <section id="contactFormus" class="mb-8 px-6">
                    <div class="contact-container">
                        <div class="contact-form-section">
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="contact-form-row">
                                    <div class="contact-form-group">
                                        <label class="contact-label">Full Name</label>
                                        <input type="text" name="full_name" class="contact-input"
                                            placeholder="Enter your full name" required>
                                    </div>
                                    <div class="contact-form-group">
                                        <label class="contact-label">Email</label>
                                        <input type="email" name="email" class="contact-input"
                                            placeholder="Enter your email address" required>
                                    </div>
                                </div>
                                <div class="contact-form-row">
                                    <div class="contact-form-group">
                                        <label class="contact-label">App Name</label>
                                        <input type="text" name="app_name" class="contact-input"
                                            placeholder="Enter your app name" required>
                                    </div>
                                    <div class="contact-form-group">
                                        <label class="contact-label">Phone</label>
                                        <input type="tel" name="phone" class="contact-input"
                                            placeholder="Enter your phone number">
                                    </div>
                                </div>
                                <div class="contact-form-group" style="margin-bottom: 20px;">
                                    <label class="contact-label">Message</label>
                                    <textarea name="message" class="contact-textarea" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="contact-button">Submit</button>
                            </form>
                        </div>
                    </div>
                </section>

                <div class="contact-promo-section relative">
                    <img src="./assets/images/contact-banner.png" alt="App Icons" class="contact-promo-image">
                    <div class="contact_content absolute bottom-[50px] px-1 z-[2]">
                        <h2 class="contact-promo-title">Grow & Dominate Web3 Market!</h2>
                        <p class="contact-promo-text">List your app, attract users, and maximize earnings with
                            Dextr Apps!</p>
                        <a href="#" class="contact-list-button">List Your App</a>
                    </div>
                </div>
        </div>
        </section>


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
                    play, and engage with blockchain-powered applications directly from your browser.
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

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        public function updateAppOrder(Request $request)
{
    // Assuming you have an array of app IDs with their new positions and the card
    $request->validate([
        'app_order' => 'required|array', // Array of app IDs with their new positions
    ]);

    foreach ($request->app_order as $appOrderData) {
        $appId = $appOrderData['app_id']; // The app ID
        $position = $appOrderData['position']; // The new position

        // Find the app in the pivot table for the card and update the position
        $hotOfferApp = HotOfferApp::where('app_id', $appId)
                                    ->where('card', $appOrderData['card'])
                                    ->first();
        if ($hotOfferApp) {
            $hotOfferApp->position = $position; // Update the position
            $hotOfferApp->save(); // Save the change
        }
    }

    return response()->json(['success' => true]);
}

    </script>
</body>

</html>
