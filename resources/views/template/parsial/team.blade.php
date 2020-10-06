<div class="footer-newsletter" data-aos="fade-up">
    <div class="container">
      <h2 class="mb-5">Our Team</h2>
      <div class="row center-block">
        @foreach ($team as $tm)
            
        
        <div class="col-lg-3 ">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle imageteam mb-3" src="{{ Voyager::image( $tm->gambar) }}" alt="">
            <h5>{{$tm->nama_team}}</h5>
            <p class="font-weight-light mb-0"><b>{{$tm->role_job}}</b><br>{{$tm->description}}</p>
            <br>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>