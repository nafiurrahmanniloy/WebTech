<?php
// Initializing variables to store form data
$fname =$lname = $email = $role = $password = $gender = $status = $income = $userName ="";
$fnameError = $lnameError = $emailError = $genderError = $usernameError = $passwordError = $MincomeError= $checkboxError =$usernameError="";
$MNumericincomeError = "";

// Checking if the form is submitted
if (isset($_REQUEST['Submit'])) {

    // Handling the 'Name' field
    if (!empty($_REQUEST["fname"])) {
        $name = $_REQUEST['fname'];
    } else {
        $fnameError = "Please Enter First name";
    }
    if (!empty($_REQUEST["lname"])) {
        $name = $_REQUEST['lname'];
    } else {
        $lnameError = "Please Enter Lirst name";
    }

    // Handling the 'Email' field
    if (!empty($_REQUEST["email"])) {
        if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $_REQUEST["email"])) {
            $emailError = "Please enter a valid email address";
        } else {
            $email = $_REQUEST['email'];
        }
    } else {
        $emailError = "Email is Required";
    }
    //username
    if (!empty($_REQUEST["username"])) {
        $userName = $_REQUEST['username'];
    } else {
        $usernameError = "Please Enter User Name";
    }
    //password
    if (strlen($_REQUEST['password']) < 8) {
        $passwordError = "Password must be at least 8 characters";
    } else {
        $password = $_REQUEST['password'];
    }
    //gender
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
    } else {
        $genderError = "Please Select Gender";
    }
    //montly_income
    if (!empty($_REQUEST["monthly_income"])) {
        if(is_numeric($_REQUEST['monthly_income']))
         {
        $income = $_REQUEST['monthly_income'];
         }
         else { $MNumericincomeError = "Please Enter Numeric Value"; }
    } else{ $MincomeError = "Please enter your monthly income";}

    
    //terms
    if (empty($_REQUEST["terms_conditions"])) {
        $checkboxError = "please Agree with the Terms and conditions";
    }












}
?>