<?php
if(!empty($_FILES["file"]["type"]))
    {
        $fileName = time().'_'.$_FILES['file']['name'];
        $valid_extensions = array("pdf", "doc", "docx","txt");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);

    if((($_FILES["file"]["type"]=="application/pdf") || ($_FILES["file"]["type"]=="application/msword") ||   (
    	$_FILES["file"]["type"]=="application/vnd.openxmlformats-officedocument.wordprocessingml.document") ||   (
            $_FILES["file"]["type"]=="text/plain")) && in_array($file_extension, $valid_extensions))
        {
            $sourcePath = $_FILES['file']['tmp_name'];
            $targetPath = "uploads/".$fileName;
        }
    }
    move_uploaded_file($sourcePath,$targetPath);
    echo $targetPath;

  }
?>