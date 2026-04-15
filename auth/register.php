<?php

include "../config/db.php";
session_start();

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (name,email,password)
            VALUES ('$name','$email','$password')";
    mysqli_query($conn, $sql);
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">
    <h2>Create Account</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Name" class="form-control mb-3" required>
        <input type="email" name="email" placeholder="Email" class="form-control mb-3" required>
        <input type="password" name="password" placeholder="Password" class="form-control mb-3" required>
        <button name="register" class="btn btn-coffee">Register</button>
    </form>
</body>

</html>