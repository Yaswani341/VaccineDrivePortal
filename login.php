<?php
    include "connect.php";
    include "console.php";
?>
<html>
    <body>
        <center>
            <h1 style="background-color :antiquewhite;">
                <p style="font-size:50px">Login page
            </h1>
            <br/>
            <form action="login.php" method = "POST">
                <p style="font-size:30px">
                    Enter ID: <input type="text" name="ID" required="required"  minlength="3" maxlength="3" />
                    <br/>
                    Enter password: <input type="password" name="password" required="required" />
                    <br/>
                    <input type="submit" value="submit" name = "submit1"/><br/>
                </p>
            </form>
        </center>
    <?php
        if (isset($_POST['submit1']))
        {
            $ID = ($_POST['ID']);
            $password = ($_POST['password']);
        }
        $sql = "SELECT * FROM doctor_details";
        $result = $link->query($sql);
        while($row = mysqli_fetch_array($result))
        {
            if($ID == $row['ID'])
            {
                console_log("$ID");
                if($password == $row['password'])
               {
                    console_log("$password");
                    header("Location:edit.php");
               }
               else
               {
                    echo "Incorrect password";
               }
            }  
            else
            {
                echo "Not exits";
            }

        }
        
    ?>
    </body>
</html>