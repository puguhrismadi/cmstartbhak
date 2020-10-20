
<style>
    #headline {
        color:black;
    }
</style>
@include('template.parsial.header')
@include('template.course.pageheader')
  <div class="inner-page">
    <div class="main">
      
        @yield('content')
      
    </div>
  </div>


@include('template.parsial.footer')