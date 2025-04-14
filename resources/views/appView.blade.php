<x-layout>
    <style>
        .product-image {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .carousel-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
    </head>
    @if ($appDetails)
        <div class="container mt-4">
            <div class="card p-4 shadow-lg">
                <div class="row align-items-center">
                    <!-- App Icon -->
                    <div class="col-md-3 text-center">
                        <img src="{{ $appDetails->app_icon ? asset('storage/' . $appDetails->app_icon) : asset('default-image.jpg') }}"
                            alt="App Icon" class="product-image">
                    </div>

                    <!-- App Details & Buttons -->
                    <div class="col-md-9">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <!-- App Name & Category -->
                            <div>
                                <h2 class="fw-bold">{{ $appDetails->app_name ?? 'Unknown App' }}</h2>
                                <p class="text-muted">{{ $appDetails->app_category ?? 'No Category' }}</p>
                            </div>

                            <!-- Social Media Links -->
                            <div class="d-flex gap-3 mt-3">
                                @if ($appDetails->instagram_url)
                                    <a href="{{ $appDetails->instagram_url }}" class="text-decoration-none"
                                        target="_blank">
                                        <i class="fab fa-instagram fs-4 text-danger"></i>
                                    </a>
                                @endif
                                @if ($appDetails->facebook_url)
                                    <a href="{{ $appDetails->facebook_url }}" class="text-decoration-none"
                                        target="_blank">
                                        <i class="fab fa-facebook fs-4 text-primary"></i>
                                    </a>
                                @endif
                                @if ($appDetails->x_url)
                                    <a href="{{ $appDetails->x_url }}" class="text-decoration-none" target="_blank">
                                        <i class="fab fa-x-twitter fs-4 text-dark"></i>
                                    </a>
                                @endif
                            </div>

                            <!-- Followers & Likes -->
                            <div class="d-flex gap-3">
                                <span class="badge bg-primary fs-6 px-3 py-2">
                                    <i class="fas fa-users"></i> Followers: 
                                    {{ $appDetails->followers ?: $followersCount }}                                
                                </span>
                                <span class="badge bg-danger fs-6 px-3 py-2">
                                    <i class="fas fa-heart"></i> Likes: {{ $appDetails->likes }}
                                </span>
                            </div>




                            <!-- Follow & Open Buttons -->
                            <div class="d-flex gap-2">
                                
                            <form action="{{ route('toggle.follow', $appDetails->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn {{ $isFollowing ? 'btn-secondary' : 'btn-primary' }} fw-bold px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2">
                                    <i class="fas {{ $isFollowing ? 'fa-user-minus' : 'fa-user-plus' }}"></i>
                                    <span>{{ $isFollowing ? 'Unfollow' : 'Follow' }}</span>
                                </button>
                            </form>
                            

                                <button onclick="window.location.href='{{ $appDetails->website_url }}'"
                                    class="btn btn-outline-primary fw-bold px-4 py-2 rounded-pill shadow-sm d-flex align-items-center gap-2">
                                    <i class="fas fa-external-link-alt"></i> <span>Open App</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- About Section -->
            @if (!empty($appDetails->about_intro) || !empty($appDetails->about_overview) || !empty($appDetails->about_features))
                <div class="card p-4 shadow-lg mt-4">
                    <h3 class="fw-bold mb-3">About This App</h3>
                    <ul class="nav nav-tabs" id="aboutTabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#introduction">Introduction</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#overview">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#specifications">Specifications</a>
                        </li>
                    </ul>

                    <div class="tab-content mt-3">
                        @if (!empty($appDetails->about_intro))
                            <div class="tab-pane fade show active" id="introduction">
                                <p>{{ $appDetails->about_intro }}</p>
                            </div>
                        @endif
                        @if (!empty($appDetails->about_overview))
                            <div class="tab-pane fade" id="overview">
                                <p>{{ $appDetails->about_overview }}</p>
                            </div>
                        @endif
                        @if (!empty($appDetails->about_features))
                            <div class="tab-pane fade" id="specifications">
                                <p>{{ $appDetails->about_features }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            {{-- FAQS --}}
            @php
                $faqs = is_string($appDetails->faq) ? json_decode($appDetails->faq, true) : $appDetails->faq;
            @endphp

            @if (!empty($faqs) && is_array($faqs))
                <div class="card p-4 shadow-lg mt-4">
                    <h3 class="fw-bold">Frequently Asked Questions (FAQ)</h3>
                    <div id="faq-container" class="mt-3">
                        @foreach ($faqs as $faq)
                            <div class="card mb-2 p-3 shadow-sm">
                                <h5 class="fw-bold">{{ $faq['question'] ?? 'No question available' }}</h5>
                                <p class="text-muted">{{ $faq['answer'] ?? 'No answer available' }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="alert alert-warning mt-4">No FAQs available.</div>
            @endif

            <!-- Tags Section -->
            @if (!empty($appDetails->app_tags) && is_array($appDetails->app_tags))
                <div class="container mt-4">
                    <div class="card p-4 shadow-lg">
                        <h3 class="fw-bold">Tags</h3>
                        <div class="d-flex flex-wrap gap-2 mt-3">
                            @foreach ($appDetails->app_tags as $tag)
                                <span class="badge bg-primary fs-6 px-3 py-2">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
        @else
        <div class="alert alert-warning mt-4">
            No application details found.
        </div>
    @endif



    {{-- Rating & Reviews Section --}}
    <div class="container mt-4">
        <div class="card p-4 shadow-lg">
            <h3 class="fw-bold">User Reviews & Ratings</h3>

            {{-- Average Rating Display --}}
            <div class="d-flex align-items-center gap-2">
                <strong class="fs-4">{{ number_format($appDetails->average_rating ?? 0, 1) }}</strong>
                <div class="text-warning">
                    @for ($i = 1; $i <= 5; $i++)
                        <i
                            class="fas fa-star {{ $i <= ($appDetails->average_rating ?? 0) ? 'text-warning' : 'text-secondary' }}"></i>
                    @endfor
                </div>
                <span class="text-muted">({{ $appDetails->total_reviews ?? 0 }} Reviews)</span>
            </div>

            {{-- Review Form --}}
            <form id="review-form" action="{{ route('submit.review', $appDetails->id) }}" method="POST"
                class="mt-3">
                @csrf
                <div class="mb-3">
                    <label class="fw-bold">Your Rating:</label>
                    <div id="star-rating">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star text-secondary rating-star" data-value="{{ $i }}"></i>
                        @endfor
                    </div>
                    <input type="hidden" name="rating" id="rating-value" required>
                </div>
                <div class="mb-3">
                    <label class="fw-bold">Your Review:</label>
                    <textarea name="review" class="form-control" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </form>


            {{-- User Reviews --}}
            <div class="mt-4">
                <h4 class="fw-bold">User Reviews</h4>
                <div id="reviews-container">
                    @if (!empty($appDetails->reviews))
                        @foreach ($appDetails->reviews as $review)
                            <div class="card mb-2 p-3 shadow-sm">
                                <div class="d-flex align-items-center gap-2">
                                    <strong>{{ $review->user_name ?? 'Anonymous' }}</strong>
                                    <div class="text-warning">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <i
                                                class="fas fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-secondary' }}"></i>
                                        @endfor
                                    </div>
                                </div>
                                <p class="text-muted">{{ $review->comment }}</p>
                            </div>
                        @endforeach
                    @else
                        <div class="alert alert-warning">No reviews yet. Be the first to review!</div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    {{-- JavaScript for Star Rating & Form Submission --}}
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const stars = document.querySelectorAll(".rating-star");
            let ratingInput = document.getElementById("rating-value");

            // Star selection functionality
            stars.forEach(star => {
                star.addEventListener("click", function() {
                    let rating = this.getAttribute("data-value");
                    ratingInput.value = rating;

                    // Reset and highlight selected stars
                    stars.forEach(s => s.classList.remove("text-warning"));
                    for (let i = 0; i < rating; i++) {
                        stars[i].classList.add("text-warning");
                    }
                });
            });

        });
    </script>

{{-- Follow  --}}


</script>

</x-layout>
