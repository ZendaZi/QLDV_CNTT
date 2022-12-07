-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2022 lúc 01:42 PM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qldvcntt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_price`
--

CREATE TABLE `product_price` (
  `IDVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CurrencyUnit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TimeCycle` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_price`
--

INSERT INTO `product_price` (`IDVersion`, `Price`, `CurrencyUnit`, `TimeCycle`) VALUES
('1.1.0', '300000', 'VND', 'Tháng'),
('1.2.0', '800000', 'VND', 'Tháng'),
('2.1.0', '250000', 'VND', 'Tháng'),
('3.1.0', '250000', 'VND', 'Tháng'),
('3.2.0', '1000000', 'VND', 'Tháng'),
('4.1.0', '1000', 'VND', 'Tháng');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product_price`
--
ALTER TABLE `product_price`
  ADD KEY `product_price_idversion_foreign` (`IDVersion`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `product_price`
--
ALTER TABLE `product_price`
  ADD CONSTRAINT `product_price_idversion_foreign` FOREIGN KEY (`IDVersion`) REFERENCES `product_version` (`IDVersion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
