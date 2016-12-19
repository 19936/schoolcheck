<?php
$sql = "SELECT * FROM mytable WHERE id = " .$id;
$result = $mysqli->query($sql);


while($row = $result->fetch_assoc()) {

 echo'<form action="" method="post"> </br>';
    echo' Schoolname: <br><input type="text" name="schoolname" value="' . $row["schoolname"] . '"></br><br>';
    echo' Adress: <br><input type="text" name="adress" value="' . $row["adress"] . '"></br><br>';
    echo' Zipcode: <br><input type="text" name="zipcode" value="' . $row["zipcode"] . '"></br><br>';
    echo' District: <br><input type="text" name="district" value="' . $row["district"] . '"></br><br>';
    echo' Telnr: <br><input type="text" name="telnr" value="' . $row["telnr"] . '"></br><br>';
    echo' Email: <br><input type="text" name="email" value="' . $row["email"] . '"></br><br>';
    echo' Website: <br><input type="text" name="website" value="' . $row["website"] . '"></br><br>';
    echo' Openday: <br><input type="text" name="openday" value="' . $row["openday"] . '"></br><br>';
    echo' Openclass: <br><input type="text" name="openclass" value="' . $row["openclass"] . '"></br><br>';
    echo' Levels: <br><input type="text" name="levels" value="' . $row["levels"] . '"></br><br>';
    echo' TTO: <br><input type="text" name="tto" value="' . $row["tto"] . '"></br><br>';
    echo' Sports: <br><input type="text" name="sports" value="' . $row["sports"] . '"></br><br>';
    echo' Tech: <br><input type="text" name="tech" value="' . $row["tech"] . '"></br><br>';
    echo' Spanish: <br><input type="text" name="spanish" value="' . $row["spanish"] . '"></br><br>';
    echo' Vso: <br><input type="text" name="vso" value="' . $row["vso"] . '"></br><br>';
    echo' Vmbob: <br><input type="text" name="vmbob" value="' . $row["vmbob"] . '"></br><br>';
    echo' Vmbok: <br><input type="text" name="vmbok" value="' . $row["vmbok"] . '"></br><br>';
    echo' Vmbot: <br><input type="text" name="vmbot" value="' . $row["vmbot"] . '"></br><br>';
    echo' Havo: <br><input type="text" name="havo" value="' . $row["havo"] . '"></br><br>';
    echo' Vwo: <br><input type="text" name="vwo" value="' . $row["vwo"] . '"></br><br>';
    echo' Gymnasium: <br><input type="text" name="gymnasium" value="' . $row["gymnasium"] . '"></br><br>';
    echo' <input type="submit" name="save_update" value="save">';
    echo' <a href="?action=admin&cms_action=show">back</a> <br>' ;
echo'</form>';}
 ?>
