<?php
?>

    <--已下为弹窗-->
    <div class="mask"></div>
    <div class="dialog">
        <div class="dialog-hd">
            <strong class="lt-title">标题</strong>
            <a class="rt-operate icon-remove JclosePanel" title="关闭"></a>
        </div>
        <div class="dialog-bd">
            <p>这里是基础弹窗,可以定义文本信息，js脚本在helper函数：viewanimated里</p>
        </div>
        <div class="dialog-ft">
            <a href="<?=(site_url(['login/logout']))?>"><button class="btn btn-info JyesBtn">确认</button></a>
            <button class="btn btn-secondary JnoBtn">关闭</button>
        </div>
    </div>
    <?php popping_logout() ?>
<footer class="btm-ft">
    <p class="clear">
        <span class="fr text-info">
            <em class="uppercase">
                <i class="icon-user"></i>
                author: jin
            </em>
        </span>
    </p>
</footer>
</div>
</div>
</body>
</html>
