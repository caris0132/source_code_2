<?php 
include 'ajax_config.php';

if ($_POST['com'] && $_POST['id_parent']) {
	$id_parent = (int)$_POST['id_parent'];
	$level = (int)$_POST['level'];
	$com = $_POST['com'];
	$str='
    <select data-live-search="true" data-live-search-placeholder="Chọn danh mục" data-level="'. $level .'" id="danhmuc_cap_'. $level .'" name="data[id_danhmuc]['. $level .']" class="select-danhmuc" data-width="100%">
    <option value="" readonly>Chọn danh mục...</option>
    ';


    $db->where('id_parent', $id_parent);
    $db->orderBy('stt', 'ASC');
    $db->orderBy('id', 'DESC');
    $danhmuc_cap = $db->get($com);
    foreach ($danhmuc_cap as $item) {
        if ($item['id'] == $id_select) {
            $selected="selected";
        }
        else 
            $selected='';
        $str.='<option value='.$item["id"].' '.$selected.'>'.$item["ten"].'</option>';
    }

    $str.='</select>';
    echo $str;
}
 ?>