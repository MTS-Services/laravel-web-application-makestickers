<?php

namespace App\Http\Controllers\Backend\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BolgPostsRequest;
use App\Http\Traits\FileManagementTrait;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogPostsController extends Controller
{
    use FileManagementTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Blog::paginate(10);
        return view('backend.admin.blogPosts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogs = Blog::all();
        return view('backend.admin.blogPosts.create', compact('blogs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BolgPostsRequest $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = $request->slug;
        $blog->short_desc = $request->short_desc;
        $blog->long_desc = $request->long_desc;
        $blog->status = $request->status;

        if ($request->hasFile('video_thumbnail')) {
            $this->handleFileUpload($request, $blog, 'video_thumbnail', 'video_thumbnail');
        }
        if ($request->hasFile('featured_image')) {
            $this->handleFileUpload($request, $blog, 'featured_image', 'featured_image');
        }
        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $blog, 'image', 'image');
        }
        if ($request->hasFile('video')) {
            $this->handleFileUpload($request, $blog, 'video', 'video');
        }
        $blog->save();

        session()->flash('success', 'Blog created successfully.');
        return redirect()->route('admin.blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogs = Blog::findOrFail(decrypt($id));
        return view('backend.admin.blogPosts.view', compact('blogs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Blog::findOrFail(decrypt($id));
        return view('backend.admin.blogPosts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BolgPostsRequest $request, string $id)
    {
        $post = Blog::findOrFail($id);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->short_desc = $request->short_desc;
        $post->long_desc = $request->long_desc;
        $post->status = $request->status;


        if ($request->hasFile('video_thumbnail')) {
            $this->handleFileUpload($request, $post, 'video_thumbnail', 'video_thumbnail');
        }
        if ($request->hasFile('featured_image')) {
            $this->handleFileUpload($request, $post, 'featured_image', 'featured_image');
        }
        if ($request->hasFile('image')) {
            $this->handleFileUpload($request, $post, 'image', 'image');
        }
        if ($request->hasFile('video')) {
            $this->handleFileUpload($request, $post, 'video', 'video');
        }
        $post->save();

        return redirect(route('admin.blog.index'))->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Blog::findOrFail(decrypt($id));
        $post->delete();
        return redirect(route('admin.blog.index'))->with('success', 'Blog deleted successfully.');
    }

    public function status(string $id, string $status)
    {
        $post = Blog::findOrFail(decrypt($id));
        $post->update([
            'status' => decrypt($status),
            'updated_by' => admin()->id,
        ]);

        session()->flash('success', 'Blog Status Updated Successfully');
        return redirect()->route('admin.blog.index');
    }
}
