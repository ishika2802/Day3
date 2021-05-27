<?php

echo"<table border = 1>";
for($i=1;$i<=100;$i++){
echo"<tr>";
if($i%2==0){
    echo"<td>even</td>";
}else{
    echo"<td>odd</td>";
}
if($i%2==0){
    echo"<td bgcolor= green>$i</td>";
}else{
    echo"<td bgcolor= red>$i</td>";
}
echo"</tr>";
}
echo"</table>";
?>