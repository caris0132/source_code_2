<?php 
if ($com == 'index' || $com == '') {
	// <!-- Morris Plugin Js -->
	array_push($js_file, "plugins/raphael/raphael.min.js");
	array_push($js_file, "plugins/morrisjs/morris.js");

	// <!-- ChartJs -->
	array_push($js_file, "plugins/chartjs/Chart.bundle.js");

	// <!-- Flot Charts Plugin Js -->
	array_push($js_file, "plugins/flot-charts/jquery.flot.js");
	array_push($js_file, "plugins/flot-charts/jquery.flot.resize.js");
	array_push($js_file, "plugins/flot-charts/jquery.flot.pie.js");
	array_push($js_file, "plugins/flot-charts/jquery.flot.categories.js");
	array_push($js_file, "plugins/flot-charts/jquery.flot.time.js");

	// <!-- Sparkline Chart Plugin Js -->
	array_push($js_file, "plugins/jquery-sparkline/jquery.sparkline.js");
	array_push($js_file, "js/pages/index.js");
}
?>
<?php if ($act == 'man'): ?>
	<!-- Jquery DataTable Plugin Js -->
	<script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
	<script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
	<script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
	<script>
		$(function () {
			$('.js-basic-example').DataTable({
				responsive: true
			});

			// $('#basic_checkbox_all').click(function () {	
			// 	console.log($(this).is(':checked'));
			// 	if($(this).is(':checked')) {
			// 			setcheck("false");
			// 	}else {
			// 			setcheck("true");
			// 	}
			// });
			$('#basic_checkbox_all').click(function () {
				var res = $(this).is(':checked');
				if (res) {
					$('.js-check-delete').prop('checked' , true);
				} else {
					$('.js-check-delete').prop('checked' , false);
				}

			});



		})
	</script>
<?php endif ?>