<?php
define('ERROR_INVALID_PWD', 1403);
define('ERROR_REQUERIY_FIELD', 1404);
define('ERROR_PARA', 1405);
define('ERROR_SYSTEM', 1500);

function keydatas_successRsp($data = "", $msg = "") {
    keydatas_rsp(1,0, $data, $msg);
}

function keydatas_failRsp($code = 0, $data = "", $msg = "") {
    keydatas_rsp(0,$code, $data, keydatas_iconv($msg));
}

function keydatas_rsp($result = 1,$code = 0, $data = "", $msg = "") {
	die(json_encode(array("rs" => $result, "code" => $code, "data" => $data, "msg" => urlencode($msg))));
}

/** */
function keydatas_iconv($str,$encode = "UTF-8"){
    global $cfg_db_language;
    if(strtolower($cfg_db_language) == 'utf8'){
        return $str;
    }
	
    return iconv($cfg_db_language,$encode,$str);
}

if(!function_exists("dede_htmlspecialchars")){
    function dede_htmlspecialchars($str) {
        global $cfg_soft_lang;
        if (version_compare(PHP_VERSION, '5.4.0', '<')) return htmlspecialchars($str);
        if ($cfg_soft_lang=='gb2312') return htmlspecialchars($str,ENT_COMPAT,'ISO-8859-1');
        else return htmlspecialchars($str);
    }
}

?>