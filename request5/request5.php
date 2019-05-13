<?php
    if (isset($_GET['out'])) {
        $output = "ƒо свидань€.";
        include '../include/output.php';
        exit();
    }
    if (!isset($_GET['send'])) {
        include 'request5.html';
        exit();
    }

    $host = 'localhost';
    $database = 'internet_provider';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $SQL = "
            SELECT DISTINCT a_name, birthdate, a_adress, employ_date
                FROM $database.adjuster LEFT JOIN $database.inet_order ON (adjuster.id = inet_order.ad_id)
                WHERE ad_id IS NULL;";
    include '../include/select.php';
    $row_count = $result->rowCount();
    if ($row_count > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "Ќа данный момент все сотрудники составили хот€ бы одну накладную";
        $navbar = true;
        include '../include/output.php';
        exit();
    }

    include 'arr_output.php';
    exit();
?>