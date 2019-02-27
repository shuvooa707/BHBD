<?php 
    $uname = $_REQUEST["uname"];
    $servername = "localhost";
    $username = "bhbltd";
    $password = "abcd";
    $dbname = "bloodhubbd";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM user_data_table WHERE userName='".$uname."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            foreach($row as $x => $x_value) {
                echo $x . ":" . $x_value . ",";
            }
        }
    } else {
        echo "User Not Found";
        return 0;
    }
    $conn->close();
?>