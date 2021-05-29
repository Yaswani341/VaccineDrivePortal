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
            console_log("$ID");
            $sql = "SELECT * FROM doctor_details";
            $result = $link->query($sql);
            console_log("linked");
            while($row = mysqli_fetch_array($result))
            {
                console_log("checking entries");
                if($ID == $row['ID'])
                {
                    console_log("id exist");
                    if($password == $row['password'])
                    {
                        console_log("user exits");
                        header("Location:edit.php");
                    }
                    else
                    {
                        console_log("wrong pass");
                        echo "Incorrect password";
                    }
                }  
                else
                {
                    echo "Not exits";
                }
            }
        }
        
    ?>
    </body>
</html>