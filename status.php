<html>
<body>
<center>
        <h1 style="background-color :antiquewhite;">
                <p style="font-size:50px">Status page
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
                        echo "<td>" . $row['dose1'] . "</td>";
                        echo "<td>" . $row['dose2'] . "</td>";
                        echo "</tr>";
                }
                echo "</table>";
                $link->close();
        ?>
        <a href="index.html">Click here to go back
</center>
</body>
</html>