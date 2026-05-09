<!DOCTYPE html>
<html>

<head>
    <title>PRAK303</title>
    <style>
        .star {
            width: 18px;
            height: 18px;
        }
    </style>
</head>

<body>
    <form method="post">
        <label>Batas Bawah : <input type="text" name="lower_limit" value="<?= $_POST['lower_limit'] ?? '' ?>"></label><br>
        <label>Batas Atas : <input type="text" name="upper_limit" value="<?= $_POST['upper_limit'] ?? '' ?>"></label><br>
        <button type="submit" name="print">Cetak</button><br>
        <br>
    </form>

    <?php
    if (isset($_POST['print'])) {
        $lower_limit = $_POST['lower_limit'];
        $upper_limit = $_POST['upper_limit'];

        do {
            if (($lower_limit + 7) % 5 == 0) {
                echo '<img src="star.png" class="star"> ';
            } else {
                echo $lower_limit . ' ';
            }
            $lower_limit++;
        } while ($lower_limit <= $upper_limit);
    }
    ?>
</body>

</html>