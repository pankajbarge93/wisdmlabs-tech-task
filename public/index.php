<!DOCTYPE html>

<html>
<head>
   <title>Table with database</title>

</head>
<body>
<table>
 <tr>

   <th>host</th>
   <th>user</th>
   <th>pass</th>
 </tr>
 <?php

 $conn = mysqli_connect( "18.223.136.54","root@172.17.0.3", "" ,"pankaj_database)
  if ($conn-> connect_error) {

     die("Connection failed:". $conn-> connect_error);
}

 $sql = "SELECT host, user,pass from pankaj_database"

 ?>

   