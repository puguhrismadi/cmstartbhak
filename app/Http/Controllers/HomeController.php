<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Page;
use App\Models\Templatefeature;
class HomeController extends Controller
{
    public function index(){
        $posts = Post::all();
        $pages = Page::paginate(2);
        $fiture = Templatefeature::find(1);
        $data = ['posts'=>$posts,'pages'=>$pages,'fiture'=>$fiture];
        return view('home', $data);
    }
}
