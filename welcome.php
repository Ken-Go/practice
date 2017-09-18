<?php
session_start();

define('TITLE','welcome to my club');
require 'header.html';

//print greeting;
print "<h1>Welcome to my club,{$_SESSION['email']}<h1>";

//print how long they have been logged in:
date_default_timezone_set('America/New_York');
print '<p>You have been logged in since:'.date('g:i a',$_SESSION['loggedin']).'</p>';

print '<p> <a href="logout.php">click here to logout.</a></p>';
?>
<?php
    require 'footer.html';
?>
