<!DOCTYPE html>
<html>
    <head>
        <title>UPLOADING PHP</title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="file"><input type="submit" name="submit" value="upload">
        </form>
        <?php
            if(isset($_POST['submit'])){
                $file = $_FILES['file'];
                
                $fileName = $file['name'];
                $fileType = $file['type'];
                $fileTmp = $file['tmp_name'];
                $fileErr = $file['error'];
                $fileSize = $file['size'];

                //uploading all file type
                //$destination = "upload/".$fileName;
               
                //move_uploaded_file($fileTmp, $destination);

                $fileEXT = explode('.', $fileName);
                $fileExtension = strtolower(end($fileEXT));
                
                $allowedExt = array("jpg", "jpeg", "png", "gif");

                if(in_array($fileExtension, $allowedExt)){
                    if($fileErr === 0){
                        if($fileSize <3000000){
                            $newFileName = uniqid('',true).'.'.$fileExtension;
                            $destination = "upload/.$newFileName";
                            move_uploaded_file($fileTmp, $destination);
                            echo  "FIle uploaded successfully! here is your file <a href='$destination'>Click here</a>";
                        
                        }else{
                            echo "Maximum file size(3MB) exceeded!";
                        }
                    }else{
                        echo "Oops Error uploading your file";
                    }
                }else{
                    echo "File extension not allowed!";
                }
            }

        ?>
    </body>
</html>