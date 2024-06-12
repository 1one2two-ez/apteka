<?php
$servername = "db";
$username = "MAIN";
$password = "QWERTY";
$dbname = "dlya_saiyta";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT * FROM poslugi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<section>";
    while($row = $result->fetch_assoc()) {
        $categoria_color = $row["color"];
        
        echo '<a href="poslugi.php" style="text-decoration: none; color: inherit;">';
        
        echo '<div class="categoria" style="position: relative; padding: 10px; display: inline-block; width: 250px; height: 200px; margin: 20px; background-color: '.$categoria_color.'; border-radius: 10px; transition: background-color 0.3s;">';
        echo '<p><b>'. $row["name"]. '</b></p>';
        echo '<img src="'. $row["photo"]. '" alt="'. $row["name"]. '" style="max-width: 190px; max-height: 200px; position: absolute; bottom: 0; right: 0; transition: transform 0.3s;">';
        echo '</div>';
        
        echo '</a>';
    }
    echo "</section>";
} else {
    echo "0 результатов";
}



$conn->close();
?>
