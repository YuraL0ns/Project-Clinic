<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function getCategories()
    {
        return view('tmp.sait.page.posts.category.list', [

        'categories' => Category::all(),

    ]);
    }

    public function getCategoryData(Category $category)
    {
        $categories = Category::find($category);
        $categories->load('posts');
        return view('tmp.sait.page.posts.category.show', compact('categories'))->with('posts');
    }

    public function getPostForCategory($post_alias)
    {
        $posts = Post::where('post_alias', $post_alias)->get();
        $posts->load('categories');
        dd($post_alias);


    }
}
