<?php
    $servername = "lamp.soton.ac.uk";
    $username = "MANG6180_student";
    $password = "tintin1830";
    $dbname = "mgmt_webapp_msc";
    $tableName = "photographers";

    // Connect
    $connect = mysql_connect($servername, $username, $password) or die("Connection failed");

    // Select db
    $dbSel = mysql_select_db($dbname) or die(mysql_error());
    
    //Get photograher info
    $result = mysql_query("SELECT * from photographers");

    // Iterate over result
    while ($result_row = mysql_fetch_array($result)){
        $firstName = $result_row[1];
        $lastName = $result_row[2];
        $address = $result_row[3];
        $postcode = $result_row[4];
        $email = $result_row[5];
        $phone = $result_row[6];
        
        echo "<tr>
                <td>$firstName</td>
                <td>$lastName</td>
                <td>$email</td>
                <td>$address, $postcode</td>
                <td>$phone</td>
             </tr>";
    }


?>