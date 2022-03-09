<?php

namespace App\Http\Controllers;
use App\Post;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{


    public function list(){
        date_default_timezone_set('America/Mexico_city');
        setlocale(LC_TIME, 'es_ES', 'esp_esp');
        $catego = Category::all();
        // $catego = DB::table('categories')->get();
        $posts = Post::with('category')->orderBy('created_at','DESC')->get();
        // $posts =  DB::table('posts as p')
        //     ->join('categories as c','p.category_id','=','c.id')
        //     ->select('p.*','c.name as cate')->get();
        return view('app.blog.main',compact('posts','catego'));
    }

    public function single($slug){
        date_default_timezone_set('America/Mexico_city');
        setlocale(LC_TIME, 'es_ES', 'esp_esp');
        $post = Post::with('category')->where('slug',$slug)->first();
        // $post =  DB::table('posts as p')
        //     ->join('categories as c','p.category_id','=','c.id')
        //     ->select('p.*','c.name as cate')
        //     ->where('p.slug',$slug)->first();
//        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('app.blog.single', compact('post'));
    }
}
