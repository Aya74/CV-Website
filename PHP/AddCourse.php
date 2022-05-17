<?php
//var to connect database
$conn = mysqli_connect('localhost','root','root','cvwebsite');
//if the connection fail display error msg
if(!$conn)
echo 'Error: '.mysqli_connect_error();
// variables declarpation
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $courseName = $_POST['courseName'];
    $numberOfHours = $_POST['hoursNum'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endtDate'];
    $institution = $_POST['institution'];
    $attachment = $_POST['attachment'];
    $url = $_POST['urlInput'];
    $notes = $_POST['notes'];
    //we have to declare var for the image
}
if(isset($_POST['submit']) && isset($_FILES['fileInput'])){
    // // convert var input to string
    $courseName = mysqli_real_escape_string($conn, $_POST['courseName']);
    $institution = mysqli_real_escape_string($conn, $_POST['institution']);
    $url = mysqli_real_escape_string($conn, $_POST['urlInput']);
    $notes = mysqli_real_escape_string($conn, $_POST['notes']);
    //var for uplode img
    $imgName = $_FILES['fileInput']['name'];
    $imgSize = $_FILES['fileInput']['size'];
    $tmpNum = $_FILES['fileInput']['tmp_name'];
    $error = $_FILES['fileInput']['error'];
    if($error === 0){
        if($imgSize>1500000){
            $em = "Sorry, your file is too large!";
            header("Location: AddCourse.php?error=$em");
        }else{
            $imgEx = pathinfo($imgName, PATHINFO_EXTENSION);
            $imgExLw = strtolower($imgEx);
            $allowedEx = array("jpg","jpeg","png");
            if(in_array($imgExLw,$allowedEx)){
                $newImgName = uniqid("IMG-",true).'.'.$imgExLw;
                $imgUplodePth = '../Images/'.$newImgName;
                move_uploaded_file($tmpNum,$imgUplodePth);
                //insert into database
                $sqlC = "INSERT INTO courses(courseName,numberOfHours,startDate,endDate,institution,attachment,url,imgUrl,notes)
                VALUES ('$courseName','$numberOfHours','$startDate','$endDate','$institution','$attachment','$url','$newImgName','$notes')";
            }else{
                $em = "You can't upload this types of file";
                header("Location: AddCourse.php?error=$em");
            }
        }
    }else{
        $em = "unknown error occured!";
        header("Location: AddCourse.php?error=$em");
    }
    //refresh the page when submit
    if(mysqli_query($conn, $sqlC))
    header("location:../PHP/AddCourse.php");
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
    <!-- custome css style -->
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
                    <li class="list-item "><a href="AddCourse.php" class="link-nav current">add course</a></li>
                    <li class="list-item "><a href="AddExperience.php" class="link-nav">add experience</a></li>
                </div>
            </div>
            <!-- nav bar logo -->
            <div class="logo">
                <img src="../Images/azharLogo.png" alt="Al Azhar logo" id="alazharLogo" />
            </div>
        </div>
        <!-- end navbar section -->

        <!-- start header content section -->
        <div class="header-content">
            <div class="header-content-item">
                <div class="row">
                    <form action="AddCourse.php" method="post" id="addCourseForm" class="form" enctype="multipart/form-data">
                        <table id="addCourseTable">
                            <tr class="addCourseTableRow">
                                <td><label for="courseName">Course Name:</label></td>
                                <td><input type="text" name="courseName" id="courseName" requierd></td>
                            </tr>
                            <tr class="addCourseTableRow">
                                <td><label for="hoursNum">Number of Hours:</label></td>
                                <td> <input type="number" name="hoursNum" id="hoursNum" requierd></td>
                            </tr>
                            <tr class="addCourseTableRow">
                                <td><label for="startDate">Start Date:</label></td>
                                <td> <input type="date" name="startDate" id="startDate" requierd></td>
                            </tr>
                            <tr class="addCourseTableRow">
                                <td><label for="endtDate">End Date:</label></td>
                                <td> <input type="date" name="endtDate" id="endtDate" requierd></td>
                            </tr>
                            <tr class="addCourseTableRow">
                                <td><label for="institution">Institution:</label></td>
                                <td><input type="text" name="institution" id="institution" requierd></td>
                            </tr>
                            <tr class="addCourseTableRow">
                                <td><label for="attachment">Attachment:</label></td>
                                <td id="attachment">
                                    <input type="radio" name="attachment" id="attachment_File" value="File">
                                    <label for="attachment_File" style="padding-right:40px">File</label>
                                    <input type="radio" name="attachment" id="attachment_URL" value="URL">
                                    <label for="attachment_URL">URL</label>
                                </td>
                            </tr>
                            <tr class="addCourseTableRow">
                                <td><label for="urlInput">URL:</label></td>
                                <td><input type="url" name="urlInput" id="urlInput" requierd></td>
                            </tr>
                            <tr class="addCourseTableRow">
                                <td><label for="fileInput">File:</label></td>
                                <td><input type="file" name="fileInput" id="fileInput" requierd>
                                <?php if(isset($_REQUEST['error'])):?>
                                <p><?php echo $_REQUEST['error']?></p>
                                <?php endif ?>
                            </td>
                            </tr>
                            <tr class="addCourseTableRow">
                                <td class="textAreaLabel"><label for="notes">Notes:</label></td>
                                <td><textarea name="notes" id="notes" cols="25" rows="5"></textarea></td>
                            </tr>
                            <tr class="addCourseTableRow">
                                <td><input type="submit" value="Save" name="submit"></td>
                                <td><input type="reset" value="Reset" name="reset"></td>
                            </tr>
                        </table>
                    </form>
                    <img src="../Images/course.jpg" alt="Course Image" class="headerImg" />
                </div>
            </div>
        </div>
    </div>
    <!-- end header section -->
</body>

</html>