<!DOCTYPE html>
<html>

<head>
    <title>PRAK204</title>
</head>

<body>
    <form method="post">
        <label>Nilai : <input type="text" name="value" value="<?= $_POST['value'] ?? '' ?>"></label>
        <br>
        <button type="submit" name="convert">Konversi</button>
    </form>

    <?php
    if (isset($_POST['convert'])) {
        $value = $_POST['value'];
        $result = "";

        if ($value == 0 && $value !== "") {
            $result = "Nol";
        } elseif ($value >= 1 && $value <= 9) {
            $result = "Satuan";
        } elseif ($value >= 11 && $value <= 19) {
            $result = "Belasan";
        } elseif ($value == 10 || ($value >= 20 && $value <= 99)) {
            $result = "Puluhan";
        } elseif ($value >= 100 && $value <= 999) {
            $result = "Ratusan";
        } elseif ($value >= 1000) {
            $result = "Anda Menginput Melebihi Limit Bilangan";
        }

        if ($result != "") {
            echo "<h2>Hasil: " . $result . "</h2>";
        }
    }
    ?>
</body>

</html>