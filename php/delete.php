<?php
include "db.php";

$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM submissions WHERE id=$id");

header("Location: admin-dashboard.php");
?>