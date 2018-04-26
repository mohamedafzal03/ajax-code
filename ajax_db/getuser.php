<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$q = $_GET['p'];
$con = mysqli_connect('localhost','root','','foodfest');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
echo'aaa';
$result = mysqli_query($con,"SELECT * FROM dummy WHERE id = '" . $q . "'");
echo'bb';
echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
if($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo $row['name'] . "</td>";
}
else
	echo'not found';

mysqli_close($con);
?>
</body>
</html>