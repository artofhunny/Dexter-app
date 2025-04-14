<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit App</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        .product-image {
            width: 200px;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }

        .custom-toggle {
            width: 50px;
            height: 25px;
            transform: scale(1.5);
            /* Makes it bigger */
            cursor: pointer;
        }

        .faq-item {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="container mt-4">
        <div class="card p-4 shadow-lg">
            <h2 class="fw-bold mb-3">Edit App: {{ $app->app_name }}</h2>

            <!-- Success Message -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('admin.app.update', $app->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- App Icon Upload -->
                <div class="mb-3">
                    <label class="form-label fw-bold">App Icon</label>
                    <input type="file" name="app_icon" class="form-control">
                    @if ($app->app_icon)
                        <img src="{{ asset('storage/' . $app->app_icon) }}" class="mt-2 product-image">
                    @endif
                </div>

                <!-- App Name -->
                <div class="mb-3">
                    <label class="form-label fw-bold">App Name</label>
                    <input type="text" name="app_name" class="form-control"
                        value="{{ old('app_name', $app->app_name) }}" required>
                </div>

                <!-- Category -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Category</label>
                    <select name="app_category" class="form-select">
                        @php
                            $categories = [
                                'AI Driven',
                                'Airdrop',
                                'Arbitrage',
                                'Audit',
                                'Browser',
                                'DAO',
                                'Defi',
                                'DEX',
                                'DIA',
                                'Exchange',
                                'GameFi',
                                'Launchpad',
                                'Marketplace',
                                'Metaverse',
                                'NFT',
                                'Play-to-Earn',
                                'Research & Analysis',
                                'Staking',
                                'Swapping',
                                'Token',
                                'Trading',
                                'Use to Earn',
                                'Utilities',
                                'Wallet',
                            ];
                        @endphp
                        @foreach ($categories as $category)
                            <option value="{{ $category }}" {{ $app->app_category == $category ? 'selected' : '' }}>
                                {{ $category }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Follower Update --}}
                <div class="mb-3">
                    <label for="followers" class="form-label">Followers</label>
                    <input type="number" name="followers" id="followers" class="form-control"
                        value="{{ old('followers', $app->followers) }}">
                </div>

                {{-- likes Update --}}
                <div class="mb-3">
                    <label for="likes" class="form-label">Likes</label>
                    <input type="number" name="likes" id="likes" class="form-control"
                        value="{{ old('likes', $app->likes) }}">
                </div>

                {{-- Is verified --}}
                <div class="mb-3 form-check form-switch">
                    <input type="checkbox" name="is_verified" id="is_verified" class="form-check-input"
                        {{ old('is_verified', $app->is_verified) ? 'checked' : '' }}>
                    <label for="is_verified" class="form-check-label fw-bold">Verified App</label>
                </div>



                <!-- Social Media Links -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Website URL</label>
                    <input type="url" name="website_url" class="form-control"
                        value="{{ old('website_url', $app->website_url) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Instagram URL</label>
                    <input type="url" name="instagram_url" class="form-control"
                        value="{{ old('instagram_url', $app->instagram_url) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Facebook URL</label>
                    <input type="url" name="facebook_url" class="form-control"
                        value="{{ old('facebook_url', $app->facebook_url) }}">
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">X (Twitter) URL</label>
                    <input type="url" name="x_url" class="form-control" value="{{ old('x_url', $app->x_url) }}">
                </div>

                <!-- About Sections -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Introduction</label>
                    <textarea name="about_intro" class="form-control" rows="3">{{ old('about_intro', $app->about_intro) }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Overview</label>
                    <textarea name="about_overview" class="form-control" rows="3">{{ old('about_overview', $app->about_overview) }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Features</label>
                    <textarea name="about_features" class="form-control" rows="3">{{ old('about_features', $app->about_features) }}</textarea>
                </div>

                <!-- App Images Upload -->
                <div class="mb-3">
                    <label class="form-label fw-bold">App Images</label>
                    <input type="file" name="app_images[]" class="form-control" multiple>
                    <div class="mt-2 d-flex flex-wrap gap-2">
                        @foreach ($app->app_images ?? [] as $image)
                            <img src="{{ asset('storage/' . $image) }}" class="product-image">
                        @endforeach
                    </div>
                </div>

                <!-- Tags -->
                <div class="mb-3">
                    <label class="form-label fw-bold">Tags (Comma Separated)</label>
                    <input type="text" name="app_tags" class="form-control"
                        value="{{ old('app_tags', is_array($app->app_tags) ? implode(',', $app->app_tags) : $app->app_tags) }}">
                </div>

                <!-- FAQ Section -->
                <div class="mb-3">
                    <label class="form-label fw-bold">FAQs</label>
                    <div id="faq-container">
                        @foreach ($app->faq ?? [] as $index => $faq)
                            <div class="faq-item">
                                <input type="text" name="faq_question[]" class="form-control mb-1"
                                    value="{{ $faq['question'] }}" placeholder="Question">
                                <textarea name="faq_answer[]" class="form-control" rows="2" placeholder="Answer">{{ $faq['answer'] }}</textarea>
                            </div>
                        @endforeach
                    </div>
                    <button type="button" class="btn btn-secondary btn-sm mt-2" onclick="addFaq()">Add FAQ</button>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success px-4">Update App</button>
            </form>
        </div>
    </div>

    <!-- JavaScript for Adding FAQ Dynamically -->
    <script>
        function addFaq() {
            const container = document.getElementById('faq-container');
            const faqItem = document.createElement('div');
            faqItem.classList.add('faq-item');
            faqItem.innerHTML = `
                <input type="text" name="faq_question[]" class="form-control mb-1" placeholder="Question">
                <textarea name="faq_answer[]" class="form-control" rows="2" placeholder="Answer"></textarea>
            `;
            container.appendChild(faqItem);
        }
    </script>

</body>

</html>
