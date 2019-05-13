<?php
    if (isset($_GET['out'])) {
        $output = "До свиданья.";
        include '../include/output.php';
        exit();
    }
    if (!isset($_GET['send'])) {
        include 'request3.html';
        exit();
    }

    $host = 'localhost';
    $database = 'internet_provider';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $SQL = "
            SELECT id, a_name, birthdate, a_adress, employ_date
                FROM $database.adjuster
                WHERE TO_DAYS(employ_date) = (SELECT MIN(TO_DAYS(employ_date)) FROM $database.adjuster);";
    include '../include/select.php';
    $row_count = $result->rowCount();
    if ($row_count > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "В базе данных отсутсвуют работники!";
        $navbar = true;
        include '../include/output.php';
        exit();
    }

    include 'arr_output.php';
    exit();
?>