<?php


// profile image
function upload_profile($path, $file){
    $targetDir = $path;
    $default = "beard.png";

    // get the filename
    $filename = basename($file['name']);
    $targetFilePath = $targetDir . $filename;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    If(!empty($filename)){
        // allow certain file format
        $allowType = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
        if(in_array($fileType, $allowType)){
            // upload file to the server
            if(move_uploaded_file($file['tmp_name'], $targetFilePath)){
                return $targetFilePath;
            }
        }
    }

    // return default image
    return $path . $default;
}


// get user info
function get_user_info($conn, $id){
    $query = "SELECT student_firstName, student_lastName, email, profileImg FROM register_tbl WHERE id=?";
    $q = mysqli_stmt_init($conn);

    mysqli_stmt_prepare($q, $query);

    // bind the statement
    mysqli_stmt_bind_param($q, 'i', $id);

    // execute sql statement
    mysqli_stmt_execute($q);
    $result = mysqli_stmt_get_result($q);

    $row = mysqli_fetch_array($result);
    return empty($row) ? false : $row;
}














