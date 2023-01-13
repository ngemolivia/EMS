<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title> JETECHNOLOGIE employee management system</title>
<style type="text/css">
	header
	{
	background:rgb(0,255,64);
	height: 10vh;
	}

       #hdr
		{
			padding-top: 5px;
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
	body
	{
		font-size: 20px;
		margin: 0;
	}
	h1
	{
		font-size: 30px;
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



 <?php
// connection to database
$conn=new mysqli('localhost','root','','ems');

if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
else
{
$sql="SELECT * FROM report";
$result=mysqli_query($conn,$sql);
}

?>     
   
     
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
				<th>No</th>
				<th>DATE</th>
				<th>REPORT TYPE</th>
				<th>PRICE</th>
			</tr>
		</thead>
		 <tbody>

		 	 <?php  while ($row=mysqli_fetch_array($result)) { ?>

		        <tr>
		             	<td> <?php echo $row['id_report']; ?> </td>
		             	<th> <?php echo $row['datejr']; ?> </th>
		             	<th> <?php echo $row['report_type']; ?> </th>
		             	<th> <?php echo $row['price']; ?> </th>
		       </tr>

	      	<?php
	      }
	      ?>

		               </tbody>
	</table>
</div>

<?php
 include("layout/footer.php")
 ?>
 
</body>
</html>