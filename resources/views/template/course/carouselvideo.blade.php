<style>
   .col-md-4{
  display: inline-block;
  margin-left:-10px;
}
.col-md-4 img{
  width:100%;
  height:auto;
}
  
body .carousel-control-prev-icon,
body .carousel-indicators li,
body .carousel-control-next-icon{
  background-color:#000;
}

span.carousel-control-prev-icon {
 position: relative;
 bottom: 40px;
 right: 40px;
}

span.carousel-control-next-icon {
 position: relative;
 bottom: 40px;
}

</style>
<section class="section-title">
    <h2>Video Kegiatan IT Cermat</h2>
    <p>Berikut adalah Video Kegiatan Training yang pernah kami laksanakan </p>
</section>

<div class="container">
  
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators mb-0 pb-0">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    {{-- <li data-target="#demo" data-slide-to="2"></li> --}}
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner no-padding my-5">
   
    <div class="carousel-item active">
        @foreach ($video as $key=>$myvideo)
        @if ($key<=3)
      <div class="col-xs-4 col-sm-4 col-md-4">
        <a href="#" data-image-id="" data-toggle="modal" data-title="{{$myvideo->nama_kegiatan}}"
                   
          data-image="https://www.youtube.com/embed/{{$myvideo->file_video}}"

          data-target="#image-gallery" class="slider_info">
          <img class="img-fluid card-img-top" src="{{Voyager::image($myvideo->thumbnail_video)}}">
          <div class="card-img-overlay t_img">
            
          </div>
        </a>
       

      </div>
      @endif
      @endforeach
    </div>
    
    <div class="carousel-item">
      @foreach ($videourl as $key=>$video)
          
      @if ($key>3)
      <div class="col-xs-4 col-sm-4 col-md-4">
        <a  class="slider_info" href="#" data-image-id="" data-toggle="modal" data-title="{{$video->nama_kegiatan}}"
                   
          data-image="https://www.youtube.com/embed/{{$video->file_video}}"

          data-target="#image-gallery">
          <img class="img-fluid card-img-top" src="{{Voyager::image($video->thumbnail_video)}}">
          <div class="card-img-overlay t_img">
          
          </div>
        </a>
        

      </div>
      @endif
      @endforeach
      
    </div>
    
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
     <span class="carousel-control-prev-icon sp"></span>
                </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon sp"></span>
                </a>
</div>
{{-- modal --}}

<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="image-gallery-title"></h4>
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
              </button>
          </div>
          <div class="modal-body text-center">
              {{-- <img id="image-gallery-image" class="img-responsive col-md-12" src=""> --}}
              <iframe id="image-gallery-image" width="760" height="410" src="https://www.youtube.com/embed/NL49VlLekpM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
              </button>

              <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
              </button>
          </div>
      </div>
  </div>
</div>
{{-- end modal  --}}
</div>
