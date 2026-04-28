<!DOCTYPE html>
<html>

<head>
    <title>PRAK302</title>
    <style>
    </style>
</head>

<body>
    <form method="post">
        <input type="text" name="value" value="<?= $_POST['value'] ?? '' ?>">
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $value = $_POST['value'];
        $string_length = strlen($value);
        $result = "";

        echo "<h2>Input:</h2>";
        echo $value;

        echo "<h2>Output:</h2>";
        for ($i = 0; $i < $string_length; $i++) {
            for ($j = 0; $j < $string_length; $j++) {
                $uppercase_index = null;
                if ($j == 0) {
                    $result .= strtoupper($value[$i]);
                    continue;
                }
                $result .= strtolower($value[$i]);
            }
        }

        echo $result;
    }
    ?>
</body>

</html>