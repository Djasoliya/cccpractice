<?php
class View_List{
    public function displayData($data){
        echo '<table border="1" style="border-collapse: collapse; width: 100%;">';
        echo '<tr style="background-color: #92aaf2;">';
        foreach($data[0] as $key => $value){
            echo "<th style='padding: 10px;'>$key</th>";
        }
        echo "</tr>";
        foreach ($data as $row) {
            echo "<tr>";
            foreach($row as $value){
                echo "<td style='padding: 10px; text-align: center;  background-color: #d5ffbf;'>{$value}</td>";    
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>