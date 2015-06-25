

<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials/header')
    </head>
    <body>
        @include('partials/nav')
            
        <div class="container">
          <div class="row">
            <div class="col-sm-2" style="margin-top:40px;">
              @include('sirket/side')
            </div>
            <div class="col-sm-8" style="margin-top:60px;">
                @yield('content')
            </div>
            <div class="col-sm-2" style="margin-top:60px;">
              <div class="panel panel-primary">
                <div class="panel-heading">
                                <div class="panel-title">Detail</div>
                            </div> 
                  <div class="panel-body">
                    <div class="alert alert-success">
                    Activated by admin
                    </div>
                    <div class="dropdown">
              <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary btn-block" data-target="#" href="javascript:void(0);"> Process for ADS <span class="caret"></span> </a>
              <ul class="dropdown-menu multi-level" role="menu">
                <li>
                  <a href="javascript:void(0);">Some action</a>
                </li>
                <li>
                  <a href="javascript:void(0);">Some other action</a>
                </li>
                
              </ul>
            </div>
                </div>
            </div>
          </div>
        </div>
        </div>
        @include('partials/footer')
    </body>
</html>

