<?php

$con = mysqli_connect('localhost', 'root');

if($con){
	echo"connection successful";
}
else
{
	echo"no connection";
}

mysqli_select_db($con,'youtubeuser');

$user =$_POST['user'];
$emailid=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$comments =$_POST['comments'];

$query ="insert into userinfodata( user, emailid, mobileno, comments) values ('$user','$emailid','$mobileno','$comments')";

mysqli_query($con,$query);
header('location:index.php');

?>
