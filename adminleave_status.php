<!DOCTYPE html>
<html>
<head>
	

	    <!--header -->
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  

	<title> JETECHNOLOGIE employee management system</title>
<style type="text/css">
	header
	{
	background:rgb(0,255,64);
	height: 10vh;
	}
	  body
  {
    font-size: 20px;
  }
  h1
  {
    font-size: 30px;
  }

#a
		{
			text-align: right;
	        border-radius: 9px;
	        padding: 4px;
	        background:rgba(0,0,0,0.7);
          	color: white;
        	text-decoration:none;
			text-decoration: none;
			margin-right: 25px;
		}

	table
	{
		width: 50%;
		margin: 30px auto;
		border-collapse: collapse;
		text-align: center;
	}
	tr
	{
		border-bottom: 1px solid black;
	}
	th,td
	{
		border:none;
		height: 30px;
		padding: 2px;
		margin: 2px;
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
           	<div style="display: flex; justify-content: space-between;">
           		<div><h1>EMPLOYEE MANAGEMENT SYSTEM  </h1></div>
           		 <div><h1><a hreF="admin_site.php" id="a">BACK</a></h1></div>
           	</div>
</header>


<div>
	<table>
		<thead>
		<tr>
			<th>ID</th>
			<th>EMPLOYEE NAME</th>
			<th>PERMISSION DATE</th>
			<th>LEAVE TYPE</th>
			<th>LEAVE DATE</th>
			<th>RETURN DATE</th>
			<th>STATUS</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td> <input type="text" name="status"></td>
		</tr>
	</tbody>
	</table>
</div>

<?php
 include("layout/footer.php")
 ?>

</body>
</html>