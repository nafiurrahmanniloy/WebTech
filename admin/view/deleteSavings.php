<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>




























$savings_id = $_GET['Savingsid'];

 //delete code 

 $mydb = new Model();

 $conObj = $mydb->OpenConn();
 
 $delete_result = $mydb->deleteSavings($conObj, "savings", $savings_id);
 echo $savings_id;

 if ($delete_result === TRUE){
     echo "Savings deleted successfully";
     header('Location: ../view/savinghistory.php');
 }else{
     echo "Deletion unsuccessful";
 }
