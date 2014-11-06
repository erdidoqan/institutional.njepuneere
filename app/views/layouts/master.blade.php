<!DOCTYPE html>
<html lang="en">
  <head>
    
@include('partials/header')


  </head>

  <body>
      @include('partials/nav')
  <div class="container">
   <div id="blog" class="row"> 
   <div class="col-sm-4" style="margin-top:30px;">
            @include('partials/sidebar')
         </div>
        <div class="col-md-8 blogShort" style="margin-top:30px;">

            @yield('content')

        </div>

 </div>
  @if(!Auth::user())
  <div class="col-sm-12">
  
    <div class="alert alert-warning" role="alert">
        Here must be <a href="./SirketGiris">logged in </a>to see this site.
    </div>
  </div>
@endif
  </div>
    @include('partials/scripts')
    @include('partials/footer')
  </body>
</html>
