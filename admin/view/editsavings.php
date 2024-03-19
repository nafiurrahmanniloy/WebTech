<?php include "../controller/editsavingsprocess.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Savings</title>
</head>
<body>
    <?php 
        if ($result->num_rows == 1){

            foreach( $result as $rows){

                echo '<form action="" method="POST">';
                echo '<br>';
                echo '<label for="">Id: </label>';
                echo "<input type='text' readonly value='". $row['Saving_id']. "'>";

                echo '<br>';
                echo '<label for="">Savings Name: </label>';
                echo "<input type='text' name='savings_name' value='". $row['savings_name']. "'>";
                echo $savings_nameError;


                echo '<br>';
                echo '<label for="">Savings Amount: </label>';
                echo "<input type='text' name='savings_amount' value='". $row['savings_amount']. "'>";
                echo $savings_amountError;



                echo '<br>';
                echo '<label for="">Savings Type: </label>';
                echo "<input type='text' name='savings_type' value='". $row['savings_type']. "'>";
                echo $savings_typeError;

                echo '<br>';
                echo "<button type='submit' name='Submit'>Update</button>";

               '</form>';

            }
        }
        
        
        
       
    
    ?>

    
</body>
</html>