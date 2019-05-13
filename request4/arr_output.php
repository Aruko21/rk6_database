<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="windows-1251">
    <link rel="stylesheet" type="text/css" href="../static/css/main.css">
    <title>Запрос 4</title>
</head>
<body>
    <div class="container">
        <table class="result_set" border="1" width="100%">
            <thead>
                <tr>
                    <td>Табельный номер</td>
                    <td>ФИО</td>
                    <td>Дата рождения</td>
                    <td>Домашний адрес</td>
                    <td>Дата приема на работу</td>
                    <td>Общая сумма накладной</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['ad_id']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['a_name']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['birthdate']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['a_adress']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['employ_date']); ?></td>
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