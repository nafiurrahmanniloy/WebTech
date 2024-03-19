<?php

class Model
{
    // creating Connection method
    function OpenConn()
    {
        $conn = new mysqli("localhost", "root", "", "FinancialManagementSystem");
        return $conn;

    }

    // creating method to insert into db
    function AddPesonalUser($conn, $table, $fname, $lname, $email, $phone, $username, $password, $confirmPassword, $gender, $monthly_Income)
    {
        $insertSql = "INSERT INTO $table (First_Name, Last_Name, Email, Phone, Username, Password, Confirm_Password,Gender,Monthly_Income) VALUES ('$fname', '$lname', '$email', '$phone', '$username', '$password', '$confirmPassword', '$gender', '$monthly_Income')";
        $result = $conn->query($insertSql);
        return $result;
    }

    


















}


?>
