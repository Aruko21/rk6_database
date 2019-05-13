<?php
    try {
        $pdo = new PDO("mysql:host=$host; dbname = $database", $login, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $except) {
        $output = '���������� ������������ � ���� ������' . $except->getMessage();
        include 'output.php';
        exit();
    }
?>