<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $gender = $_POST['gender'] ?? "";
    $address = $_POST['address'];
    $division = $_POST['division'];
    $country = $_POST['country'];
    $dob = $_POST['dob'];

    if (empty($name)) {
        echo "Name is empty <br>";
        exit();
    } else {
        echo "Name: $name <br>";
    }

    if (empty($gender)) {
        echo "Gender is empty <br>";
        exit();
    } else {
        echo "Gender: $gender <br>";
    }

    if (empty($address)) {
        echo "Address is empty <br>";
        exit();
    } else {
        echo "Address: $address <br>";
    }

    if (empty($division)) {
        echo "Division is empty <br>";
        exit();
    } else {
        echo "Division: $division <br>";
    }

    if (empty($country)) {
        echo "Country is empty <br>";
        exit();
    } else {
        echo "Country: $country <br>";
    }

    if ($country == "Other") {
        echo "We do not provide vaccination outside Bangladesh <br>";
        exit();
    }

    if (empty($dob)) {
        echo "Date of Birth is empty <br>";
        exit();
    }

    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate);

    echo "<br><h2>Vaccination Result</h2>";

    echo "Age: " 
        . $age->y . " Years " 
        . $age->m . " Months " 
        . $age->d . " Days <br><br>";

    if ($age->y < 5) {
        echo "<b>Eligible for Vaccination</b><br>";
    } else {
        echo "<b>Not Eligible for Vaccination</b><br>";
    }
 echo "<form action='page3.php' method='POST'>";
 echo "<input type='hidden' name='gender' value='$gender'>";
 echo "<br><br>";
 echo "<input type='submit' value='Go to Summary Page'>";
 echo "</form>";
}
?>