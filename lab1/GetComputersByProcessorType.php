<?php

    $processorName = $_POST["processors"];
    include "ConnectionDB.php";
    include "index.php";

    $sqlQuery = "select computers.*, processors.processor_name from computers, processors where 
    computers.fid_processor = (select id_processor from processors where processors.processor_name = \"$processorName\") 
    and 
    computers.fid_processor = processors.id_processor";

    $stmt = $pdo->query($sqlQuery);

    

    echo "<h2>Найденные компьютеры с типом процессора $processorName</h2>";
    
    include "BuildTable.php";
?>