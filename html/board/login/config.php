<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "qwer1234";
$db_name = "lockey";

$con = new mysqli($db_host, $db_user, $db_password, $db_name); // �����ͺ��̽� ����
if ($con->connect_errno) { die('Connection Error : '.$con->connect_error); } // ������ ������ ���� �޼��� ���
?>