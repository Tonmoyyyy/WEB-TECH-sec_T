<!DOCTYPE html>
<html>
<head>
    <title>Vaccination Form</title>
</head>
<body>

<h2>Vaccination Registration</h2>

<form action="page2.php" method="POST">

    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="Male">
    <label for="male">Male</label>

    <input type="radio" id="female" name="gender" value="Female">
    <label for="female">Female</label><br><br>

    <label for="address">Address:</label>
    <textarea id="address" name="address"></textarea><br><br>

    <label for="division">Division:</label>
    <select id="division" name="division">
        <option value="">Select Division</option>
        <option>Dhaka</option>
        <option>Chittagong</option>
        <option>Rajshahi</option>
        <option>Khulna</option>
        <option>Barisal</option>
        <option>Sylhet</option>
        <option>Rangpur</option>
        <option>Mymensingh</option>
    </select>
    <br><br>

    <label for="country">Country:</label>
    <select id="country" name="country">
        <option value="">Select Country</option>
        <option>Bangladesh</option>
        <option>Other</option>
    </select>
    <br><br>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob"><br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>