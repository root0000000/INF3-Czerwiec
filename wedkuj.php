<?php
$connection = new mysqli('localhost', 'root', '', 'wedkowanie')
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="style_2.css">
</head>
<body>
    <div class="header">
        <h1>Portal dla wędkarzy</h1>
    </div>

    <div class="container">
        <section class="left-block">
            <h3>Ryby zamieszkujące rzeki</h3>
            <?php
            $query = "
            SELECT Ryby.nazwa, Lowisko.akwen, Lowisko.wojewodztwo
            FROM Ryby
            JOIN Lowisko ON Ryby.id = Lowisko.Ryby_id
            WHERE Ryby.styl_zycia = 1;
            ";

            $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<li>{$row ['nazwa']} plywa w rzece {$row['akwen']}, {$row['wojewodztwo']}</li>";
                }
            ?>
            <h3>Ryby drapieżne naszych wód</h3>
            <table>
                <table>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Gatunek</th>
                                <th>Wystepowanie</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                              $query = "SELECT id, nazwa AS Gatunek, wystepowanie AS Wystepowanie FROM Ryby";
                              $result = mysqli_query($connection, $query);

                              while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['Gatunek']}</td>
                                <td>{$row['Wystepowanie']}</td>
                                </tr>";
                              }
                            ?>
                        </tbody>
                    </table>
                </table>
            </table>
        </section>

        <section class="right-block">
            <img src="ryba1.jpg" alt="Sum">
            <a href="kwerendy.txt" class="download-link">Pobierz kwerendy</a>
        </section>
    </div>

    <div class="footer">
        <p>Stronę wykonał: Yevhenii Zhelieznov</p>
    </div>
</body>
</html>