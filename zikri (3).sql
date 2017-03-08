-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2017 at 01:20 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zikri`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
`id_anggota` int(3) NOT NULL,
  `id_grup_pendaki` int(3) NOT NULL,
  `kota_id` int(3) NOT NULL,
  `no_identitas` int(16) NOT NULL,
  `nama_anggota` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `level_anggota` enum('Anggota','Ketua') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=220 ;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_grup_pendaki`, `kota_id`, `no_identitas`, `nama_anggota`, `alamat`, `email`, `no_telp`, `level_anggota`, `created_at`) VALUES
(10, 3, 51, 2147483647, 'Ahmad Djunaedi', 'Bekasi', 'ahmad@gmail.com', 2147483647, 'Ketua', '2016-10-06 18:05:08'),
(11, 3, 47, 2147483647, 'Zikri', 'Kp. Utan', 'zikri@gmail.com', 909090, 'Anggota', '2016-10-06 18:05:08'),
(12, 4, 77, 999999, 'Bedul', 'Condet', 'bedul@gmail.com', 98989, 'Ketua', '2016-10-06 18:06:25'),
(13, 4, 32, 989789, 'Simon', 'Kp. Canggih', 'simon@gmail.com', 983240, 'Anggota', '2016-10-06 18:06:25'),
(14, 5, 59, 981729, 'budi', 'Gang Kayu', 'budi@yahoo.com', 1029, 'Ketua', '2016-10-06 18:09:15'),
(15, 5, 23, 102983097, 'Tika', 'Kampungan Sawah', 'tika@rocketmail.com', 2147483647, 'Anggota', '2016-10-06 18:09:15'),
(16, 6, 163, 2147483647, 'wiro', 'jl. gandaria 1 rt 003 / rw 010', 'wira_143@gmail.com', 2147483647, 'Ketua', '2016-10-11 04:19:31'),
(17, 6, 72, 2147483647, 'wiwik', 'jl. rawa bebek rt 09/rw002', 'gagagag@hotmail.com', 2147483647, 'Anggota', '2016-10-11 04:19:31'),
(18, 7, 27, 123, 'asd', 'asfdf', 'riga@yahoo.com', 111, 'Ketua', '2016-10-13 06:39:53'),
(19, 7, 36, 125125, 'sadasd', 'dshsdfh', 'bedul@gmail.com', 513513, 'Anggota', '2016-10-13 06:39:53'),
(20, 7, 34, 123124, 'asadfh', 'dafhsfh', 'dd@gmail.com.111', 111, 'Anggota', '2016-10-13 06:39:53'),
(21, 7, 23, 123, 'nama1', 'asd', 'riga@yahoo.com', 513513, 'Anggota', '2016-10-13 06:39:53'),
(22, 7, 19, 2147483647, 'riga', 'asd', 'riga@yahoo.com', 513513, 'Anggota', '2016-10-13 06:39:53'),
(29, 8, 10, 111, 'nama1', 'alamat1', '1@gmail.com', 111, 'Ketua', '2016-10-13 06:50:25'),
(30, 8, 17, 111, 'nama1', 'asd', 'dd@gmail.com.111', 513513, 'Anggota', '2016-10-13 06:50:25'),
(31, 8, 45, 981729, 'Bedul', 'kp.utan', 'ahmad@gmail.com', 2147483647, 'Anggota', '2016-10-13 06:50:25'),
(32, 8, 5, 2147483647, 'Bedul', 'Bekasi', 'dd@gmail.com.111', 65656, 'Anggota', '2016-10-13 06:50:25'),
(33, 8, 2, 981729, 'riga', 'alamat1', 'riga@yahoo.com', 111, 'Anggota', '2016-10-13 06:50:25'),
(34, 8, 3, 12345, 'nama1', 'asd', 'riga@yahoo.com', 513513, 'Anggota', '2016-10-13 06:50:25'),
(35, 8, 0, 0, '', '', '', 0, '', '2016-10-13 06:50:25'),
(36, 8, 0, 0, '', '', '', 0, '', '2016-10-13 06:50:25'),
(37, 8, 0, 0, '', '', '', 0, '', '2016-10-13 06:50:25'),
(38, 8, 0, 0, '', '', '', 0, '', '2016-10-13 06:50:25'),
(39, 8, 0, 0, '', '', '', 0, '', '2016-10-13 06:50:25'),
(40, 9, 2, 0, 'alsk', 'aslkdj', '1@gmail.com', 0, 'Ketua', '2016-11-08 04:55:29'),
(41, 9, 3, 0, 'askjdh', 'aksjdh', '1@gmail.com', 513513, 'Anggota', '2016-11-08 04:55:29'),
(42, 9, 1, 12345, 'Ahmad Djunaedi', 'asd', 'asd@gmail.com', 1, 'Anggota', '2016-11-08 04:55:29'),
(43, 9, 0, 0, '', '', '', 0, '', '2016-11-08 04:55:29'),
(44, 9, 0, 0, '', '', '', 0, '', '2016-11-08 04:55:29'),
(45, 9, 0, 0, '', '', '', 0, '', '2016-11-08 04:55:29'),
(46, 9, 0, 0, '', '', '', 0, '', '2016-11-08 04:55:29'),
(47, 9, 0, 0, '', '', '', 0, '', '2016-11-08 04:55:29'),
(48, 9, 0, 0, '', '', '', 0, '', '2016-11-08 04:55:29'),
(49, 9, 0, 0, '', '', '', 0, '', '2016-11-08 04:55:29'),
(50, 10, 2, 111, 'nama1', 'alamat1', '1@gmail.com', 111, 'Ketua', '2016-11-08 05:03:00'),
(51, 10, 2, 2, 'nama2', 'alamat2', '2@gmail.com', 4, 'Anggota', '2016-11-08 05:03:00'),
(52, 10, 1, 3, 'nama3', 'alamat3', 'riga@yahoo.com', 111, 'Anggota', '2016-11-08 05:03:00'),
(53, 10, 0, 0, '', '', '', 0, '', '2016-11-08 05:03:00'),
(54, 10, 0, 0, '', '', '', 0, '', '2016-11-08 05:03:00'),
(55, 10, 0, 0, '', '', '', 0, '', '2016-11-08 05:03:00'),
(56, 10, 0, 0, '', '', '', 0, '', '2016-11-08 05:03:00'),
(57, 10, 0, 0, '', '', '', 0, '', '2016-11-08 05:03:00'),
(58, 10, 0, 0, '', '', '', 0, '', '2016-11-08 05:03:00'),
(59, 10, 0, 0, '', '', '', 0, '', '2016-11-08 05:03:00'),
(60, 11, 1, 111, 'nama1', 'alamat1', '1@gmail.com', 111, 'Ketua', '2016-12-11 05:38:22'),
(61, 11, 1, 123, 'nama2', 'alamat2', '2@gmail.com', 123, 'Anggota', '2016-12-11 05:38:22'),
(62, 11, 1, 123, 'nama3', 'alamat3', '3@gmail.com', 333, 'Anggota', '2016-12-11 05:38:22'),
(63, 11, 0, 0, '', '', '', 0, '', '2016-12-11 05:38:22'),
(64, 11, 0, 0, '', '', '', 0, '', '2016-12-11 05:38:22'),
(65, 11, 0, 0, '', '', '', 0, '', '2016-12-11 05:38:22'),
(66, 11, 0, 0, '', '', '', 0, '', '2016-12-11 05:38:22'),
(67, 11, 0, 0, '', '', '', 0, '', '2016-12-11 05:38:22'),
(68, 11, 0, 0, '', '', '', 0, '', '2016-12-11 05:38:22'),
(69, 11, 0, 0, '', '', '', 0, '', '2016-12-11 05:38:22'),
(70, 12, 1, 111, 'nama1', 'alamat1', '1@gmail.com', 111, 'Ketua', '2016-12-11 05:48:21'),
(71, 12, 1, 123, 'nama2', 'alamat2', '2@gmail.com', 123, 'Anggota', '2016-12-11 05:48:21'),
(72, 12, 1, 123, 'nama3', 'alamat3', '3@gmail.com', 333, 'Anggota', '2016-12-11 05:48:21'),
(73, 12, 0, 0, '', '', '', 0, '', '2016-12-11 05:48:21'),
(74, 12, 0, 0, '', '', '', 0, '', '2016-12-11 05:48:21'),
(75, 12, 0, 0, '', '', '', 0, '', '2016-12-11 05:48:21'),
(76, 12, 0, 0, '', '', '', 0, '', '2016-12-11 05:48:21'),
(77, 12, 0, 0, '', '', '', 0, '', '2016-12-11 05:48:21'),
(78, 12, 0, 0, '', '', '', 0, '', '2016-12-11 05:48:21'),
(79, 12, 0, 0, '', '', '', 0, '', '2016-12-11 05:48:21'),
(80, 13, 2, 111, 'nama1', 'alamat1', '1@gmail.com', 111, 'Ketua', '2016-12-13 10:05:45'),
(81, 13, 1, 111, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 10:05:45'),
(82, 13, 1, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 10:05:45'),
(83, 13, 0, 0, '', '', '', 0, '', '2016-12-13 10:05:45'),
(84, 13, 0, 0, '', '', '', 0, '', '2016-12-13 10:05:45'),
(85, 13, 0, 0, '', '', '', 0, '', '2016-12-13 10:05:45'),
(86, 13, 0, 0, '', '', '', 0, '', '2016-12-13 10:05:45'),
(87, 13, 0, 0, '', '', '', 0, '', '2016-12-13 10:05:45'),
(88, 13, 0, 0, '', '', '', 0, '', '2016-12-13 10:05:45'),
(89, 13, 0, 0, '', '', '', 0, '', '2016-12-13 10:05:45'),
(90, 14, 2, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 10:07:09'),
(91, 14, 1, 2, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 10:07:09'),
(92, 14, 1, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 10:07:09'),
(93, 14, 0, 0, '', '', '', 0, '', '2016-12-13 10:07:09'),
(94, 14, 0, 0, '', '', '', 0, '', '2016-12-13 10:07:09'),
(95, 14, 0, 0, '', '', '', 0, '', '2016-12-13 10:07:09'),
(96, 14, 0, 0, '', '', '', 0, '', '2016-12-13 10:07:09'),
(97, 14, 0, 0, '', '', '', 0, '', '2016-12-13 10:07:09'),
(98, 14, 0, 0, '', '', '', 0, '', '2016-12-13 10:07:09'),
(99, 14, 0, 0, '', '', '', 0, '', '2016-12-13 10:07:09'),
(100, 15, 1, 123, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 10:16:15'),
(101, 15, 1, 2, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 10:16:15'),
(102, 15, 1, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 10:16:15'),
(103, 15, 0, 0, '', '', '', 0, '', '2016-12-13 10:16:15'),
(104, 15, 0, 0, '', '', '', 0, '', '2016-12-13 10:16:15'),
(105, 15, 0, 0, '', '', '', 0, '', '2016-12-13 10:16:15'),
(106, 15, 0, 0, '', '', '', 0, '', '2016-12-13 10:16:15'),
(107, 15, 0, 0, '', '', '', 0, '', '2016-12-13 10:16:15'),
(108, 15, 0, 0, '', '', '', 0, '', '2016-12-13 10:16:15'),
(109, 15, 0, 0, '', '', '', 0, '', '2016-12-13 10:16:15'),
(110, 16, 1, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 10:17:55'),
(111, 16, 1, 2, 'nama2', 'alamat2', '2@gmm', 2, 'Anggota', '2016-12-13 10:17:55'),
(112, 16, 1, 3, 'nama3', 'alamat3', '3@gmn', 3, 'Anggota', '2016-12-13 10:17:55'),
(113, 16, 0, 0, '', '', '', 0, '', '2016-12-13 10:17:55'),
(114, 16, 0, 0, '', '', '', 0, '', '2016-12-13 10:17:55'),
(115, 16, 0, 0, '', '', '', 0, '', '2016-12-13 10:17:55'),
(116, 16, 0, 0, '', '', '', 0, '', '2016-12-13 10:17:55'),
(117, 16, 0, 0, '', '', '', 0, '', '2016-12-13 10:17:55'),
(118, 16, 0, 0, '', '', '', 0, '', '2016-12-13 10:17:55'),
(119, 16, 0, 0, '', '', '', 0, '', '2016-12-13 10:17:55'),
(120, 17, 1, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 10:22:11'),
(121, 17, 1, 2, 'nama2', 'alamat2', '2@gmm', 2, 'Anggota', '2016-12-13 10:22:11'),
(122, 17, 1, 3, 'nama3', 'alamat3', '3@gll', 3, 'Anggota', '2016-12-13 10:22:11'),
(123, 17, 0, 0, '', '', '', 0, '', '2016-12-13 10:22:11'),
(124, 17, 0, 0, '', '', '', 0, '', '2016-12-13 10:22:11'),
(125, 17, 0, 0, '', '', '', 0, '', '2016-12-13 10:22:11'),
(126, 17, 0, 0, '', '', '', 0, '', '2016-12-13 10:22:11'),
(127, 17, 0, 0, '', '', '', 0, '', '2016-12-13 10:22:11'),
(128, 17, 0, 0, '', '', '', 0, '', '2016-12-13 10:22:11'),
(129, 17, 0, 0, '', '', '', 0, '', '2016-12-13 10:22:11'),
(130, 18, 1, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 10:23:48'),
(131, 18, 1, 2, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 10:23:48'),
(132, 18, 1, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 10:23:48'),
(133, 18, 0, 0, '', '', '', 0, '', '2016-12-13 10:23:48'),
(134, 18, 0, 0, '', '', '', 0, '', '2016-12-13 10:23:48'),
(135, 18, 0, 0, '', '', '', 0, '', '2016-12-13 10:23:48'),
(136, 18, 0, 0, '', '', '', 0, '', '2016-12-13 10:23:48'),
(137, 18, 0, 0, '', '', '', 0, '', '2016-12-13 10:23:48'),
(138, 18, 0, 0, '', '', '', 0, '', '2016-12-13 10:23:48'),
(139, 18, 0, 0, '', '', '', 0, '', '2016-12-13 10:23:48'),
(140, 19, 57, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 10:42:46'),
(141, 19, 77, 2, 'nama2', 'alamat2', '2@gml', 2, 'Anggota', '2016-12-13 10:42:46'),
(142, 19, 167, 3, 'nama3', 'alamat3', '3@nnmm', 3, 'Anggota', '2016-12-13 10:42:46'),
(143, 19, 0, 0, '', '', '', 0, '', '2016-12-13 10:42:46'),
(144, 19, 0, 0, '', '', '', 0, '', '2016-12-13 10:42:46'),
(145, 19, 0, 0, '', '', '', 0, '', '2016-12-13 10:42:46'),
(146, 19, 0, 0, '', '', '', 0, '', '2016-12-13 10:42:46'),
(147, 19, 0, 0, '', '', '', 0, '', '2016-12-13 10:42:46'),
(148, 19, 0, 0, '', '', '', 0, '', '2016-12-13 10:42:46'),
(149, 19, 0, 0, '', '', '', 0, '', '2016-12-13 10:42:46'),
(150, 20, 1, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 10:47:53'),
(151, 20, 1, 2, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 10:47:53'),
(152, 20, 58, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 10:47:53'),
(153, 20, 0, 0, '', '', '', 0, '', '2016-12-13 10:47:53'),
(154, 20, 0, 0, '', '', '', 0, '', '2016-12-13 10:47:53'),
(155, 20, 0, 0, '', '', '', 0, '', '2016-12-13 10:47:53'),
(156, 20, 0, 0, '', '', '', 0, '', '2016-12-13 10:47:53'),
(157, 20, 0, 0, '', '', '', 0, '', '2016-12-13 10:47:53'),
(158, 20, 0, 0, '', '', '', 0, '', '2016-12-13 10:47:53'),
(159, 20, 0, 0, '', '', '', 0, '', '2016-12-13 10:47:53'),
(160, 21, 1, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 10:48:02'),
(161, 21, 1, 2, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 10:48:02'),
(162, 21, 58, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 10:48:02'),
(163, 21, 0, 0, '', '', '', 0, '', '2016-12-13 10:48:02'),
(164, 21, 0, 0, '', '', '', 0, '', '2016-12-13 10:48:02'),
(165, 21, 0, 0, '', '', '', 0, '', '2016-12-13 10:48:02'),
(166, 21, 0, 0, '', '', '', 0, '', '2016-12-13 10:48:02'),
(167, 21, 0, 0, '', '', '', 0, '', '2016-12-13 10:48:02'),
(168, 21, 0, 0, '', '', '', 0, '', '2016-12-13 10:48:02'),
(169, 21, 0, 0, '', '', '', 0, '', '2016-12-13 10:48:02'),
(170, 22, 3, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 10:59:30'),
(171, 22, 26, 2, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 10:59:30'),
(172, 22, 26, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 10:59:30'),
(173, 22, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:30'),
(174, 22, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:30'),
(175, 22, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:30'),
(176, 22, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:30'),
(177, 22, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:30'),
(178, 22, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:30'),
(179, 22, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:30'),
(180, 23, 3, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 10:59:40'),
(181, 23, 26, 2, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 10:59:40'),
(182, 23, 26, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 10:59:40'),
(183, 23, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:40'),
(184, 23, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:40'),
(185, 23, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:40'),
(186, 23, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:40'),
(187, 23, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:40'),
(188, 23, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:40'),
(189, 23, 0, 0, '', '', '', 0, '', '2016-12-13 10:59:40'),
(190, 24, 25, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 11:02:26'),
(191, 24, 2, 2, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 11:02:26'),
(192, 24, 270, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 11:02:26'),
(193, 24, 0, 0, '', '', '', 0, '', '2016-12-13 11:02:26'),
(194, 24, 0, 0, '', '', '', 0, '', '2016-12-13 11:02:26'),
(195, 24, 0, 0, '', '', '', 0, '', '2016-12-13 11:02:26'),
(196, 24, 0, 0, '', '', '', 0, '', '2016-12-13 11:02:26'),
(197, 24, 0, 0, '', '', '', 0, '', '2016-12-13 11:02:26'),
(198, 24, 0, 0, '', '', '', 0, '', '2016-12-13 11:02:26'),
(199, 24, 0, 0, '', '', '', 0, '', '2016-12-13 11:02:26'),
(200, 25, 25, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 11:23:23'),
(201, 25, 24, 2, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 11:23:23'),
(202, 25, 2, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 11:23:23'),
(203, 25, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:23'),
(204, 25, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:23'),
(205, 25, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:23'),
(206, 25, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:23'),
(207, 25, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:23'),
(208, 25, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:23'),
(209, 25, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:23'),
(210, 26, 25, 1, 'nama1', 'alamat1', '1@gmail.com', 1, 'Ketua', '2016-12-13 11:23:53'),
(211, 26, 24, 2, 'nama2', 'alamat2', '2@gmail.com', 2, 'Anggota', '2016-12-13 11:23:53'),
(212, 26, 2, 3, 'nama3', 'alamat3', '3@gmail.com', 3, 'Anggota', '2016-12-13 11:23:53'),
(213, 26, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:53'),
(214, 26, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:53'),
(215, 26, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:53'),
(216, 26, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:53'),
(217, 26, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:53'),
(218, 26, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:53'),
(219, 26, 0, 0, '', '', '', 0, '', '2016-12-13 11:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
`id_berita` int(3) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi`, `gambar`, `created_at`) VALUES
(4, 'Yeah update', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Koala.jpg', '2016-11-23 05:55:11'),
(5, 'Yuhu', '<b>Lorem ipsum dolor sit amet</b>, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Chrysanthemum.jpg', '2016-11-23 05:55:36'),
(6, 'update lagi ', '<p><b><i><u><small></small></u></i></b>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<b><i><u><small></small></u></i></b><br></p>', 'Jellyfish.jpg', '2016-11-23 05:54:34'),
(7, 'Tambah Berita', '<p><b><i>Lorem ipsum</i></b> dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br></p>', 'Tulips.jpg', '2016-11-23 05:54:19'),
(8, 'Tambah Lagi', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, <b>sunt in culpa qui officia deserunt mollit anim id est laborum.</b><br></p>', 'Penguins.jpg', '2016-11-23 05:54:02'),
(9, 'Add', '<p>Add?</p>', 'Desert1.jpg', '2016-12-10 16:58:45');

-- --------------------------------------------------------

--
-- Table structure for table `boking`
--

CREATE TABLE IF NOT EXISTS `boking` (
`id_boking` int(3) NOT NULL,
  `kode_boking` varchar(25) NOT NULL,
  `id_jadwal_pendakian` int(3) NOT NULL,
  `id_grup_pendaki` int(3) NOT NULL,
  `total_pendaki` int(3) NOT NULL,
  `tgl_boking` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status` varchar(25) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `boking`
--

INSERT INTO `boking` (`id_boking`, `kode_boking`, `id_jadwal_pendakian`, `id_grup_pendaki`, `total_pendaki`, `tgl_boking`, `total_harga`, `status`, `create_at`) VALUES
(7, 'S-NgQOI5', 9, 4, 3, '2016-10-29', 10000, 'Boking Valid', '2016-10-19 00:51:09'),
(8, 'C-Q9Oylz', 1, 5, 3, '2016-10-27', 10000, 'Boking Valid', '2016-10-06 18:15:23'),
(9, 'S-xFU8Zk', 9, 6, 3, '2016-11-10', 10000, 'Boking Valid', '2016-10-11 04:24:26'),
(10, 'P-NbH1rX', 6, 8, 3, '2016-10-28', 10000, 'Boking Valid', '2016-10-20 08:28:48'),
(11, 'C-vuoAg2', 2, 8, 3, '2016-10-07', 10000, 'Boking Valid', '2016-11-21 08:38:36'),
(12, 'S-f87Wob', 12, 10, 3, '2016-11-23', 240000, 'Boking Tidak Valid', '2016-11-24 09:50:52'),
(13, 'S-J1bzBf', 9, 3, 2, '2016-11-24', 80, 'Boking Valid', '2016-11-23 08:18:00'),
(14, 'S-DhobRs', 9, 10, 3, '2016-11-26', 120, 'Boking Valid', '2016-11-24 15:52:51'),
(15, 'S-G9PwMT', 15, 6, 2, '2016-11-27', 54000, 'Boking Valid', '2016-11-27 06:55:40'),
(16, 'C-zVcOwZ', 13, 6, 2, '2016-11-27', 54000, 'Pending', '2016-11-29 06:01:41'),
(17, 'S-6vwGuE', 15, 9, 1, '0000-00-00', 27000, 'Pending', '2016-12-10 16:36:37'),
(18, 'S-5FKwaX', 15, 7, 5, '0000-00-00', 135000, 'Pending', '2016-12-10 16:39:18'),
(19, 'S-EuzG83', 15, 4, 2, '0000-00-00', 54000, 'Pending', '2016-12-10 16:40:17'),
(20, 'S-6vfCot', 15, 3, 2, '2016-12-10', 54000, 'Boking Tidak Valid', '2016-12-10 17:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `grup_pendaki`
--

CREATE TABLE IF NOT EXISTS `grup_pendaki` (
`id_grup_pendaki` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `nama_grup` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `grup_pendaki`
--

INSERT INTO `grup_pendaki` (`id_grup_pendaki`, `id_user`, `nama_grup`, `created_at`) VALUES
(3, 12, '404 Not Found', '2016-10-06 18:05:08'),
(4, 12, 'Wara wiri', '2016-10-06 18:06:25'),
(5, 13, 'Ajag ijig', '2016-10-06 18:09:15'),
(6, 14, 'jaya baya', '2016-10-11 04:19:31'),
(7, 12, 'iya iya', '2016-10-13 06:39:53'),
(8, 12, 'lkajfds', '2016-10-13 06:50:25'),
(9, 12, 'laskj', '2016-11-08 04:55:29'),
(10, 12, 'black', '2016-11-08 05:03:00'),
(11, 12, 'asdasd', '2016-12-11 05:38:22'),
(12, 12, 'asdasd', '2016-12-11 05:48:21'),
(13, 23, 'Grup', '2016-12-13 10:05:45'),
(14, 23, 'Nama', '2016-12-13 10:07:09'),
(15, 23, 'Weh weh', '2016-12-13 10:16:15'),
(16, 23, 'Wak wak', '2016-12-13 10:17:55'),
(17, 23, 'wewe', '2016-12-13 10:22:11'),
(18, 23, 'bisa', '2016-12-13 10:23:48'),
(19, 23, 'wew', '2016-12-13 10:42:46'),
(20, 23, 'unyuuwevwev', '2016-12-13 10:47:52'),
(21, 23, 'unyuuwevwev', '2016-12-13 10:48:01'),
(22, 12, 'why', '2016-12-13 10:59:30'),
(23, 12, 'why', '2016-12-13 10:59:40'),
(24, 12, 'hem', '2016-12-13 11:02:26'),
(25, 12, 'ppp', '2016-12-13 11:23:23'),
(26, 12, 'ppp', '2016-12-13 11:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `id_jabatan` int(3) NOT NULL,
  `nama_jabatan` varchar(35) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `created_at`) VALUES
(1, 'Petugas Perijinan Pendakian', '2016-11-17 05:12:10'),
(2, 'Kepala Balai Besar TNGGP', '2016-11-17 05:10:23');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pendakian`
--

CREATE TABLE IF NOT EXISTS `jadwal_pendakian` (
`id_jadwal_pendakian` int(3) NOT NULL,
  `id_jalur_pendakian` int(3) NOT NULL,
  `kuota` int(3) NOT NULL,
  `status_jalur_pendakian` enum('SOS','Pembersihan Jalur','Erupsi','Aman','Tutup') NOT NULL,
  `harga` int(7) NOT NULL,
  `tanggal_pendakian` date NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `jadwal_pendakian`
--

INSERT INTO `jadwal_pendakian` (`id_jadwal_pendakian`, `id_jalur_pendakian`, `kuota`, `status_jalur_pendakian`, `harga`, `tanggal_pendakian`, `create_at`) VALUES
(1, 1, 80, 'Aman', 1000, '2016-09-18', '2016-11-18 07:44:15'),
(2, 1, 90, 'Aman', 20, '2016-09-19', '2016-09-23 06:55:23'),
(3, 1, 100, 'Pembersihan Jalur', 0, '2016-09-20', '2016-09-18 07:51:58'),
(4, 2, 180, 'Aman', 9000, '2016-09-18', '2016-11-18 07:49:41'),
(5, 2, 190, 'SOS', 0, '2016-09-19', '2016-09-18 08:00:28'),
(6, 2, 200, 'Aman', 30, '2016-09-20', '2016-09-23 06:55:31'),
(7, 3, 280, 'Aman', 1000, '2016-09-18', '2016-11-18 07:50:02'),
(8, 3, 290, 'Pembersihan Jalur', 0, '2016-09-19', '2016-09-18 08:20:44'),
(9, 3, 300, 'Aman', 40, '2016-09-20', '2016-09-23 06:55:35'),
(10, 1, 100, 'Aman', 35000, '2016-09-21', '2016-11-18 06:09:02'),
(11, 2, 0, 'SOS', 0, '2016-09-21', '2016-11-18 06:21:19'),
(12, 3, 80, 'Aman', 80000, '2016-09-21', '2016-11-18 06:23:21'),
(13, 1, 90, 'Aman', 27000, '2016-09-22', '2016-11-24 07:42:13'),
(14, 2, 0, 'SOS', 0, '2016-09-22', '2016-11-24 07:42:55'),
(15, 3, 100, 'Aman', 27000, '2016-09-22', '2016-11-24 07:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `jalur_pendakian`
--

CREATE TABLE IF NOT EXISTS `jalur_pendakian` (
`id_jalur_pendakian` int(3) NOT NULL,
  `kode_jalur` varchar(1) NOT NULL,
  `nama_jalur` enum('Jalur Cibodas','Jalur Putri','Jalur Salabintana') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jalur_pendakian`
--

INSERT INTO `jalur_pendakian` (`id_jalur_pendakian`, `kode_jalur`, `nama_jalur`) VALUES
(1, 'C', 'Jalur Cibodas'),
(2, 'P', 'Jalur Putri'),
(3, 'S', 'Jalur Salabintana');

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE IF NOT EXISTS `level_user` (
`id_level_user` int(3) NOT NULL,
  `nama_level` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id_level_user`, `nama_level`) VALUES
(1, 'admin'),
(2, 'petugas_pendakian'),
(3, 'kepala_balai'),
(4, 'calon_pendaki');

-- --------------------------------------------------------

--
-- Table structure for table `master_kokab`
--

CREATE TABLE IF NOT EXISTS `master_kokab` (
`kota_id` int(10) NOT NULL,
  `kokab_nama` varchar(30) DEFAULT NULL,
  `provinsi_id` int(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=503 ;

--
-- Dumping data for table `master_kokab`
--

INSERT INTO `master_kokab` (`kota_id`, `kokab_nama`, `provinsi_id`) VALUES
(1, 'Kabupaten Aceh Barat', 1),
(2, 'Kabupaten Aceh Barat Daya', 1),
(3, 'Kabupaten Aceh Besar', 1),
(4, 'Kabupaten Aceh Jaya', 1),
(5, 'Kabupaten Aceh Selatan', 1),
(6, 'Kabupaten Aceh Singkil', 1),
(7, 'Kabupaten Aceh Tamiang', 1),
(8, 'Kabupaten Aceh Tengah', 1),
(9, 'Kabupaten Aceh Tenggara', 1),
(10, 'Kabupaten Aceh Timur', 1),
(11, 'Kabupaten Aceh Utara', 1),
(12, 'Kabupaten Bener Meriah', 1),
(13, 'Kabupaten Bireuen', 1),
(14, 'Kabupaten Gayo Luwes', 1),
(15, 'Kabupaten Nagan Raya', 1),
(16, 'Kabupaten Pidie', 1),
(17, 'Kabupaten Pidie Jaya', 1),
(18, 'Kabupaten Simeulue', 1),
(19, 'Kota Banda Aceh', 1),
(20, 'Kota Langsa', 1),
(21, 'Kota Lhokseumawe', 1),
(22, 'Kota Sabang', 1),
(23, 'Kota Subulussalam', 1),
(24, 'Kabupaten Asahan', 2),
(25, 'Kabupaten Batubara', 2),
(26, 'Kabupaten Dairi', 2),
(27, 'Kabupaten Deli Serdang', 2),
(28, 'Kabupaten Humbang Hasundutan', 2),
(29, 'Kabupaten Karo', 2),
(30, 'Kabupaten Labuhan Batu', 2),
(31, 'Kabupaten Labuhanbatu Selatan', 2),
(32, 'Kabupaten Labuhanbatu Utara', 2),
(33, 'Kabupaten Langkat', 2),
(34, 'Kabupaten Mandailing Natal', 2),
(35, 'Kabupaten Nias', 2),
(36, 'Kabupaten Nias Barat', 2),
(37, 'Kabupaten Nias Selatan', 2),
(38, 'Kabupaten Nias Utara', 2),
(39, 'Kabupaten Padang Lawas', 2),
(40, 'Kabupaten Padang Lawas Utara', 2),
(41, 'Kabupaten Pakpak Barat', 2),
(42, 'Kabupaten Samosir', 2),
(43, 'Kabupaten Serdang Bedagai', 2),
(44, 'Kabupaten Simalungun', 2),
(45, 'Kabupaten Tapanuli Selatan', 2),
(46, 'Kabupaten Tapanuli Tengah', 2),
(47, 'Kabupaten Tapanuli Utara', 2),
(48, 'Kabupaten Toba Samosir', 2),
(49, 'Kota Binjai', 2),
(50, 'Kota Gunung Sitoli', 2),
(51, 'Kota Medan', 2),
(52, 'Kota Padangsidempuan', 2),
(53, 'Kota Pematang Siantar', 2),
(54, 'Kota Sibolga', 2),
(55, 'Kota Tanjung Balai', 2),
(56, 'Kota Tebing Tinggi', 2),
(57, 'Kabupaten Agam', 3),
(58, 'Kabupaten Dharmas Raya', 3),
(59, 'Kabupaten Kepulauan Mentawai', 3),
(60, 'Kabupaten Lima Puluh Kota', 3),
(61, 'Kabupaten Padang Pariaman', 3),
(62, 'Kabupaten Pasaman', 3),
(63, 'Kabupaten Pasaman Barat', 3),
(64, 'Kabupaten Pesisir Selatan', 3),
(65, 'Kabupaten Sijunjung', 3),
(66, 'Kabupaten Solok', 3),
(67, 'Kabupaten Solok Selatan', 3),
(68, 'Kabupaten Tanah Datar', 3),
(69, 'Kota Bukittinggi', 3),
(70, 'Kota Padang', 3),
(71, 'Kota Padang Panjang', 3),
(72, 'Kota Pariaman', 3),
(73, 'Kota Payakumbuh', 3),
(74, 'Kota Sawah Lunto', 3),
(75, 'Kota Solok', 3),
(76, 'Kabupaten Bengkalis', 4),
(77, 'Kabupaten Indragiri Hilir', 4),
(78, 'Kabupaten Indragiri Hulu', 4),
(79, 'Kabupaten Kampar', 4),
(80, 'Kabupaten Kuantan Singingi', 4),
(81, 'Kabupaten Meranti', 4),
(82, 'Kabupaten Pelalawan', 4),
(83, 'Kabupaten Rokan Hilir', 4),
(84, 'Kabupaten Rokan Hulu', 4),
(85, 'Kabupaten Siak', 4),
(86, 'Kota Dumai', 4),
(87, 'Kota Pekanbaru', 4),
(88, 'Kabupaten Bintan', 5),
(89, 'Kabupaten Karimun', 5),
(90, 'Kabupaten Kepulauan Anambas', 5),
(91, 'Kabupaten Lingga', 5),
(92, 'Kabupaten Natuna', 5),
(93, 'Kota Batam', 5),
(94, 'Kota Tanjung Pinang', 5),
(95, 'Kabupaten Bangka', 6),
(96, 'Kabupaten Bangka Barat', 6),
(97, 'Kabupaten Bangka Selatan', 6),
(98, 'Kabupaten Bangka Tengah', 6),
(99, 'Kabupaten Belitung', 6),
(100, 'Kabupaten Belitung Timur', 6),
(101, 'Kota Pangkal Pinang', 6),
(102, 'Kabupaten Kerinci', 7),
(103, 'Kabupaten Merangin', 7),
(104, 'Kabupaten Sarolangun', 7),
(105, 'Kabupaten Batang Hari', 7),
(106, 'Kabupaten Muaro Jambi', 7),
(107, 'Kabupaten Tanjung Jabung Timur', 7),
(108, 'Kabupaten Tanjung Jabung Barat', 7),
(109, 'Kabupaten Tebo', 7),
(110, 'Kabupaten Bungo', 7),
(111, 'Kota Jambi', 7),
(112, 'Kota Sungai Penuh', 7),
(113, 'Kabupaten Bengkulu Selatan', 8),
(114, 'Kabupaten Bengkulu Tengah', 8),
(115, 'Kabupaten Bengkulu Utara', 8),
(116, 'Kabupaten Kaur', 8),
(117, 'Kabupaten Kepahiang', 8),
(118, 'Kabupaten Lebong', 8),
(119, 'Kabupaten Mukomuko', 8),
(120, 'Kabupaten Rejang Lebong', 8),
(121, 'Kabupaten Seluma', 8),
(122, 'Kota Bengkulu', 8),
(123, 'Kabupaten Banyuasin', 9),
(124, 'Kabupaten Empat Lawang', 9),
(125, 'Kabupaten Lahat', 9),
(126, 'Kabupaten Muara Enim', 9),
(127, 'Kabupaten Musi Banyu Asin', 9),
(128, 'Kabupaten Musi Rawas', 9),
(129, 'Kabupaten Ogan Ilir', 9),
(130, 'Kabupaten Ogan Komering Ilir', 9),
(131, 'Kabupaten Ogan Komering Ulu', 9),
(132, 'Kabupaten Ogan Komering Ulu Se', 9),
(133, 'Kabupaten Ogan Komering Ulu Ti', 9),
(134, 'Kota Lubuklinggau', 9),
(135, 'Kota Pagar Alam', 9),
(136, 'Kota Palembang', 9),
(137, 'Kota Prabumulih', 9),
(138, 'Kabupaten Lampung Barat', 10),
(139, 'Kabupaten Lampung Selatan', 10),
(140, 'Kabupaten Lampung Tengah', 10),
(141, 'Kabupaten Lampung Timur', 10),
(142, 'Kabupaten Lampung Utara', 10),
(143, 'Kabupaten Mesuji', 10),
(144, 'Kabupaten Pesawaran', 10),
(145, 'Kabupaten Pringsewu', 10),
(146, 'Kabupaten Tanggamus', 10),
(147, 'Kabupaten Tulang Bawang', 10),
(148, 'Kabupaten Tulang Bawang Barat', 10),
(149, 'Kabupaten Way Kanan', 10),
(150, 'Kota Bandar Lampung', 10),
(151, 'Kota Metro', 10),
(152, 'Kabupaten Lebak', 11),
(153, 'Kabupaten Pandeglang', 11),
(154, 'Kabupaten Serang', 11),
(155, 'Kabupaten Tangerang', 11),
(156, 'Kota Cilegon', 11),
(157, 'Kota Serang', 11),
(158, 'Kota Tangerang', 11),
(159, 'Kota Tangerang Selatan', 11),
(160, 'Kabupaten Adm. Kepulauan Serib', 12),
(161, 'Kota Jakarta Barat', 12),
(162, 'Kota Jakarta Pusat', 12),
(163, 'Kota Jakarta Selatan', 12),
(164, 'Kota Jakarta Timur', 12),
(165, 'Kota Jakarta Utara', 12),
(166, 'Kabupaten Bandung', 13),
(167, 'Kabupaten Bandung Barat', 13),
(168, 'Kabupaten Bekasi', 13),
(169, 'Kabupaten Bogor', 13),
(170, 'Kabupaten Ciamis', 13),
(171, 'Kabupaten Cianjur', 13),
(172, 'Kabupaten Cirebon', 13),
(173, 'Kabupaten Garut', 13),
(174, 'Kabupaten Indramayu', 13),
(175, 'Kabupaten Karawang', 13),
(176, 'Kabupaten Kuningan', 13),
(177, 'Kabupaten Majalengka', 13),
(178, 'Kabupaten Purwakarta', 13),
(179, 'Kabupaten Subang', 13),
(180, 'Kabupaten Sukabumi', 13),
(181, 'Kabupaten Sumedang', 13),
(182, 'Kabupaten Tasikmalaya', 13),
(183, 'Kota Bandung', 13),
(184, 'Kota Banjar', 13),
(185, 'Kota Bekasi', 13),
(186, 'Kota Bogor', 13),
(187, 'Kota Cimahi', 13),
(188, 'Kota Cirebon', 13),
(189, 'Kota Depok', 13),
(190, 'Kota Sukabumi', 13),
(191, 'Kota Tasikmalaya', 13),
(192, 'Kabupaten Banjarnegara', 14),
(193, 'Kabupaten Banyumas', 14),
(194, 'Kabupaten Batang', 14),
(195, 'Kabupaten Blora', 14),
(196, 'Kabupaten Boyolali', 14),
(197, 'Kabupaten Brebes', 14),
(198, 'Kabupaten Cilacap', 14),
(199, 'Kabupaten Demak', 14),
(200, 'Kabupaten Grobogan', 14),
(201, 'Kabupaten Jepara', 14),
(202, 'Kabupaten Karanganyar', 14),
(203, 'Kabupaten Kebumen', 14),
(204, 'Kabupaten Kendal', 14),
(205, 'Kabupaten Klaten', 14),
(206, 'Kabupaten Kota Tegal', 14),
(207, 'Kabupaten Kudus', 14),
(208, 'Kabupaten Magelang', 14),
(209, 'Kabupaten Pati', 14),
(210, 'Kabupaten Pekalongan', 14),
(211, 'Kabupaten Pemalang', 14),
(212, 'Kabupaten Purbalingga', 14),
(213, 'Kabupaten Purworejo', 14),
(214, 'Kabupaten Rembang', 14),
(215, 'Kabupaten Semarang', 14),
(216, 'Kabupaten Sragen', 14),
(217, 'Kabupaten Sukoharjo', 14),
(218, 'Kabupaten Temanggung', 14),
(219, 'Kabupaten Wonogiri', 14),
(220, 'Kabupaten Wonosobo', 14),
(221, 'Kota Magelang', 14),
(222, 'Kota Pekalongan', 14),
(223, 'Kota Salatiga', 14),
(224, 'Kota Semarang', 14),
(225, 'Kota Surakarta', 14),
(226, 'Kota Tegal', 14),
(227, 'Kabupaten Bantul', 15),
(228, 'Kabupaten Gunung Kidul', 15),
(229, 'Kabupaten Kulon Progo', 15),
(230, 'Kabupaten Sleman', 15),
(231, 'Kota Yogyakarta', 15),
(232, 'Kabupaten Bangkalan', 16),
(233, 'Kabupaten Banyuwangi', 16),
(234, 'Kabupaten Blitar', 16),
(235, 'Kabupaten Bojonegoro', 16),
(236, 'Kabupaten Bondowoso', 16),
(237, 'Kabupaten Gresik', 16),
(238, 'Kabupaten Jember', 16),
(239, 'Kabupaten Jombang', 16),
(240, 'Kabupaten Kediri', 16),
(241, 'Kabupaten Lamongan', 16),
(242, 'Kabupaten Lumajang', 16),
(243, 'Kabupaten Madiun', 16),
(244, 'Kabupaten Magetan', 16),
(245, 'Kabupaten Malang', 16),
(246, 'Kabupaten Mojokerto', 16),
(247, 'Kabupaten Nganjuk', 16),
(248, 'Kabupaten Ngawi', 16),
(249, 'Kabupaten Pacitan', 16),
(250, 'Kabupaten Pamekasan', 16),
(251, 'Kabupaten Pasuruan', 16),
(252, 'Kabupaten Ponorogo', 16),
(253, 'Kabupaten Probolinggo', 16),
(254, 'Kabupaten Sampang', 16),
(255, 'Kabupaten Sidoarjo', 16),
(256, 'Kabupaten Situbondo', 16),
(257, 'Kabupaten Sumenep', 16),
(258, 'Kabupaten Trenggalek', 16),
(259, 'Kabupaten Tuban', 16),
(260, 'Kabupaten Tulungagung', 16),
(261, 'Kota Batu', 16),
(262, 'Kota Blitar', 16),
(263, 'Kota Kediri', 16),
(264, 'Kota Madiun', 16),
(265, 'Kota Malang', 16),
(266, 'Kota Mojokerto', 16),
(267, 'Kota Pasuruan', 16),
(268, 'Kota Probolinggo', 16),
(269, 'Kota Surabaya', 16),
(270, 'Kabupaten Badung', 17),
(271, 'Kabupaten Bangli', 17),
(272, 'Kabupaten Buleleng', 17),
(273, 'Kabupaten Gianyar', 17),
(274, 'Kabupaten Jembrana', 17),
(275, 'Kabupaten Karang Asem', 17),
(276, 'Kabupaten Klungkung', 17),
(277, 'Kabupaten Tabanan', 17),
(278, 'Kota Denpasar', 17),
(279, 'Kabupaten Bima', 18),
(280, 'Kabupaten Dompu', 18),
(281, 'Kabupaten Lombok Barat', 18),
(282, 'Kabupaten Lombok Tengah', 18),
(283, 'Kabupaten Lombok Timur', 18),
(284, 'Kabupaten Lombok Utara', 18),
(285, 'Kabupaten Sumbawa', 18),
(286, 'Kabupaten Sumbawa Barat', 18),
(287, 'Kota Bima', 18),
(288, 'Kota Mataram', 18),
(289, 'Kabupaten Alor', 19),
(290, 'Kabupaten Belu', 19),
(291, 'Kabupaten Ende', 19),
(292, 'Kabupaten Flores Timur', 19),
(293, 'Kabupaten Kupang', 19),
(294, 'Kabupaten Lembata', 19),
(295, 'Kabupaten Manggarai', 19),
(296, 'Kabupaten Manggarai Barat', 19),
(297, 'Kabupaten Manggarai Timur', 19),
(298, 'Kabupaten Nagekeo', 19),
(299, 'Kabupaten Ngada', 19),
(300, 'Kabupaten Rote Ndao', 19),
(301, 'Kabupaten Sabu Raijua', 19),
(302, 'Kabupaten Sikka', 19),
(303, 'Kabupaten Sumba Barat', 19),
(304, 'Kabupaten Sumba Barat Daya', 19),
(305, 'Kabupaten Sumba Tengah', 19),
(306, 'Kabupaten Sumba Timur', 19),
(307, 'Kabupaten Timor Tengah Selatan', 19),
(308, 'Kabupaten Timor Tengah Utara', 19),
(309, 'Kota Kupang', 19),
(310, 'Kabupaten Bengkayang', 20),
(311, 'Kabupaten Kapuas Hulu', 20),
(312, 'Kabupaten Kayong Utara', 20),
(313, 'Kabupaten Ketapang', 20),
(314, 'Kabupaten Kubu Raya', 20),
(315, 'Kabupaten Landak', 20),
(316, 'Kabupaten Melawi', 20),
(317, 'Kabupaten Pontianak', 20),
(318, 'Kabupaten Sambas', 20),
(319, 'Kabupaten Sanggau', 20),
(320, 'Kabupaten Sekadau', 20),
(321, 'Kabupaten Sintang', 20),
(322, 'Kota Pontianak', 20),
(323, 'Kota Singkawang', 20),
(324, 'Kabupaten Barito Selatan', 21),
(325, 'Kabupaten Barito Timur', 21),
(326, 'Kabupaten Barito Utara', 21),
(327, 'Kabupaten Gunung Mas', 21),
(328, 'Kabupaten Kapuas', 21),
(329, 'Kabupaten Katingan', 21),
(330, 'Kabupaten Kotawaringin Barat', 21),
(331, 'Kabupaten Kotawaringin Timur', 21),
(332, 'Kabupaten Lamandau', 21),
(333, 'Kabupaten Murung Raya', 21),
(334, 'Kabupaten Pulang Pisau', 21),
(335, 'Kabupaten Seruyan', 21),
(336, 'Kabupaten Sukamara', 21),
(337, 'Kota Palangkaraya', 21),
(338, 'Kabupaten Balangan', 22),
(339, 'Kabupaten Banjar', 22),
(340, 'Kabupaten Barito Kuala', 22),
(341, 'Kabupaten Hulu Sungai Selatan', 22),
(342, 'Kabupaten Hulu Sungai Tengah', 22),
(343, 'Kabupaten Hulu Sungai Utara', 22),
(344, 'Kabupaten Kota Baru', 22),
(345, 'Kabupaten Tabalong', 22),
(346, 'Kabupaten Tanah Bumbu', 22),
(347, 'Kabupaten Tanah Laut', 22),
(348, 'Kabupaten Tapin', 22),
(349, 'Kota Banjar Baru', 22),
(350, 'Kota Banjarmasin', 22),
(351, 'Kabupaten Berau', 23),
(352, 'Kabupaten Bulongan', 23),
(353, 'Kabupaten Kutai Barat', 23),
(354, 'Kabupaten Kutai Kartanegara', 23),
(355, 'Kabupaten Kutai Timur', 23),
(356, 'Kabupaten Malinau', 23),
(357, 'Kabupaten Nunukan', 23),
(358, 'Kabupaten Paser', 23),
(359, 'Kabupaten Penajam Paser Utara', 23),
(360, 'Kabupaten Tana Tidung', 23),
(361, 'Kota Balikpapan', 23),
(362, 'Kota Bontang', 23),
(363, 'Kota Samarinda', 23),
(364, 'Kota Tarakan', 23),
(365, 'Kabupaten Boalemo', 24),
(366, 'Kabupaten Bone Bolango', 24),
(367, 'Kabupaten Gorontalo', 24),
(368, 'Kabupaten Gorontalo Utara', 24),
(369, 'Kabupaten Pohuwato', 24),
(370, 'Kota Gorontalo', 24),
(371, 'Kabupaten Bantaeng', 25),
(372, 'Kabupaten Barru', 25),
(373, 'Kabupaten Bone', 25),
(374, 'Kabupaten Bulukumba', 25),
(375, 'Kabupaten Enrekang', 25),
(376, 'Kabupaten Gowa', 25),
(377, 'Kabupaten Jeneponto', 25),
(378, 'Kabupaten Luwu', 25),
(379, 'Kabupaten Luwu Timur', 25),
(380, 'Kabupaten Luwu Utara', 25),
(381, 'Kabupaten Maros', 25),
(382, 'Kabupaten Pangkajene Kepulauan', 25),
(383, 'Kabupaten Pinrang', 25),
(384, 'Kabupaten Selayar', 25),
(385, 'Kabupaten Sidenreng Rappang', 25),
(386, 'Kabupaten Sinjai', 25),
(387, 'Kabupaten Soppeng', 25),
(388, 'Kabupaten Takalar', 25),
(389, 'Kabupaten Tana Toraja', 25),
(390, 'Kabupaten Toraja Utara', 25),
(391, 'Kabupaten Wajo', 25),
(392, 'Kota Makassar', 25),
(393, 'Kota Palopo', 25),
(394, 'Kota Pare-pare', 25),
(395, 'Kabupaten Bombana', 26),
(396, 'Kabupaten Buton', 26),
(397, 'Kabupaten Buton Utara', 26),
(398, 'Kabupaten Kolaka', 26),
(399, 'Kabupaten Kolaka Utara', 26),
(400, 'Kabupaten Konawe', 26),
(401, 'Kabupaten Konawe Selatan', 26),
(402, 'Kabupaten Konawe Utara', 26),
(403, 'Kabupaten Muna', 26),
(404, 'Kabupaten Wakatobi', 26),
(405, 'Kota Bau-bau', 26),
(406, 'Kota Kendari', 26),
(407, 'Kabupaten Banggai', 27),
(408, 'Kabupaten Banggai Kepulauan', 27),
(409, 'Kabupaten Buol', 27),
(410, 'Kabupaten Donggala', 27),
(411, 'Kabupaten Morowali', 27),
(412, 'Kabupaten Parigi Moutong', 27),
(413, 'Kabupaten Poso', 27),
(414, 'Kabupaten Sigi', 27),
(415, 'Kabupaten Tojo Una-Una', 27),
(416, 'Kabupaten Toli Toli', 27),
(417, 'Kota Palu', 27),
(418, 'Kabupaten Bolaang Mangondow', 28),
(419, 'Kabupaten Bolaang Mangondow Se', 28),
(420, 'Kabupaten Bolaang Mangondow Ti', 28),
(421, 'Kabupaten Bolaang Mangondow Ut', 28),
(422, 'Kabupaten Kepulauan Sangihe', 28),
(423, 'Kabupaten Kepulauan Siau Tagul', 28),
(424, 'Kabupaten Kepulauan Talaud', 28),
(425, 'Kabupaten Minahasa', 28),
(426, 'Kabupaten Minahasa Selatan', 28),
(427, 'Kabupaten Minahasa Tenggara', 28),
(428, 'Kabupaten Minahasa Utara', 28),
(429, 'Kota Bitung', 28),
(430, 'Kota Kotamobagu', 28),
(431, 'Kota Manado', 28),
(432, 'Kota Tomohon', 28),
(433, 'Kabupaten Majene', 29),
(434, 'Kabupaten Mamasa', 29),
(435, 'Kabupaten Mamuju', 29),
(436, 'Kabupaten Mamuju Utara', 29),
(437, 'Kabupaten Polewali Mandar', 29),
(438, 'Kabupaten Buru', 30),
(439, 'Kabupaten Buru Selatan', 30),
(440, 'Kabupaten Kepulauan Aru', 30),
(441, 'Kabupaten Maluku Barat Daya', 30),
(442, 'Kabupaten Maluku Tengah', 30),
(443, 'Kabupaten Maluku Tenggara', 30),
(444, 'Kabupaten Maluku Tenggara Bara', 30),
(445, 'Kabupaten Seram Bagian Barat', 30),
(446, 'Kabupaten Seram Bagian Timur', 30),
(447, 'Kota Ambon', 30),
(448, 'Kota Tual', 30),
(449, 'Kabupaten Halmahera Barat', 31),
(450, 'Kabupaten Halmahera Selatan', 31),
(451, 'Kabupaten Halmahera Tengah', 31),
(452, 'Kabupaten Halmahera Timur', 31),
(453, 'Kabupaten Halmahera Utara', 31),
(454, 'Kabupaten Kepulauan Sula', 31),
(455, 'Kabupaten Pulau Morotai', 31),
(456, 'Kota Ternate', 31),
(457, 'Kota Tidore Kepulauan', 31),
(458, 'Kabupaten Fakfak', 32),
(459, 'Kabupaten Kaimana', 32),
(460, 'Kabupaten Manokwari', 32),
(461, 'Kabupaten Maybrat', 32),
(462, 'Kabupaten Raja Ampat', 32),
(463, 'Kabupaten Sorong', 32),
(464, 'Kabupaten Sorong Selatan', 32),
(465, 'Kabupaten Tambrauw', 32),
(466, 'Kabupaten Teluk Bintuni', 32),
(467, 'Kabupaten Teluk Wondama', 32),
(468, 'Kota Sorong', 32),
(469, 'Kabupaten Merauke', 33),
(470, 'Kabupaten Jayawijaya', 33),
(471, 'Kabupaten Nabire', 33),
(472, 'Kabupaten Kepulauan Yapen', 33),
(473, 'Kabupaten Biak Numfor', 33),
(474, 'Kabupaten Paniai', 33),
(475, 'Kabupaten Puncak Jaya', 33),
(476, 'Kabupaten Mimika', 33),
(477, 'Kabupaten Boven Digoel', 33),
(478, 'Kabupaten Mappi', 33),
(479, 'Kabupaten Asmat', 33),
(480, 'Kabupaten Yahukimo', 33),
(481, 'Kabupaten Pegunungan Bintang', 33),
(482, 'Kabupaten Tolikara', 33),
(483, 'Kabupaten Sarmi', 33),
(484, 'Kabupaten Keerom', 33),
(485, 'Kabupaten Waropen', 33),
(486, 'Kabupaten Jayapura', 33),
(487, 'Kabupaten Deiyai', 33),
(488, 'Kabupaten Dogiyai', 33),
(489, 'Kabupaten Intan Jaya', 33),
(490, 'Kabupaten Lanny Jaya', 33),
(491, 'Kabupaten Mamberamo Raya', 33),
(492, 'Kabupaten Mamberamo Tengah', 33),
(493, 'Kabupaten Nduga', 33),
(494, 'Kabupaten Puncak', 33),
(495, 'Kabupaten Supiori', 33),
(496, 'Kabupaten Yalimo', 33),
(497, 'Kota Jayapura', 33),
(498, 'Kabupaten Bulungan', 34),
(499, 'Kabupaten Malinau', 34),
(500, 'Kabupaten Nunukan', 34),
(501, 'Kabupaten Tana Tidung', 34),
(502, 'Kota Tarakan', 34);

-- --------------------------------------------------------

--
-- Table structure for table `master_provinsi`
--

CREATE TABLE IF NOT EXISTS `master_provinsi` (
`provinsi_id` int(10) NOT NULL,
  `provinsi_nama` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `master_provinsi`
--

INSERT INTO `master_provinsi` (`provinsi_id`, `provinsi_nama`) VALUES
(1, 'Nanggroe Aceh Darussalam'),
(2, 'Sumatera Utara'),
(3, 'Sumatera Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Kepulauan Bangka-Belitung'),
(7, 'Jambi'),
(8, 'Bengkulu'),
(9, 'Sumatera Selatan'),
(10, 'Lampung'),
(11, 'Banten'),
(12, 'DKI Jakarta'),
(13, 'Jawa Barat'),
(14, 'Jawa Tengah'),
(15, 'Daerah Istimewa Yogyakarta  '),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Gorontalo'),
(25, 'Sulawesi Selatan'),
(26, 'Sulawesi Tenggara'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Utara'),
(29, 'Sulawesi Barat'),
(30, 'Maluku'),
(31, 'Maluku Utara'),
(32, 'Papua Barat'),
(33, 'Papua'),
(34, 'Kalimantan Utara');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` varchar(15) NOT NULL,
  `id_jabatan` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `kota_id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `id_jabatan`, `id_user`, `kota_id`, `nama`, `alamat`, `tgl_lahir`, `created_at`) VALUES
('10930000', 2, 20, 270, 'tes admin', 'ngadimin', '2016-12-31', '2016-12-11 06:48:29'),
('111109300', 2, 11, 1, 'Kepala Balai', 'Desa bojong kenyot RT 04/012 No : 122', '1986-12-31', '2016-11-17 14:20:43'),
('1111093000016', 1, 10, 227, 'Prawitasari, Apt, M.Kes', 'Iya ', '2011-12-31', '2016-12-06 16:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
`id_pembayaran` int(3) NOT NULL,
  `id_boking` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `nominal_transfer` int(11) NOT NULL,
  `bukti_transfer` varchar(50) NOT NULL,
  `status` enum('Pending','Valid','Tidak Valid') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_boking`, `nama`, `tanggal_bayar`, `nominal_transfer`, `bukti_transfer`, `status`, `create_at`) VALUES
(2, 9, 'Budi', '2014-12-31', 1000000, 'no_profile1.png', 'Valid', '2016-10-13 17:36:23'),
(3, 8, 'Ajag ijig', '2016-09-23', 90009, 'no_profile2.png', 'Valid', '2016-10-13 08:57:42'),
(4, 9, 'wira sodikin', '2016-12-10', 150000, 'Desert2.jpg', 'Valid', '2016-10-13 09:33:35'),
(5, 10, 'berak', '2016-12-31', 111111, 'busana-gamis-terbarugrosir-baju-gamis-modern1.jpg', 'Valid', '2016-10-20 08:30:10'),
(6, 7, 'Prawitasari, Apt, M.Kes', '2016-12-31', 2000000, 'Hydrangeas.jpg', 'Valid', '2017-01-13 08:19:52'),
(7, 13, 'Biawak', '2016-12-31', 10000, 'Penguins1.jpg', 'Valid', '2016-11-23 08:20:05'),
(8, 15, 'Marzekal', '2016-12-31', 11111, 'Penguins2.jpg', 'Tidak Valid', '2016-12-10 17:11:33'),
(9, 16, 'Marzekal', '2016-12-31', 2147483647, 'Desert.jpg', 'Tidak Valid', '2017-01-13 08:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(3) NOT NULL,
  `level` enum('admin','calon_pendaki','petugas_pendakian','kepala_balai') NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status_user` enum('Aktif','Tidak Aktif') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `level`, `username`, `password`, `status_user`, `created_at`) VALUES
(1, 'admin', 'admin', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Aktif', '2016-12-07 07:15:48'),
(10, 'petugas_pendakian', 'petugas_pendakian', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Aktif', '2016-12-07 07:15:48'),
(11, 'kepala_balai', 'kepala_balai', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Aktif', '2016-12-07 07:15:48'),
(12, 'calon_pendaki', 'pendaki', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Aktif', '2016-12-07 07:15:48'),
(13, 'calon_pendaki', 'atl.ryuzaki@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Aktif', '2016-12-10 17:14:49'),
(20, 'admin', 'admin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Aktif', '2016-12-08 12:03:48'),
(21, 'calon_pendaki', 'a@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'Aktif', '2016-12-10 17:24:07'),
(23, 'calon_pendaki', 'aasddd@gm', 'f10e2821bbbea527ea02200352313bc059445190', 'Aktif', '2016-12-13 09:58:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
 ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
 ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `boking`
--
ALTER TABLE `boking`
 ADD PRIMARY KEY (`id_boking`);

--
-- Indexes for table `grup_pendaki`
--
ALTER TABLE `grup_pendaki`
 ADD PRIMARY KEY (`id_grup_pendaki`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
 ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `jadwal_pendakian`
--
ALTER TABLE `jadwal_pendakian`
 ADD PRIMARY KEY (`id_jadwal_pendakian`);

--
-- Indexes for table `jalur_pendakian`
--
ALTER TABLE `jalur_pendakian`
 ADD PRIMARY KEY (`id_jalur_pendakian`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
 ADD PRIMARY KEY (`id_level_user`);

--
-- Indexes for table `master_kokab`
--
ALTER TABLE `master_kokab`
 ADD PRIMARY KEY (`kota_id`), ADD KEY `pro_kota` (`provinsi_id`);

--
-- Indexes for table `master_provinsi`
--
ALTER TABLE `master_provinsi`
 ADD PRIMARY KEY (`provinsi_id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
 ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
MODIFY `id_anggota` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=220;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
MODIFY `id_berita` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `boking`
--
ALTER TABLE `boking`
MODIFY `id_boking` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `grup_pendaki`
--
ALTER TABLE `grup_pendaki`
MODIFY `id_grup_pendaki` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `jadwal_pendakian`
--
ALTER TABLE `jadwal_pendakian`
MODIFY `id_jadwal_pendakian` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `jalur_pendakian`
--
ALTER TABLE `jalur_pendakian`
MODIFY `id_jalur_pendakian` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `level_user`
--
ALTER TABLE `level_user`
MODIFY `id_level_user` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `master_kokab`
--
ALTER TABLE `master_kokab`
MODIFY `kota_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=503;
--
-- AUTO_INCREMENT for table `master_provinsi`
--
ALTER TABLE `master_provinsi`
MODIFY `provinsi_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
MODIFY `id_pembayaran` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_kokab`
--
ALTER TABLE `master_kokab`
ADD CONSTRAINT `pro_kota` FOREIGN KEY (`provinsi_id`) REFERENCES `master_provinsi` (`provinsi_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
