 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>User Dashboard</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
     <style>
         body {
             font-family: 'Poppins', sans-serif;
         }

         /* Sidebar */
         .sidebar {
             width: 250px;
             height: 100vh;
             position: fixed;
             right: -250px;
             background: #343a40;
             color: white;
             padding-top: 20px;
             transition: all 0.3s ease-in-out;
             z-index: 1000;
         }

         .sidebar.open {
             right: 0;
         }

         .sidebar a {
             text-decoration: none;
             color: white;
             display: block;
             padding: 15px 20px;
         }

         .sidebar a:hover {
             background: #495057;
         }

         .main-content {
             padding: 20px;
             transition: all 0.3s;
         }

         .profile-img {
             width: 80px;
             height: 80px;
             object-fit: cover;
             border-radius: 50%;
             border: 3px solid white;
         }

         .listing-img {
             height: 150px;
             object-fit: cover;
             border-radius: 10px;
             width: 100%;
         }

         /* Sidebar Toggle Button - Now on Right */
         .sidebar-toggle {
             position: fixed;
             top: 15px;
             right: 15px;
             font-size: 1.5rem;
             cursor: pointer;
             color: white;
             z-index: 1100;
             background: #343a40;
             padding: 10px;
             border-radius: 5px;
         }

         /* Overlay when sidebar is open */
         .overlay {
             display: none;
             position: fixed;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             background: rgba(0, 0, 0, 0.5);
             z-index: 900;
         }

         .overlay.show {
             display: block;
         }

         /* Responsive Adjustments */
         @media (min-width: 768px) {
             .sidebar {
                 right: 0;
             }

             .sidebar-toggle {
                 display: none;
             }

             .overlay {
                 display: none !important;
             }
         }
     </style>
 </head>

 <body>

     <!-- Main Content -->
     <div class="main-content">
         <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm rounded p-3">
             <a class="navbar-brand fw-bold" href="{{route('home')}}">Circle</a>
         </nav>

         <!-- User Profile -->
         <div class="container mt-4">
             <div class="card p-4 shadow">
                 <div class="row align-items-center">
                     <div class="col-12 col-md-3 d-flex justify-content-center">
                         <img src="{{ Auth::user()->profile_image ? asset('storage/' . Auth::user()->profile_image) : 'https://via.placeholder.com/150' }}"
                             class="profile-img" alt="User">
                     </div>
                     <div class="col-12 col-md-7">
                         <h3 class="fw-bold text-break">{{ Auth::user()->name }}</h3>
                         <p class="text-muted text-break">{{ Auth::user()->email }}</p>
                         <p><i class="fas fa-calendar"></i> Joined: {{ Auth::user()->created_at->format('F d, Y') }}</p>
                     </div>
                     <div class="col-12 col-md-2 text-md-end text-center mt-3 mt-md-0">
                        <a href="{{ route('profile', ['id' => Auth::user()->id]) }}" class="btn btn-primary">Profile</a>

                     </div>
                 </div>
             </div>
         </div>

         <!-- Your Listings -->
         <div class="container mt-4">
             <div class="card p-4 shadow">
                 <h3 class="fw-bold">Your Listings</h3>
                 <div class="row">
                     @foreach ($appDetails as $app)
                         <div class="col-12 col-md-4 col-sm-6">
                             <div class="card shadow-sm">
                                 <img src="{{ $app->app_icon ? asset('storage/' . (is_array(json_decode($app->app_icon)) ? json_decode($app->app_icon)[0] : $app->app_icon)) : 'https://via.placeholder.com/300' }}"
                                     class="listing-img card-img-top" alt="Listing">
                                 <div class="card-body">
                                     <h5 class="card-title">{{ $app->app_name }}</h5>
                                     <p class="text-muted">{{ Str::limit($app->about_intro, 80) }}</p>
                                     <a href="{{ route('app.view', $app->id) }}" class="btn btn-outline-primary">View
                                         Details</a>
                                 </div>
                             </div>
                         </div>
                     @endforeach
                 </div>
             </div>
         </div>

     </div>

     <!-- Sidebar Toggle Script -->
     <script>
         function toggleSidebar() {
             document.getElementById("sidebar").classList.toggle("open");
             document.getElementById("overlay").classList.toggle("show");
         }
     </script>

 </body>
