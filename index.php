<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedkowanie</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
       <h1 class="hd-title">Portal dla wędkarzy</h1>
    </div>
    <div class="lewy">
       <h3 class="l-title">Ryby zamieszkujące rzeki</h3>
       <li>
            <?php
            $result = mysqli_query(mysql: $conn; query:"SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM `ryby` JOIN lowisko on ryby.id = lowisko.Ryby_id WHERE `rodzaj`= 3")
            while($item = mysqli_fetch_array($result)) {
                echo "<li>", $item['nazwa'], "pływa w rzece", $item{1}, "</li>";
            }
            ?>
       </li>
    </div>
    <div class="lewy2">
    <h3 class="l-title" >Ryby dpapieżne naszych wód</h3>
    <table class="table">
        <tr>
            <th>L.p.</th>
            <th>Gatunek</th>
            <th>Występowanie</th>
        </tr>
    </table>
    </div>
   
    <div class="prawy">
        <img src="img/ryba1.jpg" alt="Ryba" class="img">
        <a href="kwerendy.txt" download class="link">Pobierz kwerendy</a>
    </div>
    <div class="footer">
        <p class="f-title">Stronę wykonal:xyz</p>
    </div>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedkowanie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

</body>
</html>