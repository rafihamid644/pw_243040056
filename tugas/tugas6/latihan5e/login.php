<?php
session_start();

$valid_username = "admin";
$valid_password = "password123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["username"] = $username;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            text-align: center;
        }

        .login-container {
            width: 300px;
            padding: 20px;
            background-color: #ddd;
            margin: 100px auto;
            border-radius: 10px;
        }

        input {
            width: 90%;
            padding: 10px;
            margin: 5px 0;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Login Admin</h2>
        <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>