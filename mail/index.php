
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="神族九帝api,随机壁纸api,动漫壁纸api,美女壁纸api,一言api,随机头像api,加群api,动漫头像api,手机壁纸api,电脑壁纸api,自动换壁纸api,代刷网api">
<meta name="keywords" content="神族九帝api,随机壁纸api,动漫壁纸api,美女壁纸api,一言api,随机头像api,加群api,动漫头像api,手机壁纸api,电脑壁纸api,自动换壁纸api,代刷网api">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#fd4b5c">
<title>邮件发送 - API</title>
</head>
<style type="text/css">
h3:hover {box-shadow:0px 0px 8px #D1D1D1;}
</style>
<div style="box-shadow: 5px 5px 25px 0 rgba(46,61,73,.2);border-radius:15px;font-size:13px;width:950px;font-family:微软雅黑,'Helvetica Neue',Arial,sans-serif;margin:10px auto 0px;border:0px solid #eee;max-width:100%;">
    <div style="width:100%;background-color: #3174ed;background-image: linear-gradient(90deg, #3174ed 0%, #FA8BFF 35%, #3fd9fb 88%);color:#FFFFFF;border-radius:15px 15px 0 0;">
        <h2 style="font-size:15px;word-break:break-all;padding:20px 32px;margin:0;text-align:center">邮件发送 - API</h2>
    </div>
    <div style="margin:0px auto;width:90%">
        <h3 style="-webkit-transition: all .2s cubic-bezier(0, 0, 0, 0.48);-moz-transition: all .2s ease;border:.0625rem solid #fafafa;background:#fafafa repeating-linear-gradient(-45deg,#fff,#fff 1.125rem,transparent 1.125rem,transparent 2.25rem);margin:15px 0px;padding:20px;border-radius:5px;font-size:14px;color:#333;">
		# 邮件发送API请求方式 #
		<ul>
		<li>Method: GET</li>
		</ul>
		<hr>
		# 请求地址 #<br/>
		<a style="color:#fd4b5c;text-decoration:none;">http://api.shenzjd.com/mail/api.php</a><br/>
		# 参数 #<br/>
		<li>address //收件人邮箱地址</li>
         <li>name //邮件标题</li>
          <li>certno //邮件内容(支持HTML格式)</li>
		<hr>
		# 返回数据 #<br/>
		<div style="width:100%;background-color: #000;background-image: linear-gradient(90deg, #6694ed 0%,);color:#FFFFFF;border-radius:5px">
		{"Code":"1","msg":"发送成功!"}<br/>
          {"Code":"-1","msg":"Error!发送失败QAQ"}<br/>
		</div>
		<hr>
		# 备注 #<br/>
		公共API邮件接口，请勿频繁发送垃圾邮件，此外邮件可能在垃圾箱里面，<a style="color:#df9f5c;text-decoration:none;">此API邮件含IP记录+邮件统计，一经发现频繁灌水拉黑邮箱和IP！</a><br/>
		<hr>
		# 示例 #<br/>
		<a style="color:#fd4b5c;text-decoration:none；" target="_blank">http://api.shenzjd.com/mail/api.php?address=outdie@qq.com&name=你好,世界&certno=缥缈今天也很装逼呢</a>
		</h3>
          </div>
</div>
</html>