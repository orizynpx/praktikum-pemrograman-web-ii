<!DOCTYPE html>
<html>

<head>
    <title>PRAK302</title>
    <style>
        .icon {
            width: 18px;
            height: 18px;
        }
        .inv {
            visibility: hidden;
        }
    </style>
</head>

<body>
    <form method="post">
        <label>Tinggi : <input type="text" name="height" value="<?= $_POST['height'] ?? '' ?>"></label><br>
        <label>Alamat Gambar : <input type="text" name="image_url" value="<?= $_POST['image_url'] ?? '' ?>"></label><br>
        <button type="submit" name="print">Cetak</button><br>
        <br>
    </form>

    <?php
    if (isset($_POST['print'])) {
        $height = $_POST['height'];
        $image_url = $_POST['image_url'];

        $i = 0;
        while ($i < $height) {
            $j = 0;
            while ($j < $i) {
                echo "<img src='$image_url' class='icon inv'>";
                $j++;
            }

            $k = 0;
            while ($k < ($height - $i)) {
                echo "<img src='$image_url' class='icon'>";
                $k++;
            }

            echo "<br>";
            $i++;
        }
    }
    ?>
</body>

</html>