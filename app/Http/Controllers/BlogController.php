<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth; // Make sure this is at the top

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogController extends Controller
{

    //Findd and list 
    public function viewBlogs(Request $request)
        {
            $query = Post::query();
    
            // Apply search filter if provided
            if ($request->has('search')) {
                $query->where('title', 'like', '%' . $request->search . '%');
            }
    
            // Get paginated blog posts (10 per page)
            $blogs = $query->orderBy('created_at', 'desc')->paginate(10);
    
            return view('Blogs.bloglist', compact('blogs'));
        }
   
    //redirects to create blog page
    function createBlog(){
        $categories = Category::all();
        return view('Blogs.createBlog', compact('categories'));
    }



public function storeBlog(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255|unique:posts,slug',
        'excerpt' => 'required|string|max:500',
        'content' => 'required',
        'status' => 'required|in:draft,published',
        'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    try {
        $post = new Post();
        $post->user_id = Auth::id(); // ✅ Fix: Assign user_id
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->excerpt = $request->excerpt;
        $post->content = $request->content;
        $post->tags = json_encode(explode(',', $request->tags));
        $post->status = $request->status;
        $post->scheduled_at = $request->scheduled_at;
        $post->allow_comments = $request->allow_comments ?? 0;
        $post->is_featured = $request->is_featured ?? 0;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $imagePath = $request->file('featured_image')->store('uploads/blogs', 'public');
            $post->featured_image = $imagePath;
        }

        $post->save();

        // Attach categories
        if ($request->has('categories')) {
            $post->categories()->attach($request->categories);
        }

        return redirect()->route('Blogs.show', $post->slug)->with('success', 'Blog post created successfully!');
    } catch (\Exception $e) {
        \Log::error("Error Creating Blog Post: " . $e->getMessage());
        return redirect()->back()->with('error', 'Failed to create blog post.');
        }
    }
   

    public function show($slug)
    {
    $blog = Post::where('slug', $slug)->firstOrFail();
    return view('Blogs.show', compact('blog'));
    }

}
