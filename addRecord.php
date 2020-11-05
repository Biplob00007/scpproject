<?php

include 'db.php';

$idVal = $_POST['id'];
$title = $_POST['title'];
$classVal = $_POST['class'];
$spc = $_POST['spc'];
$desc = $_POST['desc'];


$query = "INSERT INTO Articles(id, title, class, speccontproc, description) VALUES(".$idVal.", '".$title."', '".$classVal."', '". mysqli_real_escape_string($conn, $spc) ."', '". mysqli_real_escape_string($conn, $desc)."')";

if ($conn->query($query)) {
    header('Location: ./');
} else {
    echo "No results";
}


$conn->close();
?>