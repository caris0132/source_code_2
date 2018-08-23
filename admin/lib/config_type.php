<?php 

$config_type['news']['baiviet'] = [
	//khai báo hình ảnh chính 
	'image' => [
		'enable' => true,
		'width'  => 200,
		'height' => 200,
		'thumb'  => 1,
		'type'   => 'image',
	],

	//khai báo hình phụ liên quan
	'list_img' => [
		'enable' => false,
		'width'  => 200,
		'height' => 200,
		'thumb'  => 1,
		'type'   => 'image',

	],
	'noidung' => false,
	'mota' => true,
	//khai báo các nút check (nổi bật , hiển thị ...)
	'checkbox' => [
		'noibat' => 'Nổi bật',
		'hienthi' => 'Hiển thị',
	],
	// khai báo không seo
	'noseo' => false,
	//khai báo các cấp danh mục mổi phần tử là 1 cấp
	'danhmuc' => [
		//cấp 1
		[
			'image' => [
				'enable' => true,
				'width'  => 200,
				'height' => 200,
				'thumb'  => 1,
				'type'   => 'image',
			],
			'list_img' => [
				'enable' => true,
				'width'  => 200,
				'height' => 200,
				'thumb'  => 1,
				'type'   => 'image',

			],
			'noidung' => true,
			'mota' => true,
			'checkbox' => [
				'noibat' => 'Nổi bật',
				'hienthi' => 'Hiển thị',
			],
		],
		//cấp 2
		[
			'image' => [
				'enable' => true,
				'width'  => 200,
				'height' => 200,
				'thumb'  => 1,
				'type'   => 'image',
			],
			'list_img' => [
				'enable' => true,
				'width'  => 200,
				'height' => 200,
				'thumb'  => 1,
				'type'   => 'image',

			],
			'noidung' => true,
			'mota' => true,
			'checkbox' => [
				'noibat' => 'Nổi bật',
				'hienthi' => 'Hiển thị',
			],
		]
	]

]


 ?>