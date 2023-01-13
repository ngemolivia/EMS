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
	}
	form
	{
		text-align: center;
	}
	h1
	{
		font-size: 50px;
	}

  #btn
  {
  padding: 4px 8px;
  	background:rgb(0,255,64);
  	color: black;

  }
  #bt
  {
  	background:rgb(0,255,64);
  	text-decoration: none;
  	border: 2px solid black;
  	color: black;
  	padding: 2px;

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

    

	  footer
{
	background:rgba(68,95,14);
	padding-bottom: 3em;
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
		<img src="img/finallogo.jpg">
        <h1>A Web Hosting Company</h1>
    </header>

<div class="input-group">
	<strong><form method="POST">
		         <h2> WELCOME!!</h2>
		UserName  <input type="text" name="user_name"><br><br>
		Password  <input type="Password" name="pass_word"><br><br>
		<span ><button type="submit" name="save" id="btn">SAVE</button> <a href="login.php" id="bt">BACK</a> </span>
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

	$name = $_POST['user_name'];
	$password = $_POST['pass_word'];
	

		if($_POST["user_name"] == "" or $_POST["pass_word"] == ""){

					echo "<script type='text/javascript'> alert('fill in the informations!!') </script>";
				}
				else{

	$sql = "INSERT INTO employeelogin ( user_name, pass_word ) VALUES ('$name', '$password')";
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