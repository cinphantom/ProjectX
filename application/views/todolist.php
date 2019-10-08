<?php
?>

<main class="main-cont content mCustomScrollbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="padding-top:5px;" href="http://192.168.31.183/"><img src="TODO_files/logo.png"></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li id="id-span-new-task" style="display:none;"><a href="#" onclick="todo.hide_todo_details();"><span class="glyphicon glyphicon-plus"></span> <span class="language_newtask">新建任务</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span id="logout"><span class="glyphicon glyphicon-user"></span> mason</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" class="language_logout" onclick="spaceutil.logout('/');">退出</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row">

        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span class="language_tasklist">任务列表</span>
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <ul class="nav nav-tabs" id="id-nav-tabs-list">
                                <li class="active"><a href="#" data-toggle="tab" onclick='todo.get_list("mydoing", 0);'> <span class="language_processing">处理中</span> <span id="id-span-overview-doing" class="badge badge-info">1</span></a></li>
                                <li class=""><a href="#" data-toggle="tab" onclick='todo.get_list("mydone", 0);'> <span class="language_done">已完成</span> <span id="id-span-overview-done" class="badge badge-success">0</span></a></li>
                                <li class=""><a href="#" data-toggle="tab" onclick='todo.get_list("all", 0);'> <span class="language_all">全部</span> <span id="id-span-overview-all" class="badge badge-warning">1</span></a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4">
                            <div class="input-group" style="margin:10px 5px;">
                                <input type="text" class="form-control input-sm search-text">
                                <span class="input-group-btn">
									<button class="btn btn-success btn-sm search-btn" type="button"><span class="glyphicon glyphicon-search"></span></button>
								</span>
                            </div>
                        </div>
                    </div>

                    <div id="id-div-all-type" style="margin: 5px 5px 10px; display: none;">
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <div class="btn-group btn-group-sm" role="group">
                                <button type="button" class="btn btn-default" id="id-btn-type-alldoing" onclick='todo.get_list("alldoing", 0);'>处理中</button>
                            </div>
                            <div class="btn-group btn-group-sm" role="group">
                                <button type="button" class="btn btn-default" id="id-btn-type-alldone" onclick='todo.get_list("alldone", 0);'>已完成</button>
                            </div>
                            <div class="btn-group btn-group-sm" role="group">
                                <button type="button" class="btn btn-success" id="id-btn-type-all" onclick='todo.get_list("all", 0);'>全部</button>
                            </div>
                        </div>
                    </div>

                    <ul id="id-mylist" class="list-unstyled"><li class="li-todo-item" id="id-li-1" style="border-left:5px solid #999999;" onclick="todo.show_todo_details(1);"><div style="max-height:40px; margin-bottom:10px; font-weight:bold; overflow:hidden; text-overflow:ellipsis;text-decoration:line-through;white-space:nowrap;color:#999999">今天打酱油</div><div class="pull-right text-danger span-todo-state"><span class="glyphicon glyphicon-exclamation-sign"></span> 逾期</div><div class="text-muted"><span class="glyphicon glyphicon-user"></span> 普通任务 &nbsp;&nbsp; 执行者: <a class="username" href="javascript:void(0)" title="邮箱:undefined
