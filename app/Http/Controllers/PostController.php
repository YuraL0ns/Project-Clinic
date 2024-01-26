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
        
        // dd($categories->posts());

        // $categories = Category::whereHas('posts', function ($q) use ($category){
        //     $q->where('category_id', $category);
        // })->get();

        return view('tmp.sait.page.posts.category.show', compact('categories'))->with('posts');
    }

    public function getPostForCategory($post_alias) 
    {
        $posts = Post::where('post_alias', $post_alias)->get();
        $posts->load('category');
        
        // return view('tmp.sait.page.posts.category.post.show', [
        //     'posts' => Category::with('posts')->find($post)
        // ]);
        // dd($posts);
        dd($post_alias);
        

    }
}
