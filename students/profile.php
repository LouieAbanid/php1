<?php
$student = [
    "Student ID" => "23208465",
    "Full Name" => "Louie Abanid",
    "Program" => "BS Information Technology",
    "Year Level" => "3nd Year",
    "Section" => "3C",
    "Email" => "Louie@example.com",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>

    <style>
        body {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 500px;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
            }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <h2>Student Profile</h2>

    <table>
        <tr>
            <th>Information</th>
            <th>Details</th>
        </tr>

        <?php foreach ($student as $key => $value): ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>
