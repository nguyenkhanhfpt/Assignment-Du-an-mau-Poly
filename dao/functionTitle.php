<?php
    require_once 'database.php';
    
    function addTitle($ten_loai){
        global $conn;
        $sql = "INSERT INTO loai(ten_loai) VALUES('$ten_loai')";
        $conn->exec($sql);
    }

    function selectTitle(){
        global $conn;
        $select = "SELECT * FROM loai";
        return $conn->query($select);
    }

    function selectTitleId($ma_loai){
        global $conn;
        $select = "SELECT * FROM loai WHERE ma_loai = '$ma_loai'";
        return $conn->query($select);
    }


    function deleteTitleId($ma_loai){
        global $conn;
        if(is_array($ma_loai)){
            foreach ($ma_loai as $ma) {
                $delete = "DELETE FROM loai WHERE ma_loai = '$ma'";
                $conn->exec($delete);
            }
        }
        else{
            $delete = "DELETE FROM loai WHERE ma_loai = '$ma_loai'";
            $conn->exec($delete);
        } 
    }

    function updateTitle($ma_loai, $ten_loai){
        global $conn;
        $update = "UPDATE loai SET ten_loai = '$ten_loai' WHERE ma_loai = '$ma_loai'";
        $conn->exec($update);
    }

    function exportExcelTitle(){
        $objExcel = new PHPExcel;
        $objExcel->setActiveSheetIndex(0);
        $sheet = $objExcel->getActiveSheet()->setTitle('Loại hàng');
         
        $rowCount = 1;
        $sheet->setCellValue('A'.$rowCount, 'Mã loại');
        $sheet->setCellValue('B'.$rowCount, 'Tên loại');

        $table = selectTitle();
        foreach($table as $value){
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount, $value['ma_loai']);
            $sheet->setCellValue('B'.$rowCount, $value['ten_loai']);
        }

        $objWrite = new PHPExcel_Writer_Excel2007($objExcel);
        $filename = 'loai.xlsx';
        $objWrite->save($filename);

        header("Content-Disposition: attachment; filename= $filename");  
        header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');  
        
        readfile($filename);  
    }
