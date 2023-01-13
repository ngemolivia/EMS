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
	
	h1
	{
		font-size: 30px;
	}
	body
	{
		font-size: 20px;
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
  	font-size: 15px;
  	color: black;


  }
  #bt
  {
  	padding: 2px;
  	background:rgb(0,255,64);
  	text-decoration: none;
  	border: 2px solid black;
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


<strong><form method="POST">
	
	<h2>ADD EMPLOYEE</h2>
<div  class="input-group">
	FIRST NAME   <input type="text" name="first_name"><br><br>
	LAST NAME   <input type="text" name="last_name"><br><br>
	ADDRESS   <input type="text" name="address"><br><br>
	CONTACT No   <input type="int" name="contact"><br><br>
	E-MAIL   <input type="text" name="email"><br><br>
	PASSWORD   <input type="Password" name="password"><br><br>
	GENDER   <input type="radio" name="gender" value="M"> M 
	       <input type="radio" name="gender" value="F"> F<br><br>
	<span ><button type="submit" name="save" id="btn"><strong>SAVE</strong></button> <a href="admin_site.php" id="bt">BACK</a> </span>
</div>
</form></strong>

    <?php
// connection to database
$conn=new mysqli('localhost','root','','ems');

if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
else
{

//when save button is clicked
if(isset($_POST['save'])){

	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];

		if($_POST["first_name"] == "" or $_POST["last_name"] == "" or $_POST["address"] == "" or $_POST["contact"] == "" or $_POST["email"] == "" or $_POST["gender"] ==""){
					echo "<script type='text/javascript'> alert('fill in the informations!!') </script>";
				}
				else{

	$sql = "INSERT INTO employee ( first_name, last_name, address, contact, email, gender) VALUES ('$fname', '$lname', '$address', '$contact', '$email', '$gender')";
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