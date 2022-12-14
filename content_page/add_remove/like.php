<?php

$type = $_GET["type"];
$title = $_GET["title"];
$num = $_GET["now"]+1;
$db = new PDO("mysql:dbname=web_project_1111;host=localhost", "root", "");
$addgood = "UPDATE `$type` SET `good`=$num WHERE `title`='$title'";
$db->exec($addgood);
$sql = $db->query("SELECT *FROM `$type` WHERE `title`=$title");
foreach($sql as $row){
    ?>
    <p>
        <?=$row["good"]?>
    </p>
    <?php
}


?>
