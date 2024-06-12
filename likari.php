<?php
$servername = "db";
$username = "MAIN";
$password = "QWERTY";
$dbname = "dlya_saiyta";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

$sql = "SELECT * FROM likari";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<section>";
    while($row = $result->fetch_assoc()) {
        echo '<div class="likari-container">';
        echo '<img src="'. $row["photo"]. '" alt="'. $row["description"]. '" style="max-width: 100%; max-height: 300px; margin-right: 10px;">';
        echo '<div class="likari-text">';
        echo '<p style="margin-top: 20px;" ><b>'. $row["description"]. '</b></p>';
        echo '</div>';
        echo '</div>';
    }
    echo "</section>";
} else {
    echo "0 результатов";
}

$conn->close();

?>