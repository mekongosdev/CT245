<?php

// Require các thư viện PHP
require_once 'core/db.php';
// require_once 'core/Session.php';
// require_once 'core/Functions.php';
require_once 'core/migration.php';

// Kết nối database
$db = new DB();
$db->connect();
$db->set_char('utf8');

date_default_timezone_set('Asia/Ho_Chi_Minh'); 
$date_current = date("Y-m-d H:i:sa");
?>
