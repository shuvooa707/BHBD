<?php
    session_start();
    require("dijkstra/RunTest.php");

?>

<?php 

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
        echo "User Not Found - 0";
        return 0;
    }   

    $sql = "SELECT address FROM request_board WHERE requester='$uname'";
    //echo $sql;
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            foreach($row as $x => $x_value) {
                $baseloc =  $x_value;
            }
        }
    } else {
        echo "User Not Found - 0";
        return 0;
    }

    //echo $blood_group;
       
    $sql = "SELECT Name,age,gender,address,userName FROM `user_data_table` WHERE bloodGroup='$blood_group'";
    //echo $sql;
    $result = $conn->query($sql);
    
    $list = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            foreach($row as $x => $x_value) {
                $tmp[$x] = $x_value;
            }
            $tmp["distance"] = runTest($baseloc,$tmp["address"]);
            array_push($list,$tmp);
        }
    } else {
        echo "User Not Found - 1";
        return 0;
    }
    //print_r($list[0]["address"]);

    //print_r($list);
    // sorting the 2d array of possible donors
    uasort($list, function($a,$b){
        if( $a["distance"] >= $b["distance"] ){
            return -1;
        } else {
            return 1;
        }
    });
    $list = array_reverse($list);
    $tmp = "";
    foreach ($list as $r) { 
        # code...
        $tmp = $tmp ."Name:".$r["Name"] . ",age:" . $r["age"] . ",gender:" . $r["gender"] . ",address:" . $r["address"] . ",userName:" . $r["userName"] . ",distance:". $r["distance"] . "|";
    }
    //print_r($list);
    echo $tmp;
    $conn->close();
?>