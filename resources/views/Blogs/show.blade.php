<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <div class="card">
        <!-- Featured Image -->
        @if($blog->featured_image && file_exists(public_path('storage/' . $blog->featured_image)))
            <img src="{{ asset('storage/' . $blog->featured_image) }}" class="card-img-top" alt="{{ $blog->title }}">
        @else
            <img src="{{ asset('images/default-placeholder.jpg') }}" class="card-img-top" alt="No Image Available">
        @endif
    
        <div class="card-body">
            <h1 class="card-title">{{ $blog->title }}</h1>
            <p class="text-muted">Published on {{ $blog->created_at->format('M d, Y') }}</p>
            <hr>

            <!-- Render Quill Editor Content (Including Images) -->
            <div class="blog-content">
                {!! $blog->content !!}
            </div>

            <hr>

            @if(!empty(json_decode($blog->categories, true)))
                <h5>Categories:</h5>
                @foreach(json_decode($blog->categories ?? '[]', true) as $category)
                    <span class="badge bg-primary">{{ $category }}</span>
                @endforeach
            @endif

            @if(!empty(json_decode($blog->tags, true)))
                <h5 class="mt-3">Tags:</h5>
                @foreach(json_decode($blog->tags ?? '[]', true) as $tag)
                    <span class="badge bg-secondary">{{ $tag }}</span>
                @endforeach
            @endif
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
