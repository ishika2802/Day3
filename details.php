<?php

$fname = $_POST['fname'];
$sid = $_POST['sid'];
$ds = $_POST['ds'];
$cn = $_POST['cn'];
$dbms = $_POST['dbms'];
$wt = $_POST['wt'];
$aj = $_POST['aj'];

$total = $ds + $cn + $dbms + $wt + $aj;
$avg = $total/500;
$percentage = $avg*100;

echo"<table border=1>";
echo"<tr>";
echo"<th>full name</th>";
echo"<th>student id</th>";
echo"<th>data structure</th>";
echo"<th>computer networks</th>";
echo"<th>database</th>";
echo"<th>web technology</th>";
echo"<th>advance java</th>";
echo"<th>total</th>";
echo"<th>percentage</th>";
echo"</tr>";

echo"<tr>";
echo"<td>$fname</td>";
echo"<td>$sid</td>";
echo"<td>$ds</td>";
echo"<td>$cn</td>";
echo"<td>$dbms</td>";
echo"<td>$wt</td>";
echo"<td>$aj</td>";
echo"<td>$total</td>";
if($percentage > 80){
    echo"<td bgcolor = green>$percentage%</td>";
}else if($percentage > 70){
    echo"<td bgcolor = yellow>$percentage%</td>";
}else if($percentage >50){
    echo"<td bgcolor = yellow>$percentage%</td>";
}else{
    echo"<td bgcolor = red>$percentage</td>";
}
echo"</tr>";
echo"</table>";

?>