<?php 
    $uname = $_REQUEST["uname"];
    $pass = $_REQUEST["pass"];
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
    
    $sql = "SELECT password FROM user_data_table WHERE userName='".$uname."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if( $pass == $row["password"] ) {
                echo "1111";
                return 0;
            } else {
                echo "2222";
                return 0;
            }
        }
    } else {
        echo "2222";
        return 0;
    }
    $conn->close();
?>