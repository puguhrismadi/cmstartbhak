 <!-- ======= Footer ======= -->
 <footer id="footer">
  @yield('team')
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
              {{menu('homepage')}}
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
            <p>Sosial Media Kami untuk informasi mengenai kami</p>
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
     
    </div>
  </footer><!-- End Footer -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('venom-button/venom-button.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('venom-button/venom-button.min.css')}}">
<div id="myDiv"></div>
<script type="text/javascript">
  $(function () {
    $('#myDiv').venomButton({
      phone: '62811886762'
    });
  });

  $('#myDiv').venomButton({
    phone: '62811886762',
    chatMessage: 'Hi ada yang bisa 👋<br><br>Saya Bantu?',
    showPopup: true,
    headerColor: '#E15A2A',
    buttonColor: '#4ac959',
    position: "right"
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