电话:undefined">mason</a> &nbsp;&nbsp; 开始于: 2019-06-10 13:00</div></li></ul>
                    <div id="id-div-task-count" style="text-align: center; padding-top: 10px; color: rgb(58, 135, 173); display: none;">--&nbsp;&nbsp;<span class="language_taskempty">任务列表为空</span>&nbsp;&nbsp;--</div>
                    <nav>
                        <ul class="pagination" id="pagebar" style="display: none;"></ul>
                    </nav>
                </div>
            </div>
        </div>

        <div class="col-md-6" id="id-div-right">
            <div id="id-div-new-todo" style="position: relative;">
                <div class="panel panel-primary">
                    <div class="panel-heading language_addtask">添加新任务</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4" style="margin-top:7px;">
                                <div class="icheckbox_flat-red" style="position: relative;"><input class="icheck-flat-red" type="checkbox" name="iCheck" id="id-todo-priority" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> <b class="txt-red language_urgenttask">紧急任务</b>
                            </div>

                            <div class="col-xs-8">
                                <div class="btn-group pull-right" role="group" aria-label="...">
                                    <button type="button" class="btn btn-default"><span class="language_sendto">指派给</span> <span class="glyphicon glyphicon-hand-right txt-red"></span></button>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style="color:#3a87ad;width:150px">
                                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<b id="id-todo-user-dropmenu-holder">mason</b>&nbsp;&nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" id="id-dropmenu-user-todo" style="max-height:400px;overflow:auto;"><li><a href="#" style="color:#d9534f;"><span class="glyphicon glyphicon-user" style="margin-right:10px;"></span>mason</a></li><li class="divider"></li><li><a href="#" style="color:#3a87ad;"><span class="glyphicon glyphicon-user" style="margin-right:10px;"></span>admin</a></li></ul>
                                    </div>
                                </div>
                            </div>

                            <div id="id-div-partner" class="col-xs-12" style="margin-top:15px;margin-left:-5px;"><span class="badge badge-success badge-user" data-toggle="dropdown" onclick="todo.init_partner_dropmenu_dropmenu();">+ 添加参与者</span><ul class="dropdown-menu" id="id-dropmenu-actor" style="max-height:400px;overflow:auto;"></ul><span class="badge badge-error badge-user">mason</span></div>

                            <div class="col-xs-12" style="margin-top:15px">
                                <div class="input-group">
                                    <span class="input-group-addon language_endtime">到期时间</span>
                                    <input type="text" value="2019-10-09" class="form-control" id="todo-dateinput" data-date-format="yyyy-mm-dd">
                                    <!--<input type="text" value="" class="form-control" id="todo-dateinput" data-date-format="yyyy-mm-dd hh:ii">-->
                                </div>

                            </div>
                        </div>
                        <div class="clearfix" style="margin:15px 0px;">
                            <textarea id="id-todo-content" class="form-control todo-content" rows="4"></textarea>
                        </div>

                        <div class="col-xs-12" id="up-todo-container">
                            <div class="dropdown pull-left">
                                <a class="dropdown-toggle hover-pointer" data-toggle="dropdown" aria-expanded="false" style="color:#3a87ad;">
                                    <span class="glyphicon glyphicon-paperclip"></span>&nbsp;<span class="language_addattachs">添加附件</span>&nbsp;<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#" id="pick-todo-file" style="color: rgb(102, 102, 102); position: relative; z-index: 0;"><span class="glyphicon glyphicon-cloud-upload" style="margin-right:10px;"></span><span class="language_directupload">直接上传</span></a></li>
                                    <li><a href="#" id="select-todo-file" style="color:#666;"><span class="glyphicon glyphicon-folder-open" style="margin-right:10px;"></span><span class="language_selectfile">从文件库中选择</span></a></li>
                                </ul>
                            </div>

                            <div class="pull-right"><div class="icheckbox_flat-pink" style="position: relative;"><input class="icheck-flat-pink" type="checkbox" id="id-todo-private" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> <span class="language_private"> 仅自己可见</span></div>
                        </div>

                        <div class="col-xs-12 div-attach" id="id-div-todo-attach" style="margin-top:10px;padding:5px;background:#eee;border-radius:4px;display:none;">
                            <ul class="list-unstyled filelist"></ul>
                            <ul class="list-unstyled pathlist"></ul>
                        </div>

                        <button data-style="zoom-out" class="btn btn-success ladda-button pull-right" style="margin-top:20px;">
                            <span class="ladda-label"><span class="glyphicon glyphicon-send">&nbsp;</span><span class="language_addtask">添加新任务</span>&nbsp;</span>
                        </button>
                    </div>
                </div>
                <div id="p1dmj6lci8cr71her1c3d1r6ga1t0_html5_container" style="position: absolute; background: transparent none repeat scroll 0% 0%; width: 0px; height: 0px; overflow: hidden; z-index: -1; opacity: 0; top: 0px; left: 0px;" class="plupload html5"><input id="p1dmj6lci8cr71her1c3d1r6ga1t0_html5" style="font-size: 999px; position: absolute; width: 100%; height: 100%;" type="file" accept="" multiple="multiple"></div></div>

            <div id="id-div-todo-details" style="display: none; position: relative;">
                <div class="panel panel-primary">
                    <div class="panel-heading"><span class="language_taskdetails">任务详情</span>&nbsp;&nbsp;<span id="id-todo-settings" class="glyphicon glyphicon-trash hover-pointer"></span> <span class="glyphicon glyphicon-remove pull-right hover-pointer" id="id-btn-hide-details"></span></div>
                    <div class="panel-body">
                        <div id="id-details-overview" style="padding-bottom:10px;border-bottom:1px solid #eee;"></div>
                        <div id="id-div-edit-todo" style="text-align:right;margin-top:5px;display:none;"><a href="javascript:void(0);" onclick="todo.toggle_edit_todo();"><span class="glyphicon glyphicon-edit"></span> <span class="language_updatetask">更新任务</span></a></div>

                        <div id="id-details-opt" style="display:none;">
                            <div style="margin:5px 5px;">
                                <div style="width:25%; margin-top:4px; float:left;">
                                    <div class="iradio_square-blue" style="position: relative;"><input class="icheck-square-blue" type="radio" name="optionsRadios" value="2" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> <span class="language_complete">完成</span>
                                </div>
                                <div style="width:25%; margin-top:4px; float:left;">
                                    <div class="iradio_square-blue checked" style="position: relative;"><input id="id-radio-update" class="icheck-square-blue" type="radio" name="optionsRadios" value="3" checked="checked" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div> <span class="language_update">更新</span>
                                </div>
                                <div style="width:8%; margin-top:4px; float:left;">
                                    <div class="iradio_square-blue" style="position: relative;"><input id="id-radio-send" class="icheck-square-blue" type="radio" name="optionsRadios" value="1" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
                                </div>
                                <div style="width:42%; float:left;">
                                    <div class="btn-group" role="group" aria-label="..." style="margin-bottom:10px;">
                                        <button type="button" class="btn btn-default"><span class="language_forward">转发</span></button>
                                        <button type="button" class="btn btn-default btn-group dropdown-toggle" data-toggle="dropdown" style="color:#3a87ad;min-width:120px">
                                            <span class="glyphicon glyphicon-user"></span>&nbsp;<b id="id-history-user-dropmenu-holder"></b>&nbsp;<span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" id="id-dropmenu-history-todo" style="max-height:400px;overflow:auto;">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix" style="margin:10px 10px;">
                                <textarea id="id-history-content" class="form-control todo-content" rows="3"></textarea>
                            </div>

                            <div class="col-xs-12" id="up-history-container">
                                <input type="hidden" id="thisid" value="1">
                                <button data-style="zoom-out" class="btn btn-success ladda-button pull-right"><span class="ladda-label"><span class="glyphicon glyphicon-send"></span>&nbsp;<span class="language_update">更新</span>&nbsp;</span></button>
                                <div class="dropdown pull-left">
                                    <a class="dropdown-toggle hover-pointer" data-toggle="dropdown" aria-expanded="false" style="color:#3a87ad;">
                                        <span class="glyphicon glyphicon-paperclip"></span>&nbsp;<span class="language_addattachs">添加附件</span>&nbsp;<span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#" id="pick-history-file" style="color: rgb(102, 102, 102); position: relative; z-index: 0;"><span class="glyphicon glyphicon-cloud-upload" style="margin-right:10px;"></span><span class="language_directupload">直接上传</span></a></li>
                                        <li><a href="#" id="select-history-file" style="color:#666;"><span class="glyphicon glyphicon-folder-open" style="margin-right:10px;"></span><span class="language_selectfile">从文件库中选择</span></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-xs-12 div-attach" id="id-div-history-attach" style="margin-top:10px;padding:5px;background:#eee;border-radius:4px;display:none;">
                                <ul class="list-unstyled filelist"></ul>
                                <ul class="list-unstyled pathlist"></ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel panel-primary" id="id-div-history-list" style="max-height: 876px;">
                    <div class="panel-heading language_handle" id="id-div-history-head">处理与讨论</div>
                    <div class="panel-body" id="id-div-history-body" style="width: calc(100% - 2px); overflow-y: auto; max-height: 893px;">
                        <ul id="id-history" class="list-unstyled"></ul>
                    </div>
                </div>

                <div id="p1dmj6lcis1nf8ak41c62157omis3_html5_container" style="position: absolute; background: transparent none repeat scroll 0% 0%; width: 0px; height: 0px; overflow: hidden; z-index: -1; opacity: 0; top: 0px; left: 0px;" class="plupload html5"><input id="p1dmj6lcis1nf8ak41c62157omis3_html5" style="font-size: 999px; position: absolute; width: 100%; height: 100%;" type="file" accept="" multiple="multiple"></div></div>
        </div>
    </div> <!-- end row -->
