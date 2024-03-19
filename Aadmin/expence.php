<!DOCTYPE html>
<html lang="en">
<fieldset>
    <legend>
        <b>
            <p>Expence</p>
        </b>
    </legend>

    <body>

        <form action="" method="POST">
            <table>
                <tr>
                    <td>
                        <label for="expence_name">expence Name: </label>
                    </td>
                    <td>
                        <input type="text" name="expence_name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="expence_amount">expence Amount: </label>
                    </td>
                    <td>
                        <input type="text" name="expence_amount" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="expence_type">expence Type: </label>
                    </td>
                    <td>
                        <select name="expence_type" id="">
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
                    <td><br> <button type="submit" name="submit">Add Expence</button>
                        <button type="reset" name="reset">Clear</button>
                    </td>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</fieldset>

</html>