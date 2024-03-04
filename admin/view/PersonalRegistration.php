<?php
include '../controller/PersonalUserValidation.php';
?>
<!DOCTYPE html>
<html>

<fieldset>
    <legend>
        <p>Registration Form</p>
    </legend>

    <body>
        <h2>PERSONAL ACCOUNT REGISTRATION</h2>
        <form method="POST" action="">
            <table>

                <tr>
                    <td><label for="fname">First Name:</label></td>
                    <td><input type="text" id="fname" name="fname">
                        <?php echo $fnameError; ?>
                        <?php echo $Fnameleantherror; ?>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td><label for="lname">Last Name:</label></td>
                    <td><input type="text" id="lname" name="lname">
                        <?php echo $lnameError; ?>
                        <?php echo $Lnameleantherror; ?>
                        <br>
                    </td>
                </tr>

                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" id="email" name="email">
                        <?php echo $emailError; ?>
                        <br>
                    </td>
                </tr>

                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="text" id="phone" name="phone">
                        <?php echo $phoneNumberError; ?>
                        <br>
                    </td>
                </tr>

                <tr>
                    <td> <label for="username">Username:</label></td>
                    <td><input type="text" id="username" name="username">
                        <?php echo $usernameError; ?>
                        <br>
                    </td>
                </tr>

                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password">
                        <?php echo $passwordError; ?>
                        <br>
                    </td>
                </tr>

                <tr>
                    <td> <label for="confirmPassword">Confirm Password:</label></td>
                    <td><input type="password" id="confirmPassword" name="confirmPassword"><br></td>
                </tr>

                <tr>
                    <td><label for="gender">Gender:</label></td>
                    <td><input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="other">Other
                        <?php echo $genderError; ?>
                    </td>
                </tr>


                <tr>
                    <td><label for="monthly_income">Monthly Income:</label></td>
                    <td> <input type="text" id="monthly_income" name="monthly_income">
                        <?php echo $MNumericincomeError ?>
                        <?php echo $MincomeError ?>
                    </td>
                </tr>


                <tr>
                    <td>
                        <label>
                            <input type="checkbox" id="terms_conditions" name="terms_conditions">
                            I accept the Terms of Service and Privacy Policy
                        </label><br>
                        <?php echo $checkboxError; ?>
                    </td>
                </tr>


                <tr>
                    <td>
                    <td><br> <button type="submit" name="Submit">Confirm</button>
                        <button type="reset" name="reset">Reset</button>
                    </td>
                    </td>
                </tr>

            </table>
        </form>
    </body>
</fieldset>

</html>