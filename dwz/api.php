<?php
require_once 'tcn.class.php';

$counter = intval(file_get_contents("counter.dat"));  
$_SESSION['#'] = true;  
$counter++;  
$fp = fopen("counter.dat","w");  
fwrite($fp, $counter);  
fclose($fp); 

if($_GET['url'] != ""){
  $url = $_GET['url'];
  $type = $_GET['type'];
  $tcn = new tcn();
  if($type == "long"){
    $url  = $tcn->expand($url);
    if ($_GET['encode'] === 'js') {
    	echo "function dwz(){document.write('" . $url ."');}";
	}else if($_GET['encode'] === 'json'){
    	header('Content-type:text/json');
    	$url = array('url'=>$url);
    	echo json_encode($url, JSON_UNESCAPED_UNICODE);
	}else {
    	echo $url;
	}    
  }else{  
  	$url  = $tcn->srt($url);
    if ($_GET['encode'] === 'js') {
    	echo "function dwz(){document.write('" . $url ."');}";
	}else if($_GET['encode'] === 'json'){
    	header('Content-type:text/json');
    	$url = array('url'=>$url);
    	echo json_encode($url, JSON_UNESCAPED_UNICODE);
	}else {
    	echo $url;
	}    
  }
}else{
  $url = '参数url为空！';
  if ($_GET['encode'] === 'js') {
    	echo "function dwz(){document.write('" . $url ."');}";
	}else if($_GET['encode'] === 'json'){
    	header('Content-type:text/json');
    	$url = array('url'=>$url);
    	echo json_encode($url, JSON_UNESCAPED_UNICODE);
	}else {
    	echo $url;
	}
}
?>