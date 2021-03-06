<?php 
//error_reporting(0);
//Chuyển trang không thông báo
function redirect($url=''){
	echo '<script language="javascript">window.location = "'.$url.'" </script>';
	exit();
}

function stripUnicode($str){
	if(!$str) return false;
	$unicode = array(
		'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
		'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
		'd'=>'đ',
		'D'=>'Đ',
		'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
		'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
		'i'=>'í|ì|ỉ|ĩ|ị',	  
		'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
		'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
		'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
		'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
		'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
		'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
		'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
	);
	foreach($unicode as $khongdau=>$codau) {
		$arr=explode("|",$codau);
		$str = str_replace($arr,$khongdau,$str);
	}
	return $str;
}// Doi tu co dau => khong dau

function dump($arr, $exit=1){
	echo "<pre>";	
	var_dump($arr);
	echo "<pre>";	
	if($exit)	exit();
}

function processInput($uri){        
        $uri = implode('/', 
            array_slice(
                explode('/', $_SERVER['REQUEST_URI']), 2));         

            return $uri;    
    }

function changeTitle($str)
{
	$str = stripUnicode($str);
	$str = mb_convert_case($str,MB_CASE_LOWER,'utf-8');
	$str = trim($str);
	$str=preg_replace('/[^a-zA-Z0-9\ ]/','',$str); 
	$str = str_replace("  "," ",$str);
	$str = str_replace(" ","-",$str);
	return $str;
}
function changeTitleImage($str)
{
	$str = stripUnicode($str);
	$str = mb_convert_case($str,MB_CASE_LOWER,'utf-8');
	$str = trim($str);
	$str = str_replace("  "," ",$str);
	$str = str_replace(" ","-",$str);
	return $str;
}

function transfer($msg,$page="index.php")
{
	$showtext = $msg;
	$page_transfer = $page;
	include("./templates/transfer_tpl.php");
	exit();
}

function fns_Rand_digit($min,$max,$num)
{
	$result='';
	for($i=0;$i<$num;$i++){
		$result.=rand($min,$max);
	}
	return $result;	
}

function delete_file($file){
	return @unlink($file);
}

function reArrayFiles(&$file_post) {

	$file_ary = array();
	$file_count = count($file_post['name']);
	$file_keys = array_keys($file_post);

	for ($i=0; $i<$file_count; $i++) {
		foreach ($file_keys as $key) {
			$file_ary[$i][$key] = $file_post[$key][$i];
		}
	}

	return $file_ary;
}

function upload_image($file, $folder, $filename ='')
{
	global $imagine;
	$file_name = $_FILES[$file]['name'];
	$file_size = $_FILES[$file]['size'];
	$file_tmp = $_FILES[$file]['tmp_name'];
	$file_type = $_FILES[$file]['type'];

	$file_ext = explode('.',$_FILES[$file]['name']);
	$file_ext=strtolower(end($file_ext));



	$expensions= array("jpeg","jpg","png");

	$name = basename($_FILES[$file]['name'], '.'.$file_ext);

	$name=changeTitleImage($name).'-'.fns_Rand_digit(0,9,4);

	$filename = $name.'.'.$file_ext;

	if (in_array($file_ext,$expensions)) {
		$imagine->open($file_tmp )->save($folder . $filename);

		return $filename;
	}


	return false;

}

function upload_photos($file, $folder, $filename ='')
{
	global $imagine;
	if (empty($file)) {
		return false;
	}
	$file_name = $file['name'];
	$file_size = $file['size'];
	$file_tmp = $file['tmp_name'];
	$file_type = $file['type'];

	$file_ext = explode('.',$file['name']);
	$file_ext=strtolower(end($file_ext));
	$expensions= array("jpeg","jpg","png");

	$name = basename($file['name'], '.'.$file_ext);

	$name=changeTitleImage($name).'-'.fns_Rand_digit(0,9,4);

	$filename = $name.'.'.$file_ext;


	if (in_array($file_ext,$expensions)) {
		$imagine->open($file_tmp )->save($folder . $filename);

		return $filename;
	}
	return false;
}

