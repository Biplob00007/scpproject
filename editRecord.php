<?php

include 'db.php';

$idVal = $_POST['id'];
$title = $_POST['title'];
$classVal = $_POST['class'];
$spc = $_POST['spc'];
$desc = $_POST['desc'];


$query = "UPDATE Articles SET title='".$title."', class='".$classVal."', speccontproc='". mysqli_real_escape_string($conn, $spc) ."', description='". mysqli_real_escape_string($conn, $desc)."' where Id=".$idVal."";

if ($conn->query($query)) {
    header('Location: ./article.php?action=edit&id='.$idVal);
} else {
    echo "No results";
}


$conn->close();
?>