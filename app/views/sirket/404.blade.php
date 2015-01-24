
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials/header')
    </head>
    <body>
        @include('partials/nav')
            
        <div class="container">
          <div class="row">
            <div class="col-sm-12" style="margin-top:70px;">
                @include('sirket/aside')
            </div>
          </div>
          <div class="row">
            <div class="col-sm-2">
              @include('sirket/side')
            </div>
            <div class="col-sm-10">
                <div class="container">
        <div class="col-sm-8">
          <div class="error-template">
            <h1>Oops!</h1><h2>404 Not Found</h2>
            <div class="error-details">
                Sorry, an error has occured, Requested page not found!
            </div>
            <div class="error-actions">
              <a href="/" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-home"></span> Take Me Home </a>
              <a href="{{URL::previous()}}" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-arrow-left"></span></a>
                @if(!Auth::user())
                  <a href="/BireyGiris" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span> To Login </a>
                  <a href="/BireyKayit" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-user"></span> To Register </a>
                @endif
            </div>
          </div>
        </div>
      </div>
            </div>
          </div>
        </div>
        @include('partials/footer')
    </body>
</html>


