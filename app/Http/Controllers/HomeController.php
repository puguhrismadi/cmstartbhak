<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Page;
use App\Models\Templatefeature;
use App\Models\Team;
use App\Models\Guestbook;
use App\Models\Materi;
use App\Models\Kategoritraining;
use App\Models\Jadwaltraining;
use App\Models\Registrasitraining;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    
    public function  menuFooter(){
       return  $menufooter =Page::select('title','slug')->where('featured','1')->get();
    }
    
    public function index(){
        $posts = Post::all();
        $pages = Page::where('featured',1)->get();
        $fiture = Templatefeature::find(1);
        $team = Team::all();
        $testimoni = Testimonial::all();
        
        $data = ['posts'=>$posts,'pages'=>$pages,'fiture'=>$fiture,'team'=>$team,'testimoni'=>$testimoni,'menufooter'=>$this->menuFooter()];
        return view('home', $data);
    }
    public function simpanBukuTamu(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required',
            'subjek'=>'required',
            'message'=>'required',
        ]);
       
        $bukutamu = new Guestbook;
        $bukutamu->name=$validatedData['name'];
        $bukutamu->email=$validatedData['email'];
        $bukutamu->subjek=$validatedData['subjek'];
        $bukutamu->message=$validatedData['message'];
        $bukutamu->save();

        //return "Data Berhasil Di simpan Ke database";
        $request->session()->flash('pesan',"Pesan anda sudah tersimpan ke database $bukutamu->name ");
        return redirect('/');
    }
    public function course($slug){
        $page = Page::where('slug', '=', $slug)->firstOrFail();
        $idmateri = Page::select('id')->where('slug','=',$slug)->get();
        $materi = Materi::all();
        $video = Video::where('archieved',1)->get();
        $videourl = Video::where('archieved',1)->get();
        $urlyutube=[];
        

        return view('template.parsial.course',['page'=>$page,'materi'=>$materi,'video'=>$video,'urlvideo'=>$urlyutube,'menufooter'=>$this->menuFooter()]);
    }
    public function about(){
        $page = Page::find(5);
        $video = Video::where('archieved',1)->get();

        return view('template.parsial.about',['page'=>$page,'menufooter'=>$this->menuFooter(),'video'=>$video]);
    }
    public function simpanPeserta(Request $request){
        $validatedData = $request->validate([
            'nama'=>'required',
            'email'=>'required|email',
            'phone'=>'',
            'training'=>'required',
            'jenis_training'=>'required'
        ]);
        $peserta = new Registrasitraining;
        $peserta->nama = $validatedData['nama'];
        $peserta->email = $validatedData['email'];
        $peserta->phone = $validatedData['phone'];
        $peserta->training =$validatedData['training'];
        $peserta->jenis_training = $validatedData['jenis_training'];
        $peserta->save();
        return view('registrasi.sukses');
    }
    public function formDaftarTraining(){
        $kategori=Kategoritraining::all();
        $jadwal=Jadwaltraining::all();
        return view('registrasi.formreg',['kategori'=>$kategori,'jadwal'=>$jadwal]);
    }
}
