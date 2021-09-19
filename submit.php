    <?php
    $terms = $_POST["terms"];
    $description = $_POST["description"];
    $myfile = fopen("terms/$terms.txt" , "w") or die ("Unable to open file!");
    fwrite($myfile, $description);
    fclose($myfile);
    header('location:index.php');
    ?>