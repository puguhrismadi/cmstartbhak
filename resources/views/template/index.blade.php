
@include('template.parsial.header')
  @if (url('/'))
      @include('template.parsial.heroslider')
  @endif
    <div class="inner-page">
      <div class="main">
        
          @yield('content')
        
      </div>
    </div>


 @include('template.parsial.footer')