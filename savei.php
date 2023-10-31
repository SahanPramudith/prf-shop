<?php
$link=Mysqli_connect("localhost","root","","companyi");

$name=$_REQUEST['name'];
$telno=$_REQUEST['telno'];
$addres=$_REQUEST['addres'];


$save="insert into employer values(' $name','$telno','$addres')";

if(mysqli_query($link,$save))
{
echo("data save ok");
}
else
{
echo("data note save");
}

?>
