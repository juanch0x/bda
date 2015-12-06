-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2015 a las 02:29:27
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dba10`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentario` int(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `id_juego` int(50) NOT NULL,
  `comentario_juego` varchar(250) NOT NULL,
  `puntos` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `email`, `id_juego`, `comentario_juego`, `puntos`) VALUES
(1, 'thejuasz@gmail.com', 7, 'dsadsa', 7),
(2, 'thejuasz@gmail.com', 7, 'me encanto el tf!', 8),
(3, 'thejuasz@gmail.com', 7, 'Eh boludo', 1),
(5, 'thejuasz@gmail.com', 9, 'Me gusto el fifa!', 1),
(6, 'thejuasz@gmail.com', 6, 'HOla', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compania_juego`
--

CREATE TABLE IF NOT EXISTS `compania_juego` (
  `id_compania` int(11) NOT NULL,
  `compania` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compania_juego`
--

INSERT INTO `compania_juego` (`id_compania`, `compania`) VALUES
(1, 'Valve'),
(4, 'Ea Sports');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_distribucion`
--

CREATE TABLE IF NOT EXISTS `empresa_distribucion` (
  `id_empresa_distr` int(11) NOT NULL,
  `empresa_distr` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa_distribucion`
--

INSERT INTO `empresa_distribucion` (`id_empresa_distr`, `empresa_distr`) VALUES
(1, 'Steam'),
(3, 'Origin'),
(4, 'Prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_juego`
--

CREATE TABLE IF NOT EXISTS `genero_juego` (
  `id_genero` int(3) NOT NULL,
  `genero` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genero_juego`
--

INSERT INTO `genero_juego` (`id_genero`, `genero`) VALUES
(4, 'Pelea'),
(5, 'Deporte'),
(6, 'Estrategia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE IF NOT EXISTS `juegos` (
  `id_juegos` int(30) NOT NULL,
  `titulo` varchar(150) NOT NULL,
  `resena` varchar(500) NOT NULL,
  `edad_minima` int(3) NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `trailer` varchar(200) NOT NULL,
  `precio` int(4) NOT NULL,
  `plataforma` varchar(20) NOT NULL,
  `id_genero` int(3) NOT NULL,
  `id_empresa_distribucion` int(3) NOT NULL,
  `id_compania` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juegos`, `titulo`, `resena`, `edad_minima`, `fecha_lanzamiento`, `trailer`, `precio`, `plataforma`, `id_genero`, `id_empresa_distribucion`, `id_compania`) VALUES
(7, 'Team Fortress 2', 'Pelea', 16, '2006-11-30', 'h_c3iQImXZg', 0, 'PC', 5, 3, 1),
(9, 'FIFA 16', 'El mas conocido juego de futbol de 2015', 6, '2015-09-16', 'vVhZSFiFfPY', 66, 'PC', 5, 3, 1),
(10, 'Mortal Kombat X', 'La nueva entrega del famoso juego Mortal Kombat', 16, '2015-11-03', 'jSi2LDkyKmI', 95, 'PC', 4, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `email` varchar(45) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_accion` int(3) NOT NULL,
  `ip` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`email`, `fecha`, `id_accion`, `ip`) VALUES
('', '2015-09-22 22:46:42', 2, '::1'),
('asd@asd.com', '2015-09-22 23:38:06', 0, '::1'),
('asd@asd.com', '2015-09-22 23:39:02', 2, '::1'),
('josepepito@hotmail.com', '2015-08-27 23:37:25', 2, '::1'),
('loslo2gs@hotmail.com', '2015-08-18 23:58:47', 1, '::1'),
('thejuasz@gmail.com', '2015-08-20 23:26:56', 1, '::1'),
('thejuasz@gmail.com', '2015-08-27 23:34:41', 1, '::1'),
('thejuasz@gmail.com', '2015-09-08 23:03:51', 1, '::1'),
('thejuasz@gmail.com', '2015-09-08 23:05:38', 1, '::1'),
('thejuasz@gmail.com', '2015-09-08 23:06:25', 1, '::1'),
('thejuasz@gmail.com', '2015-09-10 23:04:49', 1, '::1'),
('thejuasz@gmail.com', '2015-09-10 23:42:48', 2, '::1'),
('thejuasz@gmail.com', '2015-09-22 02:45:46', 1, '::1'),
('thejuasz@gmail.com', '2015-09-22 03:02:20', 1, '::1'),
('thejuasz@gmail.com', '2015-09-22 03:05:14', 1, '::1'),
('thejuasz@gmail.com', '2015-09-22 03:08:17', 1, '::1'),
('thejuasz@gmail.com', '2015-09-22 03:08:34', 1, '::1'),
('thejuasz@gmail.com', '2015-09-22 22:46:15', 1, '::1'),
('thejuasz@gmail.com', '2015-09-22 22:46:48', 1, '::1'),
('thejuasz@gmail.com', '2015-09-22 22:47:19', 2, '::1'),
('thejuasz@gmail.com', '2015-09-22 22:47:23', 1, '::1'),
('thejuasz@gmail.com', '2015-09-22 23:39:10', 1, '::1'),
('thejuasz@gmail.com', '2015-10-08 23:02:58', 2, '::1'),
('thejuasz@gmail.com', '2015-10-08 23:03:15', 0, '::1'),
('thejuasz@gmail.com', '2015-10-08 23:03:34', 1, '::1'),
('thejuasz@gmail.com', '2015-10-08 23:20:36', 1, '::1'),
('thejuasz@gmail.com', '2015-10-08 23:22:11', 1, '::1'),
('thejuasz@gmail.com', '2015-10-13 22:58:21', 1, '::1'),
('thejuasz@gmail.com', '2015-10-20 23:05:27', 1, '::1'),
('thejuasz@gmail.com', '2015-10-22 22:56:13', 1, '::1'),
('thejuasz@gmail.com', '2015-10-22 23:49:45', 1, '::1'),
('thejuasz@gmail.com', '2015-10-27 23:05:53', 1, '::1'),
('thejuasz@gmail.com', '2015-10-29 22:57:46', 1, '::1'),
('thejuasz@gmail.com', '2015-11-03 00:36:56', 1, '::1'),
('thejuasz@gmail.com', '2015-11-03 03:08:32', 1, '::1'),
('thejuasz@gmail.com', '2015-11-03 03:38:44', 1, '::1'),
('thejuasz@gmail.com', '2015-11-03 23:48:38', 1, '::1'),
('thejuasz@gmail.com', '2015-11-18 00:18:48', 1, '::1'),
('thejuasz@gmail.com', '2015-11-18 00:20:44', 1, '::1'),
('thejuasz@gmail.com', '2015-11-18 00:39:32', 1, '::1'),
('thejuasz@gmail.com', '2015-11-18 00:40:30', 1, '::1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `codigo` varchar(2) NOT NULL,
  `descripcion` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`codigo`, `descripcion`) VALUES
('AD', 'ANDORRA'),
('AE', 'UNITED ARAB EMIRATES'),
('AF', 'AFGHANISTAN'),
('AG', 'ANTIGUA AND BARBUDA'),
('AI', 'ANGUILLA'),
('AL', 'ALBANIA'),
('AM', 'ARMENIA'),
('AO', 'ANGOLA'),
('AQ', 'ANTARCTICA'),
('AR', 'ARGENTINA'),
('AS', 'AMERICAN SAMOA'),
('AT', 'AUSTRIA'),
('AU', 'AUSTRALIA'),
('AW', 'ARUBA'),
('AX', 'ÅLAND ISLANDS'),
('AZ', 'AZERBAIJAN'),
('BA', 'BOSNIA AND HERZEGOVINA'),
('BB', 'BARBADOS'),
('BD', 'BANGLADESH'),
('BE', 'BELGIUM'),
('BF', 'BURKINA FASO'),
('BG', 'BULGARIA'),
('BH', 'BAHRAIN'),
('BI', 'BURUNDI'),
('BJ', 'BENIN'),
('BL', 'SAINT BARTHÉLEMY'),
('BM', 'BERMUDA'),
('BN', 'BRUNEI DARUSSALAM'),
('BO', 'BOLIVIA, PLURINATIONAL STATE OF'),
('BQ', 'BONAIRE, SINT EUSTATIUS AND SABA'),
('BR', 'BRAZIL'),
('BS', 'BAHAMAS'),
('BT', 'BHUTAN'),
('BV', 'BOUVET ISLAND'),
('BW', 'BOTSWANA'),
('BY', 'BELARUS'),
('BZ', 'BELIZE'),
('CA', 'CANADA'),
('CC', 'COCOS (KEELING) ISLANDS'),
('CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE'),
('CF', 'CENTRAL AFRICAN REPUBLIC'),
('CG', 'CONGO'),
('CH', 'SWITZERLAND'),
('CI', 'CÔTE D''IVOIRE'),
('CK', 'COOK ISLANDS'),
('CL', 'CHILE'),
('CM', 'CAMEROON'),
('CN', 'CHINA'),
('CO', 'COLOMBIA'),
('CR', 'COSTA RICA'),
('CU', 'CUBA'),
('CV', 'CAPE VERDE'),
('CW', 'CURAÇAO'),
('CX', 'CHRISTMAS ISLAND'),
('CY', 'CYPRUS'),
('CZ', 'CZECH REPUBLIC'),
('DE', 'GERMANY'),
('DJ', 'DJIBOUTI'),
('DK', 'DENMARK'),
('DM', 'DOMINICA'),
('DO', 'DOMINICAN REPUBLIC'),
('DZ', 'ALGERIA'),
('EC', 'ECUADOR'),
('EE', 'ESTONIA'),
('EG', 'EGYPT'),
('EH', 'WESTERN SAHARA'),
('ER', 'ERITREA'),
('ES', 'SPAIN'),
('ET', 'ETHIOPIA'),
('FI', 'FINLAND'),
('FJ', 'FIJI'),
('FK', 'FALKLAND ISLANDS (MALVINAS)'),
('FM', 'MICRONESIA, FEDERATED STATES OF'),
('FO', 'FAROE ISLANDS'),
('FR', 'FRANCE'),
('GA', 'GABON'),
('GB', 'UNITED KINGDOM'),
('GD', 'GRENADA'),
('GE', 'GEORGIA'),
('GF', 'FRENCH GUIANA'),
('GG', 'GUERNSEY'),
('GH', 'GHANA'),
('GI', 'GIBRALTAR'),
('GL', 'GREENLAND'),
('GM', 'GAMBIA'),
('GN', 'GUINEA'),
('GP', 'GUADELOUPE'),
('GQ', 'EQUATORIAL GUINEA'),
('GR', 'GREECE'),
('GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS'),
('GT', 'GUATEMALA'),
('GU', 'GUAM'),
('GW', 'GUINEA-BISSAU'),
('GY', 'GUYANA'),
('HK', 'HONG KONG'),
('HM', 'HEARD ISLAND AND MCDONALD ISLANDS'),
('HN', 'HONDURAS'),
('HR', 'CROATIA'),
('HT', 'HAITI'),
('HU', 'HUNGARY'),
('ID', 'INDONESIA'),
('IE', 'IRELAND'),
('IL', 'ISRAEL'),
('IM', 'ISLE OF MAN'),
('IN', 'INDIA'),
('IO', 'BRITISH INDIAN OCEAN TERRITORY'),
('IQ', 'IRAQ'),
('IR', 'IRAN, ISLAMIC REPUBLIC OF'),
('IS', 'ICELAND'),
('IT', 'ITALY'),
('JE', 'JERSEY'),
('JM', 'JAMAICA'),
('JO', 'JORDAN'),
('JP', 'JAPAN'),
('KE', 'KENYA'),
('KG', 'KYRGYZSTAN'),
('KH', 'CAMBODIA'),
('KI', 'KIRIBATI'),
('KM', 'COMOROS'),
('KN', 'SAINT KITTS AND NEVIS'),
('KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF'),
('KR', 'KOREA, REPUBLIC OF'),
('KW', 'KUWAIT'),
('KY', 'CAYMAN ISLANDS'),
('KZ', 'KAZAKHSTAN'),
('LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC'),
('LB', 'LEBANON'),
('LC', 'SAINT LUCIA'),
('LI', 'LIECHTENSTEIN'),
('LK', 'SRI LANKA'),
('LR', 'LIBERIA'),
('LS', 'LESOTHO'),
('LT', 'LITHUANIA'),
('LU', 'LUXEMBOURG'),
('LV', 'LATVIA'),
('LY', 'LIBYA'),
('MA', 'MOROCCO'),
('MC', 'MONACO'),
('MD', 'MOLDOVA, REPUBLIC OF'),
('ME', 'MONTENEGRO'),
('MF', 'SAINT MARTIN (FRENCH PART)'),
('MG', 'MADAGASCAR'),
('MH', 'MARSHALL ISLANDS'),
('MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF'),
('ML', 'MALI'),
('MM', 'MYANMAR'),
('MN', 'MONGOLIA'),
('MO', 'MACAO'),
('MP', 'NORTHERN MARIANA ISLANDS'),
('MQ', 'MARTINIQUE'),
('MR', 'MAURITANIA'),
('MS', 'MONTSERRAT'),
('MT', 'MALTA'),
('MU', 'MAURITIUS'),
('MV', 'MALDIVES'),
('MW', 'MALAWI'),
('MX', 'MEXICO'),
('MY', 'MALAYSIA'),
('MZ', 'MOZAMBIQUE'),
('NA', 'NAMIBIA'),
('NC', 'NEW CALEDONIA'),
('NE', 'NIGER'),
('NF', 'NORFOLK ISLAND'),
('NG', 'NIGERIA'),
('NI', 'NICARAGUA'),
('NL', 'NETHERLANDS'),
('NO', 'NORWAY'),
('NP', 'NEPAL'),
('NR', 'NAURU'),
('NU', 'NIUE'),
('NZ', 'NEW ZEALAND'),
('OM', 'OMAN'),
('PA', 'PANAMA'),
('PE', 'PERU'),
('PF', 'FRENCH POLYNESIA'),
('PG', 'PAPUA NEW GUINEA'),
('PH', 'PHILIPPINES'),
('PK', 'PAKISTAN'),
('PL', 'POLAND'),
('PM', 'SAINT PIERRE AND MIQUELON'),
('PN', 'PITCAIRN'),
('PR', 'PUERTO RICO'),
('PS', 'PALESTINE, STATE OF'),
('PT', 'PORTUGAL'),
('PW', 'PALAU'),
('PY', 'PARAGUAY'),
('QA', 'QATAR'),
('RE', 'RÉUNION'),
('RO', 'ROMANIA'),
('RS', 'SERBIA'),
('RU', 'RUSSIAN FEDERATION'),
('RW', 'RWANDA'),
('SA', 'SAUDI ARABIA'),
('SB', 'SOLOMON ISLANDS'),
('SC', 'SEYCHELLES'),
('SD', 'SUDAN'),
('SE', 'SWEDEN'),
('SG', 'SINGAPORE'),
('SH', 'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA'),
('SI', 'SLOVENIA'),
('SJ', 'SVALBARD AND JAN MAYEN'),
('SK', 'SLOVAKIA'),
('SL', 'SIERRA LEONE'),
('SM', 'SAN MARINO'),
('SN', 'SENEGAL'),
('SO', 'SOMALIA'),
('SR', 'SURINAME'),
('SS', 'SOUTH SUDAN'),
('ST', 'SAO TOME AND PRINCIPE'),
('SV', 'EL SALVADOR'),
('SX', 'SINT MAARTEN (DUTCH PART)'),
('SY', 'SYRIAN ARAB REPUBLIC'),
('SZ', 'SWAZILAND'),
('TC', 'TURKS AND CAICOS ISLANDS'),
('TD', 'CHAD'),
('TF', 'FRENCH SOUTHERN TERRITORIES'),
('TG', 'TOGO'),
('TH', 'THAILAND'),
('TJ', 'TAJIKISTAN'),
('TK', 'TOKELAU'),
('TL', 'TIMOR-LESTE'),
('TM', 'TURKMENISTAN'),
('TN', 'TUNISIA'),
('TO', 'TONGA'),
('TR', 'TURKEY'),
('TT', 'TRINIDAD AND TOBAGO'),
('TV', 'TUVALU'),
('TW', 'TAIWAN, PROVINCE OF CHINA'),
('TZ', 'TANZANIA, UNITED REPUBLIC OF'),
('UA', 'UKRAINE'),
('UG', 'UGANDA'),
('UM', 'UNITED STATES MINOR OUTLYING ISLANDS'),
('US', 'UNITED STATES'),
('UY', 'URUGUAY'),
('UZ', 'UZBEKISTAN'),
('VA', 'HOLY SEE (VATICAN CITY STATE)'),
('VC', 'SAINT VINCENT AND THE GRENADINES'),
('VE', 'VENEZUELA, BOLIVARIAN REPUBLIC OF'),
('VG', 'VIRGIN ISLANDS, BRITISH'),
('VI', 'VIRGIN ISLANDS, U.S.'),
('VN', 'VIETNAM'),
('VU', 'VANUATU'),
('WF', 'WALLIS AND FUTUNA'),
('WS', 'SAMOA'),
('YE', 'YEMEN'),
('YT', 'MAYOTTE'),
('ZA', 'SOUTH AFRICA'),
('ZM', 'ZAMBIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_accion`
--

CREATE TABLE IF NOT EXISTS `tipo_accion` (
  `id` int(3) NOT NULL,
  `descripcion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_accion`
--

INSERT INTO `tipo_accion` (`id`, `descripcion`) VALUES
(0, 'registro_usuario'),
(1, 'login_usuario'),
(2, 'login_usuario_incorrecto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`username`, `email`, `password`) VALUES
('juancho', 'thejuasz@gmail.com', 'e69dc2c09e8da6259422d987ccbe95b5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `compania_juego`
--
ALTER TABLE `compania_juego`
  ADD PRIMARY KEY (`id_compania`);

--
-- Indices de la tabla `empresa_distribucion`
--
ALTER TABLE `empresa_distribucion`
  ADD PRIMARY KEY (`id_empresa_distr`);

--
-- Indices de la tabla `genero_juego`
--
ALTER TABLE `genero_juego`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juegos`);

--
-- Indices de la tabla `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`email`,`fecha`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `tipo_accion`
--
ALTER TABLE `tipo_accion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `compania_juego`
--
ALTER TABLE `compania_juego`
  MODIFY `id_compania` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `empresa_distribucion`
--
ALTER TABLE `empresa_distribucion`
  MODIFY `id_empresa_distr` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `genero_juego`
--
ALTER TABLE `genero_juego`
  MODIFY `id_genero` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juegos` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
