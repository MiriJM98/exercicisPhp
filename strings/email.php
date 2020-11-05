<html>

<head>
    <title>Validació d'un email</title>
    <meta charset="utf-8" />
</head>

<body>
    <form method="POST" action="email.php">
        <h3>Validació d'un email</h3>
        <label for="email">Email:</label>
        <input type="text" name="email">
    </form>
</body>

</html>

<?php
$email = $_POST['email'];
include_once "funcions.php";
validaEmail($email);
?>