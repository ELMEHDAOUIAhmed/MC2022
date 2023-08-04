<?php

try {
/* Changer ca ca depend a votre base de donnee*/

$conn = mysqli_connect("localhost", "root", "", "login");
} catch (PDOException $e)
{
    if (!$conn) {
    echo "Connection Failed !!";
    exit("Error: " . $e->getMessage());
                }
}

?>
