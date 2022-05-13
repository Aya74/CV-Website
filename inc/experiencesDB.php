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
    if(isset($_POST['submit'])){
        // convert var input to string
        $experiencesCategory = mysqli_real_escape_string($conn, $_POST['experiencesCategory']);
        $experiencesTitle = mysqli_real_escape_string($conn, $_POST['experiences']);
        $startMonth = mysqli_real_escape_string($conn, $_POST['startMonth']);
        $endMonth = mysqli_real_escape_string($conn, $_POST['endMonth']);
        $institution = mysqli_real_escape_string($conn, $_POST['institution']);
        $descriptionCourse = mysqli_real_escape_string($conn, $_POST['description']);
        //insert information in database columns (استعلام قاعدة البيانات)
        $sql = "INSERT INTO experiences(experiencesCategory,experiences,startMonth,endMonth,institution,description)
        VALUES ('$experiencesCategory','$experiencesTitle','$startMonth','$endMonth','$institution','$descriptionCourse')";
    }
?>