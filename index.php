<!DOCTYPE html>
<html>
<head>
    <title>Топчик</title>

    <meta charset="utf-8">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <meta charset="utf-8">
</head>
<body>
<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbName = "students";

/* Таблица MySQL, в которой хранятся данные */
$userstable = "top";

/* создать соединение */
MYSQL_CONNECT($hostname,$username,$password) OR DIE("Can't connect ");

@mysql_select_db("$dbName") or die("Can't chose db ");

/* Выбрать всех */
$query = "SELECT * FROM `top` WHERE 1";

$result = MYSQL_QUERY($query);

$i = 0;

$number = MYSQL_NUMROWS($result);


WHILE ($i < $number){
    $name[$i] = mysql_result($result,$i,"student");
    $points[$i] = mysql_result($result,$i,"points");
    $i++;
}

PRINT "<div class=\"row\">
    <div class=\"col s12 m6\">
        <div class=\"card blue-grey darken-1\">
            <div class=\"card-content white-text\">
                <table>
                    <thead>
                    <tr>
                        <th data-field=\"name\">Имя</th>
                        <th data-field=\"balls\" class=\"right-sided\">Баллы</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>$name[0]</td>
                        <td class=\"right-sided\">$points[0]</td>
                    </tr>
                    <tr>
                        <td>$name[1]</td>
                        <td class=\"right-sided\">$points[1]</td>
                    </tr>
                    <tr>
                        <td>$name[2]</td>
                        <td class=\"right-sided\">$points[2]</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> "
?>

<div class="clock-wrap">
    <div class="row">
        <div class="col s12 m6">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <div id="watch" class="clock"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript">
    setInterval(function () {
        document.getElementById('watch').innerHTML = getTime();
    }, 100);
</script>
</body>
</html>

