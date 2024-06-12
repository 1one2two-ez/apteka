<?php
$servername = "db";
$username = "MAIN";
$password = "QWERTY";
$dbname = "dlya_saiyta";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Помилка підключення: " . $conn->connect_error);
}

$sql = "SELECT * FROM poslugi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<section style='display:flex; flex-wrap: wrap;'>";
    while($row = $result->fetch_assoc()) {
        $categoria_color = $row["color"];

        echo '<div style="display:flex; flex-direction: row; margin-bottom: 20px; width: 75%;">';
        
        echo '<div class="categoria" style="position: relative; padding: 10px; width: 250px; height: 200px; margin-right: 20px; background-color: '.$categoria_color.'; border-radius: 10px; transition: background-color 0.3s;">';
        echo '<p><b>'. $row["name"]. '</b></p>';
        echo '<img src="'. $row["photo"]. '" alt="'. $row["name"]. '" style="max-width: 190px; max-height: 200px; position: absolute; bottom: 0; right: 0; transition: transform 0.3s;">';
        echo '</div>';

        echo '<div class="ifo-pro" style="flex: 1; background-color: #fff; border-radius: 10px">';
        echo '<p style="margin-left: 10px; margin-top: 10px;"><b>'. $row["description"]. '</b></p>';
        echo '</div>';
        
        echo '</div>';
    }
    echo "</section>";
} else {
    echo "0 результатів";
}


$conn->close();
?>
