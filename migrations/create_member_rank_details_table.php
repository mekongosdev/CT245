<?php
require_once 'migration.php';
// Create table Members
// if(isset($_GET['members'])) {
  $members = new Migration();
  $members->setNameTable('Members');
  $members->createTableWithIdString();

  $members->up('name','VARCHAR(128)');
  $members->up('dob','date');
  $members->up('joinDate','date');
  $members->up('joinAt','VARCHAR(254)');
  $members->up('gender','CHAR(5)');
  $members->up('originAddress','VARCHAR(200)');
  $members->up('phone','VARCHAR(20)');
  $members->up('address','VARCHAR(254)');
  $members->up('email','VARCHAR(254)');
  $members->up('unitId','INT(10)');
  $members->up('noteId','INT(10)');
  $members->up('cardId','INT(10)');
  $members->up('isStudent','CHAR(5)');



// }
?>
