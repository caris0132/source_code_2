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


<script>
	$(document).ready(function() {
		$('.ckeditor').each(function(index, el) {
			var id=$(this).attr('id');
			var editor = CKEDITOR.replace( id, {
				height : 400,
				entities: false,
				basicEntities: false,
				entities_greek: false,
				entities_latin: false,
				skin:'office2013',
				filebrowserBrowseUrl : 'ckfinder/ckfinder.html',
				filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?type=Images',
				filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?type=Flash',
				filebrowserUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
				filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
				filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
				allowedContent:
				'h1 h2 h3 p blockquote strong em;' +
				'a[!href];' +
				'img(left,right)[!src,alt,width,height];' +
				'table tr th td caption;' +
				'span{!font-family};' +
				'span{!color};' +
				'span(!marker);' +
				'del ins'
			});



		});
	});
	
</script>


<?php if ( in_array($act, ['add','edit']) ): ?>
	<script>
		$("#file_muti").fileinput({
			theme: 'fa',
			showUpload: false,
		});

		$("#file_single").fileinput({
			theme: 'fa',
			showUpload: false,
			dropZoneEnabled: false
		});

		$(function() {
			$('#form_validation').validate({

				highlight: function (input) {
					$(input).parents('.form-line').addClass('error');
				},
				unhighlight: function (input) {
					$(input).parents('.form-line').removeClass('error');
				},
				errorPlacement: function (error, element) {
					$(element).parents('.form-group').append(error);
				}
			});
		});
	</script>

<?php endif ?>