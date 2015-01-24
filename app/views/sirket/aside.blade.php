        <div class="col-sm-2" style="margin-left: -15px;">
            <a href="/" class="btn btn-xlarge {{ Request::path() == '/' ? 'active' :'' }}">
                <i class="glyphicon glyphicon-home fa-4x"></i><br>My Page </a>
        </div>
        <div class="col-sm-2" style="margin-left: 37px;">
            <a href="/Ads" class="btn btn-xlarge {{ Request::path() == 'my-resume' ? 'active' : '' }}">
                <i class="glyphicon glyphicon-book fa-4x"></i><br>Create Jobs </a>
        </div>

        <div class="col-sm-2" style="margin-left: 37px;">
            <a href="/apply" class="btn btn-xlarge {{ Request::path() == 'apply' ? 'active' : '' }}">
                <i class="glyphicon glyphicon-ok fa-4x"></i><br>Who Apply to ADS</a>
        </div>

        <div class="col-sm-2" style="margin-left: 37px;">
            <a href="/pre-written" class="btn btn-xlarge {{ Request::path() == 'pre-written' ? 'active' : ''}}">
                <i class="glyphicon glyphicon-list-alt fa-4x"></i><br>All Ads </a>
        </div>

        <div class="col-sm-2" style="margin-left: 37px;">
            <a href="/message" class="btn btn-xlarge {{ Request::path() == 'message' ? 'active' : '' }}">
                <i class="glyphicon glyphicon-envelope fa-4x"></i><b class="badge alert-danger" style="margin-left:-25px;margin-bottom:-10px;padding: 7px 9px;">0/5</b><br>My Message </a>
        </div>
