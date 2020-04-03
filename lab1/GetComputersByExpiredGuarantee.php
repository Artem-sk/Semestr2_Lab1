<?php
    $guarantee = $_POST["guarantee"];
    include "ConnectionDB.php";
    include "index.php";

    $sqlQuery = "select * from computers WHERE computers.guarantee $guarantee period_diff(date_format(sysdate(),\"%Y%d\"),date_format(computers.buy_date,\"%Y%d\"))";

    $stmt = $pdo->query($sqlQuery);

    if($guarantee == "<")
        echo "<h2>Найденные компьютеры с истекшим сроком гарантии";
    else
        echo "<h2>Найденные компьютеры с действующим сроком гарантии";
    
    include "BuildTable.php";
?>