<!DOCTYPE html>

<html>

<head>
    <title>
        PRAK105
    </title>
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }

        th {
            font-size: 1.5rem;
            background-color: red;
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
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
            "s22"=>"Samsung Galaxy S22",
            "s22_plus"=>"Samsung Galaxy S22+",
            "a03"=>"Samsung Galaxy A03",
            "xcover_5"=>"Samsung Galaxy Xcover 5"
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