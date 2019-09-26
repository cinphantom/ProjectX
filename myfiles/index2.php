<?php
    include_once 'inc/config.inc.php';
    include_once 'inc/mysql.inc.php';
    $link = connect();
?>

<!DOCTYPE html>
<html>
<head>
<title>BDc 试制BOM</title>
    <link rel="stylesheet" href="//apps.bdimg.com/libs/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="//apps.bdimg.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//apps.bdimg.com/libs/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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

<?php
    $query = "select * from upg order by NO asc";
    $result = execute($link, $query);
    while($data = mysqli_fetch_assoc($result)){
        $html = <<<A
        <table class="gridtable">
            <tr>
                <th><button type="button" data-toggle="collapse" data-target="#{$data['NO']}">+</button></th><th>{$data['NO']}</th><th>{$data['UPGNO']}</th><th>{$data['UPGNAME']}</th>
            </tr>
        </table>
A;
        echo $html;
        $query2 = "select * from relation where UPGNO = '{$data['UPGNO']}' order by NO asc";
        $result2 = execute($link, $query2);

        $html = <<<a
            <table id={$data['NO']} class="collapse gridtable">
a;
        echo $html;
        while($data_relation = mysqli_fetch_assoc($result2)){
            $html = <<<A
                <tr>
                    <td>{$data_relation['PARTNO']}</td>
                </tr>
A;
            echo $html;
        }
    }
?>
</body>
</html>