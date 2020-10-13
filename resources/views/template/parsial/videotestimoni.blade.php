<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <style>
   .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}

 </style>


    <!-- Page Content -->
    <br>
   <div class="container page-top">

    <div class="section-title">
        <h2>Galery Video Kegiatan IT Cermat</h2>
        <p>Bagaimana Kegiatan Training Di IT Cermat Cek Video Kegiatan Di bawah</p>
       
    </div>
    <div class="container">
        <div class="row">
            <div class="row">
               
                @foreach ($video as $testvideo)
               
                <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                    <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="{{$testvideo->nama_kegiatan}}"
                   
                       data-image="https://www.youtube.com/embed/{{$testvideo->file_video}}"

                       data-target="#image-gallery">
                        <img class="img-thumbnail"
                             src="{{Voyager::image($testvideo->thumbnail_video)}}"
                             alt="Another alt text">
                    </a>
                   <div class="section-title">{{$testvideo->nama_kegiatan}}</div>
                </div>
                @endforeach
            </div>
    
    
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
        </div>
    </div>
   </div>