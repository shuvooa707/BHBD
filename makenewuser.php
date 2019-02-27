<?php 
    $first_name = $_REQUEST["first_name"];
    $last_name = $_REQUEST["last_name"];
    $user_name = $_REQUEST["user_name"];
    $email = $_REQUEST["email"];
    $birth_date = $_REQUEST["birth_date"];
    $email = $_REQUEST["email"];
    $age = $_REQUEST["age"];
    $gender = $_REQUEST["gender"];
    $address = $_REQUEST["address"];
    $phone = $_REQUEST["phone"];
    $nationality = $_REQUEST["nationality"];
    $bloodgroup = $_REQUEST["bloodgroup"];
    $password = $_REQUEST["password"];
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
    $sql = "SELECT * FROM user_data_table";
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
    $sql = "INSERT INTO `user_data_table` (`Name`, `bDate`, `age`, `gender`, `address`, `phone`, `nationality`, `bloodGroup`, `bloodgiven`, `userName`, `id`, `password`, `email`) VALUES ('".$first_name ." ". $last_name."','".$birth_date."','".$age."','".$gender."','".$address."','".$phone."','".$nationality."','".$bloodgroup."','".$bloodgiven."','".$user_name."','".$id."','".$password."','".$email."')";
	//echo $sql;
	$result = $conn->query($sql);
    if ($result) {
		echo "success";
    } else {
		echo "Failed";
    }
    $conn->close()
	
	
?>