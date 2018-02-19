-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2018 at 07:05 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indicadores2`
--
CREATE DATABASE IF NOT EXISTS `indicadores2` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `indicadores2`;

-- --------------------------------------------------------

--
-- Table structure for table `anios`
--

DROP TABLE IF EXISTS `anios`;
CREATE TABLE `anios` (
  `idanio` int(11) NOT NULL,
  `year1s` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `anios`
--

INSERT INTO `anios` (`idanio`, `year1s`) VALUES
(1, 2015),
(2, 2016),
(3, 2017),
(4, 2018),
(5, 2019),
(6, 2020),
(7, 2021),
(8, 2022),
(9, 2023),
(10, 2024),
(11, 2025),
(12, 2026);

-- --------------------------------------------------------

--
-- Table structure for table `mes`
--

DROP TABLE IF EXISTS `mes`;
CREATE TABLE `mes` (
  `idmes` int(15) NOT NULL,
  `mes` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mes`
--

INSERT INTO `mes` (`idmes`, `mes`) VALUES
(1, 'Enero'),
(2, 'Febrero'),
(3, 'Marzo'),
(4, 'Abril'),
(5, 'Mayo'),
(6, 'Junio'),
(7, 'Julio'),
(8, 'Agosto'),
(9, 'Septiembre'),
(10, 'Octubre'),
(11, 'Noviembre'),
(12, 'Diciembre');

-- --------------------------------------------------------

--
-- Table structure for table `objetivos`
--

