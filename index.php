<html>
    <head>
    <title>Syatirah labex4</title>
    </head>

    <body>
        <center>
        <h2>Terminology</h2>
         <?php{
            if(isset($_GET['add'])) 
          } ?>
                
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
                <td><input type="submit" name="save" value="Save"></td>
            </tr>
            </table>
        </fieldset>
        </form>
        <table border="1">
            <tr>
                <th>Terms</th>
                <th>Description</th>
            </tr>
            <tr>
                <td><a href="index.php?add=new">[Add New]</a>
                <ul>
                    <?php$scan = scandir('terms');
                    foreach($scan as $file) {
                        if(substr($file, -4)== '.txt'){
                            $terms = substr($file, 0 , -4);
                            echo "<li><a href='index.php?terms=$terms'>$terms</a></li>";
                        }
                    }
                    ?>
                    </ul>
                </td>
                <td>
               <?php
               if (isset($_GET['terms'])) {
                   $terms=$_GET['terms'];
                   echo "<p><b>$terms</b></p>";
                   $handle = fopen("terms/$terms.txt", "r");
                   $contents=fread($handle,filesize("terms/$terms.txt"));
                   fclose($handle);
                   print $contents;
                   ?>
                   <p>
                       <a href="index.php?edit=<?php echo $terms;?>">Edit</a> | <a href="delete.php?terms=<?php echo $terms; ?> ">Delete</a>
               </p>
               <?php
               }    
               ?>
               </td>
               
            </tr>
            </table>
    </center>
</body>
</html>   