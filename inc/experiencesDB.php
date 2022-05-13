<?php
//var to connect database
$conn = mysqli_connect('localhost','root','root','cvwebsite');
//if the connection fail display error msg
if(!$conn)
echo 'Error: '.mysqli_connect_error();

?>