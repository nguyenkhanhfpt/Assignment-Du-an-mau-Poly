<?php
    require '../../gobal.php';
    require '../../dao/functionMember.php';
    require '../Classes/PHPExcel.php';
    session_start();
    checkAdmin($_SESSION['id']);
    
    $view_name = '';
    $MESSAGE = '';

    extract($_REQUEST);

    if(isset($_POST['btn-insert'])){
        $vai_tro = isset($vai_tro) ? $vai_tro : 0;
        $hinh = save_file("hinh", "$IMAGE_DIR");
        $hinh_kh = strlen($hinh) > 0 ? $hinh : 'user.png';

        addNewMember($ma_kh, $mat_khau , $ho_ten, $email, $hinh_kh, $so_dt, $dia_chi, $vai_tro);
        $view_name = 'addMember.php';
        $MESSAGE = 'Thêm thành viên thành công';
    }
    else if(array_key_exists('btn-list', $_REQUEST)){
        $members = selectMember();
        $view_name = 'listMember.php';
    }
    else if(array_key_exists('btn-delete', $_REQUEST)){
        deleteMember($ma_kh);
        
        $members = selectMember();
        $view_name = 'listMember.php';
        $MESSAGE = 'Xóa thành công!';
    }

    else if(array_key_exists('btn-edit', $_REQUEST)){
        $member = selectMemberId($ma_kh);
        $view_name = 'editMember.php';
    }

    else if(array_key_exists('update', $_REQUEST)){
        $hinh = save_file('hinh_kh', $IMAGE_DIR);
        $hinh_kh = strlen($hinh) > 0 ? $hinh : $hinh_cu;
        $vai_tro = isset($vai_tro) ? $vai_tro : $vai_tro_cu;

        updateMember($ma_kh, $ho_ten, $email, $hinh_kh, $so_dt, $dia_chi, $vai_tro);
        $member = selectMemberId($ma_kh);
        $view_name = 'editMember.php';
        $MESSAGE = 'Cập nhật thành công!';
    }

    else{
        $view_name = 'addMember.php';
    }

    require "../layout.php";
