<?php
    if (isset($_GET['out'])) {
        $output = "До свиданья.";
        include '../include/output.php';
        exit();
    }
    if (!isset($_GET['send'])) {
        include 'request2.html';
        exit();
    }

    $host = 'localhost';
    $database = 'internet_provider';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $o_year = $_GET['o_year'];
    $SQL = "
            SELECT ad_id, a_name, COUNT(*) AS orders_count, SUM(total_cost) AS orders_cost
                FROM $database.adjuster JOIN $database.inet_order ON (adjuster.id = inet_order.ad_id)
                WHERE YEAR(o_date)=$o_year
                GROUP BY ad_id;";
    include '../include/select.php';
    $row_count = $result->rowCount();
    if ($row_count > 0) {
        $rows = $result->fetchAll();
    } else {
        $output = "В $o_year-м году не было произведено заказов.";
        $navbar = true;
        include '../include/output.php';
        exit();
    }

    include 'arr_output.php';
    exit();
?>