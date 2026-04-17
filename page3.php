<?php
session_start();

if (!isset($_SESSION['data'])) {
    $_SESSION['data'] = array(
        "Male" => 0,
        "Female" => 0,
        "Total" => 0
    );
}

$gender = $_POST['gender'] ?? "";

if ($gender == "Male") {
    $_SESSION['data']["Male"]++;
    $_SESSION['data']["Total"]++;
} else if ($gender == "Female") {
    $_SESSION['data']["Female"]++;
    $_SESSION['data']["Total"]++;
}

echo "<h2>COUNTING </h2>";
echo "Total: " . $_SESSION['data']["Total"] . "<br>";
echo "Male: " . $_SESSION['data']["Male"] . "<br>";
echo "Female: " . $_SESSION['data']["Female"] . "<br>";

?>