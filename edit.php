<html>
<body>
<center>
        <h1 style="background-color :antiquewhite;">
                
        </h1>
        <style>
                table 
                {
                        border-collapse: collapse;
                        width: 100%;
                }
                th 
                {
                        background-color: #e7a192;
                        color: white;
                }
                th, td 
                {
                        text-align: left;
                        padding: 8px;
                }
                tr:nth-child(even)
                {
                        background-color: #f2f2f2
                }

        </style>
        <?php
                include "connect.php";
                $sql = "SELECT * FROM user_details";
                $result = $link->query($sql);
                echo "<table border='1'>
                <tr>
                <th>Aadhar</th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Dosage-1</th>
                <th>Dosage-2</th>
                </tr>";
                while($row = mysqli_fetch_array($result))
                {
                        echo "<tr>";
                        echo "<td>" . $row['aadhar'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['contact'] . "</td>";
        ?>
                <form action="update.php" method="POST"> 
                        <td>    <input type="radio" name="dose1" value="yes">Yes 
                                <input type="radio" name="dose1"  value="no">No 
                        </td>
                        <?php 
                                if ($row['dose1']=="yes") 
                                        echo "checked";
                                if ($row['dose1']=="no") 
                                        echo "checked";
                                
                        ?>
                        <td>    <input type="radio" name="dose2" value="yes">Yes 
                                <input type="radio" name="dose2"  value="no">No 
                        </td>
                        <?php 
                                if ($row['dose2']=="yes") 
                                        echo "checked";
                                if ($row['dose2']=="no") 
                                        echo "checked";
                        ?>
                
                </form>
        <?php
                        echo "</tr>";
                }
                echo "</table>";
        ?>
                <br><input type="submit" value="Update" name="update"/><br><br>
        <?php
                $link->close();
        ?>
        <a href="index.html">Click here to go back
</center>
</body>
</html>