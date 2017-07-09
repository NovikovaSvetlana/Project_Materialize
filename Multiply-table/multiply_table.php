<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Циклы</title>
    <style>
        table {
            border: 1px solid red;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            border: 1px solid red;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Таблица умножения по заданным параметрам строк: <?php echo $_GET['side1'] ?> и  столбцов: <?php echo $_GET['side2'] ?>;</h1>
     <table>
            <?php 
                for ($i = 1; $i <= $_GET['side1']; $i++) :
                    ?>
                   <tr>
                       <?php 
                            for ($j = 1; $j <= $_GET['side2']; $j++) :
                                ?>
                                <td><?= $i*$j ?></td>
                                <?php
                            endfor;
                        ?>
                    </tr>
                    <?php
                endfor;
            ?>
    </table>
    
</body>
</html>