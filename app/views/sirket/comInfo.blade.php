
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
    <h3 class="panel-title">Company Information</h3>
  </div>
  <div class="panel-body">
  
      <div class="col-xs-6">
              <!-- Text input-->

              <legend>Authority Information</legend>
              
                <div class="col-sm-6" ><b>Name & Surname:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->name)." ".ucwords(Auth::user()->sname) }}</div>

                <div class="col-sm-6" ><b>Gender:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->gender) }}</div>

                <div class="col-sm-6" ><b>Birthday:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->birthday) }}</div>

                <div class="col-sm-6" ><b>Contact Phone:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->phone) }}</div>

                <div class="col-sm-6" ><b>E-mail:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->email) }}</div>

                <div class="col-sm-12"><br>
                  <button class="btn btn-xs btn-block btn-success">Edit</button>
                </div>
      </div>
      <div class="col-xs-6">
        <!-- Text input-->

              <legend>Company Information</legend>
              
                <div class="col-sm-6" ><b>Company Name:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->com_name) }}</div>

                <div class="col-sm-6" ><b>Company Nipt:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->com_nipt) }}</div>

                <div class="col-sm-6" ><b>Sector:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->com_sector) }}</div>

                <div class="col-sm-6" ><b>Employee:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->nr_emp) }}</div>

                <div class="col-sm-6" ><b>Company Address:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->com_add) }}</div>

                <div class="col-sm-6" ><b>Zip Code:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->zip_code) }}</div>

                <div class="col-sm-6" ><b>Country:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->country) }}</div>

                <div class="col-sm-6" ><b>City:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->city) }}</div>

                <div class="col-sm-6" ><b>Web Address:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->web_add) }}</div>

                <div class="col-sm-6" ><b>Fax Number:</b> </div>
                <div class="col-sm-6">{{ ucwords(Auth::user()->fax) }}</div>

                <div class="col-sm-12"><br>
                  <button class="btn btn-xs btn-block btn-success">Edit</button>
                </div>

      </div>
  </div>
</div>

@endif


@stop
