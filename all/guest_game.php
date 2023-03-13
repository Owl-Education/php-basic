<!DOCTYPE html>
<html>
<head>
    <title>Game đoán số</title>
</head>
<body>
<h1>Game đoán số</h1>
<form method="POST" action="guest_game.php">
    <label>Nhập số của bạn (từ 1 đến 100):</label>
    <input type="number" name="user_number" min="1" max="100" required>
    <br>
    <button type="submit">Bắt đầu chơi</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_number = $_POST["user_number"];
    $computer_number = rand(1, 100);
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_number = $_POST["user_number"];
    $computer_number = rand(1, 100);

    echo "<p>Máy tính đã đoán số của bạn là: $computer_number</p>";
    echo "<p>Chọn một trong ba lựa chọn sau:</p>";
    echo "<form method='POST' action='game.php'>";
    echo "<input type='hidden' name='user_number' value='$user_number'>";
    echo "<input type='hidden' name='computer_number' value='$computer_number'>";
    echo "<button type='submit' name='option' value='correct'>Chính xác</button>";
    echo "<button type='submit' name='option'value='smaller'>Nhỏ hơn</button>";
    echo "<button type='submit' name='option' value='bigger'>Lớn hơn</button>";
    echo "</form>";

    $option = $_POST["option"];
    if ($option == "correct") {
        echo "<p>Chúc mừng, bạn đã thắng!</p>";
    } else {
        $min = 1;
        $max = 100;
        $guess = floor(($min + $max) / 2);

        while ($guess != $user_number) {
            if ($guess < $user_number) {
                echo "<p>Số của bạn lớn hơn $guess</p>";
                $min = $guess + 1;
            } else {
                echo "<p>Số của bạn nhỏ hơn $guess</p>";
                $max = $guess - 1;
            }

            $guess = floor(($min + $max) / 2);
        }

        echo "<p>Chúc mừng, bạn đã thắng!</p>";
    }
}
?>
