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
    font-size: 30px;
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
      #since
      {
            margin-left: 6em;
            margin-bottom: 4em;
      }

#box
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
      border: 2px solid black;
      margin-left: 5px;
      color: black;

  } 
form
{
      text-align: center;
}
#span
{
      margin: 10px;
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
          <strong><form>
                <input type="" value="<?php echo date('d-m-Y');?>" id="since"  readonly="readonly" name=""><br><br>

                First Name  <input type="text" name="firstname"  ><br><br>

                  
                 Last Name <input type="text" name="lastname" id="box"><br><br>


                 Leave Type <textarea name="leave_type" rows="8" cols="45"></textarea><br><br>
            
            Leave Date:
            <input type="date" name="leave_date"><br><br>


            Return Date:
            <input type="date" name="return_date"><br><br>

                  
                <span id="span">  <button type="submit"  id="btn"><strong>SAVE</strong></button>  <a href="employee_site.php" id="bt">BACK</a>  </span>

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

  $fname= $_POST['firstname'];
  $lname= $_POST['lastname'];
  $ltype= $_POST['leave_type'];
  $ldate= $_POST['leave_date'];
  $rdate= $_POST['return_date'];

    if($_POST["firstname"] == "" or $_POST["lastname"] == "" or $_POST["leave_type"] == "" or $_POST["leave_date"] == "" or $_POST["return_date"] == ""){

          echo "<script type='text/javascript'> alert('fill in the informations!!') </script>";
        }
        else{

  $sql = "INSERT INTO leave ( firstname, lastname, leave_type, leave_date, return_date, day,) VALUES ('$fname', '$lname', '$ltype', '$ldate', '$rdate', current_timestamp())";
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
