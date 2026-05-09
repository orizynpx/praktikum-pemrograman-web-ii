<?php
$num_of_stars = $_POST['num_of_stars'] ?? 0;

if (isset($_POST['add'])) {
    $num_of_stars++;
}

if (isset($_POST['subtract'])) {
    $num_of_stars = max(0, $num_of_stars - 1);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PRAK304</title>
    <style>
        .star {
            width: 4rem;
            height: 4rem;
        }
    </style>
</head>
<body>
    <?php if ($num_of_stars == 0): ?>
    <form method="post">
        <label>Jumlah bintang <input type="text" name="num_of_stars"></label><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php else: ?>
    <p>Jumlah bintang <?= $num_of_stars ?></p>
    <br><br>
    <?php
    for ($i = 0; $i < $num_of_stars; $i++) {
        echo '<img src="star.png" class="star">';
    }
    ?>
    <form method="post">
        <input type="hidden" name="num_of_stars" value="<?= $num_of_stars ?>">
        <button type="submit" name="add">Tambah</button>
        <button type="submit" name="subtract">Kurang</button>
    </form>
    <?php endif; ?>
</body>
</html>