<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
<?php
    // Đổi mã species thành tên đầy đủ
    $speciesNames = array("M" => "Human", "D" => "Dwarf", "E" => "Elf", "H" => "Hobbit");

    // Tên
    if (isset($_POST["firstname"]) && isset($_POST["lastname"])
        && $_POST["firstname"] != "" && $_POST["lastname"] != "") {
        $firstname = htmlspecialchars($_POST["firstname"]);
        $lastname  = htmlspecialchars($_POST["lastname"]);
        echo "<p>Welcome $firstname $lastname !<br />";
    } else {
        echo "<p>Please enter your first name and last name.<br />";
    }

    // Các mục đã đặt (3 checkbox riêng)
    $bookings = array();
    if (isset($_POST["accom"])) { $bookings[] = "Accommodation"; }
    if (isset($_POST["4day"]))  { $bookings[] = "4-day tour"; }
    if (isset($_POST["10day"])) { $bookings[] = "10-day tour"; }

    if (count($bookings) > 0) {
        echo "You are now booked on: " . implode(" and ", $bookings) . "<br />";
    } else {
        echo "You have not selected any booking.<br />";
    }

    // Loài
    if (isset($_POST["species"]) && isset($speciesNames[$_POST["species"]])) {
        echo "Species: " . $speciesNames[$_POST["species"]] . "<br />";
    }

    // Tuổi
    if (isset($_POST["age"]) && $_POST["age"] != "") {
        echo "Age: " . htmlspecialchars($_POST["age"]) . "<br />";
    } else {
        echo "Age: not entered<br />";
    }

    // Món ăn
    if (isset($_POST["food"])) {
        echo "Meal Preference: " . htmlspecialchars($_POST["food"]) . "<br />";
    }

    // Ngày
    if (isset($_POST["bookday"]) && $_POST["bookday"] != "") {
        echo "Date: " . htmlspecialchars($_POST["bookday"]) . "<br />";
    }

    // Số người
    if (isset($_POST["partysize"]) && $_POST["partysize"] != "") {
        echo "Number of travellers: " . htmlspecialchars($_POST["partysize"]) . "</p>";
    } else {
        echo "Number of travellers: not entered</p>";
    }
?>
</body>
</html>