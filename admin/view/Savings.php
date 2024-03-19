<?php include "../controller/savings_controller.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Savings</title>
</head>
<body>
    <h3>Savings</h3>
<form action=" " method="POST">
        <table>
            <tr>
                <td>
                    <label for="savings name">Savings Name: </label>
                </td>
                <td>
                    <input type="text" name="savings_name"/>
                </td>
                
            </tr>

            <tr>
                <td>
                    <label for="Saving amount">Savings Amount: </label>
                </td>

                <td>
                    <input type="text" name="savings_amount" />
                </td>
               
            </tr>

            <tr>
                <td>
                    <label for="savings_type">Savings Type: </label>
                </td>

                <td>
                    <select name="savings_type" id="">
                        <option selected value=""></option>
                        <option value="food">Food</option>
                        <option value="health">Health</option>
                        <option value="travel">Travel</option>
                        <option value="education">Education</option>
                        <option value="others">Others</option>

                    </select>
                </td>

            </tr>


            <tr>
                
                <td>
                    <button type="submit" name="Submit">Add Savings</button>
                </td>
            </tr>
           
        </table>
    </form>


</body>
</html>