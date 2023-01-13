<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
 
	<title> JETECHNOLOGIE employee management system</title>

	<style type="text/css">

       header
		{
			background:rgb(0,255,64);
			height: 100px;
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
			text-align: right;
			margin-right: 6em;
		}
		li
		{
			display: inline-block;
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

#nav2{
	margin-left: 55%;
	margin-top: 5px;
}
#p
{
	text-transform: uppercase;
}
		.banniere img
		{
          width: 100%;
          margin-top: 20px;
          height: 40vh;
		}
		.banniere p
		{
         position: absolute;
		}

.dropbtn {
     background:rgba(0,0,0,0.7);
    color: white;
    padding: 6px;
    border-radius: 9px;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
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

.dropdown:hover .dropbtn {
    background-color:
}

footer p
       {
       	margin-top: 20px;
       	text-align: center;    
       }
       
	</style>
</head>
<body>
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-light">
    <div class="container-fluid flex">
      <a class="navbar-brand" href="#"><img src="img/finallogo.jpg"  style="height: 70px;"></a>
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
       
       <nav id="nav2">

<div>
       <ul>
	        
<div class="dropdown">
  <button class="dropbtn">ATTENDANCE</button>
  <div class="dropdown-content">
    <a href="attendance.php">mark attendance</a>
  </div>
</div>


      
<div class="dropdown">
  <button class="dropbtn">REPORTS</button>
  <div class="dropdown-content">
    <a href="report.php">add report</a>
    <a href="manage_report.php">Manage report</a>
  </div>
</div>
            
<div class="dropdown">
  <button class="dropbtn">LEAVE</button>
  <div class="dropdown-content">
    <a href="request.php">apply</a>
    <a href="leave_status.php">leave status</a>
  </div>
</div>
  <button class="dropbtn"><a href="logout.php">LOGOUT</a></button>
            </ul>
	</div>
			</nav>
         
        
       </div>
     
    </div>
  </nav>
</header>

<div> <h1>welcome <?= $_SESSION['employe_firstname'];?> &nbsp;<?=$_SESSION['employe_lastname'];?></h1>
				 </div></div>

		<div class="banniere">
			<img src="img/imge2.png" alt="banniere" />
			<strong><p id="p">buy your machines, web hosting, and repaire your machines.</p></strong>
		</div>
	
<br><br>

<?php
 include("layout/footer.php")
 ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>