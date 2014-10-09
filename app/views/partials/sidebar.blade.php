
<div class="well display-inline">
  <div class="col-sm-12">
        <div class="profile">
        <a href="#" data-toggle="modal" data-target=".slacker-modal">

          <img src="{{Auth::user()->logo}}" alt="logo" class="pfimg img-rounded" ></a><hr>
          <div class="well well-sm bg-color-teal txt-color-white text-center">
                <h5>{{ucwords(Auth::user()->com_name)}}</h5>
                    
                <code>
                <strong>Nipt:</strong>{{ucwords(Auth::user()->com_nipt)}}
                </code>
              </div>
            
        </div>
        <ul class="list-group">
          <a href="/"><li class="list-group-item {{ Request::path() == '/' ? 'active' : ''; }}"><span class="glyphicon glyphicon-home"></span> Home</li></a>
          <a href="./com_info"><li class="list-group-item {{ Request::path() == 'com_info' ? 'active' : ''; }}"><span class="glyphicon glyphicon-user"></span> Profile</li></a>
          <a href="./ch_pass"><li class="list-group-item {{ Request::path() == 'ch_pass' ? 'active' : ''; }}"><span class="glyphicon glyphicon-lock"></span> Change password</li></a>
          <a href="./support"><li class="list-group-item {{ Request::path() == 'support' ? 'active' : ''; }}"><span class="glyphicon glyphicon-eye-open"></span> Support</li></a>
          <a href="/logout"><li class="list-group-item text-danger"><span class="glyphicon glyphicon-off"></span> Logout</li></a>
          
        </ul>
  </div>
</div>


<div class="modal fade in slacker-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
  <div class="modal-dialog modal-slacker">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h5 class="modal-title" id="myLargeModalLabel">Change Your Company Logo</h5>
      </div>
      <div class="modal-body">
        <div class="col-sm-8">
        
        {{ Form::open(array('url' => 'imgUp','class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) }}
             <div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 540px; height: 300px;">
					  	<span class="text-danger"><strong>Warning!</strong> Your photographs will be sent to the company you choose properly for (max.2 mb)</span>
					  <img src="{{Auth::user()->logo}}" class="pfimg"></a>
					  </div>
					  
					  <div>
					    <span class="btn btn-success btn-sm btn-file"><span class="fileinput-new">Select Company Logo</span>
					    <span class="fileinput-exists">Change</span>
					    {{ Form::file('logo', '') }}
					    </span>
					    <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput">Remove</a>
					    <button type="submit" class="btn btn-primary btn-sm fileinput-exists right">Upload</button>
					  </div>
				</div>

        </div>
        {{ Form::close() }}
               
      </div>
      
      	
      
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
