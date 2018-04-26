<?php
if(isset($_POST['get_option']))
{
	
	$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'foodfest') or die(mysqli_error());
echo 'dum';
 $state = $_POST['get_option'];
 $find=mysqli_query("select city from dum where state='$state'");
 while($row=mysqli_fetch_array($find))
 {
  echo "<option>".$row['city']."</option>";
 }
 exit;
}

echo'zdfzfdgx';
?>