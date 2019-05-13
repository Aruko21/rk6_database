<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="windows-1251">
    <link rel="stylesheet" type="text/css" href="../static/css/main.css">
    <title>Отчет</title>
</head>
<body>
<div class="container">
    <h2>Отчет по работам</h2>
    <?php if (isset($is_works_before)) { ?>
        <p class="report">Отчет по работам за данный месяц уже создавался</p>
    <?php } ?>
    <table class="result_set" border="1" width="100%">
        <thead>
        <tr>
            <td>Уникальный шифр</td>
            <td>Название</td>
            <td>Стоимость за единицу</td>
            <td>Год</td>
            <td>Месяц</td>
            <td>Общее кол-во в заказах</td>
            <td>Общая стоимость</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($report_w as $row) : ?>
            <tr>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['w_id']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['title']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['cost']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['r_year']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['r_month']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['total_count']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['total_cost']); ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <hr>

    <h2>Отчет по оборудованию</h2>
    <?php if (isset($is_equips_before)) { ?>
        <p class="report">Отчет по оборудованию за данный месяц уже создавался</p>
    <?php } ?>
    <table class="result_set" border="1" width="100%">
        <thead>
        <tr>
            <td>Уникальный шифр</td>
            <td>Название</td>
            <td>Стоимость за единицу</td>
            <td>Год</td>
            <td>Месяц</td>
            <td>Общее кол-во в заказах</td>
            <td>Общая стоимость</td>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($report_eq as $row) : ?>
            <tr>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['eq_id']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['title']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['cost']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['r_year']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['r_month']); ?></td>
                <td><?php echo iconv("UTF-8", "Windows-1251", $row['total_count']); ?></td>
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