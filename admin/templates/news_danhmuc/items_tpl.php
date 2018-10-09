
<div class="container-fluid">
	<div class="block-header">
		<h2>Quản lý bài viết</h2>
	</div>

	<div class="row clearfix">
		<ol class="breadcrumb breadcrumb-bg-pink">
			<li><a href="index.php" title="Home"><i class="material-icons">home</i> Home</a></li>
			<li><a href="<?= $urlcu ?>&act=man" title="Quản lý bài viết"><i class="material-icons">library_books</i> Quản lý bài viết</a></li>
			<li><a href="" title="Home"><i class="material-icons">library_books</i> Tất cả</a></li>
		</ol>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						QUẢN LÝ BÀI VIẾT
					</h2>
					
				</div>

				<div class="body">
					<div class="row">
						<div class="col-md-1">
							<a class="btn btn-primary waves-effect" href="<?= $urlcu . "&act=add&level=$level" ?>" title="Thêm">Thêm</a>
						</div>
						<div class="col-md-2">
							<button type="button" class="btn btn-danger waves-effect js-delete-all">Xóa chọn</button>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-bordered table-striped table-hover js-basic-example dataTable">
							<thead>
								<tr>
									<th>
										<input type="checkbox" class="filled-in" id="basic_checkbox_all" />
										<label for="basic_checkbox_all"></label>
									</th>
									<th>stt</th>
									
									<?php $level_for = 0 ?>
									<?php while ($level_for < $level ): ?>
										<th style="max-width: 90px">
											<?= get_main_danhmuc($com , $type, $level_for++, $item['id_parent']) ?>

										</th>
									<?php endwhile ?>
									<th>Tên bài viết</th>
									<?php /*?>
									<?php if ($config_current['image']): ?>
										<th>Hình ảnh</th>
									<?php endif ?><?php */?>
									<?php if ($config_current['checkbox']): ?>
										<?php foreach ($config_current['checkbox'] as $value): ?>
											<th><?= $value ?></th>
										<?php endforeach ?>
									<?php endif ?>
									<th>Thao tác</th>
								</tr>
							</thead>
							
							<tfoot>
								<tr>
									<th>
										<input type="checkbox" class="filled-in" id="basic_checkbox_all" />
										<label for="basic_checkbox_all"></label>
									</th>
									<th>stt</th>
									<?php $level_for = 0 ?>
									<?php while ($level_for < $level ): ?>
										<th style="max-width: 90px">
											<?= get_main_danhmuc($com , $type, $level_for++, $item['id_parent']) ?>

										</th>
									<?php endwhile ?>
									<th>Tên bài viết</th>
									<?php /*?>
									<?php if ($config_current['image']): ?>
										<th>Hình ảnh</th>
									<?php endif ?>
									<?php */?>
									<?php if ($config_current['checkbox']): ?>
										<?php foreach ($config_current['checkbox'] as $value): ?>
											<th><?= $value ?></th>
										<?php endforeach ?>
									<?php endif ?>
									<th>Thao tác</th>
								</tr>
							</tfoot>

							<tbody>
								<?php foreach ($items as $item): ?>
									<tr data-id="<?= $item['id'] ?>">
										<td>
											<input type="checkbox" class="js-check-delete filled-in" id="basic_checkbox_<?= $item['id'] ?>" />
											<label for="basic_checkbox_<?= $item['id'] ?>"></label>
										</td>
										<td><input class="stt-man-input" type="number" name="" value="<?= $item['stt'] ?>" placeholder=""></td>
										
										<?php $level_for = 0 ?>
										<?php while ($level_for < $level ): ?>
											<td>
												<?= get_tieude_danhmuc($com , $type, $level_for++, $item['id_parent']) ?>

											</td>
										<?php endwhile ?>
										<td><a href="<?= $urlcu ?>&act=edit&level=<?= $level ?>&id=<?= $item['id'] ?>" title="<?= $item['ten'] ?>"><?= $item['ten'] ?></a></td>
										<?php /* ?>
										<?php if ($config_current['image']): ?>
											<td>
												<img onerror="this.src='http://placehold.it/<?= $config_current['image']['width'] . 'x' . $config_current['image']['height'] ?>'" style="max-height: 50px" src="<?= _upload_tintuc . $item['thumb'] ?>" alt="<?= $item['ten'] ?>">
											</td>
										<?php endif ?>
										<?php */ ?>
										<?php foreach ($config_current['checkbox'] as $key => $value ): ?>

											<td>
												<div class="switch">
													<label>
														<input class="js-change-cell" <?= $item[$key] == 1 ? 'checked' : '' ?> type="checkbox" data-id="<?= $item['id'] ?>" data-table="<?= $com ?>" data-key="<?= $key ?>" >
														<span class="lever"></span>
													</label>
												</div>
											</td>
											
										<?php endforeach ?>
										
										<td>
											<a type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float" href="<?= $urlcu ?>&act=edit&level=<?= $level ?>&id=<?= $item['id'] ?>" title="Edit" >
												<i class="material-icons">edit</i>

											</a>
											<button type="button" class="js-delete-item btn btn-danger btn-circle waves-effect waves-circle waves-float" data-id="<?= $item['id'] ?>">
												<i class="material-icons">delete</i>
											</button>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$('.select-danhmuc').change(function () {
			var that = $(this);
			var id_parent = $(this).val();
			var level = +$(this).data('level') + 1;
			var id_danhmuc_cap = '#danhmuc_cap_' + level;
			var danhmuc_cap = $(id_danhmuc_cap);
			if (id_parent && danhmuc_cap) {
				$.ajax({
					url: 'ajax/ajax_load_danhmuc.php',
					type: 'POST',
					data: {
						"com": "<?= $com . '_danhmuc' ?>",
						'id_parent' : id_parent,
						'level' : level
					},
				})
				.done(function(data) {
					danhmuc_cap.parent().replaceWith(data);
					$(id_danhmuc_cap).selectpicker('render');
				})

			}
		})
	});
</script>