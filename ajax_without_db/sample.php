<!DOCTYPE html>
<html>
<body>

<h1>The XMLHttpRequest Object</h1>

<h3>Start typing a name in the input field below:</h3>

<form action=""> 

<select name="txt1"  id="txt1" onkeyup="showHint(this.value)">
<option value="">Select a person:</option>
<option value="a">a</option>
<option value="bharath">bharath</option>
<option value="manoj">manoj</option>
<option value="gokul">gokul</option>
</select><input name="time" value="00:00:00.00"><br>
      <input name="date" value="0000-00-00"><br>

</form>

<p>Suggestions: <span id="txtHint"></span></p> 

<script>
function showHint(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gethint.php?q="+str, true);
  xhttp.send();   
}
</script>

</body>
</html>
