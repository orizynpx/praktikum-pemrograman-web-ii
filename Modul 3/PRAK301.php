<!DOCTYPE html>
<html>

<head>
    <title>PRAK301</title>
    <style>
        .odd {
            color: red;
        }
        .even {
            color: green;
        }
    </style>
</head>

<body>
    <form method="post">
        <label>Jumlah Peserta : <input type="text" name="value" value="<?= $_POST['value'] ?? '' ?>"></label>
        <br>
        <button type="submit" name="print">Cetak</button>
    </form>

    <?php
    if (isset($_POST['print'])) {
        $num_joined = $_POST['value'];

        for ($i = 0; $i < $num_joined; $i++) {
            $num_class = ($i + 1) % 2 == 0 ? "even" : "odd";
            echo "<h2 class=$num_class>Peserta ke-" . $i + 1 . "</h2>";
        }
    }
    ?>
</body>

</html>