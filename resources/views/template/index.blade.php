
@include('template.parsial.header')
  @if (url('/'))
      @include('template.parsial.heroslider')
  @endif
    <div class="inner-page">
      <div class="main">
        <div class="container">
          @yield('content')
        </div>
      </div>
    </div>


 @include('template.parsial.footer')