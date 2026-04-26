<!DOCTYPE html>
<html>

<head>
    <title>PRAK201</title>
</head>

<body>
    <form method="POST">
        <?php
        for ($i = 0; $i < 3; $i++) {
            $val = isset($_POST['nama'][$i]) ? $_POST['nama'][$i] : '';
            echo "<label>Nama: " . ($i + 1) . "</label> ";
            echo "<input type=\"text\" name=\"nama[]\" value=\"$val\" />";
            echo "<br />";
        }
        ?>
        <input type="submit" name="submit" value="Urutkan" />
    </form>

    <?php
    function order_names($a, $b, $c)
    {
        if ($a < $b) {
            if ($a < $c) {
                if ($b < $c) {
                    return array($a, $b, $c);
                } else {
                    return array($a, $c, $b);
                }
            } else {
                return array($c, $a, $b);
            }
        } else {
            if ($a > $c) {
                if ($b > $c) {
                    return array($c, $b, $a);
                } else {
                    return array($b, $c, $a);
                }
            } else {
                return array($b, $a, $c);
            }
        }
    }

    if (isset($_POST['submit'])) {
        $names = $_POST['nama'];
        $sorted = order_names($names[0], $names[1], $names[2]);
        
        foreach ($sorted as $name) {
            echo $name . "<br />";
        }
    }
    ?>
</body>

</html>