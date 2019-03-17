<?php include('header.php'); ?>
<div class="wrapper row2">
    <div id="mainplate">
		<div id="col_1">
			<!-- This is the image tag for showing the user picture -->
			<img src="<?php echo "img/"."tmp".".jpg" ?>" id="propic" /> 
			<div id="bloodgroupplate"></div>
			<div id="bloodgivenplate"></div>
			<div id="bloodRequestButton">
				<a href="bloodrequestpage.php">Request For Blood</a>
            </div>
            <a href="<?php echo "requestpage.php" ?>">
                <div id="currentRequest">
                    See Current Requests
                </div>
            </a>
            <a href="signout.php">
                <div id="signoutbutton">
                    Sign Out
                </div>
            </a>
		</div>

        <div id="datatable" class="row">
			<!-- This Table represents user data -->
            <table class="table" id="mainTable">
                           
            </table>
            <div class="row">		
                <div class="col-lg-12">
                    <button class="btn btn-default col-lg-6"> Edit Profile</button>
                    <button class="btn btn-default col-lg-6"> Delete Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	// This function fetches data from the database
	// and calls the manDom function with featched data as arguments
    function main(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				if(xmlhttp.responseText=="User Not Found"){
					document.getElementById("mainplate").innerHTML="<h1 style='margin:40px 30%;'>Opps! User is't Found!</h1>";
				}
				else {
					manDom(xmlhttp.responseText);
				}
            }
        };
        xmlhttp.open("GET", "getData.php?uname=<?php echo $_SESSION["uname"] ?>", true);
        xmlhttp.send();
    }
	
	// This function inserts Data into table 
    function manDom(data){
       var da = data.split(",");
       
       var tr = document.createElement("tr");
       var td1 = document.createElement("td");
       var td2 = document.createElement("td");
        for(i=0;i<da.length-1;i++){
            var tr = document.createElement("tr");
            var td1 = document.createElement("td");
            var td2 = document.createElement("td");
            td1.innerHTML=da[i].split(":")[0].toUpperCase();
            td1.style.width = "250px";
            td1.style.paddingTop="10px";
            td1.style.paddingBottom="10px";
            td1.style.paddingLeft="15px";
            td1.style.background = "#000000c2";
            td1.style.color="white";
            td1.style.fontWeight="bold";
            td1.style.fontSize="20px";
            td1.style.borderBottom = "1px solid white";
            tr.appendChild(td1);
            var td2 = document.createElement("td");
			td2.style.fontWeight="bold";
			td2.style.color="#020101";
            td2.style.paddingLeft="10px";
            td2.style.paddingTop="20px";
            td2.style.borderBottom = "1px solid black";
            td2.innerHTML=da[i].split(":")[1];
            tr.appendChild(td2);
            table = document.getElementsByTagName("table")[0];
            table.appendChild(tr);
			//for setting Blood Group
			if(i==8){				
				var bgp = document.getElementById("bloodgroupplate");
				var bg = da[i].split(":")[1].toUpperCase();
				if( bg.indexOf("-") == -1 ){					
					bg = bg.trim() + "+";
				}
				bgp.innerHTML="<span style='background:#00000012; width:100%; text-align:center; height:24px; color:black; margin-bottom:10px; display:block;'>Blood Group </span><br><center><span style='font-size:40px;line-height:0px;color:#dc3545;'>"+bg+"</span></center>";
			}			
			//for setting Blood Donation Count
			if(i==9){				
				var bgp = document.getElementById("bloodgivenplate");
				bgp.innerHTML="<span style='background:#00000012; width:100%; text-align:center; height:24px; color:black; margin-bottom:10px; display:block;'>Blood Given </span><br><center><span style='font-size:40px;line-height:0px;color:#28a745;'>"+da[i].split(":")[1].toUpperCase()+"</span></center>";
			}
       }        
    }
    window.onload = main();
</script>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include('footer.php'); ?>