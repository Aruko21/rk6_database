<?php
    try {
        $result = $pdo->query($SQL);
    } catch (PDOException $except) {
        $output = '������ ��� ���������� ������� ' . $except->getMessage();
        include 'output.php';
        exit();
    }
?>