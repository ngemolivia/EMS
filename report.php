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
	 footer p
       {
       	margin-top: 20px;
       	text-align: center; 
       }

</style>
</head>
<body>

 
<header>
        <h1>EMPLOYEE MANAGEMENT SYSTEM</h1>
</header>

 <div class="input-group">
 	<strong><form class="col-auto" method="POST">

 		<h2 style="margin-bottom: 2em;">REPORT OF THE DAY</h2>
  		
 		DATE <input  type="date" name="datejr" style="margin-left: 9px;"><br><br>
 		REPORT TYPE <textarea name="report_type" rows="8" cols="45"></textarea><br><br>
 		PRICE <input  type="int" placeholder="price value" name="price" style="margin-left: 20px;"><br><br>
 		<span ><button type="submit" name="save" id="btn"><strong>SAVE</strong></button> <a href="employee_site.php" id="bt">BACK</a> </span>
 	</form></strong>
 </div>
                  
    <?php
// connection to database
$conn=new mysqli('localhost','root','','ems');

if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}else{


//when save button is clicked
if(isset($_POST['save'])){

$date=$_POST['datejr'];
$report=$_POST['report_type'];
$price=$_POST['price'];

		if($_POST["datejr"] == "" or $_POST["report_type"] == "" or $_POST["price"] == ""){

					echo "<script type='text/javascript'> alert('input reports!!') </script>";
				}
				else{

	$sql = "INSERT INTO report (emp_id, datejr, report_type, price) VALUES ( '$date',
'$report', '$price')";
	 $result=$conn->query($sql);

	if ($sql) {
		echo "<script type='text/javascript'> alert('data saved') </script>";
		
	} 
	else
	{
		echo "<script type='text/javascript'> alert('data not saved') </script>";
		
	}
   
  }
	 }
}

?>
           

<?php
 include("layout/footer.php")
 ?>


</body>
</html>