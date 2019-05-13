<?php
    try {
        $result = $pdo->query($SQL);
    } catch (PDOException $except) {
        $output = 'Ошибка при выполнении запроса ' . $except->getMessage();
        include 'output.php';
        exit();
    }
?>