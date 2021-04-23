-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2020 lúc 12:05 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php0720e_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'Tên danh mục',
  `type` tinyint(3) DEFAULT 0 COMMENT 'Loại danh mục: 0 - Product, 1 - News',
  `avatar` varchar(100) DEFAULT NULL COMMENT 'Tên file ảnh danh mục',
  `description` text DEFAULT NULL COMMENT 'Mô tả chi tiết cho danh mục',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo danh mục',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `type`, `avatar`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 0, '1606218671-laptop-vien-man-hinh-mong-co-nhung-uu-va-nhuoc-diem-gi--6.jpg', '<p>Gọn, nhẹ, gi&aacute; cả hợp l&iacute;</p>\r\n', 0, '2020-11-17 12:07:24', '2020-11-25 22:26:22'),
(2, 'Máy tính bảng', 0, '1606218687-download.jpg', '<p>Tinh tế từng g&oacute;c nh&igrave;n</p>\r\n', 1, '2020-11-17 12:08:00', '2020-11-24 18:53:04'),
(3, 'Điện thoại', 0, '1606218695-cach-chup-anh-dep-bang-dien-thoai-android-3.jpg', '<p>Bắt trọn từng khoảnh khắc</p>\r\n', 1, '2020-11-24 11:48:41', '2020-11-24 18:53:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'Id của danh mục mà tin tức thuộc về, là khóa ngoại liên kết với bảng categories',
  `title` varchar(100) NOT NULL COMMENT 'Tiêu đề tin tức',
  `summary` varchar(100) DEFAULT NULL COMMENT 'Mô tả ngắn cho tin tức',
  `avatar` varchar(100) DEFAULT NULL COMMENT 'Tên file ảnh tin tức',
  `content` text DEFAULT NULL COMMENT 'Mô tả chi tiết cho sản phẩm',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `seo_title` varchar(100) DEFAULT NULL COMMENT 'Từ khóa seo cho title',
  `seo_description` varchar(100) DEFAULT NULL COMMENT 'Từ khóa seo cho phần mô tả',
  `seo_keywords` varchar(100) DEFAULT NULL COMMENT 'Các từ khóa seo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'Id của user trong trường hợp đã login và đặt hàng, là khóa ngoại liên kết với bảng users',
  `fullname` varchar(100) DEFAULT NULL COMMENT 'Tên khách hàng',
  `address` varchar(100) DEFAULT NULL COMMENT 'Địa chỉ khách hàng',
  `mobile` int(11) DEFAULT NULL COMMENT 'SĐT khách hàng',
  `email` varchar(100) DEFAULT NULL COMMENT 'Email khách hàng',
  `note` text DEFAULT NULL COMMENT 'Ghi chú từ khách hàng',
  `price_total` int(11) DEFAULT NULL COMMENT 'Tổng giá trị đơn hàng',
  `payment_status` tinyint(2) DEFAULT NULL COMMENT 'Trạng thái đơn hàng: 0 - Chưa thành toán, 1 - Đã thành toán',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo đơn',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `fullname`, `address`, `mobile`, `email`, `note`, `price_total`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'sargqrg', 'aerghwethw3', 0, '234523452346', 'w4gqerg', NULL, 0, '2020-12-08 13:14:11', NULL),
(2, NULL, 'sargqrg', 'aerghwethw3', 0, '234523452346', 'w4gqerg', NULL, 0, '2020-12-08 13:14:44', NULL),
(3, NULL, 'sargqrg', 'aerghwethw3', 0, '234523452346', 'w4gqerg', 58001203, 0, '2020-12-08 13:15:01', NULL),
(4, NULL, 'sargqrg', 'aerghwethw3', 0, '234523452346', 'w4gqerg', 58001203, 0, '2020-12-08 13:16:49', NULL),
(5, NULL, 'sargqrg', 'aerghwethw3', 0, '234523452346', 'w4gqerg', 58001203, 0, '2020-12-08 13:17:15', NULL),
(6, NULL, 'sargqrg', 'aerghwethw3', 0, '234523452346', 'w4gqerg', 58001203, 0, '2020-12-08 13:19:06', NULL),
(7, NULL, 'sargqrg', 'aerghwethw3', 0, '234523452346', 'w4gqerg', 58001203, 0, '2020-12-08 13:20:27', NULL),
(8, NULL, 'sargqrg', 'aerghwethw3', 0, '234523452346', 'w4gqerg', 58001203, 0, '2020-12-08 13:20:52', NULL),
(9, NULL, 'awefwef', 'AEfaweawegwegwaeg', 0, '51251235', 'arwgar', 58001203, 0, '2020-12-08 13:21:31', NULL),
(10, NULL, 'awefwef', 'AEfaweawegwegwaeg', 0, '51251235', 'arwgar', 58001203, 0, '2020-12-08 13:22:59', NULL),
(11, NULL, 'Không Gian Xanh', 'Thiết kế - Quảng cáo', 0, '25125123515', 'segfaew', 58001203, 0, '2020-12-08 13:23:15', NULL),
(12, NULL, 'aereq', 'Thiết kế - Quảng cáo', 0, '12341234', 'sẻg', 48500600, 0, '2020-12-08 13:56:56', NULL),
(13, NULL, 'ưăefqwefq', 'Thiết kế - Quảng cáo', 0, '23412341234', 'ẳqewf', 48500600, 0, '2020-12-08 13:57:35', NULL),
(14, NULL, 'ưăefqwefq', 'Thiết kế - Quảng cáo', 0, '23412341234', 'ẳqewf', 48500600, 0, '2020-12-08 13:59:45', NULL),
(15, NULL, 'sadADWFQEWF', 'EWFQWEFQWE', 2147483647, 'vuthoutt@gmail.com', 'AWEGAWRAF', 25000000, 0, '2020-12-14 06:19:52', NULL),
(16, NULL, 'Không Gian Xanh', 'Thiết kế - Quảng cáo', 2147483647, 'kobiet123u@gmail.com', 'qefEWFqef', 25000000, 0, '2020-12-14 06:20:30', NULL),
(17, NULL, 'Không Gian Xanh', 'Thiết kế - Quảng cáo', 2147483647, 'ambition.224466@gmail.com', 'aergerg', 9500603, 0, '2020-12-17 10:16:38', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) DEFAULT NULL COMMENT 'Id của order tương ứng, là khóa ngoại liên kết với bảng orders',
  `product_id` int(11) DEFAULT NULL COMMENT 'Id của product tương ứng, là khóa ngoại liên kết với bảng products',
  `price` int(11) DEFAULT NULL COMMENT 'Giá sản phẩm đã đặt',
  `quantity` int(11) DEFAULT NULL COMMENT 'Số sản phẩm đã đặt'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `price`, `quantity`) VALUES
