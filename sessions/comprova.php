<?php
session_start();
if (isset($_SESSION['sessio'])) {
    echo "Has iniciat sessió correctament.";
} else header("location: login.php");
?>

<html>

<head>
    <title>Comprova</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="logout.php">
        <input type="submit">
    </form>
</body>

</html>