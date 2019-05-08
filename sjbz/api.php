<?php
     $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>
 
<?php 
if($_GET["method"] == "mobile"){	
	if($_GET["lx"] == 'dongman'){
		$imgurl = 'http://api.shenzjd.com/sjbz/api.php?method=mobile&lx=dongman';
	}	
	else if($_GET["lx"] == 'meizi'){
		$imgurl = 'http://api.shenzjd.com/sjbz/api.php?method=mobile&lx=meizi';
	}
    else if($_GET["lx"] == 'fengjing'){
        $imgurl = 'http://api.shenzjd.com/sjbz/api.php?method=mobile&lx=fengjing';
    }
	else if($_GET["lx"] == 'suiji'){
		$imgurl = 'http://api.shenzjd.com/sjbz/api.php?method=mobile&lx=suiji';
	}
	else{
	    $imgurl = 'http://api.shenzjd.com/sjbz/api.php?method=mobile&lx=dongman';
	}
}else{
	if($_GET["lx"] == 'dongman'){
		$imgurl = 'http://api.shenzjd.com/sjbz/api.php?lx=dongman';
	}
	else if($_GET["lx"] == 'meizi'){
		$imgurl = 'http://api.shenzjd.com/sjbz/api.php?lx=meizi';
	}
    else if($_GET["lx"] == 'fengjing'){
         $imgurl = 'http://api.shenzjd.com/sjbz/api.php?lx=fengjing';
    }
	else if($_GET["lx"] == 'suiji'){
		$imgurl = 'http://api.shenzjd.com/sjbz/api.php?lx=suiji';
	}
	else{
	    $imgurl = 'http://api.shenzjd.com/sjbz/api.php?lx=dongman';
	}
}
    header("Location:".$imgurl);//跳转输出图片    
?>