<?php
    include_once 'inc/config.inc.php';
    include_once 'inc/mysql.inc.php';
    $link = connect();
?>

<!-- CSS goes in the document HEAD or added to your external stylesheet -->

<!DOCTYPE html>
<html>
<head>
<title>BDc 试制BOM</title>
<link href="//cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<script src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
<table class="gridtable">

<?php
    $query = "select * from upg order by NO asc";
    $result = execute($link, $query);
    while($data = mysqli_fetch_assoc($result)){
        $html = <<<A
        <tr>
            <th><button type="button" data-toggle="collapse" data-target="#{$data['NO']}">+</button></th><th>{$data['NO']}</th><th>{$data['UPGNO']}</th><th>{$data['UPGNAME']}</th>
        </tr>
A;
        echo $html;
        $query2 = "select * from relation where UPGNO = '{$data['UPGNO']}' order by NO asc";
        $result2 = execute($link, $query2);
        while($data_relation = mysqli_fetch_assoc($result2)){
            $html = <<<A
                <tr id='{$data['NO']}' class = "collapse in">
	                <td></td><td></td><td>{$data_relation['PARTNO']}</td>
A;
            echo $html;
        $query3 = "select * from part where PARTNO = '{$data_relation['PARTNO']}' order by NO asc";
        $result3 = execute($link, $query3);
        while($data_part = mysqli_fetch_assoc($result3)){
            $html = <<<A
                    <td>{$data_part['PARTNAME']}</td>
                </tr>
A;
            echo $html;
        }
        }
    }
?>

</table>
</body>
</html>