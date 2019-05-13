<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="windows-1251">
    <link rel="stylesheet" type="text/css" href="../static/css/main.css">
    <title>Output</title>
</head>
<body>
    <div class="container">
        <?php
            if (isset($output)) {
                echo $output . "\r\n";
            } else {
                echo "undefined message\r\n";
            }
        ?>
        <br>
        <?php if (isset($navbar)) { ?>
                <a href="../menu/menu.php" class="button">В меню</a>
                <a href="?out" class="button" name="out">Выход</a>
        <?php } ?>
    </div>
</body>
</html>