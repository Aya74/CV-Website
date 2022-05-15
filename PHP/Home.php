<?php
//var to connect database
$connDH = mysqli_connect('localhost','root','root','cvwebsite');
//if the connection fail display error msg
if(!$connDH)
echo 'Error: '.mysqli_connect_error();
//get data from database
$sqlSelect = 'SELECT * FROM personalinformation';
//save data from database in result var
$resultH = mysqli_query($connDH,$sqlSelect);
//get data from result and save it in an associative array
$personalinformation = mysqli_fetch_all($resultH,MYSQLI_ASSOC);
mysqli_free_result($resultH);
mysqli_close($connDH);
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
                    <li class="list-item "><a href="Home.php" class="link-nav current">personal information</a></li>
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

        <!-- start header content section -->
        <div class="header-content">
            <div class="header-content-item">
                <h1 id="home-heading"><span class="capital">p</span>ersonal <span class="capital">i</span>nformation
                </h1>
                <div class="row">
                    <?php foreach($personalinformation as $info): ?>
                    <table class="table-info">
                        <tr class="table-row">
                            <td class="table-cell-1">Full Name:</td>
                            <td class="table-cell-2"><?php echo htmlspecialchars($info['fullName']); ?>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell-1">Gender:</td>
                            <td class="table-cell-2"><?php echo htmlspecialchars($info['gender']); ?></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell-1">Birth Date:</td>
                            <td class="table-cell-2">
                                <?php echo htmlspecialchars($info['dayNum']);?><sup><?php echo htmlspecialchars($info['seriesAbbreviation']); ?></sup>,
                                <abbr title="monthName"><?php echo htmlspecialchars($info['monthName']); ?></abbr>
                                <?php echo htmlspecialchars($info['yearNum']); ?>
                            </td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell-1">Nationality:</td>
                            <td class="table-cell-2"><?php echo htmlspecialchars($info['nationality']);?></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell-1">Place of Birth:</td>
                            <td class="table-cell-2"><?php echo htmlspecialchars($info['placeOfBirth']);?></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell-1">Job tittle:</td>
                            <td class="table-cell-2"><?php echo htmlspecialchars($info['jobTittle']);?></td>
                        </tr>
                        <tr class="table-row">
                            <td class="table-cell-1">Year of experience:</td>
                            <td class="table-cell-2"><?php echo htmlspecialchars($info['yearOf Experience']);?> years
                            </td>
                        </tr>
                    </table>
                    <?php endforeach; ?>
                    <img src="../Images/personal.png" alt="Personal Image" id="personal-img" />
                </div>
            </div>
        </div>
    </div>
    <!-- end header section -->
</body>

</html>