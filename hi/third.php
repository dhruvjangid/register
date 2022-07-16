<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OUTPUT</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class = "main">
	<script src="index.js"></script>
  <form name="myForm" action="show.php"   method ="GET" enctype= "multipart/form-data"><hr>
  
                <button  type = "submit" >Search</button>
                
  
</form>

       

  
<?php
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);

if(!$con){
    die("connection the database failed due to".mysqli_connect_error());

}

$img=$_FILES['img'];


$name = $_POST["name"];
$number= $_POST["number"];
$email= $_POST["email"];
$sex= $_POST["sex"];
$age= $_POST["age"];
$company= $_POST["company"];
$education= $_POST["education"];
$salary= $_POST["salary"];
$designation= $_POST["designation"];

$filename=$img['name'];
$temp_name=$img['tmp_name'];
$folder='image/'.$filename;
move_uploaded_file($temp_name,$folder);

$resultt = mysqli_query($con,"SELECT * FROM `test1`.`users` where `email` = '$email' ");
 if(mysqli_num_rows($resultt)>0){
  echo" email already exists";
  header("location:index.php");
 }
else{
$sql = "INSERT INTO `test1`.`users`( `img`,`name`, `number`, `email`, `sex`, `age`, `company`, `education`, `salary`, `designation`) VALUES ( '$folder','$name', '$number', '$email', '$sex', '$age', '$company', '$education', '$salary',' $designation')";

if($con->query($sql)==true){
    echo "succesfull insert";
    echo "<br>";

}
else{
    echo "error: $sql <br> $con->error";}


    $sqll = "SELECT * FROM `test1`.`users`";
    $result = mysqli_query($con ,$sqll);
    $num = mysqli_num_rows($result);
    echo "totalnumber of data =$num";
    echo "<br>";
    


    //display the data
  //  if($num>0){
    //    while($row  = mysqli_fetch_assoc($result)){
          
         
      //      echo "name :" .$row["name"] ."|"."number:".$row["number"]."|"."email:".$row["email"]."|"."sex:".$row["sex"]."|"."age:".$row["age"]."|"."company:".$row["company"]."|"."education:".$row["education"]."|"."salary:".$row["salary"]."|"."designstion:".$row["designation"];
        //    echo "<br>";
            
        //}
   // }
    
$con->close();}
?>
<table style ="border:1px solid black; border-collapse:collapse;">
    <tr style = "border:1px solid black;">
    <th style ="border: 1px solid black; padding:10px;">id</th>
    <th style ="border: 1px solid black; padding:10px;">image</th>
     <th style ="border: 1px solid black; padding:10px;">name</th>
     <th style ="border: 1px solid black; padding:10px;">number</th>
     <th style ="border: 1px solid black; padding:10px;">email</th>
     <th style ="border: 1px solid black; padding:10px;">sex</th>
     <th style ="border: 1px solid black; padding:10px;">age</th>
     <th style ="border: 1px solid black; padding:10px;">company</th>
     <th style ="border: 1px solid black; padding:10px;">education</th>
     <th style ="border: 1px solid black; padding:10px;">salary</th>
     <th style ="border: 1px solid black; padding:10px;">designation</th>
     <th style ="border: 1px solid black; padding:10px;">update</th>
     <th style ="border: 1px solid black; padding:10px;">delete</th>
     <tr>


<?php 
foreach($result as $row)
{
    ?>
    <tr>
    <td style ="border: 1px solid black; padding:10px;"><?php echo $row["id"]?></td>
    <td style ="border: 1px solid black; padding:10px;"><img src="<?php echo $row["img"]?>"width="100px"></td>
        <td style ="border: 1px solid black; padding:10px;"><?php echo $row["name"]?></td>
        <td style ="border: 1px solid black; padding:10px;"><?php echo $row["number"]?></td>
        <td style ="border: 1px solid black; padding:10px;"><?php echo $row["email"]?></td>
        <td style ="border: 1px solid black; padding:10px;"><?php echo $row["sex"]?></td>
        <td style ="border: 1px solid black; padding:10px;"><?php echo $row["age"]?></td>
        <td style ="border: 1px solid black; padding:10px;"><?php echo $row["company"]?></td>
        <td style ="border: 1px solid black; padding:10px;"><?php echo $row["education"]?></td>
        <td style ="border: 1px solid black; padding:10px;"><?php echo $row["salary"]?></td>
        <td style ="border: 1px solid black; padding:10px;"><?php echo $row["designation"]?></td>
        <td style ="border: 1px solid black; padding:10px;"><a  href = "update.php? id=<?php echo$row["id"];?> ">UPDATE</a></td>
        <td style ="border: 1px solid black; padding:10px;"><a  href = "update.php? id=<?php echo$row["id"];?> ">DELETE</a></td>
        
        

      
    <tr>

<?php
}}
?>

</table>





</body>
</html>

