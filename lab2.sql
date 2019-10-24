-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2019 lúc 11:56 AM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lab2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `ma_bl` int(11) NOT NULL,
  `ma_kh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ma_hh` int(11) NOT NULL,
  `noi_dung` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_bl` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`ma_bl`, `ma_kh`, `ma_hh`, `noi_dung`, `ngay_bl`) VALUES
(40, 'admin', 11, 'kdslk', '2019-10-08 20:18:50'),
(41, 'admin', 24, 'hah', '2019-10-08 20:22:27'),
(44, 'admin', 22, 'Hello má»i ngÆ°á»i', '2019-10-10 14:53:45'),
(45, 'admin', 9, 'alo', '2019-10-16 14:47:42'),
(46, 'HoaPT', 21, 'hello', '2019-10-17 20:36:42');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `ma_hh` int(11) NOT NULL,
  `ten_hh` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `don_gia` float NOT NULL,
  `giam_gia` float NOT NULL,
  `hinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ma_loai` int(11) NOT NULL,
  `so_luot_xem` int(11) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ma_loai`, `so_luot_xem`, `ngay_nhap`, `mo_ta`) VALUES
(7, 'Cáº£i ngá»t', 17, 0, 'cai-ngot-huu-co.jpg', 26, 31, '2019-09-28', 'Cáº£i ngá»t cÃ³ nguá»“n gá»‘c tá»« áº¤n Äá»™, Trung Quá»‘c. CÃ¢y tháº£o, cao tá»›i 50 - 100 cm, thÃ¢n trÃ²n, khÃ´ng lÃ´ng, lÃ¡ cÃ³ phiáº¿n xoan ngÆ°á»£c trÃ²n dÃ i, Ä‘áº§u trÃ²n hay tÃ¹, gá»‘c tá»« '),
(9, 'CÃ  chua bi', 15, 0, 'ccbdl.jpg', 26, 65, '2019-09-28', 'CÃ  chua bi lÃ  má»™t giá»‘ng cÃ  chua Ä‘Æ°á»£c trá»“ng phá»• biáº¿n tá»« nhá»¯ng tháº­p niÃªn nÄƒm 1800, nguá»“n gá»‘c Ä‘áº§u tiÃªn cá»§a loáº¡i cÃ  chua nÃ y Ä‘Æ°á»£c cho lÃ  tá»« vÃ¹ng Ai Cáº­p. '),
(11, 'Cáº£i xoÄƒn Kale', 19, 0, '0003289rau-cai-kale-xanh510.jpeg', 26, 99, '2019-09-28', 'Cáº£i xoÄƒn hoáº·c borecole (loÃ i Cáº£i báº¯p dáº¡i Acephala Group) lÃ  má»™t loáº¡i rau vá»›i lÃ¡ xanh hoáº·c tÃ­m, trong Ä‘Ã³ lÃ¡ á»Ÿ giá»¯a khÃ´ng táº¡o thÃ nh Ä‘áº§u. NÃ³ Ä‘Æ°á»£c xem nhÆ° cÃ³'),
(12, 'MÄƒng tÃ¢y', 18, 0, '2445-907481547879353-1547879353-400x400.jpg', 26, 36, '2019-09-28', 'CÃ¢y tháº£o cÃ³ thÃ¢n má»c ngáº§m trong Ä‘áº¥t, thÆ°á»ng gá»i lÃ  thÃ¢n rá»…. ThÃ¢n rá»… dÃ y, mang nhiá»u rá»… dÃ i, Ä‘Æ°á»ng kÃ­nh 5-6mm, mÃ u nÃ¢u sÃ¡ng, xá»‘p. CÃ¡c thÃ¢n Ä‘á»©ng má»c trong '),
(18, 'Bia Huda Carlsberg', 17, 0, '1493263941849_5572432.jpg', 46, 0, '2019-10-05', 'Sáº£n xuáº¥t trÃªn dÃ¢y chuyá»n cÃ´ng nghá»‡ hiá»‡n Ä‘áº¡i\r\nHÆ°Æ¡ng vá»‹ thÆ¡m ngon, tá»± nhiÃªn\r\nAn toÃ n cho sá»©c khá»e ngÆ°á»i tiÃªu dÃ¹ng\r\nBao bÃ¬ sáº£n pháº©m cÃ³ thá»ƒ thay Ä‘á»•i theo NhÃ  '),
(19, 'Bia Sapporo', 20, 0, '1493264021427_2128949.jpg', 46, 6, '2019-10-05', 'Bao bÃ¬ sáº£n pháº©m cÃ³ thá»ƒ thay Ä‘á»•i theo NhÃ  cung cáº¥p\r\nSáº£n xuáº¥t trÃªn dÃ¢y chuyá»n cÃ´ng nghá»‡ hiá»‡n Ä‘áº¡i\r\nHÆ°Æ¡ng vá»‹ thÆ¡m ngon, tá»± nhiÃªn\r\nAn toÃ n cho sá»©c khá»e ngÆ°á»i'),
(20, 'Bia Heineken', 19, 0, '1493264121445_7044453.jpg', 46, 1, '2019-10-05', 'Bao bÃ¬ sáº£n pháº©m cÃ³ thá»ƒ thay Ä‘á»•i theo NhÃ  cung cáº¥p\r\nThÆ°Æ¡ng hiá»‡u bia uy tÃ­n lÃ¢u nÄƒm\r\nHÆ°Æ¡ng vá»‹ Ãªm dá»‹u háº¥p dáº«n\r\nCÃ³ thá»ƒ dÃ¹ng khi tá»¥ táº­p báº¡n bÃ¨'),
(21, 'NÆ°á»›c giáº£i khÃ¡t hÆ°Æ¡ng cam Fanta lon 250ml', 10, 0, '1493369853178_6699942.jpg', 46, 36, '2019-10-05', 'Bao bÃ¬ sáº£n pháº©m cÃ³ thá»ƒ thay Ä‘á»•i theo NhÃ  cung cáº¥p\r\nHÆ°Æ¡ng vá»‹ cam thÆ¡m ngon, tá»± nhiÃªn\r\nMang láº¡i cáº£m giÃ¡c sáº£ng khoÃ¡i tá»©c thÃ¬\r\nÄÃ³ng lon tiá»‡n lá»£i, dá»… sá»­ dá»¥ng\r\n'),
(22, 'CÃ  phÃª hÃ²a tan 3 trong 1 NescafÃ©', 13, 0, '1493372930788_6496077.jpg', 46, 4, '2019-10-05', 'Bao bÃ¬ sáº£n pháº©m cÃ³ thá»ƒ thay Ä‘á»•i theo NhÃ  cung cáº¥p\r\nNescafÃ© lÃ  má»™t thÆ°Æ¡ng hiá»‡u cÃ  phÃª ná»•i tiáº¿ng\r\n HÆ°Æ¡ng vá»‹ cÃ  phÃª sá»¯a thÆ¡m ngon\r\n Sáº£n pháº©m hÃ²a tan dá»… dÃ ng p'),
(23, ' CÃ¡ trá»©ng Thabifood', 4, 0, '1493368237559_5328559.jpg', 42, 0, '2019-10-05', 'Nguá»“n nguyÃªn liá»‡u tÆ°Æ¡i ngon, cháº¥t lÆ°á»£ng\r\nThá»‹t cÃ¡ thÆ¡m, bÃ©o, giÃ u dinh dÆ°á»¡ng\r\nTiá»‡n lá»£i trong cháº¿ biáº¿n mÃ³n Äƒn'),
(24, 'TÃ´m thá»‹t size 71/90 Hoa Linh', 7, 0, '1493368018644_9741084.jpg', 42, 4, '2019-10-05', 'TÃ´m Ä‘Æ°á»£c báº£o quáº£n tá»‘t, giá»¯ nguyÃªn hÃ m lÆ°á»£ng dinh dÆ°á»¡ng\r\nNguá»“n nguyÃªn liá»‡u tiá»‡n lá»£i cho nhiá»u mÃ³n Äƒn ngon\r\nÄÃ³ng gÃ³i nhá» gá»n, dá»… báº£o quáº£n vÃ  sá»­ dá»¥ng l'),
(25, 'Nem kem bÆ¡', 8, 0, '1493185853515_8888110.jpg', 42, 4, '2019-10-05', 'Bao bÃ¬ sáº£n pháº©m cÃ³ thá»ƒ thay Ä‘á»•i theo NhÃ  cung cáº¥p\r\nHÆ°Æ¡ng vá»‹ thÆ¡m ngon, háº¥p dáº«n\r\nThÃ nh pháº§n nguyÃªn liá»‡u an toÃ n\r\nÄÆ°á»£c sáº£n xuáº¥t trÃªn quy trÃ¬nh hiá»‡n Ä‘áº¡i'),
(27, 'Sá»¯a tÆ°Æ¡i Vinamilk', 13, 0, '1l-cd_78a1738dedb941f6b1313b1b5a932476_grande.jpg', 44, 9, '2019-10-17', 'Sá»¯a tiá»‡t trÃ¹ng Vinamilk A&D3 cÃ³ Ä‘Æ°á»ng Ä‘Æ°á»£c bá»• sung nhiá»u dÆ°á»¡ng cháº¥t thiáº¿t yáº¿u nhÆ° vitamin A, D3 vÃ  canxi, há»— trá»£ phÃ¡t triá»ƒn thá»‹ lá»±c vÃ  há»‡ xÆ°Æ¡ng cháº¯c khoá');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma_kh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mat_khau` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinh_kh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `so_dt` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `vai_tro` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`ma_kh`, `mat_khau`, `ho_ten`, `email`, `hinh_kh`, `so_dt`, `dia_chi`, `vai_tro`) VALUES
('admin', '$2y$10$CSPtFa3.yoRQiFdRoMvId.VmZ.TyUruVjumYDUQ.XzfnZtAJXl4TS', 'Nguyá»…n KhÃ¡nh (Boss)', 'khanh26122000@gmail.com', 'photo-1454496522488-7a8e488e8606.jpg', '0868003429', '82 Nguyá»…n LÆ°Æ¡ng Báº±ng', 3),
('haha', '$2y$10$pFsF8rx6O2kueFKlhJxVrOZVCPAsZ66kHAarI7u1zvSAOIPceM7NG', 'Nguyá»…n Ha Ha', 'ha@gmail.com', 'user.png', '098878721', '54/82 Nguyá»…n LÆ°Æ¡ng Báº±ng', 0),
('HoaPT', '$2y$10$1ZZ6q9IwrHD2IhSGAHLKt.FuFl5YXmuwSZeQebFihvnD9PUB7XSFS', 'Nguyen Hoa', 'hoa@gmail.com', 'user.png', '08680034290', '54/82 Nguyá»…n LÆ°Æ¡ng Báº±ng', 0),
('khanh123', '$2y$10$OTtTXx7/.o1APzBnRQN2zOC8GPapYRQKiaB8/DhHPa9HGRwWCxYXu', 'Nguyen Van Anh', 'anhcute@gmail.com', 'user.png', '12', '54/82 Nguyá»…n LÆ°Æ¡ng Báº±ng', 0),
('kk', '$2y$10$iwq0zf4EHOp.tulloilCs.TWhWDWXb9oMyKDT2yNdGFE8HJjYvf0u', 'nguyen khoa', 'khanh@gmail.com', 'user.png', '06767372', 'ham chung ', 0),
('minhtra', '$2y$10$9kJXm3ScYTUZg0xdEEIA8enrwmDVqLD.g1gtEbgz7snkDSFAnUczu', 'Nguyá»…n Thá»‹ Minh TrÃ ', 'trantmpd02873@fpt.edu.vn', 'photo-1542836780-7f74748c7562.jpg', '0977868323', 'ÄÃ  Náºµng', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `ma_loai` int(11) NOT NULL,
  `ten_loai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`ma_loai`, `ten_loai`) VALUES
(26, 'Rau cá»§ quáº£'),
(42, 'Thá»±c pháº©m Ä‘Ã´ng láº¡nh'),
(43, 'Thá»±c pháº©m khÃ´ vÃ  gia vá»‹'),
(44, 'Sá»¯a'),
(45, 'Sá»©c khá»e - Sáº¯c Ä‘áº¹p'),
(46, 'Äá»“ uá»‘ng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`ma_bl`),
  ADD KEY `fk_binh_luan_ma_hh` (`ma_hh`),
  ADD KEY `fk_binh_luan_ma_kh` (`ma_kh`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`ma_hh`),
  ADD KEY `FK_hang_hoa` (`ma_loai`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`ma_loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `ma_bl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `ma_hh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `ma_loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_binh_luan_ma_hh` FOREIGN KEY (`ma_hh`) REFERENCES `hang_hoa` (`ma_hh`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_binh_luan_ma_kh` FOREIGN KEY (`ma_kh`) REFERENCES `khach_hang` (`ma_kh`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `FK_hang_hoa` FOREIGN KEY (`ma_loai`) REFERENCES `loai` (`ma_loai`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
