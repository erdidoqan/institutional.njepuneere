<table id="inbox-table" class="table table-striped table-hover">
	<tbody>
<?php  ?>

		<tr id="msg1" class="unread">
			<td class="inbox-table-icon">
				<div class="checkbox">
					<label>
						<input type="checkbox" class="checkbox style-2">
						<span></span> </label>
				</div>
			</td>
			<td class="inbox-data-from hidden-xs hidden-sm">
				<div>
					Alex Jones
				</div>
			</td>
			<td class="inbox-data-message">
				<div>
					<span><span class="label bg-color-orange">WORK</span> Karjua Marou</span> New server for datacenter needed
				</div>
			</td>
			<td class="inbox-data-attachment hidden-xs">
				<div>
					<a href="javascript:void(0);" rel="tooltip" data-placement="left" data-original-title="FILES: rocketlaunch.jpg, timelogs.xsl" class="txt-color-darken"><i class="fa fa-paperclip fa-lg"></i></a>
				</div>
			</td>
			<td class="inbox-data-date hidden-xs">
				<div>
					10:23 am
				</div>
			</td>
		</tr>

		

	</tbody>
</table>

<script>
	
	//Gets tooltips activated
	$("#inbox-table [rel=tooltip]").tooltip();

	$("#inbox-table input[type='checkbox']").change(function() {
		$(this).closest('tr').toggleClass("highlight", this.checked);
	});

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


	$('.inbox-table-icon input:checkbox').click(function() {
		enableDeleteButton();
	})

	$(".deletebutton").click(function() {
		$('#inbox-table td input:checkbox:checked').parents("tr").rowslide();
		//$(".inbox-checkbox-triggered").removeClass('visible');
		//$("#compose-mail").show();
	});

	function enableDeleteButton() {
		var isChecked = $('.inbox-table-icon input:checkbox').is(':checked');

		if (isChecked) {
			$(".inbox-checkbox-triggered").addClass('visible');
			//$("#compose-mail").hide();
		} else {
			$(".inbox-checkbox-triggered").removeClass('visible');
			//$("#compose-mail").show();
		}
	}
	
</script>
