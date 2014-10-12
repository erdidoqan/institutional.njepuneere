@extends('layouts.master')

@section('content')
<div class="well well-sm">
							<!-- Timeline Content -->
							<div class="smart-timeline">
								<ul class="smart-timeline-list">
								<li>
								<div class="right">
									<a href="user_profile" class="btn btn-primary">User Profile & Message</a>
								</div>
										<div class="smart-timeline-icon">
											<img src="http://njepuneere.loc/{{$birey->pr_img}}" width="32" height="32" alt="user">
										</div>
										<div class="smart-timeline-content">
											<h4>
												<a class="txt-color-green" href="javascript:void(0);"><strong>{{ucwords($birey->adi." ".ucwords($birey->soyadi))}} </strong></a>
											</h4>
											<p><strong> 24 Years Old, {{$birey->cinsiyet}}, Single </strong></p>
											<div class="well well-sm display-inline">
												<span><strong>Email:</strong> {{$birey->email}}</span><br>
												<span><strong>Home Address:</strong> {{$birey->sehir." / ".$birey->ulke}}</span>
												<span> - <strong>Cell Phone:</strong> {{$birey->tel}} </span>
											</div>
										</div>
									</li>
									<li>
										<div class="smart-timeline-icon">
											<i class="fa fa-book"></i>
										</div>
										<div class="smart-timeline-content">
											<h4>
												<a class="txt-color-green" href="javascript:void(0);"><strong>Experience</strong></a>
											</h4>
											<p>
												@if($birey_cv_exp->count())
												    @foreach($birey_cv_exp as $exp)
												        <h6 class="txt-color-red"><strong>{{ ucwords($exp->pos) }}</strong></h6>
												        <span><strong> {{ucwords($exp->com_name)}} </strong></span>,<span> {{$exp->sehir}} </span>
												        <hr>
												    @endforeach
												@endif
											</p>
										</div>
									</li>
									<li>
										<div class="smart-timeline-icon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<div class="smart-timeline-content">
											<h4>
												<a class="txt-color-green" href="#"><strong>Education</strong></a>
											</h4>
											<p>
												@if($birey_cv_edu->count())
												    @foreach($birey_cv_edu as $edu)
												        <h6 class="txt-color-red"><strong>{{ ucwords($edu->school_name) }}</strong> <small>({{ucwords($edu->department)}})</small> </h6>
												        <span><strong> {{ucwords($edu->edu_level)}} </strong></span>,<span> {{$edu->sehir}} </span>
												        <hr>
												    @endforeach
												@endif
											</p>
														
										</div>
									</li>
									<li>
										<div class="smart-timeline-icon">
											<i class="fa fa-reorder"></i>
										</div>
										<div class="smart-timeline-content">
											<h4>
												<a class="txt-color-green" href="#"><strong>Internship</strong></a>
											</h4>
											<p>
												@if($birey_cv_intern->count())
												        @foreach($birey_cv_intern as $intern)
												                <h6 class="txt-color-red"><strong>{{ ucwords($intern->pos) }}</strong> <small>({{ucwords($intern->period)}})</small> </h6>
												                <span><strong> {{ucwords($intern->com_name)}} </strong></span>,<span> {{$intern->sehir}} </span>
												            <hr>
												        @endforeach
												@else
												<div class="alert alert-warning alert-dismissible" role="alert">
									              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
									                <strong>Warning!</strong> User has not publish intern information.
									            </div>
												@endif
											</p>
														
										</div>
									</li>
									<li>
										<div class="smart-timeline-icon">
											<i class="fa fa-eye"></i>
										</div>
										<div class="smart-timeline-content">
											<h4>
												<a class="txt-color-green" href="#"><strong>Foreign Languages</strong></a>
											</h4>
											<p>
												@if($birey_cv_foreign->count())
													@foreach($birey_cv_foreign as $foreign)
														<h6 class="txt-color-red"><strong>{{ ucwords($foreign->languages) }}</strong> <small>({{ucwords($foreign->learned)}})</small> </h6>
														<span> Reading ({{ucwords($foreign->reading)}})</span>,<span> Writing ({{$foreign->writing}}) </span>,<span> Speaking ({{$foreign->speaking}}) </span>
													<hr>
													@endforeach
												@endif
											</p>
														
										</div>
									</li>
								</ul>
							</div>
							<!-- END Timeline Content -->
				
						</div>
@stop