<?php
if(isset($_POST['submit'])){
    $file=$_FILES['file'];
    $fileName=$_FILES['file']['name'];
    $filetmpName=$_FILES['file']['tmp_name'];
    $fileSize=$_FILES['file']['size'];
    $fileError=$_FILES['file']['error'];
    $fileType=$_FILES['file']['type'];
    $fileExt=explode('.',$fileName);
    $fileActualExt=strtolower(end($fileExt));
    
    $allowed=array('jpg','jpeg','png','pdf','txt','pptx','docx');
    if(in_array($fileActualExt,$allowed)){
        if($fileError===0){
            if($fileSize<50000000000){
                $fileNameNew=uniqid('',true).".".$fileActualExt;
                $fileDestination='uploads24/'.$fileNameNew;
                move_uploaded_file($filetmpName, $fileDestination);
                header("Location:files24.php?uploadsucess");
            }else
            {
                echo"your file is too big";
            }
            
        }else{
            echo"there was an error uploading";
        }
        
    }else
    {
        echo "you cannot put this type of file here";
    }
    
}