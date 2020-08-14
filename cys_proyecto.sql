-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-04-2020 a las 01:12:53
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cys_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

DROP TABLE IF EXISTS `contrato`;
CREATE TABLE IF NOT EXISTS `contrato` (
  `ID_Empleado` int(11) DEFAULT NULL,
  `ID_Departamento` int(11) DEFAULT NULL,
  `ID_Puesto` int(11) DEFAULT NULL,
  `Fecha_Contrato` date DEFAULT NULL,
  `Fecha_Renovacion_Contrato` date DEFAULT NULL,
  `Sueldo` int(11) DEFAULT NULL,
  KEY `ID_Empleado` (`ID_Empleado`),
  KEY `ID_Departamento` (`ID_Departamento`),
  KEY `ID_Puesto` (`ID_Puesto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`ID_Empleado`, `ID_Departamento`, `ID_Puesto`, `Fecha_Contrato`, `Fecha_Renovacion_Contrato`, `Sueldo`) VALUES
(1, 1, 1, '1994-02-05', '2030-01-01', 50000),
(2, 2, 2, '1994-02-10', '2030-01-01', 35000),
(3, 3, 3, '1994-02-10', '2030-01-01', 35000),
(4, 4, 5, '1994-02-10', '2030-01-01', 35000),
(5, 5, 8, '1994-02-10', '2030-01-01', 35000),
(7, 3, 4, '1994-03-01', '2030-01-01', 10000),
(8, 3, 4, '1994-03-05', '2030-01-01', 10000),
(9, 3, 4, '1994-03-06', '2030-01-01', 10000),
(10, 3, 4, '1994-03-09', '2030-01-01', 10000),
(12, 4, 6, '1994-03-16', '2030-01-01', 9000),
(13, 3, 4, '1994-03-16', '2030-01-01', 10000),
(15, 4, 6, '1994-04-21', '2030-01-01', 9000),
(16, 3, 4, '1994-05-05', '2030-01-01', 10000),
(17, 4, 7, '1995-02-05', '2030-01-01', 6000),
(18, 3, 4, '1995-02-05', '2030-01-01', 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `Nombre_Departamento` varchar(45) DEFAULT NULL,
  `ID_Departamento` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Director` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Departamento`),
  KEY `ID_Director` (`ID_Director`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`Nombre_Departamento`, `ID_Departamento`, `ID_Director`) VALUES
('Direccion General', 1, 1),
('Recursos Humanos', 2, 2),
('Asesoria Empresarial', 3, 3),
('Contabilidad', 4, 4),
('Soporte Tecnico', 5, 5),
('Almacen y Logistica', 6, 6),
('Programacion', 10, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

DROP TABLE IF EXISTS `empleado`;
CREATE TABLE IF NOT EXISTS `empleado` (
  `Nombre1` varchar(45) DEFAULT NULL,
  `Nombre2` varchar(45) DEFAULT NULL,
  `Apellido1` varchar(45) DEFAULT NULL,
  `Apellido2` varchar(45) DEFAULT NULL,
  `ID_Empleado` int(11) NOT NULL AUTO_INCREMENT,
  `E_MAIL` varchar(45) DEFAULT NULL,
  `Domicilio` varchar(45) DEFAULT NULL,
  `Telefono` varchar(10) DEFAULT NULL,
  `ID_Supervisor` int(11) DEFAULT NULL,
  `ID_Departamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Empleado`),
  KEY `ID_Departamento` (`ID_Departamento`),
  KEY `ID_Supervisor` (`ID_Supervisor`)
) ENGINE=MyISAM AUTO_INCREMENT=84974994 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Nombre1`, `Nombre2`, `Apellido1`, `Apellido2`, `ID_Empleado`, `E_MAIL`, `Domicilio`, `Telefono`, `ID_Supervisor`, `ID_Departamento`) VALUES
('Pedro', 'Manuel', 'Cienfuegos', 'Salas', 3, 'pedro.cienfuegos@csinformatica.com.mx', 'Calle 2 No.35 Col.El Rodeo', '3112182900', 1, 3),
('Lucero', NULL, 'Solis', 'Paredes', 2, 'lucero.solis@csinformatica.com.mx', 'Lazaro Cardenas 34 Col. Tepic', '3111005268', 1, 2),
('Sandra', 'Elizabeth', 'Morelos', 'Diaz', 4, 'sandra.morelos@csinformatica.com.mx', 'Sierra Alica 103 Col. Los Pinos', '3112563894', 1, 4),
('Miguel', 'Alejandro', 'Guzman', 'Buenrostro', 5, 'miguel.guzman@csinformatica.com.mx', 'Rey Nayar 33 Col Rey Nayar', '3111356899', 1, 5),
('David', NULL, 'Duarte', 'Andrade', 6, 'david.duarte@csinformatica.com.mx', 'Av. Mexico 1089 N Col. El panteon', '3115874444', 1, 6),
('Luis', 'Antonio', 'Ponce', 'Alatorre', 7, 'luis.ponce@csinformatica.com.mx', 'Mololoa 65 Col. Mololoa', '3117845650', 3, 3),
('Javier', NULL, 'Ortega', 'Ruiz', 8, 'javier.ortega@csinformatica.com.mx', 'Prieto Crispin 7 Col.Pichones', '3115689475', 3, 3),
('Rafael', 'Ernesto', 'Perez', 'Padillo', 9, 'rafael.padilla@csinformatica.com.mx', 'La Yesca 1784 El nayar', '3111568974', 3, 3),
('Jose', 'Maximiliano', 'Virgen', 'Del Fierro', 10, 'jose.virgen@csinformatica.com.mx', 'Matorrales 45 Col. Acayapan', '3110254689', 3, 3),
('Cristal', 'Guadalupe', 'Quiroga', 'Muro', 11, 'cristal.quiroga@csinformatica.com.mx', 'Zitacua 404 Col. Huicholes', '3110000000', 5, 5),
('Jesus', 'Abraham', 'Curiel', 'Alvarez', 12, 'jesus.curiel@csinformatica.com.mx', 'Nayarabastos 100 Col. Mercados', '3116549889', 4, 4),
('Juan', 'Adolfo', 'Cortez', 'Beltran', 13, 'juan.cortez@csinformatica.com.mx', 'Fray Junipero 897 Col. Centro', '3117531564', 3, 3),
('Eleuterio', NULL, 'Medina', 'Lopez', 14, 'eleuterio.medina@csinformatica.com.mx', 'Matamoros 587 Col. Centro', '3115896789', 5, 5),
('Damasio', NULL, 'Villa', 'Fonseca', 15, 'damasio.villa@csinformatica.com.mx', 'Alaska 234 Col. El rodeo', '3114561231', 4, 4),
('Esther', NULL, 'Santos', 'Roberto', 16, 'esther.santos@csinformatica.com.mx', 'Jardines 11 Col. Los limones', '3111547890', 3, 3),
('Leslie', NULL, 'Salas', 'Pulido', 17, 'leslie.salas@csinformatica.com.mx', 'Gobernadores 132 Col. Gobernadores', '3113222222', 4, 4),
('Francia', 'Estefania', 'Luna', 'Martinez', 18, 'francia.luna@csinformatica.com.mx', 'España 34 Col. CD. del Valle', '3114215744', 3, 3),
('Karen', 'Alejandra', 'Piña', 'Estrada', 19, 'karen.piña@csinformatica.com.mx', 'Sierra Nayar 35 Col. San Juan', '3115786326', 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa_solicitante`
--

DROP TABLE IF EXISTS `empresa_solicitante`;
CREATE TABLE IF NOT EXISTS `empresa_solicitante` (
  `Nombre_Empresa` varchar(45) DEFAULT NULL,
  `ID_Empresa` int(11) NOT NULL AUTO_INCREMENT,
  `RFC_Empresa` varchar(45) DEFAULT NULL,
  `Ubicacion_Empresa` varchar(45) DEFAULT NULL,
  `Telefono_Empresa` varchar(10) DEFAULT NULL,
  `Correo_Empresa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ID_Empresa`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa_solicitante`
--

INSERT INTO `empresa_solicitante` (`Nombre_Empresa`, `ID_Empresa`, `RFC_Empresa`, `Ubicacion_Empresa`, `Telefono_Empresa`, `Correo_Empresa`) VALUES
('JoEs Technology', 18, 'J04FMFE9F9', 'Mexico', '3113951088', 'AgencyJoEsTechnology@gmail.com'),
('Grupo Alica', 1, 'ALICA123456', 'Av. Mexico 200', '3112101018', 'alica@alica.com.mx'),
('CEFERESO', 2, 'CEF2145789', 'Av. Victoria 243', '3114258651', 'cefereso@gob.com.mx'),
('Mexifrutas', 3, 'MEX456FRUT', 'San Cayetano 254', '3112453395', 'mexifrutas@mexifrutas.com.mx'),
('Grupo Carso', 4, 'CARSO23456', 'Luis Donaldo Colosio S/N', '3115487758', 'carso@gc.com.mx');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `informacion_contrato`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `informacion_contrato`;
CREATE TABLE IF NOT EXISTS `informacion_contrato` (
`Nombre1` varchar(45)
,`Nombre2` varchar(45)
,`Apellido1` varchar(45)
,`Apellido2` varchar(45)
,`Fecha_Contrato` date
,`Nombre_Puesto` varchar(45)
,`Sueldo` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

DROP TABLE IF EXISTS `puesto`;
CREATE TABLE IF NOT EXISTS `puesto` (
  `ID_Departamento` int(11) DEFAULT NULL,
  `Nombre_Puesto` varchar(45) DEFAULT NULL,
  `ID_Puesto` int(11) NOT NULL,
  PRIMARY KEY (`ID_Puesto`),
  KEY `ID_Departamento` (`ID_Departamento`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`ID_Departamento`, `Nombre_Puesto`, `ID_Puesto`) VALUES
(1, 'Director General', 1),
(2, 'Reclutador', 2),
(3, 'Gerente de Asesoria', 3),
(3, 'Asesor de Servicios', 4),
(4, 'Gerente de Contabilidad', 5),
(4, 'Auxiliar Contable', 6),
(4, 'Auxiliar Administrativo', 7),
(5, 'Gerente de Soporte Tecnico', 8),
(5, 'Tecnico', 9),
(6, 'Gerente de Almacen y Logistica', 10),
(6, 'Auxiliar Logistica', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `Nombre_Servicio` varchar(45) DEFAULT NULL,
  `ID_Servicio` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Departamento` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Servicio`),
  KEY `ID_Departamento` (`ID_Departamento`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Nombre_Servicio`, `ID_Servicio`, `ID_Departamento`) VALUES
('CapacitaciÃ³n en manejo de CONTPAQi', 1, 3),
('Auditoria de redes', 2, 3),
('InstalaciÃ³n de redes', 3, 5),
('InstalaciÃ³n de CONTPAQi en equipos', 4, 5),
('Mantenimiento de equipos', 5, 5),
('Reclutamiento de Personal', 6, 2),
('Seminarios  CONTPAQi', 7, 3);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `servicios_2010_2019`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `servicios_2010_2019`;
CREATE TABLE IF NOT EXISTS `servicios_2010_2019` (
`Nombre1` varchar(45)
,`Nombre2` varchar(45)
,`Apellido1` varchar(45)
,`Apellido2` varchar(45)
,`Nombre_Servicio` varchar(45)
,`Fecha_Fin_Servicio` date
,`Nombre_Departamento` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `servicios_2020_o_mas`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `servicios_2020_o_mas`;
CREATE TABLE IF NOT EXISTS `servicios_2020_o_mas` (
`Nombre1` varchar(45)
,`Nombre2` varchar(45)
,`Apellido1` varchar(45)
,`Apellido2` varchar(45)
,`Nombre_Servicio` varchar(45)
,`Fecha_Fin_Servicio` date
,`Nombre_Departamento` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `servicios_realizados`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `servicios_realizados`;
CREATE TABLE IF NOT EXISTS `servicios_realizados` (
`Nombre1` varchar(45)
,`Nombre2` varchar(45)
,`Apellido1` varchar(45)
,`Apellido2` varchar(45)
,`Nombre_Servicio` varchar(45)
,`Nombre_Empresa` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `supervisores`
-- (Véase abajo para la vista actual)
--
DROP VIEW IF EXISTS `supervisores`;
CREATE TABLE IF NOT EXISTS `supervisores` (
`Nombre1` varchar(45)
,`Nombre2` varchar(45)
,`Apellido1` varchar(45)
,`Apellido2` varchar(45)
,`ID_Departamento` int(11)
,`Cantidad_de_Empleados` bigint(21)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabaja_en`
--

DROP TABLE IF EXISTS `trabaja_en`;
CREATE TABLE IF NOT EXISTS `trabaja_en` (
  `ID_Empleado` int(11) DEFAULT NULL,
  `ID_Servicio` int(11) DEFAULT NULL,
  `ID_Empresa` int(11) DEFAULT NULL,
  `Fecha_Inicio_Servicio` date DEFAULT NULL,
  `Fecha_Fin_Servicio` date DEFAULT NULL,
  KEY `ID_Empleado` (`ID_Empleado`),
  KEY `ID_Servicio` (`ID_Servicio`),
  KEY `ID_Empresa` (`ID_Empresa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trabaja_en`
--

INSERT INTO `trabaja_en` (`ID_Empleado`, `ID_Servicio`, `ID_Empresa`, `Fecha_Inicio_Servicio`, `Fecha_Fin_Servicio`) VALUES
(2, 1, 1, '1997-02-03', '1998-04-05'),
(7, 2, 2, '1998-02-03', '2010-01-15'),
(11, 3, 1, '2010-04-02', '2010-04-28'),
(11, 5, 1, '2010-04-02', '2010-04-28'),
(19, 4, 3, '2015-01-19', '2015-01-22'),
(14, 4, 4, '2018-04-28', '2018-04-30'),
(13, 3, 2, '2018-04-28', '2022-01-30'),
(9, 3, 1, '2020-01-01', '2023-01-30'),
(16, 3, 5, '2018-04-28', '2020-03-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`) VALUES
(1, 'admin', 'password'),
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Estructura para la vista `informacion_contrato`
--
DROP TABLE IF EXISTS `informacion_contrato`;

DROP VIEW IF EXISTS `informacion_contrato`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `informacion_contrato`  AS  select `e`.`Nombre1` AS `Nombre1`,`e`.`Nombre2` AS `Nombre2`,`e`.`Apellido1` AS `Apellido1`,`e`.`Apellido2` AS `Apellido2`,`c`.`Fecha_Contrato` AS `Fecha_Contrato`,`p`.`Nombre_Puesto` AS `Nombre_Puesto`,`c`.`Sueldo` AS `Sueldo` from ((`empleado` `e` join `contrato` `c` on((`e`.`ID_Empleado` = `c`.`ID_Empleado`))) join `puesto` `p` on((`p`.`ID_Puesto` = `c`.`ID_Puesto`))) order by `c`.`Fecha_Contrato` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `servicios_2010_2019`
--
DROP TABLE IF EXISTS `servicios_2010_2019`;

DROP VIEW IF EXISTS `servicios_2010_2019`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `servicios_2010_2019`  AS  select `e`.`Nombre1` AS `Nombre1`,`e`.`Nombre2` AS `Nombre2`,`e`.`Apellido1` AS `Apellido1`,`e`.`Apellido2` AS `Apellido2`,`s`.`Nombre_Servicio` AS `Nombre_Servicio`,`t`.`Fecha_Fin_Servicio` AS `Fecha_Fin_Servicio`,`d`.`Nombre_Departamento` AS `Nombre_Departamento` from (((`empleado` `e` join `trabaja_en` `t` on((`e`.`ID_Empleado` = `t`.`ID_Empleado`))) join `servicios` `s` on((`t`.`ID_Servicio` = `s`.`ID_Servicio`))) join `departamento` `d` on((`s`.`ID_Departamento` = `d`.`ID_Departamento`))) where ((`t`.`Fecha_Fin_Servicio` < '2020-01-01') and (`t`.`Fecha_Fin_Servicio` >= '2010-01-01')) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `servicios_2020_o_mas`
--
DROP TABLE IF EXISTS `servicios_2020_o_mas`;

DROP VIEW IF EXISTS `servicios_2020_o_mas`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `servicios_2020_o_mas`  AS  select `e`.`Nombre1` AS `Nombre1`,`e`.`Nombre2` AS `Nombre2`,`e`.`Apellido1` AS `Apellido1`,`e`.`Apellido2` AS `Apellido2`,`s`.`Nombre_Servicio` AS `Nombre_Servicio`,`t`.`Fecha_Fin_Servicio` AS `Fecha_Fin_Servicio`,`d`.`Nombre_Departamento` AS `Nombre_Departamento` from (((`empleado` `e` join `trabaja_en` `t` on((`e`.`ID_Empleado` = `t`.`ID_Empleado`))) join `servicios` `s` on((`t`.`ID_Servicio` = `s`.`ID_Servicio`))) join `departamento` `d` on((`s`.`ID_Departamento` = `d`.`ID_Departamento`))) where (`t`.`Fecha_Fin_Servicio` >= '2020-01-01') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `servicios_realizados`
--
DROP TABLE IF EXISTS `servicios_realizados`;

DROP VIEW IF EXISTS `servicios_realizados`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `servicios_realizados`  AS  select `e`.`Nombre1` AS `Nombre1`,`e`.`Nombre2` AS `Nombre2`,`e`.`Apellido1` AS `Apellido1`,`e`.`Apellido2` AS `Apellido2`,`s`.`Nombre_Servicio` AS `Nombre_Servicio`,`es`.`Nombre_Empresa` AS `Nombre_Empresa` from (((`empleado` `e` join `trabaja_en` `t` on((`e`.`ID_Empleado` = `t`.`ID_Empleado`))) join `servicios` `s` on((`t`.`ID_Servicio` = `s`.`ID_Servicio`))) join `empresa_solicitante` `es` on((`es`.`ID_Empresa` = `t`.`ID_Empresa`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `supervisores`
--
DROP TABLE IF EXISTS `supervisores`;

DROP VIEW IF EXISTS `supervisores`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `supervisores`  AS  select `e1`.`Nombre1` AS `Nombre1`,`e1`.`Nombre2` AS `Nombre2`,`e1`.`Apellido1` AS `Apellido1`,`e1`.`Apellido2` AS `Apellido2`,`e1`.`ID_Departamento` AS `ID_Departamento`,count(`e2`.`ID_Empleado`) AS `Cantidad_de_Empleados` from (`empleado` `e1` join `empleado` `e2` on((`e1`.`ID_Empleado` = `e2`.`ID_Supervisor`))) group by `e1`.`ID_Empleado` ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
