<!DOCTYPE html>
<html>

<fieldset>
    <legend>
        <b>
            <p>Update Expence Information </p>
        </b>
    </legend>

    <body>
        <form method="POST" action="">
            <table>

                <tr>
                    <td>
                        <label for="expense_name">Expense Name: </label>
                    </td>
                    <td>
                        <input type="text" name="expense_name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="expense_amount">Expense Amount: </label>
                    </td>
                    <td>
                        <input type="text" name="expense_amount" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="expense_type">Expense Type: </label>
                    </td>
                    <td>
                        <select name="expense_type" id="">
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