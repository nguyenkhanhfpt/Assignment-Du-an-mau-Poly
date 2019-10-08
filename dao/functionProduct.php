<?php
    require_once 'database.php';

    function insertProduct($ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $so_luot_xem, $ngay_nhap, $mo_ta)
    {
        global $conn;
        $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, giam_gia, hinh, ma_loai, so_luot_xem, ngay_nhap, mo_ta) 
                    VALUES('$ten_hh','$don_gia','$giam_gia','$hinh','$ma_loai','$so_luot_xem','$ngay_nhap','$mo_ta')";

        $conn->exec($sql);
    }
    function selectProducts()
    {
        global $conn;
        $select = "SELECT * FROM hang_hoa";
        return $conn->query($select);
    }

    function selectProductsId($ma_hh)
    {
        global $conn;
        $select = "SELECT * FROM hang_hoa WHERE ma_hh = '$ma_hh'";
        $products = $conn->query($select);
        return $product = $products->fetch();
    }

    function deleteProducts($ma_hh)
    {
        global $conn;
        if (is_array($ma_hh)) {
            foreach ($ma_hh as $hang_hoa) {
                $delete = "DELETE FROM hang_hoa WHERE ma_hh = '$hang_hoa' ";
                $conn->exec($delete);
            }
        } else {
            $delete = "DELETE FROM hang_hoa WHERE ma_hh = '$ma_hh' ";
            $conn->exec($delete);
        }
    }

    function updateProduct($ma_hh, $ten_hh, $don_gia, $giam_gia, $hinh, $ma_loai, $mo_ta)
    {
        global $conn;
        $sql = "UPDATE hang_hoa SET 
            ten_hh = '$ten_hh', don_gia = '$don_gia', giam_gia = '$giam_gia', hinh = '$hinh', ma_loai = '$ma_loai', mo_ta = '$mo_ta'
            WHERE ma_hh = '$ma_hh' ";

        $conn->exec($sql);
    }

    function updateCountView($ma_hh)
    {
        global $conn;
        $sql = "UPDATE hang_hoa SET so_luot_xem = so_luot_xem + 1 WHERE ma_hh = '$ma_hh' ";

        $conn->exec($sql);
    }

    function selectTop10()
    {
        global $conn;
        $select = "SELECT * FROM hang_hoa ORDER BY so_luot_xem DESC LIMIT 10";
        return $conn->query($select);
    }

    function selectTitleProducts($titleProduct)
    {
        global $conn;
        $titleProductFormat = ucfirst($titleProduct);
        $select = "SELECT * FROM loai AS A INNER JOIN hang_hoa AS B ON A.ma_loai = B.ma_loai 
            WHERE ten_loai LIKE '$titleProductFormat%' OR ten_hh LIKE '$titleProductFormat%'";

        return $conn->query($select);
    }

    function statisticalProduct(){
        global $conn;

        $select = "SELECT L.*, H.ma_loai, H.don_gia, COUNT(H.ma_loai) AS so_luong , MAX(h.don_gia), MIN(h.don_gia), AVG(H.don_gia)
                    FROM loai AS L INNER JOIN hang_hoa AS H ON L.ma_loai = H.ma_loai 
                    GROUP BY H.ma_loai";

        return $conn->query($select);


    }

    function exportExcelProduct(){
        $objExcel = new PHPExcel;
        $objExcel->setActiveSheetIndex(0);
        $sheet = $objExcel->getActiveSheet()->setTitle('Sản phẩm');
        
        $rowCount = 1;
        $sheet->setCellValue('A'.$rowCount, 'Mã hàng');
        $sheet->setCellValue('B'.$rowCount, 'Tên hàng');
        $sheet->setCellValue('C'.$rowCount, 'Đơn giá');
        $sheet->setCellValue('D'.$rowCount, 'Giảm giá');
        $sheet->setCellValue('E'.$rowCount, 'Lượt xem');

        $table = selectProducts();
        foreach($table as $value){
            $rowCount++;
            $sheet->setCellValue('A'.$rowCount, $value['ma_hh']);
            $sheet->setCellValue('B'.$rowCount, $value['ten_hh']);
            $sheet->setCellValue('C'.$rowCount, $value['don_gia']);
            $sheet->setCellValue('D'.$rowCount, $value['giam_gia']);
            $sheet->setCellValue('E'.$rowCount, $value['so_luot_xem']);
        }

        $objWrite = new PHPExcel_Writer_Excel2007($objExcel);
        $filename = 'sanpham.xlsx';
        $objWrite->save($filename);
        // $objWrite->close();

        header("Content-Disposition: attachment; filename= $filename");  
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');   
        flush();
        readfile($filename);  
        flush();
    }
