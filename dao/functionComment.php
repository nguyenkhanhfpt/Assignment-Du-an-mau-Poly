<?php
    require_once 'database.php';

    function addComent($ma_kh, $ma_hh, $noi_dung, $ngay_bl){
        global $conn;

        $insert = "INSERT INTO binh_luan(ma_kh, ma_hh, noi_dung, ngay_bl)
                VALUES('$ma_kh', '$ma_hh', '$noi_dung', '$ngay_bl')";

        $conn->exec($insert);
    }

    function selectComment($ma_hh){
        global $conn;

        $select = "SELECT B.*, K.* FROM binh_luan AS B INNER JOIN khach_hang AS K ON B.ma_kh = K.ma_kh WHERE ma_hh = '$ma_hh'
                    ORDER BY B.ngay_bl ASC";

        return $conn->query($select);
    }

    function selectAllComment(){
        global $conn;

        $select = "SELECT B.*, K.* FROM binh_luan AS B INNER JOIN khach_hang AS K ON B.ma_kh = K.ma_kh 
                    ORDER BY B.ngay_bl ASC";

        return $conn->query($select);
    }

    function listComment(){
        global $conn;

        $select = "SELECT  H.*, B.*, COUNT(B.ma_hh), MIN(B.ngay_bl), MAX(B.ngay_bl) FROM binh_luan AS B 
                INNER JOIN hang_hoa AS H ON B.ma_hh = H.ma_hh GROUP BY B.ma_hh";
        return $conn->query($select);
    }

    function conmentOfProduct($ma_hh){
        global $conn;

        $select = "SELECT  H.*, B.* FROM binh_luan AS B 
        INNER JOIN hang_hoa AS H ON B.ma_hh = H.ma_hh WHERE B.ma_hh = '$ma_hh'";

        return $conn->query($select);
    }

    function deleteComment($ma_bl){
        global $conn;

        if(is_array($ma_bl)){
            foreach($ma_bl as $ma){
                $delete = "DELETE FROM binh_luan WHERE ma_bl = '$ma'";
                $conn->exec($delete);
            }
        }
        else{
            $delete = "DELETE FROM binh_luan WHERE ma_bl = '$ma_bl'";
            $conn->exec($delete);
        }
        
    }

    function exportExcelComment(){
        $objExcel = new PHPExcel;
        $objExcel->setActiveSheetIndex(0);
        $sheet = $objExcel->getActiveSheet()->setTitle('Bình luận');
        
        $rowCount = 1;
        $sheet->setCellValue('A'.$rowCount, 'Mã bình luận');
        $sheet->setCellValue('B'.$rowCount, 'Mã khách hàng');
        $sheet->setCellValue('C'.$rowCount, 'Tên khách hàng');
        $sheet->setCellValue('D'.$rowCount, 'Mã hàng hóa');
        $sheet->setCellValue('E'.$rowCount, 'Nội dung');
        $sheet->setCellValue('F'.$rowCount, 'Ngày bình luận');

        $table = selectAllComment();
        foreach($table as $value){
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount, $value['ma_bl']);
            $sheet->setCellValue('B'.$rowCount, $value['ma_kh']);
            $sheet->setCellValue('C'.$rowCount, $value['ho_ten']);
            $sheet->setCellValue('D'.$rowCount, $value['ma_hh']);
            $sheet->setCellValue('E'.$rowCount, $value['noi_dung']);
            $sheet->setCellValue('F'.$rowCount, $value['ngay_bl']);
        }

        $objWrite = new PHPExcel_Writer_Excel2007($objExcel);
        $filename = 'binhLuan.xlsx';
        $objWrite->save($filename);

        header("Content-Disposition: attachment; filename= $filename");  
        header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');   
        readfile($filename);  
    }
