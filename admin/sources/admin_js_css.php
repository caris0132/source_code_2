<?php 
$css_file = array(
	"https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext",
	"https://fonts.googleapis.com/icon?family=Material+Icons",
	"plugins/bootstrap/css/bootstrap.css",
	"plugins/node-waves/waves.css",
	"plugins/animate-css/animate.css",
	"plugins/morrisjs/morris.css",
	"css/style.css",
	"css/themes/all-themes.css"
);

$js_file = array(
	"plugins/bootstrap/js/bootstrap.js",
	"plugins/bootstrap-select/js/bootstrap-select.js",
	"plugins/jquery-slimscroll/jquery.slimscroll.js",
	"plugins/node-waves/waves.js",
	"plugins/jquery-countto/jquery.countTo.js",
	"ckeditor/ckeditor.js"
);



// <!-- Custom Js -->
array_push($js_file, "js/admin.js");

array_push($js_file, "js/demo.js");

if ($act == 'man') {
	array_push($css_file, "plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css");
}
if ( in_array($act, ['add','edit']) ) {
	array_push($css_file, "assets/bootstrap_fileinput/css/fileinput.css");
	array_push($css_file, "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
	array_push($js_file, "assets/bootstrap_fileinput/js/fileinput.js");
	array_push($js_file, "assets/bootstrap_fileinput/js/locales/vi.js");
	array_push($js_file, "assets/bootstrap_fileinput/themes/fa/theme.js");
}
?>
