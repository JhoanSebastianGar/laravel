<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }
    public function blog(){
        // Trae todos los registros de la base de datos
        //$posts=Post::get();
        $posts=Post::latest()->paginate();
        /*
        $posts=[['id'=>1, 'title'=>'PHP', 'slug'=>'php1'],
        ['id'=>2, 'title'=>'OTRO', 'slug'=>'php2']];
       */
      return view('blog',['posts'=>$posts]);
    }
    public function post(Post $post){
        //$post=$slug;
        return view('post',['post'=>$post]);
    }

}
