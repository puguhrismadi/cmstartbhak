@extends('template.index')
@section('title','Registrasi Training / Kursus')

@section('content')

<style>
    body{
        background-color: #efefef;
    }
      #head-course {
        background: #000;
        height: 80px;
        width: 100%;
    }


</style>
<div id="head-course" class="bg-white"></div>
<div class="no-padding bg-blue">
     
    <img width="100%" src="{{asset('image/bgregister.png')}}" alt="">
</div>
<section id="details" class="details">
 <div class="container">

    <div class="card">
   <div class="card-header">
       Sukses Pendaftaran
   </div>
    <div class="card-body">
       
    
            <div class="panel-body">
                sukses
            </div>    
    </div>
         
</div>
</div>
</section>

       

@endsection