</div> <!-- end container -->

<div id="blackoverlay"></div>

<div id="id-todo-filetree-modal" class="filetree-modal">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close">×</button>
            <span class="modal-title language_selectattachs" style="font-size:18px;">选择附件</span>
            <span class="modal-title-count" style="font-size:14px;">( 0 )</span>
        </div>
        <div class="modal-body">
            <div id="ms_1" class="scroll_area" style="float: initial;"><div class="filetree scroller" style="overflow: hidden;"></div><div id="scrollbar_x_1" class="scrollbar_x" style="display: none;"><div class="scroll_dragger"></div></div><div id="scrollbar_y_1" class="scrollbar_y" style="display: none;"><div class="scroll_dragger"></div></div><div class="clearfix"></div></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default language_cancel">取消</button>
            <button type="button" class="btn btn-primary language_confirm">确定</button>
        </div>
    </div><!-- /.modal-content -->
</div>

<div id="id-history-filetree-modal" class="filetree-modal">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close">×</button>
            <span class="modal-title language_selectattachs" style="font-size:18px;">选择附件</span>
            <span class="modal-title-count" style="font-size:14px;">( 0 )</span>
        </div>
        <div class="modal-body">
            <div id="ms_2" class="scroll_area" style="float: initial;"><div class="filetree scroller" style="overflow: hidden;"></div><div id="scrollbar_x_2" class="scrollbar_x" style="display: none;"><div class="scroll_dragger"></div></div><div id="scrollbar_y_2" class="scrollbar_y" style="display: none;"><div class="scroll_dragger"></div></div><div class="clearfix"></div></div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default language_cancel">取消</button>
            <button type="button" class="btn btn-primary language_confirm">确定</button>
        </div>
    </div><!-- /.modal-content -->
