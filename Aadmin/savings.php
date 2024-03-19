<!DOCTYPE html>
<html lang="en">
<fieldset>
    <legend>
        <b>
            <p>Savings</p>
        </b>
    </legend>

    <body>

        <form action="" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="savings_name">Savings Name: </label>
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
                    <td><br> <button type="submit" name="submit">Add Saving</button>
                        <button type="reset" name="reset">Clear</button>
                    </td>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</fieldset>

</html>