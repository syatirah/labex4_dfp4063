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
 <form action="submit.php" method="post">
    Term: <input type="text" name="nama">
   Description: <input type="text" name="nama">
    <center><input type="Submit"></td></center>
    </tr>

    <?php
    $myfile = fopen("newfile.txt", "w") or die ("Unable to open file!");
    $txt = "John Doe\n";
    fwrite($myfile, $txt);
    $txt = "Jane Doe\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>

    <?php
    $terms = $_POST['terms'];
    $description = $POST['description'];
    $myfile = fopen ("terms/%terms.txt" , "w") or die ("Unable to open file!");
    fwrite($myfile,$description);
    fclose($myfile);
    ?>

    <?php
    $dir = scandir('terms');
    foreach ($scan as $file){
        if (substr(file, -4) == '.txt'){
            echo "<li><a href = 'index.php?add=new/$file'>$file</li>";
        }
    }
    ?>

<td>
    <?php
        if(isset($_GET['terms'])){
            $terms = $_GET['terms'];
            echo "<p><b>$terms</b></p>";
            $handle = fopen("terms/$terms.txt" , "r");
            $contents = fread($handle, filesize("terms/$terms.txt"));
            fclose($handle);
            print $contents;
        }
    ?>
</td>
    </form>
</fieldset>
</table>

<td>
    <ul>
        <?php
        if (isset($_GET['terms'])){
        $terms = $_GET['terms'];
        echo "<p><b>$terms</b></p>";
        $handle = fopen("$terms/$terms.txt", "r");
        $contents = fread($handle, filesize("$terms/$terms.txt"));
        fclose($handle);
        print $contents;
        }
?>

<?php
// displaying file size using
// filesize() function
echo filesize("gfg.txt");
?>

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