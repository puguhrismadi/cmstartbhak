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
              {{-- @dump($menufooter) --}}
             @foreach ($menufooter as $link)
                  
              
              <li><i class="bx bx-chevron-right"></i> <a href="{{url("course/$link->slug")}}">{{$link->title}}</a></li>
              @endforeach 

              
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="300">
            <h4>Our Social Networks</h4>
            <p>Sosial Media Kami untuk informasi mengenai kami</p>
            <div id="social-box" class="social-links mt-3">
              <a href="{{ setting('site.urlTwitter') }}" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="{{ setting('site.urlFb') }}" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="{{ setting('site.urlGram') }}" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="{{ setting('site.urlYoutube')}}" class="youtube"><i class="fa fa-youtube"></i></a>
              <a href="{{ setting('site.urlLinkedin') }}" class="linkedin"><i class="fa fa-linkedin"></i></a>
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
  <script src="{{ asset('bluetemplate/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('bluetemplate/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  {{-- <script src="{{ asset('bluetemplate/vendor/php-email-form/validate.js')}}"></script> --}}
  <script src="{{ asset('bluetemplate/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('bluetemplate/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{ asset('bluetemplate/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('bluetemplate/js/main.js')}}"></script>
<script>
  let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });

//carousel course


$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});

</script>


</body>

</html>