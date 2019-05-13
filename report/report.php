<?php
    if (isset($_GET['out'])) {
        $output = "До свиданья.";
        include '../include/output.php';
        exit();
    }
    if (!isset($_GET['send'])) {
        include 'report.html';
        exit();
    }

    $host = 'localhost';
    $database = 'internet_provider';
    $login = 'root';
    $password = '';
    include '../include/db_connect.php';

    $o_year = $_GET['o_year'];
    $o_month = $_GET['o_month'];
    $SQL1 = "
            SELECT w_id, title, cost, r_year, r_month, total_count, total_cost 
                FROM $database.work_report JOIN $database.work ON (work_report.w_id = work.id)
                WHERE r_year = $o_year AND r_month = $o_month;";
    $SQL2 = "
            SELECT eq_id, title, cost, r_year, r_month, total_count, total_cost
                FROM $database.equip_report JOIN $database.equipment ON (equip_report.eq_id = equipment.id)
                WHERE r_year = $o_year AND r_month = $o_month;";
    try {
        $test1 = $pdo->query($SQL1);
        $test2 = $pdo->query($SQL2);
    } catch (PDOException $except) {
        $output = 'Ошибка при выполнении запроса ' . $except->getMessage();
        include '../include/output.php';
        exit();
    }
    $row_test1 = $test1->rowCount();
    $row_test2 = $test2->rowCount();
    if ($row_test1 > 0) {
        $is_works_before = true;
        $report_w = $test1->fetchAll();
    }
    if ($row_test2 > 0) {
        $is_equips_before = true;
        $report_eq = $test2->fetchAll();
    }
    if (!isset($is_works_before) AND !isset($is_equips_before)) {
        $CALL = $pdo->prepare("CALL $database.Reporter($o_year, $o_month)");
        $CALL->execute();
        $CALL->closeCursor();
        try {
            $result1 = $pdo->query($SQL1);
            $result2 = $pdo->query($SQL2);
        } catch (PDOException $except) {
            $output = 'Ошибка при выполнении запроса ' . $except->getMessage();
            include '../include/output.php';
            exit();
        }

        $row_test1 = $result1->rowCount();
        $row_test2 = $result2->rowCount();
        if ($row_test1 > 0) {
            $report_w = $result1->fetchAll();
        } else {
            $output = "В отчете по работам за данный месяц нет строк";
            $navbar = true;
            include '../include/output.php';
            exit();
        }
        if ($row_test2 > 0) {
            $report_eq = $result2->fetchAll();
        } else {
            $output = "В отчете по оборудованию за данный месяц нет строк";
            $navbar = true;
            include '../include/output.php';
            exit();
        }
    }

    include 'arr_output.php';
    exit();
?>