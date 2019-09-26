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
                <i class="i-l-1"></i>
                <i class="i-l-2"></i>
                <i class="i-l-3"></i>
                <strong><a href="" style="font-size:30px">Project-X</a></strong>
            </div>
        </div>

        <nav class="side-menu content mCustomScrollbar" data-mcs-theme="minimal-dark">
            <h2>
                <a href="index.html" class="InitialPage"><i class="icon-dashboard"></i>Dashboard</a>
            </h2>
            <ul>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-columns"></i>页面基础布局<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="flex-layout.html">弹性盒子布局</a>
                        </dd>
                        <dd>
                            <a href="flow-layout.html">瀑布流布局</a>
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
                <li>
                    <dl>
                        <dt>
                            <i class="icon-table"></i>表格UI<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="table.html">基础表格</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-list-alt"></i>表单UI<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="form.html">表单结构样式</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-external-link"></i>弹出窗口<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="popups.html">基础弹出层</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-bar-chart"></i>百度统计echarts图表<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="echarts.html">echarts统计图表</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-font"></i>文本编辑器<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="ueditor.html">百度UEDITOR编辑器</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-road"></i>进度条<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="progress.html">progress进度条兼容</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-tags"></i>Tab选项卡<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="tab.html">Tab选项卡</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-filter"></i>下拉菜单<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="button-dropdown.html">按钮式下拉菜单</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-sitemap"></i>页面分组标题<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="title.html">页面标题</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-columns"></i>分页<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="paging.html">jquery分页效果</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-spinner"></i>旋转动画<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="animation.html">刷新加载动画</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-fighter-jet"></i>面包屑导航<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="breadcrumb.html">面包屑</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-laptop"></i>文本面板<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="text-panel.html">文本面板</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-leaf"></i>块引用<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="blockquote.html">块引用</a>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>
                            <i class="icon-star"></i>第三方弹窗组件<i class="icon-angle-right"></i>
                        </dt>
                        <dd>
                            <a href="layer.html">web弹层组件</a>
                        </dd>
                    </dl>
                </li>
            </ul>
        </nav>
        <footer class="side-footer">©dyk prototype team</footer>
    </div>
