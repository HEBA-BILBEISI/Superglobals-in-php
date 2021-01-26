<?php include "nav.html" ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    background-image: url("https://img.freepik.com/free-photo/hand-painted-watercolor-background-with-sky-clouds-shape_24972-1095.jpg?size=626&ext=jpg");
    background-repeat: no-repeat;
    border: 1px solid black;
    background-size: 100%;
    padding: 15px;
}

form {
    background-color:#e8ffff ;
    border: 5px solid black;
    border-radius: 15px 50px;;
    padding: 30px; 
    margin :50px; 
}
     </style>

</head>
<body>
    <center>
<form action="search.php" method="post">
         <label for="seaech">Search:</label>
          <input type="url" name="url" id="search">
          <button type="submit">GO</button>
</form>
</center>
<!-- ----------------------- -->
<?php
    // if (isset($_POST['url'])) {
    //     $URL = $_POST['url'];
    //     header("Location:$URL");
    // }
   
    if (isset($_POST['url'])) {
        $URL = $_POST['url'];
        header("Location:$URL");
    }
  
?>

<!-- 
echo '<div style="color:#e3f2fd;"> Determine page requested time : '.Date('y-m-d h:i:s', Time()). '</div>'; //get timestamp of current system time
                    echo "<br>"; -->
</body>
</html>