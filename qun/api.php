<?php
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>

<?php

$guin = @$_REQUEST['guin']; //接收群号
$type = @$_REQUEST['type']; //接收类型

if ($guin != '')
{
$url = 'http://shang.qq.com/wpa/g_wpa_get?guin='.$guin;
$data = get($url);
$key = GetBetween($data,'key":"','"}'); //取得key
$url = 'http://shang.qq.com/wpa/qunwpa?idkey='.$key;
$body = get($url); //取得跳转页面源码

if ($type != '')
{
if ($type == '1') //如果类型为1，取得PC端加群链接
{
$link = GetBetween($body,'var qsig = "','";'); //取得PC端加群链接
$link = str_replace('\u0026','&',$link);
//echo $link;
echo '{"code":1,"url":';
echo '"';
echo $link;
echo '"}';
}

if ($type == '2') //如果类型为2，取得移动端加群链接
{
$link = GetBetween($body,'var k = "','";');
$link = urldecode($link);
//echo $link;
echo '{"code":1,"url":';
echo '"';
echo $link;
echo '"}';
}

if ($type == '3') //如果类型为3，取得公用加群链接
{
//echo $url;
echo '{"code":1,"url":';
echo '"';
echo $url;
echo '"}';
}

}else{
//echo $body;
echo '{"code":1,"url":';
echo '"';
echo $url;
echo '"}';
}
}else{
echo '{"code":-1,"msg":"群号guin错误!"';
}

function GetBetween($content,$start,$end){
$r = explode($start, $content);
if (isset($r[1])){
$r = explode($end, $r[1]);
return $r[0];
}
return '';
}

function get($url)
{
$header = array (
"Content-Type: application/x-www-form-urlencoded",
'Accept: */*',
"Referer: ".$url,
'User-Agent: Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1)',);
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_URL, $url);
$output = curl_exec($ch);
curl_close($ch);
return $output;
}

?>