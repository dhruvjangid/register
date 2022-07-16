



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search output</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="main">
  <form name="myForm" action=""   method ="GET" enctype= "multipart/form-data"><hr>
  <select name="name" id="search" value =" " required>
                <option value="name">name</option>
                <option value="company">number</option>
               
                <input type="text" value ="<?php if(isset($_GET['search'])){}?>" id="search" name="search">
                <button  type = "submit" >Search</button>
                 
  
</form>
       
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
     <tr>

  
	
<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "test1"; 

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con){
    die("connection the database failed due to".mysqli_connect_error());

}
else{
    echo"connected";
}

if(isset($_GET["search"])){
    $filtervalue = $_GET['search'];
    $query = "SELECT * FROM `users` WHERE CONCAT(name,number) LIKE '%$filtervalue%'";
    $query_run = mysqli_query($con, $query);
    

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $items)
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
               
        
              
            <tr>
        
    
    
   




<?php 


}}
}
else{
 
}



?>
</table>



<script src="index.js"></script>
  </body>
</html>