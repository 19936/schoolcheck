<?php

$sql = "SELECT * FROM mytable";
$result = $mysqli->query($sql);


echo' <a href="?action=admin&cms_action=create">create new school</a> <br><br><br>' ;
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["schoolname"]. "<br> ";
        echo "Adress: " . $row["adress"]. "";
        echo '</br>';
           echo'<a href="?action=admin&cms_action=edit&id=' . $row["id"] . '">edit</a>';
           echo' <a href="?action=admin&cms_action=delete&id=' . $row["id"] . '">delete</a>' . "<br><br>" ;
    }

