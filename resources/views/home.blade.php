<x-layout>

    @push('styles')
    <style>
        .project-card {
            display: flex;
            align-items: center;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            transition: transform 0.2s;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-card {
            max-width: 700px;
            margin: 0 auto;
        }
    </style>
    @endpush

    <!-- Hot Offers Section -->
    <section class="hot-offers py-5 bg-light">
        <div class="container">
            <div class="row">
                @foreach($hotOffers as $offer)
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card shadow-sm rounded overflow-hidden" style="width: 443px; height: 249px;">
                            <img src="{{ asset('storage/hot-offers/' . $offer->image_path) }}" 
                                 alt="Hot Offer" 
                                 class="card-img-top"
                                 style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="featured-projects py-5">
        <div class="container">
            <h1 class="text-center mb-5">Featured Web3 Projects</h1>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                @foreach ($apps as $app)
                    <div class="col">
                        <a href="{{ route('app.view', $app->id) }}" class="d-block text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm p-3">
                                <div class="d-flex align-items-center gap-3">
                                    <!-- App Icon -->
                                    <img src="{{ $app->app_icon ? asset('storage/' . $app->app_icon) : asset('images/default-icon.png') }}"
                                        alt="{{ $app->app_name }}" class="rounded"
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                    <!-- App Details -->
                                    <div>
                                        <h5 class="mb-1">{{ $app->app_name }}</h5>
                                        <p class="text-muted mb-0">{{ $app->app_category }}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact Us Form Section -->
    <section class="contact-us py-5 bg-light">
        <div class="container">
            <div class="card shadow-sm p-4 contact-card">
                <h2 class="text-center mb-4">Contact Us</h2>
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="full_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">App Name</label>
                        <input type="text" name="app_name" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="tel" name="phone" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control" rows="4" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>
        </div>
    </section>

</x-layout>
