<!DOCTYPE html>

<html>

<head>
    <title>
        PRAK104
    </title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php
        $samsung_smartphone_list = array(
            "Samsung Galaxy S22",
            "Samsung Galaxy S22+",
            "Samsung Galaxy A03",
            "Samsung Galaxy Xcover 5"
        );

        foreach ($samsung_smartphone_list as $smartphone) {
            echo "
                <tr>
                    <td>
                        $smartphone
                    </td>
                </tr>
            ";
        }
        ?>
    </table>
</body>

</html>