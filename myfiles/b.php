<!DOCTYPE html>
<html>
<head>
   <title>protoBOM</title>
   <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
    <style type="text/css">
    table.gridtable {
        font-family: verdana,arial,sans-serif;
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
                <th><button type="button" data-toggle="collapse" data-target="#demo">+</button> </th><th>Text 1A</th><th>Text 1A</th><th>Text 1A</th>
            </tr>
        </table>
        <table id="demo" class="collapse gridtable">
            <tr>
                <td></td><td>Text 1A</td><td>Text 1B</td><td>Text 1C</td>
            </tr>
            <tr>
                <td></td><td>Text 2A</td><td>Text 2B</td><td>Text 2C</td>
            </tr>
        </table>
    </div>
    <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
