<?php
session_start();

unset($_SESSION["web_project"]);
    echo "<script>";
    echo "alert('η»εΊζε!');";
    echo "location.href='../index.php';";
    echo "</script>";
?>  