<!DOCTYPE html>
<html>

<head>
    <title>PRAK203</title>
</head>

<body>
    <form method="post">
        <div>
            <label>Nilai : <input type="text" name="value" value="<?= $_POST['value'] ?? '' ?>"></label>
        </div>
        <div>
            <label>Dari :</label><br>
            <label><input type="radio" name="from" value="Celsius" <?= (isset($_POST['from']) && $_POST['from'] == "Celsius") ? "checked" : "" ?>>Celcius</label><br>
            <label><input type="radio" name="from" value="Fahrenheit" <?= (isset($_POST['from']) && $_POST['from'] == "Fahrenheit") ? "checked" : "" ?>>Fahrenheit</label><br>
            <label><input type="radio" name="from" value="Rheamur" <?= (isset($_POST['from']) && $_POST['from'] == "Rheamur") ? "checked" : "" ?>>Rheamur</label><br>
            <label><input type="radio" name="from" value="Kelvin" <?= (isset($_POST['from']) && $_POST['from'] == "Kelvin") ? "checked" : "" ?>>Kelvin</label>
        </div>
        <div>
            <label>Ke :<label><br>
            <label><input type="radio" name="to" value="Celsius" <?= (isset($_POST['to']) && $_POST['to'] == "Celsius") ? "checked" : "" ?>>Celcius</label><br>
            <label><input type="radio" name="to" value="Fahrenheit" <?= (isset($_POST['to']) && $_POST['to'] == "Fahrenheit") ? "checked" : "" ?>>Fahrenheit</label><br>
            <label><input type="radio" name="to" value="Rheamur" <?= (isset($_POST['to']) && $_POST['to'] == "Rheamur") ? "checked" : "" ?>>Rheamur</label><br>
            <label><input type="radio" name="to" value="Kelvin" <?= (isset($_POST['to']) && $_POST['to'] == "Kelvin") ? "checked" : "" ?>>Kelvin</label>
        </div>
        <button type="submit" name="convert">Konversi</button>
    </form>

    <?php
    if (isset($_POST['convert'])) {
        $val = $_POST['value'];
        $from = $_POST['from'];
        $to = $_POST['to'];
        $temp_c = 0;
        $result = 0;
        $unit = "";

        if ($from == "Celsius") {
            $temp_c = $val;
        } elseif ($from == "Fahrenheit") {
            $temp_c = ($val - 32) * 5 / 9;
        } elseif ($from == "Rheamur") {
            $temp_c = $val * 5 / 4;
        } elseif ($from == "Kelvin") {
            $temp_c = $val - 273.15;
        }

        if ($to == "Celsius") {
            $result = $temp_c;
            $unit = "°C";
        } elseif ($to == "Fahrenheit") {
            $result = ($temp_c * 9 / 5) + 32;
            $unit = "°F";
        } elseif ($to == "Rheamur") {
            $result = $temp_c * 4 / 5;
            $unit = "°Re";
        } elseif ($to == "Kelvin") {
            $result = $temp_c + 273.15;
            $unit = "K";
        }

        echo "<h2>Hasil Konversi: " . number_format($result, 1) . " $unit</h2>";
    }
    ?>
</body>

</html>