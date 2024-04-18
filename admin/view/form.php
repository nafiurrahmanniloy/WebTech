<?php

?>
<!DOCTYPE html>
<html>

<head>
    <title> Form</title>
    <link rel="stylesheet" href="../design/desingform.css">
    <script src="validation.js"></script>
</head>

<body>
    <h2>Form</h2>
    <form method="POST" action="">
        <table>
            <tr>
                <td>
                    <label for="address">Address:</label><br>
                </td>
                <td><input type="text" id="address" name="address"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="age">Age:</label><br>
                </td>
                <td> <input type="number" id="age" name="age" min="18" max="100"><br></td>
            </tr>
            <tr>
                <td>
                    <label for="zip">Zip:</label><br>
                </td>
                <td> <input type="text" id="zip" name="zip" pattern="[0-9]{5}"><br></td>
            </tr>
            <tr>
                <td>
                    <label for="gender">Gender:</label><br>
                <td> <input type="radio" id="male" name="gender" value="male"></td>
            </tr>
            <tr>
                <td>
                    <label for="male">Male</label><br>
                <td><input type="radio" id="female" name="gender" value="female"></td>
            </tr>
            <tr>
                <td>
                <td><br> <button type="submit" name="Submit">Confirm</button>
                </td>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>