<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="windows-1251">
    <link rel="stylesheet" type="text/css" href="../static/css/main.css">
    <title>Запрос 2</title>
</head>
<body>
    <div class="container">
        <table class="result_set" border="1" width="100%">
            <thead>
                <tr>
                    <td>Табельный номер</td>
                    <td>ФИО</td>
                    <td>Общее количество накладных</td>
                    <td>Общая стоимость работ по накладным</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['ad_id']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['a_name']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['orders_count']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['orders_cost']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../menu/menu.php" class="button">В меню</a>
        <a href="?out" class="button" name="out">Выход</a>
    </div>
</body>
</html>
