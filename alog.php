<?php

$username =$_POST['username'];
$password =$_POST['password'];

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'ems');
if ($conn == false) {
  die("ERROR : impossible to connect." .mysqli_connect_error());
}
$username= stripcslashes($_REQUEST['username']);
$username= mysqli_real_escape_string($conn, $username);
$password= stripcslashes($_REQUEST['password']);
$password= mysqli_real_escape_string($conn, $password);

$query ="SELECT * FROM `adminlogin` WHERE username='$username' and password='$password'";
$result =mysqli_query($conn, $query);
$row=mysqli_num_rows($result);

        setcookie('username',$username,time()+3600);
        setcookie('password',$password,time()+3600);
        $_SESSION['username']= $username;
        $_SESSION['password']= $password;


if($row == 1){
  $_SESSION['username'] = $username;
  echo "<script>
  alert('Welcome admin');
document.location.href='http://localhost/project/admin_site.php'

  </script>";
}else{
  $message = "Incorrect details";
  echo "<script>
alert('Invalid Name or Password');
document.location.href='http://localhost/project/adminlogin.php'

  </script>";
}

?>