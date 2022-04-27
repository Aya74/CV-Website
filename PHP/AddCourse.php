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
                    <li  class="list-item "><a href="Home.php" class="link-nav ">personal information</a></li>
                    <li class="list-item "><a href="ViewCourses.php" class="link-nav ">course information</a></li>
                    <li class="list-item "><a href="ViewExperience.php" class="link-nav">experience information</a></li>
                    <li class="list-item "><a href="AddCourse.php" class="link-nav current">add course</a></li>
                    <li class="list-item "><a href="AddExperience.php" class="link-nav">add experience</a></li>
                </div>
            </div>
             <!-- nav bar logo -->
          <div class="logo">
              <img src="../Images/azharLogo.png" alt="Al Azhar logo" id="alazharLogo"/>
            </div>
        </div>
        <!-- end navbar section -->
        
        <!-- start header content section -->
        <div class="header-content">
        <div class="header-content-item">
            <div class="row">
                <form action="#" method="post" id="addCourseForm">
                    <table id="addCourseTable">
                        <tr class="addCourseTableRow">
                            <td><label for="courseName">Course Name:</label></td>
                            <td><input type="text" name="courseName" id="courseName"></td>
                        </tr>
                        <tr class="addCourseTableRow">
                            <td><label for="hoursNum">Number of Hours:</label></td>
                            <td> <input type="number" name="hoursNum" id="hoursNum"></td>
                        </tr>
                        <tr class="addCourseTableRow">
                            <td><label for="startDate">Start Date:</label></td>
                            <td> <input type="date" name="startDate" id="startDate"></td>
                        </tr>
                        <tr class="addCourseTableRow">
                            <td><label for="endtDate">End Date:</label></td>
                            <td> <input type="date" name="endtDate" id="endtDate"></td>
                        </tr>
                        <tr class="addCourseTableRow">
                            <td><label for="institution">Institution:</label></td>
                            <td><input type="text" name="institution" id="institution"></td>
                        </tr>
                        <tr class="addCourseTableRow">
                            <td><label for="attachment">Attachment:</label></td>
                            <td id="attachment">
                                <input type="radio" name="attachment" id="attachment_File" value="File">
                                <label for="attachment_File">File</label>
                                <input type="radio" name="attachment" id="attachment_URL" value="URL">
                                <label for="attachment_URL">URL</label>
                            </td>
                        </tr>
                        <tr class="addCourseTableRow">
                            <td><label for="urlInput">URL:</label></td>
                            <td><input type="url" name="urlInput" id="urlInput"></td>
                        </tr>
                        <tr class="addCourseTableRow">
                            <td><label for="fileInput">File:</label></td>
                            <td><input type="file" name="fileInput" id="fileInput"></td>
                        </tr>
                        <tr class="addCourseTableRow">
                            <td><label for="notes">Notes:</label></td>
                            <td><textarea name="notes" id="notes" cols="25" rows="8"></textarea></td>
                        </tr>
                        <tr class="addCourseTableRow">
                            <td><input type="submit" value="Save"></td>
                            <td><input type="reset" value="Reset"></td>
                        </tr>
                    </table>
                </form>
                <img src="../Images/course.jpg" alt="Course Image">
            </div>
        </div>
        </div>
    </div>
    <!-- end header section -->
</body>
</html>