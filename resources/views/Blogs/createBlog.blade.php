<!DOCTYPE html>
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
</html>
