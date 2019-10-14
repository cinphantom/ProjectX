<?php
?>
<!DOCTYPE html>
<html lang="zh-CN">
<html>
<head>
    <meta charset="utf-8"/>
    <title>Project-X</title>
    <meta name="keywords"  content="dyk试制信息化系统" />
    <meta name="description" content="system-x" />
    <meta name="author" content="DeathGhost" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link rel="icon" href="<?=base_url().'resource/images/icon/favicon.ico'?>" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="<?=base_url().'resource/css/style.css'?>" />
    <script src="<?=base_url().'resource/javascript/jquery.js'?>"></script>
    <script src="<?=base_url().'resource/javascript/plug-ins/customScrollbar.min.js'?>"></script>
    <script src="<?=base_url().'resource/javascript/plug-ins/echarts.min.js'?>"></script>
    <script src="<?=base_url().'resource/javascript/plug-ins/layerUi/layer.js'?>"></script>
    <script src="<?=base_url().'resource/editor/ueditor.config.js'?>"></script>
    <script src="<?=base_url().'resource/editor/ueditor.all.js'?>"></script>
    <script src="<?=base_url().'resource/javascript/plug-ins/pagination.js'?>"></script>
    <script src="<?=base_url().'resource/javascript/public.js'?>"></script>
</head>
<body>
<div class="main-wrap">
    <div class="side-nav">
        <div class="side-logo">
            <div class="logo">
                <strong><a href="<?=site_url('site/index')?>" style="font-size:30px">Project-X</a></strong>
            </div>
        </div>

        <nav class="side-menu content mCustomScrollbar" data-mcs-theme="minimal-dark">
            <h2>
                <a href="index.html" class="InitialPage" ><i class="icon-dashboard"></i>Dashboard</a>
            </h2>
            <ul>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-columns"></i>计划&任务<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <i class="icon-check-sign"></i><a href="flex-layout.html">toDoList</a>
                        </dd>
                        <dd>
                            <i class="icon-comments"></i><a href="flow-layout.html">退队协作</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-inbox"></i>按钮UI<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="button.html">基础按钮</a>
                        </dd>
                    </dl>
                </li>
            </ul>
        </nav>
        <footer class="side-footer">©dyk prototype team</footer>
    </div>
    <div class="content-wrap">
        <header class="top-hd">
            <div class="hd-lt">
                <a class="icon-reorder"></a>
            </div>
            <div class="hd-rt">
                <ul>
                    <li>
                        <a><i class="icon-user"></i>welcome:<em>mason</em></a>
                    </li>
                    <li>
                        <a><i class="icon-bell-alt"></i>系统消息</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" id="JsSignOut"><i class="icon-signout"></i>退出登录</a>
                    </li>
                </ul>
            </div>
        </header>


