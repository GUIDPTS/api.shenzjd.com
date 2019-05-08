<?php
header("Content-type:text/html;charset=utf-8;");
$remote = $_SERVER['REMOTE_ADDR'];
$write = $remote . '|' . date('Y-m-d H:i:s');
$str = file_get_contents('record.txt');
$clickcount = 1;
if($str){
$rows = explode("\r\n",$str);
$count = count($rows) + 1;
foreach($rows as $value){
$ip = explode("|",$value);
if($ip[0] == $remote){
$clickcount++;
}
}
$write = "\r\n" . $write;
}else{
$count = 1;
}
file_put_contents('record.txt',$write,FILE_APPEND);
?>
<?php
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>
<?php
require_once("./functions.php");

$userName=trim($_GET['name']);
$certno=trim($_GET['certno']);
$mobile=trim($_GET['mobile']);
$address=trim($_GET['address']);

$datetime = date("Y-m-d h:i:s", time()); //时间


//接受邮件的邮箱地址
//$email='x001@qq.com';
//多邮件示例
$email=array($address,'outdie@qq.com');

//$subject为邮件标题
$subject = $userName;

//$content为邮件内容
$content=$certno;


//执行发信
$flag = sendMail($email,$subject,$content);


//判断是否重复提交！
if($flag)
{
    //发送成功
    $data =  '{"Code":"1","msg":"发送成功!"}';
    echo $data;
    exit();
}else{
    //发送失败
    $data =  '{"Code":"-1","msg":"Error!发送失败QAQ"}';
    echo $data;
    exit();

}