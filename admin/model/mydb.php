<?php
// Creating model class 
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
    function addSavings($conn, $table, $savings_name, $savings_amount, $savings_type){
        $sql = "INSERT INTO $table(savings_name, savings_amount, savings_type)
        VALUES('$savings_name', '$savings_amount', '$savings_type')";
        $result = $conn->query($sql);
        return $result;
    }
}


?>
