<?php
include 'config.php';

if (!isset($_SESSION['username'])) {
 header("Location: login.php");
}

echo "Selamat datang, " . $_SESSION['username'] . "!";

?>
<a href="logout.php">Logout</a>


