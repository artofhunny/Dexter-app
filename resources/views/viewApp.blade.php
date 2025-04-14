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

    <link rel="stylesheet" href="{{ asset('css/appview.css') }}">

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
            {{-- <aside
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
            </aside> --}}

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
                                    <a class="nav-item active" href="{{ route('home') }}" data-index="1">Apps</a>
                                    <a class="nav-item" data-index="2">P2E</a>
                                    <a class="nav-item" href="#contact_form" data-index="3">Contact</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </nav>
                <!-- ---- new section --  -->


                <div class="app_details app_section">
                    <div class=" app_details_layout">
                        <div class="app_detail_logo">
                            <img src="{{ $appDetails->app_icon ? asset('storage/' . $appDetails->app_icon) : asset('default-image.jpg') }}"
                                alt="App Icon" class="product-image">
                        </div>
                        <div class="app-info">
                            <div>
                                <h1>{{ $appDetails->app_name }}</h1>
                                <div class="app-type">{{ $appDetails->app_category ?? 'No Category' }} • WALLET</div>
                                <div class="app-description">
                                    @if (!empty($appDetails->about_intro))
                                        <div class="app-description">
                                            {{ \Illuminate\Support\Str::limit($appDetails->about_intro, 60) }}</div>
                                    @endif
                                </div>
                                <div class="ratings">
                                    <div class="stars">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i
                                                class="fas fa-star {{ $i <= ($appDetails->average_rating ?? 0) ? 'text-warning' : 'text-secondary' }}"></i>
                                        @endfor
                                    </div>
                                    <div class="reviews"> <strong
                                            class="fs-4">{{ number_format($appDetails->average_rating ?? 0, 1) }}</strong>
                                        | <span class="text-muted">{{ $appDetails->total_reviews ?? 0 }}
                                            Reviews</span>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="app_btn_type">
                        <div class="app-meta">
                            <div class="meta-item">
                                <!-- <i class="icon">•</i> -->
                                App type <span> Free</span>
                            </div>
                            <div class="meta-item">
                                <!-- <i class="icon">•</i> -->
                                OS Type <span> Web</span>
                            </div>
                        </div>
                        <div class="badges-container">
                            @if (!empty($appDetails->is_verified))
                                <div class="badge">
                                    <span class="badge-icon">
                                        <img src="{{ asset('assets/icons/verified.svg') }}" alt="">

                                    </span>
                                    <span>Verified App</span>
                                </div>
                            @endif

                            <div class="badge">
                                <span class="badge-icon">
                                    <img src="{{ asset('assets/icons/verified.svg') }}" alt="">
                                </span>

                                <span>Trusted App</span>
                            </div>
                        </div>
                        <a href="{{ $appDetails->website_url }}">
                            <button class="explore-btn dark:bg-cyan-300 text-black">Explore</button>
                        </a>
                    </div>
                </div>
                <!-- ---sticicky column  -->
                <div class="container app_page">
                    <div class="left-column">
                        <div class="section">
                            <div #swiperRef="" class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    @php
                                        // If your app_images is JSON in DB, decode it first
                                        $images = is_string($appDetails->app_images)
                                            ? json_decode($appDetails->app_images, true)
                                            : $appDetails->app_images;
                                    @endphp

                                    @if (!empty($images) && is_array($images))
                                        @foreach ($images as $image)
                                            <div class="swiper-slide">
                                                <img src="{{ asset('storage/' . $image) }}" alt="App Image"
                                                    class="img-fluid">
                                            </div>
                                        @endforeach
                                    @else
                                        <div style="width: 400px !important;" class="swiper-slide">
                                            <img src="{{ asset('assets/images/default-image.png') }}"
                                                alt="Default Image" class="img-fluid">
                                        </div>
                                    @endif

                                </div>

                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                        <div class="section dark:bg-[#222C34] p-[10px] lg:p-[20px]">
                            <h2 class="section-title">About {{ $appDetails->app_name }}</h2>
                            <p class="about-text">
                                {{ $appDetails->about_intro }}
                            </p>
                        </div>

                        <div class="section offer_banner">
                            <h2 class="section-title">Offer & Promotion</h2>
                            <div class="payment-options">
                                <!-- <div class="payment-card">
                  <div class="payment-title">PAY WITH CARD</div>
                  <div class="payment-icon" style="background-color: #0066b2;">💳</div>
                  <button class="payment-button">DONE</button>
                </div>
                <div class="payment-card">
                  <div class="payment-title">PAY WITH TETHER</div>
                  <div class="payment-icon" style="background-color: #26a17b;">₮</div>
                  <button class="payment-button">DONE</button>
                </div>
                <div class="payment-card">
                  <div class="payment-title">PAY WITH SIDUS</div>
                  <div class="payment-icon" style="background-color: var(--primary-color);">S</div>
                  <button class="payment-button">DONE</button>
                </div>
                <div class="payment-card">
                  <div class="payment-title">PAY WITH MATIC</div>
                  <div class="payment-icon" style="background-color: #8247e5;">M</div>
                  <button class="payment-button">DONE</button>
                </div> -->
                            </div>
                        </div>

                        <!-- ====token chart section  -->
                        <div class="token_chart-container mb-[30px]">
                            <div class="token_chart-header">
                                <div>
                                    <div class="token_chart-title">{{ $appDetails->app_name }} Token Price Chart</div>
                                </div>
                            </div>

                            <div class="token_chart-canvas-container" style="height: 400px ; ">
                                <!-- Optional height -->
                                <canvas id="token_chart-canvas" class="token_chart-canvas"></canvas>
                            </div>

                            <div class="token_chart-legend">
                                <div class="token_chart-legend-item">
                                    <div class="token_chart-legend-color" style="background-color: #9b51e0;"></div>
                                    <span>Upper Band</span>
                                </div>
                                <div class="token_chart-legend-item">
                                    <div class="token_chart-legend-color" style="background-color: #f2994a;"></div>
                                    <span>Lower Band</span>
                                </div>
                            </div>
                        </div>


                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const ctx = document.getElementById('token_chart-canvas').getContext('2d');

                                const chartData = @json($chartData); // ← Laravel blade injects PHP array as JS object safely

                                if (chartData) {
                                    new Chart(ctx, {
                                        type: 'line',
                                        data: {
                                            labels: chartData.labels,
                                            datasets: [{
                                                    label: 'Upper Band',
                                                    data: chartData.upper_band,
                                                    borderColor: '#9b51e0',
                                                    backgroundColor: 'rgba(155, 81, 224, 0.2)',
                                                    fill: true,
                                                    tension: 0.4
                                                },
                                                {
                                                    label: 'Lower Band',
                                                    data: chartData.lower_band,
                                                    borderColor: '#f2994a',
                                                    backgroundColor: 'rgba(242, 153, 74, 0.2)',
                                                    fill: true,
                                                    tension: 0.4
                                                }
                                            ]
                                        },
                                        options: {
                                            responsive: true,
                                            maintainAspectRatio: false,
                                            scales: {
                                                y: {
                                                    beginAtZero: false
                                                }
                                            }
                                        }
                                    });
                                } else {
                                    // If no chart data, hide the entire chart container
                                    document.querySelector('.token_chart-container').style.display = 'none';
                                }
                            });
                        </script>
                        <!-- token stats section -->
                        <div class="token_stats-container">
                            <h1 class="token_stats-title">Token Statistics</h1>

                            <div class="token_stats-grid">
                                <!-- Market Cap -->
                                <div class="token_stats-item">
                                    <div class="token_stats-label">Market Cap</div>
                                    <div class="token_stats-value green">
                                        {{ isset($tokenStats['market_cap_usd']) ? '$' . number_format($tokenStats['market_cap_usd'], 2) : 'N/A' }}
                                    </div>
                                </div>

                                <!-- Volume -->
                                <div class="token_stats-item">
                                    <div class="token_stats-label">Volume</div>
                                    <div class="token_stats-value green">
                                        {{ isset($tokenStats['total_volume_usd']) ? '$' . number_format($tokenStats['total_volume_usd'], 2) : 'N/A' }}
                                    </div>
                                </div>

                                <!-- FDMC -->
                                <div class="token_stats-item">
                                    <div class="token_stats-label">FDMC</div>
                                    <div class="token_stats-value green">
                                        {{ isset($tokenStats['fully_diluted_valuation']) ? '$' . number_format($tokenStats['fully_diluted_valuation'], 0) : 'N/A' }}
                                    </div>
                                </div>

                                <!-- Circulating Supply -->
                                <div class="token_stats-item">
                                    <div class="token_stats-label">Circulating Supply</div>
                                    <div class="token_stats-value yellow">
                                        {{ isset($tokenStats['circulating_supply']) ? number_format($tokenStats['circulating_supply'], 3) : 'N/A' }}
                                    </div>
                                </div>

                                <!-- Max Supply -->
                                <div class="token_stats-item">
                                    <div class="token_stats-label">Max Supply</div>
                                    <div class="token_stats-value green">
                                        {{ isset($tokenStats['max_supply']) ? number_format($tokenStats['max_supply'], 0) : 'N/A' }}
                                    </div>
                                </div>

                                <!-- Publisher Info -->
                                <div class="token_stats-item">
                                    <div class="token_stats-label">Publisher Info</div>
                                    <div class="token_stats-value green">
                                        {{ $tokenStats['publisher'] ?? 'Unknown' }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ======tokens Availability section ===  -->
                        <div class="token_cards-container">
                            <div class="token_cards-card">
                                <h2 class="token_cards-title">Tokens/Coins that you can play with</h2>
                                <div class="token_cards-tokens">
                                    <div class="token_cards-token">
                                        <div class="token_cards-icon token_cards-bitcoin"><img
                                                src="./assets/icons/bitcoin-icon.png" alt="">
                                        </div>
                                        <div class="token_cards-name">Bitcoin</div>
                                    </div>
                                    <div class="token_cards-token">
                                        <div class="token_cards-icon token_cards-ethereum"><img
                                                src="./assets/icons/etherium-icon.png" alt=""></div>
                                        <div class="token_cards-name">Ethereum</div>
                                    </div>
                                    <div class="token_cards-token">
                                        <div class="token_cards-icon token_cards-tron"><img
                                                src="./assets/icons/tron.png" alt=""></div>
                                        <div class="token_cards-name">Tron</div>
                                    </div>
                                </div>
                            </div>
                            <div class="token_cards-card">
                                <h2 class="token_cards-title">Availability</h2>
                                <div class="token_cards-availability">
                                    <div class="token_cards-globe">
                                        <img src="./assets/icons/globe-icon.png" alt="">
                                    </div>
                                    <div class="token_cards-availability-text">Available Worldwide</div>
                                </div>
                            </div>
                        </div>

                        <!-- ==== Switch Tab Section ==== -->
                        @if (
                            !empty($appDetails->about_intro) ||
                                !empty($appDetails->about_overview) ||
                                !empty($appDetails->about_features) ||
                                !empty($appDetails->about_get_started))
                            <div class="tab_switch_section">
                                <div class="tab_bar-container">
                                    <div class="tab_bar-scroll-container">
                                        <div class="tab_bar-wrapper">
                                            <div class="tab_bar-background"></div>
                                            <div class="tab_bar-navigation">
                                                @if (!empty($appDetails->about_intro))
                                                    <a href="#introduction"
                                                        class="tab_bar-item active">Introduction</a>
                                                @endif
                                                @if (!empty($appDetails->about_overview))
                                                    <a href="#overview" class="tab_bar-item">Overview</a>
                                                @endif
                                                @if (!empty($appDetails->about_gameplay))
                                                    <a href="#gameplay" class="tab_bar-item">Gameplay</a>
                                                @endif
                                                @if (!empty($appDetails->about_get_started))
                                                    <a href="#get-started" class="tab_bar-item">Get Started</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Content Section -->
                                <div class="content-section">
                                    @if (!empty($appDetails->about_intro))
                                        <div id="introduction-content" class="tab_content active">
                                            <h1>Introduction</h1>
                                            <p>{{ $appDetails->about_intro }}</p>
                                        </div>
                                    @endif

                                    @if (!empty($appDetails->about_overview))
                                        <div id="overview-content" class="tab_content">
                                            <h1>Overview</h1>
                                            <p>{{ $appDetails->about_overview }}</p>
                                        </div>
                                    @endif

                                    @if (!empty($appDetails->about_gameplay))
                                        <div id="gameplay-content" class="tab_content">
                                            <h1>Gameplay</h1>
                                            <p>{{ $appDetails->about_gameplay }}</p>
                                        </div>
                                    @endif

                                    @if (!empty($appDetails->about_get_started))
                                        <div id="get-started-content" class="tab_content">
                                            <h1>Get Started</h1>
                                            <p>{{ $appDetails->about_get_started }}</p>
                                        </div>
                                    @endif

                                    @if (!empty($appDetails->about_founder))
                                        <div id="about-founder-content" class="tab_content">
                                            <h1>About Founder</h1>
                                            <p>{{ $appDetails->about_founder }}</p>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endif
                        <!-- ==== Switch Tab Section End ==== -->


                        <!-- ====== social container =========  -->
                        <div class="social_block">
                            <div class="social_text">
                                Follow {{ $appDetails->app_name }} with us on Social Media
                            </div>
                            <div class="social_icon">
                                <a href="{{ $appDetails->instagram_url }}"><img
                                        src="{{ asset('assets/icons/instagram.png') }}" alt="Instagram"></a>
                                <a href="{{ $appDetails->facebook_url }}"><img
                                        src="{{ asset('assets/icons/facebook.png') }}" alt="Facebook"></a>
                                <a href="{{ $appDetails->x_url }}"><img src={{ asset('assets/icons/twitter.png') }}
                                        alt="Twitter"></a>
                            </div>
                        </div>
                        <!-- ======= social container end ====  -->


                        <!-- rating section ====  -->
                        <div class="token_cards-container">
                            <div class="token_cards-container">
                                <div class="token_cards-card">
                                    <h2 class="token_cards-title">Ratings</h2>
                                    <div class="token_cards-tokens ratings">
                                        @foreach (range(5, 1) as $star)
                                            <div class="ratings_stats">
                                                <div class="token_cards_stars">
                                                    {!! str_repeat('★', $star) . str_repeat('☆', 5 - $star) !!}
                                                </div>
                                                <p>&#183;</p>
                                                <p>{{ str_pad($ratingsBreakdown[$star] ?? 0, 3, '0', STR_PAD_LEFT) }}
                                                    Ratings</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="token_cards-card">
                                <!-- <h2 class="token_cards-title">Availability</h2> -->
                                <div class="token_card_center">
                                    <div class="token_cards_game">

                                        <img src=" {{ asset('assets/icons/game-controller-icon.png') }}"
                                            alt="">
                                    </div>
                                    <div class="token_cards_text">5000+ Players</div>
                                </div>
                            </div>
                        </div>
                        <!-- rating section end====  -->

                        <!-- ====== testimonial carausel section ====  -->
                        <div class="testimonial_carousel_container">
                            <h1 class="testimonial_carousel_title">Reviews</h1>

                            <div class="testimonial_carousel_swiper swiper" id="testimonial_carousel_swiper">
                                <div class="swiper-wrapper">
                                    @forelse ($appDetails->reviews as $review)
                                        <div class="swiper-slide">
                                            <div class="testimonial_carousel_slide">
                                                {{-- Rating Stars --}}
                                                <div class="testimonial_carousel_stars">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        <span class="testimonial_carousel_star">
                                                            {{ $i <= $review->rating ? '★' : '☆' }}
                                                        </span>
                                                    @endfor
                                                </div>

                                                {{-- Date --}}
                                                <div class="testimonial_carousel_date">
                                                    {{ \Carbon\Carbon::parse($review->created_at)->format('d M Y') }}
                                                </div>

                                                {{-- User Name --}}
                                                <h2 class="testimonial_carousel_name">
                                                    {{ $review->user_name ?? 'Anonymous' }}</h2>

                                                {{-- Comment --}}
                                                <p class="testimonial_carousel_text">
                                                    {{ $review->comment }}
                                                </p>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="swiper-slide">
                                            <div class="testimonial_carousel_slide">
                                                <p>No reviews yet!</p>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>

                        <!-- ====== testimonial carausel section ====  -->






                        <!-- ===== awards section =====  -->
                        <section class="partners_cards awards lg:mb-[20px] ">
                            <h1>Awards & Recognition</h1>

                            <div class="logo-showcase awards">
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/aisa-one.png') }}" alt="">
                                </div>

                                <div class="logo-item">
                                    <img src=" {{ asset('assets/logos/usa-wire.png') }}" alt="">

                                </div>

                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/barchart.png') }}" alt="">
                                </div>


                            </div>
                            <div class="logo-showcase awards">
                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/global-tech-times.png') }}" alt="">
                                </div>

                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/united-kingdom-tn.png') }}" alt="">
                                </div>

                                <div class="logo-item">
                                    <img src="{{ asset('assets/logos/fintech-reporter.png') }}" alt="">
                                </div>


                            </div>
                        </section>
                        <!-- ===== awards section end =====  -->


                        <!-- ============ version update section =========  -->
                        <div class="version_update">
                            <h1 class="version_update_title">
                                What’s new in the version
                            </h1>

                            <ul class="update_list">
                                <li>Gameplay Bug Fixes</li>
                                <li>Crash Fixes</li>
                                <li>Audio Bug Fixes</li>
                                <li>Text Improvements </li>
                                <li>Animation Improvements</li>
                                <li>General bug fixes and improvements</li>
                            </ul>
                        </div>
                        <!-- ============ version update section end =========  -->


                        <!-- =============== additional information section ==========  -->
                        <div class="token_stats-container">
                            <h1 class="token_stats-title">Additional Information</h1>

                            <div class="token_stats-grid">
                                <!-- Market Cap -->
                                <div class="extra_info_wrapper">
                                    <div class="icon">
                                        <img src="./assets/icons/code-icon.svg" alt="">
                                    </div>
                                    <div class="token_stats-item">
                                        <div class="token_stats-label">Developed by</div>
                                        <div class="token_stats-value green">Sidus Studios</div>
                                    </div>
                                </div>

                                <!-- Volume -->
                                <div class="extra_info_wrapper">
                                    <div class="icon">
                                        <img src="./assets/icons/check_box.svg" alt="">
                                    </div>
                                    <div class="token_stats-item">
                                        <div class="token_stats-label">Published by</div>
                                        <div class="token_stats-value green">Copyright @2024 Sidus Studios</div>
                                    </div>
                                </div>

                                <!-- FDMC -->
                                <div class="extra_info_wrapper">
                                    <div class="icon">
                                        <img src="./assets/icons/calendar_month.svg" alt="">
                                    </div>
                                    <div class="token_stats-item">
                                        <div class="token_stats-label">Release Date</div>
                                        <div class="token_stats-value green">3/27/2025</div>
                                    </div>
                                </div>

                                <!-- Circulating Supply -->
                                <div class="extra_info_wrapper">
                                    <div class="icon">
                                        <img src="./assets/icons/translate.svg" alt="">
                                    </div>
                                    <div class="token_stats-item">
                                        <div class="token_stats-label">Supported Language</div>
                                        <div class="token_stats-value green">English</div>
                                    </div>
                                </div>

                                <!-- Max Supply -->
                                <div class="extra_info_wrapper">
                                    <div class="icon">
                                        <img src="./assets/icons/terms-icon.svg" alt="">
                                    </div>
                                    <div class="token_stats-item">
                                        <div class="token_stats-label">Additional Terms</div>
                                        <div class="token_stats-value green">Privacy Policy</div>
                                    </div>
                                </div>

                                <!-- Publisher Info -->
                                <div class="extra_info_wrapper">
                                    <div class="icon">
                                        <img src="./assets/icons/check_box.svg" alt="">
                                    </div>
                                    <div class="token_stats-item">
                                        <div class="token_stats-label">Publisher Info</div>
                                        <div class="token_stats-value green">Sidus Studios</div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- =============== additional information section end==========  -->


                        <!-- =================== FAQ Tab Section =================== -->
                        <div class="faq_tab-container">
                            <!-- Tab Navigation -->
                            <div class="faq_tab-navigation">
                                <div class="faq_tab-background"></div>
                                <a href="#faqs" class="faq_tab-item active">FAQs</a>
                                {{-- <a href="#benefits" class="faq_tab-item">Benefits</a>
        <a href="#news" class="faq_tab-item">News and Media</a>
        <a href="#press" class="faq_tab-item">Press Release</a>
        <a href="#related" class="faq_tab-item">Related Article</a> --}}
                            </div>

                            <!-- Content Container for Different Tab Contents -->
                            <div class="faq_tab-content-container">
                                <!-- FAQ Content -->
                                <div id="faqs" class="faq_tab-content">
                                    <div id="faq-accordion-placeholder">
                                        @php
                                            $faqs = is_string($appDetails->faq)
                                                ? json_decode($appDetails->faq, true)
                                                : $appDetails->faq;
                                        @endphp

                                        @if (!empty($faqs) && is_array($faqs))
                                            @foreach ($faqs as $index => $faq)
                                                <div class="faq-item {{ $index === 0 ? 'active' : '' }}">
                                                    <div class="faq-question">
                                                        {{ $faq['question'] ?? 'No question available' }}
                                                        <div class="faq-icon">
                                                            <div class="faq-icon-plus"></div>
                                                            <div class="faq-icon-minus"></div>
                                                        </div>
                                                    </div>
                                                    <div class="faq-answer">
                                                        <div class="faq-answer-content">
                                                            {{ $faq['answer'] ?? 'No answer available' }}
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="alert alert-warning mt-4">No FAQs available.</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ===================faq tab section end ====  -->



                        <!-- ========== subscription banner section =======  -->
                        <section class="subscribe_sec">
                            <div class="subscribe_sec-container">
                                <h2 class="subscribe_sec-title">Subscribe to Latest Offer & Updates</h2>
                                <form class="subscribe_sec-form">
                                    <input type="email" class="subscribe_sec-input"
                                        placeholder="Enter your Email Address" required>
                                    <button type="submit" class="subscribe_sec-button">Subscribe</button>
                                </form>
                            </div>
                        </section>
                        <!-- ========== subscription banner section =======  -->


                    </div>

                    <div class="right-column">
                        <div class="sticky-container">
                            <div class="section">
                                <h2 class="recommendation-title">You may also like</h2>
                                <!-- <div class="recommendation-card">
                <div class="recommendation-img">
                  <img src="./assets/images/pancake-swap.png" alt="Pancakeswap">
                </div>
                <div class="recommendation-info">
                  <h3>Pancake Swap</h3>
                  <div class="recommendation-type">DEFI • WALLET</div>
                  <div class="recommendation-rating">
                    <div class="stars">★★★★☆</div>
                  </div>
                  <button class="explore-small">Explore</button>
                </div>
              </div> -->
                                <div class="app-card aave-card col_end">
                                    <div class="logo-container aave-bg">
                                        <img src="./assets/images/pancake-swap.png" alt="Aave" class="">
                                    </div>
                                    <div class="card-content">
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
                                            <span class="ratings-text"> <strong>4.8 Ratings</strong> | 369
                                                Reviews</span>
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
                            </div>

                            <div class="section">
                                <h2 class="also-view-title">People Also View</h2>

                                <div class="also_view_cards_div">

                                    <div class="also-view-card">
                                        <div class="also-view_wrapper">
                                            <div class="also-view-img">
                                                <img src="./assets/images/farm-side-img.png" alt="Farm Clicker">
                                            </div>
                                            <div class="also-view-info">
                                                <h3>Farm Clicker</h3>
                                                <div class="also-view-type">DEFI • WALLET</div>
                                                <div class="star-rating">
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span style="color: #64748b;">★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="explore-btn">Explore</button>
                                    </div>

                                    <div class="also-view-card">
                                        <div class="also-view_wrapper">
                                            <div class="also-view-img">
                                                <img src="./assets/images/saros-side.png" alt="Farm Clicker">
                                            </div>
                                            <div class="also-view-info">
                                                <h3>Saros</h3>
                                                <div class="also-view-type">DEFI • WALLET</div>
                                                <div class="star-rating">
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span style="color: #64748b;">★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="explore-btn">Explore</button>
                                    </div>


                                    <div class="also-view-card">
                                        <div class="also-view_wrapper">
                                            <div class="also-view-img">
                                                <img src="./assets/images/henio.png" alt="Farm Clicker">
                                            </div>
                                            <div class="also-view-info">
                                                <h3>Henio</h3>
                                                <div class="also-view-type">DEFI • WALLET</div>
                                                <div class="star-rating">
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span style="color: #64748b;">★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="explore-btn">Explore</button>
                                    </div>


                                    <div class="also-view-card">
                                        <div class="also-view_wrapper">
                                            <div class="also-view-img">
                                                <img src="./assets/images/one-inch-side.png" alt="Farm Clicker">
                                            </div>
                                            <div class="also-view-info">
                                                <h3>1 Inch</h3>
                                                <div class="also-view-type">DEFI • WALLET</div>
                                                <div class="star-rating">
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span style="color: #64748b;">★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="explore-btn">Explore</button>
                                    </div>

                                    <div class="also-view-card">
                                        <div class="also-view_wrapper">
                                            <div class="also-view-img">
                                                <img src="./assets/images/aave-side.png" alt="Farm Clicker">
                                            </div>
                                            <div class="also-view-info">
                                                <h3>Aave</h3>
                                                <div class="also-view-type">DEFI • WALLET</div>
                                                <div class="star-rating">
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span>★</span>
                                                    <span style="color: #64748b;">★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="explore-btn">Explore</button>
                                    </div>







                                </div>


                            </div>
                        </div>
                    </div>
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

    <script src="{{ asset('js/appview.js') }}"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const token_chart = {
                init: function() {
                    this.setupChart();
                    this.handleResize();
                    window.addEventListener('resize', this.handleResize.bind(this));
                },

                setupChart: function() {
                    const ctx = document.getElementById('token_chart-canvas').getContext('2d');

                    // Sample data based on the image
                    const labels = ['7:30 PM', '8:00 PM', '8:30 PM', '9:00 PM'];
                    const upperBandData = [40, 60, 65, 63, 60, ];
                    const lowerBandData = [28, 45, 42, 35, 40, ];

                    // Chart configuration
                    this.chart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: labels,
                            datasets: [{
                                    label: 'Upper Band',
                                    data: upperBandData,
                                    borderColor: '#9b51e0',
                                    backgroundColor: 'rgba(155, 81, 224, 0.3)',
                                    fill: '+1',
                                    tension: 0.3,
                                    borderWidth: 2
                                },
                                {
                                    label: 'Lower Band',
                                    data: lowerBandData,
                                    borderColor: '#f2994a',
                                    backgroundColor: 'rgba(242, 153, 74, 0.1)',
                                    fill: 'origin',
                                    tension: 0.3,
                                    borderWidth: 2
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {
                                    display: false
                                },
                                tooltip: {
                                    mode: 'index',
                                    intersect: false,
                                    backgroundColor: '#2d3748',
                                    titleColor: '#ffffff',
                                    bodyColor: '#e2e8f0',
                                    borderColor: '#4a5568',
                                    borderWidth: 1,
                                    padding: 10,
                                    displayColors: true,
                                    callbacks: {
                                        label: function(context) {
                                            return context.dataset.label + ': ' + context.parsed
                                                .y + '%';
                                        }
                                    }
                                }
                            },
                            scales: {
                                x: {
                                    grid: {
                                        display: true,
                                        color: 'rgba(255, 255, 255, 0.05)',
                                    },
                                    ticks: {
                                        color: '#8b949e',
                                        font: {
                                            size: 10
                                        }
                                    }
                                },
                                y: {
                                    min: 0,
                                    max: 100,

                                    grid: {
                                        display: true,
                                        color: 'rgba(255, 255, 255, 0.05)',
                                    },
                                    ticks: {
                                        color: '#8b949e',
                                        font: {
                                            size: 10
                                        },
                                        callback: function(value) {
                                            return value + '%';
                                        },
                                        stepSize: 20,
                                    }
                                }
                            },
                            interaction: {
                                mode: 'index',
                                intersect: false,
                            },
                            elements: {
                                point: {
                                    radius: 0,
                                    hoverRadius: 5
                                }
                            }
                        }
                    });
                },

                handleResize: function() {
                    if (this.chart) {
                        this.chart.resize();
                    }
                },

                // You could add methods to update with real-time data here
                updateWithRealTimeData: function(newData) {
                    // Implementation for real-time updates would go here
                    // this.chart.data.datasets[0].data = newData.upperBand;
                    // this.chart.data.datasets[1].data = newData.lowerBand;
                    // this.chart.update();
                }
            };

            // Initialize the chart
            token_chart.init();
        });
    </script> --}}

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            centeredSlides: true,
            spaceBetween: 0,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                type: "fraction",
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>



    {{-- gecko --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const chartData = @json($chartData);

        const ctx = document.getElementById('token_chart-canvas').getContext('2d');
        const tokenChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: chartData.labels,
                datasets: [{
                        label: 'Upper Band',
                        data: chartData.upper_band,
                        borderColor: '#9b51e0',
                        fill: false,
                        tension: 0.4
                    },
                    {
                        label: 'Lower Band',
                        data: chartData.lower_band,
                        borderColor: '#f2994a',
                        fill: false,
                        tension: 0.4
                    }
                ]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: true
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false
                    }
                }
            }
        });
    </script>
</body>

</html>
