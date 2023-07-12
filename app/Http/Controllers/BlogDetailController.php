<?php

namespace App\Http\Controllers;

use App\Models\BlogDetail;
use App\Http\Requests\StoreBlogDetailRequest;
use App\Http\Requests\UpdateBlogDetailRequest;

class BlogDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        return view('FrontEnd.pages.blog-details');
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogDetail $blogDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogDetail $blogDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogDetailRequest $request, BlogDetail $blogDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogDetail $blogDetail)
    {
        //
    }
}
