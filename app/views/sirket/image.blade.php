@extends('layouts.master')

@section('content')

<div class="container">
	<div style="width:920px;">
		
	</div> 
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="well display-inline" style="width:920px;margin-top:20px;">
				@if ($errors->has())
				<div class="alert alert-warning alert-dismissible" role="alert">
				    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				    <strong>Error!</strong> {{$errors->first()}}
				</div>
				@endif

				@if (Session::has('error'))
				<div class="alert alert-danger alert-dismissible" role="alert">
				    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				     {{Session::get('error')}}
				</div>
				@endif

				@if (Session::has('success'))
				<div class="alert alert-success alert-dismissible" role="alert">
				    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				    {{Session::get('success')}}
				</div>
				@endif  
        		<h3 class="txt-color-green">Company Logo Update</h3>
        		<div class="col-sm-4">

        			<img src="{{$sirket->logo}}" alt="logo" style="max-width:270px;" class="pfimg img-rounded" ><hr>
        		</div>

        		<div class="col-sm-8">
        			<div class="alert alert-warning">
        				<p>- This section of Image Files (".jpeg", ".jpg", ".gif") can be added.</p><br>
        				<p>- Size 1 MB of files can be added by passing the record.</p>
        			</div>
        		</div>
        		<div class="col-sm-12">
        			{{ Form::open(array('url' => array('logo_up',$sirket->id), 'enctype' => 'multipart/form-data')) }}
						<br>
						<div class="bs-example">
					      <div class="fileinput fileinput-new" data-provides="fileinput">
					        <div class="fileinput-new thumbnail" style="width: 270px; height: 100px;">
					          <img data-src="holder.js/100%x100%" alt="100%x100%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxOTAiIGhlaWdodD0iMTQwIj48cmVjdCB3aWR0aD0iMTkwIiBoZWlnaHQ9IjE0MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9Ijk1IiB5PSI3MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjE5MHgxNDA8L3RleHQ+PC9zdmc+" style="height: 100%; width: 100%; display: block;">
					        </div>
					        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 270px; max-height: 100px; line-height: 10px;"></div>
					        <div>
					          <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="hidden" value="" name=""><input type="file" name="logo"></span>
					          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
					        </div>
					      </div>
					    </div>
						<input type="hidden" name="img_bckp" value="{{$data['logo']}}" /> 
						{{ form::submit('update', array('class'=>'btn btn-success')) }}
					{{ Form::close() }}
					<input type="hidden" id="modal" value="{{$data['modal']}}" />
        		</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Crop Logo</h4>
      </div>
       <div class="modal-body">
			{{ Form::open(array('url' => array('crop', $sirket->id),'onsubmit'=>'return checkCoords();', 'enctype' => 'multipart/form-data')) }}
				<img src="{{$sirket->logo}}" alt="logo" id="cropbox" class="img-rounded" />
				<input type="hidden" id="x" name="x" />			
				<input type="hidden" id="y" name="y" />			
				<input type="hidden" id="w" name="w" />			
				<input type="hidden" id="h" name="h" />			
        </div>
        <div class="modal-footer">
        	<button type="submit" class="btn btn-success">Crop Logo</button>
        	{{ Form::close() }}
        </div>
    </div>
  </div>
</div>
<style type="text/css">
	.jcrop-keymgr{opacity: 0;}
</style>

<script type="text/javascript">

	var modal;
	if ($('#modal').val() == 'true'){
		modal = true;
	} else {
		modal = false;
	}
		$(function() {
	            $('#cropbox').Jcrop({
	                aspectRatio : 3,
	                onSelect : updateCoords
	            });
	            $('#myModal').modal({show: modal});
	        });
			
	 
	        function updateCoords(c) {
	            $('#x').val(c.x);
	            $('#y').val(c.y);
	            $('#w').val(c.w);
	            $('#h').val(c.h);
	        };
	 
	        function checkCoords() {
	            if (parseInt($('#w').val()))
	                return true;
	            alert('Please select a crop region then press submit.');
	            return false;
	        };

	loadScript("/js/plugin/jcrop/jquery.Jcrop.min.js", function() {
		loadScript("/js/plugin/jcrop/jquery.color.min.js", pagefunction);
	});

</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>

@stop