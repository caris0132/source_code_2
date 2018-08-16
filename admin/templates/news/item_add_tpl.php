<?php 
$db->where('id_hinhanh', $item['id']);
$db->where('type', $item['type']);
$db->orderBy('stt', 'ASC');
$db->orderBy('id', 'DESC');
$ds_photo = $db->get('hinhanh');
 ?>

<div class="container-fluid">

	<div class="row clearfix">
        <ol class="breadcrumb breadcrumb-bg-pink">
            <li><a href="index.php" title="Home"><i class="material-icons">home</i> Home</a></li>
            <li><a href="<?= $urlcu ?>&act=man" title="Quản lý bài viết"><i class="material-icons">library_books</i> Quản lý bài viết</a></li>
            <li><a href="" title="Home"><i class="material-icons">library_books</i> Thêm</a></li>
        </ol>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <form action="<?= $urlcu ?>&act=save" id="form_validation" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $_REQUEST['id'] ?>">
                <input type="hidden" name="data[type]" value="<?= $_REQUEST['type'] ?>">
			<div class="card">
				<div class="header">
					<h2>
						NHẬP DỮ LIỆU
					</h2>
					
				</div>

				<div class="body">
					<ul class="nav nav-tabs tab-nav-right" role="tablist">
						<li role="presentation" class="active"><a href="#home" data-toggle="tab"><i class="material-icons">home</i> HOME</a></li>
						
					</ul>
					<div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="form-group form-float">
                                <h2 class="card-inside-title">Hình ảnh</h2>
                                <?php if ($act == 'edit'): ?>
                                    <div class="col-md-6">
                                        <img src="<?= _upload_tintuc . $item['photo'] ?>" alt="<?= $item['ten'] ?>">
                                    </div>
                                <?php endif ?>
                                <div class="file-loading">
                                    <input id="file_single" class="file" type="file"  name="file">
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <h2 class="card-inside-title">Hình ảnh thêm</h2>
                                
                                <div class="file-loading">
                                    <input id="file_muti" class="file" type="file"  multiple name="files[]">
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <h3>Nội dung chính</h3>
                </div>
                <div class="body">
                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <?php foreach ($config['lang'] as $lang => $value): ?>
                            <li role="presentation" class="<?= $lang == '' || $lang == 'vi' ? 'active' : '' ?>" ><a href="#content_<?= $lang ?>" data-toggle="tab"><i class="material-icons">assignment</i> <?= $value ?></a></li>
                        <?php endforeach ?>
                        
                    </ul>
                    <div class="tab-content">
                        <?php foreach ($config['lang'] as $lang => $value): ?>
                            <div role="tabpanel" class="tab-pane fade <?= $lang == '' || $lang == 'vi' ? 'active' : '' ?> in" id="content_<?= $lang ?>" >
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <h2 class="card-inside-title">Tên bài viết</h2>
                                        <input type="text" class="form-control" name="data[ten<?= $lang ?>]" value="<?= $item['ten'.$lang] ?>" required placeholder="Title">
                                    </div>
                                    
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <h2 class="card-inside-title">Mô tả ngắn</h2>
                                        <textarea rows="4" name="data[mota<?= $lang ?>]" class="form-control no-resize" placeholder="Mô tả ngắn..."><?= $item['mota'.$lang] ?></textarea>
                                    </div>
                                    
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <h2 class="card-inside-title">Nội dung</h2>
                                        <textarea rows="4" id="noidung<?= $lang ?>" name="data[noidung<?= $lang ?>]" class="ckeditor form-control no-resize" placeholder="Nội dung..."><?= $item['noidung'.$lang] ?></textarea>
                                    </div>
                                    
                                </div>
                            </div>

                        <?php endforeach ?>
                        

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="header">
                    <h3>SEO</h3>
                </div>
                <div class="body">
                    <ul class="nav nav-tabs tab-nav-right" role="tablist">
                        <li role="presentation" class="active"><a href="#seo" data-toggle="tab"><i class="material-icons">home</i> SEO</a></li>
                        
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="seo">
                            
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <h2 class="card-inside-title">Title</h2>
                                    <input type="text" class="form-control" name="data[title]" placeholder="Title">
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <h2 class="card-inside-title">Từ khóa</h2>
                                <div class="form-line">
                                    <input type="text" class="form-control" name="data[keywords]" placeholder="Từ khóa">
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <h2 class="card-inside-title">Description</h2>
                                <div class="form-line">
                                    <textarea rows="4" name="data[description]" class="form-control no-resize" placeholder="Description..."></textarea>
                                </div>
                            </div>

                            
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-3">
                                <h2 class="card-inside-title">Nổi bật</h2>
                                <div class="switch">
                                    <label>
                                        OFF
                                        <input name="data[noibat]" <?= !isset($item['noibat']) || $item['noibat'] == 1 ? 'checked' : '' ?> type="checkbox">
                                        <span class="lever"></span>
                                        ON
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <h2 class="card-inside-title">Hiển thị</h2>
                                <div class="switch">
                                    <label>
                                        OFF
                                        <input name="data[hienthi]" <?= !isset($item['hienthi']) || $item['hienthi'] == 1 ? 'checked' : '' ?> type="checkbox">
                                        <span class="lever"></span>
                                        ON
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                        <button type="reset" class="btn btn-default">Reset</button>

                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>






