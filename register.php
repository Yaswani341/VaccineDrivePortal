    <?php

        function console_log($output, $with_script_tags = true) {
            $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . ');';
            if ($with_script_tags) {
                $js_code = '<script>' . $js_code . '</script>';
            }
        echo $js_code;
        }
        console_log('hi');
    
        if (isset($_POST['submit1'])) {
            include 'connect.php';
            $name = ($_POST['name']);
            $address = ($_POST['address']);
            $contact = ($_POST['contact']);
            $dose1 = 'NO';
            $dose2 = 'NO';
            $sql = "INSERT INTO user_details(name, address, contact, dose1, dose2) values('$name', '$address', '$contact','$dose1' ,'$dose2')";
            if ($link->query($sql)) {
                echo "New record created successfully <br>";
              } else {
                echo "Error: " . $sql . "<br>" . $link->error;
              }
        }
        
        echo "Success";
    ?>      