<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function getCategories()
    {
        return view('tmp.sait.page.posts.category.list', [
        'categories' => Category::all(),
    ]);
    }

    /**
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function getCategoryData($cat_alias)
    {
        $getCategory = Category::where('cat_alias', $cat_alias)->first()->id;
        $getAliasCat = Category::where('cat_alias', $cat_alias)->first()->cat_alias;
        $posts = DB::table('posts')->where('category_id', '=', $getCategory)->get();

        return view('tmp.sait.page.posts.category.show', [
            'posts' => $posts,
            'getAliasCat' => $getAliasCat
        ]);
//        dd($posts);
    }

    public function getPostForCategory(Post $post,$cat_alias, $post_alias)
    {
        $post = Post::where('post_alias', $post_alias)->first();
        return view('tmp.sait.page.posts.category.post.show',compact('post'));
    }
}
