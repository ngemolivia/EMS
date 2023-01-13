<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
	<title> JETECHNOLOGIE employee management system</title>
	<style type="text/css">
		#
		{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		.body2
		{
			font-family: "open sans";
			color: white;
		}
		   body
	{
		font-size: 20px;
	}

		.section
		{
			position: relative;
			height: 100vh;
			width: 100%;
			background-image: url("img/web3.jpg");
			background-size: cover;
			background-position: center center;
		}
		       span
		       {
		       	color: white;
		       }
		.container
		{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			background:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7));	
			width: 25%;
		}
		h1
		{
			text-transform: uppercase;
			font-size: 2em;
			text-align: center;
			margin-bottom: 2em;
			color: white;
			margin-top: 4em;
		}
		.control input
		{
			display: block;
			width: 95%;
			padding: 10px;
			border:none;
			outline: none;
			margin: 1em 0;
			background-color: transparent;
			outline: none;
	color: white;
	border-bottom: 2px solid white;
		}
		label
		{
			color: white;
		}
		 #avarta
		 {
		 	width: 100px;
		 	height: 100px;
		 	border-radius: 50%;
		 	position: absolute;
		 	top: 5%;
			left: 50%;
			transform: translate(-50%,-50%);
		 }
		#btn
		{
			background:rgb(0,255,64);
			color: black; 
			margin: 2em;
			margin-left: 0em;
			padding: 10px;
		}
		#nw
		{
			margin-bottom: 2em;
		}

	</style>
</head>

<body>
                               
	<section class="section">
<div class="container">
	<img src="img/je.jpg" id="avarta">
	<h1>login form</h1>
	<form method="POST" action="alog.php" >
		<div class="control">
			<label for="name">username</label>
			<input type="text" name="username" id="name">
		</div>
		<div class="control">
			<label for="Password">Password</label>
			<input type="Password" name="password" id="psw">
		</div>
		<div>
			<input type="submit" value="LOGIN" id="btn">
		</div>
	</form>
</div>
</section>

</body>
</html>