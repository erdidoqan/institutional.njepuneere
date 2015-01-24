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
                @yield('content')
            </div>
          </div>
        </div>
        @include('partials/footer')
    </body>
</html>
