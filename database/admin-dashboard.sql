-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 27, 2021 lúc 11:59 AM
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
  `activtitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `activdescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `activcreatedate` datetime NOT NULL,
  `activstartdate` date NOT NULL,
  `activenddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_activportal`
--

CREATE TABLE `tbl_activportal` (
  `id_activportal` int(10) NOT NULL,
  `portalname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_activtype`
--

CREATE TABLE `tbl_activtype` (
  `id_activtype` int(10) NOT NULL,
  `id_activportal` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `activtypetitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `activtypedescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `activtypecreatedate` datetime NOT NULL,
  `activtypestartdate` date NOT NULL,
  `activtypeenddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id_cmt` int(10) NOT NULL,
  `id_dtlactiv` int(10) NOT NULL,
  `id_activ` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `cmtcontent` text COLLATE utf8_unicode_ci NOT NULL,
  `cmtdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dtl_activity`
--

CREATE TABLE `tbl_dtl_activity` (
  `id_dtlactiv` int(10) NOT NULL,
  `id_activtype` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `dtlactivtitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `dtlactivdescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `dtl_activemodelfile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dtlactivstartdate` date NOT NULL,
  `dtlactivenddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Cấu trúc bảng cho bảng `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(10) NOT NULL,
  `id_filetype` int(10) NOT NULL,
  `filetitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `filedescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `filecontent` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `filecreatedate` date NOT NULL
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
  `f_activtitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `f_activdescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `f_activcontent` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `f_activcreatedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_filetype`
--

CREATE TABLE `tbl_filetype` (
  `id_filetype` int(10) NOT NULL,
  `ftypename` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_history`
--

CREATE TABLE `tbl_history` (
  `id_history` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_activ` int(10) NOT NULL,
  `historydate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `id_notif` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `id_activ` int(10) NOT NULL,
  `notifdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_permision`
--

CREATE TABLE `tbl_permision` (
  `id_per` int(10) NOT NULL,
  `pername` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id_status` int(10) NOT NULL,
  `sttname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  ADD KEY `fk_history_id_activ` (`id_activ`);

--
-- Chỉ mục cho bảng `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`id_notif`),
  ADD KEY `fk_notif_id_user` (`id_user`),
  ADD KEY `fk_notif_id_activ` (`id_activ`);

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
  MODIFY `id_activ` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_activportal`
--
ALTER TABLE `tbl_activportal`
  MODIFY `id_activportal` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_activtype`
--
ALTER TABLE `tbl_activtype`
  MODIFY `id_activtype` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id_cmt` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_dtl_activity`
--
ALTER TABLE `tbl_dtl_activity`
  MODIFY `id_dtlactiv` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_fileactiv` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_filetype`
--
ALTER TABLE `tbl_filetype`
  MODIFY `id_filetype` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_per` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id_status` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `fk_history_id_activ` FOREIGN KEY (`id_activ`) REFERENCES `tbl_activity` (`id_activ`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_history_id_user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD CONSTRAINT `fk_notif_id_activ` FOREIGN KEY (`id_activ`) REFERENCES `tbl_activity` (`id_activ`) ON DELETE CASCADE ON UPDATE CASCADE,
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
