  $file = $_FILES['profileUpload'];

        $fileName = $_FILES['profileUpload']['name'];
        $fileTmpName = $_FILES['profileUpload']['temp_name'];
        $fileSize = $_FILES['profileUpload']['size'];
        $fileError = $_FILES['profileUpload']['error'];
        $fileType = $_FILES['profileUpload']['type'];

        $fileExt = explode('.',$fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png');

        if (in_array($fileActualExt,$allowed)) {
            # code...

            if ($fileError === 0) {
                # code...

                if ($fileSize<10000000) {
                    # code...
                    $fileNameNew = uniqid('',true).".".$fileActualExt;
                    $fileDestination = "upload/".$fileNameNew;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    header("Location: register.php");
                }else {
                    # code...
                    echo "your file is too big";
                }

            }else {
                # code...
                echo "There was an errror uploading the file";
            }

        }else {
            # code...
            echo "you cannot upload file of this type";
        }

