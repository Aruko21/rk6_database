<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="windows-1251">
    <link rel="stylesheet" type="text/css" href="../static/css/main.css">
    <title>Запрос 1</title>
</head>
<body>
    <div class="container">
        <table class="result_set" border="1" width="100%">
            <thead>
                <tr>
                    <td>Уникальный шифр</td>
                    <td>Название</td>
                    <td>Общее кол-во в заказах</td>
                    <td>Общая стоимость</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['eq_id']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['title']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['count_num']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['total_cost']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../menu/menu.php" class="button">В меню</a>
        <a href="?out" class="button" name="out">Выход</a>
    </div>
</body>
</html>
