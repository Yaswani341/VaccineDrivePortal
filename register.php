    <?php
        include "console.php";    
        if (isset($_POST['submit1'])) {
            console_log("submitted");
            include "connect.php";
            $aadhar = ($_POST['aadhar']);
            $name = ($_POST['name']);
            $address = ($_POST['address']);
            $contact = ($_POST['contact']);
            $dose1 = 'NO';
            $dose2 = 'NO';
            
            $sql = "INSERT INTO user_details(aadhar, name, address, contact, dose1, dose2) values('$aadhar', '$name', '$address', '$contact','$dose1' ,'$dose2')";
            console_log("inserted details");
            if ($link->query($sql))
            {
                console_log("linked to database");
                echo "New record created successfully <br>";
            }
            else
            {
                    console_log("insertion failed");
                    echo "Error: " . $sql . "<br>" . $link->error;
            }
        }
        echo "Success";
    ?>      