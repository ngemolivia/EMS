<?php

$email =$_POST['email'];
$pass_word =$_POST['password'];

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'ems');
if ($conn == false) {
  die("ERROR : impossible to connect." .mysqli_connect_error());
}
$email= stripcslashes($_REQUEST['email']);
$email= mysqli_real_escape_string($conn, $email);
$pass_word= stripcslashes($_REQUEST['password']);
$pass_word= mysqli_real_escape_string($conn, $pass_word);


$query ="SELECT * FROM `employee` WHERE email='$email' and password='$pass_word'";
// echo $query;
// exit;
$result =mysqli_query($conn, $query);
//$row=mysqli_num_rows($result);
$row=  mysqli_fetch_array($result);
if(is_array($row)) {
  $_SESSION["employe_id"] = $row['id'];
  $_SESSION["employe_email"] = $row['email'];
  $_SESSION["employe_firstname"] = $row['first_name'];
  $_SESSION["employe_lastname"] = $row['last_name'];

//var_dump($_SESSION["employe_id"]) ;
// exit;
/*
        setcookie('user_name',$user_name,time()+3600);
        setcookie('pass_word',$pass_word,time()+3600);
        $_SESSION['user_name']= $user_name;
        $_SESSION['employeeid']= $row['id'];
*/


// if($row == 1){
//  $_SESSION['employee_username']= $user_name;
// // echo ($_SESSION['employee_username']);
// // exit;
//  $_SESSION['username_employe']= $row['username'];
  echo "<script>
  alert('Welcome employee');
document.location.href='http://localhost/project/employee_site.php'

  </script>";
}else{
  $message = "Incorrect details";
  echo "<script>
alert('Invalid email or Password');
document.location.href='http://localhost/project/login.php'

  </script>";
}

