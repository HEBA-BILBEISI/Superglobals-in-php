<?php include "nav.html" ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
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
    background-color:#f8f7de ;
    border: 5px solid black;
    border-radius: 15px 50px;;
    padding: 30px; 
    margin :50px; 
}
     </style>
<body>

<?php 
$result = "";
class calculator
{
    var $a;
    var $b;

    function operations($oprator)
    {
        switch($oprator)
        {
            case '+':
            return $this->a + $this->b;
            break;

            case '-':
            return $this->a - $this->b;
            break;

            case '*':
            return $this->a * $this->b;
            break;

            case '/':
            return $this->a / $this->b;
            break;

            default:
            return "Sorry No command found";
        }   
    }
    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->operations($c);
    }
}

$cal = new calculator();
if(isset($_POST['submit']))
{   
    $result = $cal->getresult($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>
<br><br><br><br><br><br>
<form method="post">
<table align="center">
    
    <tr>
        <td>Enter Number</td>
        <td><input type="text" name="n1"></td>
    </tr>

    <tr>
        <td>Enter Number</td>
        <td><input type="text" name="n2"></td>
    </tr>

    <tr>
        <td> Oprator</td>
        <td><select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="                =                "></td>
    </tr>
<tr>
        <td><strong><center><?php echo $result; ?></center><strong></td>
    </tr>
</table>
</form>


</body>
</html>
