-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2018 at 07:04 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indicadores`
--
CREATE DATABASE IF NOT EXISTS `indicadores` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `indicadores`;

-- --------------------------------------------------------

--
-- Table structure for table `a1_rot`
--

DROP TABLE IF EXISTS `a1_rot`;
CREATE TABLE `a1_rot` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `a1_rot`
--

INSERT INTO `a1_rot` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(46, 1, 0.1, 0.12, 2016, ''),
(45, 12, 0.83, 1.2, 2015, ''),
(44, 11, 0.76, 1.06, 2015, ''),
(43, 10, 0.69, 0.91, 2015, ''),
(42, 9, 0.63, 0.75, 2015, ''),
(39, 6, 0.42, 0.4, 2015, ''),
(40, 7, 0.49, 0.53, 2015, ''),
(41, 8, 0.56, 0.63, 2015, ''),
(34, 1, 0.07, 0.05, 2015, ''),
(35, 2, 0.14, 0.07, 2015, ''),
(36, 3, 0.21, 0.19, 2015, ''),
(37, 4, 0.28, 0.28, 2015, ''),
(38, 5, 0.35, 0.31, 2015, ''),
(54, 3, 0.3, 0.33, 2016, ''),
(53, 2, 0.2, 0.21, 2016, ''),
(55, 4, 0.4, 0.42, 2016, ''),
(56, 5, 0.5, 0.55, 2016, ' '),
(57, 6, 0.6, 0.67, 2016, ' '),
(58, 7, 0.69, 0.85, 2016, ' '),
(59, 8, 0.79, 0.85, 2016, ' '),
(60, 9, 0.89, 0.88, 2016, 'Compras por CP, y no se le da seguimiento alas compras solicitadas por una requisicion de compra.'),
(61, 10, 0.99, 1.06, 2016, 'Compras por CP y no se le da seguimiento a los materiales solicitados mediante una requisicion de compra.'),
(62, 11, 1.09, 1.18, 2016, 'Dentro de inventario hay refacciones las cuales ya no se usa en la planta por tal motivo ya no hay una rotación de las mismas.\r\nCompras por CP y no se le da seguimiento a los materiales solicitados mediante una requisicion de compra '),
(63, 12, 1.19, 1.29, 2016, 'NO SE CUMPLIÓ EL INDICADOR POR LOS MATERIALES SUMINISTRADOS EN ALMACÉN POR CP'),
(64, 1, 0.1, 0.11, 2017, ' '),
(65, 2, 0.21, 0.17, 2017, 'Aun no se ha logrado la venta de refacciones de lento movimiento '),
(66, 3, 0.32, 0.26, 2017, 'No se ha realizado la venta de refacciones de lento movimiento.'),
(67, 4, 0.43, 0.34, 2017, 'Material acumulado solicitado por requisición de compra con carácter de urgencia.'),
(68, 5, 0.54, 0.46, 2017, 'Material acumulado solicitado por requisición de compra con carácter de urgencia.'),
(69, 6, 0.64, 0.58, 2017, 'Aun no se ha realizado la venta de refacciones de lento movimiento 	'),
(70, 7, 0.75, 0.67, 2017, 'Aun no se ha realizado la venta de refacciones de lento movimiento ');

-- --------------------------------------------------------

--
-- Table structure for table `a2_tiem`
--

DROP TABLE IF EXISTS `a2_tiem`;
CREATE TABLE `a2_tiem` (
  `id` int(11) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `a2_tiem`
--

INSERT INTO `a2_tiem` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(13, 6, 434, 455, 2015, ''),
(12, 5, 435, 488, 2015, ''),
(11, 4, 432, 429, 2015, ''),
(10, 3, 432, 474, 2015, ''),
(9, 2, 425, 477, 2015, ''),
(8, 1, 446, 578, 2015, ''),
(14, 7, 436, 394, 2015, ''),
(15, 8, 437, 380, 2015, ''),
(16, 9, 437, 361, 2015, ''),
(17, 10, 438, 331, 2015, ''),
(18, 11, 437, 312, 2015, ''),
(19, 12, 438, 301, 2015, ''),
(20, 1, 312, 252.7, 2016, 'Agregar Nota'),
(23, 2, 302, 283.93, 2016, ''),
(24, 3, 306, 279.19, 2016, ''),
(25, 4, 305, 289.49, 2016, ''),
(26, 5, 306, 276.76, 2016, ' '),
(27, 6, 306, 272.16, 2016, ' '),
(28, 7, 307, 250.16, 2016, ' '),
(29, 8, 307, 286.57, 2016, ' '),
(30, 9, 307, 311.8, 2016, 'COMPRAS POR CP Y NO SE LE DA SEGUIMIENTO A LOS MATERIALES SOLICITADOS POR UNA ÁREA MEDIANTE UNA REQUISICIÓN DE COMPRA.'),
(31, 10, 307, 287.72, 2016, 'Compras por CP Y compras realizadas mediante una requisicion de compra (refacciones u otros materiales parados)'),
(32, 11, 307, 284.43, 2016, 'Compras por CP y no le da el área seguimiento a los materiales solicitados mediante una requisicion de compra.  Refacciones obsoletas .'),
(33, 12, 307, 282.65, 2016, 'NO SE CUMPLIÓ EL INDICADOR POR LOS MATERIALES QUE SE SOLICITAN POR CP'),
(34, 1, 289, 293.4, 2017, 'Refacciones de lento movimiento y refacciones de venta '),
(35, 2, 275, 338.31, 2017, 'Aun no se ha logrado la venta de refacciones de lento movimiento '),
(36, 3, 280, 346, 2017, 'No se ha realizado la venta de refacciones de lento movimiento.'),
(37, 4, 280, 355.4, 2017, 'Material acumulado solicitado por requisición de compra con carácter de urgencia.'),
(38, 5, 282, 329.3, 2017, 'Material acumulado solicitado por requisición de compra con carácter de urgencia.'),
(39, 6, 282, 308.1, 2017, 'Aun no se ha realizado la venta de refacciones de lento movimiento 	'),
(40, 7, 283, 312.1, 2017, 'Aun no se ha realizado la venta de refacciones de lento movimiento ');

-- --------------------------------------------------------

--
-- Table structure for table `adm1_end`
--

DROP TABLE IF EXISTS `adm1_end`;
CREATE TABLE `adm1_end` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adm1_end`
--

