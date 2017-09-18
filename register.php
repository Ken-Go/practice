<?php //this page lets people register their accounts;
    //SET the page title and include the header file;
    define('TITLE','REGISTER');
    require ('header.html');
    
    print '<h1>register form</h1>
        <p>Register so that you can taeke advantage of certain features like this ,that and the other thing.</p>';

    //add the css
    print    ('<style type = "text/css" media="screen"> .error {color:red; } </style>;');

    if (isset($_POST['submitted'])){
        // no problem
        $problem = false;
        //check the value
        if (empty($_POST['first_name'])){
            $problem = true;
            print '<p class = "error">Please enter your first name</p>';
        }
        if (empty($_POST['last_name'])){
            $problem = true;
            print '<p class = "error">Please enter your last name</p>';
        }
        if (empty($_POST['email'])){
            $problem = true;
            print '<p class = "error">Please enter your email</p>';
        }
        if (empty($_POST['password1'])){
            $problem = true;
            print '<p class = "error">Please enter your password</p>';
        }
        if ($_POST['password1'] != $_POST['password2']){
            $problem = true;
            print '<p class = "error">Your password did not match your confirmed password.</p>';
        }
        //check the problem
        if (!$problem){
            //there are no problems;
            print '<p>You are now registered!<br />Okay,you are not really registered but ..</p>';
            //send the email;
            //$body = "thank you for registering with the Eilliott Smith fan Club!Your password is '{$_POST['password1']}'";
           // mail($_POST['email'],'Registon confirmtion',$body,'From: admin@example.com');
            //clear the posted value
            $_POST = array();
        }else{
            // there are some problems;
            print '<p>Please try again</p>.
            <p>Please click <a href="http://localhost/register.php">here</a>';
        }
    }
//create the form;
?>
<form action="register.php" method="post">
    <p>First name <input type="text" name="first_name" size="20" value="<?php
        if (isset($POST['first_name'])){print htmlspecialchars($POST['first_name']);}
    ?>"/></p>
   <p>Last name <input type="text" name="last_name" size="20" value="<?php
   if (isset($POST['last_name'])){print htmlspecialchars($POST['last_name']);}
    ?>"/></p>
    <p>Email Address:<input type="text" name="email" size="20" value="<?php
        if (isset($POST['email'])){print htmlspecialchars($POST['email']);}
    ?>"/></p>
    <p>password: <input type="password" name="password1" size="20" /></p>
    <p>Confirm Password: <input type="password" name="password2" size="20" /></p>
    <p><input type="submit" name="submit" value="Register" /></p>
    <input type="hidden" name="submitted" value="true" />
</form>
<?php
    require 'footer.html';
?>