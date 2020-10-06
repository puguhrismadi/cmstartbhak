<div class="container">
    @foreach($pages as $key=>$fpages)
    {{-- {{ $key }} --}}
      <div class="row content">
        <div  @if ($key%2==0) class="col-md-4"
        data-aos="fade-right"	
        @endif @if ($key%2!=0)
        class="col-md-4 order-1 order-md-2"
        data-aos="fade-left"
        @endif >
          <img src="{{ Voyager::image( $fpages->image ) }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-8 pt-4" data-aos="fade-up">
          <h3>{{ $fpages->title }}</h3>
        
          <div>
            <p>
            {!! $fpages->body !!}
           
           </p>
            <nav class="nav-menu">
            <ul>
                <li class="get-started" ><a href="#">Register Now</a></li>
                <li class="get-started" ><a href="{{url("course/$fpages->slug")}}">Learn More</a></li>
            </ul>
            </nav>
          </div>
        </div>
      </div>
    @endforeach

    </div>
    