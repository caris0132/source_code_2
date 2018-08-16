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
							<a class="btn btn-primary waves-effect" href="<?= $urlcu . "&act=add" ?>" title="Thêm">Thêm</a>
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
									<th>Tên bài viết</th>
									<th>Hình ảnh</th>
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
									<th>Hình ảnh</th>
									<th>Nỗi bật</th>
									<th>Ẩn/Hiện</th>
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
										<td><a href="<?= $urlcu ?>&act=edit&id=<?= $item['id'] ?>" title="<?= $item['ten'] ?>"><?= $item['ten'] ?></a></td>
										<td>
											<img style="max-height: 50px" src="<?= _upload_tintuc . $item['thumb'] ?>" alt="<?= $item['ten'] ?>">
										</td>
										<td>
											<div class="switch">
												<label>
													<input class="js-change-cell" <?= $item['noibat'] == 1 ? 'checked' : '' ?> type="checkbox" data-id="<?= $item['id'] ?>" data-table="<?= $com ?>" data-key="noibat" >
													<span class="lever"></span>
												</label>
											</div>
										</td>
										<td>
											<div class="switch">
												<label>
													<input class="js-change-cell" <?= $item['hienthi'] == 1 ? 'checked' : '' ?> type="checkbox"  data-id="<?= $item['id'] ?>" data-table="<?= $com ?>" data-key="hienthi">
													<span class="lever"></span>
												</label>
											</div>
										</td>
										<td>
											<a type="button" class="btn btn-success btn-circle waves-effect waves-circle waves-float" href="<?= $urlcu ?>&act=edit&id=<?= $item['id'] ?>" title="Edit" >
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