<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Page;
use App\Models\Templatefeature;
use App\Models\Team;
class HomeController extends Controller
{
    public function index(){
        $posts = Post::all();
        $pages = Page::paginate(2);
        $fiture = Templatefeature::find(1);
        $team = Team::all();
        $data = ['posts'=>$posts,'pages'=>$pages,'fiture'=>$fiture,'team'=>$team];
        return view('home', $data);
    }
}
