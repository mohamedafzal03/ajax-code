<html>
<head>
<link rel="stylesheet" type="text/css" href="select_style.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php';
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

</script>

</head>
<body>
<p id="heading">Dynamic Select Option Menu Using Ajax and PHP</p>
<center>
<div id="select_box">
 <select onchange="fetch_select(this.value);">
  <option>Select state
  <?php
  
  $con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,'foodfest') or die(mysqli_error());



  $select=mysqli_query($con,"select state from dum group by state");
 
  while($row = mysqli_fetch_array($select))
  {
   echo "<option>".$row['state']."</option>";
  }
 ?></option>
 </select>

 <select id="new_select">
 </select>
	  
</div>     
</center>
</body>
</html>