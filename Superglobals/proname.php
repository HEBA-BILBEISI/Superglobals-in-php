<?php include "nav.html" ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My page details</title>
</head>
<style>
body {
    background-image: url("https://img.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg?size=626&ext=jpg");
    background-repeat: no-repeat;
    border: 1px solid black;
    background-size: 100%;
    padding: 15px;
}
form {
    background-color:#fbe6d4 ;
    border: 5px solid black;
    border-radius: 15px 50px;;
    padding: 30px; 
    margin :50px;
}

     </style>
<body>
   <form> 
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>
</form>
</body>
</html>