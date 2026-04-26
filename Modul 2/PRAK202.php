<!DOCTYPE html>
<html>

<head>
    <title>PRAK202</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $name_err = $nim_err = $gender_err = "";
    $name = $nim = $gender = "";

    if (isset($_POST["submit"])) {
        if (empty($_POST["name"])) {
            $name_err = "name tidak boleh kosong";
        } else {
            $name = $_POST["name"];
        }

        if (empty($_POST["nim"])) {
            $nim_err = "nim tidak boleh kosong";
        } else {
            $nim = $_POST["nim"];
        }

        if (empty($_POST["gender"])) {
            $gender_err = "jenis kelamin tidak boleh kosong";
        } else {
            $gender = $_POST["gender"];
        }
    }
    ?>

    <form method="POST">
        Nama: <input type="text" name="name" value="<?= $name ?>">
        <span class="error">* <?= $name_err ?></span><br>

        Nim: <input type="text" name="nim" value="<?= $nim ?>">
        <span class="error">* <?= $nim_err ?></span><br>

        Jenis Kelamin :<span class="error">* <?= $gender_err ?></span><br>
        <input type="radio" name="gender" value="Laki-Laki" <?= ($gender == "Laki-Laki") ? "checked" : "" ?>> Laki-Laki<br>
        <input type="radio" name="gender" value="Perempuan" <?= ($gender == "Perempuan") ? "checked" : "" ?>> Perempuan<br>

        <button type="submit" name="submit">Submit</button>
    </form>

    <br>

    <?php
    if (isset($_POST["submit"]) && !empty($name) && !empty($nim) && !empty($gender)) {
        echo "<h2>Output:</h2>";
        echo $name . "<br>";
        echo $nim . "<br>";
        echo $gender;
    }
    ?>
</body>

</html>