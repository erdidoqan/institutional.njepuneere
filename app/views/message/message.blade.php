@extends('layouts.master')

@section('content')

<div class="col-lg-12" style="margin-top:20px;">
	<div class="well well display-inline" style="width:920px;">
		<div class="col-sm-12">
    		<h3 class="txt-color-red">All Messages</h3>
  		</div>
  		<div class="col-sm-12">
  			<div class="inbox-nav-bar no-content-padding">

	<h1 class="page-title txt-color-blueDark hidden-tablet"><i class="fa fa-fw fa-inbox"></i> Inbox &nbsp;
		<span class="btn-group">
			<a href="#" data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle"><span class="caret single"></span></a>
			<ul class="dropdown-menu">
				<li>
					<a href="#">Action</a>
				</li>
				<li>
					<a href="#">Another action</a>
				</li>
				<li>
					<a href="#">Something else here</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="#">Separated link</a>
				</li>
			</ul>
		</span>
	</h1>

	<div class="btn-group hidden-desktop visible-tablet">
		<button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			Inbox <i class="fa fa-caret-down"></i>
		</button>
		<ul class="dropdown-menu pull-left">
			<li>
				<a href="javascript:void(0);" class="inbox-load">Inbox <i class="fa fa-check"></i></a>
			</li>
			<li>
				<a href="javascript:void(0);">Sent</a>
			</li>
			<li>
				<a href="javascript:void(0);">Trash</a>
			</li>
			<li class="divider"></li>
			<li>
				<a href="javascript:void(0);">Spam</a>
			</li>
		</ul>

	</div>

	<div class="inbox-checkbox-triggered">

		<div class="btn-group">
			<a href="javascript:void(0);" rel="tooltip" title="" data-placement="bottom" data-original-title="Mark Important" class="btn btn-default"><strong><i class="fa fa-exclamation fa-lg text-danger"></i></strong></a>
			<a href="javascript:void(0);" rel="tooltip" title="" data-placement="bottom" data-original-title="Move to folder" class="btn btn-default"><strong><i class="fa fa-folder-open fa-lg"></i></strong></a>
			<a href="javascript:void(0);" rel="tooltip" title="" data-placement="bottom" data-original-title="Delete" class="deletebutton btn btn-default"><strong><i class="fa fa-trash-o fa-lg"></i></strong></a>
		</div>

	</div>

	<a href="javascript:void(0);" id="compose-mail-mini" class="btn btn-primary pull-right hidden-desktop visible-tablet"> <strong><i class="fa fa-file fa-lg"></i></strong> </a>

</div>

<div id="inbox-content" class="inbox-body no-content-padding">

	<div class="inbox-side-bar">

		<a href="javascript:void(0);" id="compose-mail" class="btn btn-primary btn-block"> <strong>Compose</strong> </a>

		<h6> Folder <a href="javascript:void(0);" rel="tooltip" title="" data-placement="right" data-original-title="Refresh" class="pull-right txt-color-darken"><i class="fa fa-refresh"></i></a></h6>

		<ul class="inbox-menu-lg">
			<li class="active">
				<a class="inbox-load" href="javascript:void(0);"> Inbox (14) </a>
			</li>
			<li>
				<a href="javascript:void(0);">Sent</a>
			</li>
			<li>
				<a href="javascript:void(0);">Draft</a>
			</li>
			<li>
				<a href="javascript:void(0);">Trash</a>
			</li>
		</ul>

		<h6> Quick Access <a href="javascript:void(0);" rel="tooltip" title="" data-placement="right" data-original-title="Add Another" class="pull-right txt-color-darken"><i class="fa fa-plus"></i></a></h6>

		<ul class="inbox-menu-sm">
			<li>
				<a href="javascript:void(0);"> Images (476)</a>
			</li>
			<li>
				<a href="javascript:void(0);">Documents (4)</a>
			</li>
		</ul>


	</div>

	<div class="table-wrap custom-scroll animated fast fadeInRight">
		<table id="inbox-table" class="table table-striped table-hover">
	<tbody>
