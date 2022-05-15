<?php
//var to connect database
$connC = mysqli_connect('localhost','root','root','cvwebsite');
//if the connection fail display error msg
if(!$connC)
echo 'Error: '.mysqli_connect_error();
//get data from database
$sqlSelectC = 'SELECT * FROM courses';
//save data from database in result var
$resultC = mysqli_query($connC,$sqlSelectC);
//get data from result and save it in an associative array
$courses = mysqli_fetch_all($resultC,MYSQLI_ASSOC);
mysqli_free_result($resultC);
mysqli_close($connC);
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
                    <li class="list-item "><a href="ViewCourses.php" class="link-nav current">course information</a>
                    </li>
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
        <!-- start header content section -->
        <div class="header-content">
            <div class="header-content-item">
                <h1 id="home-heading">
                    <span class="capital">a</span>ll
                    <span class="capital">C</span>ourses
                    <span class="capital">i</span>nformation
                </h1>
                <table class="viewCoursesTable" border="1" cellspacing="0">
                    <thead class="viewCoursesTableHeading">
                        <tr class="viewCoursesTableHeading">
                            <th rowspan="2" class="cell1">#</th>
                            <th rowspan="2" class="cell2">Course Name</th>
                            <th rowspan="2" class="cell3">Total Hours</th>
                            <th colspan="2" class="cell4">Date</th>
                            <th rowspan="2" class="cell5">Institution</th>
                            <th rowspan="2" class="cell6">Attachment</th>
                            <th rowspan="2" class="cell7">Note</th>
                        </tr>
                        <tr class="viewCoursesTableHeading">
                            <th>From</th>
                            <th>To</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($courses as $course): ?>
                        <tr class="viewCoursesTableRow">
                            <td class="numTD"><?php echo htmlspecialchars($course['id']); ?></td>
                            <td class="courseNameTD"><?php echo htmlspecialchars($course['courseName']); ?></td>
                            <td class="totalHoursTD"><?php echo htmlspecialchars($course['numberOfHours']); ?></td>
                            <td class="startdateTD"><?php echo htmlspecialchars($course['startDate']); ?></td>
                            <td class="enddateTD"><?php echo htmlspecialchars($course['endDate']); ?></td>
                            <td class="institutionTD"><?php echo htmlspecialchars($course['institution']); ?></td>
                            <td class="attachmentTD"><a href="Course_View.php">View</a></td>
                            <td class="noteTD"><?php echo htmlspecialchars($course['notes']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end header section -->

</body>

</html>