<?php
include '../controller/savingshistory_controller.php';
?>
<html>

<body>
    <h3>Savings History</h3>
    <?php

    if ($result->num_rows > 0) {

        echo "<table>";
        echo "<th>Savings ID</th><th>Savings Name</th><th>Savings Amount</th><th>Savings Type</th>";
        foreach ($result as $row) {
            echo "<tr><td>" . $row["Savings_id"] . "</td>";
            echo "<td>" . $row["savings_name"] . "</td>";
            echo "<td>" . $row["savings_amount"] . "</td>";
            echo "<td>" . $row["savings_type"] . "</td>";
            echo "<br>";
            echo "<td> <a href=".'../view/editSavings.php?savingsId='.$row['Savings_id'].">Edit<a></td>";
            echo "<td><a href=" . '../view/deleteSavings.php?Savingsid=' . $row['Savings_id'] . ">Delete</a></td>";
            echo"</tr>";
        }
        echo "</table>";
    } else {
        echo "No Savings data";
    }
    ?>
</body>

</html>