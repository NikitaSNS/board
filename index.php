<?php

define('ROOT', dirname(__FILE__));
require_once(ROOT . '/components/Autoload.php');

$repository = new RatingRepository(DB::getConnection());

$ratings = $repository->getAllRatings();

?>

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
<div class="row">
    <div class="col s12 m6">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <table>
                    <thead>
                    <tr>
                        <th data-field="name">Имя</th>
                        <th data-field="balls" class="right-sided">Баллы</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($ratings as $studentRating): ?>
                        <tr>
                            <td><?php echo $studentRating->getName(); ?></td>
                            <td class="right-sided"><?php echo $studentRating->getPoints(); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

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

