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
								<div class="col-xs-12 col-sm-12 col-ms-12">
									<div class="form-group">
										<input type="text" name="location" id="location" class="form-control input-lg" placeholder="Enter You Address">										
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
								<input type="date" name="date" id="date" class="form-control input-sm" placeholder="Enter Date You Need Within">								
							</div>
							<div class="form-group">
								<input type="text" name="age" id="age" class="form-control input-sm" placeholder="Enter Your Age">								
							</div>
							
							<div class="form-group">
								<select id="gender" class="form-control">	
									<option value="0">Select Gender of Blood Taker</option>
									<option value="male">Male</option>
									<option value="female">Female</option>
								</select>						
							</div>
							
							<div class="form-group">																
								<label for="reason">Reason:</label>
								<textarea class="form-control" rows="5" id="reason"></textarea>							
							</div>
							

							<input type="button" value="Register" class="btn btn-info btn-block" onclick="submitRequest()" >
						</form>						
					</div>
				</div>				
			</div>			
		</div>	
	</div>
	</center>
	
	
	
</div>

<script type="text/javascript">
	function checkFields(){
		
	}

	function submitRequest(){
		address = document.getElementById("location").value;
		date = document.getElementById("date").value;
		age = document.getElementById("age").value;
		gender = document.getElementById("gender").value;
		phone = document.getElementById("phone").value;
		bloodgroup = document.getElementById("bloodgroup").value;
		reason = document.getElementById("reason").value;

		//console.log(address, date, age, gender, phone, bloodgroup, reason);
		if( address && date && age && gender && phone && bloodgroup && reason ){
			match(address, date, age, gender, phone, bloodgroup, reason);		
		}	
		else {
			Swal.fire({
				type: 'warning',
				title: 'Oops...',
				text: 'Please Enter All The Fields',
				})
		}
	}

	function match(address, date, age, gender, phone, bloodgroup, reason) {

        var tmp = "makebloodrequest.php?address=" + address + "&date=" + date + "&age=" + age + "&gender=" + gender + "&phone=" + phone + "&bloodgroup=" + bloodgroup + "&reason=" + reason;
        //console.log(tmp);
		var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					console.log(xmlhttp.responseText);
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
		window.location = "requestpage.php";
	}

</script>


<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include('footer.php'); ?>