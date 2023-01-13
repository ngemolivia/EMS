<!DOCTYPE html>
<html>
<head>
	<!--header -->
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


	<title> JETECHNOLOGIE employee management system</title>
	
<style type="text/css">
	.head{
		
			position: relative;
			height: 70vh;
			width: 96%;
			background-image: url("img/web1.jpg");
			margin-left: 2%;
			background-size: cover;
			background-position: center center;
			top: 20%;
		}
	
	.nav
	{
        background:rgb(0,255,64);
        width: 50%;
        margin-left:25%;
	}


	    body
	{
		font-size: 20px;

	}
	h1
	{
		font-size: 50px;
	}
	ul
		{
		display: flex;
		align-items: center;
		}
		li
		{display: inline-block;
	        border-radius: 9px;
	        padding: 10px;
	        background:rgba(0,0,0,0.7);
          	color: white;
        	text-decoration:none;
        	margin:10px;
        	
		}
		a
		{
			text-decoration: none;
			color: white;
		}
	
	
 	
.dropbtn {
     background:rgba(0,0,0,0.7);
    color: white;
    padding: 10px;
    border-radius: 9px;
    cursor: pointer;
    display: flex;
}

.dropdown {
    position: relative;
    display: inline-block;
    display: !important;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

footer p
       {
       	margin-top: 20px;
       	text-align: center;    
       }

</style>
</head>

<!--body starts-->

<body class="mainbody">



<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/finallogo.jpg"  style="height: auto;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
       
         <marquee behavior="scroll" direction="left" scrollamount="10">
          <h1 style="color: red;">WELCOME TO JETECHNOLOGIE EMS</h1>
         </marquee>
        
       </div>
     
    </div>
  </nav>
</header>



	<div class="head">
		<header>
       <center> <h1 style="top: 2px;">A Web Hosting Company</h1></center>
       </header>
   </div>

<div style="margin-left:2px; margin: 2em;">
 			<nav class="nav" >
<ul style="margin-left: 6em;">
	<li><a hreF="index.php">HOME</a></li>
	<li><a href="galery.php">GALERY</a></li>
    <li><a href="about.php">ABOUT</a></li>
     
<div class="dropdown">
 <strong><button class="dropbtn" style="padding: 9px;">LOGIN</button></strong>
  <div class="dropdown-content" style="z-index: 1000">
    <a href="adminlogin.php">AS AN ADMINISTRATOR</a>
    <a href="login.php">AS AN EMPLOYEE</a>
  </div>
</div>

 </ul>
    </nav>
   </div>   
       


<?php
 include("layout/footer.php")
 ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body> 
</html>