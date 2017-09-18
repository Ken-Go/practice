<?php
//set the page title and include the header file;
define ('TITLE','Login');
include('header.html');

print '<h1>Login Form</h1>
        <p>Users who are logged in can take advantage of certain features like this,
        that, and the other thing.</p>';
//check if the form has been submitted:
if (isset($_POST['submitted'])){
    if((!empty($_POST['email'])) && (!empty($_POST['password']))){
        if ((strtolower($_POST['email'])=='me@example.com') && ($_POST['password'] ==
        'testpass')){
            //correct
            ///do session stuff
            session_start();
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['loggedin'] = time();
            
            //redirect the user to the welcome page
            ob_end_clean();
            header('Location: welcome.php');
            exit();
            // print '<p>you can go to the <a href="http://localhost/index.php">host page</a></p>'; 
        }else {
           
            print '<p>the submitted email address and password do not match those
            on file!go back and try again.</p>';
            print '<p style="color:red;"> please click <a href="http://localhost/login.php">here</a></p>';
        }
    }else {
        print '<p>please make sure you enter both an email address and a password<br />
        go back and try again.</p>';
         print '<p> please click <a style="color:red;" href="http://localhost/login.php">here</a></p>';
    }
}else{
    print '<form action="login.php" method="post">
    <p>Email Address: <input type="text" name="email" size="20" /></p>
    <p>Password<input type="password" name="password" size="20" /></p>
    <p><input type="submit" name="submit" value="Log In!" /></p>
    <input type="hidden" name="submitted" value="true" />
    </form>';
}

require 'footer.html';
?>