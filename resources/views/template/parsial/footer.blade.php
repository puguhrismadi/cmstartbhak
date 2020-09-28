 <!-- ======= Footer ======= -->
 <footer id="footer">

    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <h2 class="mb-5">Our Team</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle imageteam mb-3" src="{{asset('bluetemplate/img/testimonials-1.jpg')}}" alt="">
              <h5>Margaret E.</h5>
              <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid imageteam rounded-circle mb-3" src="{{asset('bluetemplate/img/testimonials-2.jpg')}}" alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid imageteam rounded-circle mb-3" src="{{asset('bluetemplate/img/testimonials-3.jpg')}}" alt="">
              <h5>Sarah W.</h5>
              <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" data-aos="fade-up">
            <h3>{{ setting('site.title') }}</h3>
            <p>
              {{ setting('site.address_line1') }} <br>
              {{ setting('site.address_line2') }}<br>
              {{ setting('site.address_line3') }} <br><br>
              <strong>Phone:</strong> {{ setting('site.phone') }}<br>
              <strong>Email:</strong> {{ setting('site.email') }}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="100">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="200">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Profesioanl Training</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div id="social-box" class="social-links mt-3">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-skype"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>{{ setting('site.title') }}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('venom-button/venom-button.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('venom-button/venom-button.min.css')}}">
<div id="myDiv"></div>
<script type="text/javascript">
  $(function () {
    $('#myDiv').venomButton({
      phone: '62898253545'
    });
  });

  $('#myDiv').venomButton({
    phone: '62898253545',
    chatMessage: 'Hi ada yang bisa 👋<br><br>Saya Bantu?',
    showPopup: true,
    headerColor: '#E15A2A',
    buttonColor: '#E15A2A',
    position: "Right"
});
</script>
  <!-- Vendor JS Files -->
  <script src="{{ asset('bluetemplate/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('bluetemplate/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('bluetemplate/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('bluetemplate/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('bluetemplate/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('bluetemplate/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('bluetemplate/js/main.js')}}"></script>

</body>

</html>