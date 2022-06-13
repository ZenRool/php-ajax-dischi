<?php
    require __DIR__ . "/./database.php";
    
    $genre = "";
    $arr = [];
    if (empty($_GET["genre"]) || $_GET["genre"] === "All") {
        $arr = $database;
    }
    else {
        $genre = $_GET["genre"];
        foreach($database as $item) {
            if ($item["genre"] === $genre) {
                $arr[] = $item;

            }
        }
    }
    
    $disc_json = json_encode($arr);
    header("Content-Type: application/json");
    echo $disc_json;
    
?>