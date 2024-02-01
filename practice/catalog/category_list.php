<?php
include 'sql/connection.php';
include 'sql/functions.php';

$cols = array("cat_id","name");
$query = select("ccc_category", $cols);
echo "<table border=1>";
echo "<tr><th>cat id</th><th>name</th></tr>";

while($row=mysqli_fetch_assoc($query)){
    echo "<tr><td>".$row['cat_id']."</td>";
    echo "<td>".$row['name']."</td>";

}
echo "</table>"
?>