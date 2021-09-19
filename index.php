<!DOCTYPE html> 
<html lang="en"> 
 
<head> 
 <meta charset="UTF-8"> 
 <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 <title>Syatirah LabEx4</title> 
</head> 
 
<body> 
  <h1>Terminology</h1> 
  <?php 
  if (isset($_GET['add'])) { 
  ?> 
   <form action="submit.php" method="post"> 
    <fieldset> 
     <legend>Add New Terms</legend> 
     <table> 
      <tr> 
       <th>Terms</th> 
       <td><input type="text" name="terms"></td> 
      </tr> 
      <tr> 
       <th>Description</th> 
       <td><textarea id="description" name="description"></textarea></td> 
      </tr> 
      <tr> 
       <td><input type="submit" name="submit" value="Submit" action="submit.php"></td> 
      </tr> 
     </table> 
    </fieldset> 
   </form> 
  <?php 
  } 
  ?> 
  <?php 
  if (isset($_GET['edit'])) { 
   $terms = $_GET['edit']; 
   $myfile = 'terms/' . $terms . '.txt'; 
   $size = filesize($myfile); 
   $file = fopen($myfile, 'r') or die('File failed to open'); 
   $description = fread($file, $size); 
   fclose($file); 
  ?> 
   <form method="post" action="submit.php"> 
    <fieldset> 
     <legend>Edit Description</legend> 
     <input type="hidden" name="terms" value="<?php echo $terms; ?>" /> 
     <table border="1"> 
      <tr> 
       <td><b>Terms</b></td> 
       <td>:<?php echo $terms; ?></td> 
      </tr> 
      <tr> 
       <td><b>Description</b></td> 
       <td>:<textarea name="description"><?php echo $description; ?></textarea></td> 
      </tr> 
      <tr> 
       <td colspan="2" align="center"> 
        <input type="submit" name="submit" value="Submit" </td> 
      </tr> 
     </table> 
    </fieldset> 
   </form> 
  <?php 
  } 
  ?> 
  <table cellpadding="40" border="1"> 
   <tr> 
    <th>Terms</th> 
    <th>Description</th> 
   </tr> 
   <tr> 
    <td> 
     [<a href="index.php?add=new">Add New</a>] 
     <ul> 
      <?php 
      $dir = scandir('terms'); 
      foreach ($dir as $file) { 
       $terms = substr($file, 0, -4); 
       if (substr($file, -4) == '.txt') { 
        echo "<ul><li><a href='index.php?terms=$terms'>$terms</a></li></ul>"; 
       } 
      } 
      ?> 
     </ul> 
    </td> 
    <td> 
     <?php 
     if (isset($_GET['terms'])) { 
      $terms = $_GET['terms']; 
      echo "<p><b>$terms</b></p>"; 
      $handle = fopen("terms/$terms.txt", "r"); 
      $contents = fread($handle, filesize("terms/$terms.txt")); 
      fclose($handle); 
      print $contents; 
     ?> 
      <p> 
       <a href="index.php?edit=<?php echo $terms; ?>">Edit</a> 
       <a href="delete.php?terms=<?php echo $terms; ?>">Delete</a> 
      </p> 
     <?php 
     } 
     ?> 
    </td> 
   </tr> 
  </table> 
</body> 
</html>