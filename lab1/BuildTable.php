<?php
echo "<h4>Cформированный запрос:</h4>";
echo $sqlQuery;
echo "<br><br>";

$result = $stmt->fetchAll(PDO::FETCH_OBJ);

if(count($result) == 0) 
    echo "<div class = \"empty-result\">Запрос вернул пустой результат!!!</div>";
else 
{
    echo "<table border=\"1\">";
    echo "<caption><h4>Таблица результатов:</h4></caption>";

    echo "<tr>";
    foreach ($result[0] as $key => $value) {
        echo "<th>$key</th>";
    }
    echo "</tr>";

    foreach ($result as $row) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            echo "<td>$value</td>";
        }
        echo "</th>";
    }
    echo "</table>";
}

$pdo=null;
?>