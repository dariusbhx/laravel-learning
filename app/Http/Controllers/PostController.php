<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index() 
    {
        return view('posts', [
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'categories' => Category::all(),
        ]);
    }

    public function getPost(Post $post) {
        return view('post', [
            'post' => $post
        ]);
    }

    public function getPosts() 
    {
        return Post::latest()->filter()->get();        
    }

    public function getCategoryPosts(Category $category) {
        return view('posts', [
            'posts' => $category->posts,
            'categories' => Category::all(),
            'currentCategory' => $category
        ]);
    }

    public function getAuthorPosts(User $author) {
        
        return view('posts', [
            'posts' => $author->posts,
            'categories' => Category::all(),
        ]);
    }
}
