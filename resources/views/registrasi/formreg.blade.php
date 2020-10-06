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
<div class="no-padding bg-blue" data-aos="fade-up">
     
    <img width="100%" src="{{asset('image/bgregister.png')}}" alt="">
</div>
<section id="details" class="details">
 <div class="container" data-aos="fade-up">

    <div class="card">
   <div class="card-header">
       Form Registrasi Training
   </div>
    <div class="card-body" >
        <form role="form" class="form-edit-add" action="{{route("simpanpeserta")}}" method="POST"
            enctype="multipart/form-data">
            <!-- PUT Method if we are editing -->
    
            <!-- CSRF TOKEN -->
            @csrf
    
            <div class="panel-body"  >
    
    
                <!-- Adding / Editing -->
    
                <!-- GET THE DISPLAY OPTIONS -->
    
                <div class="form-group  col-md-12 ">
    
                    <label class="control-label" for="name">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="">
    
    
                </div>
                <!-- GET THE DISPLAY OPTIONS -->
    
                <div class="form-group  col-md-12 ">
    
                    <label class="control-label" for="name">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email" value="">
    
    
                </div>
                <!-- GET THE DISPLAY OPTIONS -->
    
                <div class="form-group  col-md-12 ">
    
                    <label class="control-label" for="name">Phone</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="">
    
    
                </div>
                <!-- GET THE DISPLAY OPTIONS -->
    
                <div class="form-group  col-md-12 ">
    
                    <label class="control-label" for="name">Kategori Training</label>
                    <select class="form-control" name="jenis_training">
                        @foreach ($kategori as $ktg)
                        <option value="{{$ktg->id}}">{{$ktg->nama_kategori_training}}</option>
                        @endforeach
                        
    
                    </select>
    
    
                </div>
                <!-- GET THE DISPLAY OPTIONS -->
    
                <div class="form-group  col-md-12 ">
    
                    <label class="control-label" for="name">Pilihan Waktu Training</label>
                    <select class="form-control" name="training"
                        aria-hidden="true">
                        @foreach ($jadwal as $jadwal)
                        <option value="{{$jadwal->id}}">{{$jadwal->nama_event}} </option>
                        @endforeach
                        
    
                    </select>
    
    
    
    
    
                </div>
    
            </div><!-- panel-body -->
    
            <div class="panel-footer">
                <button type="submit" class="btn btn-primary save">Simpan</button>
            </div>
        </form>
    </div>
         
</div>
</div>
</section>

       

@endsection