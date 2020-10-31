
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