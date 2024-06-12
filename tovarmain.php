<?php
$servername = "db";
$username = "MAIN";
$password = "QWERTY";
$dbname = "dlya_saiyta";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Ошибка подключения: ". $conn->connect_error);
}

$sql = "SELECT * FROM `products`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<section>";
    while($row = $result->fetch_assoc()) {
        echo '<div class="tovari" style="padding: 10px; display: inline-block; width: px; vertical-align: top; margin: 20px; background-color: #eee; border-radius: 10px;">';
        echo '<a href="product_details-2.php?id='. $row["id"]. '" style="color: inherit; text-decoration: none;">';
        echo '<img src="'. $row["photo"]. '" alt="'. $row["name"]. '" style="max-width: 350px; max-height: 350px; margin-top: 0; padding-top: 0;">';
        echo '<p><strong>Название:</strong> '. $row["name"]. '</p>';
        echo '<p><strong>Описание:</strong> '. $row["description"]. '</p>';
        echo '<p><strong>Вид:</strong> '. $row["species"]. '</p>';
        echo '<p><strong>Частота:</strong> '. $row["frequency"]. '</p>';
        echo '<p><strong>Форма:</strong> '. $row["form"]. '</p>';
        echo '<p><strong>Защита:</strong> '. $row["protection"]. '</p>';
        echo '<p><strong>Цена:</strong> '. $row["price"]. ' грн.</p>';
        echo '</a>';
        echo '</div>';
    }
    echo "</section>";
} else {
    echo "0 результатов";
}


$conn->close();
?>