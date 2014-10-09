@extends('layouts.master')

@section('content')
		<div class="row">

			<div class="col-sm-12">
				<div id="myCarousel" class="carousel fade profile-carousel">
					<div class="air air-bottom-right padding-10">
						<a href="javascript:void(0);" class="btn txt-color-white bg-color-teal btn-sm"><i class="fa fa-check"></i> Follow</a>&nbsp; <a href="javascript:void(0);" class="btn txt-color-white bg-color-pinkDark btn-sm"><i class="fa fa-link"></i> Connect</a>
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
						<img src="{{$birey->pr_img}}" alt="demo user">
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
						<a href="javascript:void(0);" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i> Send Message</a>
						<br>
						<br>

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
						<li>
							<a href="#a2" data-toggle="tab">New Members</a>
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
						<div class="tab-pane fade" id="a2">

							<div class="alert alert-info fade in">
								<button class="close" data-dismiss="alert">
									×
								</button>
								<i class="fa-fw fa fa-info"></i>
								<strong>51 new members </strong>joined today!
							</div>

							<div class="user" title="email@company.com">
								<img src="/img/avatars/female.png" alt="demo user"><a href="javascript:void(0);">Jenn Wilson</a>
								<div class="email">
									travis@company.com
								</div>
							</div>
							<div class="user" title="email@company.com">
								<img src="/img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Marshall Hitt</a>
								<div class="email">
									marshall@company.com
								</div>
							</div>
							<div class="user" title="email@company.com">
								<img src="/img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Joe Cadena</a>
								<div class="email">
									joe@company.com
								</div>
							</div>
							<div class="user" title="email@company.com">
								<img src="/img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Mike McBride</a>
								<div class="email">
									mike@company.com
								</div>
							</div>
							<div class="user" title="email@company.com">
								<img src="/img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Travis Wilson</a>
								<div class="email">
									travis@company.com
								</div>
							</div>
							<div class="user" title="email@company.com">
								<img src="/img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Marshall Hitt</a>
								<div class="email">
									marshall@company.com
								</div>
							</div>
							<div class="user" title="Joe Cadena joe@company.com">
								<img src="/img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Joe Cadena</a>
								<div class="email">
									joe@company.com
								</div>
							</div>
							<div class="user" title="email@company.com">
								<img src="/img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Mike McBride</a>
								<div class="email">
									mike@company.com
								</div>
							</div>
							<div class="user" title="email@company.com">
								<img src="/img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Marshall Hitt</a>
								<div class="email">
									marshall@company.com
								</div>
							</div>
							<div class="user" title="email@company.com">
								<img src="/img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Joe Cadena</a>
								<div class="email">
									joe@company.com
								</div>
							</div>
							<div class="user" title="email@company.com">
								<img src="/img/avatars/male.png" alt="demo user"><a href="javascript:void(0);"> Mike McBride</a>
								<div class="email">
									mike@company.com
								</div>
							</div>

							<div class="text-center">
								<ul class="pagination pagination-sm">
									<li class="disabled">
										<a href="javascript:void(0);">Prev</a>
									</li>
									<li class="active">
										<a href="javascript:void(0);">1</a>
									</li>
									<li>
										<a href="javascript:void(0);">2</a>
									</li>
									<li>
										<a href="javascript:void(0);">3</a>
									</li>
									<li>
										<a href="javascript:void(0);">...</a>
									</li>
									<li>
										<a href="javascript:void(0);">99</a>
									</li>
									<li>
										<a href="javascript:void(0);">Next</a>
									</li>
								</ul>
							</div>

						</div><!-- end tab -->
					</div>

				</div>

			</div>

		</div>
		<!-- end row -->

@stop