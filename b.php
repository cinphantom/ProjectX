<!DOCTYPE html>
<html>
<head>
   <title>protoBOM</title>
   <link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
   <script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
   <script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style type="text/css">
    table.gridtable {

        font-size:14px;
        color:#333333;
        border-width: 1px;
        border-color: #666666;
        border-collapse: collapse;
    }
    table.gridtable th {
        border-width: 2px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #dedede;
    }
    table.gridtable td {
        border-width: 2px;
        padding: 8px;
        border-style: solid;
        border-color: #666666;
        background-color: #ffffff;
    }
    </style>
</head>

<body>

<div class="parent">  
    <table class="gridtable">
        <tr>
            <th><button type="button" data-toggle="collapse" data-target="#demo">+</button></th><th>Info Header 1</th><th>Info Header 2</th><th>Info Header 3</th>
        </tr>
        <tr id="demo" class="collapse in">
            <td></td><td>Text 1A</td><td>Text 1B</td><td>Text 1C</td>
        </tr>
        <tr>
            <td></td><td>Text 2A</td><td>Text 2B</td><td>Text 2C</td>
        </tr>
        </table>
</div>



</body>
</html>
