<?php
session_start();
if (isset($_SESSION['sessio'])) {
    session_unset();
    echo "Has tancat la sessió correctament.";
} else header("location: login.php");
?>