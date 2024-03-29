<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="windows-1251">
    <link rel="stylesheet" type="text/css" href="../static/css/main.css">
    <title>�����</title>
</head>
<body>
<div class="container">
    <h2>����� �� �������</h2>
    <?php if (isset($is_works_before)) { ?>
        <p class="report">����� �� ������� �� ������ ����� ��� ����������</p>
    <?php } ?>
    <table class="result_set" border="1" width="100%">
        <thead>
        <tr>
            <td>���������� ����</td>
            <td>��������</td>
            <td>��������� �� �������</td>
            <td>���</td>
            <td>�����</td>
            <td>����� ���-�� � �������</td>
            <td>����� ���������</td>
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

    <h2>����� �� ������������</h2>
    <?php if (isset($is_equips_before)) { ?>
        <p class="report">����� �� ������������ �� ������ ����� ��� ����������</p>
    <?php } ?>
    <table class="result_set" border="1" width="100%">
        <thead>
        <tr>
            <td>���������� ����</td>
            <td>��������</td>
            <td>��������� �� �������</td>
            <td>���</td>
            <td>�����</td>
            <td>����� ���-�� � �������</td>
            <td>����� ���������</td>
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

    <a href="../menu/menu.php" class="button">� ����</a>
    <a href="?out" class="button" name="out">�����</a>
</div>
</body>
</html>