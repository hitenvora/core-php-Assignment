<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body align="center">
    <form method="post">
        <h3>Check the number is an armstrong number or not</h3>
        Enter A Number : <input type="text" name="num" placeholder="Enter a number *">
        <br><br>

        <input type="submit" name="sub" value="submit">
    </form>

    <?php

if(isset($_POST["sub"]))
{
    $n=$_POST["num"];

    $arm = 0;
    $c = $n;

    while($n > 0)
    {
        $r = $n % 10;
        $arm = ($r * $r * $r) + $arm;
        $n = $n / 10;
    }
    if($c == $arm)
    {
        echo "$c is an armstrong number";
    }
    else 
    {
        echo "$c is not an armstrong number";   
    }

}

?>
</body>
</html>