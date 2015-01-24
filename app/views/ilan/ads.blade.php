<!DOCTYPE html>
<html lang="en">
  <head>
    
@include('partials/header')


  </head>

  <body>
      @include('partials/nav')
  <div class="container">
   <div id="blog" class="row"> 
   <div class="col-sm-12" style="margin-top:70px;">
          
            @include('partials/ilan')
            @include('ilan/form')

      </div>
 </div>
  </div>
  @include('partials/footer')
    @include('partials/scripts')
  </body>
</html>
