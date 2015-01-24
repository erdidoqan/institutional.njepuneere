<article class="col-sm-12 col-md-12 col-lg-12 sortable-grid ui-sortable">
			<div data-widget-deletebutton="false" data-widget-editbutton="false" id="wid-id-0" class="jarviswidget jarviswidget-color-darken jarviswidget-sortable" role="widget">
				
				<header role="heading"><div class="jarviswidget-ctrls" role="menu">   <a data-placement="bottom" title="" rel="tooltip" class="button-icon jarviswidget-toggle-btn" href="javascript:void(0);" data-original-title="Collapse"><i class="fa fa-minus "></i></a> <a data-placement="bottom" title="" rel="tooltip" class="button-icon jarviswidget-fullscreen-btn" href="javascript:void(0);" data-original-title="Fullscreen"><i class="fa fa-expand "></i></a> </div><div class="widget-toolbar" role="menu"><a href="javascript:void(0);" class="dropdown-toggle color-box selector" data-toggle="dropdown"></a><ul class="dropdown-menu arrow-box-up-right color-select pull-right"><li><span data-original-title="Green Grass" data-placement="left" rel="tooltip" data-widget-setstyle="jarviswidget-color-green" class="bg-color-green"></span></li><li><span data-original-title="Dark Green" data-placement="top" rel="tooltip" data-widget-setstyle="jarviswidget-color-greenDark" class="bg-color-greenDark"></span></li><li><span data-original-title="Light Green" data-placement="top" rel="tooltip" data-widget-setstyle="jarviswidget-color-greenLight" class="bg-color-greenLight"></span></li><li><span data-original-title="Purple" data-placement="top" rel="tooltip" data-widget-setstyle="jarviswidget-color-purple" class="bg-color-purple"></span></li><li><span data-original-title="Magenta" data-placement="top" rel="tooltip" data-widget-setstyle="jarviswidget-color-magenta" class="bg-color-magenta"></span></li><li><span data-original-title="Pink" data-placement="right" rel="tooltip" data-widget-setstyle="jarviswidget-color-pink" class="bg-color-pink"></span></li><li><span data-original-title="Fade Pink" data-placement="left" rel="tooltip" data-widget-setstyle="jarviswidget-color-pinkDark" class="bg-color-pinkDark"></span></li><li><span data-original-title="Light Blue" data-placement="top" rel="tooltip" data-widget-setstyle="jarviswidget-color-blueLight" class="bg-color-blueLight"></span></li><li><span data-original-title="Teal" data-placement="top" rel="tooltip" data-widget-setstyle="jarviswidget-color-teal" class="bg-color-teal"></span></li><li><span data-original-title="Ocean Blue" data-placement="top" rel="tooltip" data-widget-setstyle="jarviswidget-color-blue" class="bg-color-blue"></span></li><li><span data-original-title="Night Sky" data-placement="top" rel="tooltip" data-widget-setstyle="jarviswidget-color-blueDark" class="bg-color-blueDark"></span></li><li><span data-original-title="Night" data-placement="right" rel="tooltip" data-widget-setstyle="jarviswidget-color-darken" class="bg-color-darken"></span></li><li><span data-original-title="Day Light" data-placement="left" rel="tooltip" data-widget-setstyle="jarviswidget-color-yellow" class="bg-color-yellow"></span></li><li><span data-original-title="Orange" data-placement="bottom" rel="tooltip" data-widget-setstyle="jarviswidget-color-orange" class="bg-color-orange"></span></li><li><span data-original-title="Dark Orange" data-placement="bottom" rel="tooltip" data-widget-setstyle="jarviswidget-color-orangeDark" class="bg-color-orangeDark"></span></li><li><span data-original-title="Red Rose" data-placement="bottom" rel="tooltip" data-widget-setstyle="jarviswidget-color-red" class="bg-color-red"></span></li><li><span data-original-title="Light Red" data-placement="bottom" rel="tooltip" data-widget-setstyle="jarviswidget-color-redLight" class="bg-color-redLight"></span></li><li><span data-original-title="Purity" data-placement="right" rel="tooltip" data-widget-setstyle="jarviswidget-color-white" class="bg-color-white"></span></li><li><a data-original-title="Reset widget color to default" data-placement="bottom" rel="tooltip" data-widget-setstyle="" class="jarviswidget-remove-colors" href="javascript:void(0);">Remove</a></li></ul></div>
					<span class="widget-icon"> <i class="fa fa-check"></i> </span>
					<h2>Very Basic Wizard Example </h2>

				<span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span></header>

				<!-- widget div-->
				<div role="content">

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->

					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body">

						<div class="row">
							<form action="asd.php" novalidate="novalidate" id="wizard-1">
								<div class="col-sm-12" id="bootstrap-wizard-1">
									<div class="form-bootstrapWizard">
										<ul class="bootstrapWizard form-wizard">
											<li data-target="#step1" class="active">
												<a data-toggle="tab" href="#tab1"> <span class="step">1</span> <span class="title">Bussiness information</span> </a>
											</li>
											<li data-target="#step2">
												<a data-toggle="tab" href="#tab2"> <span class="step">2</span> <span class="title">Job information</span> </a>
											</li>
											<li data-target="#step3">
												<a data-toggle="tab" href="#tab3"> <span class="step">3</span> <span class="title">Domain Setup</span> </a>
											</li>
											<li data-target="#step4">
												<a data-toggle="tab" href="#tab4"> <span class="step">4</span> <span class="title">Save Form</span> </a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="tab-content">
										<div id="tab1" class="tab-pane active">
											<br>
											<h3><strong>Step 1 </strong> - Bussiness Information</h3>
											<div class="row">
												<div class="col-sm-6">
													<label class="col-sm-4">Wanted Position Title:</label>
													<div class="col-sm-8">
														{{Form::position()}}<hr>
													</div>
													<label class="col-sm-4">Sector:</label>
													<div class="col-sm-8">
														{{Form::sector()}}<hr>
													</div>
													<label class="col-sm-4">Bussiness Area:</label>
													<div class="col-sm-8">
														{{Form::area()}}
													</div>
												</div>
												<div class="col-sm-6">
													<div class="form-group">
													<label class="col-sm-4 control-label" for="textinput">Position
									                	<a class="btn btn-info btn-xs"  data-toggle="tooltip" data-placement="right" title="İlanın uygun adaylara e-posta ile bildirilmesi için Aranan Pozisyon Adı seçimlerinizi listeden yapılması gerekmektedir.">
									                		<span class="glyphicon glyphicon-info-sign" ></span>
									                	</a></label>
									                <div class="col-sm-8">
									                 {{Form::pos()}}<br>
									                </div>
										            </div>
									                <div class="form-group">
									                <label class="col-sm-4 control-label" for="textinput">Working Style</label>
									                <div class="col-sm-8">
									                 {{Form::style()}}
									                </div></div>
												</div>
											</div>

										</div>
										<div id="tab2" class="tab-pane">
											<br>
											<h3><strong>Step 2</strong> - Job Information</h3>

											
										</div>
										<div id="tab3" class="tab-pane">
											<br>
											<h3><strong>Step 3</strong> - Domain Setup</h3>
											<div class="alert alert-info fade in">
												<button data-dismiss="alert" class="close">
													×
												</button>
												<i class="fa-fw fa fa-info"></i>
												<strong>Info!</strong> Place an info message box if you wish.
											</div>
											<div class="form-group">
												<label>This is a label</label>
												<input type="text" id="etc" name="etc" placeholder="Another input box here..." class="form-control input-lg">
											</div>
										</div>
										<div id="tab4" class="tab-pane">
											<br>
											<h3><strong>Step 4</strong> - Save Form</h3>
											<br>
											<h1 class="text-center text-success"><strong><i class="fa fa-check fa-lg"></i> Complete</strong></h1>
											<h4 class="text-center">Click next to finish</h4>
											<br>
											<br>
										</div>

										<div class="form-actions">
											<div class="row">
												<div class="col-sm-12">
													<ul class="pager wizard no-margin">
														<li class="previous disabled">
															<a class="btn btn-lg btn-default" href="javascript:void(0);"> Previous </a>
														</li>
														<li class="next">
															<a class="btn btn-lg txt-color-darken" href="javascript:void(0);"> Next </a>
														</li>
													</ul>
												</div>
											</div>
										</div>

									</div>
								</div>
							</form>
						</div>

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>
@include('partials/scripts')
<script type="text/javascript">
	

	pageSetUp();
	var pagefunction = function() {
		loadScript("/js/plugin/bootstrap-wizard/jquery.bootstrap.wizard.min.js", runBootstrapWizard);
		function runBootstrapWizard() {
			var $validator = $("#wizard-1").validate({
				rules : {
					email : {
						required : true,
						email : "Your email address must be in the format of name@domain.com"
					},
					fname : {
						required : true
					},
					lname : {
						required : true
					},
					country : {
						required : true
					},
					city : {
						required : true
					},
					postal : {
						required : true,
						minlength : 4
					},
					wphone : {
						required : true,
						minlength : 10
					},
					hphone : {
						required : true,
						minlength : 10
					}
				},

				messages : {
					fname : "Please specify your First name",
					lname : "Please specify your Last name",
					email : {
						required : "We need your email address to contact you",
						email : "Your email address must be in the format of name@domain.com"
					}
				},

				highlight : function(element) {
					$(element).closest('.form-group').removeClass('has-success').addClass('has-error');
				},
				unhighlight : function(element) {
					$(element).closest('.form-group').removeClass('has-error').addClass('has-success');
				},
				errorElement : 'span',
				errorClass : 'help-block',
				errorPlacement : function(error, element) {
					if (element.parent('.input-group').length) {
						error.insertAfter(element.parent());
					} else {
						error.insertAfter(element);
					}
				}
			});
			$('#bootstrap-wizard-1').bootstrapWizard({

				'tabClass' : 'form-wizard',
				'onNext' : function(tab, navigation, index) {
					var $valid = $("#wizard-1").valid();
					if (!$valid) {
						$validator.focusInvalid();
						return false;
					} else {
						$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass('complete');
						$('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step').html('<i class="fa fa-check"></i>');
					}
				}
			});
		};
		loadScript("/js/plugin/fuelux/wizard/wizard.min.js", fueluxWizard);
		function fueluxWizard() {
			var wizard = $('.wizard').wizard();
			wizard.on('finished', function(e, data) {
				$.smallBox({
					title : "Congratulations! Your form was submitted",
					content : "<i class='fa fa-clock-o'></i><i>1 seconds ago...</i>",
					color : "#5F895F",
					iconSmall : "fa fa-check bounce animated",
					timeout : 4000
				});
			});
		};
	};
	pagefunction();
</script>
