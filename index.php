<html>
    <head>
    <title>Syatirah labex4</title>
    <h2>Terminology</h2>
    </head>
<body>
  
if{(isset($_GET['add']))}
<fieldset>
<table border ="1">
    <tr>
 <td><h5>Add New Term</h5>
 <form action="term.php" method="post">
    Term: <input type="text" name="nama">
   Description: <input type="text" name="nama">
    <center><input type="Submit"></td></center>
    </tr>
    </form>
</fieldset>
</table>


<br>

<table border ="1">
<tr>
    <th>Terms</th>
   <th>Description</th>
</tr>
<tr>
  <td><a href="add">[Add New]</a></td>
  <td></td>
</tr>
</table>

</body>
</html>

