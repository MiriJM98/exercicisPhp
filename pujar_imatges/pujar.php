<?php
session_start();
$firstname = '';
$code = '';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
}

if (!empty($_POST)) {
    $firstname = $_POST["firstname"];
    $code = $_POST["code"];
    $extensio = "pdf";
    $uploaded = $_FILES["fileToUpload"]["name"];
    $extension = $_FILES["fileToUpload"]["type"];
    $tmp = $_FILES["fileToUpload"]["tmp_name"];

    if (!file_exists($tmp)) {
        echo "No existeix";
    }

    $tipus = "application/pdf";
    $expectedFile = $firstname . $code . ".pdf";

    if ($uploaded != $expectedFile || $extension != $tipus) {
        echo "<h4 style='color:red;'>Error: El format no és el que toca, tocaria haver estat " . $expectedFile . " l'arxiu pujat.</h4>";
    }

    $carpeta = $_SESSION["login"];

    if (!file_exists($carpeta) || !is_dir($carpeta)) {
        mkdir($_SESSION["login"], 0777, true);
    }

    $desti = $carpeta . "/" . $uploaded;
    move_uploaded_file($tmp, $desti);

    $_SESSION["desti"] = $desti;
}
?>
<html>

<head>
    <meta charset="utf-8" />
    <title>Pujar Arxius</title>
</head>

<style>
    input:valid {
        color: green;
    }

    input:invalid {
        color: red;
    }

    input[type="submit"] {
        color: black;
    }

    input[type="file"] {
        color: black;
    }
</style>

<body>
    <form action="pujar.php" method="post" enctype="multipart/form-data">
        <label for="firstname">
            <legend><b>Nom de l'arxiu a pujar</b></legend>

            <input id="codi" type="text" placeholder="Escriu el nom de l'arxiu" name="firstname" required><br>
        </label><br>
        <label for="code">
            <legend><b>Codi</b></legend>

            <input type="text" placeholder="Introdueix tres caràcters" name="code" maxlength="3" pattern="^\d{3}$"><br>
        </label><br>
        <label for="upload">
            <legend><b>Puja el fitxer PDF</b></legend>

            <input type="file" name="fileToUpload" id="fileToUpload" required>
        </label><br>
        <p></p>
        <button type="button" name="arxiuspujats" id="arxiuspujats">Anar als arxius pujats</button>
        <input type="submit" name="submit">
    </form>
    <button type="button" name="logout" id="logout">Anar al Logout</button>
</body>
<?php
if (!empty($_POST)) {
    if (!($uploaded != $expectedFile || $extension != $tipus)) {
        if (is_file($_SESSION["desti"])) {
            echo '<h4 style="color:green">Fitxer pujat correctament</h4>';
        } else {
            echo '<h4 style="color:red">El fitxer no hi és</h4>';
        }
    }
}
?>
<script>
    document.getElementById("arxiuspujats").onclick = function() {
        window.location.href = "guardapujat.php";
    }
    document.getElementById("logout").onclick = function() {
        window.location.href = "logout.php";
    }
</script>

</html>