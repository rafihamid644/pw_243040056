<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .logout {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Selamat Datang, Admin!</h1>
    <form method="POST" action="logout.php" class="logout">
        <button type="submit">Logout</button>
    </form>
</body>

</html>