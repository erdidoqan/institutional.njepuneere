@extends('layouts.master')

@section('content')
		<div class="row"   style="width:955px;margin-top:20px;">
			<div class="col-sm-12">
				<div id="myCarousel" class="carousel fade profile-carousel">
					<div class="air air-bottom-right padding-10">
						<a href="javascript:void(0);" class="btn txt-color-white bg-color-teal btn-sm">
						<i class="fa fa-check"></i> Follow</a>
						&nbsp; <a href="#"  class="btn txt-color-white bg-color-pinkDark btn-sm">
						<i class="fa fa-envelope"></i> Message</a>
						&nbsp; <a href="user_cv" class="btn txt-color-white bg-color-yellow btn-sm">
						<i class="fa fa-check-square-o"></i> CV</a>
					</div>
					<div class="air air-top-left padding-10">
						<h4 class="txt-color-white font-md">{{ ucwords(Carbon::createFromTimestamp(strtotime($birey->created_at))->diffForHumans()) }}</h4>
					</div>
					<div class="carousel-inner">
						<!-- Slide 1 -->
						<div class="item active">
							<img src="/img/demo/s1.jpg" alt="demo user">
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-12">

				<div class="row">

					<div class="col-sm-3 profile-pic">
						<img src="http://njepuneere.loc/{{$birey->pr_img}}" alt="demo user">
						<div class="padding-10">
							<h4 class="font-md"><strong>3</strong>
							<br>
							<small>Applications</small></h4>
							<br>
							<h4 class="font-md"><strong>4</strong>
							<br>
							<small>Followers</small></h4>
						</div>
					</div>
					<div class="col-sm-6">
						<h1>{{ucwords($birey->adi)}} <span class="semi-bold">{{ucwords($birey->soyadi)}}</span>
						<br>
						<small> {{ucwords($birey->durum)}}, {{ucwords($birey->sonis)}}</small></h1>
						<ul class="list-unstyled">
							<li>
								<p class="text-muted">
									<i class="fa fa-phone"></i>&nbsp;&nbsp;<span class="txt-color-darken">{{$birey->tel}}</span>
								</p>
							</li>
							<li>
								<p class="text-muted">
									<i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:{{ucwords($birey->email)}}">{{ucwords($birey->email)}}</a>
								</p>
							</li>
							<li>
								<p class="text-muted">
									<i class="fa fa-building"></i>&nbsp;&nbsp;<span class="txt-color-darken">{{ucwords($birey->ulke)." - ".ucwords($birey->sehir)}}</span>
								</p>
							</li>
							<li>
								<p class="text-muted">
									<i class="fa fa-university"></i>&nbsp;&nbsp;<span class="txt-color-darken">{{ucwords($birey->uni)}}</span>
								</p>
							</li>
						</ul>
						<br>
						<p class="font-md">
							<i>A little about, {{$birey->adi." ".$birey->soyadi}}...</i>
						</p>
						<p>{{$birey->about_me}} </p>
						<br>
						<a href="#mesaj" data-toggle="modal" class="btn btn-default "><i class="fa fa-envelope-o"></i> Send Message</a>
						<br>
						<br>
						<div style="display: none;" id="form-sendmessage">
						{{Form::open(array('url'=>'sndmsg'))}}
						<fieldset>
						<!--Company name -->
							<div class="form-group">
								<label class="col-sm-5" style="margin-top:5px;" for="textinput">Company Name* :</label>
								<div class="col-sm-7">
								{{ Form::text('com_name',  Input::old('com_name', $ads->com_name),array('class' => 'form-control', 'placeholder' => 'Company Name')) }}
								</div>
							</div>	
						</fieldset>
						<fieldset>
						<!--ads name-->
							<div class="form-group">
								<label class="col-sm-5" style="margin-top:5px;" for="textinput">Jobs* :</label>
								<div class="col-sm-7">
								{{ Form::text('com_name',  Input::old('ads_name', $ads->ads_name),array('class' => 'form-control', 'placeholder' => 'Company Name')) }}
								</div>
							</div>	
						</fieldset>
						<footer>
							<button class="btn btn-primary" type="submit">Send</button>
							<button class="btn btn-danger" type="cancel">Cancel</button>
						</footer>
						{{Form::close()}}
						</div>
					</div>
					
				</div>

			</div>

		</div>

		<div class="row">

			<div class="col-sm-12">

				<hr>

				<div class="padding-10">

					<ul class="nav nav-tabs tabs-pull-right">
						<li class="active">
							<a href="#a1" data-toggle="tab">Recent Applicant</a>
						</li>
						
						<li class="pull-left">
							<span class="margin-top-10 display-inline"><i class="fa fa-rss text-success"></i> Activity</span>
						</li>
					</ul>

					<div class="tab-content padding-top-10">
						<div class="tab-pane fade in active" id="a1">

							<div class="row">

								<div class="col-xs-2 col-sm-1">
									<time datetime="2014-09-20" class="icon">
										<strong>Jan</strong>
										<span>10</span>
									</time>
								</div>

								<div class="col-xs-10 col-sm-11">
									<h6 class="no-margin"><a href="javascript:void(0);">Allice in Wonderland</a></h6>
									<p>
										Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi Nam eget dui.
										Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
										sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.
									</p>
								</div>

								<div class="col-sm-12">

									<hr>

								</div>

								<div class="col-xs-2 col-sm-1">
									<time datetime="2014-09-20" class="icon">
										<strong>Jan</strong>
										<span>10</span>
									</time>
								</div>

								<div class="col-xs-10 col-sm-11">
									<h6 class="no-margin"><a href="javascript:void(0);">World Report</a></h6>
									<p>
										Morning our be dry. Life also third land after first beginning to evening cattle created let subdue you'll winged don't Face firmament.
										You winged you're was Fruit divided signs lights i living cattle yielding over light life life sea, so deep.
										Abundantly given years bring were after. Greater you're meat beast creeping behold he unto She'd doesn't. Replenish brought kind gathering Meat.
									</p>
								</div>

								<div class="col-sm-12">

									<br>

								</div>

							</div>

						</div>
						
					</div>

				</div>

			</div>

		</div>

		<div class="modal fade" id="mesaj" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>

				<div class="modal-title">
					<img src="http://njepuneere.loc/{{$birey->pr_img}}" width="50" alt="Profile_img">
					<h1>{{ucwords($birey->adi)}} <span class="semi-bold">{{ucwords($birey->soyadi)}}</span>
						<br>
						<small> {{ucwords($birey->durum)}}, {{ucwords($birey->sonis)}}</small></h1>

				</div>
			</div>
			<div class="modal-body no-padding">
				{{Form::open(array('url'=> array('sendmessage', $ads->id, $user->id, $birey->id), 'id'=>'login-form', 'class'=>'smart-form'))}}
							<fieldset
								<section>
									<div class="row">
										<label class="label col col-4">Company Name:</label>
										<div class="col col-8">
											<label class="input"> <i class="icon-append fa fa-cubes"></i>
												{{ Form::text('com_name',  Input::old('com_name', $ads->com_name)) }}
											</label>
										</div>
									</div>
								</section>

								<section>
									<div class="row">
										<label class="label col col-4">Jobs Name: </label>
										<div class="col col-8">
											<label class="input"> <i class="icon-append fa fa-circle-o-notch"></i>
												{{ Form::text('ads_name',  Input::old('ads_name', $ads->ads_name)) }}
											</label>
											
										</div>
									</div>
								</section>

								<section>
									<label class="textarea">
										<i class="icon-append fa fa-comment"></i>
										{{ Form::textarea('message', '', array('id'=>'message', 'placeholder' => 'Please, write your message here!')) }}
									</label>
								</section>
							</fieldset>
							
							<footer>
								<button type="submit" class="btn btn-labeled btn-primary">
									Send Message!
									<i class="glyphicon glyphicon-ok"></i>
								</button>

							</footer>
						{{Form::close() }}					
						

			</div>

		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>
@stop