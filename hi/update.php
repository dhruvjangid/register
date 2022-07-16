<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>update</title>
</head>
<body class = "main">
    <div class="heading">
    <h1> UPDATION FORM </h1>

    </div>
   

<?php 
$name = $_GET["name"];
$number= $_GET["number"];
$email= $_GET["email"];
$sex= $_GET["sex"];
$age= $_GET["age"];
$company= $_GET["company"];
$education= $_GET["education"];
$salary= $_GET["salary"];
$designation= $_GET["designation"];


  $server = "localhost";
  $username = "root";
  $password = "";
  $dbname="test1";
  $con = mysqli_connect($server,$username,$password,$dbname);
  
  if(!$con){
      die("connection the database failed due to".mysqli_connect_error());
  
  }
 else{
  echo("succesfull");
 }

$id = $_GET['id'];
$select ="SELECT *FROM `test1`.`users` WHERE id =$id" ;
$result =  mysqli_query($con , $select);
$row=mysqli_fetch_array($result);








 $db = mysqli_select_db($con,'test1');

 if(isset($_GET['update']))
 {
  $id = $_GET['id'];

   $query = "UPDATE `test1`.`users` SET  name = '$name',number='$number', email= ' $email ',sex='$sex',age='$age',company='$company',education = '$education',salary= $salary,designation = '$designation'  WHERE id = '$id'";
  
  $query_run = mysqli_query($con,$query);
  if($query_run)
  {
    echo'<script type= "text/javascript">alert("succesfull")</script>';
    header("location:index.php");
  }
 }



 if(isset($_GET['delete']))
 {
  $id = $_GET['id'];

   $queryy = "DELETE FROM `users` WHERE `users`.`id` = $id";
  $queryy_run = mysqli_query($con,$queryy);
  if($queryy_run)
  {
    echo'<script type= "text/javascript">alert(" data deleted succesfull")</script>';
  }
  header("location:index.php");
 }

 
?>
 <div class="form">

<form name="myForm" action="update.php" onsubmit="return validateForm()"  method ="GET" enctype= "multipart/form-data"><hr>
     <label for="id">ID:</label><br>
    <input type="number" id="id" name="id" value = "<?php echo $row['id']?>"><br><hr>

    <label for= "img"> Image:</lable>
    <input type="file" name = "img" value = "<?php echo $row['img']?>"><br>
   
    <br>
    <label for="name">NAME:</label><br>
    <input type="text" id="name" name="name"value = "<?php echo $row['name']?>" ><br><hr>

    <label for="number">CONTACT NUMBER:</label><br>
    <input type="text" id="number" name="number" value = "<?php echo $row['number']?>" required><br>
    <span id="error"></span><br><hr>

    <label for="email">EMAIL:</label><br>
    <input type="text" id="email" name="email"  value = "<?php echo $row['email']?> "required><hr>
    <br>
    <label for="sex">SEX:</label>

    <select name="sex" id="sex" required value = "<?php echo $row['sex']?>">
        <option value="male">MALE</option>
        <option value="female">FEMALE</option>
        <option value="other">OTHER</option>

    </select>
      <br><hr>
        <label for="age">AGE:</label><br>
        <input type="number" id="age" name="age" required value = "<?php echo $row['age']?>">
        <br>
      <hr>

  <h2>
    PROFESSIONAL INFORMATION
  </h2>

    <label for="company ">COMPANY:</label><br>
    <input type="text" id="company" name="company" required value = "<?php echo $row['company']?>"><br><hr>
    <label for="education">EDUCATION:</label><br>
    <input type="text" id="education" name="education" value = "<?php echo $row['education']?> "required><br><hr>
    <label for="salary">SALARY:</label><br>
    <input type="number" id="salary" name="salary"value = "<?php echo $row['salary']?>" required><hr><br>
    <label for="designation">DESIGNATION:</label><br>
    <input type="text" name="designation" value = "<?php echo $row['designation']?>"required><br><hr>
 
  


       <button  type = "submit" name="update" >update</button>
       <button type ="submit" name= "delete">delete</butoon>


</form>

  
</div>


      
</body>
</html>
