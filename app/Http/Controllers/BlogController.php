<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = [
            'blogs'=>Blog::all()
        ];
        return view('dashboard.blogs.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'categories'=>\App\Models\Category::all()
        ];
        return view('dashboard.blogs.form',$data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        //
        $blog = Blog::create($request->validated());

        if($request->hasFile('image')){
            $path = '/images/blogs/';
            $file_name = $blog->id.'_'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path($path),$file_name);
            $blog->update([
                'image'=>$file_name
            ]);
        }
        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
