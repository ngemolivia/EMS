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
	form
	{
		text-align: center;
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
	<strong><form method="POST">
		         <h1>NEW ADMIN</h1>
		UserName <input type="text" name="username"  ><br><br>
		Password <input type="Password" name="password" ><br><br>
		<span ><button type="submit" name="save" id="btn"><strong>SAVE</strong></button> <a href="admin_site.php" id="bt">BACK</a> </span>
	</form></strong>
</div>
            

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

	$name = $_POST['username'];
	$password = $_POST['password'];
	

		if($_POST["username"] == "" or $_POST["password"] == ""){

					echo "<script type='text/javascript'> alert('fill in the informations!!') </script>";
				}
				else{

	$sql = "INSERT INTO adminlogin ( username, password ) VALUES ('$name', '$password')";
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