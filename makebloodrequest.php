<?php 
    $address = $_REQUEST["address"];
    $date = $_REQUEST["date"];
    $age = $_REQUEST["age"];
    $gender = $_REQUEST["gender"];
    $phone = $_REQUEST["phone"];
    $bloodgroup = $_REQUEST["bloodgroup"];
    $reason = $_REQUEST["reason"];
    $bloodgiven = 0;
    $id = 0;
	
    $servername = "localhost";
    $username = "bhbltd";
    $password = "abcd";
    $dbname = "bloodhubbd";
    
    // Create connection and find the out the number of user 
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "SELECT * FROM request_board";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                $id = $id + 1;
        }
    } else {
        $id = 0;
    }
    $conn->close();
	
	// Create connection and add new user 
	$conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    $sql = "INSERT INTO `request_board` (`address`, `date`, `age`, `gender`, `phone`, `bloodgroup`, `reason`, `id`) VALUES ('".$address ."','". $date."','".$age."','".$gender."','".$phone."','".$bloodgroup."','".$reason."','".$id."')";
	//echo $sql;
	$result = $conn->query($sql);
    if ($result) {
		echo "success";
    } else {
		echo "Failed";
    }
    $conn->close()
	
	
?>