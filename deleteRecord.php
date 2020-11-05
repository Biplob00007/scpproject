<?php

include 'db.php';

$idVal = $_GET['id'];

echo $idVal;

$query = "DELETE FROM Articles where Id=".$idVal;

if ($conn->query($query)) {
    header('Location: ./');
} else {
    echo "No results";
}

$conn->close();
?>