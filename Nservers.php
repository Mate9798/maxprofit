
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prigram 2</title>
</head>
<body>

    <form action="Nservers.php" method="POST">
    NO of Servers:<br>
        <input name= "num"><br>
        server load On 1st Minutes :<br>
        <input name= "num1"><br>
        server load On 2nd Minutes :<br>
        <input name= "num2"><br>
        server load On 3rd Minutes :<br>
        <input name= "num3"><br>
        server load On 4th Minutes :<br>
        <input name= "num4"><br>
        server load On 5th Minutes :<br>
        <input name= "num5"><br>

 
    <input type="submit" value="submit">
    </form>
    
</body>
</html>

<?php
     if($_SERVER['REQUEST_METHOD']=='POST')
    
{
$server=$_POST['num'];
$first=$_POST['num1'];
$second=$_POST['num2'];
$third=$_POST['num3'];
$fourth=$_POST['num4'];
$fifth=$_POST['num5'];

if($first<50)
{
    $server1=$server/2;
}
else 
{
    $server1=$server*2 + 1;
}
if($second<50)
{
    $server2=$server/2;
}
else 
{
    $server2=$server*2 + 1;
}
if($third<50)
{
    $server3=$server/2;
}
else 
{
    $server3=$server*2 + 1;
}
if($fourth<50)
{
    $server4=$server/2;
}
else 
{
    $server4=$server*2 + 1;
}
if($fifth<50)
{
    $server5=$server/2;
}
else 
{
    $server5=$server*2 + 1;
}
echo ($server5);
}
?>