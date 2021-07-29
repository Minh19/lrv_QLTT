-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 29, 2021 lúc 05:16 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webgr06_`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_activity`
--

CREATE TABLE `tbl_activity` (
  `id_activ` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_activtype` int(10) NOT NULL,
  `activTitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `activDescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `activCreateDate` datetime NOT NULL,
  `activStartDate` date NOT NULL,
  `activEndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_activity`
--

INSERT INTO `tbl_activity` (`id_activ`, `id_user`, `id_activtype`, `activTitle`, `activDescribe`, `activCreateDate`, `activStartDate`, `activEndDate`) VALUES
(1, 5, 1, 'Xuân Tình Nguyện 2021', 'Hoạt động mang tới cái Tết ấm no hơn cho trẻ em vùng khó khăn', '0000-00-00 00:00:00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_activportal`
--

CREATE TABLE `tbl_activportal` (
  `id_activportal` int(10) NOT NULL,
  `portalname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_activportal`
--

INSERT INTO `tbl_activportal` (`id_activportal`, `portalname`) VALUES
(1, 'Hoạt động đang diễn ra'),
(2, 'Chuỗi hoạt động'),
(3, 'Các văn bản khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_activtype`
--

CREATE TABLE `tbl_activtype` (
  `id_activtype` int(10) NOT NULL,
  `id_activportal` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `activtypeTitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `activtypeDescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `activtypeCreateDate` date NOT NULL,
  `activtypeStartDate` date NOT NULL,
  `activtypeEndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_activtype`
--

INSERT INTO `tbl_activtype` (`id_activtype`, `id_activportal`, `id_user`, `activtypeTitle`, `activtypeDescribe`, `activtypeCreateDate`, `activtypeStartDate`, `activtypeEndDate`) VALUES
(1, 1, 2, 'Xuân Tình Nguyện', 'Hoạt động mang tới cái Tết ấm no, vui tươi hơn cho những trẻ em khó khăn', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id_cmt` int(10) NOT NULL,
  `id_dtlactiv` int(10) NOT NULL,
  `id_activ` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `cmtContent` text COLLATE utf8_unicode_ci NOT NULL,
  `cmtDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`id_cmt`, `id_dtlactiv`, `id_activ`, `id_user`, `cmtContent`, `cmtDate`) VALUES
(1, 1, 1, 2, 'Khoa chỉnh lại 1 chút ở chỗ thời gian nhé, còn những chỗ khác ổn rồi', '0000-00-00 00:00:00'),
(2, 1, 1, 5, 'Dạ, tụi em sẽ sửa lại ngay. Cảm ơn Hội sinh viên đã góp ý ạ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dtl_activity`
--

CREATE TABLE `tbl_dtl_activity` (
  `id_dtlactiv` int(10) NOT NULL,
  `id_activtype` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `dtlactivTitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dtlactivDescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `dtlactivModelFile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dtlactivStartDate` date NOT NULL,
  `dtlactivEndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dtl_activity`
--

INSERT INTO `tbl_dtl_activity` (`id_dtlactiv`, `id_activtype`, `id_user`, `dtlactivTitle`, `dtlactivDescribe`, `dtlactivModelFile`, `dtlactivStartDate`, `dtlactivEndDate`) VALUES
(1, 1, 2, 'Kế hoạch XTN', 'Kế hoạch XTN giúp Đoàn - Hội trường Đại học Kinh tế có thể hiểu rõ hơn về chương trình của các đơn vị', '', '0000-00-00', '0000-00-00'),
(2, 1, 4, 'Kế hoạch gây quỹ XTN', 'Kế hoạch gây quỹ để Đoàn - Hội trường Đại học Kinh tế phê duyệt phương án gây quỹ ', '', '0000-00-00', '0000-00-00'),
(3, 1, 3, 'Dự trù kinh phí XTN', 'Dự trù kinh phí để Đoàn - Hội trường Đại học Kinh tế xem xét khả thi chiến dịch ', '', '0000-00-00', '0000-00-00'),
(4, 1, 3, 'Ấn phẩm XTN', 'Ấn phẩm phải được duyệt trước khi đơn vị đăng truyền thông', '', '0000-00-00', '0000-00-00'),
(5, 1, 3, 'Danh sách chiến sĩ', 'Danh sách chi tiết chiến sĩ tham gia XTN của đơn vị', '', '0000-00-00', '0000-00-00'),
(6, 1, 1, 'Báo cáo tổng kết', 'Báo cáo tổng kết sau chiến dịch XTN của đơn vị', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dtl_permision`
--

CREATE TABLE `tbl_dtl_permision` (
  `id_dtlper` int(10) NOT NULL,
  `id_per` int(10) NOT NULL,
  `dtlpername` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `checkaction` varchar(2) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id_event` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_status` int(10) NOT NULL,
  `eventname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `eventVenue` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `eventStartDate` datetime NOT NULL,
  `eventEndDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(10) NOT NULL,
  `id_filetype` int(10) NOT NULL,
  `fileTitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `fileDescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `fileContent` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fileCreateDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_fileactiv`
--

CREATE TABLE `tbl_fileactiv` (
  `id_fileactiv` int(10) NOT NULL,
  `id_dtlactiv` int(10) NOT NULL,
  `id_activ` int(10) NOT NULL,
  `id_status` int(10) NOT NULL,
  `id_filetype` int(10) NOT NULL,
  `f_activTitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `f_activDescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `f_activContent` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `f_activCreateDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_fileactiv`
--

INSERT INTO `tbl_fileactiv` (`id_fileactiv`, `id_dtlactiv`, `id_activ`, `id_status`, `id_filetype`, `f_activTitle`, `f_activDescribe`, `f_activContent`, `f_activCreateDate`) VALUES
(1, 1, 1, 3, 1, 'Kế hoạch XTN_Khoa BIT', 'Đây là Kế hoạch XTN của Khoa Công nghệ thông tin kinh doanh', '', '0000-00-00'),
(2, 2, 1, 1, 1, 'Kế hoạch gây quỹ XTN_Khoa BIT', 'Đây là Kế hoạch gây quỹ XTN của Khoa Công nghệ thông tin kinh doanh', '', '0000-00-00'),
(3, 3, 1, 1, 1, 'Dự trù kinh phí XTN_Khoa BIT', 'Đây là Dự trù kinh phí XTN của Khoa Công nghệ thông tin kinh doanh', '', '0000-00-00'),
(4, 4, 1, 1, 5, 'Ấn phẩm XTN_Khoa BIT', 'Đây là Ấn phẩm XTN của Khoa Công nghệ thông tin kinh doanh', '', '0000-00-00'),
(5, 5, 1, 1, 5, 'Danh sách chiến sĩ_Khoa BIT', 'Đây là Danh sách chiến sĩ XTN của Khoa Công nghệ thông tin kinh doanh', '', '0000-00-00'),
(6, 6, 1, 1, 5, 'Báo cáo tổng kết_Khoa BIT', 'Đây là Báo cáo tổng kết XTN của Khoa Công nghệ thông tin kinh doanh', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_filetype`
--

CREATE TABLE `tbl_filetype` (
  `id_filetype` int(10) NOT NULL,
  `f_typeCode` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `f_typename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `f_typeDescribe` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_filetype`
--

INSERT INTO `tbl_filetype` (`id_filetype`, `f_typeCode`, `f_typename`, `f_typeDescribe`) VALUES
(1, 'KH -TB-TTr', 'Kế hoạch - Công văn – Tờ trình', '0'),
(2, 'HĐ', 'Hợp đồng', '0'),
(3, 'MHT-MTB', 'Giấy tờ mượn Hội trường, mượn thiết bị', '0'),
(4, 'GCN', 'Giấy chứng nhận', '0'),
(5, 'Khác', 'Các văn bản khác', '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id_history` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_fileactiv` int(10) NOT NULL,
  `historyDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `id_notif` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_fileactiv` int(10) NOT NULL,
  `notifDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_permision`
--

CREATE TABLE `tbl_permision` (
  `id_per` int(10) NOT NULL,
  `pername` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_permision`
--

INSERT INTO `tbl_permision` (`id_per`, `pername`) VALUES
(1, 'ADMIN L1'),
(2, 'ADMIN L2'),
(3, 'USER');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(10) NOT NULL,
  `sttname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_status`
--

INSERT INTO `tbl_status` (`id_status`, `sttname`) VALUES
(1, 'CHƯA DUYỆT'),
(2, 'CHỜ DUYỆT'),
(3, 'DUYỆT THÀNH CÔNG'),
(4, 'TỪ CHỐI DUYỆT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `id_per` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_per`, `username`, `email`, `password`) VALUES
(1, 1, 'Đoàn Thanh niên', 'doanthanhnien@ueh.edu.vn', '12345678'),
(2, 1, 'Hội Sinh viên', 'hoisinhvien@ueh.edu.vn', '12345678'),
(3, 2, 'Nguyễn Thị Thương Nhớ', 'thuongnho@ueh.edu.vn', '12345678'),
(4, 2, 'Nguyễn Hữu Lộc', 'huuloc@ueh.edu.vn', '12345678'),
(5, 3, 'Khoa Công nghệ thông tin kinh doanh', 'youthbit@ueh.edu.vn', '12345678'),
(6, 3, 'Khoa Kế toán', 'youthsoa@ueh.edu.vn', '12345678');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_activity`
--
ALTER TABLE `tbl_activity`
  ADD PRIMARY KEY (`id_activ`),
  ADD KEY `fk_activity_id_activtype` (`id_activtype`),
  ADD KEY `fk_activity_id_user` (`id_user`);

--
-- Chỉ mục cho bảng `tbl_activportal`
--
ALTER TABLE `tbl_activportal`
  ADD PRIMARY KEY (`id_activportal`);

--
-- Chỉ mục cho bảng `tbl_activtype`
--
ALTER TABLE `tbl_activtype`
  ADD PRIMARY KEY (`id_activtype`),
  ADD KEY `fk_activetype_id_activportal` (`id_activportal`),
  ADD KEY `fk_activetype_id_user` (`id_user`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id_cmt`),
  ADD KEY `fk_comment_id_dtlactive` (`id_dtlactiv`),
  ADD KEY `fk_comment_id_activ` (`id_activ`),
  ADD KEY `fk_comment_id_user` (`id_user`);

--
-- Chỉ mục cho bảng `tbl_dtl_activity`
--
ALTER TABLE `tbl_dtl_activity`
  ADD PRIMARY KEY (`id_dtlactiv`),
  ADD KEY `fk_dtl_activity_id_activtype` (`id_activtype`),
  ADD KEY `fk_dtl_activity_id_user` (`id_user`);

--
-- Chỉ mục cho bảng `tbl_dtl_permision`
--
ALTER TABLE `tbl_dtl_permision`
  ADD PRIMARY KEY (`id_dtlper`),
  ADD KEY `fk_dtl_per_id_per` (`id_per`);

--
-- Chỉ mục cho bảng `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD KEY `fk_event_id_user` (`id_user`),
  ADD KEY `fk_event_id_status` (`id_status`);

--
-- Chỉ mục cho bảng `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `fk_file_id_filetype` (`id_filetype`);

--
-- Chỉ mục cho bảng `tbl_fileactiv`
--
ALTER TABLE `tbl_fileactiv`
  ADD PRIMARY KEY (`id_fileactiv`),
  ADD KEY `fk_fileactiv_id_activ` (`id_activ`),
  ADD KEY `fk_fileactiv_id_dtlactiv` (`id_dtlactiv`),
  ADD KEY `fk_fileactiv_id_filetype` (`id_filetype`),
  ADD KEY `fk_fileactiv_id_status` (`id_status`);

--
-- Chỉ mục cho bảng `tbl_filetype`
--
ALTER TABLE `tbl_filetype`
  ADD PRIMARY KEY (`id_filetype`);

--
-- Chỉ mục cho bảng `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `fk_history_id_user` (`id_user`),
  ADD KEY `fk_history_id_fileactiv` (`id_fileactiv`);

--
-- Chỉ mục cho bảng `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`id_notif`),
  ADD KEY `fk_notif_id_user` (`id_user`),
  ADD KEY `fk_notif_id_fileactiv` (`id_fileactiv`);

--
-- Chỉ mục cho bảng `tbl_permision`
--
ALTER TABLE `tbl_permision`
  ADD PRIMARY KEY (`id_per`);

--
-- Chỉ mục cho bảng `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user_id_per` (`id_per`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_activity`
--
ALTER TABLE `tbl_activity`
  MODIFY `id_activ` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_activportal`
--
ALTER TABLE `tbl_activportal`
  MODIFY `id_activportal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_activtype`
--
ALTER TABLE `tbl_activtype`
  MODIFY `id_activtype` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id_cmt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_dtl_activity`
--
ALTER TABLE `tbl_dtl_activity`
  MODIFY `id_dtlactiv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_dtl_permision`
--
ALTER TABLE `tbl_dtl_permision`
  MODIFY `id_dtlper` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id_file` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_fileactiv`
--
ALTER TABLE `tbl_fileactiv`
  MODIFY `id_fileactiv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_filetype`
--
ALTER TABLE `tbl_filetype`
  MODIFY `id_filetype` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_history`
--
ALTER TABLE `tbl_history`
  MODIFY `id_history` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `id_notif` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_permision`
--
ALTER TABLE `tbl_permision`
  MODIFY `id_per` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_activity`
--
ALTER TABLE `tbl_activity`
  ADD CONSTRAINT `fk_activity_id_activtype` FOREIGN KEY (`id_activtype`) REFERENCES `tbl_activtype` (`id_activtype`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_activity_id_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Các ràng buộc cho bảng `tbl_activtype`
--
ALTER TABLE `tbl_activtype`
  ADD CONSTRAINT `fk_activetype_id_activportal` FOREIGN KEY (`id_activportal`) REFERENCES `tbl_activportal` (`id_activportal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_activetype_id_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `fk_comment_id_activ` FOREIGN KEY (`id_activ`) REFERENCES `tbl_activity` (`id_activ`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comment_id_dtlactive` FOREIGN KEY (`id_dtlactiv`) REFERENCES `tbl_dtl_activity` (`id_dtlactiv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comment_id_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_dtl_activity`
--
ALTER TABLE `tbl_dtl_activity`
  ADD CONSTRAINT `fk_dtl_activity_id_activtype` FOREIGN KEY (`id_activtype`) REFERENCES `tbl_activtype` (`id_activtype`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dtl_activity_id_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_dtl_permision`
--
ALTER TABLE `tbl_dtl_permision`
  ADD CONSTRAINT `fk_dtl_per_id_per` FOREIGN KEY (`id_per`) REFERENCES `tbl_permision` (`id_per`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD CONSTRAINT `fk_event_id_status` FOREIGN KEY (`id_status`) REFERENCES `tbl_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_event_id_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD CONSTRAINT `fk_file_id_filetype` FOREIGN KEY (`id_filetype`) REFERENCES `tbl_filetype` (`id_filetype`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_fileactiv`
--
ALTER TABLE `tbl_fileactiv`
  ADD CONSTRAINT `fk_fileactiv_id_activ` FOREIGN KEY (`id_activ`) REFERENCES `tbl_activity` (`id_activ`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_fileactiv_id_dtlactiv` FOREIGN KEY (`id_dtlactiv`) REFERENCES `tbl_dtl_activity` (`id_dtlactiv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_fileactiv_id_filetype` FOREIGN KEY (`id_filetype`) REFERENCES `tbl_filetype` (`id_filetype`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_fileactiv_id_status` FOREIGN KEY (`id_status`) REFERENCES `tbl_status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_history`
--
ALTER TABLE `tbl_history`
  ADD CONSTRAINT `fk_history_id_fileactiv` FOREIGN KEY (`id_fileactiv`) REFERENCES `tbl_fileactiv` (`id_fileactiv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_history_id_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD CONSTRAINT `fk_notif_id_fileactiv` FOREIGN KEY (`id_fileactiv`) REFERENCES `tbl_fileactiv` (`id_fileactiv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_notif_id_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_user_id_per` FOREIGN KEY (`id_per`) REFERENCES `tbl_permision` (`id_per`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
