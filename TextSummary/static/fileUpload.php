<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

if(!empty($_FILES["file"]["type"]))
    {
        $valid_extensions = array("pdf", "doc", "docx","txt");
        $temporary = explode(".", $_FILES["file"]["name"]);
        $file_extension = end($temporary);
		$fileName = time().'_'.generateRandomString().'.'.$file_extension;

        if((($_FILES["file"]["type"]=="application/pdf") || ($_FILES["file"]["type"]=="application/msword") ||   (
            $_FILES["file"]["type"]=="application/vnd.openxmlformats-officedocument.wordprocessingml.document") ||   (
                $_FILES["file"]["type"]=="text/plain")) && in_array($file_extension, $valid_extensions))
            {
                $sourcePath = $_FILES['file']['tmp_name'];
                $targetPath = "static/uploads/".$fileName;
            }
        move_uploaded_file($sourcePath,$targetPath);
        echo $targetPath;
        exit;
  }
?>