@if($message->count())
	@foreach($message as $m)
		<tr id="msg1">
			<td class="inbox-table-icon">
				<div class="checkbox">
					<label>
						<input type="checkbox" class="checkbox style-2">
						<span></span> </label>
				</div>
			</td>
			<td class="inbox-data-from hidden-xs hidden-sm">
				<div>
					{{ucwords($m->com_name)}}
				</div>
			</td>
			<td class="inbox-data-message">
				<div>
					<span><span class="label bg-color-red">Important</span> {{ucwords($m->subject)}}</span> {{strip_tags($m->message)}}
				</div>
			</td>
			<td class="inbox-data-date hidden-xs">
				<div>
					{{ Carbon::createFromTimestamp(strtotime($m->created_at))->diffForHumans() }}
				</div>
			</td>
		</tr>
	@endforeach
	@else
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Warning!</strong> Institution has not yet any application.
            </div>
    @endif
		

	</tbody>
</table>
	</div>


</div>

<script type="text/javascript">
	/* DO NOT REMOVE : GLOBAL FUNCTIONS!
	 *
	 * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
	 *
	 * // activate tooltips
	 * $("[rel=tooltip]").tooltip();
	 *
	 * // activate popovers
	 * $("[rel=popover]").popover();
	 *
	 * // activate popovers with hover states
	 * $("[rel=popover-hover]").popover({ trigger: "hover" });
	 *
	 * // activate inline charts
	 * runAllCharts();
	 *
	 * // setup widgets
	 * setup_widgets_desktop();
	 *
	 * // run form elements
	 * runAllForms();
	 *
	 ********************************
	 *
	 * pageSetUp() is needed whenever you load a page.
	 * It initializes and checks for all basic elements of the page
	 * and makes rendering easier.
	 *
	 */

	pageSetUp();

	// PAGE RELATED SCRIPTS

	// pagefunction
	
	var pagefunction = function() {

		// fix table height
		tableHeightSize();

		$(window).resize(function() {
			tableHeightSize()
		})
		function tableHeightSize() {

			if ($('body').hasClass('menu-on-top')) {
				var menuHeight = 68;
				// nav height

				var tableHeight = ($(window).height() - 224) - menuHeight;
				if (tableHeight < (320 - menuHeight)) {
					$('.table-wrap').css('height', (320 - menuHeight) + 'px');
				} else {
					$('.table-wrap').css('height', tableHeight + 'px');
				}

			} else {
				var tableHeight = $(window).height() - 224;
				if (tableHeight < 320) {
					$('.table-wrap').css('height', 320 + 'px');
				} else {
					$('.table-wrap').css('height', tableHeight + 'px');
				}

			}

		}
		$("#inbox-table .inbox-data-message").click(function() {
		$this = $(this);
		getMail($this);
	})
	$("#inbox-table .inbox-data-from").click(function() {
		$this = $(this);
		getMail($this);
	})
	function getMail($this) {
		//console.log($this.closest("tr").attr("id"));
		loadURL("/ajax/email-opened.php", $('#inbox-content > .table-wrap'));
	}
		/*
		 * LOAD INBOX MESSAGES
		 */
		
	
		/*
		 * Buttons (compose mail and inbox load)
		 */
		
		/*
		 * Buttons (compose mail and inbox load)
		 */
		$(".inbox-load").click(function() {
			load().$('#msg1');
		});
	
		// compose email
		$("#compose-mail").click(function() {
			loadURL("/ajax/email-compose.html", $('#inbox-content > .table-wrap'));
		});
		
	};
	
	// end pagefunction
	
	// load delete row plugin and run pagefunction

	loadScript("/js/plugin/delete-table-row/delete-table-row.min.js", pagefunction);
	
</script>

  	</div>
</div>	
</div>
</div>

@stop