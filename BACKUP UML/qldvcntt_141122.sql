-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2022 lúc 01:39 PM
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
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `IDCategory` int(11) NOT NULL,
  `CategoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryDetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`IDCategory`, `CategoryName`, `CategoryDetails`) VALUES
(1, 'Hạ Tầng', 'Các dịch vụ về hạ tầng.'),
(2, 'Quản trị Doanh nghiệp', 'Các dịch vụ về quản trị Doanh nghiệp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_promotion`
--

CREATE TABLE `category_promotion` (
  `IDCategoryPromotion` int(10) UNSIGNED NOT NULL,
  `IDCategory` int(11) NOT NULL,
  `CategoryPromotionDetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryPromotionName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CategoryDiscount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `Expired_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contract`
--

CREATE TABLE `contract` (
  `IDContract` int(10) UNSIGNED NOT NULL,
  `IDCustomer` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `IDProduct` int(11) NOT NULL,
  `IDVersion` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `Expired_at` timestamp NULL DEFAULT NULL,
  `ContractPrice` bigint(20) NOT NULL,
  `ContractStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contract`
--

INSERT INTO `contract` (`IDContract`, `IDCustomer`, `id`, `IDProduct`, `IDVersion`, `created_at`, `Expired_at`, `ContractPrice`, `ContractStatus`) VALUES
(1, 1, 1, 1, '1.1.0', '2022-09-26 21:27:30', '2022-10-26 21:27:30', 20000000, 'Active'),
(2, 2, 1, 2, '2.1.0', '2022-10-13 04:05:30', '2022-11-13 04:05:30', 30000000, 'Active'),
(3, 1, 1, 3, '3.1.0', '2022-09-26 21:27:30', '2022-12-13 21:27:30', 20000000, 'Active'),
(4, 1, 1, 2, '2.1.0', '2022-09-15 17:00:00', '2022-10-14 17:00:00', 20000000, 'Active'),
(5, 2, 1, 1, '1.2.0', '2022-10-24 07:41:39', '2023-10-24 07:41:39', 9600000, 'Active'),
(6, 3, 1, 1, '1.1.0', '2022-10-24 07:46:57', '2023-10-24 07:46:57', 6000000, 'Active'),
(7, 3, 1, 3, '3.1.0', '2022-10-24 08:28:09', '2023-10-24 08:28:09', 3000000, 'Active'),
(8, 6, 1, 1, '1.1.0', '2022-11-02 07:17:50', '2023-11-02 07:17:50', 6000000, 'Pending'),
(9, 6, 1, 2, '2.1.0', '2022-11-02 08:42:00', '2022-12-02 08:42:00', 250000, 'Pending');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contract_image`
--

CREATE TABLE `contract_image` (
  `IDContract` int(10) DEFAULT NULL,
  `Link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContractImgageDetails` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contract_image`
--

INSERT INTO `contract_image` (`IDContract`, `Link`, `ContractImgageDetails`, `Created_at`) VALUES
(1, 'https://i0.wp.com/eforms.com/download/2018/05/Employment-Contract-Agreement.png?ssl=1', 'Hợp đồng số 1', '2022-10-13 07:27:30'),
(2, 'https://i1.wp.com/eforms.com/images/2019/08/Service-Contract-Template.png?fit=1600%2C2070&ssl=1', 'Hợp đồng số 2', '2022-10-13 09:05:30'),
(3, 'https://signaturely.com/wp-content/uploads/2020/06/construction_contract_agreement_template1.jpg', 'Hợp đồng số 3', '2022-10-16 20:07:30'),
(4, 'https://signaturely.com/wp-content/uploads/2020/06/construction_contract_agreement_template1.jpg', 'Hợp đồng số 4', '2022-09-15 10:00:00'),
(5, 'https://i0.wp.com/eforms.com/download/2018/05/Employment-Contract-Agreement.png?ssl=1', NULL, '2022-10-24 07:41:39'),
(6, 'https://i0.wp.com/eforms.com/download/2018/05/Employment-Contract-Agreement.png?ssl=1', NULL, '2022-10-24 07:46:57'),
(7, 'https://i0.wp.com/eforms.com/download/2018/05/Employment-Contract-Agreement.png?ssl=1', NULL, '2022-10-24 08:28:09'),
(8, 'https://i0.wp.com/eforms.com/download/2018/05/Employment-Contract-Agreement.png?ssl=1', NULL, '2022-11-02 07:17:50'),
(9, '/public/storage/contract-image/lovepik-data-analysis-data-management-icon-free-vector-png-image_401355039_wh860.png', NULL, '2022-11-02 08:42:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_infomation`
--

CREATE TABLE `customer_infomation` (
  `IDCustomer` int(10) UNSIGNED NOT NULL,
  `CustomerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TypeOfCustomer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer_infomation`
--

INSERT INTO `customer_infomation` (`IDCustomer`, `CustomerName`, `Address`, `PhoneNumber`, `Email`, `TypeOfCustomer`) VALUES
(1, 'Đại học Cần Thơ', '3/2 street, Ninh Kieu district, Can Tho city', '842923832663', 'dhct@ctu.edu.vn', 'Enterprise'),
(2, 'Đại học Nam Cần Thơ', 'Nguyen Van Cu noi dai street, Ninh Kieu district, Can Tho city', '12345678', 'namCT@DNC.edu.vn', 'Enterprise'),
(3, 'Vũ Ngọc Nhật Vy', 'Vị Thanh- Hậu Giang', '12345678912', 'nvy@gmail.com', 'Enterprise'),
(4, 'Cửa hàng FPT', '3/2 street, Ninh Kieu district,Can Tho city', '0334358880', 'FPT@gmail.com', 'Potential'),
(6, 'Công ty phần mềm BE', 'Vị Thanh- Hậu Giang', '0334358889', 'BE@solution.vn', 'Enterprise');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `information_user`
--

CREATE TABLE `information_user` (
  `ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birthday` date NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDCardNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PhoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Competence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `information_user`
--

INSERT INTO `information_user` (`ID`, `Fullname`, `Birthday`, `Address`, `IDCardNumber`, `PhoneNumber`, `Email`, `Competence`, `Link`) VALUES
('1', 'Nguyễn Danh Hưng', '2000-06-06', 'Vị Thanh, Hậu Giang', '364012666', '0333358883', 'hung2000hg@gmail.com', 'Admin', 'https://img.freepik.com/premium-vector/man-avatar-profile-round-icon_24640-14044.jpg?w=2000'),
('2', 'Vũ Ngọc Nhật Vy', '2000-08-09', 'Vị Thanh, Hậu Giang', '364012789', '03343435881', 'user@gmail.com', 'Sales', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNMigcti3QIcvX5jSF29YXu_pY5kRjy1ace-hnOe_aek4u68vMWRxcW6f4iUqchttYbpQ&usqp=CAU'),
('3', 'Test update', '2022-11-08', 'Vị Thanh- Hậu Giang', '12345678', '0334358887', 'test@gmail.com', 'Sales', 'https://onesme.vn/resources/upload/file/services/images/26102022/202210261016c7f9d9ac-8db3-4e5a-bcd2-dcfdfa787e95.WEBP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2022_08_30_030449_infomation_user', 1),
(10, '2022_08_30_032426_account_user', 1),
(11, '2022_08_30_035245_create_sessions_table', 1),
(12, '2022_09_03_032704_category', 1),
(13, '2022_09_03_032812_products', 1),
(14, '2022_09_03_033626_product_image', 1),
(15, '2022_09_03_042000_product_version', 1),
(16, '2022_09_03_042135_product_promotion', 1),
(17, '2022_09_03_042312_feedback', 1),
(18, '2022_09_04_030200_category__promotion', 1),
(19, '2022_09_04_031015_customer__information', 1),
(20, '2022_09_04_031306_contract', 1),
(21, '2022_09_04_032814_contract_image', 1),
(22, '2022_09_04_034211_term_of_contract', 1),
(23, '2022_09_04_043454_create_sessions_table', 2),
(24, '2022_09_17_042955_product_price', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `IDProduct` int(10) UNSIGNED NOT NULL,
  `ProductName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductDetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDCategory` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`IDProduct`, `ProductName`, `ProductDetails`, `IDCategory`) VALUES
(1, 'Máy chủ ảo - Smart Cloud', 'SmartCloud là dịch vụ cho phép khách hàng chủ động khởi tạo các máy ảo với tài nguyên CPU, RAM và lưu trữ tùy ý...', 2),
(2, 'Tên miền Việt Nam', 'Tên miền (Domain name) là định danh của website trên Internet. Tên miền thường gắn với tên công ty và thương hiệu của doanh nghiệp. Tên miền là duy nhất và được ưu tiên cấp phát cho chủ thể nào đăng ký trước.', 2),
(3, 'Cổng thông tin điện tử vnPortal', 'vnPortal cung cấp những tiện ích ứng dụng công nghệ thông tin, tạo ra môi trường làm việc hiện đại, nhanh chóng, hiệu quả, tiết kiệm thời gian và kinh phí cho người dùng.', 1),
(4, 'KiemThu', 'KiemThuu2', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_feedback`
--

CREATE TABLE `product_feedback` (
  `IDFeedback` int(10) UNSIGNED NOT NULL,
  `IDVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IDCustomer` int(11) NOT NULL,
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Content` varchar(2550) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rate` int(12) NOT NULL,
  `Created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_feedback`
--

INSERT INTO `product_feedback` (`IDFeedback`, `IDVersion`, `IDCustomer`, `id`, `Content`, `Rate`, `Created_at`) VALUES
(1, '1.1.0', 1, '1', 'Dịch vụ tốt, chăm sóc khách hàng tận tâm, hài lòng', 5, '2022-11-12'),
(2, '1.1.0', 2, '1', 'Chất lượng dịch vụ tạm ổn', 3, '2022-10-26'),
(3, '1.2.0', 1, '1', 'Tạm được', 4, '2022-10-26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_image`
--

CREATE TABLE `product_image` (
  `IDProduct` int(10) UNSIGNED NOT NULL,
  `Link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageDetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_image`
--

INSERT INTO `product_image` (`IDProduct`, `Link`, `ImageDetails`) VALUES
(1, 'https://onesme.vn/resources/upload/file/services/images/03082021/2021080320482a24fc28-daa6-4eba-b8be-b4ae91ba6156.PNG', 'Máy chủ ảo - Smart Cloud'),
(2, 'https://onesme.vn/resources/upload/file/services/images/03082021/2021080321461156dc44-9b3d-407c-9558-3dd2ab56004d.PNG', 'Tên miền Việt Nam'),
(3, 'https://onesme.vn/resources/upload/file/services/images/17082022/202208171520bf11d9f4-24ae-43ff-8456-e7a763183253.JPG', 'Cổng thông tin điện tử vnPortal'),
(4, 'https://onesme.vn/resources/upload/file/services/images/26102022/202210261016c7f9d9ac-8db3-4e5a-bcd2-dcfdfa787e95.WEBP', 'Hình ảnh dịch vụ số 4');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_promotion`
--

CREATE TABLE `product_promotion` (
  `IDProduct` int(10) UNSIGNED NOT NULL,
  `IDProductPromotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductPromotionDetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ProductDiscount` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_version`
--

CREATE TABLE `product_version` (
  `IDProduct` int(10) UNSIGNED NOT NULL,
  `IDVersion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VersionDetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CurrencyUnit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TimeCycle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_version`
--

INSERT INTO `product_version` (`IDProduct`, `IDVersion`, `VersionDetails`, `Price`, `CurrencyUnit`, `TimeCycle`) VALUES
(1, '1.1.0', 'Phiên bản giới hạn bộ nhớ ram 8GB, sử dụng HDD', '300000', 'VND', 'Tháng'),
(1, '1.2.0', 'Phiên bản giới hạn bộ nhớ ram 16GB, sử dụng SSD', '400000', 'VND', 'Tháng'),
(2, '2.1.0', 'Tên miền .NET.VN', '500000', 'VND', 'Tháng'),
(3, '3.1.0', 'Cơ bản', '1000000', 'VND', 'Tháng'),
(3, '3.2.0', 'Nâng cao', '350000', 'VND', 'Tháng'),
(4, '4.1.0', 'KiemThu', '300000', 'VND', 'Tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6WXAn23xKcXXt34h6inzgfo2T61REHJQXLkeVtzY', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZVgxTkJwam1pZTVaWkV5OE9zZEdOVnJTZVZEalQ3NFVNZzZnTkZlaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3QvUUxEVkNOVFQvcHVibGljL3JlZGlyZWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkalBhVTlCaHEzT295MnlMS0lqZUtSLlpleTJNWnR4Qm90bDJNWUNXUjVvTG1CTEI5RVBVZHUiO30=', 1668433146),
('NSlWYPYtNDMcks7ZiFqXaOPZe96L4hOgliBSphG6', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/106.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUUFYd3h1RFJGbVc5bWpVandsWGJiNWpSNExnYXZzMmc5dEdDam0wdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3QvUUxEVkNOVFQvcHVibGljL2NhbmhiYW9ob3Bkb25nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRqUGFVOUJocTNPb3kyeUxLSWplS1IuWmV5Mk1adHhCb3RsMk1ZQ1dSNW9MbUJMQjlFUFVkdSI7fQ==', 1668404250);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nguyen\'s Team', 1, '2022-09-26 21:29:43', '2022-09-26 21:29:43'),
(2, 2, 'BestSale\'s Team', 1, '2022-10-28 20:34:18', '2022-10-28 20:34:18'),
(3, 1, 'Bán hàng', 0, '2022-10-28 20:36:25', '2022-10-28 20:36:25'),
(4, 2, 'Manager', 0, '2022-10-28 20:48:01', '2022-10-28 20:48:01'),
(5, 3, 'Sales', 0, '2022-10-28 20:48:01', '2022-10-28 20:48:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `team_invitations`
--

INSERT INTO `team_invitations` (`id`, `team_id`, `email`, `role`, `created_at`, `updated_at`) VALUES
(1, 1, 'user@gmail.com', 'editor', '2022-10-28 20:35:34', '2022-10-28 20:35:34'),
(2, 3, 'user@gmail.com', 'editor', '2022-10-28 20:36:50', '2022-10-28 20:36:50'),
(3, 4, 'hung2000hg@gmail.com', 'admin', '2022-10-28 20:48:09', '2022-10-28 20:48:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `term_of_contract`
--

CREATE TABLE `term_of_contract` (
  `IDContract` int(10) UNSIGNED DEFAULT NULL,
  `RulesContractDetails` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `term_of_contract`
--

INSERT INTO `term_of_contract` (`IDContract`, `RulesContractDetails`, `Created_at`) VALUES
(1, NULL, NULL),
(2, NULL, NULL),
(3, NULL, NULL),
(4, NULL, NULL),
(5, NULL, '2022-10-24 07:41:39'),
(6, NULL, '2022-10-24 07:46:57'),
(7, NULL, '2022-10-24 08:28:09'),
(8, NULL, '2022-11-02 07:17:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen Danh Hung', 'hung2000hg@gmail.com', NULL, 1, '$2y$10$jPaU9Bhq3Ooy2yLKIjeKR.Zey2MZtxBotl2MYCWR5oLmBLB9EPUdu', NULL, NULL, NULL, 'xgVeDzBZT3qxuZPobqwQlCRtGVMuChqM8uEk98Y37biTzFKKvGjwmzZCsO1n', 3, NULL, '2022-09-26 21:29:43', '2022-10-28 20:36:25'),
(2, 'BestSale', 'user@gmail.com', NULL, 0, '$2y$10$gfCb39s8pr1J.iB5VvvpNuNYJhi4ua89dhlcmsiYwis3l82Vtxo0i', NULL, NULL, NULL, NULL, 2, NULL, '2022-10-28 20:34:18', '2022-10-28 20:49:45'),
(3, 'Test update', 'test@gmail.com', NULL, 0, '12345678', NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-08 20:14:55', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`IDCategory`);

--
-- Chỉ mục cho bảng `category_promotion`
--
ALTER TABLE `category_promotion`
  ADD PRIMARY KEY (`IDCategoryPromotion`),
  ADD KEY `category_promotion_idcategory_foreign` (`IDCategory`);

--
-- Chỉ mục cho bảng `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`IDContract`);

--
-- Chỉ mục cho bảng `contract_image`
--
ALTER TABLE `contract_image`
  ADD KEY `contract_image_idcontract_foreign` (`IDContract`);

--
-- Chỉ mục cho bảng `customer_infomation`
--
ALTER TABLE `customer_infomation`
  ADD PRIMARY KEY (`IDCustomer`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `information_user`
--
ALTER TABLE `information_user`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`IDProduct`),
  ADD KEY `products_idcategory_foreign` (`IDCategory`);

--
-- Chỉ mục cho bảng `product_feedback`
--
ALTER TABLE `product_feedback`
  ADD PRIMARY KEY (`IDFeedback`),
  ADD KEY `product_feedback_idversion_foreign` (`IDVersion`);

--
-- Chỉ mục cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD KEY `product_image_idproduct_foreign` (`IDProduct`);

--
-- Chỉ mục cho bảng `product_promotion`
--
ALTER TABLE `product_promotion`
  ADD KEY `product_promotion_idproduct_foreign` (`IDProduct`);

--
-- Chỉ mục cho bảng `product_version`
--
ALTER TABLE `product_version`
  ADD PRIMARY KEY (`IDVersion`),
  ADD KEY `product_version_idproduct_foreign` (`IDProduct`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Chỉ mục cho bảng `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Chỉ mục cho bảng `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Chỉ mục cho bảng `term_of_contract`
--
ALTER TABLE `term_of_contract`
  ADD KEY `term_of_contract_idcontract_foreign` (`IDContract`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `IDCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category_promotion`
--
ALTER TABLE `category_promotion`
  MODIFY `IDCategoryPromotion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contract`
--
ALTER TABLE `contract`
  MODIFY `IDContract` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `customer_infomation`
--
ALTER TABLE `customer_infomation`
  MODIFY `IDCustomer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `IDProduct` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `product_feedback`
--
ALTER TABLE `product_feedback`
  MODIFY `IDFeedback` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_promotion`
--
ALTER TABLE `category_promotion`
  ADD CONSTRAINT `category_promotion_idcategory_foreign` FOREIGN KEY (`IDCategory`) REFERENCES `category` (`IDCategory`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_idcategory_foreign` FOREIGN KEY (`IDCategory`) REFERENCES `category` (`IDCategory`);

--
-- Các ràng buộc cho bảng `product_feedback`
--
ALTER TABLE `product_feedback`
  ADD CONSTRAINT `product_feedback_idversion_foreign` FOREIGN KEY (`IDVersion`) REFERENCES `product_version` (`IDVersion`);

--
-- Các ràng buộc cho bảng `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_image_idproduct_foreign` FOREIGN KEY (`IDProduct`) REFERENCES `products` (`IDProduct`);

--
-- Các ràng buộc cho bảng `product_promotion`
--
ALTER TABLE `product_promotion`
  ADD CONSTRAINT `product_promotion_idproduct_foreign` FOREIGN KEY (`IDProduct`) REFERENCES `products` (`IDProduct`);

--
-- Các ràng buộc cho bảng `product_version`
--
ALTER TABLE `product_version`
  ADD CONSTRAINT `product_version_idproduct_foreign` FOREIGN KEY (`IDProduct`) REFERENCES `products` (`IDProduct`);

--
-- Các ràng buộc cho bảng `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