DROP TABLE IF EXISTS `objetivos`;
CREATE TABLE `objetivos` (
  `idobj` int(11) NOT NULL,
  `objetivo` double NOT NULL,
  `idmes` int(11) NOT NULL,
  `anio` year(4) NOT NULL,
  `idindicador` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `objetivos`
--

INSERT INTO `objetivos` (`idobj`, `objetivo`, `idmes`, `anio`, `idindicador`) VALUES
(1, 95, 1, 2016, 27),
(2, 95, 2, 2016, 27),
(3, 0.1, 1, 2016, 1),
(4, 0.2, 2, 2016, 1),
(5, 312, 1, 2016, 2),
(6, 302, 2, 2016, 2),
(7, 95, 3, 2016, 27),
(8, 97, 4, 2016, 27),
(9, 97, 5, 2016, 27),
(10, 97, 6, 2016, 27),
(11, 99, 7, 2016, 27),
(12, 99, 8, 2016, 27),
(13, 99, 9, 2016, 27),
(14, 100, 10, 2016, 27),
(15, 100, 11, 2016, 27),
(16, 100, 12, 2016, 27),
(17, 80, 1, 2016, 13),
(18, 80, 2, 2016, 13),
(19, 80, 3, 2016, 13),
(20, 85, 4, 2016, 13),
(21, 85, 5, 2016, 13),
(22, 85, 6, 2016, 13),
(23, 85, 7, 2016, 13),
(24, 88, 8, 2016, 13),
(25, 88, 9, 2016, 13),
(26, 89, 10, 2016, 13),
(27, 89, 11, 2016, 13),
(28, 90, 12, 2016, 13),
(29, 0.3, 3, 2016, 1),
(30, 0.4, 4, 2016, 1),
(31, 0.5, 5, 2016, 1),
(32, 0.6, 6, 2016, 1),
(44, 1.19, 12, 2016, 1),
(43, 1.09, 11, 2016, 1),
(42, 0.99, 10, 2016, 1),
(41, 0.89, 9, 2016, 1),
(40, 0.79, 8, 2016, 1),
(39, 0.69, 7, 2016, 1),
(45, 306, 3, 2016, 2),
(46, 305, 4, 2016, 2),
(47, 306, 5, 2016, 2),
(48, 306, 6, 2016, 2),
(49, 307, 7, 2016, 2),
(50, 307, 8, 2016, 2),
(51, 307, 9, 2016, 2),
(52, 307, 10, 2016, 2),
(53, 307, 11, 2016, 2),
(54, 307, 12, 2016, 2),
(55, 30, 1, 2016, 8),
(56, 29, 2, 2016, 8),
(57, 29, 3, 2016, 8),
(58, 29, 4, 2016, 8),
(59, 29, 5, 2016, 8),
(60, 29, 6, 2016, 8),
(61, 29, 7, 2016, 8),
(62, 29, 8, 2016, 8),
(63, 29, 9, 2016, 8),
(64, 29, 10, 2016, 8),
(65, 29, 11, 2016, 8),
(66, 29, 12, 2016, 8),
(67, 1.04, 1, 2016, 9),
(68, 2.07, 2, 2016, 9),
(69, 3.11, 3, 2016, 9),
(70, 4.15, 4, 2016, 9),
(71, 5.18, 5, 2016, 9),
(72, 6.22, 6, 2016, 9),
(73, 7.26, 7, 2016, 9),
(74, 8.29, 8, 2016, 9),
(75, 9.33, 9, 2016, 9),
(76, 10.37, 10, 2016, 9),
(77, 11.4, 11, 2016, 9),
(78, 12.44, 12, 2016, 9),
(79, 0.62, 1, 2016, 5),
(80, 1.24, 2, 2016, 5),
(81, 1.93, 3, 2016, 5),
(82, 2.62, 4, 2016, 5),
(83, 3.32, 5, 2016, 5),
(84, 4.01, 6, 2016, 5),
(85, 4.71, 7, 2016, 5),
(86, 6.03, 8, 2016, 5),
(87, 6.73, 9, 2016, 5),
(88, 7.43, 10, 2016, 5),
(89, 8.13, 11, 2016, 5),
(90, 8.83, 12, 2016, 5),
(91, 50, 1, 2016, 6),
(92, 49, 2, 2016, 6),
(93, 47, 3, 2016, 6),
(94, 46, 4, 2016, 6),
(95, 46, 5, 2016, 6),
(96, 45, 6, 2016, 6),
(97, 45, 7, 2016, 6),
(98, 40, 8, 2016, 6),
(99, 41, 9, 2016, 6),
(100, 41, 10, 2016, 6),
(101, 41, 11, 2016, 6),
(102, 41, 12, 2016, 6),
(103, 2.5, 1, 2016, 7),
(104, 2.5, 2, 2016, 7),
(105, 2.5, 3, 2016, 7),
(106, 2.65, 4, 2016, 7),
(107, 2.65, 5, 2016, 7),
(108, 2.7, 6, 2016, 7),
(109, 2.7, 7, 2016, 7),
(110, 2.7, 8, 2016, 7),
(111, 2.65, 9, 2016, 7),
(112, 2.65, 10, 2016, 7),
(113, 2.65, 11, 2016, 7),
(114, 2.65, 12, 2016, 7),
(115, 0.44, 1, 2016, 10),
(116, 0.88, 2, 2016, 10),
(117, 1.32, 3, 2016, 10),
(118, 1.76, 4, 2016, 10),
(119, 2.21, 5, 2016, 10),
(120, 2.65, 6, 2016, 10),
(121, 3.09, 7, 2016, 10),
(122, 3.53, 8, 2016, 10),
(123, 3.97, 9, 2016, 10),
(124, 4.41, 10, 2016, 10),
(125, 4.85, 11, 2016, 10),
(126, 5.29, 12, 2016, 10),
(127, 70.28, 1, 2016, 11),
(128, 68.02, 2, 2016, 11),
(129, 68.77, 3, 2016, 11),
(130, 68.58, 4, 2016, 11),
(131, 68.92, 5, 2016, 11),
(132, 68.77, 6, 2016, 11),
(133, 68.99, 7, 2016, 11),
(134, 69.15, 8, 2016, 11),
(135, 69.02, 9, 2016, 11),
(136, 69.15, 10, 2016, 11),
(137, 69.05, 11, 2016, 11),
(138, 69.15, 12, 2016, 11),
(139, 120.47, 1, 2016, 12),
(140, 116.59, 2, 2016, 12),
(141, 115.94, 3, 2016, 12),
(142, 114.71, 4, 2016, 12),
(143, 114.74, 5, 2016, 12),
(144, 114.14, 6, 2016, 12),
(145, 114.25, 7, 2016, 12),
(146, 109.59, 8, 2016, 12),
(147, 109.72, 9, 2016, 12),
(148, 110.18, 10, 2016, 12),
(149, 110.24, 11, 2016, 12),
(150, 110.58, 12, 2016, 12),
(151, 200000, 1, 2016, 14),
(152, 400000, 2, 2016, 14),
(153, 600000, 3, 2016, 14),
(154, 800000, 4, 2016, 14),
(155, 1000000, 5, 2016, 14),
(156, 1200000, 6, 2016, 14),
(157, 1400000, 7, 2016, 14),
(158, 1600000, 8, 2016, 14),
(159, 1800000, 9, 2016, 14),
(160, 2000000, 10, 2016, 14),
(161, 2200000, 11, 2016, 14),
(162, 2400000, 12, 2016, 14),
(163, 8, 1, 2016, 15),
(164, 16, 2, 2016, 15),
(165, 24, 3, 2016, 15),
(166, 32, 4, 2016, 15),
(167, 40, 5, 2016, 15),
(168, 48, 6, 2016, 15),
(169, 56, 7, 2016, 15),
(170, 64, 8, 2016, 15),
(171, 72, 9, 2016, 15),
(172, 80, 10, 2016, 15),
(173, 88, 11, 2016, 15),
(174, 96, 12, 2016, 15),
(175, 2, 1, 2016, 16),
(176, 2, 2, 2016, 16),
(177, 2, 3, 2016, 16),
(178, 3, 4, 2016, 16),
(179, 5, 5, 2016, 16),
(180, 3, 6, 2016, 16),
(181, 4, 7, 2016, 16),
(182, 4, 8, 2016, 16),
(183, 4, 9, 2016, 16),
(184, 5, 10, 2016, 16),
(185, 5, 11, 2016, 16),
(186, 5, 12, 2016, 16),
(187, 3, 1, 2016, 17),
(188, 3, 2, 2016, 17),
(189, 3, 3, 2016, 17),
(190, 4, 4, 2016, 17),
(191, 4, 5, 2016, 17),
(192, 4, 6, 2016, 17),
(193, 5, 7, 2016, 17),
(194, 5, 8, 2016, 17),
(195, 5, 9, 2016, 17),
(196, 6, 10, 2016, 17),
(197, 6, 11, 2016, 17),
(198, 6, 12, 2016, 17),
(199, 600, 1, 2016, 18),
(200, 600, 2, 2016, 18),
(201, 600, 3, 2016, 18),
(202, 800, 4, 2016, 18),
(203, 800, 5, 2016, 18),
(204, 800, 6, 2016, 18),
(205, 1000, 7, 2016, 18),
(206, 1000, 8, 2016, 18),
(207, 1000, 9, 2016, 18),
(208, 1200, 10, 2016, 18),
(209, 1200, 11, 2016, 18),
(210, 1200, 12, 2016, 18),
(211, 59, 1, 2016, 19),
(212, 59, 2, 2016, 19),
(213, 59, 3, 2016, 19),
(214, 61, 4, 2016, 19),
(215, 70, 5, 2016, 19),
(216, 70, 6, 2016, 19),
(217, 65, 7, 2016, 19),
(218, 65, 8, 2016, 19),
(219, 65, 9, 2016, 19),
(220, 63, 10, 2016, 19),
(221, 63, 11, 2016, 19),
(222, 62, 12, 2016, 19),
(223, 1.15, 1, 2016, 20),
(224, 1.15, 2, 2016, 20),
(225, 1.15, 3, 2016, 20),
(226, 1.25, 4, 2016, 20),
(227, 1.25, 5, 2016, 20),
(228, 1.25, 6, 2016, 20),
(229, 1.15, 7, 2016, 20),
(230, 1.15, 8, 2016, 20),
(231, 1.15, 9, 2016, 20),
(232, 1.2, 10, 2016, 20),
(233, 1.2, 11, 2016, 20),
(234, 1.2, 12, 2016, 20),
(235, 5, 1, 2016, 21),
(236, 5, 2, 2016, 21),
(237, 5, 3, 2016, 21),
(238, 5.5, 4, 2016, 21),
(239, 5.6, 5, 2016, 21),
(240, 5.5, 6, 2016, 21),
(241, 4.5, 7, 2016, 21),
(242, 4.5, 8, 2016, 21),
(243, 4.5, 9, 2016, 21),
(244, 5, 10, 2016, 21),
(245, 5, 11, 2016, 21),
(246, 5.5, 12, 2016, 21),
(247, 1.07, 1, 2016, 22),
(248, 1.1, 2, 2016, 22),
(249, 1.11, 3, 2016, 22),
(250, 1.15, 4, 2016, 22),
(251, 1.2, 5, 2016, 22),
(252, 1.2, 6, 2016, 22),
(253, 1.1, 7, 2016, 22),
(254, 1.1, 8, 2016, 22),
(255, 1.15, 9, 2016, 22),
(256, 1.15, 10, 2016, 22),
(257, 1.2, 11, 2016, 22),
(258, 1.2, 12, 2016, 22),
(259, 6.02, 1, 2016, 24),
(260, 11.65, 2, 2016, 24),
(261, 17.67, 3, 2016, 24),
(262, 20.58, 4, 2016, 24),
(263, 23.5, 5, 2016, 24),
(264, 25.44, 6, 2016, 24),
(265, 27.38, 7, 2016, 24),
(266, 29.32, 8, 2016, 24),
(267, 31.26, 9, 2016, 24),
(268, 33.2, 10, 2016, 24),
(269, 35.15, 11, 2016, 24),
(270, 37.09, 12, 2016, 24),
(271, 0.19, 1, 2016, 25),
(272, 0.19, 2, 2016, 25),
(273, 0.39, 3, 2016, 25),
(274, 0.39, 4, 2016, 25),
(275, 0.78, 5, 2016, 25),
(276, 0.78, 6, 2016, 25),
(277, 0.78, 7, 2016, 25),
(278, 0.97, 8, 2016, 25),
(279, 1.17, 9, 2016, 25),
(280, 1.36, 10, 2016, 25),
(281, 1.75, 11, 2016, 25),
(282, 1.75, 12, 2016, 25),
(283, 0.7, 1, 2016, 26),
(284, 0.7, 2, 2016, 26),
(285, 0.7, 3, 2016, 26),
(286, 0.72, 4, 2016, 26),
(287, 0.72, 5, 2016, 26),
(288, 0.72, 6, 2016, 26),
(289, 0.72, 7, 2016, 26),
(290, 0.72, 8, 2016, 26),
(291, 0.72, 9, 2016, 26),
(292, 0.7, 10, 2016, 26),
(293, 0.7, 11, 2016, 26),
(294, 0.7, 12, 2016, 26),
(295, 100, 11, 2016, 29),
(296, 100, 1, 2016, 29),
(297, 100, 2, 2016, 29),
(298, 100, 3, 2016, 29),
(299, 100, 4, 2016, 29),
(300, 100, 5, 2016, 29),
(301, 100, 6, 2016, 29),
(302, 100, 7, 2016, 29),
(303, 100, 8, 2016, 29),
(304, 100, 9, 2016, 29),
(305, 100, 10, 2016, 29),
(306, 100, 11, 2016, 29),
(307, 100, 12, 2016, 29),
(308, 95, 1, 2016, 30),
(309, 95, 2, 2016, 30),
(310, 95, 3, 2016, 30),
(311, 95, 4, 2016, 30),
(312, 95, 5, 2016, 30),
(313, 95, 6, 2016, 30),
(314, 95, 7, 2016, 30),
(315, 95, 8, 2016, 30),
(316, 95, 9, 2016, 30),
(317, 95, 10, 2016, 30),
(318, 95, 11, 2016, 30),
(319, 95, 12, 2016, 30),
(320, 130000, 1, 2016, 31),
(321, 130000, 2, 2016, 31),
(322, 130000, 3, 2016, 31),
(323, 130000, 4, 2016, 31),
(324, 130000, 5, 2016, 31),
(325, 130000, 6, 2016, 31),
(326, 130000, 7, 2016, 31),
(327, 130000, 8, 2016, 31),
(328, 130000, 9, 2016, 31),
(329, 130000, 10, 2016, 31),
(330, 130000, 11, 2016, 31),
(331, 130000, 12, 2016, 31),
(332, 1207, 1, 2016, 33),
(333, 1207, 2, 2016, 33),
(334, 1207, 3, 2016, 33),
(335, 1207, 4, 2016, 33),
(336, 1207, 5, 2016, 33),
(337, 1207, 6, 2016, 33),
(338, 1207, 7, 2016, 33),
(339, 1207, 8, 2016, 33),
(340, 1207, 9, 2016, 33),
(341, 1207, 10, 2016, 33),
(342, 1207, 11, 2016, 33),
(343, 1207, 12, 2016, 33),
(344, 6, 1, 2016, 34),
(345, 6, 2, 2016, 34),
(346, 6, 3, 2016, 34),
(347, 6, 4, 2016, 34),
(348, 6, 5, 2016, 34),
(349, 6, 6, 2016, 34),
(350, 6, 7, 2016, 34),
(351, 6, 8, 2016, 34),
(352, 6, 9, 2016, 34),
(353, 6, 10, 2016, 34),
(354, 6, 11, 2016, 34),
(355, 6, 12, 2016, 34),
(356, 0, 1, 2016, 35),
(357, 0, 2, 2016, 35),
(358, 0, 3, 2016, 35),
(359, 0, 4, 2016, 35),
(360, 0, 5, 2016, 35),
(361, 0, 6, 2016, 35),
(362, 0, 7, 2016, 35),
(363, 0, 8, 2016, 35),
(364, 0, 9, 2016, 35),
(365, 0, 10, 2016, 35),
(366, 0, 11, 2016, 35),
(367, 0, 12, 2016, 35),
(368, 12, 1, 2016, 36),
(369, 12, 2, 2016, 36),
(370, 12, 3, 2016, 36),
(371, 12, 4, 2016, 36),
(372, 12, 5, 2016, 36),
(373, 12, 6, 2016, 36),
(374, 12, 7, 2016, 36),
(375, 12, 8, 2016, 36),
(376, 12, 9, 2016, 36),
(377, 12, 10, 2016, 36),
(378, 12, 11, 2016, 36),
(379, 12, 12, 2016, 36),
(380, 20, 1, 2016, 37),
(381, 20, 2, 2016, 37),
(382, 20, 3, 2016, 37),
(383, 20, 4, 2016, 37),
(384, 20, 5, 2016, 37),
(385, 20, 6, 2016, 37),
(386, 20, 7, 2016, 37),
(387, 20, 8, 2016, 37),
(388, 20, 9, 2016, 37),
(389, 20, 10, 2016, 37),
(390, 20, 11, 2016, 37),
(391, 20, 12, 2016, 37),
(392, 100, 1, 2016, 38),
(393, 100, 2, 2016, 38),
(394, 100, 3, 2016, 38),
(395, 100, 4, 2016, 38),
(396, 100, 5, 2016, 38),
(397, 100, 6, 2016, 38),
(398, 100, 7, 2016, 38),
(399, 100, 8, 2016, 38),
(400, 100, 9, 2016, 38),
(401, 100, 10, 2016, 38),
(402, 100, 11, 2016, 38),
(403, 100, 12, 2016, 38),
(404, 100, 1, 2016, 39),
(405, 100, 2, 2016, 39),
(406, 100, 3, 2016, 39),
(407, 100, 4, 2016, 39),
(408, 100, 5, 2016, 39),
(409, 100, 6, 2016, 39),
(410, 100, 7, 2016, 39),
(411, 100, 8, 2016, 39),
(412, 100, 9, 2016, 39),
(413, 100, 10, 2016, 39),
(414, 100, 11, 2016, 39),
(415, 100, 12, 2016, 39),
(416, 95, 1, 2016, 40),
(417, 95, 2, 2016, 40),
(418, 95, 3, 2016, 40),
(419, 95, 4, 2016, 40),
(420, 95, 5, 2016, 40),
(421, 95, 6, 2016, 40),
(422, 95, 7, 2016, 40),
(423, 95, 8, 2016, 40),
(424, 95, 9, 2016, 40),
(425, 95, 10, 2016, 40),
(426, 95, 11, 2016, 40),
(427, 95, 12, 2016, 40),
(428, 95, 1, 2016, 41),
(429, 95, 2, 2016, 41),
(430, 95, 3, 2016, 41),
(431, 95, 4, 2016, 41),
(432, 95, 5, 2016, 41),
(433, 95, 6, 2016, 41),
(434, 95, 7, 2016, 41),
(435, 95, 8, 2016, 41),
(436, 95, 9, 2016, 41),
(437, 95, 10, 2016, 41),
(438, 95, 11, 2016, 41),
(439, 95, 12, 2016, 41),
(440, 95, 1, 2016, 42),
(441, 95, 2, 2016, 42),
(442, 95, 3, 2016, 42),
(443, 95, 4, 2016, 42),
(444, 95, 5, 2016, 42),
(445, 95, 6, 2016, 42),
(446, 95, 7, 2016, 42),
(447, 95, 8, 2016, 42),
(448, 95, 9, 2016, 42),
(449, 95, 10, 2016, 42),
(450, 95, 11, 2016, 42),
(451, 95, 12, 2016, 42),
(452, 100, 1, 2016, 43),
(453, 100, 2, 2016, 43),
(454, 100, 3, 2016, 43),
(455, 100, 4, 2016, 43),
(456, 100, 5, 2016, 43),
(457, 100, 6, 2016, 43),
(458, 100, 7, 2016, 43),
(459, 100, 8, 2016, 43),
(460, 100, 9, 2016, 43),
(461, 100, 10, 2016, 43),
(462, 100, 11, 2016, 43),
(463, 100, 12, 2016, 43),
(464, 95, 1, 2016, 44),
(465, 95, 2, 2016, 44),
(466, 95, 3, 2016, 44),
(467, 95, 4, 2016, 44),
(468, 95, 5, 2016, 44),
(469, 95, 6, 2016, 44),
(470, 95, 7, 2016, 44),
(471, 95, 8, 2016, 44),
(472, 95, 9, 2016, 44),
(473, 95, 10, 2016, 44),
(474, 95, 11, 2016, 44),
(475, 95, 12, 2016, 44),
(476, 95, 1, 2016, 45),
(477, 95, 2, 2016, 45),
(478, 95, 3, 2016, 45),
(479, 95, 4, 2016, 45),
(480, 95, 5, 2016, 45),
(481, 95, 6, 2016, 45),
(482, 95, 7, 2016, 45),
(483, 95, 8, 2016, 45),
(484, 95, 9, 2016, 45),
(485, 95, 10, 2016, 45),
(486, 95, 11, 2016, 45),
(487, 95, 12, 2016, 45),
(488, 95, 1, 2016, 46),
(489, 95, 2, 2016, 46),
(490, 95, 3, 2016, 46),
(491, 95, 4, 2016, 46),
(492, 95, 5, 2016, 46),
(493, 95, 6, 2016, 46),
(494, 95, 7, 2016, 46),
(495, 95, 8, 2016, 46),
(496, 95, 9, 2016, 46),
(497, 95, 10, 2016, 46),
(498, 95, 11, 2016, 46),
(499, 95, 12, 2016, 46),
(500, 97, 1, 2016, 47),
(501, 97, 2, 2016, 47),
(502, 97, 3, 2016, 47),
(503, 97, 4, 2016, 47),
(504, 97, 5, 2016, 47),
(505, 97, 6, 2016, 47),
(506, 97, 7, 2016, 47),
(507, 97, 8, 2016, 47),
(508, 97, 9, 2016, 47),
(509, 97, 10, 2016, 47),
(510, 97, 11, 2016, 47),
(511, 97, 12, 2016, 47),
(512, 95, 1, 2016, 48),
(513, 95, 2, 2016, 48),
(514, 95, 3, 2016, 48),
(515, 95, 4, 2016, 48),
(516, 95, 5, 2016, 48),
(517, 95, 6, 2016, 48),
(518, 95, 7, 2016, 48),
(519, 95, 8, 2016, 48),
(520, 95, 9, 2016, 48),
(521, 95, 10, 2016, 48),
(522, 95, 11, 2016, 48),
(523, 95, 12, 2016, 48),
(524, 95, 1, 2016, 49),
(525, 95, 2, 2016, 49),
(526, 95, 3, 2016, 49),
(527, 95, 4, 2016, 49),
(528, 95, 5, 2016, 49),
(529, 95, 6, 2016, 49),
(530, 95, 7, 2016, 49),
(531, 95, 8, 2016, 49),
(532, 95, 9, 2016, 49),
(533, 95, 10, 2016, 49),
(534, 95, 11, 2016, 49),
(535, 95, 12, 2016, 49),
(536, 100, 1, 2016, 50),
(537, 100, 2, 2016, 50),
(538, 100, 3, 2016, 50),
(539, 100, 4, 2016, 50),
(540, 100, 5, 2016, 50),
(541, 100, 6, 2016, 50),
(542, 100, 7, 2016, 50),
(543, 100, 8, 2016, 50),
(544, 100, 9, 2016, 50),
(545, 100, 10, 2016, 50),
(546, 100, 11, 2016, 50),
(547, 100, 12, 2016, 50),
(548, 5, 1, 2016, 51),
(549, 5, 2, 2016, 51),
(550, 5, 3, 2016, 51),
(551, 5, 4, 2016, 51),
(552, 5, 5, 2016, 51),
(553, 5, 6, 2016, 51),
(554, 5, 7, 2016, 51),
(555, 5, 8, 2016, 51),
(556, 5, 9, 2016, 51),
(557, 5, 10, 2016, 51),
(558, 5, 11, 2016, 51),
(559, 5, 12, 2016, 51),
(560, 2535, 1, 2016, 32),
(561, 2535, 2, 2016, 32),
(562, 2535, 3, 2016, 32),
(563, 2535, 4, 2016, 32),
(564, 2535, 5, 2016, 32),
(565, 2535, 6, 2016, 32),
(566, 2535, 7, 2016, 32),
(567, 2535, 8, 2016, 32),
(568, 2535, 9, 2016, 32),
(569, 2535, 10, 2016, 32),
(570, 2535, 11, 2016, 32),
(571, 2535, 12, 2016, 32);

-- --------------------------------------------------------

--
-- Table structure for table `selectdepartamento`
--

DROP TABLE IF EXISTS `selectdepartamento`;
CREATE TABLE `selectdepartamento` (
  `iddepartamento` int(15) UNSIGNED NOT NULL,
  `nombredep` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `selectdepartamento`
--

INSERT INTO `selectdepartamento` (`iddepartamento`, `nombredep`) VALUES
(1, 'Almacen de Refacciones'),
(2, 'Cuentas Por Cobrar'),
(3, 'Cuentas Por Pagar'),
(4, 'Cedi'),
(5, 'Compras'),
(6, 'Gestion de Personal'),
(7, 'Administracion'),
(9, 'Seguridad Industrial'),
(10, 'Sistemas'),
(11, 'Ventas1'),
(12, 'Ventas2'),
(13, 'Ventas3'),
(14, 'Ventas4'),
(15, 'Ventas5'),
(16, 'Ventas6'),
(17, 'Ventas7'),
(18, 'Ventas8'),
(19, 'Ventas9'),
(20, 'Ventas10');

-- --------------------------------------------------------

--
-- Table structure for table `selectindicador`
--

DROP TABLE IF EXISTS `selectindicador`;
CREATE TABLE `selectindicador` (
  `idindicador` int(15) UNSIGNED NOT NULL,
  `nombreind` varchar(100) NOT NULL,
  `iddepartamento` int(15) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `selectindicador`
--

INSERT INTO `selectindicador` (`idindicador`, `nombreind`, `iddepartamento`) VALUES
(1, 'Rotacion de inventarios', 1),
(2, 'Tiempo de permanencia de inventarios', 1),
(5, 'Indice de rotacion de cartera', 2),
(6, 'Plazo promedio de cobro', 2),
(7, 'Cartera vencida a mas de 120 dias', 2),
(8, 'Plazo promedio de pago sin trigos', 3),
(9, 'Indice de rotacion de cartera sin trigos', 3),
(10, 'Rotacion de inventarios', 4),
(11, 'Tiempo de permanencia de inventarios', 4),
(12, 'Ciclo operacional', 4),
(13, 'Eficiencia de Compras', 5),
(14, 'Tiempo extra', 6),
(15, 'Ausentismo', 6),
(16, 'Rotacion de personal', 6),
(17, 'Horas de capacitacion', 6),
(18, 'Gastos de capacitacion', 6),
(19, 'Endeudamiento', 7),
(20, 'Liquidez', 7),
(21, 'Rentabilidad', 7),
(22, 'Capital de trabajo', 7),
(23, 'Impuestos', 8),
(24, 'Indice de riesgo', 9),
(25, 'Indice de accidentabilidad', 9),
(26, 'Prima de riesgo', 9),
(27, 'Eficiencia de Sistemas', 10),
(31, 'Bultos de Harina 44', 13),
(29, 'Programa de Carga Diaria (a tiempo)', 11),
(30, 'Avance de proyectos tecnicos de marketing', 12),
(32, 'Bultos de Harina preparada 20kg', 13),
(33, 'Cajas de Mejorante 8.8 kg', 13),
(34, 'Clientes nuevos (Numero)', 13),
(35, 'Numero de Clientes Perdidos', 13),
(36, 'Demostraciones a Clientes Nuevos', 13),
(37, 'Visita a Clientes por Direccion de Ventas', 13),
(38, 'Estadisticas de Venta Contra el Mes Anterior (Bultos)', 14),
(39, 'Retroalimentacion Estadistica', 14),
(40, 'Avance de proyectos tecnicos Inv. y Des. Harinas Blancas', 15),
(41, 'Nivel de Surtimiento Palm (Paqueteria)', 16),
(42, 'Nivel Surtimiento Pellets', 17),
(43, 'Nivel de Surtimiento Bimbo', 17),
(44, 'Nivel de Surtimiento Kellogg', 18),
(45, 'Nivel de Surtimiento Nestle Gerber', 18),
(46, 'Nivel de Surtimiento a Purina', 18),
(47, 'Nivel de Surtimiento Wal-Mart', 18),
(48, 'Nivel de Surtimiento Harinas Galletas', 19),
(49, 'Nivel de Surtimiento Harinas Global', 19),
(50, 'Nivel de Surtimiento Ferrero', 19),
(51, 'Crecimiento Guadalajara (con respecto al mes anterior)', 20);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `departamento` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `departamento`) VALUES
(1, 'Sistemas', 'S1st3m4s', 'Sistemas'),
(2, 'Impuestos', '1mpu3st0s', 'Impuestos'),
(3, 'Caja', 'C4j4', 'Tesoreria'),
(4, 'Direccion', 'D1r3cc10n', 'Supervision'),
(5, 'Gestion', 'G3st10n', 'Gestion de Personal'),
(6, 'Contabilidad', 'C0nt4b1l1d4d', 'Administracion'),
(7, 'Compras', 'C0mpr4s', 'Compras'),
(8, 'Seguridad', 'S3gur1d4d', 'Seguridad Industrial'),
(9, 'Almacen', '4lm4c3n', 'Almacen de Refacciones'),
(10, 'Credito', 'Cr3d1t0', 'Cuentas Por Cobrar'),
(11, 'Pagos', 'P4g0s', 'Cuentas Por Pagar'),
(12, 'Cedi', 'C3d1', 'Cedi'),
(13, 'BlancaR', '1234', 'Ventas1'),
(14, 'CristianB', '1234', 'Ventas2'),
(15, 'GenaroAG', '1234', 'Ventas3'),
(16, 'ManuelE', '1234', 'Ventas4'),
(17, 'JulioCGP', '1234', 'Ventas5'),
(18, 'LeonorFP', '1234', 'Ventas6'),
(19, 'DoloresR', '1234', 'Ventas7'),
(20, 'AngelesH', '1234', 'Ventas8'),
(21, 'VeronicaZ', '1234', 'Ventas9'),
(22, 'VictorM', '1234', 'Ventas10');

-- --------------------------------------------------------

--
-- Table structure for table `ventas1_prog`
--

DROP TABLE IF EXISTS `ventas1_prog`;
CREATE TABLE `ventas1_prog` (
  `id` int(11) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ventas1_prog`
--

INSERT INTO `ventas1_prog` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(3, 1, 100, 100, 2016, ' '),
(4, 2, 100, 100, 2016, ' '),
(5, 3, 100, 100, 2016, ' '),
(6, 4, 100, 100, 2016, ' '),
(7, 5, 100, 100, 2016, ' '),
(8, 6, 100, 100, 2016, ' '),
(9, 7, 100, 100, 2016, ' '),
(10, 8, 100, 100, 2016, ' '),
(11, 9, 100, 100, 2016, ' '),
(12, 10, 100, 100, 2016, ' '),
(13, 11, 100, 100, 2016, ' '),
(14, 12, 100, 100, 2016, ' '),
(15, 1, 100, 100, 2017, ' '),
(16, 2, 100, 100, 2017, ' '),
(17, 3, 100, 100, 2017, ' '),
(18, 4, 100, 100, 2017, ' '),
(19, 5, 100, 100, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas2_marketi`
--

DROP TABLE IF EXISTS `ventas2_marketi`;
CREATE TABLE `ventas2_marketi` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `ventas2_marketi`
--

INSERT INTO `ventas2_marketi` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 95, 95, 2016, ' '),
(2, 2, 95, 95, 2016, ' '),
(3, 3, 95, 95, 2016, ' '),
(4, 4, 95, 95, 2016, ' '),
(5, 5, 95, 95, 2016, ' '),
(6, 6, 95, 95, 2016, ' '),
(7, 7, 95, 95, 2016, ' '),
(8, 8, 95, 95, 2016, ' '),
(9, 9, 95, 95, 2016, ' '),
(10, 10, 95, 95, 2016, ' '),
(11, 11, 95, 95, 2016, ' '),
(12, 12, 95, 95, 2016, ' '),
(13, 1, 95, 92.5, 2017, '- Un retardo en el mes\r\n- No se llegó al porcentaje objetivo en CME');

-- --------------------------------------------------------

--
-- Table structure for table `ventas3_bult20`
--

DROP TABLE IF EXISTS `ventas3_bult20`;
CREATE TABLE `ventas3_bult20` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas3_bult20`
--

INSERT INTO `ventas3_bult20` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 2535, 2216, 2016, 'Pendiente la  Razón'),
(2, 2, 2535, 1895, 2016, 'Pendiente la  Razón'),
(3, 3, 2535, 2437, 2016, 'Pendiente la  Razón'),
(4, 4, 2535, 1846, 2016, 'Pendiente la  Razón'),
(5, 5, 2535, 1714, 2016, 'Pendiente la  Razón'),
(6, 6, 2535, 2062, 2016, 'Pendiente la  Razón'),
(7, 7, 2535, 2261, 2016, 'Pendiente la  Razón'),
(8, 8, 2535, 2571, 2016, 'Pendiente la  Razón'),
(9, 9, 2535, 2182, 2016, 'Pendiente la  Razón'),
(10, 10, 2535, 3356, 2016, 'Pendiente la  Razón'),
(11, 11, 2535, 2419, 2016, 'Pendiente  de  información'),
(12, 12, 2535, 6183, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas3_bult44`
--

DROP TABLE IF EXISTS `ventas3_bult44`;
CREATE TABLE `ventas3_bult44` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas3_bult44`
--

INSERT INTO `ventas3_bult44` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(2, 1, 130000, 140461, 2016, ' '),
(3, 2, 130000, 135647, 2016, ' '),
(4, 3, 130000, 117225, 2016, 'Por Cambio de precio en el mes anterior'),
(5, 4, 130000, 120994, 2016, 'revisar'),
(6, 5, 130000, 115666, 2016, 'Pendiente la  Razón'),
(7, 6, 130000, 120853, 2016, 'Pendiente la razón '),
(8, 7, 130000, 135017, 2016, ' '),
(9, 8, 130000, 122414, 2016, 'Pendiente de la Razon'),
(10, 9, 130000, 126093, 2016, 'Pendiente la  Razón '),
(11, 10, 130000, 127237, 2016, 'Pendiente la  Razón'),
(12, 11, 130000, 140988, 2016, ' '),
(13, 12, 130000, 135422, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas3_cajas`
--

DROP TABLE IF EXISTS `ventas3_cajas`;
CREATE TABLE `ventas3_cajas` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas3_cajas`
--

INSERT INTO `ventas3_cajas` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 1207, 920, 2016, 'Pendiente la  Razón'),
(2, 2, 1207, 1502, 2016, ' '),
(3, 3, 1207, 1940, 2016, ' '),
(4, 4, 1207, 1026, 2016, 'Periodo de  Promoción  del producto '),
(5, 5, 1207, 508, 2016, 'Periodo de  Promoción  del producto '),
(6, 6, 1207, 649, 2016, 'Periodo de  Promoción  del producto '),
(7, 7, 1207, 1058, 2016, 'Periodo de  Promoción  del producto '),
(8, 8, 1207, 909, 2016, 'Pendiente la razon'),
(9, 9, 1207, 1197, 2016, 'Pendiente registra la Razón'),
(10, 10, 1207, 1953, 2016, ' '),
(11, 11, 1207, 1406, 2016, ' '),
(12, 12, 1207, 2089, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas3_clientes`
--

DROP TABLE IF EXISTS `ventas3_clientes`;
CREATE TABLE `ventas3_clientes` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas3_clientes`
--

INSERT INTO `ventas3_clientes` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 6, 6, 2016, ' '),
(2, 2, 6, 14, 2016, ' '),
(3, 3, 6, 7, 2016, ' '),
(4, 4, 6, 12, 2016, ' '),
(5, 5, 6, 10, 2016, ' '),
(6, 6, 6, 14, 2016, ' '),
(7, 7, 6, 10, 2016, ' '),
(8, 8, 6, 5, 2016, 'Pendiente  de  información'),
(9, 9, 6, 8, 2016, ' '),
(10, 10, 6, 8, 2016, ' '),
(11, 11, 6, 8, 2016, ' '),
(12, 12, 6, 5, 2016, 'revisar');

-- --------------------------------------------------------

--
-- Table structure for table `ventas3_demos`
--

DROP TABLE IF EXISTS `ventas3_demos`;
CREATE TABLE `ventas3_demos` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas3_demos`
--

INSERT INTO `ventas3_demos` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 12, 12, 2016, ' '),
(3, 2, 12, 12, 2016, ' '),
(4, 3, 12, 12, 2016, ' '),
(5, 4, 12, 12, 2016, ' '),
(6, 5, 12, 12, 2016, ' '),
(7, 6, 12, 12, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas3_numero`
--

DROP TABLE IF EXISTS `ventas3_numero`;
CREATE TABLE `ventas3_numero` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas3_numero`
--

INSERT INTO `ventas3_numero` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 0, 0, 2016, ' '),
(3, 2, 0, 0, 2016, ' '),
(4, 3, 0, 0, 2016, ' '),
(5, 4, 0, 0, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas3_visit`
--

DROP TABLE IF EXISTS `ventas3_visit`;
CREATE TABLE `ventas3_visit` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas3_visit`
--

INSERT INTO `ventas3_visit` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 20, 20, 2016, ' '),
(2, 2, 20, 20, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas4_esta`
--

DROP TABLE IF EXISTS `ventas4_esta`;
CREATE TABLE `ventas4_esta` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas4_esta`
--

INSERT INTO `ventas4_esta` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(3, 5, 100, 100, 2016, ' '),
(4, 6, 100, 100, 2016, ' '),
(5, 7, 100, 100, 2016, ' '),
(6, 8, 100, 100, 2016, ' '),
(7, 9, 100, 100, 2016, ' '),
(8, 10, 100, 100, 2016, ' '),
(9, 11, 100, 100, 2016, ' '),
(10, 12, 100, 100, 2016, ' '),
(11, 4, 100, 100, 2016, ''),
(12, 3, 100, 100, 2016, ''),
(13, 2, 100, 100, 2016, ''),
(14, 1, 100, 100, 2016, '');

-- --------------------------------------------------------

--
-- Table structure for table `ventas4_retro`
--

DROP TABLE IF EXISTS `ventas4_retro`;
CREATE TABLE `ventas4_retro` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas4_retro`
--

INSERT INTO `ventas4_retro` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 100, 100, 2016, ' '),
(2, 2, 100, 100, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas5_avanc`
--

DROP TABLE IF EXISTS `ventas5_avanc`;
CREATE TABLE `ventas5_avanc` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas5_avanc`
--

INSERT INTO `ventas5_avanc` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(2, 1, 95, 95, 2016, ' '),
(3, 2, 95, 95, 2016, ' '),
(4, 3, 95, 95, 2016, ' '),
(5, 4, 95, 95, 2016, ' '),
(6, 5, 95, 95, 2016, ' '),
(7, 6, 95, 95, 2016, ' '),
(8, 7, 95, 95, 2016, ' '),
(9, 8, 95, 95, 2016, ' '),
(10, 9, 95, 95, 2016, ' '),
(11, 10, 95, 95, 2016, ' '),
(12, 11, 95, 95, 2016, ' '),
(13, 12, 95, 95, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas6_palm`
--

DROP TABLE IF EXISTS `ventas6_palm`;
CREATE TABLE `ventas6_palm` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas6_palm`
--

INSERT INTO `ventas6_palm` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(2, 1, 95, 95, 2016, ' '),
(3, 2, 95, 95, 2016, ' '),
(4, 3, 95, 95, 2016, ' '),
(5, 4, 95, 95, 2016, ' '),
(6, 5, 95, 95, 2016, ' '),
(7, 6, 95, 95, 2016, ' '),
(8, 7, 95, 95, 2016, ' '),
(9, 8, 95, 95, 2016, ' '),
(10, 9, 95, 95, 2016, ' '),
(11, 10, 95, 95, 2016, ' '),
(12, 11, 95, 95, 2016, ' '),
(13, 12, 95, 99, 2016, ' '),
(14, 1, 95, 99.69, 2017, ' '),
(15, 2, 95, 97.3, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas7_bimbo`
--

DROP TABLE IF EXISTS `ventas7_bimbo`;
CREATE TABLE `ventas7_bimbo` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas7_bimbo`
--

INSERT INTO `ventas7_bimbo` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(2, 1, 100, 100, 2016, ' '),
(3, 2, 100, 100, 2016, ' '),
(4, 3, 100, 100, 2016, ' '),
(5, 4, 100, 100, 2016, ' '),
(6, 5, 100, 100, 2016, ' '),
(7, 6, 100, 100, 2016, ' '),
(8, 7, 100, 100, 2016, ' '),
(9, 8, 100, 100, 2016, ' '),
(10, 9, 100, 100, 2016, ' '),
(11, 10, 100, 100, 2016, ' '),
(12, 11, 100, 100, 2016, ' '),
(13, 12, 100, 100, 2016, ' '),
(14, 1, 100, 100, 2017, ' '),
(15, 2, 100, 100, 2017, ' '),
(16, 3, 100, 100, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas7_pellets`
--

DROP TABLE IF EXISTS `ventas7_pellets`;
CREATE TABLE `ventas7_pellets` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas7_pellets`
--

INSERT INTO `ventas7_pellets` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(5, 2, 95, 95, 2016, ' '),
(4, 1, 95, 95, 2016, ' '),
(6, 3, 95, 95, 2016, ' '),
(7, 4, 95, 95, 2016, ' '),
(8, 5, 95, 95, 2016, ' '),
(9, 6, 95, 95, 2016, ' '),
(10, 7, 95, 95, 2016, ' '),
(11, 8, 95, 95, 2016, ' '),
(12, 9, 95, 95, 2016, ' '),
(13, 10, 95, 95, 2016, ' '),
(14, 11, 95, 95, 2016, ' '),
(15, 12, 95, 100, 2016, ' '),
(16, 1, 95, 100, 2017, ' '),
(17, 2, 95, 95, 2017, ' '),
(18, 3, 95, 100, 2017, ' '),
(19, 4, 95, 100, 2017, ' '),
(20, 5, 95, 100, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas8_kellog`
--

DROP TABLE IF EXISTS `ventas8_kellog`;
CREATE TABLE `ventas8_kellog` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas8_kellog`
--

INSERT INTO `ventas8_kellog` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 95, 95, 2016, ' '),
(2, 2, 95, 95, 2016, ' '),
(3, 3, 95, 95, 2016, ' '),
(4, 4, 95, 95, 2016, ' '),
(5, 5, 95, 95, 2016, ' '),
(6, 6, 95, 99.8, 2016, ' '),
(7, 7, 95, 95, 2016, ' '),
(8, 8, 95, 95, 2016, ' '),
(9, 9, 95, 95, 2016, ' '),
(10, 10, 95, 99.95, 2016, ' '),
(11, 11, 95, 95, 2016, ' '),
(12, 12, 95, 94, 2016, 'revisar'),
(13, 1, 95, 100, 2017, ''),
(16, 2, 95, 100, 2017, ' '),
(17, 3, 95, 100, 2017, ' '),
(18, 4, 95, 100, 2017, ' '),
(19, 5, 95, 0, 2017, ''),
(20, 6, 95, 95, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas8_nestle`
--

DROP TABLE IF EXISTS `ventas8_nestle`;
CREATE TABLE `ventas8_nestle` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas8_nestle`
--

INSERT INTO `ventas8_nestle` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 95, 95, 2016, ' '),
(2, 2, 95, 95, 2016, ' '),
(3, 3, 95, 95, 2016, ' '),
(4, 4, 95, 95, 2016, ' '),
(5, 5, 95, 95, 2016, ' '),
(6, 6, 95, 100, 2016, ' '),
(7, 7, 95, 100, 2016, ' '),
(8, 8, 95, 100, 2016, ' '),
(9, 9, 95, 99.57, 2016, ' '),
(10, 10, 95, 95, 2016, ' '),
(11, 11, 95, 95, 2016, ' '),
(12, 12, 95, 95, 2016, ' '),
(13, 1, 95, 100, 2017, ' '),
(14, 2, 95, 100, 2017, ' '),
(15, 3, 95, 100, 2017, ' '),
(16, 4, 95, 95, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas8_purina`
--

DROP TABLE IF EXISTS `ventas8_purina`;
CREATE TABLE `ventas8_purina` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas8_purina`
--

INSERT INTO `ventas8_purina` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 95, 95, 2016, ' '),
(2, 2, 95, 95, 2016, ' '),
(3, 3, 95, 95, 2016, ' '),
(4, 4, 95, 95, 2016, ' '),
(5, 5, 95, 95, 2016, ' '),
(6, 6, 95, 92.69, 2016, ' '),
(7, 7, 95, 87.38, 2016, 'Por Espacio en  Unidad'),
(8, 8, 95, 95.51, 2016, ''),
(9, 9, 95, 95, 2016, ' '),
(10, 10, 95, 88.31, 2016, 'Por espacio en undiad y  tiempos limtidos de carga por retrasos en arribo de las unidades'),
(11, 11, 95, 95, 2016, ' '),
(12, 12, 95, 95, 2016, ' '),
(13, 1, 95, 88, 2017, 'Insuficiencia de salvado'),
(14, 2, 95, 95.53, 2017, ' '),
(15, 3, 95, 90, 2017, 'Insuficiencia de Salvado'),
(16, 4, 95, 91.51, 2017, 'Insuficiencia de Salvado');

-- --------------------------------------------------------

--
-- Table structure for table `ventas8_walmart`
--

DROP TABLE IF EXISTS `ventas8_walmart`;
CREATE TABLE `ventas8_walmart` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas8_walmart`
--

INSERT INTO `ventas8_walmart` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(2, 1, 97, 97, 2016, ' '),
(3, 2, 97, 89, 2016, 'Perdida de Cita'),
(4, 3, 97, 90.32, 2016, '-Perdida de Cita\r\n-No dieron cita en el Portal, ni por teléfono.\r\n'),
(5, 4, 97, 97, 2016, ' '),
(6, 5, 97, 97, 2016, ' '),
(7, 6, 97, 97, 2016, ' '),
(8, 7, 97, 97, 2016, ' '),
(9, 8, 97, 97, 2016, ' '),
(10, 9, 97, 97, 2016, ' '),
(11, 10, 97, 97, 2016, ' '),
(12, 11, 97, 97, 2016, ' '),
(13, 12, 97, 100, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas9_ferrero`
--

DROP TABLE IF EXISTS `ventas9_ferrero`;
CREATE TABLE `ventas9_ferrero` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas9_ferrero`
--

INSERT INTO `ventas9_ferrero` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(2, 1, 100, 100, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas9_global`
--

DROP TABLE IF EXISTS `ventas9_global`;
CREATE TABLE `ventas9_global` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas9_global`
--

INSERT INTO `ventas9_global` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(2, 1, 95, 95, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas9_harinas`
--

DROP TABLE IF EXISTS `ventas9_harinas`;
CREATE TABLE `ventas9_harinas` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas9_harinas`
--

INSERT INTO `ventas9_harinas` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 95, 96, 2016, ' '),
(2, 2, 95, 95, 2016, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ventas10_creci`
--

DROP TABLE IF EXISTS `ventas10_creci`;
CREATE TABLE `ventas10_creci` (
  `id` int(10) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ventas10_creci`
--

INSERT INTO `ventas10_creci` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(3, 1, 5, 5, 2016, ' '),
(4, 2, 5, -23, 2016, 'Pemdiente la razón'),
(5, 3, 5, 15, 2016, ' '),
(6, 4, 5, -16, 2016, 'Pendiente la razon'),
(7, 5, 5, 49, 2016, ' '),
(8, 6, 5, -15, 2016, 'Pendiente la razon'),
(9, 7, 5, 51, 2016, ' '),
(10, 8, 5, 6, 2016, ' '),
(11, 9, 5, -14, 2016, 'Pendiente la razon'),
(12, 10, 5, 25, 2016, ' '),
(13, 11, 5, 13, 2016, ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anios`
--
ALTER TABLE `anios`
  ADD PRIMARY KEY (`idanio`);

--
-- Indexes for table `mes`
--
ALTER TABLE `mes`
  ADD PRIMARY KEY (`idmes`);

--
-- Indexes for table `objetivos`
--
ALTER TABLE `objetivos`
  ADD PRIMARY KEY (`idobj`),
  ADD KEY `idindicador` (`idindicador`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `selectdepartamento`
--
ALTER TABLE `selectdepartamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indexes for table `selectindicador`
--
ALTER TABLE `selectindicador`
  ADD PRIMARY KEY (`idindicador`),
  ADD KEY `iddepartamento` (`iddepartamento`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas1_prog`
--
ALTER TABLE `ventas1_prog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas2_marketi`
--
ALTER TABLE `ventas2_marketi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas3_bult20`
--
ALTER TABLE `ventas3_bult20`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas3_bult44`
--
ALTER TABLE `ventas3_bult44`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas3_cajas`
--
ALTER TABLE `ventas3_cajas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas3_clientes`
--
ALTER TABLE `ventas3_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas3_demos`
--
ALTER TABLE `ventas3_demos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas3_numero`
--
ALTER TABLE `ventas3_numero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas3_visit`
--
ALTER TABLE `ventas3_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas4_esta`
--
ALTER TABLE `ventas4_esta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas4_retro`
--
ALTER TABLE `ventas4_retro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas5_avanc`
--
ALTER TABLE `ventas5_avanc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas6_palm`
--
ALTER TABLE `ventas6_palm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas7_bimbo`
--
ALTER TABLE `ventas7_bimbo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas7_pellets`
--
ALTER TABLE `ventas7_pellets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas8_kellog`
--
ALTER TABLE `ventas8_kellog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas8_nestle`
--
ALTER TABLE `ventas8_nestle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas8_purina`
--
ALTER TABLE `ventas8_purina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas8_walmart`
--
ALTER TABLE `ventas8_walmart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas9_ferrero`
--
ALTER TABLE `ventas9_ferrero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas9_global`
--
ALTER TABLE `ventas9_global`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas9_harinas`
--
ALTER TABLE `ventas9_harinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas10_creci`
--
ALTER TABLE `ventas10_creci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anios`
--
ALTER TABLE `anios`
  MODIFY `idanio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mes`
--
ALTER TABLE `mes`
  MODIFY `idmes` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `idobj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=572;
--
-- AUTO_INCREMENT for table `selectdepartamento`
--
ALTER TABLE `selectdepartamento`
  MODIFY `iddepartamento` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `selectindicador`
--
ALTER TABLE `selectindicador`
  MODIFY `idindicador` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `ventas1_prog`
--
ALTER TABLE `ventas1_prog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `ventas2_marketi`
--
ALTER TABLE `ventas2_marketi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ventas3_bult20`
--
ALTER TABLE `ventas3_bult20`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ventas3_bult44`
--
ALTER TABLE `ventas3_bult44`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ventas3_cajas`
--
ALTER TABLE `ventas3_cajas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ventas3_clientes`
--
ALTER TABLE `ventas3_clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ventas3_demos`
--
ALTER TABLE `ventas3_demos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ventas3_numero`
--
ALTER TABLE `ventas3_numero`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ventas3_visit`
--
ALTER TABLE `ventas3_visit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ventas4_esta`
--
ALTER TABLE `ventas4_esta`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `ventas4_retro`
--
ALTER TABLE `ventas4_retro`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ventas5_avanc`
--
ALTER TABLE `ventas5_avanc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ventas6_palm`
--
ALTER TABLE `ventas6_palm`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ventas7_bimbo`
--
ALTER TABLE `ventas7_bimbo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ventas7_pellets`
--
ALTER TABLE `ventas7_pellets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `ventas8_kellog`
--
ALTER TABLE `ventas8_kellog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `ventas8_nestle`
--
ALTER TABLE `ventas8_nestle`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ventas8_purina`
--
ALTER TABLE `ventas8_purina`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ventas8_walmart`
--
ALTER TABLE `ventas8_walmart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ventas9_ferrero`
--
ALTER TABLE `ventas9_ferrero`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ventas9_global`
--
ALTER TABLE `ventas9_global`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ventas9_harinas`
--
ALTER TABLE `ventas9_harinas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ventas10_creci`
--
ALTER TABLE `ventas10_creci`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
