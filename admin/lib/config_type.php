<?php 
$config_type['news']['baiviet'] = [
	//khai báo hình ảnh chính 
	'image' => [
		'enable' => true,
		'width'  => 400,
		'height' => 200,
		'thumb'  => 1,
		'type'   => 'image',
	],

	//khai báo hình phụ liên quan
	'list_img' => [
		'enable' => true,
		'width'  => 50,
		'height' => 50,
		'thumb'  => 2,
		'type'   => 'image',

	],
	'noidung' => true,
	'mota' => true,
	//khai báo các nút check (nổi bật , hiển thị ...)
	'checkbox' => [
		'noibat' => 'Nổi bật',
		'hienthi' => 'Hiển thị',
	],
	// khai báo không seo
	'noseo' => false,
	//khai báo các cấp danh mục mổi phần tử là 1 cấp
	'danhmuc' => 2,

];

$config_type['news_danhmuc']['baiviet'] = [
	[
		//khai báo hình ảnh chính 
		'image' => [
			'enable' => true,
			'width'  => 400,
			'height' => 200,
			'thumb'  => 1,
			'type'   => 'image',
		],

		//khai báo hình phụ liên quan
		'list_img' => [
			'enable' => false,
			'width'  => 50,
			'height' => 50,
			'thumb'  => 2,
			'type'   => 'image',

		],
		'noidung' => true,
		'mota' => true,
		//khai báo các nút check (nổi bật , hiển thị ...)
		'checkbox' => [
			'noibat' => 'Nổi bật',
			'hienthi' => 'Hiển thị',
		],
		// khai báo không seo
		'noseo' => false,
		//khai báo các cấp danh mục mổi phần tử là 1 cấp
	],

	[
		//khai báo hình ảnh chính 
		'image' => [
			'enable' => true,
			'width'  => 400,
			'height' => 200,
			'thumb'  => 1,
			'type'   => 'image',
		],

		//khai báo hình phụ liên quan
		'list_img' => [
			'enable' => false,
			'width'  => 50,
			'height' => 50,
			'thumb'  => 2,
			'type'   => 'image',

		],
		'noidung' => true,
		'mota' => true,
		//khai báo các nút check (nổi bật , hiển thị ...)
		'checkbox' => [
			'noibat' => 'Nổi bật',
			'hienthi' => 'Hiển thị',
		],
		// khai báo không seo
		'noseo' => false,
		//khai báo các cấp danh mục mổi phần tử là 1 cấp
	]
]



?>