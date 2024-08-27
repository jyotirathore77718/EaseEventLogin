<?php
$con=mysqli_connect('localhost:3306','root','','easeevent');
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  
    $account_type = $_POST['accountType'];

    // SQL to insert the user into the database
    $sql = "INSERT INTO users (name, email, password, account_type) VALUES ('$name', '$email', '$password', '$account_type')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        // You can redirect the user to the login page or dashboard
        header("Location: index.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><center>hello easeevent</center></h1>
</body>
</html>
