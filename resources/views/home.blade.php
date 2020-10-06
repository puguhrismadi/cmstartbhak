@extends('template.index')
@section('title','Homepage')

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

</style>
<div class="main">
    <div class="container"><br></div>
    <!-- ======= App Features Section ======= -->
    <section id="features" class="features">
        <div class="container">

            <div class="section-title">
                <h2>{{$fiture->title_feature}}</h2>
                <p>{{$fiture->description}}.</p>
            </div>

            <div class="row no-gutters">
                <div class="col-xl-7 d-flex align-items-stretch order-2 order-lg-1">
                    <div class="content d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-md-6 icon-box" data-aos="fade-up">
                                <i class="fa fa-folder-o"></i>
                                <h4>{{$fiture->title_feature_1}}</h4>
                                <p>{!! $fiture->feature_1 !!}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="fa fa-heart-o"></i>
                                <h4>{{$fiture->title_feature_2}}</h4>
                                <p>{!! $fiture->feature_2 !!}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="fa fa-hourglass-o"></i>
                                <h4>{{$fiture->title_feature_3}}</h4>
                                <p>{!! $fiture->feature_3 !!}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                <i class="fa fa-shield"></i>
                                <h4>{{$fiture->title_feature_4}}</h4>
                                <p>{!! $fiture->feature_4 !!}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="fa fa-paper-plane-o"></i>
                                <h4>{{$fiture->title_feature_5}}</h4>
                                <p>{!! $fiture->feature_5 !!}</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                                <i class="fa fa-share-alt"></i>
                                <h4>{{$fiture->title_feature_6}}</h4>
                                <p>{!! $fiture->feature_6 !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image col-xl-5 d-flex align-items-stretch justify-content-center order-1 order-lg-2"
                    data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ asset('bluetemplate/img/features.svg')}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- End App Features Section -->

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
        @include('template.parsial.homeoriginal')
        {{-- <div class="container ">{{$pages->links()}}
</div> --}}
</section><!-- End Details Section -->

<!-- ======= Gallery Section ======= -->
<section id="gallery" class="gallery">
    <div class="container">

        <div class="section-title">
            <h2>Gallery Kegiatan</h2>
            <p>IT Cermat telah berpengalaman sejak 2015 dalam melakukan Kegiatan pelatihan/Training dengan berbagai
                instansi dan telah bekerjasama dengan instansi pemerintah</p>
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up">

            @foreach($posts as $post)
            <a href="{{ Voyager::image( $post->image ) }}" class="venobox" data-gall="gallery-carousel"><img
                    src="{{ Voyager::image( $post->image ) }}" class="center-cropped" alt="">
                <h5 class="text-small text-center ">{{ $post->title }}</h5>
            </a>

            @endforeach
        </div>

    </div>
</section><!-- End Gallery Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Testimonials</h2>
            <p> Testimoni dari alumni sukses yang telah mengikuti Training di IT Cermat </p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up">
@foreach ($testimoni as $testimo)
 
            <div class="testimonial-wrap">
                <div class="testimonial-item">
                    <img src="{{ Voyager::image("$testimo->gambar")}}" class="testimonial-img"
                        alt="">
                    <h3>{{$testimo->nama}}</h3>
                    <h4>{{$testimo->nama_instansi}}</h4>
                    <p>
                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                        {{$testimo->Testimoni}}
                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    </p>
                </div>
            </div>
   
 @endforeach
           

        </div>

    </div>
</section><!-- End Testimonials Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contact</h2>
            <p</p> </div> <div class="row">

                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 info" data-aos="fade-up">
                            <i class="bx bx-map"></i>
                            <h4>Address</h4>
                            <p>{{setting('site.address_line1')}},
                                {{setting('site.address_line2')}},{{setting('site.address_line3')}}</p>
                        </div>
                        <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-phone"></i>
                            <h4>Call Us</h4>
                            <p>{{setting('site.phone')}}</p>
                        </div>
                        <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-envelope"></i>
                            <h4>Email Us</h4>
                            <p>{{setting('site.email')}}</p>
                        </div>
                        <div class="col-lg-6 info" data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-time-five"></i>
                            <h4>Working Hours</h4>
                            <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                   <form action="{{url('/simpanbukutamu')}}" method="post"  class="php-email-form">
                  
                {{-- <form action="#" method="post" role="form" class="php-email-form" data-aos="fade-up"> --}}
                        @csrf
                        <div class="form-group">
                            <input placeholder="Your Name" type="text" name="name" class="form-control" id="name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input placeholder="Your Email" type="email" class="form-control" name="email" id="email"
                                data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <textarea placeholder="Message" class="form-control" name="message" rows="5"
                                data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            @if(session()->has('pesan'))
        <div class="alert alert-success">{{ session()->get('pesan') }}</div>
   @endif
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

        </div>

    </div>
</section><!-- End Contact Section -->
<div class="container">
    <br>
</div>
@endsection
@section('team')
    @include('template.parsial.team')
@endsection
@section('heroslider')
    @include('template.parsial.heroslider')
@endsection