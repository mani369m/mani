<?php
if (isset($_GET['v'])) {
    $mid = $_GET['v'];
    $html = file_get_contents('https://vidplay.one/xembed-' . $mid . '.html');
    $agent = 'Mozilla/5.0 (Linux; Android 14; Pixel 6 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.113 Mobile Safari/537.36 OPR/82.2.4342.79505';
    $html = str_replace("if(vvplay)", "if(noadsabc)", $html);
    $html = str_replace("$.get", "$.gdet", $html);
    $html = str_replace("if( window.cRAds", "//if( window.cRAds", $html);
    $html = str_replace("$('div.video_ad').h')", "//$('div.video_ad').h')", $html);
    $html = str_replace("async type=\"text/javascript\"", "", $html);
    $html = str_replace("data-cfasync=\"false\"  src=\"", "", $html);
    //$html = get_string_between($html, 'sources: [{file:"', '"},{file:');
    //header('Location: '.$html);
    echo $html;
} elseif (isset($_GET['d'])) {
    $mid = $_GET['d'];
    //https://vidplay.one/embed-1kldb3wesytc.html"
    $url = 'https://vidplay.one/embed-' . $mid . '.html';
    //$agent = 'Mozilla/5.0 (Linux; Android 13; V2218) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Mobile Safari/537.36';
    $agent = 'Mozilla/5.0 (Linux; Android 14; Pixel 6 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.6367.113 Mobile Safari/537.36 OPR/82.2.4342.79505';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);
    curl_setopt($ch, CURLOPT_URL, $url);
    $result = curl_exec($ch);
    $result = str_replace("async type=\"text/javascript\"", "", $result);
    $result = str_replace("data-cfasync=\"false\"  src=\"", "", $result);
    $result = str_replace("height: 65%", "height: 0%", $result);
    $result = str_replace("width:100%", "width:0%", $result);
    $result = str_replace("</style>", "img {display: block; margin-left: auto; margin-right: auto;}</style><a target=\"_blank\" href=\"https://cinitube.com/public\"><img src=\"https://movie.cinitube.com/cinitube.png\" alt=\"Forest\" style=\"width:150px\"></a>", $result);
    echo $result;
} elseif (isset($_GET['u'])) {
    $mid = $_GET['u'];
    $html = file_get_contents('https://vidplay.one/xembed-' . $mid . '.html');
    $html = str_replace("if(vvplay)", "if(noadsabc)", $html);
    $html = str_replace("$.get", "$.gdet", $html);
    $html = str_replace("if( window.cRAds", "//if( window.cRAds", $html);
    $html = str_replace("$('div.video_ad').h')", "//$('div.video_ad').h')", $html);
    $html = str_replace("async type=\"text/javascript\"", "", $html);
    $html = str_replace("data-cfasync=\"false\"  src=\"", "", $html);
    $html = get_string_between($html, 'sources: [{file:"', '"},{file:');
    //header('Location: '.$html);
    echo $html;
} elseif (isset($_GET['t'])) {
    $mid = $_GET['t'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $curl = curl_init("https://vidplay.one/xembed-" . $mid . ".html");
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("X_FORWARDED_FOR: $ip"));
    curl_exec($curl);
} else {
    echo "error!!!";
}

function get_string_between($string, $start, $end)
{
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}