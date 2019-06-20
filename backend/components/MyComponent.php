<?php

namespace backend\components;

use yii\base\Component;

class MyComponent extends Component {

    public function hello() {
        return "Hello, World!";
    }

    //Cắt chuỗi theo số ký tự
    public function _substr($str, $length, $minword = 3) {
        $sub = '';
        $len = 0;
        foreach (explode(' ', $str) as $word) {
            $part = (($sub != '') ? ' ' : '') . $word;
            $sub .= $part;
            $len += strlen($part);
            if (strlen($word) > $minword && strlen($sub) >= $length) {
                break;
            }
        }
        return $sub . (($len < strlen($str)) ? ' ...' : '');
    }

    //Chuyen ky tu tieng viet sang khong co dau
    public function convertSpace($string) { 
        $a = array(".", "Ф", "'", ")", "(", "ễ", ";", ",", "&", "&quot;", "“", "”", "/", "Á", "À", "Ả", "Ã", "Ạ", "Ó", "Ò", "Ỏ", "Õ", "Ọ", "Ă", "Ắ", "Ằ", "Ẳ", "Ẵ", "Ặ", "Ô", "Ố", "Ồ", "Ổ", "Ỗ", "Ộ", "Â", "Ã", "Á", "À", "Ả", "Ẫ", "Ậ", "Ơ", "Ớ", "Ờ", "Ở", "Ỡ", "Ợ", "É", "È", "Ẻ", "Ẽ", "Ẹ", "Ú", "Ù", "Ủ", "Ũ", "Ụ", "Ê", "Ễ", "Ề", "Ể", "Ệ", "Ế", "Ư", "Ứ", "Ừ", "Ử", "Ữ", "Ự", "Í", "Ì", "Ỉ", "Ĩ", "Ị", "Ý", "Ỳ", "Ỷ", "Ỹ", "Ỵ", "Đ", "á", "à", "ả", "ã", "ạ", "ó", "ò", "ỏ", "õ", "ọ", "ă", "ắ", "ằ", "ẳ", "ẵ", "ặ", "ô", "ố", "ồ", "ổ", "ỗ", "ộ", "â", "ã", "ấ", "ầ", "ẩ", "ẫ", "ậ", "ơ", "ớ", "ờ", "ở", "ỡ", "ợ", "é", "è", "ẻ", "ê", "ế", "ề", "ệ", "ẽ", "ẹ", "ú", "ù", "ủ", "ũ", "ụ", "ê", "ẽ", "ề", "ể", "ệ", "ư", "ứ", "ừ", "ử", "ữ", "ự", "í", "ì", "ỉ", "ĩ", "ị", "ý", "ỳ", "ỷ", "ỹ", "ỵ", "đ", "Ầ", "ậ", "%", ":", "?", "Ấ");
        $b = array("", "", "", "", "", "e", "", "", "", "", "", "", "", "a", "a", "a", "a", "a", "o", "o", "o", "o", "o", "a", "a", "a", "a", "a", "a", "o", "o", "o", "o", "o", "o", "a", "a", "a", "a", "a", "a", "a", "o", "o", "o", "o", "o", "o", "e", "e", "e", "e", "e", "e", "u", "u", "u", "u", "u", "e", "e", "e", "e", "e", "u", "u", "u", "u", "u", "u", "i", "i", "i", "i", "i", "y", "y", "y", "y", "y", "d", "a", "a", "a", "a", "a", "o", "o", "o", "o", "o", "a", "a", "a", "a", "a", "a", "o", "o", "o", "o", "o", "o", "a", "a", "a", "a", "a", "a", "a", "o", "o", "o", "o", "o", "o", "e", "e", "e", "e", "e", "e", "e", "e", "e", "u", "u", "u", "u", "u", "e", "e", "e", "e", "e", "u", "u", "u", "u", "u", "u", "i", "i", "i", "i", "i", "y", "y", "y", "y", "y", "d", "a", "a", "pt", "hc", "dh", "a");
        $str = strtolower(str_replace($a, $b, str_replace(" ", "-", $string)));
        $str = preg_replace('/[^a-zA-Z0-9\-]/', '', $str);
        return $str;
    }

    //Chuyển ký tự tiếng Việt sang không dấu
    public function convertSpace2($str) {
        // In thuong
        $str = trim($str);
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
        $str = preg_replace("/(đ)/", 'd', $str);
        $str = preg_replace("/( )/", '-', $str);
        $str = preg_replace("/(!|\“|\”|\’|\‘|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|\~|\$|\_|\`|\{|\}|\|)/", "", $str);
        // In hoa
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'a', $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'e', $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'o', $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'u', $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $str);
        $str = preg_replace("/(Đ)/", 'd', $str);
        for ($i = 1; $i < 10; $i++) {
            $str = preg_replace("/(------|-----|----|---|--)/", '-', $str);
        }
        return strtolower($str);
    }

}
