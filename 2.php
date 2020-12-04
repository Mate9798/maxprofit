
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prigram 2</title>
</head>
<body>

    <form action="2.php" method="POST">
        NO of breads:<br>
        <input name= "num1"><br>
        NO of vada :<br>
        <input name= "num2"><br>
        NO of samomsa:<br>
        <input name= "num3"><br>
        PRIZE of vadapav:<br>
        <input name= "num4"><br>
        PRIZE of samomsa:<br>
        <input name= "num5"><br>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>

<?php
     if($_SERVER['REQUEST_METHOD']=='POST')
     {
  $bread=$_POST['num1'];
  $vada=$_POST['num2'];
  $samosa=$_POST['num3'];
  $VP=$_POST['num4'];
  $SP=$_POST['num5'];
  if($SP>=$VP)
  //samosapav
{
    $a1=$samosa*2;
    $a2=$samosa*1;
    $p1=$SP*$samosa;
    $bread=$bread-$a1;

    $b1=$vada*2;
    if($bread>=$b1)
    {
    $b2=$vada*1;
    $p2=$VP*$vada;
    }
    else{
        $vada--;
        $b1=$vada*2;
        $b2=$vada*1;
    $p2=$VP*$vada;
    
    }
    echo $p1+$p2;
} 
//vadapav
else
{
    $b1=$vada*2;
    $b2=$vada*1;
    $p1=$VP*$vada;
    $bread=$bread-$b1;

    $a1=$samosa*2;
    if($bread>=$a1)
    {
    $a2=$samosa*1;
    $p2=$SP*$samosa;
    }
    else{
        $samosa--;
        $a1=$samosa*2;
        $a2=$samosa*1;
        $p2=$SP*$samosa;
    }
    echo "total maximum profit is :";
    echo $p1+$p2;//maximum profit possible

}

}

?>
