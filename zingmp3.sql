-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 07, 2024 lúc 04:41 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `zingmp3`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `background` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `singer` varchar(255) NOT NULL,
  `pathSong` varchar(255) NOT NULL,
  `duration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `songs`
--

INSERT INTO `songs` (`id`, `background`, `name`, `singer`, `pathSong`, `duration`) VALUES
(1, './assets/img/songs/0.webp', 'Anh Đã Lạc Vào', 'Green, Đại Mèo Remix', './assets/music/list-song/0.mp3', '04:27'),
(4, './assets/img/songs/1.webp', 'Chạy Về Khóc Với Anh', 'Erik, Duzme Remix', './assets/music/list-song/1.mp3', '04:05'),
(5, './assets/img/songs/2.jpeg', 'Sẵn Sàng Yêu Em Đi Thôi', 'Woni, Minh Tú, Đại Mèo Remix', './assets/music/list-song/2.mp3', '03:51'),
(6, './assets/img/songs/3.webp', 'Gieo Quẻ', 'Hoàng Thuỳ Linh, ĐEN, Orinn Remix', './assets/music/list-song/3.mp3', '04:27'),
(7, './assets/img/songs/4.webp', 'Vui Lắm Nha', 'Hương Ly, Jombie, RIN Music Remix', './assets/music/list-song/4.m4a', '05:16'),
(8, './assets/img/songs/5.webp', 'Lưu Số Em Đi', 'Huỳnh Văn, V.P. Tiên, Đại Mèo Remix', './assets/music/list-song/5.m4a', '04:10'),
(9, './assets/img/songs/6.webp', 'Như Một Người Dưng', 'Nguyễn Thạc Bảo Ngọc, Remix', './assets/music/list-song/6.mp3', '05:05'),
(10, './assets/img/songs/7.webp', 'Ôm Nhiều Mộng Mơ', 'Phát Huy T4, Đại Mèo Remix', './assets/music/list-song/7.m4a', '03:16'),
(11, './assets/img/songs/8.jpg', 'Tình Yêu Ngủ Quên', 'Hoàng Tôn, LyHan, Orinn Remix', './assets/music/list-song/8.mp3', '04:27'),
(12, './assets/img/songs/9.webp', 'Không Bằng', 'Na, RIN Music Remix', './assets/music/list-song/9.m4a', '03:23'),
(13, './assets/img/songs/10.webp', 'Ai Chung Tình Được Mãi', 'Đinh Tùng Huy, ACV Remix', './assets/music/list-song/10.m4a', '03:55'),
(14, './assets/img/songs/11.webp', 'Cô Đơn Dành Cho Ai', 'NAL, LEE KEN, Orinn Remix', './assets/music/list-song/11.m4a', '04:45'),
(15, './assets/img/songs/12.webp', 'Ánh mắt ta chạm nhau', 'Ngô Lan Hương, Đại Mèo remix', './assets/music/list-song/12.m4a', '06:01'),
(16, './assets/img/songs/13.webp', '2 Phút Hơn', 'Phao, KAIZ Remix', './assets/music/list-song/13.m4a', '05:02'),
(17, './assets/img/songs/14.webp', 'Là Ai Từ Bỏ Là Ai Vô Tình', 'Hương Ly, Jombie (G5R), RIN Music Remix', './assets/music/list-song/14.m4a', '03:25'),
(18, './assets/img/songs/2.jpeg', 'Yêu Đừng Sợ Đau', 'Ngô Lan Hương, Cukak Remix', './assets/music/list-song/15.m4a', '03:51'),
(19, './assets/img/songs/16.jpg', 'id 2022', 'W/n ft. 267', './assets/music/list-song/16.mp3', '04:03'),
(20, './assets/img/songs/17.jpg', 'id T41104', 'W/n ft. 267', './assets/music/list-song/17.mp3', '03:47'),
(21, './assets/img/songs/18.jpg', 'Lệ lưu ly', 'Vũ Phụng Tiên - DT Tập Rap', './assets/music/list-song/18.mp3', '03:45'),
(22, './assets/img/songs/19.jpg', 'Em Không Khóc', 'buitruonglinh ft vuphungtien', './assets/music/list-song/19.mp3', '04:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(10) NOT NULL,
  `lastName` varchar(10) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userId`, `firstName`, `lastName`, `email`, `password`) VALUES
(6, 'a', 'a', 'a@gmail.com', 'a');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
