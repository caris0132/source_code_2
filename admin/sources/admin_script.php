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
		$(document).ready(function() {

			var dataTable = $('.js-basic-example').DataTable({
				responsive: true
			});

			$('#basic_checkbox_all').click(function () {
				var res = $(this).is(':checked');
				if (res) {
					$('.js-check-delete').prop('checked' , true);
				} else {
					$('.js-check-delete').prop('checked' , false);
				}

			});
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

			function update_cell(table, id, key, value) {

				if (table && id && key) {
					$.ajax({
						url: 'ajax/ajax_update_cell.php',
						dataType: 'html',
						type: 'POST',

						data: {'table': table, 'id': id, 'key': key, 'value' : value},
					})
					.done(function() {
						console.log("success");
					})
					.fail(function() {
						console.log("error");
					})
					.always(function() {
						console.log("complete");
					});

				}
			}

			function delete_id(id, table) {
				swal({
					title: "XÓA BÀI VIẾT",
					text: "Thao tác không thể không thể phục hồi. Bạn có muốn xóa không?",
					type: "info",
					showCancelButton: true,
					closeOnConfirm: false,
					showLoaderOnConfirm: true,
				}, function () {
					$.ajax({
						url: "ajax/ajax_delete_id.php",
						type: 'POST',
						dataType: 'html',
						data: {id: id, table: table},
					})
					.done(function(result) {
						if (result) {
							swal("Đã xóa thành công!");
							if ($.isArray(id)) {
								$('.js-basic-example tr').each(function () {
									var id_row = $(this).data('id');
									
									if (id_row && $.inArray(id_row, id) >= 0) {
										dataTable.row($(this)).remove()
									}
								});
								dataTable.draw();
							}
							else {
								var rowCurrent = $('.js-basic-example').find('tr[data-id="' + id +'"]')
								dataTable.row(rowCurrent).remove().draw();
							}
						}
						else {
							swal("Đã xóa thất bại!");
						}
					})
					.fail(function() {
						swal("Đã xóa thất bại!");
					})
				});
			}

			$('.js-delete-item').click(function () {
				var id = $(this).data('id');
				var table = "<?= $_REQUEST['com'] ?>";
				var rowCurrent = $(this).parents('tr');
				delete_id(id, table);

			});

			$('.js-delete-all').click(function () {

				var id = $('.js-basic-example tbody tr').map(function () {
					if($(this).find('.js-check-delete:checked').length) {
						return $(this).data('id');
					}
				}).get();

				var table = "<?= $_REQUEST['com'] ?>";
				delete_id(id, table);

			});

			$('.js-change-cell').change(function () {
				var table = $(this).data('table');
				var id = $(this).data('id');
				var key = $(this).data('key');
				var value = $(this).is(':checked') ? 1 : 0;
				update_cell(table, id, key, value);
			})

		});

	</script>

<?php endif ?>

<?php if ($act == 'login'): ?>
	<script>
		

		$(function () {


			$('#sign_in').submit(function () {
				return false
			})
			
			var formLogin = $('#sign_in').validate({
				highlight: function (input) {
					console.log(input);
					$(input).parents('.form-line').addClass('error');
				},
				unhighlight: function (input) {
					$(input).parents('.form-line').removeClass('error');
				},
				errorPlacement: function (error, element) {
					$(element).parents('.input-group').append(error);
				}
			});


			

			$('.js-btn-login').click(function(event) {
				
				if (formLogin.form()) {
					var $username = $('#username').val();
					var $password = $('#password').val();
					$.ajax({
						url: 'ajax/ajax_login.php',
						type: 'POST',
						dataType: 'json',
						data: {username: $username, password: $password},
					})
					.done(function(result) {
						console.log(result);
						if (result.error) {
							swal('Opss!', result.error, 'error');
						}
						else {
							if (result.page) {
								window.location=result.page;
							}
						}

					})
					.fail(function() {
						console.log('fail')
						swal('Opss!', 'Đăng nhập không thành công', 'error');
					})
					
					
				}
			});
		});
	</script>
<?php endif ?>


<?php if ( in_array($act, ['add','edit']) ): ?>
	<script>
		var arrayImg = <?= json_encode($ds_photo) ?>;
		var arrayImgUrl = arrayImg.map(function(elem) {
			return '<?=  _upload_hinhthem ?>' + elem['photo'];
		});

		var arrayImgInfo = arrayImg.map(function(elem) {
			return {caption: elem['photo'], downloadUrl: '<?=  _upload_hinhthem ?>' + elem['photo'], width: "100px", key: elem['stt'], extra: {id: elem['id'], id_hinhanh: elem['id_hinhanh']}};
		})
		$("#file_muti").fileinput({
			theme: 'fa',
			showUpload: false,
			initialPreview: arrayImgUrl,
			initialPreviewAsData: true,
			initialPreviewConfig: arrayImgInfo,
			overwriteInitial: false,
			deleteUrl: "//<?= $config_url ?>/admin/ajax/ajax_delete_image.php",
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