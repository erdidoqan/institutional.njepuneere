@extends('layouts.master')

@section('content')

<div class="form-group">
	<label class="col-sm-3" style="margin-top:5px;" for="textinput">Company Name* :</label>
	<div class="col-sm-8">
	{{ Form::text('com_name',  Input::old('com_name', $ads->com_name),array('class' => 'form-control', 'placeholder' => 'Company Name')) }}
	</div>
</div>		

@stop