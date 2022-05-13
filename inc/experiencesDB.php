<?php
//var to connect database
$conn = mysqli_connect('localhost','root','root','cvwebsite');
//if the connection fail display error msg
if(!$conn)
echo 'Error: '.mysqli_connect_error();
//variables declarpation
// if statment to fix waring error (Undefined array key)
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $experiencesCategory = $_POST['experiencesCategory'];
    $experiencesTitle = $_POST['experiences'];
    $startMonth = $_POST['startMonth'];
    $endMonth = $_POST['endMonth'];
    $institution = $_POST['institution'];
    $descriptionCourse = $_POST['description'];
    }

?>