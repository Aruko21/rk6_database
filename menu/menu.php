<?php
    if (isset($_GET['out'])) {
        $output = "До свиданья.";
        include '../include/output.php';
        exit();
    }
    if (isset($_GET['point'])) {
        $point = $_GET['point'];
        switch ($point) {
            case(1) : {
                header('location: ../request1/request1.php');
                exit();
                break;
            }
            case (2) : {
                header('location: ../request2/request2.php');
                exit();
                break;
            }
            case(3) : {
                header('location: ../request3/request3.php');
                exit();
                break;
            }
            case(4) : {
                header('location: ../request4/request4.php');
                exit();
                break;
            }
            case(5) : {
                header('location: ../request5/request5.php');
                exit();
                break;
            }
            case (6) : {
                header('location: ../request6/request6.php');
                exit();
                break;
            }
            case (7) : {
                header('location: ../report/report.php');
                exit();
                break;
            }
            default : {
                $output = 'Внутренняя ошибка - передан неверный номер запроса.';
                include '../include/output.php';
                exit();
            }
        }
    }
    include 'menu.html';
?>
