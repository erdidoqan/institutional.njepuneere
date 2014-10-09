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
            @include('partials/ilan')
            @include('ilan/form')


           @endif
    @if(!Auth::user())
      <div class="col-sm-12">
        <div class="alert alert-warning" role="alert">
            Here must be <a href="./SirketGiris">logged in </a>to see this site.
        </div>
      </div>
    @endif
      </div>
 </div>
  </div>
    @include('partials/scripts')
  </body>
</html>
