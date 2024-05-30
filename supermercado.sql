-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2024 a las 00:54:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supermercado_northwind`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catálogo`
--

CREATE TABLE `catálogo` (
  `Código_Producto` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripción` varchar(100) NOT NULL,
  `Precio_Compra` double NOT NULL,
  `Precio_Venta` double NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Estado` varchar(70) NOT NULL,
  `Fotografía` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `catálogo`
--

INSERT INTO `catálogo` (`Código_Producto`, `Nombre`, `Descripción`, `Precio_Compra`, `Precio_Venta`, `Cantidad`, `Estado`, `Fotografía`) VALUES
(1, 'Arroz', 'Arroz blanco de excelente calidad', 1500, 2000, 100, 'Disponible', 'arroz.png'),
(2, 'Frijoles', 'Frijoles rojos cultivados localmente', 2000, 2500, 80, 'Disponible', 'frijoles.png'),
(3, 'Aceite de cocina', 'Aceite de soja prensado en frío', 3000, 3500, 50, 'Disponible', 'aceite.png'),
(4, 'Leche', 'Leche entera pasteurizada', 2500, 3000, 120, 'Disponible', 'leche.png'),
(5, 'Huevos', 'Huevos frescos de gallinas libres', 1800, 2200, 90, 'Disponible', 'huevos.png'),
(6, 'Pan', 'Pan blanco recién horneado', 1000, 1500, 70, 'Disponible', 'pan.png'),
(7, 'Frutas Variadas', 'Variedad de frutas frescas de temporada', 5000, 6000, 40, 'Disponible', 'frutas.png'),
(8, 'Verduras Mixtas', 'Mezcla de verduras frescas de la región', 4000, 5000, 60, 'Disponible', 'verduras.png'),
(9, 'Carne de Res', 'Carne de res magra cortada al estilo del carnicero', 8000, 10000, 30, 'Disponible', 'carne.png'),
(10, 'Pollo Entero', 'Pollo entero fresco de granja', 7000, 8500, 40, 'Disponible', 'pollo.png'),
(11, 'Pescado Fresco', 'Pescado fresco capturado en aguas locales', 6000, 7500, 25, 'Disponible', 'pescado.png'),
(12, 'Queso', 'Queso fresco artesanal de leche de vaca', 4000, 5000, 35, 'Disponible', 'queso.png'),
(13, 'Yogur Natural', 'Yogur natural sin azúcar añadido', 2000, 2500, 50, 'Disponible', 'yogur.png'),
(14, 'Galletas', 'Galletas integrales de avena y pasas', 2500, 3000, 80, 'Disponible', 'galletas.png'),
(15, 'Refresco de Cola', 'Refresco de cola carbonatado', 1500, 2000, 100, 'Disponible', 'cola.png'),
(16, 'Agua Mineral', 'Agua mineral embotellada de manantial', 1000, 1500, 120, 'Disponible', 'agua.png'),
(17, 'Cerveza', 'Cerveza artesanal de trigo', 3000, 3500, 60, 'Disponible', 'cerveza.png'),
(18, 'Vino Tinto', 'Vino tinto reserva de la región', 5000, 6000, 40, 'Disponible', 'vino.png'),
(19, 'Café', 'Café arábica molido recién tostado', 4000, 5000, 70, 'Disponible', 'cafe.png'),
(20, 'Azúcar', 'Azúcar blanca granulada', 1500, 2000, 90, 'Disponible', 'azucar.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `identificación` int(11) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Dirección` varchar(60) NOT NULL,
  `Teléfono` int(11) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Genero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`identificación`, `Nombres`, `Apellidos`, `Dirección`, `Teléfono`, `Email`, `Genero`) VALUES
(1001, 'Andrés', 'Camilo', 'Calle 123, Medellín', 1234567890, 'andres@example.com', 'Masculino'),
(1002, 'María', 'Fernanda', 'Carrera 456, Medellín', 987654321, 'maria@example.com', 'Femenino'),
(1003, 'Juan', 'Pablo', 'Calle 789, Medellín', 1122334455, 'juan@example.com', 'Masculino'),
(1004, 'Ana María', 'Alvarez', 'Avenida XYZ, Medellín', 2147483647, 'ana@example.com', 'Femenino'),
(1005, 'Carlos', 'Andrés', 'Calle ABC, Medellín', 2147483647, 'carlos@example.com', 'Masculino'),
(1006, 'Laura Sofía', 'Perez', 'Carrera DEF, Medellín', 2147483647, 'laura@example.com', 'Femenino'),
(1007, 'José Luis', 'Gomez', 'Avenida GHI, Medellín', 1122334455, 'jose@example.com', 'Masculino'),
(1008, 'Diana Marcela', 'Garcia', 'Calle JKL, Medellín', 2147483647, 'diana@example.com', 'Femenino'),
(1009, 'Santiago', 'López', 'Carrera MNO, Medellín', 2147483647, 'santiago@example.com', 'Masculino'),
(1010, 'Paola Andrea', 'Vera', 'Calle PQR, Medellín', 1122334455, 'paola@example.com', 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `identificación` int(11) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `FechaIngreso` date NOT NULL,
  `Salario` decimal(65,0) NOT NULL,
  `Cargo` varchar(80) NOT NULL,
  `Dirección` varchar(70) NOT NULL,
  `Teléfono` int(11) NOT NULL,
  `Email` varchar(76) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`identificación`, `Nombres`, `Apellidos`, `FechaIngreso`, `Salario`, `Cargo`, `Dirección`, `Teléfono`, `Email`) VALUES
(2001, 'Juan', 'Pérez', '2023-01-15', 1200000, 'Cajero', 'Calle 1, Medellín', 1234567890, 'juan@example.com'),
(2002, 'María', 'López', '2023-02-20', 1500000, 'Almacenista', 'Carrera 2, Medellín', 987654321, 'maria@example.com'),
(2003, 'Carlos', 'Gómez', '2022-12-10', 1800000, 'Gerente', 'Calle 3, Medellín', 1122334455, 'carlos@example.com'),
(2004, 'Ana', 'Martínez', '2023-03-05', 1400000, 'Cajero', 'Avenida 4, Medellín', 2147483647, 'ana@example.com'),
(2005, 'José', 'Rodríguez', '2023-04-18', 1600000, 'Vendedor', 'Calle 5, Medellín', 2147483647, 'jose@example.com'),
(2006, 'Laura', 'Sánchez', '2023-05-25', 1700000, 'Almacenista', 'Carrera 6, Medellín', 2147483647, 'laura@example.com'),
(2007, 'Pedro', 'Pérez', '2023-06-30', 1300000, 'Cajero', 'Avenida 7, Medellín', 1122334455, 'pedro@example.com'),
(2008, 'Diana', 'Ramírez', '2023-07-12', 1600000, 'Vendedor', 'Calle 8, Medellín', 2147483647, 'diana@example.com'),
(2009, 'Luis', 'González', '2023-08-29', 1700000, 'Almacenista', 'Carrera 9, Medellín', 2147483647, 'luis@example.com'),
(2010, 'Paola', 'Martínez', '2023-09-14', 1800000, 'Gerente', 'Calle 10, Medellín', 1122334455, 'paola@example.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `NoFactura` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Empleado` int(11) NOT NULL,
  `TipoPago` varchar(50) DEFAULT NULL,
  `Valor` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`NoFactura`, `Fecha`, `Hora`, `Empleado`, `TipoPago`, `Valor`) VALUES
(41, '2023-01-15', '08:30:00', 2001, 'Efectivo', 50000.00),
(42, '2023-02-20', '10:45:00', 2002, 'Tarjeta de crédito', 75000.00),
(43, '2022-12-10', '09:15:00', 2003, 'Efectivo', 120000.00),
(44, '2023-03-05', '11:00:00', 2004, 'Tarjeta de débito', 80000.00),
(45, '2023-04-18', '14:20:00', 2005, 'Efectivo', 95000.00),
(46, '2023-05-25', '12:30:00', 2006, 'Transferencia bancaria', 60000.00),
(47, '2023-06-30', '09:45:00', 2007, 'Efectivo', 70000.00),
(48, '2023-07-12', '13:10:00', 2008, 'Tarjeta de crédito', 85000.00),
(49, '2023-08-29', '16:00:00', 2009, 'Efectivo', 110000.00),
(50, '2023-09-14', '17:30:00', 2010, 'Tarjeta de débito', 90000.00),
(51, '2024-05-08', '09:22:30', 2005, 'Efectivo', 55000.00),
(52, '2023-11-25', '10:45:00', 2002, 'Tarjeta de crédito', 72000.00),
(53, '2023-12-12', '09:15:00', 2003, 'Efectivo', 125000.00),
(54, '2024-01-05', '11:00:00', 2004, 'Tarjeta de débito', 82000.00),
(55, '2024-02-18', '14:20:00', 2005, 'Efectivo', 97000.00),
(56, '2024-03-25', '12:30:00', 2006, 'Transferencia bancaria', 61000.00),
(57, '2024-04-30', '09:45:00', 2007, 'Efectivo', 72000.00),
(58, '2024-05-12', '13:10:00', 2008, 'Tarjeta de crédito', 83000.00),
(59, '2024-06-29', '16:00:00', 2009, 'Efectivo', 115000.00),
(60, '2024-07-14', '17:30:00', 2010, 'Tarjeta de débito', 92000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_producto`
--

CREATE TABLE `factura_producto` (
  `ID` int(11) NOT NULL,
  `Producto` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Descuento` decimal(10,2) DEFAULT NULL,
  `Subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `factura_producto`
--

INSERT INTO `factura_producto` (`ID`, `Producto`, `Cantidad`, `Descuento`, `Subtotal`) VALUES
(1, 1, 2, 0.00, 4000.00),
(2, 2, 1, 0.00, 3000.00),
(3, 3, 3, 1000.00, 5500.00),
(4, 4, 2, 0.00, 10000.00),
(5, 5, 1, 0.00, 8000.00),
(6, 6, 2, 500.00, 14000.00),
(7, 7, 4, 0.00, 10000.00),
(8, 8, 1, 0.00, 2000.00),
(9, 9, 3, 800.00, 8300.00),
(10, 10, 2, 0.00, 8000.00),
(11, 11, 5, 0.00, 12500.00),
(12, 12, 3, 0.00, 9000.00),
(13, 13, 2, 0.00, 3000.00),
(14, 14, 1, 0.00, 5000.00),
(15, 15, 2, 0.00, 17000.00),
(16, 16, 1, 0.00, 4000.00),
(17, 17, 3, 0.00, 9000.00),
(18, 18, 2, 0.00, 3000.00),
(19, 19, 1, 0.00, 5000.00),
(20, 20, 4, 500.00, 7000.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `NIT` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Dirección` varchar(100) NOT NULL,
  `Teléfono` int(11) NOT NULL,
  `Email` varchar(90) NOT NULL,
  `Nombre_Contacto` varchar(80) NOT NULL,
  `Cargo_Contacto` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`NIT`, `Nombre`, `Dirección`, `Teléfono`, `Email`, `Nombre_Contacto`, `Cargo_Contacto`) VALUES
(3001, 'Proveedor A', 'Calle X, Medellín', 1234567890, 'proveedora@example.com', 'Juan Pérez', 'Gerente Compras'),
(3002, 'Proveedor B', 'Carrera Y, Medellín', 987654321, 'proveedorb@example.com', 'María López', 'Gerente Compras'),
(3003, 'Proveedor C', 'Avenida Z, Medellín', 1122334455, 'proveedorc@example.com', 'Carlos Gómez', 'Gerente Compras'),
(3004, 'Proveedor D', 'Calle W, Medellín', 2147483647, 'proveedord@example.com', 'Ana Martínez', 'Gerente Compras'),
(3005, 'Proveedor E', 'Carrera V, Medellín', 2147483647, 'proveedore@example.com', 'José Rodríguez', 'Gerente Compras'),
(3006, 'Proveedor F', 'Avenida U, Medellín', 2147483647, 'proveedorf@example.com', 'Laura Sánchez', 'Gerente Compras'),
(3007, 'Proveedor G', 'Calle T, Medellín', 1122334455, 'proveedorg@example.com', 'Pedro Pérez', 'Gerente Compras'),
(3008, 'Proveedor H', 'Carrera S, Medellín', 2147483647, 'proveedorh@example.com', 'Diana Ramírez', 'Gerente Compras'),
(3009, 'Proveedor I', 'Avenida R, Medellín', 2147483647, 'proveedori@example.com', 'Luis González', 'Gerente Compras'),
(3010, 'Proveedor J', 'Calle Q, Medellín', 1122334455, 'proveedorj@example.com', 'Paola Martínez', 'Gerente Compras');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catálogo`
--
ALTER TABLE `catálogo`
  ADD PRIMARY KEY (`Código_Producto`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`identificación`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`identificación`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`NoFactura`),
  ADD KEY `Empleado` (`Empleado`) USING BTREE;

--
-- Indices de la tabla `factura_producto`
--
ALTER TABLE `factura_producto`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Producto` (`Producto`) USING BTREE;

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`NIT`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catálogo`
--
ALTER TABLE `catálogo`
  MODIFY `Código_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `NoFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`Empleado`) REFERENCES `empleados` (`identificación`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `factura_producto`
--
ALTER TABLE `factura_producto`
  ADD CONSTRAINT `factura_producto_ibfk_1` FOREIGN KEY (`Producto`) REFERENCES `catálogo` (`Código_Producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
