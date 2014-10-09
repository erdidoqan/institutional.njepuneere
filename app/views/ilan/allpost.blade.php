<!DOCTYPE html>
<html lang="en">
  <head>
    
@include('partials/header')


  </head>

  <body>
      @include('partials/nav')
  <div class="container">
   <div id="blog" class="row"> 
   <div class="col-sm-12" style="margin-top:30px;">
           @if(Auth::user())
            @include('ilan.postads')
           
           @endif
      </div>
 </div>
  </div>
    @include('partials/scripts')
  </body>
</html>
