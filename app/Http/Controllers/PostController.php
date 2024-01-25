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
        $cat = Category::where('cat_alias', $category)->first();
        $cat->load('posts');
        
        return view('tmp.sait.page.posts.category.show', compact('cat'))->with('cat_alias', $category);
    }

    public function getPostForCategory(Post $post) 
    {
        return view('tmp.sait.page.posts.category.post.show', [
            'post' => $post
        ]);
        

    }
}
