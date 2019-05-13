<!DOCTYPE html>

<html lang="ru">
<head>
    <meta charset="windows-1251">
    <link rel="stylesheet" type="text/css" href="../static/css/main.css">
    <title>������ 6</title>
</head>
<body>
    <div class="container">
        <table class="result_set" border="1" width="100%">
            <thead>
                <tr>
                    <td>���</td>
                    <td>���� ��������</td>
                    <td>�������� �����</td>
                    <td>���� ������ �� ������</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['a_name']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['birthdate']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['a_adress']); ?></td>
                        <td><?php echo iconv("UTF-8", "Windows-1251", $row['employ_date']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="../menu/menu.php" class="button">� ����</a>
        <a href="?out" class="button" name="out">�����</a>
    </div>
</body>
</html>