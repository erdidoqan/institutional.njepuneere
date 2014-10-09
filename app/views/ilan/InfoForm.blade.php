
   <div class="col-sm-12" >
        <div id="loginbox" class="mainbox col-md-12">                    
            <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <div class="panel-title">Ads Information</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <a href="#" class="close" data-dismiss="alert">&times;</a>
                                {{ implode('', $errors->all('<p class="error">:message</p>')) }}
                            </div>
                        @endif
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                         {{ Form::open(array('route' => 'adsInfo.store','class'=>'form-horizontal', 'enctype' => 'multipart/form-data')) }}
        <div class="col-xs-6">
              <!-- Text input-->
				<div class="form-group">
                <label class="col-sm-4" for="textinput">Company Name* :</label>
                <div class="col-sm-8">
                  <h4 class="text-danger"><strong>{{$user->com_name}} </strong></h4>
                	<!--{{ Form::text('com_name',  Input::old('com_name', $user->com_name),array('class' => 'form-control', 'placeholder' => 'Company Name')) }}-->
                </div>
              </div>			
									
										
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4" for="textinput">Logo*</label>
                <div class="col-sm-8">
                 <div class="fileinput fileinput-new" data-provides="fileinput">
					  <div class="fileinput-preview thumbnail" data-trigger="fileinput" >
					  	
					  <img src="{{Auth::user()->logo}}" class="pfimg"></a>

					  </div>
				</div>
                </div>
              </div>	
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4" for="textinput">Ads Name*</label>
                <div class="col-sm-8">
                 {{ Form::text('ads_name', '',array('class' => 'form-control', 'placeholder' => 'Ads Name')) }}
                </div>
              </div>	
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4" for="textinput">Referance Code*</label>
                <div class="col-sm-8">
                 {{ Form::text('ref_code', '',array('class' => 'form-control', 'placeholder' => 'Referance Code')) }}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4" for="textinput">Ads Languages</label>
                <div class="col-sm-8">
                 {{Form::languages()}}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4" for="textinput">Number of Staff to be recruited
                	<a class="btn btn-info btn-xs"  data-toggle="tooltip" data-placement="right" title="This information will be displayed by job seekers.">
                		<span class="glyphicon glyphicon-info-sign" ></span>
                	</a></label>
                <div class="col-sm-8">
                 {{Form::number_of_staff()}}
                </div>
              </div>
              
      </div>
      <div class="col-xs-6">
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4" for="textinput"></label>
                <div class="col-sm-8">
                 {{Form::checkbox('only', '1',1)}}
                 <a>This ad only at Karriera.net</a> <a class="btn btn-info btn-xs"  data-toggle="tooltip" data-placement="right" title="When this option is selected, will take place on the homepage.">
                		<span class="glyphicon glyphicon-info-sign" ></span>
                	</a>
                </div>
              </div>
              <!-- Text input--><br><br>
               <div class="form-group">
                <label class="col-sm-4" for="textinput"></label>
                <div class="col-sm-8">
                 {{ Form::checkbox('disabled', '1') }}
                 <a>Disabled Personnal Ads</a> 
                	</a>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4" for="textinput"></label>
                <div class="col-sm-8">
                 {{ Form::checkbox('transmit', '1') }}
                 <a>Transmit the message to be sent</a> 
                	</a>
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Add Work Place</label>
                <div class="col-sm-8">
                 {{Form::work_place()}}
                </div>
              </div>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Gender</label>
                <div class="col-sm-8">
                 {{Form::gender()}}
                </div>
              </div>
              
             
      </div>
      <bForm::checkbox('name', 'value')r>
      <div class="col-xs-12">
      	
           <!-- Text input-->
				<div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Company / Job Description*</label>
                <div class="col-sm-10">
                	{{ Form::textarea('job_desc', '',array('class' => 'ckeditor')) }}
                </div>
              </div>
               <!-- Text input-->
				<div class="form-group">
                <label class="col-sm-2 control-label" for="textinput">Qualifications</label>
                <div class="col-sm-10">
                	{{ Form::textarea('qua', '',array('class' => 'ckeditor')) }}
                </div>
              </div>	
              


      </div>

      <div class="col-sm-6">
              <!-- Text input-->
				<div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Release Date*</label>
                <div class="col-sm-8">
                	{{ Form::text('rel_date', '',array('class' => 'form-control', 'placeholder' => 'Release Date')) }}
                </div>
              </div>	
              <!-- Text input-->
				<div class="form-group">
                <label class="col-sm-4 control-label" for="textinput">Published Time*</label>
                <div class="col-sm-8">
                	{{Form::pub_time()}}
                </div>
              </div>	

              </div>

              <div class="col-sm-6">
              	
               
              </div>
              <!-- Text input-->
              <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button type="submit" class="btn btn-primary btn-sm">Save and Continue  <span class="glyphicon glyphicon-forward"></span></button>
              </div>
            </div>
          </div>
            {{ Form::close() }}
        </div>
        </div>                     
      </div>  
</div>