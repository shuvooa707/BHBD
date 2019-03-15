<?php
    session_start();
    require("dijkstra/RunTest.php");

?>

<?php 

    //print(runTest("mohammadpur","azimpur"));
    $uname = $_SESSION["uname"];
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
    
    
    $sql = "SELECT blood_group FROM request_board WHERE requester='$uname'";
    //echo $sql;
    $result = $conn->query($sql);
    
    $blood_group = "";
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            foreach($row as $x => $x_value) {
                $blood_group =  $x_value;
            }
        }
    } else {
        echo "User Not Found";
        return 0;
    }

    //echo $blood_group;
       
    $sql = "SELECT Name,age,gender,address,userName FROM `user_data_table` WHERE bloodGroup='AB'";
    $result = $conn->query($sql);
    
    $list = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            foreach($row as $x => $x_value) {
                $tmp[$x] = $x_value;
            }
            array_push($list,$tmp);
        }
    } else {
        echo "User Not Found";
        return 0;
    }
    print_r($list[0]["address"]);

    $conn->close();
?>