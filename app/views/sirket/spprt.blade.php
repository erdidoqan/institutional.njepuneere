
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
    <h3 class="panel-title">Support</h3>
  </div>
  <div class="panel-body">
    
  </div>
</div>

@endif


@stop
