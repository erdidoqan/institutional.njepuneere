    <div class="container">
    <div><a href="./">
    <img src="/img/logo.png"></a>
    
    </div>
    </div>
    <nav  class="navbar navbar-default navbar-static-top" role="navigation">
   	<div class="container">

      <div class="btn-header pull-left">
			<span> <a href="/" title="Collapse Menu"> <i class="fa fa-home"></i></a> </span>
		</div>

      <div class="project-context hidden-xs">
        <span class="label">Ads</span>
        <a class="project-selector" style="text-decoration: none;" href="./postads"> Posting Ads<i class="fa fa-angle-right"></i></a>
      </div>
      <!-- #PROJECTS: projects dropdown -->
      <div class="project-context hidden-xs">

        <span class="label">Career</span>
        <span class="project-selector dropdown-toggle"  data-toggle="dropdown"> My Career<i class="fa fa-angle-down"></i></span>
        <ul class="dropdown-menu">
          <li><a href="/my-resume">My Resume</a></li>
          <li><a href="/my-application">My Application</a></li>
          <li><a href="/pre-written">My Pre-Written</a></li>
          <li><a href="javascript:void(0);">My Message</a></li>
          <li class="divider"></li><li><a href="javascript:void(0);"><i class="fa fa-file-pdf-o"></i> File (PDF)</a></li>
        </ul>
      </div>
      
      <div class="pull-right" style="margin-right:15px;">
        @if(Auth::user())
        <div id="logout" class="btn-header transparent pull-right">
          <span> <a href="logout" title="Sign Out" data-action="userLogout" data-logout-msg="Goodbye, {{ ucwords(Auth::user()->name)." ".ucwords(Auth::user()->sname) }}..."><i class="fa fa-sign-out"></i></a> </span>
        </div>

        <div class="btn-header pull-right">
			<span> <a href="javascript:void(0);" title="Messages"> <i class="fa fa-envelope"></i> <i class="badge bg-color-red" style="color:white"> 5 </i> </a> </span>
		</div>

        <div class="btn-header pull-right">
			<span> <a href="javascript:void(0);" title="Applicant"> <i class="fa fa-globe"></i> <i class="badge bg-color-red" style="color:white"> {{$noti_app}} </i> </a> </span>
		</div>

        <div class="pull-right" id="nav-isim">
          <span>{{ ucwords(Auth::user()->name)." ".ucwords(Auth::user()->sname) }},</span> <a href="#" style="text-decoration: none;"> Membership Information</a>
          
        </div>

        
        @endif
        <!-- end fullscreen button -->

        <!-- multiple lang dropdown : find all flags in the flags page -->
        
        <!-- end multiple lang -->

      </div>
      <!-- end pulled right: nav area -->
</div>
    </nav>