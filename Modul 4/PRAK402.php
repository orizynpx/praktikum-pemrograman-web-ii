<!DOCTYPE html>
<html>

<head>
    <title>PRAK402</title>
    <style>
    table {
        border-collapse: collapse;
        table-layout: fixed;
        width: 36rem;
    }

    th,
    td {
        border: 1px solid black;
        padding: 0rem 0.5rem 0.75rem 0.5rem;
        text-align: left;
    }

    th {
        background-color: lightgray;
    }
    </style>
</head>

<body>
    <?php
    $init_table = array(
        "mhs_1" => array(
            "Nama" => "Andi",
            "NIM" => 2101001,
            "Nilai UTS" => 87,
            "Nilai UAS" => 65
        ),
        "mhs_2" => array(
            "Nama" => "Budi",
            "NIM" => 2101002,
            "Nilai UTS" => 76,
            "Nilai UAS" => 79
        ),
        "mhs_3" => array(
            "Nama" => "Tono",
            "NIM" => 2101003,
            "Nilai UTS" => 50,
            "Nilai UAS" => 41
        ),
        "mhs_4" => array(
            "Nama" => "Jessica",
            "NIM" => 2101004,
            "Nilai UTS" => 60,
            "Nilai UAS" => 75
        )
    );

    function calculate_final_grade(int $midterm_exam_grade, int $final_exam_grade) {
        $calculated_grade = (0.4 * $midterm_exam_grade) + (0.6 * $final_exam_grade);
        return $calculated_grade;
    }

    function grade_to_char(float $grade) {
        switch (htmlspecialchars($grade)) {
            case ($grade < 50):
                $char = 'E';
            case ($grade >= 50 && $grade <= 59):
                $char = 'D';
            case ($grade >= 60 && $grade <= 69):
                $char = 'C';
            case ($grade >= 70 && $grade <= 79):
                $char = 'B';
            case ($grade >= 80):
                $char = 'A';
        }
        return $char;
    }

    $final_table = unserialize(serialize($init_table));

    foreach ($final_table as $id => $student) {
        $final_grade = calculate_final_grade($student["Nilai UTS"], $student["Nilai UAS"]);
        $final_table[$id]["Nilai Akhir"] = $final_grade;
        $final_table[$id]["Huruf"] = grade_to_char($final_grade);
    }
    ?>
    <table>
        <tr>
            <?php
            foreach (array_keys($final_table["mhs_1"]) as $header) echo "<th>$header</th>";
            ?>
        </tr>
        <?php
        foreach ($final_table as $id => $student) {
            echo '<tr>';
            foreach ($student as $data) echo "<td>{$data}</td>";
            echo '</tr>';
        }
        ?>
    </table>
</body>

</html>