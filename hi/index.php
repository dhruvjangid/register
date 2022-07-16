<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>register</title>
</head>
<body class = "main">
    <div class="heading">
    <h1> DHRUV'S REGISTRATION FORM </h1>

    </div>
    
    <div class="form">

        <form name="myForm" action="third.php" onsubmit="return validateForm()"  method ="POST" enctype= "multipart/form-data"><hr>
            <label for= "img"> Image:</lable>
            <input type="file" name = "img"><br>
           
            <br>
            <label for="name">NAME:</label><br>
            <input type="text" id="name" name="name" ><br><hr>

            <label for="number">CONTACT NUMBER:</label><br>
            <input type="text" id="number" name="number" required><br>
            <span id="error"></span><br><hr>

            <label for="email">EMAIL:</label><br>
            <input type="text" id="email" name="email" required><hr>
            <br>
            <label for="sex">SEX:</label>

            <select name="sex" id="sex" required>
                <option value="male">MALE</option>
                <option value="female">FEMALE</option>
                <option value="other">OTHER</option>

            </select>
              <br><hr>
                <label for="age">AGE:</label><br>
                <input type="number" id="age" name="age" required>
                <br>
              <hr>

          <h2>
            PROFESSIONAL INFORMATION
          </h2>

            <label for="company ">COMPANY:</label><br>
            <input type="text" id="company" name="company" required><br><hr>
            <label for="education">EDUCATION:</label><br>
            <input type="text" id="education" name="education" required><br><hr>
            <label for="salary">SALARY:</label><br>
            <input type="number" id="salary" name="salary" required><hr><br>
            <label for="designation">DESIGNATION:</label><br>
            <input type="text" name="designation" required><br><hr>
         
          <button  type = "submit" onclick="errorMessage()">Submit</button>

         </form><br>
         <form name="myForm" action="show.php"  method ="POST" ><hr>
         <button  type = "submit" >search</button>

</form>

<form name="myForm" action="page.php"  method ="POST" ><hr>
         <button  type = "submit" >data</button>

</form>
      

<?php 



 
?>
    </div>


      <script >
      function errorMessage() {
             var error = document.getElementById("error");
             //console.log(document.getElementById("number").value);
             if (isNaN(document.getElementById("number").value))
             {
                 error.textContent = "*Please enter a valid number"
                 error.style.color = "red"
                 
             } else {
                 error.textContent = " "
             }
           }




        </script>
</body>
</html>
