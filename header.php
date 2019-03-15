<?php
    session_start();
?>

<!DOCTYPE html>
<!--
Template Name: Wavefire
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Blood Hub BD</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="css/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    var sticky = "";
    var navbar = document.createElement("div");
    window.onscroll = function() {
          myFunction()
    };

    window.onload = function(){
    	navbar = document.getElementsByClassName("row1")[0];
    	row2 = document.getElementsByClassName("row2")[0];
    	sticky = navbar.offsetTop;
    }

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.setAttribute("id","sticky");
        } else {
            navbar.removeAttribute("id");
        }
    }
</script>
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">

  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="one_quarter first">
      <h1><a href="index.php"><span>Blood</span>Hub<span style="color:green">BD</span></a></h1>
    </div>
    <div class="three_quarter">
      <ul class="nospace clear">
        <li class="one_third first">
          <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +088 01924901115</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@bloodHubBD.com</span></div>
        </li>
        <li class="one_third">
          <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Sun. - Tues.:</strong> 08.00am - 18.00pm</span></div>
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </header>


</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <section class="hoc clear"> 
    <!-- ######################################   Navigation bar #################################### -->
    <nav id="mainav">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>   
          <li><a href="donorlist.php">Donor List</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Sign Up</a></li>
          <li><a href="about.php">About</a></li>
        </ul>
    </nav>
    <!-- ################################################################################################ -->
    <span id="usergoto" style="visibility: hidden;border-radius: 30px;width: 61px;height: 61px;background: #f8f9fa;z-index: 10;position: absolute;left: 65%;"></span>
    <div id="searchform">
      <div>
        <form action="#" method="post">
          <fieldset>
            <legend>Quick Search:</legend>
            <input type="text" placeholder="Enter search term&hellip;">
            <button type="submit"><i class="fas fa-search"></i></button>
          </fieldset>
        </form>
      </div>
    </div>
    <!-- ################################################################################################ -->
  </section>
</div>

<!-- Will it work -->