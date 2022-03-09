<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function list(){
        date_default_timezone_set('America/Mexico_city');
        setlocale(LC_TIME, 'es_ES', 'esp_esp');
        $catego = DB::table('categories')->get();
        $projects =  DB::table('projects as p')
            ->join('categories as c','p.id_category','=','c.id')
            ->select('p.*','c.name as cate')->get();
        return view('app.project.main',compact('projects','catego'));
    }

    public function single($slug){
        date_default_timezone_set('America/Mexico_city');
        setlocale(LC_TIME, 'es_ES', 'esp_esp');
        $project =  DB::table('projects as p')
            ->join('categories as c','p.id_category','=','c.id')
            ->select('p.*','c.name as cate')
            ->where('p.slug',$slug)->first();
//        $post = Post::where('slug', '=', $slug)->firstOrFail();
        return view('app.project.singlep', compact('project'));
    }
}
