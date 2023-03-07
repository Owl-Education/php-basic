<!DOCTYPE html>
<html>
<head>
    <title>Phân loại số điện thoại</title>
</head>
<body>
<form method="POST">
    <label>Nhập danh sách số điện thoại:</label><br>
    <textarea name="phone_list" rows="10" cols="30"></textarea><br>
    <input type="submit" name="submit" value="Phân loại">
</form>

<?php
if (isset($_POST['submit'])) {
    $phone_list = $_POST['phone_list'];
    $phones = explode(",", $phone_list);

    $viettel = array();
    $mobifone = array();
    $vinaphone = array();

    foreach ($phones as $phone) {
        $phone = trim($phone);
        if (strpos($phone, "086") === 0 || strpos($phone, "096") === 0 || strpos($phone, "097") === 0 || strpos($phone, "098") === 0 || strpos($phone, "032") === 0 || strpos($phone, "033") === 0 || strpos($phone, "034") === 0 || strpos($phone, "035") === 0 || strpos($phone, "036") === 0 || strpos($phone, "037") === 0 || strpos($phone, "038") === 0 || strpos($phone, "039") === 0) {
            array_push($viettel, $phone);
        } elseif (strpos($phone, "089") === 0 || strpos($phone, "090") === 0 || strpos($phone, "093") === 0 || strpos($phone, "070") === 0 || strpos($phone, "079") === 0 || strpos($phone, "077") === 0 || strpos($phone, "076") === 0 || strpos($phone, "078") === 0 || strpos($phone, "088") === 0) {
            array_push($mobifone, $phone);
        } elseif (strpos($phone, "091") === 0 || strpos($phone, "094") === 0 || strpos($phone, "083") === 0 || strpos($phone, "084") === 0 || strpos($phone, "085") === 0 || strpos($phone, "081") === 0 || strpos($phone, "082") === 0 || strpos($phone, "056") === 0 || strpos($phone, "058") === 0) {
            array_push($vinaphone, $phone);
        }
    }

    echo "<h2>Danh sách số Viettel:</h2>";
    echo "<ul>";
    foreach ($viettel as $phone) {
        echo "<li>$phone</li>";
    }
    echo "</ul>";

    echo "<h2>Danh sách số Mobifone:</h2>";
    echo "<ul>";
    foreach ($mobifone as $phone) {
        echo "<li>$phone</li>";
    }
    echo "</ul>";

    echo "<h2>Danh sách số Vinaphone:</h2>";
    echo "<ul>";
    foreach ($vinaphone as $phone) {
        echo "<li>$phone</li>";
    }
    echo "</ul>";
}
?>
</body>
</html>


