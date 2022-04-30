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
                <h1 id="home-heading">
                    <span class="capital">c</span>ourse "<span class="courseNameView">Java1</span>"
                </h1>
                <p class="courseDalyDetalies">
                    from<span class="startDateView"> 25/11/2019</span> to <span class="endDateView"> 2/1/2020</span>,
                    totally <span class="totalHoursView">50</span> training hours
                </p>
                <p class="institutionInformation">
                    Institution was "<span class="institutionNameView">Top Tech</span>"
                </p>
                <figure>
                    <img src="../Images/certification.png" alt="Certification image" class="certificationImg" />
                    <figcaption class="figureCaption">Certification File</figcaption>
                </figure>
            </div>
        </div>
    </div>
    <!-- end header section -->
</body>

</html>