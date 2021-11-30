-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 16, 2021 lúc 01:55 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `brashop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `name`, `content`, `image`, `created_at`, `updated_at`) VALUES
(2, 'FIT SMART', 'Áo ngực thông minh', 'banner1.jpg', '2021-04-07 08:41:41', NULL),
(3, 'COMING SOON', 'New product', 'banner2.jpg', '2021-04-07 08:41:41', '2021-04-07'),
(4, 'SALE OFF', 'Season sale', 'banner3.jpg', '2021-04-07 08:41:41', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wired bra', 1, '2021-03-29 11:39:07', '2021-04-02'),
(2, 'Non-wired bra', 1, '2021-03-29 11:39:07', NULL),
(3, 'Push-up bra', 1, '2021-03-29 11:39:07', NULL),
(4, 'Deep V', 1, '2021-03-29 11:39:07', NULL),
(5, 'Padded bra', 1, '2021-03-29 11:39:07', NULL),
(6, 'Bralette', 1, '2021-03-29 11:39:07', NULL),
(7, 'Magic wire bra', 1, '2021-03-29 11:39:07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`id`, `name`, `color_code`, `created_at`, `updated_at`) VALUES
(1, 'Red', '#F21429', '2021-03-30 07:32:42', '2021-04-08'),
(2, 'Black', '#1C1A1A', '2021-03-30 07:32:42', '2021-04-08'),
(3, 'White', '#E8DFDF', '2021-03-30 07:32:42', '2021-04-08'),
(4, 'Pink', '#E6468E', '2021-03-30 07:32:42', '2021-04-08'),
(5, 'Brown', '#884343', '2021-03-30 07:32:42', '2021-04-08'),
(6, 'Blue', '#16F5F8', '2021-04-02 09:59:52', '2021-04-08'),
(7, 'Grey', '#9C9A9A', '2021-04-02 10:02:26', '2021-04-08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `address`, `phone`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Ngọc Hải', 'nguyenngochaihlls@gmail.com', 'Số 71 ngõ 101 Đào Tấn', '0979333440', '$2y$10$aMgQoeYsS3anxwMTh7upSufXG3qs416zt8oQCO4zm9SbzTHvJCo4.', 1, '8ZESOdz79r2MFttM1jgJROp8XSt97ZaoWWRwrKaN0kpqruKnugfOhKG3oNRO', '2021-04-12 10:45:21', '2021-04-14'),
(6, 'nguyen nam', 'nam1@gmail.com', 'ha noi', '123', '$2y$10$98rqR/WsCjnCBsPIvMD2B.Ibs8XXY2qV60671cEajgMB5rE7wi8VG', 1, '575lqP4431LVvzlW4fAxllKhIhSQGohxHOc34fAdjMiCXereAn1tAX6axADJ', '2021-04-14 03:50:40', '2021-04-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mail`
--

CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `mail`
--

