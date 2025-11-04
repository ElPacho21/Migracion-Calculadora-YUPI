<?php
error_reporting(E_ALL);
ini_set('display_errors','On');

if (session_status() !== PHP_SESSION_ACTIVE) {
    
    $secure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off');
    $params = [
        'lifetime' => 60 * 60 * 24 * 7,
        'path' => '/',
        'domain' => '',
        'secure' => $secure,
        'httponly' => true,
        'samesite' => 'Lax',
    ];
    if (function_exists('session_set_cookie_params')) {
        session_set_cookie_params($params);
    }
    session_start();
}

function exp_to_dec($float_str)
{
    $float_str = (string)((float)($float_str));

    if(($pos = strpos(strtolower($float_str), 'e')) !== false)
    {
        $exp = substr($float_str, $pos+1);
        $num = substr($float_str, 0, $pos);
        
        if((($num_sign = $num[0]) === '+') || ($num_sign === '-')) $num = substr($num, 1);
        else $num_sign = '';
        if($num_sign === '+') $num_sign = '';
        
        if((($exp_sign = $exp[0]) === '+') || ($exp_sign === '-')) $exp = substr($exp, 1);
        else trigger_error("Could not convert exponential notation to decimal notation: invalid float string '$float_str'", E_USER_ERROR);
        
        $right_dec_places = (($dec_pos = strpos($num, '.')) === false) ? 0 : strlen(substr($num, $dec_pos+1));
        
        $left_dec_places = ($dec_pos === false) ? strlen($num) : strlen(substr($num, 0, $dec_pos));
        
        if($exp_sign === '+') $num_zeros = $exp - $right_dec_places;
        else $num_zeros = $exp - $left_dec_places;
        
        $zeros = str_pad('', $num_zeros, '0');
        
        if($dec_pos !== false) $num = str_replace('.', '', $num);
        
        if($exp_sign === '+') return $num_sign.$num.$zeros;

        else return $num_sign.'0.'.$zeros.$num;
    }
    else return $float_str;
}
function array2json($arr) { 
    if(function_exists('json_encode')) return json_encode($arr);
    if (empty($arr)) return '[]';
    $parts = array(); 
    $is_list = false; 

    $keys = array_keys($arr); 
    $max_length = count($arr)-1; 
    if(($keys[0] == 0) and ($keys[$max_length] == $max_length)) {
        $is_list = true; 
        for($i=0; $i<count($keys); $i++) {
            if($i != $keys[$i]) {
                $is_list = false;
                break; 
            } 
        } 
    } 

    foreach($arr as $key=>$value) { 
        if(is_array($value)) {
            if($is_list) $parts[] = array2json($value);
            else $parts[] = '"' . $key . '":' . array2json($value); 
        } else { 
            $str = ''; 
            if(!$is_list) $str = '"' . $key . '":'; 

            if(is_numeric($value)) $str .= $value;
            elseif($value === false) $str .= 'false';
            elseif($value === true) $str .= 'true'; 
            else $str .= '"' . addslashes($value) . '"';

            $parts[] = $str; 
        } 
    } 
    $json = implode(',',$parts); 
     
    if($is_list) return '[' . $json . ']';
    return '{' . $json . '}';
} 

require_once __DIR__ . "/variables.php";
if(isset($_GET['p']) && $_GET['p'] !== ''){
    session_destroy();
    session_start();
    if (function_exists('session_regenerate_id')) {
        session_regenerate_id(true);
    }
    $_SESSION['paso'] = "home";
}