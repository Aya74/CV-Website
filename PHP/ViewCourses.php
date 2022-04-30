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
                        <tr class="viewCoursesTableRow">
                            <td class="numTD">1</td>
                            <td class="courseNameTD">Java1</td>
                            <td class="totalHoursTD">50</td>
                            <td class="startdateTD">25/11/2019</td>
                            <td class="enddateTD">2/1/2020</td>
                            <td class="institutionTD">TopTech</td>
                            <td class="attachmentTD"><a href="Course_View.php">View</a></td>
                            <td class="noteTD">The readable content of a page when looking at its layout. The point of
                                using Lorem Ipsum</td>
                        </tr>
                        <tr class="viewCoursesTableRow">
                            <td class="numTD">2</td>
                            <td class="courseNameTD">Java2</td>
                            <td class="totalHoursTD">50</td>
                            <td class="startdateTD">4/7/2020</td>
                            <td class="enddateTD">2/11/2020</td>
                            <td class="institutionTD">TopTech</td>
                            <td class="attachmentTD"><a href="Course_View.php">View</a></td>
                            <td class="noteTD">The readable content of a page when looking at its layout. The point of
                                using Lorem Ipsum</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end header section -->

</body>

</html>