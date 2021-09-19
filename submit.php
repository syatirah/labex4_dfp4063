<html>
<head>
</head>
    <body>
        <center>

<table border ="1">
<tr>
    <th>Terms</th>
   <th>Description</th>
</tr>
<tr>
  <td>[<a href="index.php?add=new">Add New</a>]</td>
  <td></td>
</tr>
    <?php
    $terms = $_POST["terms"];
    $description = $_POST["description"];
    $myfile = fopen("terms/$terms.txt" , "w") or die ("Unable to open file!");
    fwrite($myfile, $description);
    fclose($myfile);
    header('location:index.php');
</table>
</center>
</body>
</html>