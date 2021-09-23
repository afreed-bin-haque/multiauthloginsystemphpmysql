<?php $severname="localhost";
$username="root";
$password="";
$database="loginsystem";
$connection=mysqli_connect($severname,$username,$password,$database);
if(!$connection){
  echo"<h2 style='border:1px solid red;color:yellow;padding: 70px;text-align: center;'>, Server did  not respond to the connection</h2>";
}?>