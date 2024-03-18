<?php 
include "../model/mydb.php";


    $savings_name=$savings_amount=$savings_type = "";
    $savings_nameError=$savings_amountError=$savings_typeError=$hasError = "";
    if (isset($_REQUEST['Submit'])){

        if (!empty($_REQUEST["savings_name"])){
            $savings_name = $_REQUEST["savings_name"];
        }else{
            $savings_nameError = "Please enter savings name";
            $hasError = 1;
        }

        if (!empty($_REQUEST["savings_amount"])){

            if (!is_numeric($_REQUEST["savings_amount"])){
                $savings_amountError = "Amount must be numeric value.";
                $hasError = 1;
            }else{
                $savings_amount = $_REQUEST["savings_amount"];
            }
            
        }else{
            $savings_nameError = "Please enter savings amount";
            $hasError = 1;
        }


        if (!$_REQUEST["savings_type"] == ""){
            $savings_type = $_REQUEST["savings_type"];
        }else{
            $savings_typeError = "Please enter savings type";
            $hasError = 1;
        }

        // db code

        if (!$hasError == 1){
            $mydb = new Model();
            $conObj = $mydb->OpenConn();


            $result = $mydb->addSavings(
                $conObj, 
                "savings",
                $_REQUEST["savings_name"],
                $_REQUEST["savings_amount"],
                $_REQUEST["savings_type"]          
            );

            if ($result === TRUE){
                echo "Savings data inserted successfully.";
            }else{
                echo "Data insertion unsuccessful." . $conObj->error;
            }
        }else{
            echo "Please enter all the information";
        }

        
    }

    // getting all savings from db



   





?>