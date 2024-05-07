<?php
$inserted = false;
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['gender']) && isset($_POST["email"]) && isset($_POST['phone'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO `Abhijith`.`student` (`name`, `age`, `gender`, `email`, `phone`) VALUES ('$name', '$age', '$gender', '$email', '$phone')";

    if($con->query($sql) === true) {
        $inserted = true;
    } else {
        echo "Error Occurred";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>
<body>
    <?php
    if($inserted == true) {
        echo "<p>Congratulations Form Submitted Successfully</p>";
    }

    ?>
    <form action="index1.php" method="post">
        <div>
            Name<input type="text" placeholder="Enter your name" id="name" name="name">
        </div>
        <div>
            Age<input type="text" placeholder="Enter your age" name="age">
        </div>
        <div>
            Gender:<input type="text" placeholder="Enter your Gender" name="gender">
        </div>
        <div>
            Email:<input type="text" placeholder="Enter your Mail" name="email">
        </div>
        <div>
            Phone:<input type="phone" placeholder="Enter your Phone number" name="phone">
        </div>
        <div class="submit">
            <input type="submit">
        </div>
    </form>
</body>
</html>
