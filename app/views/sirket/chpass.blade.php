
@extends('layouts.master')

@section('content')
@if(Auth::user())
<div class="panel panel-primary">
    <div class="panel-body">
            <div class="col-sm-12">
              <div class="col-sm-6">
              </div>
              <div class="col-sm-6">
                
                <a href="./Ads" type="button" class="btn btn-primary btn-block">Create Ad</a>
              
              </div>
            </div>            
    </div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Change Your Password</h3>
  </div>
  <div class="panel-body">

<div class="row">
<div class="col-sm-12"> 
@if($errors->any())
            <div class="alert alert-danger">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                {{ implode('', $errors->all('<p class="error">:message</p>')) }}
            </div>
    @endif

@if(Session::has('success'))
    <div class="alert alert-success alert-autocloseable-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
        <p>{{ Session::get('success') }}</p>
    </div>
@endif
    </div>
    <div class="col-sm-7 ">
    
<br>
      {{ Form::open(array('url' => 'ch_pass','class'=>'form-horizontal', 'id' => 'passwordForm')) }}
      {{ Form::password('pass', array('class' => 'form-control input-sm','id' =>'password1', 'placeholder' => 'New Password','autocomplete' => 'off')) }}
      <div class="row">
        <div class="col-sm-6">
          <span id="8char" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> 8 Characters Long<br>
          <span id="ucase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Uppercase Letter
        </div>
        <div class="col-sm-6">
          <span id="lcase" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Lowercase Letter<br>
          <span id="num" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> One Number
        </div>
      </div><br>
      {{ Form::password('pass', array('class' => 'form-control input-sm','id' =>'password2', 'placeholder' => 'Repeat Password','autocomplete' => 'off')) }}
      <div class="row">
        <div class="col-sm-12">
          <span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
        </div>
      </div>
      <br>
      <input type="submit" class="col-xs-12 btn btn-primary btn-load btn-sm" data-loading-text="Changing Password..." value="Change Password">
    {{ Form::close() }}
    </div><!--/col-sm-6-->
</div><!--/row-->
</div>
  </div>

@endif


@stop
