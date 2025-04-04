<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wędkowanie</title>
    <link rel="stylesheet" href="styl_2.css" />
  </head>
  <body>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "data baza";

$connection = new mysqli
(hostname: $servername, username: $username, password: $password = "", database: $database);


if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully";
?>
    <div class="banner">
      <h1>Portal dla wędkarzy</h1>
    </div>
    <div class="leftright">
      <div class="left">
        <div class="left1">
          <h3>Ryby drapieżne naszych wód</h3>
          <ol>
            <li>Szczupak pływa w rzece Warta-Obrzycko, Wielkopolskie</li>
            <li>Leszcz plywa w rzece Przemsza k. Okradziowa, Slaskie</li>
          </ol>
        </div>
        <div class="left2">
          <h3>Ryby drapieżne naszych wód</h3>
            <?php
            $result=mysqli_query(mysqli: $conection, query: "SELECT ryby.nazwa, ryby.wystepowanie FROM ryby JOIN lowisko ON ryby.id=lowisko.Ryby_id WHERE lowisko.rodzaj=3");
            while ($item = mysqli_fetch_assoc($result)) {
                echo "<li>",$item['nazwa'], " plywa w rzece", $item[1],</li>";
            }
            ?>
        </div>
      </div>
      <div class="right">
        <img src="ryba1.jpg" alt="Sum" style="width: 400px" />
      </div>
    </div>
    <div class="feet">
        <p>Stronę wykonał: 00000000000</p>
    </div>
  </body>
</html>