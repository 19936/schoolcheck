<?php

// Get username, password from database
include 'includes/config.php';
// Make database connection
include 'includes/database.php';

include 'includes/fncts.php';


// Display template: output html
include 'views/head.html';




$action = isset($_GET['action'])?$_GET['action']:'home';

switch($action){

  case 'admin':
  $cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:'show';
  switch($cms_action){
    case 'show':
    //show all items
    include 'model/select_all.php';

    break;

    case 'edit':
    $id = $_GET['id'];
    include 'model/select_one.php';
    include 'includes/edit_item.php';


    break;

    case 'delete':
    $id = isset($_GET['id'])?$_GET['id']: 0;
    include ('model/delete_item.php');
    break;

    case 'create':
        include 'includes/insert_item.php';
    break;
  }


};



