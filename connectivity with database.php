<?php
mysqli_connect('localhost','root','');
mysqli_select_db('barge');

$sql="SELECT * FROM  employees";

$records=mysql_query($sql);


?>

<html>

<head>

<title>Employee Data </title>
</head>

<body>

<table> width="600" border="1" cellpaddin="1" cellspacing>

<tr>


<th>Name</th>
<th>Age</th>
<tr>Postion</th>
<tr>Salary</th>
<tr>

<?php

while($employee=mysql_fetch_assoc($records)) {


  echo "<tr>";

  echo "<td>".$employee['name']."</td>";
  
  echo "<td>".$employee['age']."</td>";

  echo "<td>".$employee['position']."</td>";

  echo "<td>".$employee['salary']."</td>";

  echo "<tr>";

}

?>


</table>
</body>
</html>