<?php
function stripUnicode($str)
{
    if (!$str) return false;
    $unicode = array(
        'a' => 'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|A',
        'd' => 'đ|D',
        'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|E',
        'i' => 'í|ì|ỉ|ĩ|ị|I',
        'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|O',
        'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|U',
        'y' => 'ý|ỳ|ỷ|ỹ|ỵ|Y',
        'b' => 'B',
        'f' => 'F',
        'g' => 'G',
        'h' => 'H',
        'k' => 'K',
        'l' => 'L',
        'm' => 'M',
        'n' => 'N',
        'q' => 'Q',
        'w' => 'W',
        'r' => 'R',
        't' => 'T',
        'p' => 'P',
        'x' => 'X',
        'z' => 'Z',
        's' => 'S',
        'j' => 'J',
        'c' => 'C',
        'v' => 'V',
    );
    foreach ($unicode as $nonUnicode => $uni) $str = preg_replace("/($uni)/i", $nonUnicode, $str);
    return $str;
}
function changeTitle($str){
    $str = trim($str);
    if ($str == ""){
        $str = str_replace('"','',$str);
        $str = str_replace("'",'',$str);
        $str = stripUnicode($str);
        $str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
        $str = str_replace(' ','-',$str);
        return $str;
    }
}

    function cate_parent ($data, $parent = 0,$str ="--", $select = 0){
        foreach ($data as $val){
            $id = $val['id'];
            $name = $val['name'];
            if ($val['parent_id'] == $parent)
            {
                if ($select != 0 &&  $id == $select){
                    echo "<option value = '$id' selected='selected' >$str $name</option>";
                }else{
                    echo "<option value = '$id '>$str $name</option>";
                }
                cate_parent ($data, $id , $str."-");
            }
        }
    }
?>
