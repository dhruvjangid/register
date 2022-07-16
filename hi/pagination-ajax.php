<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "test1"; 





$con = mysqli_connect($server,$username,$password,$dbname);



$npp=05;
$page=0;
$output='';
if(isset($_POST["page"])){
    $page=$_POST["page"];
}
else{
    $page=1;
}
$start_from = ($page-1)*$npp;
$sql="SELECT * FROM `test1`.`users` ORDER BY id limit $start_from,$npp";
$result = mysqli_query($con ,$sql);


$output .=
' <table class = " table_border" style ="border:1px solid black; border-collapse:;">
<tr style = "border:1px solid black;">collapse
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
' ;





   if(mysqli_num_rows($result) > 0)
{
    while( $items = mysqli_fetch_assoc($result))
    {
       
 
        
        $output .=
        "<tr>
        
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
        










    }}


$output .='
</table>
</div>';






echo "<br>";





 

$result = mysqli_query($con ,$sql);
   
    $num = mysqli_num_rows($result);
    echo "totalnumber of data =$num";
    echo "<br>";
    $numm = ceil($num/$npp);
     $output.= '<ul class = "pagination">';

    

if( $page>1){
    $previous = $page -1 ;
    $output .=  '<li class="page-items" id ="1"><span class="page_link">firstpage</span></li>';
    $output .=  '<li class="page-items" id ="'.$previous.'"><span class="page_link"><i class = "fa fa-arrow-left"></i></span></li>';
}
for($i=1;$i<=$numm;$i++){
    $active_class = "";
    if($i== $page){
        $active_class = 'active';
    }
    $output .=  '<li class="page-items ' .$active_class .'"   id ="'.$i.'"><span class="page_link">'.$i.'</span></li>';
}
if($page < $numm){
    $page++;
    $output .=  '<li class="page-items" id ="'.$page.'"><span class="page_link"><i class = "fa fa-arrow-right"></i></span></li>';
    $output .=  '<li class="page-items" id ="'.$numm.'"><span class="page_link">lastpage</span></li>';
}
$output.='</ul>';
echo $output;



?>






