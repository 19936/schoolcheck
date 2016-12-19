<?php
if (isset ($_POST['save_update'])){
    $schoolname = $_POST['schoolname'];
    $adress = $_POST['adress'];
    $zipcode = $_POST['zipcode'];
    $district = $_POST['district'];
    $telnr = $_POST['telnr'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $openday = $_POST['openday'];
    $openclass = $_POST['openclass'];
    $levels = $_POST['levels'];
    $tto = $_POST['tto'];
    $sports = $_POST['sports'];
    $tech = $_POST['tech'];
    $spanish = $_POST['spanish'];
    $vso = $_POST['vso'];
    $vmbob = $_POST['vmbob'];
    $vmbok = $_POST['vmbok'];
    $vmbot = $_POST['vmbot'];
    $havo = $_POST['havo'];
    $vwo = $_POST['vwo'];
    $gymnasium = $_POST['gymnasium'];


$sql_edit_message = "UPDATE mytable SET schoolname='$schoolname', adress='$adress', zipcode='$zipcode', district='$district'
  , telnr='$telnr', email='$email', website='$website', openday='$openday', openclass='$openclass', levels='$levels'
  , tto='$tto', sports='$sports', tech='$tech', spanish='$spanish', vso='$vso'
  , vmbob='$vmbob', vmbok='$vmbok', vmbot='$vmbot', havo='$havo', vwo='$vwo'WHERE id = '$id'";


if ($mysqli->query($sql_edit_message) === TRUE) {
        header('Location: includes/load.php');
    } else {
        echo "Error updating record : " . $mysqli->error;


    }



}

 ?>
