<?php

echo '<form action="" method="post">';
echo 'Schoolname: <input type="text" name="schoolname"><br><br>';
echo 'Adress: <input type="text" name="adress"><br><br>';
echo 'Zipcode: <input type="text" name="zipcode"><br><br>';
echo 'District: <input type="text" name="district"><br><br>';
echo 'Telnr: <input type="text" name="telnr"><br><br>';
echo 'Email: <input type="text" name="email"><br><br>';
echo 'Webiste: <input type="text" name="website"><br><br>';
echo 'Openday: <input type="text" name="openday"><br><br>';
echo 'Openclass: <input type="text" name="openclass"><br><br>';
echo 'Levels: <input type="text" name="levels"><br><br>';
echo 'TTO: <input type="text" name="tto"><br><br>';
echo 'Sports: <input type="text" name="sports"><br><br>';
echo 'Tech: <input type="text" name="tech"><br><br>';
echo 'Spanish: <input type="text" name="spanish"><br><br>';
echo 'VSO: <input type="text" name="vso"><br><br>';
echo 'Vmbob: <input type="text" name="vmbob"><br><br>';
echo 'Vmbok: <input type="text" name="vmbok"><br><br>';
echo 'Vmbot: <input type="text" name="vmbot"><br><br>';
echo 'Havo: <input type="text" name="havo"><br><br>';
echo 'Vwo: <input type="text" name="vwo"><br><br>';
echo 'Gymnasium: <input type="text" name="gymnasium"><br><br>';
       echo '<input type="submit" name="save_insert" value="make">';
        echo '</form> ';

if (isset ($_POST['save_insert'])) {


    $schoolname = addslashes($_POST['schoolname']);
    $adress = addslashes($_POST['adress']);
    $zipcode = addslashes($_POST['zipcode']);
    $district = addslashes($_POST['district']);
    $telnr = addslashes($_POST['telnr']);
    $email = addslashes($_POST['email']);
    $website = addslashes($_POST['website']);
    $openday = addslashes($_POST['openday']);
    $openclass = addslashes($_POST['openclass']);
    $levels = addslashes($_POST['levels']);
    $tto = addslashes($_POST['tto']);
    $sports = addslashes($_POST['sports']);
    $tech = addslashes($_POST['tech']);
    $spanish = addslashes($_POST['spanish']);
    $vso = addslashes($_POST['vso']);
    $vmbob = addslashes($_POST['vmbob']);
    $vmbok = addslashes($_POST['vmbok']);
    $vmbot = addslashes($_POST['vmbot']);
    $havo = addslashes($_POST['havo']);
    $vwo = addslashes($_POST['vwo']);
    $gymnasium = addslashes($_POST['gymnasium']);
// Create connection

    $sql = "INSERT INTO mytable (schoolname, adress, zipcode, district, telnr, email, website, openday, openclass, levels, tto, sports, tech, spanish, vso, vmbob, vmbok, vmbot, havo, vwo, gymnasium)
VALUES ('$schoolname', '$adress', '$zipcode', '$district', '$telnr', '$email', '$website', '$openday', '$openclass', '$levels', '$tto', '$sports', '$tech', '$spanish', '$vso', '$vmbob', '$vmbok', '$vmbot', '$havo', '$vwo', '$gymnasium')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
        header('Location: includes/load.php');
    } else {
        echo "Error";
    }

}
echo ' <a href="?action=admin&cms_action=show">back</a> <br>';
?>
