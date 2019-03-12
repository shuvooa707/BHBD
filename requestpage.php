
<?php include('header.php'); ?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <section class="hoc container clear" style="min-height:600px; max-height:800px; overflow:scroll"> 
    <!-- ################################################################################################ -->
            <div class="row" id="requestpagerequest">
                <div class="col-lg-5">
                    
                </div>
            </div>
    <!-- ################################################################################################ -->
  </section>
</div>

<script type="text/javascript">
    // This function fetches data from the database
	// and calls the manDom function with featched data as arguments
    function main(){
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				if(xmlhttp.responseText=="User Not Found"){
                    
				}
				else {
					manDom(xmlhttp.responseText);
				}
            }
        };
        xmlhttp.open("GET", "getpossibledonor.php?uname=<?php echo $_SESSION["uname"];?>", true);
        xmlhttp.send();
    } main();
	function manDom(data){
        userList = [];
        tmpUser = {};
        d = data.split("|");
        for(var i=0;i<d.length-1;i++){
            var x = d[i].split(",");
           // console.log(x);    
            for (let j = 0; j < x.length; j++) { 
                tmpUser[x[j].split(":")[0]] = x[j].split(":")[1];           
            } 
            userList.push(tmpUser);
            tmpUser = {};
        }
        console.log(data);
        var append = document.querySelector(".col-lg-5");

        for(var i=0;i<userList.length;i++){
            var node = `<a href="user.php?user=${userList[i].userName}">
                            <div class="row donorplate">
                                <div class="col-lg-2 img"></div>
                                <div class="col-lg-8 info">
                                    <h4>${userList[i].Name}</h4>
                                    <p><i>${userList[i].age}+, ${userList[i].gender}</i></p>
                                    <p><i>${userList[i].address}</i>    <span style="color:gray; font-weight:bold;">,1 km</span> </p>                                    
                                </div>
                            </div>
                        </a>`;            
            append.innerHTML += node;
        }
    }
</script>

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<?php include('footer.php'); ?>
