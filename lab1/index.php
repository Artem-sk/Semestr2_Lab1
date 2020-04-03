<!DOCTYPE html>

<html>

    <head>
    <title>Компьютеры организации</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="lab1.css">
    </head>

    <body>
        <?php
        include "ConnectionDB.php"
        ?>
       <div>
        <form action="GetComputersByProcessorType.php" method ="post">
            <select name="processors">
                    <?php
                        $stmt = $pdo->query("SELECT processor_name FROM processors");
                        $result = $stmt->fetchAll();

                        foreach ($result as $key => $value) {
                            echo "<option value=\"$value[0]\">$value[0]</option>";
                        }
                    ?>
            </select>
            <input type="submit" value="Вывести результат">
        </form>

        <form action="GetComputersBySoftware.php" method ="post">
        <select name="software">
                <?php
                    $stmt = $pdo->query("SELECT software_name from software");
                    $result = $stmt->fetchAll();

                    foreach ($result as $key => $value) {
                        echo "<option value=\"$value[0]\">$value[0]</option>";
                    }
                ?>
        </select>
        <input type="submit" value="Вывести результат">
        </form>


        <form action="GetComputersByExpiredGuarantee.php" method ="post">
        <select name="guarantee">
                <option value="<">Истекший срок гарантии</option>
                <option value=">">Действующий срок гарантии</option>
        </select>
        <input type="submit" value="Вывести результат">
        </form>
        </div>
    </body>
</html>
