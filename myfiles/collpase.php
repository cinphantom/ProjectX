<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Collapse</title>
  <link rel="stylesheet" href="//mdui-aliyun.cdn.w3cbus.com/source/dist/css/mdui.min.css"/>
</head>
<body>

<div class="mdui-container">
  <div class="mdui-collapse" mdui-collapse>
    <div class="mdui-collapse-item">
      <div class="mdui-collapse-item-header"><p><a href="javascript:;">item1</a></p></div>
      <div class="mdui-collapse-item-body">
        <p>item1 content</p>
        <p>item1 content</p>
        <p>item1 content</p>
        <div class="mdui-collapse" mdui-collapse>
          <div class="mdui-collapse-item">
            <div class="mdui-collapse-item-header"><p><a href="javascript:;">subitem1</a></p></div>
            <div class="mdui-collapse-item-body">
              <p>subitem1 content</p>
              <p>subitem1 content</p>
              <p>subitem1 content</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mdui-collapse-item">
      <div class="mdui-collapse-item-header"><p><a href="javascript:;">item2</a></p></div>
      <div class="mdui-collapse-item-body">
        <p>item2 content</p>
        <p>item2 content</p>
        <p>item2 content</p>
      </div>
    </div>
    <div class="mdui-collapse-item">
      <div class="mdui-collapse-item-header"><p><a href="javascript:;">item3</a></p></div>
      <div class="mdui-collapse-item-body">
        <p>item3 content</p>
        <p>item3 content</p>
        <p>item3 content</p>
      </div>
    </div>
  </div>
</div>

<script src="//mdui-aliyun.cdn.w3cbus.com/source/dist/js/mdui.min.js"></script>
</body>
</html>
