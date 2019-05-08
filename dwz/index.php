<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="神族九帝api,随机壁纸api,动漫壁纸api,美女壁纸api,一言api,随机头像api,加群api,动漫头像api,手机壁纸api,电脑壁纸api,自动换壁纸api,代刷网api,新浪短网址生成,新浪网址缩短,新浪短网址还原">
<meta name="keywords" content="神族九帝api,随机壁纸api,动漫壁纸api,美女壁纸api,一言api,随机头像api,加群api,动漫头像api,手机壁纸api,电脑壁纸api,自动换壁纸api,代刷网api,新浪短网址生成,新浪网址缩短,新浪短网址还原">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#fd4b5c">
<title>新浪短网址 - API</title>
</head>
<style type="text/css">
h3:hover {box-shadow:0px 0px 8px #D1D1D1;}
</style>
<div style="box-shadow: 5px 5px 25px 0 rgba(46,61,73,.2);border-radius:15px;font-size:13px;width:950px;font-family:微软雅黑,'Helvetica Neue',Arial,sans-serif;margin:10px auto 0px;border:0px solid #eee;max-width:100%;">
    <div style="width:100%;background-color: #3174ed;background-image: linear-gradient(90deg, #3174ed 0%, #FA8BFF 35%, #3fd9fb 88%);color:#FFFFFF;border-radius:15px 15px 0 0;">
        <h2 style="font-size:15px;word-break:break-all;padding:20px 32px;margin:0;text-align:center">新浪短网址 - API</h2>
    </div>
    <div style="margin:0px auto;width:90%">
        <h3 style="-webkit-transition: all .2s cubic-bezier(0, 0, 0, 0.48);-moz-transition: all .2s ease;border:.0625rem solid #fafafa;background:#fafafa repeating-linear-gradient(-45deg,#fff,#fff 1.125rem,transparent 1.125rem,transparent 2.25rem);margin:15px 0px;padding:20px;border-radius:5px;font-size:14px;color:#333;">
		# 新浪短网址API请求方式 #
		<ul>
		<li>Method: Get</li>
		</ul>
		<hr>
		# 请求地址 #<br/>
		<a style="color:#fd4b5c;text-decoration:none;">http://api.shenzjd.com/dwz/api.php</a><br/>
		# 参数 #<br/>
		<li>type//类型（long(短网址还原)/srt（网址缩短，默认，可不填））</li>
        <li>encode//返回类型（json/js/text）</li>
		<hr>
		# 返回数据 #<br/>
		<div style="width:100%;background-color: #000;background-image: linear-gradient(90deg, #6694ed 0%,);color:#FFFFFF;border-radius:5px;word-wrap:break-word;word-break:break-all;">
             js输出：function dwz(){document.write('http://t.cn/EiVzJE4');}<br/>
             json输出：{"url":"http:\/\/t.cn\/EiVzJE4"}
        </div>
		<hr>
		# 备注 #<br/>
		js调用举例:&lt;script src="http://api.shenzjd.com/dwz/api.php?encode=js">&lt;/script><br/>
        js输出举例:&lt;div>&lt;script>dwz()&lt;/script>&lt;/div><br/>
        短网址还原:http://api.shenzjd.com/dwz/api.php?type=long&url=http://t.cn/EiVzJE4
		<hr>
		# 示例 #<br/>
		<a style="color:#fd4b5c;text-decoration:none；" target="_blank">http://api.shenzjd.com/dwz/api.php?url=http://api.shenzjd.com</a><br>
        <a style="color:#fd4b5c;text-decoration:none；" target="_blank">http://api.shenzjd.com/dwz/api.php?url=http://api.shenzjd.com&encode=json</a>
		</h3>
          </div>
</div>
</html>
