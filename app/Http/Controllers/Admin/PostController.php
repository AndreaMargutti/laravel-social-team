<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index () {
        $posts = Post::all();

        return view ('admin.posts.index', compact('posts'));
    }

    public function show () {

    }

    public function create () {

    }

    public function store () {

    }

    public function edit () {

    }

    public function update () {

    }

    public function destroy () {

    }
}