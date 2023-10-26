-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2023 a las 21:08:28
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `muebleriairams`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_Proveedor` int(5) NOT NULL,
  `Id_Producto` int(5) NOT NULL,
  `NombreEmpresa` varchar(250) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `Ciudad` varchar(250) NOT NULL,
  `Estado` varchar(250) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `CorreoElectronico` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Id_Proveedor`, `Id_Producto`, `NombreEmpresa`, `Direccion`, `Ciudad`, `Estado`, `Telefono`, `CorreoElectronico`) VALUES
(1, 1, 'MisterWills', 'rusia #7890', 'ciudad mexico', 'estado de mexico', '2147483647', 'jaja@gmail.com'),
(2, 2, 'Whirpool', 'canada #4569', 'parral', 'chihuahua', '77777', 'iram@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_Proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id_Proveedor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
