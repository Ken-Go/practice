<?php
    session_start();
    //delete the session variable
    unset($_SESSION);

    define('TITLE','Logout');
    require 'header.html';
?>
<h1>Welcome to my club!</h1>
<p>You are now logged out.</p>
<p>thank you for using this page.we hope you can like my club.</p>
<p>bala bala bala</p>
<?php
    require 'footer.html';
?>