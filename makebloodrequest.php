<?php 
    session_start();
    $address = $_REQUEST["address"];
    $requester = $_SESSION["uname"];
    $phone = $_REQUEST["phone"];
    $bloodgroup = $_REQUEST["bloodgroup"];
    $date = $_REQUEST["date"];
    $age = $_REQUEST["age"];
    $quantity = $_REQUEST["quantity"];
    $gender = $_REQUEST["gender"];
    $reason = $_REQUEST["reason"];

    $bloodgiven = 0;
    $id = 0;
	
    $servername = "localhost";
    $username = "bhbltd";
    $password = "abcd";
    $dbname = "bloodhubbd";
    
    // Create connection and find the out the number of total blood requests 
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
    $sql = "INSERT INTO `request_board` (`address`, `date_within`, `age`, `gender`, `phone`, `blood_group`, `reason`, `id`, `quantity`, `requester`) VALUES ('".$address ."','". $date."','".$age."','".$gender."','".$phone."','".$bloodgroup."','".$reason."','".$id."','".$quantity."','".$requester."')";
	//echo $sql;
	$result = $conn->query($sql);
    if ($result) {
		echo "success";
    } else {
		echo "Failed";
    }
    $conn->close()
	
	
?>