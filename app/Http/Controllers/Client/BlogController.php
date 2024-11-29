<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the blogs.
     */
    public function blogs()
    {
        return view('client.pages.blogs');

    }

    /**
     * Display the specified blog.
     */
    public function show(string $id)
    {
        return view('client.pages.blog-detail');
    }
}
