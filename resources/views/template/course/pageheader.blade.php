
   
   <!-- ======= Hero Section ======= -->
   <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1 style="color:black">{{setting('site.big_headline')}}</h1>
            <h5>{{setting('site.sub_title_headline')}}</h5>
            <br>
            <a href="{{setting('site.link_button_headline')}}" class="download-btn"><i class="fa fa-play"></i>More About Us</a>
            
          </div>
        </div>
        <div class="col-lg-6 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
          <img src="{{Voyager::image($page->image)}}" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->
  <div class="container"><br><br></div>