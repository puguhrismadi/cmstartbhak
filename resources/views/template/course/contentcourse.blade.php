@extends('template.course.main')
@section('title','Course')
@section('content')
<style>
    .center-cropped {

        height: 150px;
        width: 100px;
        background-position: center center;
        background-repeat: no-repeat;
        padding: 2pt;
    }

    .caption-1 figcaption {
        position: absolute;
        bottom: 0;
        right: 0;
    }

    .caption-2 figcaption {
        width: 80%;
        position: absolute;
        bottom: 1rem;
        left: 10%;
        background: rgba(255, 255, 255, 0.6);
    }

    .caption-3 figcaption {
        position: absolute;
        bottom: 0;
        right: 0;
        transform: translateY(-50%);
    }

    .container-fluid {
        background-color: #ECF3FB;
    }


    .border-md {
        border-width: 2px !important;
    }

    .separator {
        border-bottom: 1px dashed #aaa;
    }

    .text-small {
        font-size: 0.85rem;
    }

    #head-course {
        background: #000;
        height: 80px;
        width: 100%;
    }

    .menara {
        text-align: center;
        width: 1130px;
        position: absolute;
        
    }
    .chatRightAtas {
        margin-top: 180px;
        
        background-image: url("{{asset('image/chat_atas_kanan_baru.png')}}");
        height: 400px;
        background-size: cover;
        
    }
    .chatRightBawah {
        margin-top: 200px;
        
        background-image: url("{{asset('image/chat_bawah_kanan_baru.png')}}");
        height: 320px;
        background-size: cover;
        
    }
    .chatLeft {
        
        margin-left: 30px;
        margin-right: 780px;
        margin-top: 120px;
        background-image: url("{{asset('image/bg_chat_kiri.png')}}");
        height: 500px;
        background-size:cover;
        
    }
    .contentChat{
        padding-left: 30px;
        margin:50px;
    }
    .contentChatBawah{
        margin-top: 30px;
        margin-left: 70px;
        margin-bottom:100px;
    }
    .pemisahMenara {
       
    }
 ul{
    list-style-type: none;
    margin-left: 0pt;
 }
</style>


<!-- ======= App Features Section ======= -->
<div class="container-fluid" data-aos="fade-up">
    <div class="card-body">
        <section id="features" class="features">
            <div class="container">

                <div class="section-title">
                    <h2>{{$page->title}}</h2>
                    <p><b>Kursus ini cocok untuk</b> {{$page->target_peserta}}</p>

                </div>

                <div class="row no-gutters">
                    <div class="col-xl-7 d-flex align-items-stretch order-1 order-lg-1">
                        <div class="content d-flex flex-column justify-content-center">
                           &nbsp;
                         
                        </div>
                    </div>
                    <div class="chatRightAtas image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-1"
                        data-aos="fade-right" data-aos-delay="100">
                        <div class="contentChat">
                            <div><i style="font-size: 45pt" class="fa fa-rocket"></i></div>
                            <br>
                            <h4>Peluang karir</h4>
                            <p>{{$page->peluang_karir}} </p>
                         
                        </div>
                    </div>
                    
                    <div class="image chatLeft col-xl-5 d-flex align-items-stretch justify-content-center order-2 order-lg-1"
                    data-aos="fade-left" data-aos-delay="100">
                    <div class="contentChat">
                        <div><i style="font-size: 45pt" class="fa  fa-check-square-o"></i></div>
                            <br>
                    <h4>Persyaratan</h4>
                    <p>{!!$page->persyaratan!!} </p>
                    </div> 
                </div>
               
                <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-2">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row col-md-10">
                            &nbsp;

                            
                        </div>
                    </div>
                </div>

                

                
                    <div class="image chatRightBawah col-xl-5 d-flex align-items-stretch order-1 order-lg-2"
                        data-aos="fade-right" data-aos-delay="100">
                        <div class="contentChatBawah">
                            <div><i style="font-size: 45pt" class="fa  fa-institution"></i></div>
                            <br>
                             
                            <h4>Fasilitas</h4>
                             <i class="fa fa-check"> </i> Modul Digital <br>
                                <i class="fa fa-check"> </i> Sertifikat <br>
                                <i class="fa fa-check"> </i> Ruangan Full AC <br>
                                <i class="fa fa-check"> </i> Akses Internet<br>
                                <i class="fa fa-check"> </i> Lunch dan Snack
                            
                            </div> 
                        
                    </div>
                    
                    
                    <div class="col-xl-7 d-flex align-items-stretch order-3 order-lg-3">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row col-md-10">
                                &nbsp;
                              
                               
                              

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch order-3 order-lg-3">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row col-md-10">
                             
                              

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-stretch order-4 order-lg-3">
                        <div class="content d-flex flex-column justify-content-center">
                            <div class="row col-md-10">
                                &nbsp;
                         
                              

                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        


                        <div class="menara ">
                            
                          <img  src="{{asset('image/menara_atas_baru.png')}}" class="img-fluid" alt=""> 
                            <img src="{{asset('image/menara_tengah_baru.png')}}" class="img-fluid" alt="">
                           
                            <img src="{{asset('image/menara_bawah_baru.png')}}" class="img-fluid" alt=""> 
                        </div>
                    </div>

                </div>


            </div>
        </section><!-- End App Features Section -->
    </div>
</div>
{{-- <div class="container">
    @include('template.component.chatstyle')
</div> --}}
@include('template.course.carouselvideo')
{{-- @include('template.course.videoslider') --}}
@include('template.component.pricingcard')

@endsection
