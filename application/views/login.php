<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>登录管理系统</title>
<meta name="keywords"  content="admin" />
<meta name="description" content="admin system" />
<meta name="author" content="jin" />
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name='apple-touch-fullscreen' content='yes'>
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<meta name="format-detection" content="address=no">
<link rel="icon" href="<?=base_url().'resource/images/icon/favicon.ico'?>" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="<?=base_url().'resource/css/style.css'?>" />
<script src="<?=base_url().'resource/javascript/jquery.js' ?>"></script>
<script src="<?=base_url().'resource/javascript/public.js'?>"></script>
<script src="<?=base_url().'resource/javascript/plug-ins/customScrollbar.min.js'?>"></script>
</head>
<body class="login-page">
<?php $message[0]='1';var_dump($message) ?>
	<section class="login-contain">
		<header>
			<h1>试制信息化管理系统</h1>
			<p>Project-X</p>
		</header>
		<div class="form-content">
            <?=form_open('','')?>
                <ul>
                    <li>
                        <div class="form-group">
                            <label class="control-label">账号：</label>
                            <input name="username" type="text" placeholder="您的账号..." class="form-control form-underlined"/>
                        </div>
                        <div class="error-message">
                            <?=form_error('username')?>
                        </div>
                    </li>
                    <li>
                        <div class="form-group">
                            <label class="control-label">密码：</label>
                            <input name="password" type="password" placeholder="您的密码..." class="form-control form-underlined" />
                        </div>
                        <div class="error-message">
                            <?=form_error('password')?>
                        </div>
                    </li>
                    <li>
                        <label class="check-box">
                            <input type="checkbox" name="remember"/>
                            <span>记住账号密码</span>
                        </label>
                    </li>
                    <li>
                        <button class="btn btn-lg btn-block" id="entry">立即登录</button>
                    </li>
                    <li>
                        <p class="btm-info">©Copyright 2019  <a class="btm-info" href="#" target="_blank" title="DeathGhost">  dyk Prototype Team</a></p>
                        <address class="btm-info">JiangSu YanCheng</address>
                    </li>
                </ul>
            </form>
		</div>
	</section>
</body>
</html>
