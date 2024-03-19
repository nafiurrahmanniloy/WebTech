<?php
include '../model/mydb.php';

// Initializing variables to store form data
$fname = $lname = $email = $password = $gender = $monthly_income = $username = $haserror = $phone = '';
$fnameError = $lnameError = $emailError = $genderError = $usernameError = $passwordError = $MincomeError = $checkboxError = $usernameError = '';
$MNumericincomeError = $Fnameleantherror = $Lnameleantherror = $phoneNumberError = '';


// Checking if the form is submitted
if (isset($_REQUEST['Submit'])) {

    // Handling the 'Name' field
    if (!empty($_REQUEST["fname"])) {
        $fname = $_REQUEST['fname'];
        if (!(strlen($fname) >= 4 && strlen($fname) <= 25)) {
            $Fnameleantherror = 'First name must be between 4 and 25 characters long';
            $haserror = 1;
        }
    } else {
        $fnameError = "Please Enter First name";
        $haserror = 1;
    }

    if (!empty($_REQUEST["lname"])) {
        $lname = $_REQUEST['lname'];
        if (!(strlen($lname) >= 4 && strlen($lname) <= 25)) {
            $Lnameleantherror = 'Last name must be between 4 and 25 characters long';
            $haserror = 1;
        }
    } else {
        $lnameError = "Please Enter Last name";
        $haserror = 1;
    }

    // Handling the 'Email' field
    if (!empty($_REQUEST["email"])) {
        $email = $_REQUEST['email'];
        if (!(strlen($email) >= 5 && strpos($email, '@') !== false && preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))) {
            $emailError = "Please enter a valid email address (at least 5 characters and containing '@')";
            $haserror = 1;
        }
    } else {
        $emailError = "Email is Required";
        $haserror = 1;
    }


    // PHone Number
    if (!empty($_REQUEST["phone"])) {
        $phone = $_REQUEST['phone'];
        if ($phone[0] !== '0') {
            $phoneNumberError = "Phone number must start with '0'";
            $haserror = 1;
        }
    } else {
        $phoneNumberError = "Please Enter Phone Number";
        $haserror = 1;
    }

    // Handling the 'Username' field
    if (!empty($_REQUEST["username"])) {
        $username = $_REQUEST['username'];
    } else {
        $usernameError = "Please Enter User Name";
        $haserror = 1;
    }

    // Handling the 'Password' field
    if (strlen($_REQUEST['password']) < 8 || !preg_match("/[a-z]/", $_REQUEST['password'])) {
        $passwordError = "Password must be at least 8 characters and contain at least one lowercase character";
        $haserror = 1;
    } else {
        $password = $_REQUEST['password'];
    }

    // Handling the 'Gender' field
    if (!isset($_REQUEST['gender'])) {
        $genderError = "Please Select Gender";
        $haserror = 1;
    } else {
        $gender = $_REQUEST['gender'];
    }

    // Handling the 'Monthly Income' field
    if (!empty($_REQUEST["monthly_income"])) {
        $monthly_income = $_REQUEST['monthly_income'];
        if (!is_numeric($monthly_income)) {
            $MNumericincomeError = "Please Enter Numeric Value";
            $haserror = 1;
        }
    } else {
        $MincomeError = "Please enter your monthly income";
        $haserror = 1;
    }

    // Handling the 'Terms and Conditions' checkbox
    if (empty($_REQUEST["terms_conditions"])) {
        $checkboxError = "Please Agree with the Terms and Conditions";
        $haserror = 1;

    }

    if ($haserror != 1) {

        $mydb = new Model();

        // connecting db
        $conn = $mydb->OpenConn();

        // adding Personal user 
        $result = $mydb->AddPesonalUser(
            $conn,
            "personal_user",
            $_REQUEST["fname"],
            $_REQUEST["lname"],
            $_REQUEST["email"],
            $_REQUEST['phone'],
            $_REQUEST["username"],
            $_REQUEST["password"],
            $_REQUEST["confirmPassword"],
            $_REQUEST["gender"],
            $_REQUEST['monthly_income']
        );
        if ($result === TRUE) {
            echo "Successfully inserted the data";
        } else {
            echo "Error occured " . $conn->error;
        }

    } else {
        echo "Please enter all the credencials";
    }

}
?>