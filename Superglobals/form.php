<?php include "nav.html" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
    background-color:#fce2ce ;
    border: 5px solid black;
    border-radius: 15px 50px;;
    padding: 30px; 
    margin :50px;
}
     </style>

<body>
<!-- <?php
echo "Your Username is " .$_GET['username'] . "<br>";
echo "Your password is " .$_GET['password'] . "<br>";
?>
<form action="form" method="get">
<input type= "text" name "username">
    <input type= "password" name="password">
        <input type="submit" value="login" >
</form>   -->


    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
