<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Blog List</h2>
        <a href="{{ route('create.blog') }}" class="btn btn-success">+ Create Post</a>
    </div>

    <!-- Search Form -->
    <form method="GET" action="{{ route('blogs.view') }}" class="mb-4">
        {{-- <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search blogs..." value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form> --}}

    <!-- Blog List -->
    <div class="row">
        @forelse($blogs as $blog)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $blog->title }}</h5>
                        <p class="card-text"><small class="text-muted">Published: {{ $blog->created_at->format('M d, Y') }}</small></p>
                        <a href="{{ route('blogs.show', $blog->slug) }}" class="btn btn-outline-primary">Read More</a>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">No blogs found.</p>
        @endforelse
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $blogs->links('pagination::bootstrap-5') }}
    </div>
</div>
