<?php
    if (isset($_GET['out'])) {
        $output = "ƒо свидань€.";
        include '../include/output.php';
        exit();
    }
    if (!isset($_GET['send'])) {
        include 'request6.html';
        exit();
    }

    $host = 'localhost';
    $database = 'internet_provider';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $o_year = $_GET['o_year'];
    $o_month = $_GET['o_month'];
    $SQL = "
            SELECT a_name, birthdate, a_adress, employ_date
                FROM $database.adjuster LEFT JOIN (
                    SELECT *
                        FROM $database.inet_order
                        WHERE MONTH(o_date) = $o_month AND YEAR(o_date) = $o_year
                        GROUP BY ad_id
                ) monthYear
                ON (adjuster.id = monthYear.ad_id)
                WHERE ad_id IS NULL;";

    include '../include/select.php';
    $row_count = $result->rowCount();
    if ($row_count > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "¬ указанном мес€це ($o_month) $o_year-го года все сотрудники составили хот€ бы одну накладную";
        $navbar = true;
        include '../include/output.php';
        exit();
    }

    include 'arr_output.php';
    exit();
?>