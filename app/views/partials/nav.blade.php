
<nav class="navbar navbar-default" id="navbar">
  <div class="container">
    <div class="turgittin">
      <div class="project-context hidden-xs">
        <span id="logo"><a href="/"> <img src="/img/logo.png" alt="Njepuneere logo"> </a></span>
      </div>
    </div>
    <div id="erds" class="erds" data-spy="affixed-top.bs.affix" data-offset-top="600">
      
    </div>
    <div class="pull-right">
      @if(!Auth::user())
      <a href="http://njepuneere.com" class="btn btn-success header-btn"><i class="fa fa-circle-arrow-up fa-lg"></i> Njepuneere</a>
      @endif

      @if(Auth::user())
      <div class="turgittin">
        <div class="project-context pull-right">
          <span> <a class="text-danger ext" href="/logout" title="Sign Out" data-action="userLogout" data-logout-msg="Goodbye, {{ ucwords(Auth::user()->name)." ".ucwords(Auth::user()->sname) }}..."><i class="fa fa-sign-out"></i></a> </span>
        </div> 

        <div class="project-context pull-right">
          <span><a href="/user-up" class="text-successi" data-toggle="tooltip" data-placement="right" title="Tooltip on left">{{ ucwords(Auth::user()->com_name) }}</a></span>
        </div>
        <div class="project-context pull-right">
          <span>
            <a href="/image"><img src="http://institutional.njepuneere.com/img/logo/1421155506.tetra_logo_64_0.jpg" alt="...." class="img-rounded imgpr" style="height:30px;width:90px;"></a>
          </span>
        </div>
      </div>
      @endif
    </div>
  </div>
</nav>
<div class="scv-header-bottom" id="nav">
    <div class="scv-container">
    @if(Auth::user())
        <div class="project-context hidden-xs">
          <span>{{ucwords(Auth::user()->com_name).""." "."company, Mr."." ".ucwords(Auth::user()->name)." ".ucwords(Auth::user()->sname)."."}}</span>
        </div>
    @endif
    </div>
</div>

<div style="padding:18px;">&nbsp;</div>
@include('partials/scripts')



<script type="text/javascript">

  $('#nav').affix({
    offset: {
      top: 210,
    }
  })

  

  $('#navbar').affix({
    offset: {
      top: 210,
    }
  })

  $('#erds').affix({
    offset: {
      top: 210,
    }
  })
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

