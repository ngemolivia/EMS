<?php session_start();
$db = new PDO('mysql:host=localhost; dbname=ems', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

if (isset($_POST['update'])) 
	{
		$requete = $db->prepare('UPDATE report, employee SET  report.datejr=:datejr, report.report_type=:report, report.price=:price WHERE report.emp_id = employee.id AND employee.id = :id AND report.id_report = :id_report');
		$requete->bindvalue(':id', $_SESSION["employe_id"]);
		$requete->bindvalue(':id_report', $_GET['id_emp']);
		$requete->bindvalue(':datejr', $_POST['date']);
		$requete->bindvalue(':report', $_POST['report_type']);
		$requete->bindvalue(':price', (int)$_POST['price']);
		$requete->execute();
		if ($requete) 
		{
			header('location:edit_report.php');
		}
		
	}
if (isset($_GET['id_emp'])) 
{
	$requete = $db->prepare('SELECT report.id_report, report.datejr, report.report_type, report.price FROM report, employee WHERE report.emp_id = employee.id AND employee.id = :id AND report.id_report = :id_report');
	$requete->execute([':id' =>$_SESSION["employe_id"],':id_report' =>$_GET['id_emp']]);
	$donnees = $requete->fetch();
}
?>
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
	body
	{
		font-size: 20px;
	}
	h1
	{
		font-size:30px;
	}
	
	.input-group
	{
		margin: 10px 0px 10px 0px;
	}
	.input-group input
	{
		
		padding: 5px 10px;
		font-size: 16px;

	}

form
{
	text-align: center;
}
               
  #btn
  {
  	padding: 5px 8px;
  	background:rgb(0,255,64);

  }
  #bt
  {
  	padding: 2px;
  	background:rgb(0,255,64);
  	text-decoration: none;
  	border: 1px solid black;
  	margin-left: 5px;
  	color: black;

  }
	  footer
{
	background:rgba(68,95,14);
	height: auto;
}
footer p
       {
       	margin-top: 4em;
       	text-align: center;
       	color: white;
       	font-size: 15px;
       }
</style>
</head>
<body>

 
<header>
        <h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
</header>
<!--<?php
//$data = "SELECT * FROM report" 
//$result=$conn->query($data);
//$count = $result->num_rows;
?>

 <div class="input-group">
 	<strong><form class="col-auto" method="POST">

 		<h2 style="margin-bottom: 2em;">REPORT OF THE DAY</h2>
  <?php
    // if($count>0){
      // $n = 1;
       //while($val=$result->fetch_assoc()){
   ?>
   -->	
   <div class="input-group">
   	<strong><form class="col-auto" method="POST" action="#">
 		DATE <input  type="date" name="date" value="<?=$donnees['datejr']?>" style="margin-left: 9px;" ><br><br>
 		REPORT TYPE <textarea name="report_type" rows="8" cols="45"><?=$donnees['report_type']?></textarea><br><br>
 		PRICE <input  type="text" placeholder="price value" name="price" value="<?=$donnees['price']?>" style="margin-left: 20px;"><br><br>

 		<button type="submit" name="update" id="btn"><strong>UPDATE</strong></button> <a href="employee_site.php" id="bt">BACK</a> </span>
			 	</form></strong> 		
 </div>
                         
<footer>
	<p>
	 &copy; Copyrights <strong>JETECHNOLOGIE</strong>. All Rights Reserved
	</p>
	<p>

		 Created by Engineer: NGEM OLIVIA PONGHA.
	</p>
</footer>
</body>
</html>