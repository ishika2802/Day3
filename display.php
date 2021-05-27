<?php

$fname = $_GET['fname'];
$lname = $_GET['lname'];
$age = $_GET['age'];
$email = $_GET['email'];

echo"<table border=1>";
echo"<tr>";
echo"<th>firstname</th>";
echo"<th>lastname</th>";
echo"<th>age</th>";
echo"<th>email</th>";
echo"</tr>";

echo"<tr>";
echo"<td>$fname</td>";
echo"<td>$lname</td>";
echo"<td>$age</td>";
echo"<td>$email</td>";
echo"</tr>";
echo"</table>";
?>