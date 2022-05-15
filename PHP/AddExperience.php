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
        //refresh the page when submit
        if(mysqli_query($conn, $sql))
        header("location:../PHP/AddExperience.php");
        else
        echo 'Error: '.mysqli_error($conn);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Website</title>
    <link rel="stylesheet" href="../CSS/MyStyle.css">
</head>

<body>
    <!-- start header section -->
    <div class="header">
        <!-- start navbar section -->
        <div class="navbar">
            <!-- navbar links -->
            <div class="nav">
                <div class="list">
                    <li class="list-item "><a href="Home.php" class="link-nav ">personal information</a></li>
                    <li class="list-item "><a href="ViewCourses.php" class="link-nav ">course information</a></li>
                    <li class="list-item "><a href="ViewExperience.php" class="link-nav">experience information</a></li>
                    <li class="list-item "><a href="AddCourse.php" class="link-nav">add course</a></li>
                    <li class="list-item "><a href="AddExperience.php" class="link-nav current">add experience</a></li>
                </div>
            </div>
            <!-- nav bar logo -->
            <div class="logo">
                <img src="../Images/azharLogo.png" alt="Al Azhar logo" id="alazharLogo" />
            </div>
        </div>
        <!-- start header content section -->
        <div class="header-content">
            <div class="header-content-item">
                <div class="row">
                    <form action="AddExperience.php" method="post" id="addExperienceForm" class="form">
                        <table id="addExperienceTable">
                            <tr class="addExperienceTableRow">
                                <td>
                                    <label for="experiencesCategory">Experiences Category</label>
                                </td>
                                <td><select name="experiencesCategory" id="customSelect" required>
                                        <option disabled selected value></option>
                                        <option value="jop">Jop</option>
                                        <option value="freelancer">Freelancer</option>
                                        <option value="volunteer">Volunteer</option>
                                        <option value="selfLearning">Self-Learning</option>
                                        <option value="training">Training</option>
                                        <option value="other">Other</option>
                                    </select>
                                </td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td>
                                    <label for="experiences"> Experiences Title</label>
                                </td>
                                <td><input type="text" name=" experiences" id=" experiences" required></td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td>
                                    <label for="startMonth">Start month:</label>
                                </td>
                                <td><input type="date" name="startMonth" id="startMonth" required> </td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td>
                                    <label for="endMonth">End month:</label>
                                </td>
                                <td><input type="date" name="endMonth" id="endMonth" required> </td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td>
                                    <label for="institution">Institution:</label>
                                </td>
                                <td> <input type="text" name=" institution" id=" institution" required></td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td class="textAreaLabel">
                                    <label for="description">Description</label>
                                </td>
                                <td><textarea name="description" id="description" cols="45" rows="8" required></textarea></td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td>
                                    <input type="submit" value="Save" name="submit">
                                </td>
                                <td>
                                    <input type="reset" value="Reset" name="reset">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <img src="../Images/experience.jpg" alt="Experience image" class="headerImg" />
                </div>
            </div>
        </div>
    </div>
    <!-- end header section -->
</body>

</html>