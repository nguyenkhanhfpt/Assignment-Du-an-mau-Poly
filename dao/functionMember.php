<?php
    require_once 'database.php';

    function addNewMember($ma_kh, $mat_khau, $ho_ten, $email, $hinh_kh, $so_dt, $dia_chi, $vai_tro)
    {
        global $conn;
        $hash_pass = password_hash("$mat_khau", PASSWORD_BCRYPT);
        $insert = "INSERT INTO khach_hang VALUES('$ma_kh', '$hash_pass', '$ho_ten', '$email', '$hinh_kh', '$so_dt', '$dia_chi', '$vai_tro')";
        $conn->exec($insert);
    }

    function role($ma_kh)
    {
        global $conn;
        $select = "SELECT vai_tro FROM khach_hang WHERE ma_kh = '$ma_kh'";
        $users = $conn->query($select);
        $user = $users->fetch();

        return $user['vai_tro'];
    }

    function selectAllMember()
    {
        global $conn;
        $select = "SELECT * FROM khach_hang ORDER BY vai_tro DESC";
        return  $conn->query($select);
    }

    function selectPassMember($ma_kh)
    {
        global $conn;
        $select = "SELECT mat_khau FROM khach_hang WHERE ma_kh = '$ma_kh'";
        $users = $conn->query($select);
        $user = $users->fetch();

        return $user['mat_khau'];
    }

    function selectMember()
    {
        global $conn;
        $select = "SELECT * FROM khach_hang WHERE vai_tro != '3'  ORDER BY vai_tro DESC";
        return  $conn->query($select);
    }

    function selectMemberId($ma_kh)
    {
        global $conn;
        $select = "SELECT * FROM khach_hang WHERE ma_kh = '$ma_kh'";
        $users = $conn->query($select);
        $user = $users->fetch();

        return $user;
    }

    function deleteMember($ma_kh)
    {
        global $conn;

        if (is_array($ma_kh)) {
            foreach ($ma_kh as $ma) {
                $delete = "DELETE FROM khach_hang WHERE ma_kh = '$ma'";
                $conn->exec($delete);
            }
        } else {
            $delete = "DELETE FROM khach_hang WHERE ma_kh = '$ma_kh'";
            $conn->exec($delete);
        }
    }

    function updateMember($ma_kh, $ho_ten, $email, $hinh_kh, $so_dt, $dia_chi, $vai_tro)
    {
        global $conn;

        $update = "UPDATE khach_hang 
                        SET ho_ten = '$ho_ten', email = '$email', hinh_kh = '$hinh_kh', so_dt = '$so_dt', dia_chi = '$dia_chi', vai_tro = '$vai_tro'
                        WHERE ma_kh = '$ma_kh'";
        $conn->exec($update);
    }

    function updateInfoMember($ma_kh, $ho_ten, $email, $so_dt, $dia_chi)
    {
        global $conn;

        $update = "UPDATE khach_hang 
                        SET ho_ten = '$ho_ten', email = '$email', so_dt = '$so_dt', dia_chi = '$dia_chi'
                        WHERE ma_kh = '$ma_kh'";
        $conn->exec($update);
    }

    function updatePass($ma_kh, $mat_khau, $mat_khau_moi)
    {
        global $conn;
        $pass = selectPassMember($ma_kh);

        if (password_verify("$mat_khau", $pass)) {
            $new_hash_pass = password_hash("$mat_khau_moi", PASSWORD_BCRYPT);
            $update = "UPDATE khach_hang 
                SET mat_khau = '$new_hash_pass' 
                WHERE ma_kh = '$ma_kh'";
            $conn->exec($update);
            return "Đổi thành công!";
        } else {
            return  "Mật khẩu cũ không đúng!";
        }
    }

    function updateInfoPass($ma_kh, $mat_khau)
    {
        global $conn;

        $hash_pass = password_hash("$mat_khau", PASSWORD_BCRYPT);
        $update = "UPDATE khach_hang SET mat_khau = '$hash_pass' WHERE ma_kh = '$ma_kh'";
        $conn->exec($update);
    }

    function updateImage($ma_kh, $hinh_kh)
    {
        global $conn;

        $update = "UPDATE khach_hang SET hinh_kh = '$hinh_kh' WHERE ma_kh = '$ma_kh'";
        $conn->exec($update);
    }

    function checkLogin($ma_kh, $mat_khau)
    {
        global $conn;
        
        if(empty($ma_kh)){
            return 'Tên đăng nhập không được để trống!';
        }
        if(empty($mat_khau)){
            return 'Mật khẩu không được để trống!';
        }

        $sql = "SELECT * FROM khach_hang WHERE ma_kh = '$ma_kh'";
        $table = $conn->query($sql);
        $user = $table->fetch();

        if(password_verify("$mat_khau", $user['mat_khau'])){
            $_SESSION['name'] = $user['ho_ten'];
            $_SESSION['id'] = $user['ma_kh'];
            return 'Đăng nhập thành công!';
        }
        else{
            return 'Đăng nhập thất bại!';
        }
    }

    function logOut()
    {
        unset($_SESSION['name']);
        unset($_SESSION['id']);
    }

    function forgetPass($ma_kh,$email){
        global $conn;
        $select = "SELECT * FROM khach_hang WHERE ma_kh = '$ma_kh' AND email = '$email'";
        $member = $conn->query($select);
        $peopleLogin =  $member->fetch();

        if (is_array($peopleLogin)) {
            $pass_random = mt_rand(10000, 99999);
            $hash_pass = password_hash("$pass_random", PASSWORD_BCRYPT);

            $update = "UPDATE khach_hang SET mat_khau = '$hash_pass' WHERE ma_kh = '$ma_kh'";
            $conn->exec($update);

            return 'Mật khẩu mới của bạn là: ' .$pass_random;
        } else {
            return 'Đăng nhập thất bại!';
        }
    }

    function exportExcelMember(){
        $objExcel = new PHPExcel;
        $objExcel->setActiveSheetIndex(0);
        $sheet = $objExcel->getActiveSheet()->setTitle('Khách hàng');
        
        $rowCount = 1;
        $sheet->setCellValue('A'.$rowCount, 'Mã khách hàng');
        $sheet->setCellValue('B'.$rowCount, 'Họ và tên');
        $sheet->setCellValue('C'.$rowCount, 'Email');
        $sheet->setCellValue('D'.$rowCount, 'Số điện thoại');
        $sheet->setCellValue('E'.$rowCount, 'Địa chỉ');
        $sheet->setCellValue('F'.$rowCount, 'Vai trò');

        $table = selectMember();
        foreach($table as $value){
            $vai_tro = $value['vai_tro'] == 1 ? 'Nhân viên' : 'Khách hàng';
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount, $value['ma_kh']);
            $sheet->setCellValue('B'.$rowCount, $value['ho_ten']);
            $sheet->setCellValue('C'.$rowCount, $value['email']);
            $sheet->setCellValue('D'.$rowCount, $value['so_dt']);
            $sheet->setCellValue('E'.$rowCount, $value['dia_chi']);
            $sheet->setCellValue('F'.$rowCount, $vai_tro);
        }

        $objWrite = new PHPExcel_Writer_Excel2007($objExcel);
        $filename = 'khachHang.xlsx';
        $objWrite->save($filename);

        header("Content-Disposition: attachment; filename= $filename");  
        header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');   
        readfile($filename);  
    }