(15, 11, 25000000, 1),
(16, 11, 25000000, 1),
(17, 9, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL COMMENT 'Id của danh mục mà sản phẩm thuộc về, là khóa ngoại liên kết với bảng categories',
  `title` varchar(100) DEFAULT NULL COMMENT 'Tên sản phẩm',
  `avatar` varchar(100) DEFAULT NULL COMMENT 'Tên file ảnh sản phẩm',
  `price` int(11) DEFAULT NULL COMMENT 'Giá sản phẩm',
  `amount` int(11) DEFAULT NULL COMMENT 'Số lượng sản phẩm trong kho',
  `summary` varchar(100) DEFAULT NULL COMMENT 'Mô tả ngắn cho sản phẩm',
  `content` text DEFAULT NULL COMMENT 'Mô tả chi tiết cho sản phẩm',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `seo_title` varchar(100) DEFAULT NULL COMMENT 'Từ khóa seo cho title',
  `seo_description` varchar(100) DEFAULT NULL COMMENT 'Từ khóa seo cho phần mô tả',
  `seo_keywords` varchar(100) DEFAULT NULL COMMENT 'Các từ khóa seo',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `avatar`, `price`, `amount`, `summary`, `content`, `status`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(8, 1, 'Laptop Dell', '1606218920-product-laptop-vien-man-hinh-mong-co-nhung-uu-va-nhuoc-diem-gi--6.jpg', 16500000, 1, 'laptop xách tay', '<p>H&agrave;ng nội địa</p>\r\n', 1, '', '', '', '2020-11-24 11:55:20', NULL),
(9, 2, 'Ipad 3', '1606218989-product-download.jpg', 9500603, 2, 'Ipad Pro', '<p>H&agrave;ng x&aacute;ch tay</p>\r\n', 1, '', '', '', '2020-11-24 11:56:29', NULL),
(10, 3, 'SamSung Galaxy Note20', '1606219152-product-cach-chup-anh-dep-bang-dien-thoai-android-3.jpg', 23500600, 3, 'SamSung Korea', '<p>Lướt mu&ocirc;n nơi</p>\r\n', 1, '', '', '', '2020-11-24 11:59:12', NULL),
(11, 1, 'Ihone X', '1606219203-product-103273518_1251998591808338_5414230872897628880_n.jpg', 25000000, 12, 'Apple Shop', '<p>T&ocirc;n vinh b&agrave;n tay người sử dụng</p>\r\n', 1, '', '', '', '2020-11-24 12:00:03', NULL),
(12, 3, 'anh duc', '1608200751-product-83226817_559588871369169_9098698098550997251_n.jpg', 2147483647, 2, 'hvfyktgchv', '', 1, '', '', '', '2020-12-17 10:25:51', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(100) DEFAULT NULL COMMENT 'Mật khẩu đăng nhập',
  `first_name` varchar(100) DEFAULT NULL COMMENT 'Fist name',
  `last_name` varchar(100) DEFAULT NULL COMMENT 'Last name',
  `phone` int(11) DEFAULT NULL COMMENT 'SĐT user',
  `address` varchar(100) DEFAULT NULL COMMENT 'Địa chỉ user',
  `email` varchar(100) DEFAULT NULL COMMENT 'Email của user',
  `avatar` varchar(100) DEFAULT NULL COMMENT 'File ảnh đại diện',
  `jobs` varchar(100) DEFAULT NULL COMMENT 'Nghề nghiệp',
  `last_login` datetime DEFAULT NULL COMMENT 'Lần đăng nhập gần đây nhất',
  `facebook` varchar(100) DEFAULT NULL COMMENT 'Link facebook',
  `status` tinyint(3) DEFAULT 0 COMMENT 'Trạng thái danh mục: 0 - Inactive, 1 - Active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Ngày tạo',
  `updated_at` datetime DEFAULT NULL COMMENT 'Ngày cập nhật cuối'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `phone`, `address`, `email`, `avatar`, `jobs`, `last_login`, `facebook`, `status`, `created_at`, `updated_at`) VALUES
(1, 'vietanh@gmail.com', '0a2c7a10b6f1a10ac9e8d1bf5f24be83', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-11-17 11:51:26', NULL),
(2, 'vietanh123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-11-23 16:05:42', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
