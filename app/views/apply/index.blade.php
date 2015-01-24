@extends('layouts.master')

@section('content')

<div class="panel panel-primary" style="margin-top:20px;">
  <div class="panel-heading">
    <h3 class="panel-title">All Applicants</h3>
  </div>
  <div class="panel-body">
  @if($all_apply->count())
            <table class="table table-hover">
                 <thead>
                     <tr><th>Ads Name</th>
                         <th>Name&Surname of Applicant</th>
                         <th>Ads Date</th>
                         <th>Apply Date</th>
                         <th>User CV</th>
                         <th>User Profile</th>
                     </tr>
                 </thead>
                 <tbody>
                 @foreach($all_apply as $p)
                    <tr>
                      <td> {{$p->ads_name}}</td>

                      <td> {{ucwords($p->birey_adi)." ". ucwords($p->birey_soyadi)}} </td>
                      <td><span class="label label-info">{{ Carbon::createFromTimestamp(strtotime($p->created_at))->diffForHumans() }}</span></td>
                      <td>
                      @if($p->pub_time > 7)
                        <span class="label label-success">
                          {{ Carbon::createFromTimestamp(strtotime($p->created_at))->addDays($p->pub_time)->diffForHumans() }}
                        </span>
                        @else($p->pub_time < 7)
                        <span class="label label-warning">
                          {{ Carbon::createFromTimestamp(strtotime($p->created_at))->addDays($p->pub_time)->diffForHumans() }}
                        </span>
                        @endif
                      </td>
                      <td>
                      	<a href="apply/examine/{{$p->birey_id."/".$p->ads_id}}/user_cv" class="btn btn-info btn-xs">
						              {{ucwords($p->birey_adi)." ". ucwords($p->birey_soyadi)}}'s CV
						              <i class="glyphicon glyphicon-arrow-right"></i>
						            </a>
                      </td>
                      <td>
                        <a href="apply/examine/{{$p->birey_id."/".$p->ads_id}}/user_profile" class="btn btn-primary btn-xs">
                          {{ucwords($p->birey_adi)." ". ucwords($p->birey_soyadi)}}'s Profile
                          <i class="glyphicon glyphicon-arrow-right"></i>
                        </a>
                      </td>
                    </tr>
                    @endforeach

                 </tbody>
             </table>
            @else
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Warning!</strong> You have not yet to publish ads.
            </div>
@endif
  </div>
</div>

@stop