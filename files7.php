<!doctype html>
<html>
<head>
    <title>
    </title><nav style="float:right;"> <ul><li><button><a href="logout1.php">LOGOUT</a></button></li></ul></nav></head>
    <body>
        <form action="upload7.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
    <button type="submit" name="submit">UPLOAD FILE</button>
    
    </form>
    </body>





</html>

<?php
    $files=scandir("uploads7");
    for($a=2;$a<count($files);$a++){
        ?>
<p>
<a download="<?php echo $files[$a]?>" href="uploads7/<?php echo $files[$a] ?>"><?php echo $files[$a] ?></a>
    </p>
<?php
    }