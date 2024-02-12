<?php
include '../Controller/Validation.php';
?>
<!DOCTYPE html>
<html>

<fieldset>
   <legend><p>Registration Form</p></legend>
<body>
  <h2>PERSONAL ACCOUNT REGISTRATION</h2>
  <form method="POST" action="">
   <table>
    
     <tr>
      <td><label for="fname">First Name:</label></td>
      <td><input type="text" id="fname" name="fname">
      <?php echo $fnameError; ?>
      <br></td>
    </tr>
     <tr>
      <td><label for="lname">Last Name:</label></td>
      <td><input type="text" id="lname" name="lname"><?php echo $lnameError; ?>
      <br></td>
    </tr>

    <tr>
     <td><label for="email">Email:</label></td>
     <td><input type="email" id="email" name="email">
     <?php echo $emailError; ?>
     <?php echo $email; ?>
     <br></td>
    </tr>
   
    <tr>
     <td> <label for="username">Username:</label></td>
     <td><input type="text" id="username" name="username"> 
     <?php echo $usernameError; ?>
     <br></td>
    </tr>
   
    <tr>
     <td><label for="password">Password:</label></td>
     <td><input type="password" id="password" name="password"> <?php echo $passwordError; ?>
     <br></td>
    </tr>
    
    <tr>
     <td> <label for="confirmPassword">Confirm Password:</label></td>
     <td><input type="password" id="confirmPassword" name="confirmPassword" 
     ><br></td>
    </tr>
   
   <tr>
    <td><label for="gender">Gender:</label></td>
    <td><input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other</td>
    <?php echo $genderError; ?>
    <?php echo $gender; ?>
   </tr>

    <tr>
        <td><label for="employment_status">Employment Status:</label></td>
        <td><select id="employment_status" name="employment_status" >
            <option value="employed">Employed</option>
            <option value="unemployed">Unemployed</option>
            <option value="student">Student</option></td>
        </select>
    </tr>

    <tr>
        <td><label for="monthly_income">Monthly Income:</label></td>
        <td> <input type="text" id="monthly_income" name="monthly_income"><?php echo $MNumericincomeError ?><?php echo $MincomeError ?>
    </tr>

        <tr>
            <td><label for="investment_strategy">Desired Money Investment Strategy:</label></td>
            <td><select id="investment_strategy" name="investment_strategy">
            <option value="conservative">Conservative</option>
            <option value="balanced">Balanced</option>
            <option value="aggressive">Aggressive</option>
        </select></td>
    </tr>
    
    <tr>
        <td><label><input type="checkbox" id="terms_conditions" name="terms_conditions" ><?php $checkboxError ?>
            I accept the Terms of Service and Privacy Policy
        </label></td></tr>


    <tr>
     <td><td><br> <button type="submit" name="Submit">Confirm</button>
     <button type="reset" name= "reset">Reset</button></td></td>
    </tr>
   
   </table>
  </form>
</body>
</fieldset>

</html>
