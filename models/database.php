<?php


$table = "poems";
$con;

function connectdb()
{
    $con = mysqli_connect("localhost", "Poems");
}

function addPoem($title, $name, $content)
{
    mysqli_query($con, "INSERT INTO " . $table "VALUES ($title, $name, $content)");
}

function closedb()
{
    mysqli_close($con);
}

?>
