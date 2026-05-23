<!DOCTYPE html>
<html>

<head>
    <title>PRAK403</title>
    <style>
    table {
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 0rem 0.5rem 0.75rem 0.5rem;
        text-align: justify;
        max-width: 10rem;
    }

    th {
        background-color: lightgray;
    }
    </style>
</head>

<body>
    <?php
    $init_table = [
        1 => [
            "Ridho" => [
                "Pemrograman I" => 2,
                "Praktikum Pemrograman I" => 1,
                "Pengantar Lingkungan Lahan Basah" => 2,
                "Arsitektur Komputer" => 3
            ]
        ],
        2 => [
            "Ratna" => [
                "Basis Data I" => 2,
                "Praktikum Basis Data I" => 1,
                "Kalkulus" => 3
            ]
        ],
        3 => [
            "Tono" => [
                "Rekayasa Perangkat Lunak" => 3,
                "Analisis dan Perancangan Sistem" => 3,
                "Komputasi Awan" => 3,
                "Kecerdasan Bisnis" => 3
            ]
        ]
    ];

    $final_table = [];

    foreach ($init_table as $index => $student_data) {
        foreach ($student_data as $name => $subjects) {
            $total_credits = array_sum($subjects);
            $description = ($total_credits < 7) ? "Revisi KRS" : "Tidak Revisi";

            $final_table[$index][$name] = [
                "Matkul" => $subjects,
                "Total SKS" => $total_credits,
                "Keterangan" => $description
            ];
        }
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($final_table as $index => $student_data) {
                foreach ($student_data as $name => $data) {
                    $bg_color = ($data['Keterangan'] == "Revisi KRS") ? 'red' : 'limegreen';
                    $is_first = true;

                    foreach ($data["Matkul"] as $subject => $credits) {
                        $index = ($is_first) ? $index : '';
                        $name = ($is_first) ? $name : '';
                        $total_credits = ($is_first) ? $data['Total SKS'] : '';
                        $description = ($is_first) ? $data['Keterangan'] : '';
                        
                        echo '<tr>';
                        
                        echo "<td>$index</td>";
                        echo "<td>$name</td>";
                        echo "<td>$subject</td>";
                        echo "<td>$credits</td>";
                        echo "<td>$total_credits</td>";
                        echo "<td style='background-color: $bg_color'>$description</td>";
                        
                        echo '</tr>';

                        $bg_color = 'white';
                        $is_first = false;
                    }
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>