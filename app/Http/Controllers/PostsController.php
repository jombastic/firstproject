<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
        $id = 7;
        $posts = DB::table('posts')
            ->where('created_at', '>', now()->subDay())
            ->get();
        dd($posts);
    }
}
