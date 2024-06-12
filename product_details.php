<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Детали товара</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        type="text/css">
    <link rel="stylesheet" href="stylesforproduct-detail.css" type="text/css">
    <link rel="stylesheet" href="cart.css" type="text/css">
    
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <a class="navbar-brand" href="golovna.php">На головну</a>
    <a class="navbar-brand toggle-cart" href="#">Кошик</a>
</nav>
    </header>
    <main>
        <div class="container">
            <a class="navbar-2" href="praktika.php">Назад</a>
            <div class="product-details">
                <?php
                $servername = "db";
                $username = "MAIN";
                $password = "QWERTY";
                $dbname = "dlya_saiyta";
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Ошибка подключения: " . $conn->connect_error);
                }

                if (isset($_GET['id'])) {
                    $productId = $_GET['id'];
                    $sql = "SELECT * FROM `categoria-1` WHERE id = $productId";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        echo '<div class="tovari">';
                        echo '<img src="' . $row["photo"] . '" alt="' . $row["name"] . '">';
                        echo '</div>';
                        echo '<div class="product-info">';
                        echo '<h1>' . $row["name"] . '</h1>';
                        echo '<p><strong>Опис:</strong> ' . $row["description"] . '</p>';
                        echo '<p><strong>Вид:</strong> ' . $row["species"] . '</p>';
                        echo '<p><strong>Частота:</strong> ' . $row["frequency"] . '</p>';
                        echo '<p><strong>Форма:</strong> ' . $row["form"] . '</p>';
                        echo '<p><strong>Захист:</strong> ' . $row["protection"] . '</p>';
                        echo '<p><strong>Ціна:</strong> ' . $row["price"] . ' грн.</p>';
                        echo '<div class="quantity-selector d-flex align-items-center">';
                        echo '<button class="btn btn-secondary minus-btn">-</button>';
                        echo '<input type="number" id="quantity" name="quantity" min="1" max="10" value="1" class="form-control mx-2">';
                        echo '<button class="btn btn-secondary plus-btn">+</button>';
                        echo '<button type="button" class="btn btn-primary add-to-cart-btn ml-2" data-name="' . $row["name"] . '" data-price="' . $row["price"] . '">В корзину</button>';
                        echo '</div>';
                        echo '</div>';
                    } else {
                        echo "Товар не найден.";
                    }
                } else {
                    echo "Идентификатор товара не указан.";
                }

                $conn->close();
                ?>
            </div>
            <div class="comments mt-4">
                <h3>Коментарі</h3>
                <?php
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Ошибка подключения: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM Comments ORDER BY created_at DESC";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='comment'>";
                        echo "<p><strong>" . $row['name'] . ":</strong></p>";
                        echo "<p>" . $row['comment'] . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Пока нет комментариев.</p>";
                }

                $conn->close();
                ?>
            </div>

            <div class="button-1">
                <button id="showCommentFormBtn" class="btn btn-primary btn-sm mt-4">Додати коментар</button>
                <form id="commentForm" action="" method="post" class="mt-4 d-none">
                    <h3>Залиште свій коментар</h3>
                    <div class="form-group">
                        <label for="name">Имя:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="comment">Коментар:</label>
                        <textarea class="form-control" id="comment" name="comment" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Відправити</button>
                </form>
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $comment = $_POST['comment'];

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Ошибка подключения: " . $conn->connect_error);
                }

                $checkSql = "SELECT * FROM Comments WHERE name='$name' AND comment='$comment'";
                $checkResult = $conn->query($checkSql);
                if ($checkResult->num_rows > 0) {
                    echo "<p class='text-danger'>Такий коментар вже існує.</p>";
                } else {
                    $sql = "INSERT INTO Comments (name, comment) VALUES ('$name', '$comment')";
                    if ($conn->query($sql) === TRUE) {
                        echo "<p class='text-success'>Коментар додано успішно.</p>";
                    } else {
                        echo "<p class='text-danger'>Ошибка при добавлении комментария: " . $conn->error . "</p>";
                    }
                }

                $conn->close();
            }
            ?>

<div id="cart" class="cart">
    <h2>Кошик</h2>
    <ul id="cart-items"></ul>
    <p id="total-price">Загальна ціна: 0 грн.</p>
    <button id="clear-cart" class="btn btn-danger">Очистити кошик</button>
    <button id="checkout-btn" class="btn btn-primary">Перейти до оплати</button>
</div>
            <script src="cart.js" defer></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    const showCommentFormBtn = document.getElementById('showCommentFormBtn');
                    const commentForm = document.getElementById('commentForm');

                    showCommentFormBtn.addEventListener('click', function () {
                        commentForm.classList.toggle('d-none');
                    });
                });
            </script>

        </div>
    </main>
</body>

</html>
