

<style>
    
 section.pricing {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
  font-family: 'Poppins', sans-serif;
}

.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
  font-family: 'Poppins', sans-serif;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
  font-family: 'Poppins', sans-serif;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
  font-family: 'Poppins', sans-serif;
  color: #192161;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}
.joinUs {
        background-color: E6EFF9;
        height: 500px;
        
        
    }
h1 {
    font-family: 'Poppins', sans-serif;
    font-color:#192161;
    font-size: 42pt;
}
#btnRegister{
    background-color: #515BA3
}
/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}
</style>
<div class="section-title">
<h2>Materi dan Pricing</h2>
            <p>IT Cermat telah berpengalaman sejak 2015 dalam melakukan Kegiatan pelatihan/Training dengan berbagai
                instansi dan telah bekerjasama dengan instansi pemerintah</p>
</div>
<section class="pricing py-5">
    <div class="container">

       
      <div class="row">
       
         <!-- workshop Tier -->
         <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Workshop</h5>
              <h6 class="card-price text-center">@currency($page->price_workshop)<span class="period"></span></h6>
              <hr>
              <ul class="fa-ul">
                @foreach ($page->materi as $materi)
                
                <li><span class="fa-li"><i class="fa fa-check"></i></span>{{$materi->nama_materi}}</li>
                
                @endforeach
              </ul>
              
            </div>
          </div>
        </div>
        <!-- Reguler Tier -->
        <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Reguler</h5>
              <h6 class="card-price text-center">@currency($page->price_workshop)<span class="period"></span></h6>
              <hr>
              <ul class="fa-ul">
                @foreach ($page->materi as $materi)
                
                <li><span class="fa-li"><i class="fa fa-check"></i></span>{{$materi->nama_materi}}</li>
                
                @endforeach
              </ul>
              
            </div>
          </div>
        </div>
        <!-- Pro Tier -->
       
         <div class="col-lg-4">
          <div class="card mb-5 mb-lg-0">
            <div class="card-body">
              <h5 class="card-title text-muted text-uppercase text-center">Advance</h5>
              <h6 class="card-price text-center">@currency($page->price_reguler)<span class="period"></span></h6>
              <hr>
              <ul class="fa-ul">
                @foreach ($page->materi as $materi)
                
                <li><span class="fa-li"><i class="fa fa-check"></i></span>{{$materi->nama_materi}}</li>
                
                @endforeach
              </ul>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
      <div class="container-fluid joinUs ">
        <br>
        <br>
         <div align="center" class="container text-center">
            <h1 data-aos="fade-up" data-aos-delay="100" style="font-weight: bolder">Join Our Training </h1>
            <p data-aos="fade-up" data-aos-delay="200" style="color: cornflowerblue">Segera Daftarkan dirimu</p>
            <br>
            <a data-aos="fade-down" data-aos-delay="300" id='btnRegister' class="btn-lg btn-primary" href="#">Register</a>
            <br>
            <br>
          
          <img data-aos="fade-down" data-aos-delay="400" class="mx-auto d-block" width="600px" src="{{url('image/bgJoinUs.png')}}" alt="">
         </div>
      </div>
  