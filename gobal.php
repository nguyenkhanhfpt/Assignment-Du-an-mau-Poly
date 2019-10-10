<?php
    $ROOT_URL = "/lab4_khanhnpd02983";
    $FUNC_URL = "$ROOT_URL/dao";
    $ADMIN_URL = "$ROOT_URL/admin";
    $VIEW_URL = "$ROOT_URL/view";
    $IMG_URL = "$ROOT_URL/img";
    
    $IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$ROOT_URL/img";

    function save_file($fieldname, $target_dir){
        $file_uploaded = $_FILES[$fieldname];
        $file_name = basename($file_uploaded["name"]);
        $target_path = $target_dir .'/'. $file_name;
        move_uploaded_file($file_uploaded["tmp_name"], $target_path);
        return $file_name;
    }

    function checkAdmin($ma_kh){
        global $conn;

        if($ma_kh === NULL){
            echo "<script>history.back()</script>";
            return;
        }

        $vai_tro = role($ma_kh);

        if($vai_tro == 0){
            echo "<script>history.back()</script>";
            return;
        }         
    }

?>

