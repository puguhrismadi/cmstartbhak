@extends('template.index')
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

</style>
<div id="head-course" class="bg-white"></div>
    <div class="no-padding bg-blue">
     
        <img width="100%" src="{{Voyager::image("$page->header_page")}}" alt="">
    </div>
  
<div class="main">
    <div class="container"><br></div>
    <!-- ======= App Features Section ======= -->
<div class="card container" data-aos="fade-up">
    <div class="card-body">
    <section id="features" class="features">
        <div class="container">

            <div class="section-title">
                <h2>{{$page->title}}</h2>
                <p><b>Kursus ini cocok untuk</b> {{$page->target_peserta}}</p>
               
            </div>

            <div class="row no-gutters">
                <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row col-md-10">
                            <h5>Peluang Karir</h5>
                            <p>Setelah mengikuti kursus ini {{$page->peluang_karir}}</p>

                           {!!$page->body!!}
                           <h5>Persyaratan</h5>
                           <p>{{$page->persyaratan}}</p>

                           
                        </div>
                    </div>
                </div>
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2"
                    data-aos="fade-left" data-aos-delay="100">
                    <img src="{{Voyager::image($page->image)}}" class="img-fluid" alt="">
                </div>
            </div>
            <h2>Materi dan Pricing</h2>
            <p>IT Cermat telah berpengalaman sejak 2015 dalam melakukan Kegiatan pelatihan/Training dengan berbagai
                instansi dan telah bekerjasama dengan instansi pemerintah</p>
                @include('template.parsial.pricingtable')
        </div>
    </section><!-- End App Features Section -->
</div>
</div>
   

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
    <div class="container">

        <div class="section-title">
            
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up">

          
        </div>

    </div>
</section><!-- End Gallery Section -->


<div class="container">
    <br>
</div>
@endsection
