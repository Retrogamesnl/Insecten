<?php
require './DB.php';

$first = $_POST['firstName'];
$last =  $_POST['lastName'];
$date = date('Y-m-d');
$img =  rand(0,19);

setcookie("member", $first . $last);

$query = "INSERT INTO members(firstName, lastName, joinDate, imgNum) VALUES (?, ?, '$date', '$img')";
$stmt = mysqli_stmt_init($conn);

if ($first && $first){
    if (mysqli_stmt_prepare($stmt, $query)) {
        mysqli_stmt_bind_param($stmt, "ss", $first, $last);
        mysqli_stmt_execute($stmt);
        header('Location: ./member.php');
    } else{
        console.log('SQL statement failed');
        header('Location: ./index.php');
    }
} else {
    console.log('A field was not filled in');
    header('Location: ./index.php');
}