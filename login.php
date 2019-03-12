<?php include('header.php'); ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
	
	
	<div class="Container">
		<div class="row centered-form">
			<div class="col-xs-12 col-sm-9 col-md-5 col-sm-offset-3 col-md-offset-5">
				<div class="panel panel-default" style="background:rgba(255,255,255,0.8);">
					<div class="panel-heading">
						<h3 class="panel-title">Please Enter Your Username and Password Here </h3>
					</div>

					<div class="panel-body">
						<form role="form">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="user_name" id="username" class="form-control input-sm" placeholder="User Name">
									</div>
								</div>

								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
									</div>
								</div>
							</div>							
							<input type="button" value="Login" class="btn btn-info btn-block" onclick="getData()" >
							<div class="row">
								<div class="col-lg-12">
									<h4 id="feedback" style="visibility:hidden; color:red;">
										<i>Something Went Worng Please Try Again!!</i>
									</h4>
								</div>
							</div>
						</form>						
					</div>
				</div>				
			</div>			
		</div>	
	</div>
	</center>
    <!-- ################################################################################################ -->
  </section>
</div>
<script type="text/javascript">
	function getData(){
		uname = document.getElementById("username").value;
		var pass = document.getElementById("password").value;
		match(uname,pass);
	}
	function match(uname,pass) {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				if( xmlhttp.responseText == "1111" ) {
					console.log(xmlhttp.responseText);
					next();
				} else if( xmlhttp.responseText == "2222" ){
					console.log(xmlhttp.responseText);
					document.getElementById("feedback").style.visibility="visible";
				} else {
					console.log(xmlhttp.responseText);

				}
            }
        };
        xmlhttp.open("GET", "usermatch.php?uname=" + uname + "&pass="+ pass, true);
        xmlhttp.send();
    }	

	function next(){
		window.location = "user.php?user="+uname;
	}

</script>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include('footer.php'); ?>
