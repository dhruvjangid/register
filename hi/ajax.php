



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search output</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  </head>
  <body class= "main">
<h2> HERE IS YOUR DATA</h2>




 <div id = "table_data">      
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











?>

    </div>

</table>
</div>



<script type="text/javascript" src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" >
    $(document).ready(function(){
        loadaTable();
        function loadaTable(page){
            $ajax({
               url:"pagination.php",
               type:"POST",
               data:{page:page},
               success:function(data){
                $("#table_data").html(data);

               }        
            });
        }
        

        $(document).on("click",'#page_link',function(){
            var page =$this.attr("id");
            loadaTable(page);
        });
    });
</script>
  </body>
</html>