INSERT INTO `adm1_end` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(10, 1, 58, 57.22, 2015, ''),
(11, 2, 58, 56.11, 2015, ''),
(12, 3, 58, 52.37, 2015, ''),
(13, 4, 60, 54.44, 2015, ''),
(14, 5, 70, 69.2, 2015, ''),
(15, 6, 70, 70.48, 2015, ''),
(16, 7, 65, 68.18, 2015, ''),
(17, 8, 65, 64.09, 2015, ''),
(18, 9, 65, 62.23, 2015, ''),
(19, 10, 63, 62.61, 2015, ''),
(20, 11, 63, 61.75, 2015, ''),
(21, 12, 63, 60.17, 2015, ''),
(22, 1, 59, 57.23, 2016, 'Agregar Nota'),
(23, 2, 59, 56.6, 2016, 'SE CUMPLIO CON EL OBJETIVO'),
(24, 3, 59, 57.26, 2016, ' '),
(25, 4, 61, 56.1, 2016, 'HABIA UN ERROR EN LA CAPTURA'),
(26, 5, 70, 66.19, 2016, ' '),
(27, 6, 70, 68, 2016, ' '),
(28, 7, 65, 62.01, 2016, ' '),
(29, 8, 65, 61.96, 2016, ' '),
(30, 9, 65, 60.22, 2016, ' '),
(31, 10, 63, 58.98, 2016, ' '),
(32, 11, 63, 58.52, 2016, ' '),
(33, 12, 62, 61.57, 2016, ' '),
(34, 1, 57, 58.52, 2017, 'NO SE CUMPLE DEBIDO A QUE AUMENTARON LAS DEUDAS A CORTO PLAZO'),
(35, 2, 50, 55.56, 2017, 'NO SE CUMPLE POR QUE DISMINUYO LA CARTERA DE CLIENTES Y LAS INVERSIONES'),
(36, 3, 48, 55.55, 2017, 'NO SE CUMPLIO POR QUE AUMENTARON LOS DOCUMENTOS POR COBRAR (COBERTURAS-RIBERA)'),
(37, 4, 48, 51.52, 2017, 'NO SE CUMPLIO POR QUE DISMINUYO LA CARTERA '),
(38, 5, 68, 65.44, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `adm2_liq`
--

DROP TABLE IF EXISTS `adm2_liq`;
CREATE TABLE `adm2_liq` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` varchar(2000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adm2_liq`
--

INSERT INTO `adm2_liq` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(5, 2, 1.2, 1.2, 2015, ''),
(4, 1, 1.2, 1.17, 2015, ''),
(6, 3, 1.2, 1.27, 2015, ''),
(7, 4, 1.04, 1.24, 2015, ''),
(8, 5, 1.04, 1.33, 2015, ''),
(9, 6, 1.04, 1.35, 2015, ''),
(10, 7, 1.2, 1.11, 2015, ''),
(11, 8, 1.2, 1.15, 2015, ''),
(12, 9, 1.2, 1.15, 2015, ''),
(13, 10, 1.3, 1.19, 2015, ''),
(14, 11, 1.3, 1.17, 2015, ''),
(15, 12, 1.3, 1.19, 2015, ''),
(16, 1, 1.15, 1.19, 2016, ''),
(17, 2, 1.15, 1.2, 2016, ''),
(18, 3, 1.15, 1.21, 2016, 'EN MARZO FUERON MENOS LAS VENTAS'),
(19, 4, 1.25, 1.22, 2016, 'POR QUE MIS DEUDAS SON MAYORES DE LO QUE DISPONGO PARA PAGAR'),
(20, 5, 1.25, 1.27, 2016, ' '),
(21, 6, 1.25, 1.26, 2016, ' '),
(22, 7, 1.15, 1.18, 2016, ' '),
(23, 8, 1.15, 1.19, 2016, ' '),
(24, 9, 1.15, 1.21, 2016, ' '),
(25, 10, 1.2, 1.23, 2016, ' '),
(26, 11, 1.2, 1.25, 2016, ' '),
(27, 12, 1.2, 1.22, 2016, ' '),
(28, 1, 1.2, 1.22, 2017, ' '),
(29, 2, 1.2, 1.17, 2017, 'DISMINUYE LA CARTERA, INVENTARIOS DE MATERIA PRIMA'),
(30, 3, 1.2, 1.18, 2017, 'DISMINUYERON LOS INVENTARIOS, EL IVA POR ACREDITAR'),
(31, 4, 1.2, 1.22, 2017, ' '),
(32, 5, 1.2, 1.58, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `adm3_rent`
--

DROP TABLE IF EXISTS `adm3_rent`;
CREATE TABLE `adm3_rent` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adm3_rent`
--

INSERT INTO `adm3_rent` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(6, 3, 4, 7.37, 2015, ''),
(5, 2, 4, 6.22, 2015, ''),
(4, 1, 4, 6.77, 2015, ''),
(7, 4, 2.6, 6.11, 2015, ''),
(8, 5, 2.6, 5.59, 2015, ''),
(9, 6, 2.6, 4.96, 2015, ''),
(10, 7, 3.5, 4.04, 2015, ''),
(11, 8, 3.5, 4.8, 2015, ''),
(12, 9, 4, 4.83, 2015, ''),
(13, 10, 5, 5.86, 2015, ''),
(14, 11, 5, 5.36, 2015, ''),
(15, 12, 5, 5.49, 2015, ''),
(16, 1, 5, 6.76, 2016, ''),
(17, 2, 5, 5.24, 2016, ''),
(18, 3, 5, 4.32, 2016, 'DISMINUYEN LAS VENTAS'),
(19, 4, 5.5, 3.86, 2016, 'POR QUE AUMENTO EL COSTO DE VENTA'),
(20, 5, 5.6, 4.82, 2016, 'FUERON MENORES LAS VENTAS'),
(21, 6, 5.5, 5.33, 2016, 'EN JUNIO HAY MAS GASTOS'),
(22, 7, 4.5, 4.78, 2016, ' '),
(23, 8, 4.5, 4.34, 2016, 'no se cumple con el objetivo debido a la falta de ventas'),
(24, 9, 4.5, 4.34, 2016, 'no se cumple con el objetivo debido la falta de ventas'),
(25, 10, 5, 4.15, 2016, 'no se cumple con el objetivo debido a la falta de capacidad de molienda por lo tanto se contrata a un  externo'),
(26, 11, 5, 3.89, 2016, 'no se cumplió con el objetivo debido a que se esta comprando la harina con un precio mas elevado, al que se esta vendiendo.'),
(27, 12, 5.5, 3.93, 2016, 'no se cumplió debido a que nos esta afectado el tipo de cambio en la compra de trenes de trigo.'),
(28, 1, 4, 7.03, 2017, ' '),
(29, 2, 4.5, 5.66, 2017, ' '),
(30, 3, 5, 4.41, 2017, 'AUMENTO DE GASTOS FINANCIEROS'),
(31, 4, 5, 4.31, 2017, 'AUMENTAN LOS GASTOS DE VENTA Y BODEGAS'),
(32, 5, 5, 4.87, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `adm4_cap`
--

DROP TABLE IF EXISTS `adm4_cap`;
CREATE TABLE `adm4_cap` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adm4_cap`
--

INSERT INTO `adm4_cap` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(11, 5, 1, 1.27, 2015, ''),
(10, 4, 1, 1.16, 2015, ''),
(9, 3, 1.1, 1.18, 2015, ''),
(8, 2, 1.1, 1.12, 2015, ''),
(7, 1, 1.1, 1, 2015, ''),
(12, 6, 1, 1.3, 2015, ''),
(13, 7, 1.15, 1.07, 2015, ''),
(14, 8, 1.15, 1.11, 2015, ''),
(15, 9, 1.15, 1.1, 2015, ''),
(16, 10, 1.2, 1.13, 2015, ''),
(17, 11, 1.3, 1.12, 2015, ''),
(18, 12, 1.4, 1.15, 2015, ''),
(19, 1, 1.07, 1.14, 2016, ''),
(20, 2, 1.1, 1.15, 2016, ''),
(21, 3, 1.11, 1.16, 2016, ' '),
(22, 4, 1.15, 1.17, 2016, ' '),
(23, 5, 1.2, 1.23, 2016, ' '),
(24, 6, 1.2, 1.23, 2016, ' '),
(25, 7, 1.1, 1.15, 2016, ' '),
(26, 8, 1.1, 1.15, 2016, ' '),
(27, 9, 1.15, 1.17, 2016, ' '),
(28, 10, 1.15, 1.19, 2016, ' '),
(29, 11, 1.2, 1.2, 2016, ' '),
(30, 12, 1.2, 1.03, 2016, 'no se cumplió debido a la compra de dólares para pago de trenes y el tipo de cambio esta elevado'),
(31, 1, 1.2, 1.2, 2017, ' '),
(32, 2, 1.2, 1.14, 2017, 'XX'),
(33, 3, 1.2, 1.15, 2017, 'NO SE CUMPLIO POR LA COMPRA DE FOWARD Y EL PAGO DE INTERESES'),
(34, 4, 1.2, 1.2, 2017, ' '),
(35, 5, 1.25, 1.54, 2017, ' ');

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
-- Table structure for table `ced1_rot`
--

DROP TABLE IF EXISTS `ced1_rot`;
CREATE TABLE `ced1_rot` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ced1_rot`
--

INSERT INTO `ced1_rot` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(9, 1, 0.33, 0.4, 2015, ''),
(10, 2, 0.67, 0.7, 2015, ''),
(11, 3, 1, 1.1, 2015, ''),
(12, 4, 1.33, 1.5, 2015, ''),
(13, 5, 1.67, 2.07, 2015, ''),
(14, 6, 2, 2.6, 2015, ''),
(15, 7, 2.33, 3.14, 2015, ''),
(16, 8, 2.67, 3.6, 2015, ''),
(17, 9, 3, 3.83, 2015, ''),
(18, 10, 3.33, 4.5, 2015, ''),
(19, 11, 3.67, 4.86, 2015, ''),
(20, 12, 4, 5.29, 2015, ''),
(21, 1, 0.44, 0.35, 2016, 'Agregar Nota'),
(22, 2, 0.88, 0.58, 2016, ''),
(23, 3, 1.32, 1, 2016, 'inventario de seguridad'),
(24, 4, 1.76, 1.45, 2016, 'Varios articulos del inventario sin movimiento'),
(25, 5, 2.21, 1.74, 2016, ' '),
(26, 6, 2.65, 1.97, 2016, 'Cambio de estación y generación de inventario de seguridad'),
(27, 7, 3.09, 2.17, 2016, 'Altos inventarios'),
(28, 8, 3.53, 2.36, 2016, 'stock '),
(29, 9, 3.97, 2.36, 2016, 'se compra con pronostico '),
(30, 10, 3.53, 2.7, 2016, 'Por los pronósticos poco acertados'),
(31, 11, 4.85, 3.38, 2016, 'SE PREPARA STOCK DE MATERIALES PARA ABSTECER LOS MESES DE DICIEMBRE Y ENERO'),
(32, 12, 5.29, 3.55, 2016, 'Stock de material para fin de año '),
(33, 1, 0.32, 0.24, 2017, 'no se cumple por la alto nivel de inventario'),
(34, 2, 0.64, 0.68, 2017, ' '),
(35, 3, 0.96, 1.07, 2017, 'por los niveles de inventario'),
(36, 4, 1.28, 1.45, 2017, ' '),
(37, 5, 1.6, 1.81, 2017, ' '),
(38, 6, 1.92, 2.28, 2017, ' '),
(39, 7, 2.24, 2.55, 2017, ' '),
(40, 8, 2.56, 2.93, 2017, ' '),
(41, 9, 2.88, 3.43, 2017, ' '),
(42, 10, 3.2, 3.78, 2017, ' '),
(43, 11, 3.53, 4.22, 2017, ' '),
(44, 12, 3.85, 4.65, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ced2_tiem`
--

DROP TABLE IF EXISTS `ced2_tiem`;
CREATE TABLE `ced2_tiem` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ced2_tiem`
--

INSERT INTO `ced2_tiem` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(4, 2, 88.5, 81.88, 2015, ''),
(3, 1, 93, 77.78, 2015, ''),
(5, 3, 90, 78.9, 2015, ''),
(6, 4, 90, 79.54, 2015, ''),
(7, 5, 90.6, 72.88, 2015, ''),
(8, 6, 90.5, 70.36, 2015, ''),
(9, 7, 90.86, 67.55, 2015, ''),
(10, 8, 91.13, 67.89, 2015, ''),
(11, 9, 91, 71.21, 2015, ''),
(12, 10, 91.2, 67.58, 2015, ''),
(13, 11, 91.09, 68.67, 2015, ''),
(14, 12, 91.25, 68.94, 2015, ''),
(15, 1, 70.28, 87.9, 2016, ''),
(17, 2, 68.02, 102.86, 2016, 'Se compra para generar un inventario'),
(18, 3, 68.77, 90.55, 2016, 'Producto fabricado adelantado a su entrega.'),
(19, 4, 68.58, 83.47, 2016, 'Varios articulos sin movimiento comprados para productos nuevos.'),
(20, 5, 68.92, 87.38, 2016, 'Por stock de seguridad'),
(21, 6, 68.77, 92.53, 2016, 'se genera stock de seguridad para 3 meses'),
(22, 7, 68.99, 98.31, 2016, 'Altos inventarios'),
(23, 8, 69.15, 103.24, 2016, 'Por el movimiento'),
(24, 9, 69.15, 103.39, 2016, 'Los pronósticos no son asertados'),
(25, 10, 69.15, 102, 2016, 'pronosticos'),
(26, 11, 69.05, 99.55, 2016, 'GENERACION DE STOCK POR FIN DE AÑO'),
(27, 12, 69.15, 103.09, 2016, 'stock para fin de año'),
(28, 1, 96.72, 131.53, 2017, 'por los altos niveles de inventario'),
(29, 2, 92.04, 87.27, 2017, ' '),
(30, 3, 93.6, 83.94, 2017, 'por los altos niveles de inventario'),
(31, 4, 93.6, 82.88, 2017, ' '),
(32, 5, 94.22, 83.57, 2017, ' '),
(33, 7, 94.49, 83.02, 2017, ' '),
(34, 6, 94.12, 79.31, 2017, ''),
(35, 8, 94.77, 82.95, 2017, ' '),
(36, 9, 94.64, 79.51, 2017, 'se cumple porque se logro menos tiempo de lo acordado'),
(37, 10, 94.85, 80.46, 2017, ' '),
(38, 11, 94.73, 79.17, 2017, ' '),
(39, 12, 94.9, 78.51, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `ced3_cicl`
--

DROP TABLE IF EXISTS `ced3_cicl`;
CREATE TABLE `ced3_cicl` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ced3_cicl`
--

INSERT INTO `ced3_cicl` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(3, 1, 139.04, 124.16, 2015, ''),
(4, 2, 132.31, 129.85, 2015, ''),
(5, 3, 134.55, 125.48, 2015, ''),
(6, 4, 134.55, 126.12, 2015, ''),
(7, 5, 135.45, 112.96, 2015, ''),
(8, 6, 135.3, 110.64, 2015, ''),
(10, 7, 135.84, 99.65, 2015, ''),
(11, 8, 136.24, 100.78, 2015, ''),
(12, 9, 136.05, 104.88, 2015, ''),
(13, 10, 136.35, 101.63, 2015, ''),
(14, 11, 136.19, 103.29, 2015, ''),
(15, 12, 136.42, 104.25, 2015, ''),
(16, 1, 120.47, 130.93, 2016, ''),
(17, 2, 116.59, 145.17, 2016, 'temporada baja  y tiempo de cobro alto'),
(18, 3, 115.94, 134.6, 2016, 'Tiempo de cobro mas amplio'),
(19, 4, 114.71, 126.64, 2016, 'Mas tiempo de cobro.'),
(20, 5, 114.74, 130.31, 2016, 'Por generacion de stock de seguridad'),
(21, 6, 114.14, 134.06, 2016, 'Aumento de inventario'),
(22, 7, 114.25, 131.71, 2016, 'Altos inventarios'),
(23, 8, 109.59, 137.23, 2016, 'inventario de stock'),
(24, 10, 110.18, 136.29, 2016, 'demasiado stock generado'),
(25, 9, 109.72, 137.23, 2016, ''),
(28, 11, 110.24, 133.69, 2016, 'STOCK GENERADO PARA FIN DE AÑO'),
(29, 12, 110.58, 137.43, 2016, 'Stock generado para fin de año'),
(30, 1, 132.89, 171.26, 2017, 'Misma situacion excedente de inventarios'),
(31, 2, 126.26, 125.64, 2017, ' '),
(32, 3, 128.4, 122.46, 2017, 'excedente de inventario'),
(33, 4, 127.4, 123.38, 2017, ' '),
(34, 5, 129.44, 124.07, 2017, ' '),
(35, 7, 124.3, 114.05, 2017, ' '),
(36, 6, 129.35, 119.67, 2017, ''),
(37, 8, 125.77, 114.93, 2017, ' '),
(38, 9, 126.52, 112.22, 2017, ' '),
(39, 10, 127.58, 113.62, 2017, ' '),
(40, 11, 136.59, 112.54, 2017, ' '),
(41, 12, 137.41, 112.41, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `com1_efic`
--

DROP TABLE IF EXISTS `com1_efic`;
CREATE TABLE `com1_efic` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `com1_efic`
--

INSERT INTO `com1_efic` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(4, 1, 85, 82, 2015, ''),
(5, 2, 85, 77, 2015, ''),
(6, 3, 85, 71, 2015, ''),
(7, 4, 88, 76, 2015, ''),
(8, 5, 88, 86, 2015, ''),
(9, 6, 88, 89, 2015, ''),
(10, 7, 88, 82, 2015, ''),
(11, 8, 90, 79, 2015, ''),
(12, 9, 90, 77, 2015, ''),
(13, 10, 90, 74, 2015, ''),
(14, 11, 90, 82, 2015, ''),
(15, 12, 70, 86, 2015, ''),
(16, 1, 80, 81, 2016, ''),
(18, 2, 80, 85, 2016, ''),
(19, 3, 80, 80, 2016, ''),
(20, 4, 85, 79, 2016, 'SOLICITUDES DE MATERIALES PARA EL SIGUIENTE MES'),
(21, 5, 85, 83, 2016, '2 PEDIDOS EN EL MES POR PARTE DEL CDI, SE GENERARON ORDENES DE COMPRA QUE SE ENTREGARÃN EN JUNIO Y JULIO'),
(22, 6, 85, 84, 2016, 'Quedaron algunos servicios y ordenes de compra por surtir.'),
(23, 7, 85, 88, 2016, ' '),
(24, 8, 88, 78, 2016, 'Se realizaron 2 pedidos en el mes de materias primas y empaques por lo que se aumentó el número de órdenes de compra por surtir en los meses siguientes.'),
(25, 9, 88, 84, 2016, 'Se generaron órdenes de compra de materias primas y empaques que serán entregadas hasta los meses siguientes.'),
(26, 10, 89, 75, 2016, 'SE HICIERON 2 PEDIDOS POR PARTE DEL CEDI, PARA PREPARAR EL CIERRE DE AÑO'),
(27, 11, 89, 75, 2016, 'PEDIDOS DE MATERIALES POR PARTE DEL CEDI PARA FIN DE AÑO Y PRINCIPIO DE 2017'),
(28, 12, 90, 83, 2016, 'Ordenes solicitadas en diciembre para ser entregadas en enero 2017'),
(29, 1, 85, 86, 2017, ' '),
(30, 2, 85, 83, 2017, 'Órdenes de Compra pendientes solicitadas para surtimiento en marzo por parte del CDI y refacciones especiales solicitadas por el almacén de refacciones.'),
(31, 3, 80, 75, 2017, 'Cedis solicito dos pedidos a inicio y a final de mes.'),
(32, 4, 80, 82, 2017, ' '),
(33, 5, 85, 88, 2017, ' '),
(34, 6, 85, 85, 2017, ' '),
(35, 7, 85, 77, 2017, 'PEDIDO A PRINCIPIO Y FIN DE MES DE MATERIAS PRIMAS Y EMPAQUES PARA SURTIMIENTO EN AGOSTO, SEPTIEMBRE Y OCTUBRE'),
(36, 8, 80, 85, 2017, ' '),
(37, 9, 85, 84, 2017, 'Diferencia mínima, corresponde a la carga para meses posteriores del pedido del CDI.'),
(38, 10, 80, 78, 2017, 'Dos pedidos en el mes por parte de CEDI'),
(39, 11, 80, 92, 2017, ' '),
(40, 12, 85, 87, 2017, ' '),
(41, 1, 85, 87, 2018, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `cpc1_ind`
--

DROP TABLE IF EXISTS `cpc1_ind`;
CREATE TABLE `cpc1_ind` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpc1_ind`
--

INSERT INTO `cpc1_ind` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(12, 6, 4.04, 4.49, 2015, ''),
(11, 5, 3.37, 3.77, 2015, ''),
(10, 4, 2.69, 2.57, 2015, ''),
(9, 3, 2.02, 1.93, 2015, ''),
(8, 2, 1.35, 1.23, 2015, ''),
(7, 1, 0.67, 0.67, 2015, ''),
(13, 7, 4.71, 6.61, 2015, ''),
(14, 8, 5.39, 7.39, 2015, ''),
(15, 9, 6.06, 8.11, 2015, ''),
(16, 10, 6.73, 8.93, 2015, ''),
(17, 11, 7.41, 9.65, 2015, ''),
(18, 12, 8.08, 10.34, 2015, ''),
(19, 1, 0.62, 0.72, 2016, ''),
(20, 2, 1.24, 1.39, 2016, ''),
(21, 3, 1.93, 2.04, 2016, ''),
(22, 4, 2.62, 2.95, 2016, ''),
(23, 5, 3.32, 3.52, 2016, ''),
(24, 6, 4.01, 4.36, 2016, ' '),
(25, 7, 4.71, 6.35, 2016, ' '),
(26, 8, 6.03, 7.15, 2016, ' '),
(27, 9, 6.73, 7.96, 2016, ' '),
(28, 10, 7.43, 8.87, 2016, ' '),
(29, 11, 8.13, 9.78, 2016, ' '),
(30, 12, 8.83, 10.63, 2016, ' '),
(31, 1, 0.86, 0.78, 2017, 'Implica que tardamos un poco mas en cobrar.'),
(32, 2, 1.72, 1.54, 2017, 'Iniciamos el año con aumentos en precio'),
(33, 3, 2.59, 2.34, 2017, 'Se cobro un poco menos'),
(34, 4, 3.55, 2.96, 2017, 'Las ventas estan muy bajas.'),
(35, 5, 4.29, 3.73, 2017, 'Por la disminución de Ventas'),
(36, 6, 5.14, 4.49, 2017, 'por las ventas Bajas'),
(37, 7, 7.11, 6.83, 2017, 'Por Ventas Bajas.'),
(38, 8, 7.84, 7.6, 2017, 'Disminución en las ventas.'),
(39, 9, 8.56, 8.34, 2017, 'Por competencia'),
(40, 10, 9.29, 9.17, 2017, 'Por los dias de cobro.'),
(41, 11, 10.01, 10.01, 2017, ' '),
(42, 12, 10.74, 10.77, 2017, ' '),
(43, 1, 0.86, 0.8, 2018, 'SE ESTA DENTRO DE LOS PARAMETROS');

-- --------------------------------------------------------

--
-- Table structure for table `cpc2_plaz`
--

DROP TABLE IF EXISTS `cpc2_plaz`;
CREATE TABLE `cpc2_plaz` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpc2_plaz`
--

INSERT INTO `cpc2_plaz` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(10, 5, 45, 40.08, 2015, ''),
(9, 4, 45, 46.69, 2015, ''),
(8, 3, 45, 46.58, 2015, ''),
(7, 2, 44, 47.97, 2015, ''),
(6, 1, 46, 46.37, 2015, ''),
(11, 6, 45, 40.28, 2015, ''),
(12, 7, 45, 32.1, 2015, ''),
(13, 8, 45, 32.89, 2015, ''),
(14, 9, 45, 33.67, 2015, ''),
(15, 10, 45, 34.05, 2015, ''),
(16, 11, 45, 34.62, 2015, ''),
(17, 12, 45, 35.31, 2015, ''),
(18, 1, 50, 43.03, 2016, 'Agregar Notas'),
(19, 2, 49, 42.31, 2016, 'El objetivo se cumpliÃ³, ya que si es menor, significa que se esta cobrando mas rÃ¡pido.'),
(20, 3, 47, 44.05, 2016, ''),
(21, 4, 46, 43.17, 2016, ''),
(22, 5, 46, 42.93, 2016, ''),
(23, 6, 45, 41.53, 2016, ' '),
(24, 7, 45, 33.4, 2016, ' '),
(25, 8, 40, 33.99, 2016, ' '),
(26, 9, 41, 34.29, 2016, ' '),
(27, 10, 41, 34.29, 2016, ' '),
(28, 11, 41, 34.14, 2016, ' '),
(29, 12, 41, 34.34, 2016, ' '),
(30, 1, 36, 39.73, 2017, 'En el lapso de Dic 2016 y Enero 2017 se originaron incrementos en la harina de 44 kg, y los clientes se taradaron en pagar.'),
(31, 2, 35, 38.37, 2017, 'Se esta cobrando con un buen tiempo'),
(32, 3, 35, 38.52, 2017, 'Se enta cobrando con buen tiempo'),
(33, 4, 34, 40.5, 2017, 'Por la temporada de calor y ventas bajas.'),
(34, 5, 35, 40.5, 2017, 'Debido a la temporada'),
(35, 6, 35, 40.36, 2017, 'Replanteamiento de objetivos'),
(36, 7, 33, 31.03, 2017, ' '),
(37, 8, 33, 31.98, 2017, ' '),
(38, 9, 34, 32.71, 2017, ' '),
(39, 10, 34, 33.16, 2017, ' '),
(40, 11, 34, 33.37, 2017, ' '),
(41, 12, 34, 33.9, 2017, ' '),
(42, 1, 35, 38.64, 2018, 'POr el cierre de año');

-- --------------------------------------------------------

--
-- Table structure for table `cpc3_cart`
--

DROP TABLE IF EXISTS `cpc3_cart`;
CREATE TABLE `cpc3_cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpc3_cart`
--

INSERT INTO `cpc3_cart` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(8, 3, 1, 2.46, 2015, ''),
(7, 2, 1, 2.21, 2015, ''),
(6, 1, 1, 2.21, 2015, ''),
(5, 1, 2.5, 3.56, 2016, ''),
(9, 4, 1.5, 2.49, 2015, ''),
(10, 5, 1.5, 2.33, 2015, ''),
(11, 6, 1.5, 3.19, 2015, ''),
(12, 7, 1.8, 3.02, 2015, ''),
(13, 8, 1.8, 2.68, 2015, ''),
(14, 9, 1.8, 3, 2015, ''),
(15, 10, 2, 3.05, 2015, ''),
(16, 11, 2, 2.6, 2015, ''),
(17, 12, 2, 2.47, 2015, ''),
(18, 2, 2.5, 2.6, 2016, ''),
(19, 3, 2.5, 3.03, 2016, 'Se elevo la cartera de clientes directos'),
(20, 4, 2.65, 2.66, 2016, 'Real'),
(21, 5, 2.65, 2.66, 2016, 'Real'),
(22, 6, 2.7, 2.21, 2016, ' '),
(23, 7, 2.7, 2.26, 2016, ' '),
(24, 8, 2.7, 2.29, 2016, ' '),
(25, 9, 2.65, 2.17, 2016, ' '),
(26, 10, 2.65, 2.77, 2016, 'poRQUE SE TIENEN SALDOS VENCIDOS EN LAS CARTERAS 301 Y 305'),
(27, 11, 2.65, 2.57, 2016, ' '),
(28, 12, 2.65, 2.26, 2016, ' '),
(29, 1, 2.55, 2.48, 2017, ' '),
(30, 2, 2.55, 2.74, 2017, 'Se inicia el año con aumentos en precio'),
(31, 3, 2.7, 2.14, 2017, ' '),
(32, 4, 2.8, 2.25, 2017, ' '),
(33, 5, 2.6, 2.25, 2017, ' '),
(34, 6, 2.2, 2.54, 2017, 'Por la poca recuperación de los clientes en situación legal.'),
(35, 7, 2.2, 2.66, 2017, 'Los clientes no cuenta con buena solvencia.'),
(36, 8, 2.2, 2.6, 2017, 'Falta de recuperación de clientes demandados.'),
(37, 9, 2.2, 2.33, 2017, 'Por cuentas incobrables'),
(38, 10, 2.6, 2.52, 2017, ' '),
(39, 11, 2.6, 2.25, 2017, ' '),
(40, 12, 2.4, 2.19, 2017, ' '),
(41, 1, 2.5, 2.35, 2018, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `cpp1_plaz`
--

DROP TABLE IF EXISTS `cpp1_plaz`;
CREATE TABLE `cpp1_plaz` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpp1_plaz`
--

INSERT INTO `cpp1_plaz` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(10, 4, 40, 35, 2015, ''),
(9, 3, 40, 39, 2015, ''),
(8, 2, 39, 39, 2015, ''),
(7, 1, 41, 42, 2015, ''),
(6, 1, 30, 41, 2016, ''),
(11, 5, 40, 34, 2015, ''),
(12, 6, 40, 32, 2015, ''),
(13, 7, 40, 31, 2015, ''),
(14, 8, 41, 31, 2015, ''),
(15, 9, 40, 30, 2015, ''),
(16, 10, 41, 30, 2015, ''),
(17, 11, 40, 30, 2015, ''),
(18, 12, 41, 31, 2015, ''),
(20, 3, 29, 43, 2016, ' '),
(21, 4, 29, 42, 2016, ' '),
(22, 5, 29, 40, 2016, ' '),
(23, 2, 38, 45, 2016, ''),
(24, 6, 29, 38, 2016, ' '),
(25, 7, 29, 36, 2016, ' '),
(26, 8, 29, 31, 2016, ' '),
(27, 9, 29, 30, 2016, ' '),
(28, 10, 29, 30, 2016, ' '),
(29, 11, 29, 30, 2016, ' '),
(30, 12, 29, 30, 2016, ' '),
(32, 1, 38, 27, 2017, 'Pago de trenes y de trigo: \r\nATTEBURY GROUP S DE RL DE CV       	 $59,362,274.53 \r\nCOMERCIALIZADORA PORTIMEX SA DE CV 	 $28,854,446.92 \r\nADM MEXICO SA DE CV                	 $20,728,807.90 \r\n'),
(33, 2, 36, 25, 2017, 'BANCO MONEX SA INSTITUCION DE BANCA	 $71,840,426.28 \r\nADM MEXICO SA DE CV                	 $58,989,347.11 \r\nBUHLER, S.A. DE C.V.               	 $39,687,802.73 \r\nATTEBURY GROUP S DE RL DE CV       	 $34,451,599.36 \r\nCOMERCIALIZADORA PORTIMEX SA DE CV 	 $32,132,137.80 \r\n'),
(34, 3, 37, 27, 2017, 'PAGOS A BUHLER, MONEX, TRASLADOS MON'),
(35, 4, 36, 29, 2017, 'COMPRAS FUERTES DE ABRIL: \r\n\r\nATTEBURY GROUP S DE RL DE CV       	 $22,993,224.82 \r\nADM MEXICO SA DE CV                	 $21,148,930.73 \r\nBANCO MONEX SA INSTITUCION DE BANCA	 $5,325,140.75 \r\nBUHLER, S.A. DE C.V.               	 $4,750,787.01 \r\nZUCARMEX SA DE CV                  	 $3,109,200.00 \r\nTRASLADOS MON DEL BAJIO SA DE CV   	 $2,384,124.07 \r\n'),
(36, 5, 37, 28, 2017, 'PAGOS EXTRAORDINARIO MAQUINA ZIP PAK, BULHER'),
(37, 6, 37, 28, 2017, 'PAGOS FUERTES DE SEGUROS, SEMILLA D MOSUSA'),
(38, 7, 37, 28, 2017, 'HAY MUCHOS PAGOS DE PROYECTOS'),
(39, 8, 37, 28, 2017, 'PAGO DE PROYECTO EN MONEDA EXTRANJERA'),
(40, 9, 37, 28, 2017, 'PAGO DE PROYECTOS'),
(41, 10, 37, 27, 2017, 'PAGO DE PROYECTOS'),
(42, 11, 34, 27, 2017, 'PAGOS FUERTES : \r\nATTEBURY GROUP S DE RL DE CV       	74,953,509.12\r\nBANCO MONEX SA INSTITUCION DE BANCA	4,392,901.09\r\nBUHLER, S.A. DE C.V.               	17,557,962.78\r\nMOLINOS DEL SUDESTE, S.A DE C.V.   	14,420,902.50\r\nZUCARMEX SA DE CV                  	6,277,390.00\r\nPARTNERTASTE, SA DE CV             	2,671,720.00\r\n'),
(43, 12, 34, 26, 2017, 'PAGOS FUERTES : \r\nATTEBURY GROUP S DE RL DE CV       	 $104,630,884.21 \r\nUNION DE EJIDOS ZONA DE CALPULALPAN	 $18,944,688.01 \r\nTRANSPORTES ESPECIALIZADOS ROBLES  	 $16,293,367.72 \r\nBANCO MONEX SA INSTITUCION DE BANCA	 $9,030,562.85 \r\nZUCARMEX SA DE CV                  	 $3,810,000.00 \r\nCONSTRUCTORA Y URBANIZADORA PEGASO 	 $2,364,301.62 \r\nEINDUS S DE RL DE CV               	 $2,308,574.52 \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cpp2_ind`
--

DROP TABLE IF EXISTS `cpp2_ind`;
CREATE TABLE `cpp2_ind` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpp2_ind`
--

INSERT INTO `cpp2_ind` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(7, 2, 1.5, 1.52, 2015, ''),
(6, 1, 0.75, 0.75, 2015, ''),
(5, 1, 1.04, 0.76, 2016, 'Agregar Nota'),
(8, 3, 2.25, 2.28, 2015, ''),
(9, 4, 3, 3.11, 2015, ''),
(10, 5, 3.75, 4.4, 2015, ''),
(11, 6, 4.5, 5.55, 2015, ''),
(12, 7, 5.25, 6.84, 2015, ''),
(13, 8, 6, 7.89, 2015, ''),
(14, 9, 6.75, 9.25, 2015, ''),
(15, 10, 7.5, 10.2, 2015, ''),
(16, 11, 8.25, 11.1, 2015, ''),
(17, 12, 9, 11.89, 2015, ''),
(18, 2, 2.07, 1.34, 2016, ' '),
(19, 3, 3.11, 2.09, 2016, ' '),
(20, 4, 4.15, 2.88, 2016, ' '),
(21, 5, 5.18, 3.78, 2016, ' '),
(22, 6, 6.22, 4.73, 2016, ' '),
(23, 7, 7.26, 5.91, 2016, ' '),
(24, 8, 8.29, 7.75, 2016, ' '),
(25, 9, 9.33, 9.04, 2016, ' '),
(26, 10, 10.37, 10.06, 2016, ' '),
(27, 11, 11.4, 11.18, 2016, ''),
(34, 1, 0.83, 2.45, 2017, 'Se realizaron compras con montos fuertes: \r\nATTEBURY GROUP S DE RL DE CV       	 $59,362,274.53 \r\nCOMERCIALIZADORA PORTIMEX SA DE CV 	 $28,854,446.92 \r\nADM MEXICO SA DE CV                	 $20,728,807.90 \r\nMOLINOS BUNGE DE MEXICO SA DE CV   	 $8,108,744.40 \r\n\r\n'),
(32, 12, 12.44, 12.13, 2016, ' '),
(35, 2, 1.65, 2.45, 2017, 'Se realizaron compras fuertes:\r\n\r\nBANCO MONEX SA INSTITUCION DE BANCA	 $71,840,426.28 \r\nADM MEXICO SA DE CV                	 $58,989,347.11 \r\nBUHLER, S.A. DE C.V.               	 $39,687,802.73 \r\nATTEBURY GROUP S DE RL DE CV       	 $34,451,599.36 \r\nCOMERCIALIZADORA PORTIMEX SA DE CV 	 $32,132,137.80 \r\n '),
(36, 3, 2.48, 3.34, 2017, 'PAGOS FUERTES'),
(37, 4, 3.31, 4.15, 2017, 'PAGOS FUERTES DE ABRIL: \r\n\r\nATTEBURY GROUP S DE RL DE CV       	 $22,993,224.82 \r\nADM MEXICO SA DE CV                	 $21,148,930.73 \r\nBANCO MONEX SA INSTITUCION DE BANCA	 $5,325,140.75 \r\nBUHLER, S.A. DE C.V.               	 $4,750,787.01 \r\nZUCARMEX SA DE CV                  	 $3,109,200.00 \r\nTRASLADOS MON DEL BAJIO SA DE CV   	 $2,384,124.07 \r\nCFE SUMINISTRADOR DE SERVICIOS     	 $1,942,631.88 \r\n'),
(38, 5, 4.13, 5.47, 2017, 'PAGOS EXTRAORDINARIOS, MAQUINA ZIP PAK Y BULHER (AMPLIACION MOLINO)'),
(39, 6, 4.96, 7.67, 2017, 'SE REALIZARON PAGOS FUERTES DE MOSUSA (SEMILLA), PAGO DE SEGUROS'),
(40, 7, 5.79, 7.67, 2017, 'PAGOS DE PROYECTOS'),
(41, 8, 6.61, 8.56, 2017, 'MUCHOS PAGOS DE PROYECTOS EN MONEDA EXTRAJERA'),
(42, 9, 7.44, 9.64, 2017, 'PAGO DE PROYECTOS'),
(43, 10, 8.27, 11.14, 2017, 'PAGO DE PROYECTOS, MUCHA AZUCAR Y COMPRA DE MUCHA HARINA '),
(44, 11, 9.89, 12.4, 2017, 'SE COMPRO MUCHO PARA EVENTO 12 DIC Y PROVISON D DICIEMBRE YA QUE NO HABRIA MAS PAGOS'),
(45, 12, 10.72, 14.21, 2017, 'SE HAN HECHO COMPRAS Y PAGO FUERTES PARA PROYECTOS ');

-- --------------------------------------------------------

--
-- Table structure for table `gest1_tiem`
--

DROP TABLE IF EXISTS `gest1_tiem`;
CREATE TABLE `gest1_tiem` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` decimal(10,2) NOT NULL,
  `reals` decimal(10,2) NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gest1_tiem`
--

INSERT INTO `gest1_tiem` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(6, 1, '200000.00', '289077.09', 2016, ''),
(7, 1, '180000.00', '225408.93', 2015, ''),
(8, 2, '360000.00', '330170.83', 2015, ''),
(9, 3, '540000.00', '430457.94', 2015, ''),
(10, 4, '720000.00', '580734.27', 2015, ''),
(11, 5, '900000.00', '839570.00', 2015, ''),
(12, 6, '1080000.00', '948231.84', 2015, ''),
(13, 7, '1260000.00', '1157881.13', 2015, ''),
(14, 8, '1440000.00', '1309385.34', 2015, ''),
(15, 9, '1620000.00', '1491402.70', 2015, ''),
(16, 10, '1800000.00', '1797221.79', 2015, ''),
(17, 11, '1980000.00', '2048601.53', 2015, ''),
(18, 12, '2160000.00', '2422449.70', 2015, ''),
(19, 2, '400000.00', '727417.47', 2016, 'Al mes de febrero, quedamos por encima de la meta en un 82%, debido a los programas de producciÃ³n '),
(20, 3, '600000.00', '904276.35', 2016, 'Al mes de marzo, quedamos por encima de la meta en un 51%, debido a los planes de producciÃ³n'),
(21, 4, '800000.00', '1011884.39', 2016, 'Al mes de marzo, quedamos por encima de la meta en un 13%, debido a lo stiempos que reportaron con anterioridad y siguen reportando las Ã¡reas de proceso'),
(22, 5, '1000000.00', '1301578.31', 2016, 'Al mes de mayo , quedamos por encima de la meta en un 131%, debido al tiempo extra pagado por la temporada de trilla\r\n'),
(23, 6, '1200000.00', '1501065.56', 2016, 'Al mes de junio, quedamos por encima de la meta en un 25%, debido al tiempo extra pagado por la temporada de trilla\r\n'),
(24, 7, '1400000.00', '1608573.01', 2016, 'Al mes de julio, quedamos por encima de la meta en un 15%, \r\n'),
(25, 8, '1600000.00', '1710708.02', 2016, 'Al mes de Agosto, quedamos por encima de la meta en un 7%, \r\n'),
(26, 9, '1800000.00', '1835212.97', 2016, 'Al mes deseptiembre, quedamos por encima de la meta en un 2%, \r\n'),
(27, 10, '2000000.00', '2205951.99', 2016, 'Al mes de octubre , quedamos por encima de la meta en un 10%, , debido a que se está trabajando semana completa sin descanso\r\n'),
(28, 11, '2200000.00', '2420971.14', 2016, 'Al mes de NOVIEMBRE , quedamos por encima de la meta en un 10%, , a pesar de que ya se implementó el día de descanso rolado\r\n'),
(29, 12, '2400000.00', '2580238.74', 2016, 'Al cierre de año, quedamos por encima del indicador en un 8%\r\n'),
(30, 1, '250000.00', '0.00', 2017, ' Al mes de  enero, quedamos en un 38%, por debajo de la meta, lo cual es favorable para la empresa \r\n'),
(33, 2, '450000.00', '223518.09', 2017, ' '),
(34, 3, '650000.00', '313410.91', 2017, ' '),
(35, 4, '850000.00', '385942.54', 2017, ' '),
(36, 5, '1150000.00', '600721.08', 2017, ' Al mes de mayo , se cumple el objetivo , ya que  quedamos en un 52%, por debajo de la meta, lo cual es favorable para la empresa \r\n'),
(37, 6, '1350000.00', '214778.59', 2017, ' '),
(38, 7, '1450000.00', '906099.85', 2017, ' '),
(39, 8, '1550000.00', '1176874.69', 2017, ' '),
(40, 9, '1650000.00', '1464971.60', 2017, ' '),
(41, 10, '1950000.00', '1761508.26', 2017, ' '),
(42, 11, '2150000.00', '0.00', 2017, ' Al mes de noviembre , se cumple el objetivo , ya que  quedamos en un 8%, por debajo de la meta, lo cual es favorable para la empresa \r\n'),
(43, 12, '2300000.00', '0.00', 2017, ' Al mes de diciembre , se cumple el objetivo anual , ya que  quedamos en un 6%, por debajo de la meta, lo cual es favorable para la empresa \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gest2_aus`
--

DROP TABLE IF EXISTS `gest2_aus`;
CREATE TABLE `gest2_aus` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gest2_aus`
--

INSERT INTO `gest2_aus` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(6, 2, 20, 8, 2015, ''),
(5, 1, 10, 5, 2015, ''),
(4, 1, 8, 11, 2016, ''),
(7, 3, 30, 23, 2015, ''),
(8, 4, 40, 26, 2015, ''),
(9, 5, 50, 32, 2015, ''),
(10, 6, 60, 42, 2015, ''),
(11, 7, 70, 49, 2015, ''),
(12, 8, 80, 54, 2015, ''),
(13, 9, 90, 59, 2015, ''),
(14, 10, 100, 67, 2015, ''),
(15, 11, 110, 79, 2015, ''),
(16, 12, 120, 85, 2015, ''),
(17, 2, 16, 21, 2016, 'al mes de febrero , no cumplimos el objetivo, quedando por encima del mismo en un 31%\r\n'),
(18, 3, 24, 27, 2016, 'al mes de marzo , no cumplimos el objetivo, quedando por encima del mismo en un 12%\r\n'),
(19, 4, 32, 36, 2016, 'Al mes de marzo, quedamos por encima de la meta en un 13%\r\n'),
(20, 5, 40, 44, 2016, 'al mes de MAYO  , no cumplimos el objetivo, quedando por encima del mismo en un 1%\r\n'),
(21, 6, 48, 62, 2016, 'al mes de junio  , no cumplimos el objetivo, quedando por encima del mismo en un 29%\r\n'),
(22, 7, 56, 74, 2016, 'al mes de julio  , no cumplimos el objetivo, quedando por encima del mismo en un 32%\r\n'),
(23, 8, 64, 84, 2016, 'al mes de agosto , no cumplimos el objetivo, quedando por encima del mismo en un 32%\r\n'),
(24, 9, 72, 94, 2016, 'al mes de septiembre , no cumplimos el objetivo, quedando por encima del mismo en un 30%\r\n'),
(25, 10, 80, 103, 2016, 'al mes de  octubre  , no cumplimos el objetivo, quedando por encima del mismo en un 29%\r\n'),
(26, 11, 88, 120, 2016, 'al mes de noviembre  , no cumplimos el objetivo, quedando por encima del mismo en un 36%\r\n'),
(27, 12, 96, 125, 2016, 'al cierre de año  , no cumplimos el objetivo, quedando por encima del mismo en un 30%\r\n'),
(28, 1, 6, 13, 2017, 'Al mes de enero, quedamos por encima de la meta en un 216%\r\n'),
(29, 2, 12, 20, 2017, 'Al mes de febrero , quedamos por encima de la meta en un 275%\r\n'),
(30, 3, 18, 53, 2017, 'Al mes de marzo , quedamos por encima de la meta en un 294%\r\n'),
(31, 4, 24, 66, 2017, 'Al mes de abril , quedamos por encima de la meta en un 275%\r\n'),
(32, 5, 35, 92, 2017, 'Al mes de mayo , quedamos por encima de la meta en un 262%, debido al abandono d etrabajo, por parte de personal eventual y algunos de planta\r\n'),
(33, 6, 50, 104, 2017, 'Al mes de junio , quedamos por encima de la meta en un 208%\r\n'),
(34, 8, 50, 148, 2017, 'Al mes de Agosto , quedamos por encima de la meta en un 211%\r\n'),
(35, 9, 80, 173, 2017, 'Al mes de septiembre, quedamos por encima de la meta en un 216%\r\n'),
(36, 10, 85, 191, 2017, 'Al mes de octubre, quedamos por encima de la meta en un 224%\r\n'),
(37, 11, 90, 215, 2017, 'Al mes de noviembre, quedamos por encima de la meta en un 238%\r\n'),
(38, 12, 95, 234, 2017, 'Al mes de diciembre, quedamos por encima de la meta en un 234%\r\n'),
(39, 7, 50, 0, 2017, '');

-- --------------------------------------------------------

--
-- Table structure for table `gest3_rot`
--

DROP TABLE IF EXISTS `gest3_rot`;
CREATE TABLE `gest3_rot` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gest3_rot`
--

INSERT INTO `gest3_rot` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(6, 2, 3, -2.4, 2015, ''),
(5, 1, 3, 0.43, 2015, ''),
(4, 1, 2, 3.27, 2016, ''),
(7, 3, 3, -0.4, 2015, ''),
(8, 4, 5, 3, 2015, ''),
(9, 5, 5, 5, 2015, ''),
(10, 6, 5, 3, 2015, ''),
(11, 7, 6, 2, 2015, ''),
(12, 8, 6, 4, 2015, ''),
(13, 9, 6, 4, 2015, ''),
(14, 10, 5, 4, 2015, ''),
(15, 11, 5, 5, 2015, ''),
(16, 12, 5, 4, 2015, ''),
(17, 2, 2, 1.4, 2016, ''),
(18, 3, 2, -0.6, 2016, ''),
(19, 4, 3, -1.3, 2016, ''),
(20, 5, 5, 5.3, 2016, 'al mes de MAYO , NO  cumplimos con el objetivo, debido a las supplencias que se han hecho del Ã¡rea de entrenamiento \r\n'),
(21, 6, 3, 6.3, 2016, 'al mes de JUNIO , NO  cumplimos con el objetivo, debido a las supplencias que se han hecho del área de entrenamiento  y mantenimiento\r\n'),
(22, 7, 4, 5, 2016, 'al mes de JULIO , NO  cumplimos con el objetivo, debido a las suplencias que se han hecho del área de entrenamiento  \r\n'),
(23, 8, 4, 4.3, 2016, 'al mes de AGOSTO , NO  cumplimos con el objetivo, debido a las suplencias que se han hecho del área de entrenamiento  \r\n'),
(24, 9, 4, 4, 2016, ' '),
(25, 10, 5, 4, 2016, ' '),
(26, 11, 5, 7, 2016, 'al mes de noviembre no cumplimos con el objetivo por las suplencias de las áreas de proceso\r\n'),
(27, 12, 5, 7.3, 2016, 'al cierre de año, quedamos por encima del indicador en un 2.3%, debido a la rotación del área de entrenamiento produción\r\n'),
(28, 1, 3, -0.05, 2017, ' '),
(29, 2, 3, 0.01, 2017, ' '),
(30, 3, 3, -0.05, 2017, ' '),
(31, 4, 3, -0.004, 2017, ' '),
(32, 5, 4, -0.05, 2017, ' '),
(33, 6, 6, -0.077, 2017, ' '),
(34, 7, 6, -0.079, 2017, ' '),
(35, 8, 4, -0.06, 2017, ' '),
(36, 9, 4, -0.05, 2017, ' '),
(37, 10, 4, -7, 2017, ' '),
(38, 11, 6, -12, 2017, ' '),
(39, 12, 6, -7, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `gest4_hor`
--

DROP TABLE IF EXISTS `gest4_hor`;
CREATE TABLE `gest4_hor` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gest4_hor`
--

INSERT INTO `gest4_hor` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(5, 1, 3, 0.32, 2015, ''),
(4, 1, 3, 0.24, 2016, 'Agregar Nota'),
(6, 2, 3, 0.79, 2015, ''),
(7, 3, 3, 1.52, 2015, ''),
(8, 4, 4, 2.01, 2015, ''),
(9, 5, 4, 2.44, 2015, ''),
(10, 6, 4, 3.03, 2015, ''),
(11, 7, 5, 3.69, 2015, ''),
(12, 8, 5, 4.22, 2015, ''),
(13, 9, 5, 4.86, 2015, ''),
(14, 10, 4, 5.85, 2015, ''),
(15, 11, 4, 6.67, 2015, ''),
(16, 12, 4, 6.84, 2015, ''),
(17, 2, 3, 0.9, 2016, 'No cumplimos con el objetivo de horas capacitaciÃ³n por persona, quedando por debajo en un 31%\r\n'),
(18, 3, 3, 1.1, 2016, 'No cumplimos con el objetivo de horas capacitaciÃ³n por persona, quedando por debajo en un 38%\r\n'),
(19, 4, 4, 1.6, 2016, 'No cumplimos con el objetivo de horas capacitaciÃ³n por persona, quedando por debajo en un 38%\r\n'),
(20, 5, 4, 1.7, 2016, 'No cumplimos con el objetivo de horas capacitaciÃ³n por persona, quedando por debajo en un \r\n'),
(21, 6, 4, 2.1, 2016, 'No cumplimos con el objetivo de horas capacitación por persona, quedando por debajo en un  52%\r\n'),
(22, 7, 5, 2.4, 2016, 'No cumplimos con el objetivo de horas capacitación por persona, quedando por debajo en un  48%\r\n'),
(23, 8, 5, 2.9, 2016, 'No cumplimos con el objetivo de horas capacitación por persona, quedando por debajo en un  57%\r\n'),
(24, 9, 5, 3.2, 2016, 'No cumplimos con el objetivo de horas capacitación por persona, quedando por debajo en un  63%\r\n'),
(25, 10, 6, 3.5, 2016, 'No cumplimos con el objetivo de horas capacitación por persona, quedando por debajo en un  58%\r\n'),
(26, 11, 6, 4.2, 2016, 'No cumplimos con el objetivo de horas capacitación por persona, quedando por debajo en un  69%\r\n'),
(27, 12, 6, 4.2, 2016, ''),
(28, 1, 1, 0.33, 2017, '  '),
(29, 2, 1, 1, 2017, ' '),
(30, 3, 1, 1.6, 2017, ' '),
(31, 4, 2, 2.1, 2017, ' '),
(32, 5, 2, 2.8, 2017, ' '),
(33, 6, 2, 3.6, 2017, ' '),
(34, 7, 3, 4.2, 2017, ' '),
(35, 8, 3, 4.8, 2017, ' '),
(36, 9, 3, 5.4, 2017, ' '),
(37, 10, 4, 6.02, 2017, ' '),
(38, 11, 4, 6.5, 2017, ' '),
(39, 12, 4, 6.9, 2017, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `gest5_gas`
--

DROP TABLE IF EXISTS `gest5_gas`;
CREATE TABLE `gest5_gas` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gest5_gas`
--

INSERT INTO `gest5_gas` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(5, 1, 600, 89.49, 2015, ''),
(4, 1, 600, 103.93, 2016, 'Agregar Nota'),
(6, 2, 600, 159.69, 2015, ''),
(7, 3, 600, 533.89, 2015, ''),
(8, 4, 800, 783.86, 2015, ''),
(9, 5, 800, 842.37, 2015, ''),
(10, 6, 800, 959.53, 2015, ''),
(11, 7, 1000, 1280.46, 2015, ''),
(12, 8, 1000, 1708.67, 2015, ''),
(13, 9, 1000, 1880.05, 2015, ''),
(14, 10, 800, 2142, 2015, ''),
(15, 11, 800, 2520.99, 2015, ''),
(16, 12, 800, 2644.58, 2015, ''),
(17, 2, 600, 616.19, 2016, ''),
(18, 3, 600, 1000.71, 2016, ''),
(19, 4, 800, 1390.05, 2016, ''),
(20, 5, 800, 1739.23, 2016, ''),
(21, 6, 800, 2255.93, 2016, ' '),
(22, 7, 1000, 2794.53, 2016, ' '),
(23, 8, 1000, 3797.99, 2016, ' '),
(24, 9, 1000, 4158.5, 2016, ' '),
(25, 10, 1200, 4740.95, 2016, ' '),
(26, 11, 1200, 4899.3, 2016, ' '),
(27, 12, 1200, 5264.15, 2016, ' '),
(28, 1, 363.64, 48.08, 2017, 'Al mes de nero, solo se cumplió el 13.22% del objetivo, debido a que no hubo capacitaciones foráneas , ni de instructores externos en planta\r\n'),
(29, 2, 727.27, 599.57, 2017, 'Al mes de febrero, solo se cumplió el 77.26% del objetivo, \r\n'),
(30, 3, 1090.91, 872.43, 2017, 'Al mes de marzo , solo se cumplió el 80% del objetivo\r\n'),
(31, 4, 1454.55, 1170.66, 2017, 'Al mes de abril, solo se cumplió el 80.48% del objetivo\r\n'),
(32, 5, 1818.18, 1860.48, 2017, 'Al mes de mayo se cumplió 100.02% el objetivo\r\n'),
(33, 6, 2181.82, 2261.6, 2017, ' '),
(34, 7, 2545.45, 2465.38, 2017, 'Al mes de  julio,  quedamos por debajo de la meta en un 3% '),
(35, 8, 2909.09, 2756.07, 2017, 'Al mes de  agosto, quedamos por debajo de la meta en un 5 %'),
(36, 9, 3272.73, 3498.99, 2017, ' '),
(37, 10, 3636.36, 3825.4, 2017, ' '),
(38, 11, 4000, 0, 2017, 'Al mes de  noviembre,superamos la meta en un 1%, lo cual es favorable; sin embargo, se superó el presupuesto asignado para este año\r\n'),
(39, 12, 4363.64, 0, 2017, 'Al mes de  diciembre, superamos la meta en un 8%, lo cual es favorable\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `impuest1`
--

DROP TABLE IF EXISTS `impuest1`;
CREATE TABLE `impuest1` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `compensacion` double NOT NULL,
  `devolucion` double NOT NULL,
  `year1` year(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `impuest1`
--

INSERT INTO `impuest1` (`id`, `idmes`, `compensacion`, `devolucion`, `year1`) VALUES
(18, 8, 0, 5812551, 2015),
(17, 7, 0, 3478842, 2015),
(16, 6, 6953016, 0, 2015),
(15, 5, 3647169, 0, 2015),
(14, 4, 3192599, 0, 2015),
(13, 3, 0, 4349467, 2015),
(12, 2, 3832594, 0, 2015),
(11, 1, 0, 5142546, 2015),
(19, 9, 4483399, 0, 2015),
(20, 10, 0, 4005102, 2015),
(21, 11, 6932724, 0, 2015),
(22, 12, 0, 6592813, 2015),
(23, 1, 198497, 0, 2016),
(25, 2, 5053481, 0, 2016),
(26, 3, 2539311, 0, 2016),
(27, 4, 3420993, 0, 2016),
(28, 5, 3484239, 0, 2016),
(29, 6, 2706788, 0, 2016),
(30, 7, 4538192, 0, 2016),
(31, 8, 2917798, 353128, 2016),
(32, 9, 2757179, 0, 2016),
(33, 1, 0, 0, 0000),
(34, 10, 3207362, 0, 2016),
(35, 11, 2666681, 0, 2016),
(36, 12, 4308427, 4610300, 2016),
(38, 1, 2854950, 5530366, 2017),
(39, 2, 2711651, 6452721, 2017),
(40, 3, 1087195, 4454866, 2017),
(41, 4, 947528, 17977044, 2017);

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
(1, 100, 1, 2016, 27),
(2, 100, 2, 2016, 27),
(3, 0.1, 1, 2016, 1),
(4, 0.21, 2, 2016, 1),
(5, 289, 1, 2016, 2),
(6, 275, 2, 2016, 2),
(7, 100, 3, 2016, 27),
(8, 100, 4, 2016, 27),
(9, 100, 5, 2016, 27),
(10, 100, 6, 2016, 27),
(11, 100, 7, 2016, 27),
(12, 100, 8, 2016, 27),
(13, 100, 9, 2016, 27),
(14, 100, 10, 2016, 27),
(15, 100, 11, 2016, 27),
(16, 100, 12, 2016, 27),
(17, 85, 1, 2016, 13),
(18, 85, 2, 2016, 13),
(19, 80, 3, 2016, 13),
(20, 80, 4, 2016, 13),
(21, 85, 5, 2016, 13),
(22, 85, 6, 2016, 13),
(23, 85, 7, 2016, 13),
(24, 80, 8, 2016, 13),
(25, 85, 9, 2016, 13),
(26, 80, 10, 2016, 13),
(27, 80, 11, 2016, 13),
(28, 85, 12, 2016, 13),
(29, 0.32, 3, 2016, 1),
(30, 0.43, 4, 2016, 1),
(31, 0.54, 5, 2016, 1),
(32, 0.64, 6, 2016, 1),
(44, 1.28, 12, 2016, 1),
(43, 1.17, 11, 2016, 1),
(42, 1.07, 10, 2016, 1),
(41, 0.96, 9, 2016, 1),
(40, 0.85, 8, 2016, 1),
(39, 0.75, 7, 2016, 1),
(45, 280, 3, 2016, 2),
(46, 280, 4, 2016, 2),
(47, 282, 5, 2016, 2),
(48, 282, 6, 2016, 2),
(49, 283, 7, 2016, 2),
(50, 284, 8, 2016, 2),
(51, 283, 9, 2016, 2),
(52, 284, 10, 2016, 2),
(53, 283, 11, 2016, 2),
(54, 284, 12, 2016, 2),
(55, 38, 1, 2016, 8),
(56, 36, 2, 2016, 8),
(57, 37, 3, 2016, 8),
(58, 36, 4, 2016, 8),
(59, 37, 5, 2016, 8),
(60, 37, 6, 2016, 8),
(61, 37, 7, 2016, 8),
(62, 37, 8, 2016, 8),
(63, 37, 9, 2016, 8),
(64, 37, 10, 2016, 8),
(65, 34, 11, 2016, 8),
(66, 34, 12, 2016, 8),
(67, 0.83, 1, 2016, 9),
(68, 1.65, 2, 2016, 9),
(69, 2.48, 3, 2016, 9),
(70, 3.31, 4, 2016, 9),
(71, 4.13, 5, 2016, 9),
(72, 4.96, 6, 2016, 9),
(73, 5.79, 7, 2016, 9),
(74, 6.61, 8, 2016, 9),
(75, 7.44, 9, 2016, 9),
(76, 8.27, 10, 2016, 9),
(77, 9.89, 11, 2016, 9),
(78, 10.72, 12, 2016, 9),
(79, 0.9, 1, 2018, 5),
(80, 1.8, 2, 2018, 5),
(81, 2.69, 3, 2018, 5),
(82, 3.44, 4, 2018, 5),
(83, 4.29, 5, 2018, 5),
(84, 5.14, 6, 2018, 5),
(85, 7.11, 7, 2018, 5),
(86, 7.38, 8, 2018, 5),
(87, 8.34, 9, 2018, 5),
(88, 8.9, 10, 2018, 5),
(89, 10.07, 11, 2018, 5),
(90, 10.72, 12, 2018, 5),
(91, 35, 1, 2018, 6),
(92, 33, 2, 2018, 6),
(93, 33, 3, 2018, 6),
(94, 35, 4, 2018, 6),
(95, 35, 5, 2018, 6),
(96, 35, 6, 2018, 6),
(97, 31, 7, 2018, 6),
(98, 34, 8, 2018, 6),
(99, 34, 9, 2018, 6),
(100, 35, 10, 2018, 6),
(101, 34, 11, 2018, 6),
(102, 35, 12, 2018, 6),
(103, 2.5, 1, 2018, 7),
(104, 2.5, 2, 2018, 7),
(105, 2.5, 3, 2018, 7),
(106, 2.3, 4, 2018, 7),
(107, 2.3, 5, 2018, 7),
(108, 2.6, 6, 2018, 7),
(109, 2.6, 7, 2018, 7),
(110, 2.6, 8, 2018, 7),
(111, 2.5, 9, 2018, 7),
(112, 2.5, 10, 2018, 7),
(113, 2.3, 11, 2018, 7),
(114, 2.3, 12, 2018, 7),
(115, 0.32, 1, 2016, 10),
(116, 0.64, 2, 2016, 10),
(117, 0.96, 3, 2016, 10),
(118, 1.28, 4, 2016, 10),
(119, 1.6, 5, 2016, 10),
(120, 1.92, 6, 2016, 10),
(121, 2.24, 7, 2016, 10),
(122, 2.56, 8, 2016, 10),
(123, 2.88, 9, 2016, 10),
(124, 3.2, 10, 2016, 10),
(125, 3.53, 11, 2016, 10),
(126, 3.85, 12, 2016, 10),
(127, 96.72, 1, 2016, 11),
(128, 92.04, 2, 2016, 11),
(129, 93.6, 3, 2016, 11),
(130, 93.6, 4, 2016, 11),
(131, 94.22, 5, 2016, 11),
(132, 94.12, 6, 2016, 11),
(133, 94.49, 7, 2016, 11),
(134, 94.77, 8, 2016, 11),
(135, 94.64, 9, 2016, 11),
(136, 94.85, 10, 2016, 11),
(137, 94.73, 11, 2016, 11),
(138, 94.9, 12, 2016, 11),
(139, 132.89, 1, 2016, 12),
(140, 126.26, 2, 2016, 12),
(141, 128.4, 3, 2016, 12),
(142, 127.4, 4, 2016, 12),
(143, 129.44, 5, 2016, 12),
(144, 129.35, 6, 2016, 12),
(145, 124.3, 7, 2016, 12),
(146, 125.77, 8, 2016, 12),
(147, 126.52, 9, 2016, 12),
(148, 127.58, 10, 2016, 12),
(149, 136.59, 11, 2016, 12),
(150, 137.41, 12, 2016, 12),
(151, 180000, 1, 2018, 14),
(152, 360000, 2, 2018, 14),
(153, 510000, 3, 2018, 14),
(154, 680000, 4, 2018, 14),
(155, 850000, 5, 2018, 14),
(156, 1020000, 6, 2018, 14),
(157, 1190000, 7, 2018, 14),
(158, 1360000, 8, 2018, 14),
(159, 1530000, 9, 2018, 14),
(160, 1700000, 10, 2018, 14),
(161, 1870000, 11, 2018, 14),
(162, 2040000, 12, 2018, 14),
(163, 15, 1, 2018, 15),
(164, 30, 2, 2018, 15),
(165, 45, 3, 2018, 15),
(166, 60, 4, 2018, 15),
(167, 75, 5, 2018, 15),
(168, 90, 6, 2018, 15),
(169, 105, 7, 2018, 15),
(170, 120, 8, 2018, 15),
(171, 135, 9, 2018, 15),
(172, 150, 10, 2018, 15),
(173, 165, 11, 2018, 15),
(174, 180, 12, 2018, 15),
(175, 1, 1, 2016, 16),
(176, 1, 2, 2016, 16),
(177, 1, 3, 2016, 16),
(178, 2, 4, 2016, 16),
(179, 2, 5, 2016, 16),
(180, 1, 6, 2016, 16),
(181, 1, 7, 2016, 16),
(182, 1, 8, 2016, 16),
(183, 1, 9, 2016, 16),
(184, 2, 10, 2016, 16),
(185, 2, 11, 2016, 16),
(186, 1, 12, 2016, 16),
(187, 1, 1, 2016, 17),
(188, 1, 2, 2016, 17),
(189, 1, 3, 2016, 17),
(190, 2, 4, 2016, 17),
(191, 2, 5, 2016, 17),
(192, 2, 6, 2016, 17),
(193, 4, 7, 2016, 17),
(194, 4, 8, 2016, 17),
(195, 4, 9, 2016, 17),
(196, 5, 10, 2016, 17),
(197, 5, 11, 2016, 17),
(198, 5, 12, 2016, 17),
(199, 281.82, 1, 2016, 18),
(200, 563.64, 2, 2016, 18),
(201, 845.45, 3, 2016, 18),
(202, 1127.27, 4, 2016, 18),
(203, 1409.09, 5, 2016, 18),
(204, 1609.91, 6, 2016, 18),
(205, 1972.73, 7, 2016, 18),
(206, 2254.55, 8, 2016, 18),
(207, 2536.36, 9, 2016, 18),
(208, 2818.18, 10, 2016, 18),
(209, 3100, 11, 2016, 18),
(210, 3381.82, 12, 2016, 18),
(211, 57, 1, 2016, 19),
(212, 50, 2, 2016, 19),
(213, 48, 3, 2016, 19),
(214, 48, 4, 2016, 19),
(215, 68, 5, 2016, 19),
(216, 68, 6, 2016, 19),
(217, 59, 7, 2016, 19),
(218, 59, 8, 2016, 19),
(219, 59, 9, 2016, 19),
(220, 56, 10, 2016, 19),
(221, 56, 11, 2016, 19),
(222, 56, 12, 2016, 19),
(223, 1.2, 1, 2016, 20),
(224, 1.2, 2, 2016, 20),
(225, 1.2, 3, 2016, 20),
(226, 1.2, 4, 2016, 20),
(227, 1.2, 5, 2016, 20),
(228, 1.31, 6, 2016, 20),
(229, 1.2, 7, 2016, 20),
(230, 1.2, 8, 2016, 20),
(231, 1.2, 9, 2016, 20),
(232, 1.25, 10, 2016, 20),
(233, 1.25, 11, 2016, 20),
(234, 1.25, 12, 2016, 20),
(235, 4, 1, 2016, 21),
(236, 4.5, 2, 2016, 21),
(237, 5, 3, 2016, 21),
(238, 5, 4, 2016, 21),
(239, 5, 5, 2016, 21),
(240, 5, 6, 2016, 21),
(241, 5, 7, 2016, 21),
(242, 5, 8, 2016, 21),
(243, 5, 9, 2016, 21),
(244, 5, 10, 2016, 21),
(245, 5, 11, 2016, 21),
(246, 5, 12, 2016, 21),
(247, 1.2, 1, 2016, 22),
(248, 1.2, 2, 2016, 22),
(249, 1.2, 3, 2016, 22),
(250, 1.2, 4, 2016, 22),
(251, 1.25, 5, 2016, 22),
(252, 1.25, 6, 2016, 22),
(253, 1.2, 7, 2016, 22),
(254, 1.2, 8, 2016, 22),
(255, 1.2, 9, 2016, 22),
(256, 1.24, 10, 2016, 22),
(257, 1.24, 11, 2016, 22),
(258, 1.24, 12, 2016, 22),
(259, 0, 1, 2016, 24),
(260, 2.73, 2, 2016, 24),
(261, 4.55, 3, 2016, 24),
(262, 6.36, 4, 2016, 24),
(263, 8.18, 5, 2016, 24),
(264, 10, 6, 2016, 24),
(265, 11.82, 7, 2016, 24),
(266, 13.64, 8, 2016, 24),
(267, 15.45, 9, 2016, 24),
(268, 17.27, 10, 2016, 24),
(269, 19.09, 11, 2016, 24),
(270, 20.91, 12, 2016, 24),
(271, 0, 1, 2016, 25),
(272, 0.18, 2, 2016, 25),
(273, 0.18, 3, 2016, 25),
(274, 0.18, 4, 2016, 25),
(275, 0.36, 5, 2016, 25),
(276, 0.36, 6, 2016, 25),
(277, 0.36, 7, 2016, 25),
(278, 0.55, 8, 2016, 25),
(279, 0.55, 9, 2016, 25),
(280, 0.73, 10, 2016, 25),
(281, 0.91, 11, 2016, 25),
(282, 0.91, 12, 2016, 25),
(283, 0.6, 1, 2016, 26),
(284, 0.6, 2, 2016, 26),
(285, 0.6, 3, 2016, 26),
(286, 0.6, 4, 2016, 26),
(287, 0.62, 5, 2016, 26),
(288, 0.62, 6, 2016, 26),
(289, 0.62, 7, 2016, 26),
(290, 0.62, 8, 2016, 26),
(291, 0.62, 9, 2016, 26),
(292, 0.63, 10, 2016, 26),
(293, 0.63, 11, 2016, 26),
(294, 0.63, 12, 2016, 26),
(295, 120, 1, 2017, 29),
(296, 120, 2, 2017, 29),
(297, 120, 3, 2017, 29),
(298, 120, 4, 2017, 29),
(299, 120, 5, 2017, 29),
(300, 120, 6, 2017, 29),
(301, 120, 7, 2017, 29),
(302, 120, 8, 2017, 29),
(303, 120, 9, 2017, 29),
(304, 120, 10, 2017, 29),
(305, 120, 11, 2017, 29),
(306, 120, 12, 2017, 29),
(307, 36, 1, 2017, 30),
(308, 36, 2, 2017, 30),
(309, 36, 3, 2017, 30),
(310, 36, 4, 2017, 30),
(311, 36, 5, 2017, 30),
(312, 36, 6, 2017, 30),
(313, 36, 7, 2017, 30),
(314, 36, 8, 2017, 30),
(315, 36, 9, 2017, 30),
(316, 36, 10, 2017, 30),
(317, 36, 11, 2017, 30),
(318, 36, 12, 2017, 30),
(319, 30, 1, 2018, 31),
(320, 30, 2, 2018, 31);

-- --------------------------------------------------------

--
-- Table structure for table `seg1_ries`
--

DROP TABLE IF EXISTS `seg1_ries`;
CREATE TABLE `seg1_ries` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seg1_ries`
--

INSERT INTO `seg1_ries` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(6, 2, 30, 0, 2015, ''),
(5, 1, 30, 0, 2015, ''),
(4, 1, 6.02, 6.4449, 2016, ''),
(7, 3, 30, 0, 2015, ''),
(8, 4, 40, 0.42, 2015, ''),
(9, 5, 40, 2.05, 2015, ''),
(10, 6, 40, 44.18, 2015, ''),
(11, 7, 45, 45.58, 2015, ''),
(12, 8, 45, 45.48, 2015, ''),
(13, 9, 45, 50.22, 2015, ''),
(14, 10, 50, 44.9, 2015, ''),
(15, 11, 50, 44.9, 2015, ''),
(16, 12, 50, 71.56, 2015, ''),
(17, 2, 11.65, 11.83, 2016, ''),
(18, 3, 17.67, 17.56, 2016, ''),
(19, 4, 20.58, 22.04, 2016, ''),
(20, 5, 23.5, 27.68, 2016, 'se estan generando dias de incapacidad del accidente del Sr. Nicolas de Molino'),
(21, 6, 25.44, 27.9411, 2016, 'Días perdidos por incapacidad de accidente generado en 2015'),
(22, 7, 27.38, 27.9411, 2016, 'Días perdidos por incapacidad por accidente generado en 2015'),
(23, 8, 29.32, 32.5411, 2016, 'se generan 2 accidentes en el mes de agosto'),
(24, 9, 31.26, 33.57, 2016, 'Dias de incapacidad generados por accidente dic-2015'),
(25, 10, 33.2, 39.95, 2016, 'Dias de incapacidad por accidente en Dic. - 2015'),
(26, 11, 35.15, 31.5, 2016, ' '),
(27, 12, 37.09, 31.89, 2016, ' '),
(28, 1, 6.02, 0, 2017, ' '),
(29, 2, 2.73, 0, 2017, ' '),
(30, 3, 4.55, 0, 2017, ' '),
(31, 4, 6.36, 3.3898, 2017, ' '),
(32, 5, 8.18, 8.67, 2017, 'hubo 2 accidentes con generación de días perdidos');

-- --------------------------------------------------------

--
-- Table structure for table `seg2_acci`
--

DROP TABLE IF EXISTS `seg2_acci`;
CREATE TABLE `seg2_acci` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seg2_acci`
--

INSERT INTO `seg2_acci` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(6, 2, 1, 0.45, 2015, ''),
(5, 1, 1, 0, 2015, ''),
(4, 1, 0.19, 0.21, 2016, ''),
(7, 3, 1, 0.89, 2015, ''),
(8, 4, 1.5, 0.83, 2015, ''),
(9, 5, 1.5, 1.02, 2015, ''),
(10, 6, 1.5, 1.03, 2015, ''),
(11, 7, 2, 1.06, 2015, ''),
(12, 8, 2, 1.06, 2015, ''),
(13, 9, 2, 1.69, 2015, ''),
(14, 10, 2.5, 1.04, 2015, ''),
(15, 11, 2.5, 1.03, 2015, ''),
(16, 12, 2.5, 1.47, 2015, ''),
(17, 2, 0.19, 0.39, 2016, ''),
(18, 3, 0.39, 0.39, 2016, ''),
(19, 4, 0.39, 0.36, 2016, ''),
(20, 5, 0.78, 0.36, 2016, ''),
(21, 6, 0.78, 0.37, 2016, ' '),
(22, 7, 0.78, 0.37, 2016, ' '),
(23, 8, 0.97, 0.73, 2016, ' '),
(24, 9, 1.17, 0.74, 2016, ' '),
(25, 10, 1.36, 0.93, 2016, ' '),
(26, 11, 1.75, 0.88, 2016, ' '),
(27, 12, 1.75, 0.9, 2016, ' '),
(28, 1, 0.19, 0, 2017, ' '),
(29, 2, 0.18, 0, 2017, ' '),
(30, 3, 0.18, 0, 2017, ' '),
(31, 4, 0.18, 0.56, 2017, 'la cantidad de accidentes ha elevado el indicador'),
(32, 5, 0.36, 0.94, 2017, 'el indice de accidentes incremento en este semestre (se generaron 5 accidentes)');

-- --------------------------------------------------------

--
-- Table structure for table `seg3_prim`
--

DROP TABLE IF EXISTS `seg3_prim`;
CREATE TABLE `seg3_prim` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seg3_prim`
--

INSERT INTO `seg3_prim` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(5, 1, 1, 0.5, 2015, ''),
(4, 1, 0.7, 0.8958, 2016, 'Agregar Nota'),
(6, 2, 1, 0.5, 2015, ''),
(7, 3, 1, 0.5, 2015, ''),
(8, 4, 1.2, 0.5079, 2015, ''),
(9, 5, 1.2, 0.5312, 2015, ''),
(10, 6, 1.2, 0.6268, 2015, ''),
(11, 7, 1, 0.6103, 2015, ''),
(12, 8, 1, 0.596, 2015, ''),
(13, 9, 1, 0.5944, 2015, ''),
(14, 10, 0.8, 0.5841, 2015, ''),
(15, 11, 0.8, 0.5681, 2015, ''),
(16, 12, 0.8, 0.6006, 2015, ''),
(17, 2, 0.7, 0.9536, 2016, ''),
(18, 3, 0.7, 0.944, 2016, ''),
(19, 4, 0.72, 0.9189, 2016, ''),
(20, 5, 0.72, 0.989, 2016, 'Se esta disparando por la generacion de dias de incapacidad del Sr. Nicolas'),
(21, 6, 0.72, 0.8531, 2016, 'Generación de días de incapacidad'),
(22, 7, 0.72, 0.8017, 2016, 'Generación de días de incapacidad'),
(23, 8, 0.72, 0.8067, 2016, 'Generación de días de incapacidad'),
(24, 9, 0.72, 0.7818, 2016, 'Dias de incapacidad por accidente de dic-2015'),
(25, 10, 0.7, 0.7568, 2016, 'Días de incapacidad por accidente en Dic-2015'),
(26, 11, 0.7, 0.7162, 2016, 'Por los dias de incapacidad que se estan arrastrando desde el año pasado.'),
(27, 12, 0.7, 0.7152, 2016, 'DIAS DE INCAPACIDAD GENERADOS POR ACCIDENTE 2015'),
(28, 1, 0.7, 0.5, 2017, ' '),
(29, 2, 0.6, 0.5, 2017, ' '),
(30, 3, 0.6, 0.5, 2017, ' '),
(31, 4, 0.6, 0.5641, 2017, ' '),
(32, 5, 0.62, 0.6322, 2017, 'se generan accidentes incapacitantes');

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
(10, 'Sistemas');

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
(28, 'Tesoreria', 11),
(29, 'Numero de Servicios', 10),
(30, 'Horas perdidas de red', 10),
(31, 'Desarrollo de software', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sis1_efic`
--

DROP TABLE IF EXISTS `sis1_efic`;
CREATE TABLE `sis1_efic` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` float NOT NULL,
  `reals` float DEFAULT NULL,
  `year1` year(4) NOT NULL,
  `nota` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sis1_efic`
--

INSERT INTO `sis1_efic` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(31, 11, 100, 100, 2015, ''),
(30, 10, 100, 100, 2015, ''),
(29, 9, 98, 100, 2015, ''),
(28, 8, 98, 99, 2015, ''),
(27, 7, 98, 100, 2015, ''),
(26, 6, 95, 100, 2015, ''),
(25, 5, 95, 99, 2015, ''),
(24, 4, 95, 100, 2015, ''),
(23, 3, 90, 99, 2015, ''),
(22, 2, 90, 94, 2015, ''),
(21, 1, 90, 100, 2015, ''),
(20, 1, 95, 100, 2016, 'Se cumplió con el objetivo'),
(32, 12, 100, 100, 2015, ''),
(43, 2, 95, 100, 2016, ''),
(44, 3, 95, 100, 2016, ''),
(45, 4, 97, 100, 2016, ''),
(46, 5, 97, 99.6, 2016, ''),
(47, 6, 97, 100, 2016, ' '),
(48, 7, 99, 100, 2016, ' '),
(49, 8, 99, 100, 2016, ' '),
(50, 9, 99, 100, 2016, ' '),
(51, 10, 100, 99.27, 2016, 'No se cumplio con un servicio'),
(52, 11, 100, 100, 2016, ' '),
(53, 12, 100, 100, 2016, ' '),
(54, 1, 100, 100, 2017, ' '),
(55, 2, 100, 100, 2017, ' '),
(56, 3, 100, 100, 2017, ' '),
(57, 4, 100, 100, 2017, ' '),
(58, 5, 100, 100, 2017, ' '),
(59, 6, 100, 100, 2017, ' '),
(60, 7, 100, 100, 2017, ' '),
(61, 8, 100, 99, 2017, 'Se atendió un servicio días después. '),
(62, 9, 100, 97.08, 2017, 'No se atendió a tiempo los servicios en las bodegas de villagrán y Abasolo'),
(63, 10, 100, 99.3, 2017, 'Una Solicitud no se atendio a tiempo'),
(64, 11, 100, 100, 2017, ' '),
(65, 12, 100, 98.06, 2017, 'No se atendió una solicitud a tiempo'),
(66, 1, 100, 100, 2018, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `sis2_numserv`
--

DROP TABLE IF EXISTS `sis2_numserv`;
CREATE TABLE `sis2_numserv` (
  `id` int(11) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` double NOT NULL,
  `reals` double NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `sis2_numserv`
--

INSERT INTO `sis2_numserv` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 120, 132.58, 2016, ''),
(2, 1, 120, 187, 2017, ''),
(3, 2, 120, 114, 2017, ''),
(4, 3, 120, 149, 2017, ''),
(5, 4, 120, 129, 2017, ''),
(6, 5, 120, 180, 2017, ''),
(7, 6, 120, 181, 2017, ''),
(8, 2, 120, 130.85, 2016, ''),
(9, 3, 120, 101.116, 2016, ''),
(10, 4, 120, 180.58, 2016, ''),
(11, 5, 120, 209.016, 2016, ''),
(12, 6, 120, 142.3, 2016, ''),
(13, 7, 120, 176.91, 2016, ''),
(14, 8, 120, 162.48, 2016, ''),
(15, 9, 120, 176.65, 2016, ''),
(16, 10, 120, 156.18, 2016, ''),
(17, 11, 120, 165.15, 2016, ''),
(18, 12, 120, 120.48, 2016, ''),
(19, 7, 120, 140, 2017, ' '),
(20, 8, 120, 153, 2017, ' '),
(21, 9, 120, 137, 2017, ' '),
(22, 10, 120, 142, 2017, ' '),
(23, 11, 120, 118, 2017, 'Fue baja la temporada en servicios'),
(24, 12, 120, 103, 2017, 'Muchos días de vacaciones'),
(25, 1, 120, 175, 2018, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `sis3_horaslost`
--

DROP TABLE IF EXISTS `sis3_horaslost`;
CREATE TABLE `sis3_horaslost` (
  `id` int(11) NOT NULL,
  `idmes` int(11) NOT NULL,
  `objetivo` double NOT NULL,
  `reals` double NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` varchar(140) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `sis3_horaslost`
--

INSERT INTO `sis3_horaslost` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 36, 0, 2016, ' '),
(2, 2, 36, 0, 2016, ''),
(3, 3, 36, 0, 2016, ''),
(4, 4, 36, 0, 2016, ''),
(5, 5, 36, 0, 2016, ''),
(6, 6, 36, 0, 2016, ''),
(7, 7, 36, 0, 2016, ''),
(8, 8, 36, 0, 2016, ''),
(9, 9, 36, 0, 2016, ''),
(10, 10, 36, 0, 2016, ''),
(11, 11, 36, 0, 2016, ''),
(12, 12, 36, 0, 2016, ''),
(13, 1, 36, 0, 2017, ' '),
(14, 2, 36, 2, 2017, ' '),
(15, 3, 36, 12, 2017, ' '),
(16, 4, 36, 0, 2017, ' '),
(17, 5, 36, 3, 2017, ' '),
(18, 6, 36, 6, 2017, ' '),
(19, 7, 36, 3, 2017, ' '),
(20, 8, 36, 15.08, 2017, ' '),
(21, 9, 36, 0, 2017, ' '),
(22, 10, 36, 8.76, 2017, ' '),
(23, 11, 36, 0, 2017, ' '),
(24, 12, 36, 10.66, 2017, ' '),
(25, 1, 36, 1, 2018, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `sis4_desarrollo`
--

DROP TABLE IF EXISTS `sis4_desarrollo`;
CREATE TABLE `sis4_desarrollo` (
  `id` int(10) NOT NULL,
  `idmes` int(10) NOT NULL,
  `objetivo` double NOT NULL,
  `reals` double NOT NULL,
  `year1` year(4) NOT NULL,
  `nota` varchar(220) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `sis4_desarrollo`
--

INSERT INTO `sis4_desarrollo` (`id`, `idmes`, `objetivo`, `reals`, `year1`, `nota`) VALUES
(1, 1, 30, 30, 2017, ''),
(2, 2, 30, 30, 2017, ''),
(3, 3, 30, 30, 2017, ''),
(4, 4, 30, 30, 2017, ''),
(5, 5, 30, 30, 2017, ''),
(6, 6, 30, 30, 2017, ''),
(7, 7, 30, 30, 2017, ''),
(8, 8, 30, 30, 2017, ''),
(9, 9, 30, 30, 2017, ''),
(10, 10, 30, 30, 2017, ''),
(11, 11, 30, 30, 2017, ''),
(12, 12, 30, 30, 2017, ''),
(13, 1, 30, 30.5, 2018, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tesorer1`
--

DROP TABLE IF EXISTS `tesorer1`;
CREATE TABLE `tesorer1` (
  `id` int(10) UNSIGNED NOT NULL,
  `idmes` int(11) NOT NULL,
  `proveedores` double NOT NULL,
  `cadenas` double NOT NULL,
  `year1` year(4) NOT NULL,
  `trenes` double NOT NULL,
  `garantias` double NOT NULL,
  `creditos` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tesorer1`
--

INSERT INTO `tesorer1` (`id`, `idmes`, `proveedores`, `cadenas`, `year1`, `trenes`, `garantias`, `creditos`) VALUES
(19, 3, 66538083.45, 10494086.24, 2015, 0, 276064.75, 73428008.72),
(18, 2, 55287765.98, 8408617.65, 2015, 0, 556019.99, 73428008.72),
(17, 1, 45764376.68, 10817099.71, 2015, 0, 263016.95, 73428008.72),
(22, 1, 48004346.32, 16231083.51, 2016, 11232279.17, 0, 0),
(23, 2, 40042257.68, 7451520.85, 2016, 15956113.47, 604568.05, 0),
(24, 3, 46841294.22, 6235233.78, 2016, 59052105.45, 58902.5, 1065511.45),
(25, 4, 36245337.97, 6315551.03, 2016, 37502430.2, 0, 0),
(26, 5, 349013626.78, 11404764.57, 2016, 11291364.65, 0, 0),
(27, 6, 211568447.27, 8424831.79, 2016, 42129533.94, 0, 1285779.48),
(28, 7, 80581481.2, 17598317.18, 2016, 43266055.62, 0, 0),
(29, 8, 77666745.67, 11763863.05, 2016, 11384942.28, 0, 0),
(30, 9, 38145409.08, 15308253.23, 2016, 60450799.69, 0, 1326798.06),
(31, 10, 18470574.18, 11075650.08, 2016, 17806923.77, 0, 0),
(32, 11, -34217727.2, 10284501.58, 2016, 85297352.62, 0, 0),
(36, 12, 68117471.64, 10364992.35, 2016, 24145092.01, 0, 1329513.92),
(38, 2, 41225028.17, 3077326.43, 2017, 67831794.4, 236271.8, 0),
(37, 1, 12771969.11, 17571486.43, 2017, 52590538.46, 0, 0),
(39, 3, 33524804.64, 10084628.36, 2017, 24734371.38, 172659.25, 1883980.49),
(40, 4, 34917700.71, 3183680.29, 2017, 32524628.24, 0, 0),
(41, 5, 413352959.51, 6691371.49, 2017, 13798087.76, 1545.33, 0);

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a1_rot`
--
ALTER TABLE `a1_rot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `a2_tiem`
--
ALTER TABLE `a2_tiem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `adm1_end`
--
ALTER TABLE `adm1_end`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `adm2_liq`
--
ALTER TABLE `adm2_liq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `adm3_rent`
--
ALTER TABLE `adm3_rent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `adm4_cap`
--
ALTER TABLE `adm4_cap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `anios`
--
ALTER TABLE `anios`
  ADD PRIMARY KEY (`idanio`);

--
-- Indexes for table `ced1_rot`
--
ALTER TABLE `ced1_rot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `ced2_tiem`
--
ALTER TABLE `ced2_tiem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `ced3_cicl`
--
ALTER TABLE `ced3_cicl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `com1_efic`
--
ALTER TABLE `com1_efic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `cpc1_ind`
--
ALTER TABLE `cpc1_ind`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `cpc2_plaz`
--
ALTER TABLE `cpc2_plaz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `cpc3_cart`
--
ALTER TABLE `cpc3_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `cpp1_plaz`
--
ALTER TABLE `cpp1_plaz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `cpp2_ind`
--
ALTER TABLE `cpp2_ind`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `gest1_tiem`
--
ALTER TABLE `gest1_tiem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `gest2_aus`
--
ALTER TABLE `gest2_aus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `gest3_rot`
--
ALTER TABLE `gest3_rot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `gest4_hor`
--
ALTER TABLE `gest4_hor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `gest5_gas`
--
ALTER TABLE `gest5_gas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `impuest1`
--
ALTER TABLE `impuest1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

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
-- Indexes for table `seg1_ries`
--
ALTER TABLE `seg1_ries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `seg2_acci`
--
ALTER TABLE `seg2_acci`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `seg3_prim`
--
ALTER TABLE `seg3_prim`
  ADD PRIMARY KEY (`id`),
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
-- Indexes for table `sis1_efic`
--
ALTER TABLE `sis1_efic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `sis2_numserv`
--
ALTER TABLE `sis2_numserv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sis3_horaslost`
--
ALTER TABLE `sis3_horaslost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sis4_desarrollo`
--
ALTER TABLE `sis4_desarrollo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tesorer1`
--
ALTER TABLE `tesorer1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmes` (`idmes`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a1_rot`
--
ALTER TABLE `a1_rot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `a2_tiem`
--
ALTER TABLE `a2_tiem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `adm1_end`
--
ALTER TABLE `adm1_end`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `adm2_liq`
--
ALTER TABLE `adm2_liq`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `adm3_rent`
--
ALTER TABLE `adm3_rent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `adm4_cap`
--
ALTER TABLE `adm4_cap`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `anios`
--
ALTER TABLE `anios`
  MODIFY `idanio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ced1_rot`
--
ALTER TABLE `ced1_rot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `ced2_tiem`
--
ALTER TABLE `ced2_tiem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `ced3_cicl`
--
ALTER TABLE `ced3_cicl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `com1_efic`
--
ALTER TABLE `com1_efic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `cpc1_ind`
--
ALTER TABLE `cpc1_ind`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `cpc2_plaz`
--
ALTER TABLE `cpc2_plaz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `cpc3_cart`
--
ALTER TABLE `cpc3_cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `cpp1_plaz`
--
ALTER TABLE `cpp1_plaz`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `cpp2_ind`
--
ALTER TABLE `cpp2_ind`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `gest1_tiem`
--
ALTER TABLE `gest1_tiem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `gest2_aus`
--
ALTER TABLE `gest2_aus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `gest3_rot`
--
ALTER TABLE `gest3_rot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `gest4_hor`
--
ALTER TABLE `gest4_hor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `gest5_gas`
--
ALTER TABLE `gest5_gas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `impuest1`
--
ALTER TABLE `impuest1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `mes`
--
ALTER TABLE `mes`
  MODIFY `idmes` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `objetivos`
--
ALTER TABLE `objetivos`
  MODIFY `idobj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=321;
--
-- AUTO_INCREMENT for table `seg1_ries`
--
ALTER TABLE `seg1_ries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `seg2_acci`
--
ALTER TABLE `seg2_acci`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `seg3_prim`
--
ALTER TABLE `seg3_prim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `selectdepartamento`
--
ALTER TABLE `selectdepartamento`
  MODIFY `iddepartamento` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `selectindicador`
--
ALTER TABLE `selectindicador`
  MODIFY `idindicador` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `sis1_efic`
--
ALTER TABLE `sis1_efic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `sis2_numserv`
--
ALTER TABLE `sis2_numserv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `sis3_horaslost`
--
ALTER TABLE `sis3_horaslost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `sis4_desarrollo`
--
ALTER TABLE `sis4_desarrollo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tesorer1`
--
ALTER TABLE `tesorer1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