INSERT INTO `mail` (`id`, `name`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Ngọc Hải', 'nguyenngochaihlls@gmail.com', 'Test message', '2021-04-08 07:06:17', '2021-04-08'),
(6, 'Nguyễn Ngọc Hải', 'nguyenngochaihlls@gmail.com', 'asd', '2021-04-14 03:55:41', '2021-04-14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price_unit` float NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`order_id`, `product_id`, `price_unit`, `quantity`) VALUES
(3, 4, 1900000, 1),
(3, 1, 1200000, 1),
(4, 4, 1900000, 1),
(7, 2, 1300000, 3),
(9, 4, 1900000, 1),
(10, 3, 1500000, 2),
(11, 1, 1200000, 1),
(12, 1, 1100000, 2),
(12, 29, 1200000, 4),
(13, 8, 1600000, 1),
(14, 1, 1100000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `name`, `address`, `phone`, `email`, `amount`, `note`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'Nguyễn Ngọc Hải', 'Số 71 ngõ 101 Đào Tấn', '0979333440', 'nguyenngochaihlls@gmail.com', 3100000, NULL, 2, '2021-04-13 03:44:12', '2021-04-15'),
(4, 1, 'Nguyễn Ngọc Hải', 'Số 71 ngõ 101 Đào Tấn', '0979333440', 'nguyenngochaihlls@gmail.com', 1900000, NULL, 2, '2021-04-13 03:46:57', '2021-04-15'),
(7, 1, 'Nguyễn Nam', 'Ha Noi', '0979333441', 'nam@gmail.com', 3900000, NULL, 2, '2021-04-14 03:36:56', '2021-04-15'),
(9, 6, 'nguyen nam', 'ha noi', '123', 'nam1@gmail.com', 1900000, NULL, 0, '2021-04-14 03:54:45', '2021-04-14'),
(10, 1, 'Nguyễn Ngọc Hải', 'Số 71 ngõ 101 Đào Tấn', '0979333440', 'nguyenngochaihlls@gmail.com', 3000000, NULL, 2, '2021-04-14 04:26:56', '2021-04-16'),
(11, 1, 'Nguyễn Ngọc Hải', 'Số 71 ngõ 101 Đào Tấn', '0979333440', 'nguyenngochaihlls@gmail.com', 1200000, NULL, 2, '2021-04-16 02:12:54', '2021-04-16'),
(12, 1, 'Nguyễn Ngọc Hải', 'Số 71 ngõ 101 Đào Tấn', '0979333440', 'nguyenngochaihlls@gmail.com', 7000000, NULL, 2, '2021-04-16 03:33:32', '2021-04-16'),
(13, 1, 'Nguyễn Ngọc Hải', 'Số 71 ngõ 101 Đào Tấn', '0979333440', 'nguyenngochaihlls@gmail.com', 1600000, NULL, 1, '2021-04-16 03:35:44', '2021-04-16'),
(14, 1, 'Nguyễn Ngọc Hải', 'Số 71 ngõ 101 Đào Tấn', '0979333440', 'nguyenngochaihlls@gmail.com', 1100000, 'giao cho minh trong gio hanh chinh', 0, '2021-04-16 04:35:17', '2021-04-16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `sale_price` float DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `price`, `sale_price`, `content`, `image`, `color_id`, `size_id`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Aqua leaf', 1, 1200000, 1100000, 'Lớp chân ngực dài với độ ổn định ở mặt sau cộng với họa tiết thêu trên bầu áo và lớp chân ngực giữ được kiểu dáng mềm mại <b>nữ tính</b>.', '1.jpg', 2, 1, 20, 1, '2021-03-30 07:33:11', '2021-04-16'),
(2, 'SEXY CUSHION DELICATE', 2, 1300000, 0, 'Ren co giãn mềm mại mang họa tiết hoa Morocco ở mặt bên và bản lưng với ren họa tiết vỏ sò ở đường viên hỗ trợ bên dưới.', '2.jpg', 4, 2, 30, 1, '2021-03-30 07:33:11', '2021-04-08'),
(3, 'FLORALE DAHLIA', 3, 1500000, 0, 'Thông thoáng dễ chịu, tạo vòng ngực tròn đầy và dễ dàng phối với trang phục mặc ngoài cổ rộng.', '3.jpg', 1, 3, 40, 1, '2021-03-30 07:33:11', '2021-04-08'),
(4, 'FLORALE ROSE', 4, 1900000, 0, 'Phần dây lưng phía sau là ren hoa tạo nên vẻ đặc trưng của sản phẩm cắt cao làm rõ dáng chữ U giúp tăng độ bao phủ và ổn định khi mặc.', '4.jpg', 4, 4, 10, 1, '2021-03-30 07:33:11', NULL),
(5, 'FLORALE VIOLET', 5, 2100000, 0, 'Cho vẻ nữ tính sang trọng với sự nhẹ nhàng.', '5.jpg', 4, 5, 15, 1, '2021-03-30 07:33:11', '2021-04-08'),
(6, 'SIGNATURE LACE', 6, 1100000, 0, 'Sử dụng French cup với mút đệm có thể tháo rời và tăng thêm độ che phủ ở mặt trước.', '6.jpg', 1, 6, 20, 1, '2021-03-30 07:33:11', NULL),
(7, 'MOROCCAN LEAF', 7, 1200000, 0, 'Những chiếc lá Morocco truyền cảm hứng cho những họa tiết thêu hình lá cùng lưới xuyên thấu và ren tinh tế với hình trang trí nổi độc đáo.', '7.jpg', 1, 7, 25, 1, '2021-03-30 07:33:11', '2021-04-08'),
(8, 'GO ALLROUND BRALETTE', 1, 1600000, 0, 'Kết hợp 2 lớp vải mềm mại giúp giữ chặt áo không bị xê dịch và hỗ trợ nâng tốt hơn, kiểu dáng dễ mặc và co giãn tốt.', '8.jpg', 3, 8, 20, 1, '2021-03-30 07:33:11', NULL),
(9, 'SLOGGI EVERYDAY', 2, 1400000, 0, 'Bản dây vai rông giúp giảm áp lực lên vai và dây vai không thể tháo rời giúp nâng ngực và giữ chặt áo không bị xê dịch.', '9.jpg', 4, 1, 15, 1, '2021-03-30 07:33:11', NULL),
(10, 'AQUA EXOTIC BANDEAU', 3, 1200000, 0, 'Chiếc áo ngực của Aqua Exotic Bandeau mang đến giải pháp thời trang hoàn hảo, nếu bạn cần che khe ngực.', '10.jpg', 4, 2, 30, 1, '2021-03-30 07:33:11', '2021-04-08'),
(13, 'Aqua leaf season', 1, 1200000, 0, 'Lớp chân ngực dài với độ ổn định ở mặt sau cộng với họa tiết thêu trên bầu áo và lớp chân ngực giữ được kiểu dáng mềm mại nữ tính.', '11.jpg', 6, 1, 20, 1, '2021-04-08 07:55:17', '2021-04-08'),
(14, 'SEXY CUSHION DELICATE SEASON', 2, 1300000, 0, 'Ren co giãn mềm mại mang họa tiết hoa Morocco ở mặt bên và bản lưng với ren họa tiết vỏ sò ở đường viên hỗ trợ bên dưới.', '12.jpg', 6, 2, 30, 1, '2021-04-08 07:55:17', '2021-04-08'),
(15, 'FLORALE DAHLIA SEASON', 3, 1500000, 0, 'Thông thoáng dễ chịu, tạo vòng ngực tròn đầy và dễ dàng phối với trang phục mặc ngoài cổ rộng.', '13.jpg', 3, 3, 40, 1, '2021-04-08 07:55:17', NULL),
(16, 'FLORALE ROSE SEASON', 4, 1900000, 0, 'Phần dây lưng phía sau là ren hoa tạo nên vẻ đặc trưng của sản phẩm cắt cao làm rõ dáng chữ U giúp tăng độ bao phủ và ổn định khi mặc.', '14.jpg', 4, 4, 10, 1, '2021-04-08 07:55:17', NULL),
(17, 'FLORALE VIOLET SEASON', 5, 2100000, 0, 'Cho vẻ nữ tính sang trọng với sự nhẹ nhàng.', '15.jpg', 5, 5, 15, 1, '2021-04-08 07:55:17', NULL),
(18, 'SIGNATURE LACE SEASON', 6, 1100000, 0, 'Sử dụng French cup với mút đệm có thể tháo rời và tăng thêm độ che phủ ở mặt trước.', '16.jpg', 1, 6, 20, 1, '2021-04-08 07:55:17', NULL),
(19, 'MOROCCAN LEAF SEASON', 7, 1200000, 0, 'Những chiếc lá Morocco truyền cảm hứng cho những họa tiết thêu hình lá cùng lưới xuyên thấu và ren tinh tế với hình trang trí nổi độc đáo.', '17.jpg', 4, 7, 25, 1, '2021-04-08 07:55:17', '2021-04-08'),
(20, 'GO ALLROUND BRALETTE SEASON', 1, 1600000, 0, 'Kết hợp 2 lớp vải mềm mại giúp giữ chặt áo không bị xê dịch và hỗ trợ nâng tốt hơn, kiểu dáng dễ mặc và co giãn tốt.', '18.jpg', 3, 8, 20, 1, '2021-04-08 07:55:17', NULL),
(21, 'SLOGGI EVERYDAY SEASON', 2, 1400000, 0, 'Bản dây vai rông giúp giảm áp lực lên vai và dây vai không thể tháo rời giúp nâng ngực và giữ chặt áo không bị xê dịch.', '19.jpg', 6, 1, 15, 1, '2021-04-08 07:55:17', '2021-04-08'),
(22, 'AQUA EXOTIC BANDEAU SEASON', 3, 1200000, 0, 'Chiếc áo ngực của Aqua Exotic Bandeau mang đến giải pháp thời trang hoàn hảo, nếu bạn cần che khe ngực.', '20.jpg', 5, 2, 30, 1, '2021-04-08 07:55:17', NULL),
(23, 'Aqua leaf season 2', 1, 1200000, 0, 'Lớp chân ngực dài với độ ổn định ở mặt sau cộng với họa tiết thêu trên bầu áo và lớp chân ngực giữ được kiểu dáng mềm mại nữ tính.', '21.jpg', 2, 1, 20, 1, '2021-04-08 07:59:28', '2021-04-08'),
(24, 'SEXY CUSHION DELICATE SEASON 2', 2, 1300000, 0, 'Ren co giãn mềm mại mang họa tiết hoa Morocco ở mặt bên và bản lưng với ren họa tiết vỏ sò ở đường viên hỗ trợ bên dưới.', '22.jpg', 6, 2, 30, 1, '2021-04-08 07:59:28', '2021-04-08'),
(25, 'FLORALE DAHLIA SEASON 2', 3, 1500000, 0, 'Thông thoáng dễ chịu, tạo vòng ngực tròn đầy và dễ dàng phối với trang phục mặc ngoài cổ rộng.', '23.jpg', 3, 3, 40, 1, '2021-04-08 07:59:28', NULL),
(26, 'FLORALE ROSE SEASON 2', 4, 1900000, 0, 'Phần dây lưng phía sau là ren hoa tạo nên vẻ đặc trưng của sản phẩm cắt cao làm rõ dáng chữ U giúp tăng độ bao phủ và ổn định khi mặc.', '24.jpg', 2, 4, 10, 1, '2021-04-08 07:59:28', '2021-04-08'),
(27, 'FLORALE VIOLET SEASON 2', 5, 2100000, 0, 'Cho vẻ nữ tính sang trọng với sự nhẹ nhàng.', '25.jpg', 5, 5, 15, 1, '2021-04-08 07:59:28', NULL),
(28, 'SIGNATURE LACE SEASON 2', 6, 1100000, 0, 'Sử dụng French cup với mút đệm có thể tháo rời và tăng thêm độ che phủ ở mặt trước.', '26.jpg', 1, 6, 20, 1, '2021-04-08 07:59:28', NULL),
(29, 'MOROCCAN LEAF SEASON 2', 7, 1200000, 0, 'Những chiếc lá Morocco truyền cảm hứng cho những họa tiết thêu hình lá cùng lưới xuyên thấu và ren tinh tế với hình trang trí nổi độc đáo.', '27.jpg', 7, 7, 25, 1, '2021-04-08 07:59:28', '2021-04-08'),
(30, 'GO ALLROUND BRALETTE SEASON 2', 1, 1600000, 0, 'Kết hợp 2 lớp vải mềm mại giúp giữ chặt áo không bị xê dịch và hỗ trợ nâng tốt hơn, kiểu dáng dễ mặc và co giãn tốt.', '28.jpg', 7, 8, 20, 1, '2021-04-08 07:59:28', '2021-04-08'),
(31, 'SLOGGI EVERYDAY SEASON 2', 2, 1400000, 0, 'Bản dây vai rông giúp giảm áp lực lên vai và dây vai không thể tháo rời giúp nâng ngực và giữ chặt áo không bị xê dịch.', '29.jpg', 7, 1, 15, 1, '2021-04-08 07:59:28', '2021-04-08'),
(32, 'AQUA EXOTIC BANDEAU SEASON 2', 3, 1200000, 0, 'Chiếc áo ngực của Aqua Exotic Bandeau mang đến giải pháp thời trang hoàn hảo, nếu bạn cần che khe ngực.', '30.jpg', 2, 2, 30, 1, '2021-04-08 07:59:28', '2021-04-08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'One', '2021-03-30 07:32:52', NULL),
(2, 'M', '2021-03-30 07:32:52', NULL),
(3, 'L', '2021-03-30 07:32:52', NULL),
(4, 'XL', '2021-03-30 07:32:52', NULL),
(5, '70', '2021-03-30 07:32:52', NULL),
(6, '75', '2021-03-30 07:32:52', NULL),
(7, '80', '2021-03-30 07:32:52', NULL),
(8, '85', '2021-03-30 07:32:52', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin manager', 'admin@gmail.com', '$2y$10$rt3IT070OnuAf1W/uYsNgOyPx4FeZjtWjc3RpFdbsBAtO3BTNQ6ZS', 'N3iA6PE7O479eW1ZN3n1GmS6mzebgVldVS0XovlAUcwmyYAvtmeslDNLQR66', '2021-04-06 02:19:36', '2021-04-06');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Chỉ mục cho bảng `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `color_id` (`color_id`),
  ADD KEY `size_id` (`size_id`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `size` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
