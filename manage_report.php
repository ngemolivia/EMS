<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	
    <!--header -->
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<title> Employee management system</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

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
			margin-top: 10px;
		}
		#link
		{
			background: rgb(182,223,45);
			text-decoration:none;
		}

		#edit{
			text-decoration: none;
			color: black;
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

            
	<header>
			<div style="display: flex; justify-content: space-between;">
           		<div><h1>EMPLOYEE MANAGEMENT SYSTEM  </h1></div>
           		 <div><h1><a hreF="employee_site.php" id="a">BACK</a></h1></div>
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
				<th>ACTION</th>
			</tr>
		</thead>
		<tbody>
			<?php
				// connection to database
				$db = new PDO('mysql:host=localhost; dbname=ems', 'root', '');
				$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
				$requete = $db->prepare('SELECT report.id_report, report.datejr, report.report_type, report.price FROM report, employee WHERE report.emp_id = employee.id AND employee.id = :id');
				$requete->execute([':id' =>$_SESSION["employe_id"]]);	
			?>     

			  <?php
			  while ($donnees=$requete->fetch(PDO::FETCH_ASSOC)) 
				{	
			   ?> 
			<tr>
				<td> <?=$donnees['id_report']; ?> </td>
				<td>  <?=$donnees['datejr']; ?> </td>
				<td>  <?=$donnees['report_type']; ?></td>
				<td>  <?=$donnees['price']; ?> </td>
				<td>
					<button id="link"><a  id="edit" href="update.php? id_emp=<?=$donnees['id_report']; ?>">edit</a></button>
				</td>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>