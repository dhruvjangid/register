



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search output</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class= "main">
<h2> HERE IS YOUR DATA</h2>
       
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










$server = "localhost";
$username = "root";
$password = "";
$dbname = "test1"; 





$con = mysqli_connect($server,$username,$password,$dbname);






$npp=4;
if(isset($_GET["page"])){
    $i=$_GET["page"];
}
else{
    $i=1;
}
echo $start_from = ($i-1)*$npp;
$sql="SELECT * FROM `test1`.`users` limit $start_from,$npp";
$result = mysqli_query($con ,$sql);










if(!$con){
    die("connection the database failed due to".mysqli_connect_error());

}
else{
    echo"connected to database";


}

echo "<br>";



$sqll = "SELECT * FROM `test1`.`users`";
$resultt = mysqli_query($con ,$sqll);
$num = mysqli_num_rows($resultt);
echo "totalnumber of data =$num";
echo "<br>";

 

    
    $sqll = "SELECT * FROM `test1`.`users`";
    $resulttt = mysqli_query($con ,$sqll);
    $numm =$num/$npp;
  

    for($i=1;$i<=$numm;$i++){
    
      echo  "<a href=page.php?page=".$i.">".$i."</a>"; 




    }
    if(mysqli_num_rows($result) > 0)
    {
        while( $items = mysqli_fetch_array($resultt))
        {
           
     
            ?>
            <tr>
            <td style ="border: 1px solid black; padding:10px;"><?= $items["id"]?></td>
            <td style ="border: 1px solid black; padding:10px;"><img src="<?=$items["img"]?>"width="100px"></td>
                <td style ="border: 1px solid black; padding:10px;"><?= $items["name"]?></td>
                <td style ="border: 1px solid black; padding:10px;"><?= $items["number"]?></td>
                <td style ="border: 1px solid black; padding:10px;"><?= $items["email"]?></td>
                <td style ="border: 1px solid black; padding:10px;"><?= $items["sex"]?></td>
                <td style ="border: 1px solid black; padding:10px;"><?= $items["age"]?></td>
                <td style ="border: 1px solid black; padding:10px;"><?= $items["company"]?></td>
                <td style ="border: 1px solid black; padding:10px;"><?= $items["education"]?></td>
                <td style ="border: 1px solid black; padding:10px;"><?= $items["salary"]?></td>
                <td style ="border: 1px solid black; padding:10px;"><?= $items["designation"]?></td>
                <td style ="border: 1px solid black; padding:10px;"><a  href = "update.php? id=<?php echo $items["id"];?> ">UPDATE</a></td>
                <td style ="border: 1px solid black; padding:10px;"><a  href = "update.php? id=<?php echo $items["id"];?> ">DELETE</a></td>
                
                
        
              
            <tr>
        
    
    
   




<?php 


}}


?>

</table>




<script src="index.js"></script>
  </body>
</html>