<?php
//var to connect database
$connD = mysqli_connect('localhost','root','root','cvwebsite');
//if the connection fail display error msg
if(!$connD)
echo 'Error: '.mysqli_connect_error();
//get data from database
$sqlSelect = 'SELECT * FROM experiences';
//save data from database in result var
$result = mysqli_query($conn,$sqlSelect);
//get data from result and save it in an associative array
$experiences = mysqli_fetch_all($result,MYSQLI_ASSOC);
mysqli_free_result($result);
mysqli_close($conn);
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
                    <li class="list-item "><a href="ViewExperience.php" class="link-nav current">experience
                            information</a></li>
                    <li class="list-item "><a href="AddCourse.php" class="link-nav">add course</a></li>
                    <li class="list-item "><a href="AddExperience.php" class="link-nav">add experience</a></li>
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
                <h1 id="home-heading">
                    <span class="capital">a</span>ll
                    <span class="capital">e</span>xpperiences
                    <span class="capital">i</span>nformation
                </h1>
                <div class="experiencesInformationDiv">
                    <?php foreach($experiences as $experience): ?>
                    <h3 class="experiencesTitleHeading"><?php echo htmlspecialchars($experience['experiences']); ?>
                        <sub class="institutionName"><?php echo htmlspecialchars($experience['institution']); ?> /
                            <span
                                class="experiencesCategory"><?php echo htmlspecialchars($experience['experiencesCategory']); ?></span>
                        </sub>
                    </h3>
                    <h4 class="startEndDate">from
                        <span class="startDateSpan"><?php echo htmlspecialchars($experience['startMonth']); ?></span>
                        to
                        <span class="endDateSpan"><?php echo htmlspecialchars($experience['endMonth']); ?></span>
                    </h4>
                    <p class="experienceDescriptionPara">
                        <?php echo htmlspecialchars($experience['description']); ?>
                    </p>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end header section -->
</body>

</html>