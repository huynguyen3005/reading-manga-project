<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    // Display a listing of the comics.
    public function list()
    {
        return view('client.pages.list');
    }

}
