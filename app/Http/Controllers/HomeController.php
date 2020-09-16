<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Page;
class HomeController extends Controller
{
    public function index(){
        $posts = Post::all();
        $pages = Page::all()->take(3);
        $data = ['posts'=>$posts,'pages'=>$pages];
        return view('home', $data);
    }
}
