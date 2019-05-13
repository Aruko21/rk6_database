<?php
    if (isset($_GET['out'])) {
        $output = "До свиданья.";
        include '../include/output.php';
        exit();
    }
    if (!isset($_GET['send'])) {
        include 'request1.html';
        exit();
    }

    $host = 'localhost';
    $database = 'internet_provider';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $o_year = $_GET['o_year'];
    $SQL = "
        SELECT eq_id, title, COUNT(*) AS count_num, SUM(cost) AS total_cost
            FROM $database.real_equip JOIN $database.inet_order ON (real_equip.or_id = inet_order.id)
                JOIN $database.equipment ON (real_equip.eq_id = equipment.id)
                WHERE YEAR(o_date)=$o_year
                GROUP BY eq_id;";
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