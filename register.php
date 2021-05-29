    <?php
        include "console.php";    
        if (isset($_POST['submit1'])) {
            console_log("submitted");
            include 'connect.php';
            $aadhar = ($_POST['aadhar']);
            $name = ($_POST['name']);
            $address = ($_POST['address']);
            $contact = ($_POST['contact']);
            $dose1 = 'NO';
            $dose2 = 'NO';
            $sql = "INSERT INTO user_details(aadhar, name, address, contact, dose1, dose2) values('$aadhar', '$name', '$address', '$contact','$dose1' ,'$dose2')";
            if ($link->query($sql)) {
                echo "New record created successfully <br>";
              } else {
                echo "Error: " . $sql . "<br>" . $link->error;
              }
        }
        echo "Success";
    ?>      