</div>

<div id="id-blackoverlay-alert"></div>
<div id="id-modals-alert">
    <div id="id-modal-alert" class="alert alert-info alert-dismissible" role="alert" style="width: 360px; padding: 20px; display: none;">
        <button type="button" class="close">×</button>
        <span id="id-alert-icon" class="glyphicon glyphicon-ok">&nbsp;</span> <strong id="id-alert-content">This is alert panel !</strong>
    </div>

    <script>
        var timeout;

        function init_alert() {
            $('#id-blackoverlay-dialog').hide();
            $('#id-modal-alert').hide();
            $('#id-modal-alert .close').click(function() {
                dismiss_notify();
            });
        }

        function dismiss_alert() {
            $('#id-blackoverlay-dialog').slideUp();
            $('#id-modal-alert').slideUp();
        }

        function show_alert(msg, type, autoHide, marginTop) {
            var divCls = "alert alert-info alert-dismissible";
            var cls = "glyphicon glyphicon-ok";
            if (type == "success") {
                divCls = "alert alert-success alert-dismissible";
                cls = "glyphicon glyphicon-ok";
            } else if (type == "warning") {
                divCls = "alert alert-warning alert-dismissible";
                cls = "glyphicon glyphicon-exclamation-sign";
            } else if (type == "danger" || type == "error") {
                divCls = "alert alert-danger alert-dismissible";
                cls = "glyphicon glyphicon-remove";
            } else {
                divCls = "alert alert-info alert-dismissible";
                cls = "glyphicon glyphicon-ok";
            }

            var w = ($(window).width() - 360) / 2;
            var h = 0;
            if (marginTop == null) {
                h = $(window).height() - 250;
            } else {
                h = marginTop;
            }

            $('#id-alert-content').html(msg);
            $('#id-modal-alert').attr("class", divCls);
            $('#id-alert-icon').attr("class", cls);
            $('#id-modal-alert').css({"display":"block", "position":"fixed", "top":h+"px", "left":w+"px"});
            $('#id-blackoverlay-dialog').show();

            if (autoHide == null || autoHide) {
                clearTimeout(timeout);
                timeout = setTimeout(dismiss_alert, 1500);
            }
        }

        init_alert();
    </script>
