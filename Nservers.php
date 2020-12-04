<?php
error_reporting(0);
print "<form method=post action=1.php>";
echo"NO of Servers :";
 $server=0;
print"<input type=text name=txt$server />";
echo "<br>";
echo "Enter the load per Minutes : ";
echo"<br>";
 for ($i=0; $i<5; $i++)
{
print"<input type=text name=txt$i size=5/>";
echo"<br>";
}
print"<input type=submit value=Submit />";
print "</form>";
$arr = array();
if(isset ($_POST['txt0']))
{
    for($i=0; $i<5; $i++)
{
    $arr[$i]=$_POST['txt'.$i];
    if($i=4)
    {
    if ($arr[$i]>50)
     {
       $server=$server/2;
     }
    else{
        $server=$server*2 + 1;
    }
}
   echo $server;
}   
}
?>
