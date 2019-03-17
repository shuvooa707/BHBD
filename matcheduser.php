<?php include('header.php'); ?>
<div class="wrapper row2">
    <div id="mainplate">

        <div id="datatable" class="row">		
                <div class="col-lg-12">
                    <button class="btn">Request</button>
                </div>
			<!-- This Table represents user data -->
            <table class="table" id="mainTable">
                           
            </table>
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
        xmlhttp.open("GET", "getData.php?uname=<?php echo $_REQUEST["user"] ?>", true);
        xmlhttp.send();
    }
	
	// This function inserts Data into table 
    function manDom(data){
       var da = data.split(",");
       
       var tr = document.createElement("tr");
       var td1 = document.createElement("td");
       var td2 = document.createElement("td");

        for(i=0;i<da.length-1;i++){
            if(da[i].split(":")[0].toUpperCase()!="PASSWORD"){
                var tr = document.createElement("tr");
                var td1 = document.createElement("td");
                var td2 = document.createElement("td");
                td1.innerHTML=da[i].split(":")[0].toUpperCase();

                td1.style.paddingTop="5px";
                td1.style.paddingBottom="5px";
                td1.style.paddingLeft="10px";
                td1.style.background = "#000000c2";
                td1.style.color="white";
                td1.style.fontWeight="bold";
                td1.style.fontSize="20px";
                tr.appendChild(td1);

                var td2 = document.createElement("td");
                td2.style.fontWeight="bold";
                td2.style.color="#020101";
                td2.style.paddingLeft="10px";
                td2.style.paddingTop="20px";
                td2.innerHTML=da[i].split(":")[1];
                tr.appendChild(td2);
                
                table = document.getElementsByTagName("table")[0];
                table.appendChild(tr);
            }
       }        
    }
    window.onload = main();
</script>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include('footer.php'); ?>
