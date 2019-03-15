<?php include('header.php'); ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
    <!-- <div id="signupplate">
        <div style="margin:10px auto; width:600px; height:820px; box-shadow:1px 1px 10px #aaa; background:#8080800f; border-radius:10px; padding:20px;" class="well-lg">
            <div class="form-group">
                <label for="usr">Full Name:</label>
                <input type="text" class="form-control input-lg" id="fullname">

                <label for="usr">User Name:</label>
                <input value="enter user name" type="text" class="form-control" id="uname">

                <label for="usr">Birth Date:</label>
                <input type="text" class="form-control input-lg" id="bdate">

                <label for="usr">Age:</label>
                <input type="text" class="form-control" id="age">
                
                <label for="usr">Gender:</label>
				<select id="gender" class="form-control">	
					<option value="0">Select Your Gender</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>

                <label for="usr">Address:</label>
                <input type="text" class="form-control" id="address">
                
                <label for="usr">Phone:</label>
                <input type="number" class="form-control" id="phone">

                <label for="usr">Nationality:</label>
                <input type="text" class="form-control" id="nationality">

                <label for="usr">Blood Group:</label>
				<select id="bloodgroup" class="form-control">	
					<option value="0">Select Your Bllod Group</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
				</select>
                <label for="usr">Password:</label>
                <input type="password" class="form-control" id="password">
				</div>  
            <button onclick="signup()" type="button" class="btn btn-default btn-lg">Login</button>     
            <label style="visibility:hidden;font-style: italic;color:red;" color="red" id="feedback">Something Went Worng! Please try again</label>
        </div>
    </div> -->
	
	
	<!-- This is sign form -->
	<center>
	<div class="Container">
		<div class="row centered-form">
			<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
				<div class="panel panel-default" style="background:rgba(255,255,255,0.8);">
					<div class="panel-heading">
						<h3 class="panel-title">Please Enter Your Information Here </h3>
					</div>

					<div class="panel-body">
						<form role="form">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="text" name="user_name" id="user_name" class="form-control input-sm" placeholder="Enter a user name">								
							</div>
							
							<div class="form-group">
								<input type="text" name="email" id="email" class="form-control input-sm" placeholder="Email Address">								
							</div>

							<div class="row">
								<div class="col-xs-6 col-sm-6 col-ms-6">
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control input-sm" placeholder="password">
										
									</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-ms-6">
									<div class="form-group">
										<input type="password" name="re-password" id="re-password" class="form-control input-sm" placeholder="Re-type Password">
										
									</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Enter phone No.">
									</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<select id="bloodgroup" class="form-control">	
											<option value="0">Select Your Bllod Group</option>
											<option value="A+">A+</option>
											<option value="A-">A-</option>
											<option value="B+">B+</option>
											<option value="B-">B-</option>
											<option value="AB+">AB+</option>
											<option value="AB-">AB-</option>
											<option value="O+">O+</option>
											<option value="O-">O-</option>
										</select>									
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<input type="date" name="date" id="birth_date" class="form-control input-sm" placeholder="Enter date of birth">								
							</div>
							<div class="form-group">
								<input type="text" name="age" id="age" class="form-control input-sm" placeholder="Enter Your Age">								
							</div>
							
							<div class="form-group">
								<select id="gender" class="form-control">	
									<option value="0">Select Your Gender</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>						
							</div>
							
							<div class="form-group">
								<input type="text" name="Nationality" id="nationality" class="form-control input-sm" placeholder="Enter your Nationality">								
							</div>
							
							<div class="form-group">
								<input type="text" name="address" id="address" class="form-control input-sm" placeholder="Enter your Address">								
							</div>

							<input type="button" value="Register" class="btn btn-info btn-block" onclick="signup()" >
						</form>						
					</div>
				</div>				
			</div>			
		</div>	
	</div>
	</center>
	
	
	
</div>

<script type="text/javascript">
	function check_For_UserName_Validity(){
		
	}

	function signup(){
		first_name = document.getElementById("first_name").value;
		last_name = document.getElementById("last_name").value;
		user_name = document.getElementById("user_name").value;
		email = document.getElementById("email").value;
		birth_date = document.getElementById("birth_date").value;
		age = document.getElementById("age").value;
		gender = document.getElementById("gender").value;
		address = document.getElementById("address").value;
		phone = document.getElementById("phone").value;
		nationality = document.getElementById("nationality").value;
		bloodgroup = document.getElementById("bloodgroup").value;
		password = document.getElementById("password").value;
		console.log(first_name,last_name,user_name,birth_date,age,gender,address,phone,nationality,bloodgroup,password);
		if( gender && bloodgroup && true ){
			match(first_name,last_name,user_name,birth_date,age,gender,address,phone,nationality,bloodgroup,password);		
		}	
		else {
			alert("Plase Enter All The FieldS !!");
		}
	}
	function match(first_name,last_name,user_name,birth_date,age,gender,address,phone,nationality,bloodgroup,password) {

        var tmp = "makenewuser.php?first_name=" + first_name + "&last_name=" + last_name + "&user_name=" + user_name + "&birth_date=" + birth_date + "&age=" + age + "&gender=" + gender + "&address=" + address + "&phone=" + phone + "&nationality=" + nationality + "&bloodgroup=" + bloodgroup + "&password=" + password + "&email=" + email;
        console.log("\n\n"+tmp);
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				if( xmlhttp.responseText == "success" ) {
					next();
				} else if( xmlhttp.responseText == "2222" ){
					document.getElementById("feedback").style.visibility="visible";
				} else {

				}
            }
        };
        xmlhttp.open("GET", tmp, true);
        xmlhttp.send();
    }	

	function next(){
		window.location = "user.php?user="+user_name;
	}

</script>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include('footer.php'); ?>
