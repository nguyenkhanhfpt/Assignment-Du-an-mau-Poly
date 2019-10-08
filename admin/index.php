<?php
    require '../gobal.php';
    require '../dao/functionMember.php';
    session_start();

    checkAdmin($_SESSION['id']);
    $view_name = "homeAdmin.php";
    include 'layout.php';

?>