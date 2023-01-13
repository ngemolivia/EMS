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
	height:10vh;
	}
	
	   body
	{
		font-size: 20px;
	}
	h1
	{
		font-size: 30px;
		margin-top: 2px;
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
 
	.wow
	{
		margin-bottom: 2em;
	}

  #btn
  {
      padding: 5px 8px;
      background:rgb(0,255,64);
     margin-bottom: 2PX;
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
		  form
		  {
		  	margin-top: 4em;
		  	text-align: center;
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

  <section>
  	<div class="input-group">

  	<strong> <form method="POST">
 
  		<h2 class="wow">MARK YOUR ATTENDANCE HERE!!</h2>

	<input type="" name="" value="<?php echo date('d-m-Y');?>" readonly="readonly"><br><br>
	<input type="" name="" value="<?php echo date('H-i');?>" readonly="readonly"><br><br>
	<span > <label >Employee full name</label> <br><br> 
	 <input type="text" name="employee_name"> <br><br>
	<span > <label >Entering or Leaving work?</label> <br><br> 
		  <input type="text" name="presence"> <br><br>
	   <span>  <button type="submit" name="save" id="btn"><strong>SAVE</strong> </button> <a href="employee_site.php" id="bt">BACK</a> </span>

</form></strong>
</div>

  </section>



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



	$employeeN=$_POST['employee_name'];
	$presence=$_POST['presence'];



		if( $_POST['employee_name']== "" or $_POST['presence'] == ""){
					echo "<script type='text/javascript'> alert('fill the inputs !!') </script>";
				}
				else{
					

	$sql = "INSERT INTO attendance ( employee_name, presence, time ) VALUES ( '$employeeN', '$presence' , current_timestamp())";

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