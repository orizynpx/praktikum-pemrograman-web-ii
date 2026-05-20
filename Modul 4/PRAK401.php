<!DOCTYPE html>
<html>

<head>
    <title>PRAK401</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid black;
            padding: 0.25rem 0.5rem 0.75rem 0.5rem;
            text-align: center;
        }
    </style>
</head>

<body>
    <form method="post">
        <label>Panjang : <input type="text" name="row" value="<?= $_POST['row'] ?? '' ?>"></label><br>
        <label>Lebar : <input type="text" name="column" value="<?= $_POST['column'] ?? '' ?>"></label><br>
        <label>Nilai : <input type="text" name="input_value" value="<?= $_POST['input_value'] ?? '' ?>"></label><br>
        <button type="submit" name="print">Cetak</button><br>
        <br>
    </form>

    <?php
    if (isset($_POST['print'])) {
        $row = (int)$_POST['row'];
        $column = (int)$_POST['column'];
        $input_value = $_POST['input_value'];
        $input_arr = explode(" ", trim(htmlspecialchars($input_value)));

        if (count($input_arr) != ($row * $column)) {
            echo '<p>Panjang nilai tidak sesuai dengan ukuran matriks</p>';
            return;
        }
        
        echo '<table>';
        $index = 0;
        for ($i = 0; $i < $row; $i++) {
            echo '<tr>';
            for ($j = 0; $j < $column; $j++) {
                echo "<td>{$input_arr[$index]}</td>";
                $index++;
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</body>

</html>