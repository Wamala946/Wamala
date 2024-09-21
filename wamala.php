<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Home!</title>
    <style> backgroundcolor="red"</style>
</head>
<body>
    <h1>Welcome Home!</h1>
    
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>
        
        <label for="address">Home Address:</label>
        <textarea id="address" name="address" rows="3" cols="40" required></textarea><br><br>
        
        <input type="submit" value="Welcome Me Home!">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST["name"]);
        $dob = new DateTime($_POST["dob"]);
        $age = date_diff(new DateTime(), $dob)->y;
        $address = htmlspecialchars($_POST["address"]);

        echo "<p>Welcome, $name! ";
            echo "<br>";
        echo "We're glad to see you're home today.</p>";
        echo "<p>Happy birthday! ";
            echo "<br>";
            echo "You're now $age years old.</p>";
        echo "<p>Your home address is: $address</p>";
    }
    ?>
</body>
</html>
