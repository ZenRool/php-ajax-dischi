<?php
    include __DIR__ . "/./database.php";
    $disc_json = json_encode($database);
    header("Content-Type: application/json");
    echo $disc_json;
?>