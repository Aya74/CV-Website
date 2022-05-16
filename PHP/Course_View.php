<?php
//var to connect database
$connCV = mysqli_connect('localhost','root','root','cvwebsite');
//if the connection fail display error msg
if(!$connCV)
echo 'Error: '.mysqli_connect_error();
//get data from database
if(isset($_REQUEST["id"])){
$id = $_REQUEST["id"];
$sqlSelectCV = 'SELECT * FROM courses WHERE id ='.$id;
//save data from database in result var
$resultCV = mysqli_query($connCV,$sqlSelectCV);
//get data from result and save it in an associative array
$coursesV = mysqli_fetch_all($resultCV,MYSQLI_ASSOC);
}
mysqli_free_result($resultCV);
mysqli_close($connCV);
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
                    <li class="list-item "><a href="Home.php" class="link-nav">personal information</a></li>
                    <li class="list-item "><a href="ViewCourses.php" class="link-nav">course information</a></li>
                    <li class="list-item "><a href="ViewExperience.php" class="link-nav">experience information</a></li>
                    <li class="list-item "><a href="AddCourse.php" class="link-nav">add course</a></li>
                    <li class="list-item "><a href="AddExperience.php" class="link-nav">add experience</a></li>
                </div>
            </div>
            <!-- nav bar logo -->
            <div class="logo">
                <img src="../Images/azharLogo.png" alt="Al Azhar logo" id="alazharLogo" />
            </div>
        </div>
        <!-- end navbar section -->
        <div class="header-content">
            <div class="header-content-item">
                <?php foreach($coursesV as $courseV): ?>
                <h1 id="home-heading">
                    Course "<span class="courseNameView"><?php echo htmlspecialchars($courseV['courseName']); ?></span>"
                </h1>
                <p class="courseDalyDetalies">
                    from<span class="startDateView">
                        <?php echo htmlspecialchars($courseV['startDate']); ?></span>
                    to <span class="endDateView"> <?php echo htmlspecialchars($courseV['endDate']); ?></span>,
                    totally <span
                        class="totalHoursView"><?php echo htmlspecialchars($courseV['numberOfHours']); ?></span>
                    training hours
                </p>
                <p class="institutionInformation">
                    Institution was "<span
                        class="institutionNameView"><?php echo htmlspecialchars($courseV['institution']); ?></span>"
                </p>
                <figure>
                    <img src="../Images/certification.png" alt="Certification image" class="certificationImg" />
                    <figcaption class="figureCaption">Certification File</figcaption>
                </figure>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- end header section -->
</body>

</html>