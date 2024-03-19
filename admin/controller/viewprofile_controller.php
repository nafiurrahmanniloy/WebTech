<?php 

include '../model/mydb.php';
$user_id = $_GET['P_userid'];


$mydb = new Model();

// connecting db
$conn = $mydb->OpenConn();

// adding Personal user 
$result = $mydb->viewprofile($conn,"personal_user",$user_id);

if ($result->num_rows > 0) {
    
    foreach ($result as $row){ 
        $row["P_UserId"] ;
        $row["First_name"] ;
        $rowp["Last_name"];
        $row["Email"] ;
        $row["Phone"] ;
        $row["Username"] ;
        $row["Password"];
        $row["Gender"] ;
        $row["Monthly_income"] ;    
    }
   
}

