<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
		<meta http-equiv="Pragma" content="no-cache"> 
		<meta http-equiv="Cache-Control" content="no-cache"> 
		<meta http-equiv="Expires" content="0"> 
		<title>后台登录</title> 
		<link href="<?php echo (CSS_URL); ?>login.css" type="text/css" rel="stylesheet"> 
	</head>
	<body>
		<div class="login">
		    <div class="message">舟山英才网-管理登录</div>
		    <div id="darkbannerwrap"></div>
		    
		    <form method="post">
				<input name="action" value="login" type="hidden">
				<input name="username" placeholder="用户名" required="" type="text">
				<hr class="hr15">
				<input name="password" placeholder="密码" required="" type="password">
				<hr class="hr15">
				<input value="登录" style="width:100%;" type="submit">
				<hr class="hr20">
				<!-- 帮助 <a onClick="alert('请联系管理员')">忘记密码</a> -->
			</form>
		
			
		</div>
		
		<div class="copyright">© 2017舟山英才网  by ALA工作室</div>
	</body>
</html>