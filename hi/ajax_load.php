<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "test1"; 

$con = mysqli_connect($server,$username,$password,$dbname);

$sqll = "SELECT * FROM `test1`.`users`";
$result = mysqli_query($con ,$sqll);


    if(mysqli_num_rows($result) > 0)
    {

        $output = '       
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
             <tr>';

        while($items= mysqli_fetch_assoc($result))
        {
            
           $output.="<tr>
                
            <td > {$items["id"]}</td>
           
                <td> {$items["name"]} </td>
                <td> {$items["number"]} </td>
                <td> {$items["email"]}</td>
                <td> {$items["sex"]}</td>
                <td> {$items["age"]}</td>
                <td> {$items["company"]}</td>
                <td> {$items["education"]}</td>
                <td> {$items["salary"]}</td>
                <td>{$items["designation"]}</td>
               
        
              
            <tr>";
        
        }

        $output.="</table>";
        mysqli_close($con);

    
   







}

else{
 echo "eroor";
}



?>