</div>
<div id="id-modals-notify">
    <div id="id-modal-notify" class="alert alert-info alert-dismissible" role="alert" style="width: 360px; padding: 10px; display: none;">
        <img src="TODO_files/notify.png" class="pull-left" style="width:70px;height:70px;margin-right:10px;">
        <button type="button" class="pull-right close">×</button>
        <div style="margin:5px;text-align:middle;word-break:break-all;">
            <strong class="notify-title"></strong><br>
            <span class="notify-action"></span><br>
            <span class="notify-content"></span>
        </div>
    </div>

    <script>
        var timeout;

        function init_notify() {
            $('#id-blackoverlay-dialog').hide();
            $('#id-modal-notify').hide();
            $('#id-modal-notify .close').click(function() {
                dismiss_notify();
            });
        }

        function dismiss_notify() {
            $('#id-blackoverlay-dialog').slideUp();
            $('#id-modal-notify').slideUp();
        }

        function show_notify(title, action, content, autoClose) {
            var w = $(window).width() - 360;
            var h = $(window).height() - 100;

            $('#id-modal-notify .notify-title').html(title);
            $('#id-modal-notify .notify-action').html(action);
            $('#id-modal-notify .notify-content').html(content);
            $('#id-modal-notify').css({"display":"block", "position":"fixed", "top":h+"px", "left":w+"px"});
            $('#id-blackoverlay-dialog').show();

            if (autoClose != null) {
                clearTimeout(timeout);
                timeout = setTimeout(dismiss_notify, autoClose);
            }
        }

        init_notify();
    </script>
</div>


<div id="id-blackoverlay-dialog" style="display: none;"></div>
<div id="id-modals-dialog">
    <div id="id-modal-dialog" style="display: none;">
        <div class="modal-content" style="width:460px;padding:0px 0px;">
            <div class="modal-header">
                <button type="button" class="close">×</button>
                <h4 class="modal-title" id="id-dialog-title"></h4>
            </div>
            <div class="modal-body">
                <div style="padding:0 20px">
                    <h4 id="id-dialog-content"></h4>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default language_cancel" id="id-btn-cancel">取消</button>
                <button type="button" class="btn btn-primary" id="id-btn-confirm"><span id="id-span-confirm" class="glyphicon glyphicon-pencil"></span>&nbsp;&nbsp;<span class="language_cancel">确定</span>&nbsp;&nbsp;</button>
            </div>
        </div><!-- /.modal-content -->
    </div>

    <script>
        var callback = null;
        function init_dialog() {
            $('#id-btn-cancel').click(function(){
                dismiss_dialog();
            });
            $('#id-modal-dialog .modal-header .close').click(function(){
                dismiss_dialog();
            });
            $('#id-btn-confirm').click(function() {
                if (callback != null) {
                    callback();
                }
                dismiss_dialog();
            });

            dismiss_dialog();
        }

        function dismiss_dialog() {
            $('#id-blackoverlay-dialog').hide();
            $('#id-modal-dialog').hide();
        }

        function show_dialog(title, content, type, callback) {
            this.callback = callback;

            if (title != null) {
                $('#id-dialog-title').html(title);
            }
            if (content != null) {
                $('#id-dialog-content').html(content);
            }
            if (type == 'del') {
                $('#id-span-confirm').attr("class", "glyphicon glyphicon-trash");
                $('#id-btn-confirm').attr("class", "btn btn-danger");
            } else if (type == 'repeat') {
                $('#id-span-confirm').attr("class", "glyphicon glyphicon-repeat");
                $('#id-btn-confirm').attr("class", "btn btn-danger");
            } else if (type == 'new') {
                $('#id-span-confirm').attr("class", "glyphicon glyphicon-plus");
                $('#id-btn-confirm').attr("class", "btn btn-danger");
            }

            var w = ($(window).width() - 460) / 2;
            var h = $(window).height() / 5;

            $('#id-modal-dialog').css({"display":"block", "position":"fixed", "top":h+"px", "left":w+"px"});
            $('#id-blackoverlay-dialog').show();
            $('#id-modal-dialog').show();
        }

        init_dialog();
    </script>
</div>
</body>



