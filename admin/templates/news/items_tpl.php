<div class="container-fluid">
	<div class="block-header">
		<h2>Quản lý bài viết</h2>
	</div>

	<div class="row clearfix">
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
							<a class="btn btn-primary waves-effect" href="<?= $create_url . "&act=add" ?>" title="Thêm">Thêm</a>
						</div>
						<div class="col-md-2">
							<button type="button" class="btn btn-danger waves-effect">Xóa chọn</button>
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
									<th>Tên bài viết</th>
									<th>Nỗi bật</th>
									<th>Ẩn/Hiện</th>
									<th>Thao tác</th>
								</tr>
							</thead>
							
							<tfoot>
								<tr>
									<th>

									</th>
									<th>stt</th>
									<th>Tên bài viết</th>
									<th>Nỗi bật</th>
									<th>Ẩn/Hiện</th>
									<th>Thao tác</th>
								</tr>
							</tfoot>

							<tbody>
								<?php foreach ($items as $item): ?>
									<tr>
										<td>
											<input type="checkbox" class="js-check-delete filled-in" id="basic_checkbox_<?= $item['id'] ?>" />
											<label for="basic_checkbox_<?= $item['id'] ?>"></label>
										</td>
										<td><input class="stt-man-input" type="number" name="" value="<?= $item['stt'] ?>" placeholder=""></td>
										<td><a href="<?= $urlcu ?>&act=edit&id=<?= $item['id'] ?>" title="<?= $item['ten'] ?>"><?= $item['ten'] ?></a></td>
										<td>
											<div class="switch">
												<label>
													<input <?= $item['noibat'] == 1 ? 'checked' : '' ?> type="checkbox">
													<span class="lever"></span>
												</label>
											</div>
										</td>
										<td>
											<div class="switch">
												<label>
													<input <?= $item['hienthi'] == 1 ? 'checked' : '' ?> type="checkbox">
													<span class="lever"></span>
												</label>
											</div>
										</td>
										<td>2011/04/25</td>
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