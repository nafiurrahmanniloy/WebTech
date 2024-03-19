<!DOCTYPE html>
<html>

<fieldset>
    <legend>
        <b>
            <p>Update Savings Information </p>
        </b>
    </legend>

    <body>
        <form method="POST" action="">
            <table>

                <tr>
                    <td>
                        <label for="savings_name">savings Name: </label>
                    </td>
                    <td>
                        <input type="text" name="savings_name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="savings_amount">savings Amount: </label>
                    </td>
                    <td>
                        <input type="text" name="savings_amount" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="savings_type">savings Type: </label>
                    </td>
                    <td>
                        <select name="savings_type" id="">
                            <option selected value=""></option>
                            <option value="food">Food</option>
                            <option value="transportation">Transportation</option>
                            <option value="utilities">Utilities</option>
                            <option value="entertainment">Entertainment</option>
                            <option value="others">Others</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                    <td><br> <button type="submit" name="submit">Update</button>
                        <button type="reset" name="reset">Clear</button>
                    </td>
                    </td>
                </tr>




            </table>

    </body>
</fieldset>

</html>


<?php 
       // if ($result->num_rows == 1){

           // foreach( $result as $rows){

               // echo '<form action="" method="POST">';
               // echo '<br>';
                //echo '<label for="">Id: </label>';
               // echo "<input type='text' readonly value='". $row['Saving_id']. "'>";
    ?>