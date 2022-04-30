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
                    <form action="#" method="post" id="addExperienceForm" class="form">
                        <table id="addExperienceTable">
                            <tr class="addExperienceTableRow">
                                <td>
                                    <label for="experiencesCategory">Experiences Category</label>
                                </td>
                                <td><select name="experiencesCategory" id="customSelect">
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
                                <td><input type="text" name=" experiences" id=" experiences"></td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td>
                                    <label for="startMonth">Start month:</label>
                                </td>
                                <td><input type="date" name="startMonth" id="startMonth"> </td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td>
                                    <label for="endMonth">End month:</label>
                                </td>
                                <td><input type="date" name="endMonth" id="endMonth"> </td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td>
                                    <label for="institution">Institution:</label>
                                </td>
                                <td> <input type="text" name=" institution" id=" institution"></td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td class="textAreaLabel">
                                    <label for="description">Description</label>
                                </td>
                                <td><textarea name="description" id="description" cols="45" rows="8"></textarea></td>
                            </tr>

                            <tr class="addExperienceTableRow">
                                <td>
                                    <input type="submit" value="Save">
                                </td>
                                <td>
                                    <input type="reset" value="Reset">
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