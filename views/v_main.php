<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SPE</h1>
        <table>
            <thead>
                <tr>
                    <td>Niu</td>
                    <td>Nom</td>
                    <td>Cognom</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($users as $user) {
                        echo "<tr>";
                        echo "<td>".$user['niu']."</td>";
                        echo "<td>".$user['nom']."</td>";
                        echo "<td>".$user['cognom']."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
</body>
</html>
