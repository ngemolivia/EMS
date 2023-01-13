

<?php

if (isset($_GET['delid'])) 
	{
		$db = new PDO('mysql:host=localhost; dbname=ems', 'root', '');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		$requete = $db->prepare('DELETE FROM employee WHERE id = :id');
		$requete->execute(['id'=>$_GET['delid']]);
		if($requete)
		{
            echo "<script>alert('employee successfully deleted');</script>";
            //echo "<script>window.location.href='manage-sale.php'</script>";
        } 
        else 
        {
            echo "<script>alert('could not delete! try again');</script>";
        }
	}
	
// connection to database
$conn=new mysqli('localhost','root','','ems');

if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}

 /*if(isset($_GET['delete'])){
           $rowid=intval($_GET['delid']);
           $query=mysqli_query($conn,"delete from employee where id='$rowid'");
              
           if($query){
                echo "<script>alert('employee successfully deleted');</script>";
                //echo "<script>window.location.href='manage-sale.php'</script>";
                    } else {
                       echo "<script>alert('could not delete! try again');</script>";
                        }
       }*/
       ?>

<!DOCTYPE html>
<html>
<head>
	   <!--header -->
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  

	<title>Employee management system</title>
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
		h1
		{
			font-size: 30px;
		}
	body
	{
		font-size: 20px;
	}
	#link
	{
		
		background: rgb(182,223,45);
		
	}
	#del
	{
		text-decoration: none;
		color: black;
	}
	table
	{
		width: 50%;
		margin: 30px auto;
		border-collapse: collapse;
		text-align: center;
		margin-top: 10%;
	}
	tr
	{
		border-bottom: 1px solid black;
	}
	th,td
	{
		border:none;
		height: 40px;
		padding: 4px;
		margin: 2px;
	}
	.search-box
	{
		position: absolute;
		top: 10%;
		left: 50%;
		transform: translate(-50%,50%);
		height: 30px;
		padding: 1em;
		border-radius: 40px;
		background:rgba(68,95,14,0.3);
	}
	.search-txt
	{
border:none;
outline: none;
background:none;
float: left;
color: white;
padding: 0;
transition: 0.4s;
width: 240px;
font-size: 16px;
border:1px solid white;

	}
	.search-btn
	{
		color: blue;
		width: 40px;
		float: right;
		height: 30px;
		border-radius: 50%;
		background: ;
		justify-content: center;
		align-items: center;
		text-decoration: none;
	
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
$sql="SELECT * FROM employee";
$result=mysqli_query($conn,$sql);
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
	      	<tr class="control">
	      		<th>ID</th>
	      		<th>EMPLOYEE NAME</th>
	      		<th>ADDRESS</th>
	      		<th>CONTACT</th>
	      		<th>E-MAIL</th>
	      		<th>GENDER</th>
	      		<th>ACTION</th>
	      	</tr>
	      </thead>
	      <tbody>

	           <?php  while ($row=mysqli_fetch_array($result)) { ?>
	         
	      	<tr>
	      		<td> <?php echo $row['id']; ?> </td>
	      		<td> <?php echo $row['first_name'].'  '.$row['last_name']; ?> </td>
	      		<td> <?php echo $row['address']; ?> </td>
	      		<td> <?php echo $row['contact']; ?> </td>
	      		<td> <?php echo $row['email']; ?> </td>
	      		<td> <?php echo $row['gender']; ?> </td>
	      		<td>
	      			<button type="submit" name="delete" id="link"><a id="del" href="employee_list.php?delid=<?=$row['id'];?>">delete</a></button>
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
 
</body>
</html>