function create_thumb($file, $width=200, $height=200, $thumb_type, $folder, $file_name='')
{
	if (empty($file)) {
		return false;
	}

	global $imagine ;
	$new_width   = (int)$width ? (int)$width : 200;
	$new_height   = (int)$height ? (int)$height : 200;
	$mode = $thumb_type == 1 ? Imagine\Image\ImageInterface::THUMBNAIL_INSET : Imagine\Image\ImageInterface::THUMBNAIL_OUTBOUND;

	if ($new_width && !$new_height) {
		$new_height = floor ($height * ($new_width / $width));
	} else if ($new_height && !$new_width) {
		$new_width = floor ($width * ($new_height / $height));
	}

	$size    = new Imagine\Image\Box($new_width, $new_height);

	$image_url = $folder.$file;
	$origin_x = 0;
	$origin_y = 0;

	$ext = end(explode('.',$file));

	$file_name = $file_name ? $file_name : $file;
	$file_name = basename($file_name, '.'.$ext);
	$new_file=$file_name.fns_Rand_digit(0,9,4).'_'.round($new_width).'x'.round($new_height).'.'.$ext;


	$imagine->open($image_url)
	->thumbnail($size, $mode)
	->save($folder . $new_file);

	return $new_file;
}

function check_quyen($type, $act)
{
	global $db , $id_login, $is_root;

	if ($is_root || $act == 'login' || $act == 'logout' ) {
		return true;
	}

	return false;

}

function get_main_danhmuc($com, $type, $level = 0, $id_select, $id_parent = 0)
{
    global $db, $config_current;
    if (!$com || !$type) {
        return;
    }

    $str='
    <select data-live-search="true" data-live-search-placeholder="Chọn danh mục" data-level="'. $level .'" id="danhmuc_cap_'. $level .'" name="id_danhmuc['. $level .']" class="select-danhmuc" data-width="100%">
    <option value="" readonly>Danh mục cấp ' . ($level + 1) . '</option>
    ';
    $db->where('type', $type);
    $db->where('level', $level);
    if ($id_parent) {
        $db->where('id_parent', $id_parent);
    }


    $db->orderBy('stt', 'ASC');
    $db->orderBy('id', 'DESC');
    $danhmuc_cap = $db->get($com, null, 'ten, level, id_parent, id');

    $origin_level = $level;

    //get id_select danh mục không phải là danh mục con cuối cùng
    while ($level < $config_current['danhmuc'] - 1) {
        $db->where('id' ,$id_select);
        $select = $db->getOne($com, 'ten, level, id_parent, id');
        $id_select = $select['id_parent'] ? $select['id_parent'] : $id_select;

        $id_parent--;
        $level++;
    }


    

    foreach ($danhmuc_cap as $item) {
        if ($item['id'] == $id_select) {
            $selected="selected";
        }
        else 
            $selected='';
        $str.='<option value='.$item["id"].' '.$selected.'>'.$item["ten"].'</option>';
    }

    $str.='</select>';
    return $str;

}

function get_tieude_danhmuc($com, $type, $level = 0, $id_select, $id_parent = 0)
{
	global $db, $config_current;
    if (!$com || !$type) {
        return;
    }

    $origin_level = $level;
    



    //get id_select danh mục không phải là danh mục con cuối cùng
    while ($level < $config_current['danhmuc'] - 1) {
        $db->where('id' ,$id_select);
        $select = $db->getOne($com, 'ten, level, id_parent, id');
        $id_select = $select['id_parent'] ? $select['id_parent'] : $id_select;

        $level++;
    }



    $db->where('type', $type);
    $db->where('id', $id_select);
    $db->where('level', $origin_level);
    $db->orderBy('stt', 'ASC');
    $db->orderBy('id', 'DESC');
    $danhmuc_cap = $db->getOne($com, 'ten, level, id_parent, id');



    return $danhmuc_cap['ten'];
}

function phanquyen_menu($ten,$com,$act,$type, $level = null){
	global $db, $is_root;

	if (!is_null($level)) {
		$url_level = "&level=" . $level;
	}

	if ($_SESSION['isLoggedIn'] && check_quyen($type, $act)) {
		echo  "<li><a href='index.php?com=".$com."&act=".$act."&type=".$type. $url_level ."'>".$ten."</a></li>";
	}
}

?>