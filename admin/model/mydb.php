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
<?php
class model{
    function openConn(){
        $conn = new mysqli("localhost","root","","pp_db_04");
        return $conn;
    }
    function addUser($conn,$table,$name,$email,$password,$role,$address,$phone){
      $insertSql = "INSERT INTO $table(name,email,password,role,address,phone) VALUES ('$name','$email','$password','$role','$address','$phone')";
      $result = $conn->query($insertSql);
      return $result;
    }
    function showUser($conn,$table){
      $showQuery = "SELECT * FROM $table";
      $result = $conn->query($showQuery);
      return $result; 
    }
    function deleteUser($conn,$table,$id){
      $deleteSql = "DELETE FROM $table WHERE id=$id";
      $result = $conn->query($deleteSql);
      return $result;
    }
    function updateUser($conn,$table,$id,$name,$email,$password,$role,$address,$phone){
      $updateSql = "UPDATE $table SET name='$name',email='$email',password='$password',role='$role',address='$address',phone='$phone' WHERE id=$id";
      $result = $conn->query($updateSql);
      return $result;
    }
}
?>

?>
