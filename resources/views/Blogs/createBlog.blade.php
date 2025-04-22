{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Editor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-4">Create New Blog Post</h2>
        
        <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf  <!-- Laravel CSRF Protection -->
            
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" placeholder="Auto-generated from title">
            </div>
            
            <div class="mb-3">
                <label for="excerpt" class="form-label">Excerpt</label>
                <textarea class="form-control" id="excerpt" name="excerpt" rows="2"></textarea>
            </div>
            
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <div id="content" class="form-control" style="height: 300px;"></div>
                <input type="hidden" name="content" id="hidden-content">
            </div>
            
            <div class="mb-3">
                <label for="categories" class="form-label">Categories</label>
                <div id="category-list">
                    @foreach($categories as $category)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="categories[]" value="{{ $category->id }}" id="category-{{ $category->id }}">
                            <label class="form-check-label" for="category-{{ $category->id }}">{{ $category->name }}</label>
                        </div>
                    @endforeach
                </div>
                
                <!-- Add New Category -->
                <input type="text" class="form-control mt-2" id="new-category" placeholder="Add new category">
                <button type="button" class="btn btn-sm btn-secondary mt-2" onclick="addCategory()">Add</button>
            </div>
            
            
            <div class="mb-3">
                <label for="featured_image" class="form-label">Featured Image</label>
                <input type="file" class="form-control" id="featured_image" name="featured_image">
            </div>
            
            <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags, separated by commas">
            </div>
            
            <div class="mb-3">
                <label for="status" class="form-label">Post Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="scheduled_at" class="form-label">Schedule Post</label>
                <input type="datetime-local" class="form-control" id="scheduled_at" name="scheduled_at">
            </div>
            
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="allow_comments" name="allow_comments" value="1" checked>
                <label class="form-check-label" for="allow_comments">Allow Comments</label>
            </div>
            
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="is_featured" name="is_featured" value="1">
                <label class="form-check-label" for="is_featured">Mark as Featured Post</label>
            </div>
            
            <div class="mb-3">
                <label for="meta_title" class="form-label">SEO Meta Title</label>
                <input type="text" class="form-control" id="meta_title" name="meta_title">
            </div>
            
            <div class="mb-3">
                <label for="meta_description" class="form-label">SEO Meta Description</label>
                <textarea class="form-control" id="meta_description" name="meta_description" rows="2"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Publish</button>
        </form>
    </div>
    
    <script>
        function addCategory() {
            let newCategory = document.getElementById("new-category").value;
            if (newCategory) {
                let categoryList = document.getElementById("category-list");
                let id = newCategory.toLowerCase().replace(/\s+/g, '-');
                let newCheckbox = `<div class="form-check">
                    <input class="form-check-input" type="checkbox" name="categories[]" value="${newCategory}" id="${id}" checked>
                    <label class="form-check-label" for="${id}">${newCategory}</label>
                </div>`;
                categoryList.innerHTML += newCheckbox;
                document.getElementById("new-category").value = "";
            }
        }
        
        // Initialize Quill editor
        var quill = new Quill('#content', {
            theme: 'snow'
        });

        // Save Quill content into hidden input before submitting
        document.querySelector('form').addEventListener('submit', function() {
            document.getElementById('hidden-content').value = quill.root.innerHTML;
        });
    </script>
    <script>
        document.getElementById("title").addEventListener("input", function() {
            let slug = this.value.toLowerCase().trim().replace(/\s+/g, '-').replace(/[^a-z0-9\-]/g, '');
            document.getElementById("slug").value = slug;
        });
        </script>
        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}











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
    {{-- <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet"> --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    {{-- <script src="https://cdn.quilljs.com/1.3.6/quill.js"><script/> --}}


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=check" />
    {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=close" /> --}}


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
        #editor-container {
            height: 300px;
        }
    </style>
  
    <!-- Load Quill -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

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
        .chk{
            cursor: pointer;
        }
        .effect-tag {
            /* transition: 1s; */
            /* transition-duration: 1s; */
        }
        .effect-on-ckeck{
            transform: scale(1.3);
            transition: .3s;
        }
        
        .btn-active{
            border: 2px solid #7FFDFD;
            background-color: #172835;
        }


        #editor-container {
            height: 300px;
            background-color: #2f3546; /* Editor background */
            border: 1px solid #5f6578; /* Editor border */
            color: #ffffff;
            }
        .quill-editor {
            /* height: 150px; */
        }

        .ql-container {
            /* border: none !important; */
            border-radius: 0 0 0.5rem 0.5rem; 
            background-color: #545D7780; /* your desired background */
            overflow: hidden; /* smooth rounded corners */
            /* color: white; */
            border-color: rgb(66, 64, 64);
            /* color: white; */
        }

        .ql-editor {
            /* border: none !important; */
            border-radius: 0.5rem;
            min-height: 150px; /* optional: adjust editor height */
            padding: 1rem;
            color: white; 
            border-color: rgb(66, 64, 64);
        }

        /* Optional: Toolbar also rounded */
        .ql-toolbar {
            /* border: none !important; */
            border-radius: 0.5rem 0.5rem 0 0;
            background-color: #343a4a; 
            color: white;
            border-color: rgb(66, 64, 64);
        }

        /* Make toolbar icons and text white */
        .ql-toolbar.ql-snow {
        color: white !important;
        /* background-color: #545D7780; your desired background */
        border: 1px solid #5f6578;
        }

        .ql-toolbar.ql-snow .ql-picker-label,
        /* .ql-toolbar.ql-snow .ql-picker-item, */
        .ql-toolbar.ql-snow .ql-stroke,
        .ql-toolbar.ql-snow .ql-fill,
        /* .ql-toolbar.ql-snow .ql-picker-options, */
        .ql-toolbar.ql-snow svg {
        color: white !important;
        fill: white !important;
        stroke: white !important;
        }

        /* Optional: make hover and active states white too */
        /* .ql-toolbar.ql-snow .ql-picker-label:hover,
        .ql-toolbar.ql-snow .ql-picker-item:hover,
        .ql-toolbar.ql-snow button:hover {
        color: white !important;
        fill: white !important;
        stroke: white !important;
        } */


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
                                    class=" text-slate-950 text-lg font-medium font-['Montserrat']  px-[24px] py-2 bg-cyan-300 rounded-[5px] hover:bg-cyan-600 hover:text-white transition-all">SignUp</button>
                            </div>
                        </div>
                    </div>
                </nav>


                {{-- Create Blog page --}}

                <h1 class="font-bold text-4xl mt-4">Create New Blog Post</h1>

                <form class="mt-8 flex flex-col gap-6">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="flex flex-col gap-2 w-full">
                            <label for="blog-title" class="text-2xl font-bold">Title</label>
                            <input type="text" id="blog-title" class="w-full bg-[#545D7780] outline-none px-2 py-2 border border-gray-500 rounded ">
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <label for="blog-slug" class="text-2xl font-bold">Slug</label>
                            <input type="text" id="blog-slug" placeholder="Auto-generated from title" class="w-full bg-[#545D7780] outline-none px-2 py-2 border border-gray-500 rounded ">
                        </div>
                    </div>
                    <div>
                        <div class="flex flex-col gap-2 w-full">
                            <label for="excerpt" class="text-2xl font-bold">Excerpt</label>
                            <textarea id="excerpt" placeholder="" class="resize-none h-28 w-full bg-[#545D7780] outline-none px-2 py-2 border border-gray-500 rounded "></textarea>
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <label for="editor" class="text-2xl font-bold"><strong>Content</strong></label>
                        <div id="editor-container" class="border">
                            <!-- Rich text area -->
                        </div>
                    </div>

                    <div class="flex flex-col gap-2 w-full items-start">
                        <label for="blog-category" class="text-2xl font-bold">Category</label>
                        <input type="text" id="blog-category" placeholder="Auto-generated from title" class="w-full bg-[#545D7780] outline-none px-2 py-2 border border-gray-500 rounded ">
                        <input type="button" class="px-4 py-1 rounded bg-[#7FFDFD] text-black font-bold" value="Add Category">
                    </div>

                    <div class="flex flex-col gap-2 w-full items-start">
                        <label for="" class="text-2xl font-bold">Featured Image</label>
                        <div class="flex rounded overflow-hidden">
                            <span class="px-2 py-2 bg-gray-500">File</span>
                            <label for="featured_image" class="bg-gray-700 form-label text px-3 py-2 cursor-pointer">Upload image</label>
                        </div>
                        <input type="file" class="hidden" id="featured_image" name="featured_image">
                        
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <label for="blog-tags" class="text-2xl font-bold">Tags</label>
                        <input type="text" id="blog-tags" placeholder="Enter tags separated by commas" class="w-full bg-[#545D7780] outline-none px-2 py-2 border border-gray-500 rounded ">
                    </div>

                    <div class="flex gap-4 flex-col md:flex-row">
                        <div class="flex flex-col gap-2 w-full">
                            <label for="status" class="text-2xl font-bold">Post Status</label>
                            <select class="w-full bg-[#545D7780] outline-none px-2 py-2 border border-gray-500 rounded " id="status" name="status">
                                <option value="draft">Draft</option>
                                <option value="published">Published</option>
                            </select>
                        </div>
                        
                        <div class="flex flex-col gap-2 w-full">
                            <label for="scheduled_at_" class="text-2xl font-bold">Schedule Post</label>
                            <input type="datetime-local" class="w-full bg-[#545D7780] outline-none px-2 py-2 border border-gray-500 rounded " id="scheduled_at_" name="scheduled_at">
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <input class="" type="checkbox" id="allow_comments" name="allow_comments" value="1" checked>
                        <label class="text-2xl font-bold" for="allow_comments">Allow Comments</label>
                    </div>
                    <div class="flex gap-4">
                        <input class="" type="checkbox" id="featured" name="allow_comments" value="1" checked>
                        <label class="text-2xl font-bold" for="featured">Mark as Featured Post</label>
                    </div>
                    <div class="flex gap-4 flex-col md:flex-row">
                        <div class="flex flex-col gap-2 w-full">
                            <label for="blog-seo-title" class="text-2xl font-bold">SEO Meta Title</label>
                            <input type="text" id="blog-seo-title" class="w-full bg-[#545D7780] outline-none px-2 py-2 border border-gray-500 rounded ">
                        </div>
                        <div class="flex flex-col gap-2 w-full">
                            <label for="blog-seo-des" class="text-2xl font-bold">SEO Meta Description</label>
                            <input type="text" id="blog-seo-des" placeholder="" class="w-full bg-[#545D7780] outline-none px-2 py-2 border border-gray-500 rounded ">
                        </div>
                    </div>

                    <button class="px-4 py-1 rounded bg-[#7FFDFD] text-black font-bold self-start text-lg md:text-xl lg:text-2xl">Publish</button>
                </form>

                

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
    
    {{-- <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script> --}}
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>
  <script>
    const quill = new Quill('#editor-container', {
      theme: 'snow',
      placeholder: 'Yahan likhiye...',
      modules: {
        toolbar: [
          [{ header: [1, 2, false] }],
          ['bold', 'italic', 'underline'],
          ['link', 'blockquote', 'code-block'],
          [{ list: 'ordered' }, { list: 'bullet' }],
          ['clean']
        ]
      }
    });
  </script>

        
</body>


</html>










