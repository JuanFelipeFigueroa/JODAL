-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.38-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para jodal
CREATE DATABASE IF NOT EXISTS `jodal` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `jodal`;

-- Volcando estructura para tabla jodal.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` varchar(15) NOT NULL,
  `nombre_cliente` varchar(45) NOT NULL,
  `contrasena_cli` varchar(12) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.clientes: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `contrasena_cli`) VALUES
	('1001188696', 'juan figueroa', '010203'),
	('1012329961', 'carlos rojas', 'nkbjcs12'),
	('1112319431', 'andres martinez', '908121js'),
	('1302323911', 'leidy murcia', 'nsj1112'),
	('1702319991', 'jhojan marquez', '21h213');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla jodal.empleados
CREATE TABLE IF NOT EXISTS `empleados` (
  `id_empleado` varchar(15) NOT NULL,
  `ROL_id_rol` int(11) NOT NULL,
  `NIVEL_ACCESO_id_nivel` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `contrasena` varchar(12) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `tiempo_disponible` time DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`id_empleado`),
  KEY `EMPLEADOS_FKIndex1` (`NIVEL_ACCESO_id_nivel`),
  KEY `EMPLEADOS_FKIndex2` (`ROL_id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.empleados: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` (`id_empleado`, `ROL_id_rol`, `NIVEL_ACCESO_id_nivel`, `nombre`, `contrasena`, `correo`, `telefono`, `fecha_ingreso`, `tiempo_disponible`, `estado`, `fecha_nacimiento`) VALUES
	('1001188696', 3, 3, 'Juan Figueroa', '010203', NULL, NULL, NULL, NULL, NULL, NULL),
	('1023965864', 1, 1, 'darley rincon', '010203', NULL, NULL, NULL, NULL, NULL, NULL),
	('1234332490', 1, 1, 'Liliana Rojas', '010203', NULL, NULL, NULL, NULL, NULL, NULL),
	('123433994', 2, 2, 'Oscar Ojeda', '010203', NULL, NULL, NULL, NULL, NULL, NULL),
	('1237402324', 1, 1, 'Darlin Montaña', '010203', NULL, NULL, NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para procedimiento jodal.entrada_pro
DELIMITER //
CREATE PROCEDURE `entrada_pro`(IN fecha DATE)
BEGIN
    SELECT
        t.nombre_tipo_movimiento TIPO,
        p.nombre_pro PRODUCTO,
        r.nombre_proveedor PROVEEDOR,
        m.cantidad_movimiento CANTIDAD,
        m.fecha_movimiento FECHA,
        m.descripcion_movimiento DESCRIPCION
    FROM
        MOVIMIENTOS m,
        TIPO_MOVIMIENTO t,
        PRODUCTOS p,
        PROVEEDORES r
    WHERE
        m.TIPO_MOVIMIENTO_id_tipo_movimiento = t.id_tipo_movimiento AND m.PRODUCTOS_id_producto = p.id_producto AND m.PROVEEDORES_id_proveedor = r.id_proveedor AND TIPO_MOVIMIENTO_id_tipo_movimiento = 3 AND m.fecha_movimiento >= fecha ;
END//
DELIMITER ;

-- Volcando estructura para tabla jodal.habilidades_colaborador
CREATE TABLE IF NOT EXISTS `habilidades_colaborador` (
  `TIPO_SERVICIO_id_tipo_servicio` int(11) NOT NULL,
  `EMPLEADOS_id_empleado` varchar(15) NOT NULL,
  PRIMARY KEY (`TIPO_SERVICIO_id_tipo_servicio`,`EMPLEADOS_id_empleado`),
  KEY `TIPO_SERVICIO_has_EMPLEADOS_FKIndex1` (`TIPO_SERVICIO_id_tipo_servicio`),
  KEY `TIPO_SERVICIO_has_EMPLEADOS_FKIndex2` (`EMPLEADOS_id_empleado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.habilidades_colaborador: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `habilidades_colaborador` DISABLE KEYS */;
INSERT INTO `habilidades_colaborador` (`TIPO_SERVICIO_id_tipo_servicio`, `EMPLEADOS_id_empleado`) VALUES
	(1, '1023102310'),
	(1, '1237402324'),
	(2, '1023102310'),
	(2, '1237402324'),
	(3, '1023102310'),
	(3, '1234332490'),
	(4, '1023102310'),
	(4, '1234332490');
/*!40000 ALTER TABLE `habilidades_colaborador` ENABLE KEYS */;

-- Volcando estructura para tabla jodal.movimientos
CREATE TABLE IF NOT EXISTS `movimientos` (
  `id_movimiento` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_MOVIMIENTO_id_tipo_movimiento` int(11) NOT NULL,
  `PRODUCTOS_id_producto` int(11) NOT NULL,
  `CLIENTES_id_cliente` varchar(15) DEFAULT NULL,
  `PROVEEDORES_id_proveedor` int(11) DEFAULT NULL,
  `cantidad_movimiento` int(11) NOT NULL,
  `fecha_movimiento` date NOT NULL,
  `descripcion_movimiento` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_movimiento`,`TIPO_MOVIMIENTO_id_tipo_movimiento`,`PRODUCTOS_id_producto`),
  KEY `MOVIMIENTOS_FKIndex1` (`TIPO_MOVIMIENTO_id_tipo_movimiento`),
  KEY `MOVIMIENTOS_FKIndex2` (`PRODUCTOS_id_producto`),
  KEY `MOVIMIENTOS_FKIndex3` (`CLIENTES_id_cliente`),
  KEY `MOVIMIENTOS_FKIndex4` (`PROVEEDORES_id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.movimientos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `movimientos` DISABLE KEYS */;
INSERT INTO `movimientos` (`id_movimiento`, `TIPO_MOVIMIENTO_id_tipo_movimiento`, `PRODUCTOS_id_producto`, `CLIENTES_id_cliente`, `PROVEEDORES_id_proveedor`, `cantidad_movimiento`, `fecha_movimiento`, `descripcion_movimiento`) VALUES
	(1, 2, 3, NULL, NULL, 1, '2020-10-20', 'consumo de una mascarilla');
/*!40000 ALTER TABLE `movimientos` ENABLE KEYS */;

-- Volcando estructura para tabla jodal.nivel_acceso
CREATE TABLE IF NOT EXISTS `nivel_acceso` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_nivel` varchar(20) NOT NULL,
  PRIMARY KEY (`id_nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.nivel_acceso: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `nivel_acceso` DISABLE KEYS */;
INSERT INTO `nivel_acceso` (`id_nivel`, `nombre_nivel`) VALUES
	(1, 'bajo'),
	(2, 'medio'),
	(3, 'alto');
/*!40000 ALTER TABLE `nivel_acceso` ENABLE KEYS */;

-- Volcando estructura para tabla jodal.novedades
CREATE TABLE IF NOT EXISTS `novedades` (
  `id_novedad` int(11) NOT NULL AUTO_INCREMENT,
  `EMPLEADOS_id_empleado` varchar(15) NOT NULL,
  `valor_novedad` int(11) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_finalizacion` time DEFAULT NULL,
  PRIMARY KEY (`id_novedad`,`EMPLEADOS_id_empleado`),
  KEY `NOVEDADES_FKIndex1` (`EMPLEADOS_id_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.novedades: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `novedades` DISABLE KEYS */;
INSERT INTO `novedades` (`id_novedad`, `EMPLEADOS_id_empleado`, `valor_novedad`, `fecha_inicio`, `fecha_vencimiento`, `hora_inicio`, `hora_finalizacion`) VALUES
	(1, '1237402324', 6, '2020-10-16', '2020-10-16', '12:30:00', '18:30:00'),
	(2, '1234332490', 10, '2020-10-16', '2020-10-16', '14:30:00', '20:00:00');
/*!40000 ALTER TABLE `novedades` ENABLE KEYS */;

-- Volcando estructura para tabla jodal.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `PROVEEDORES_id_proveedor` int(11) NOT NULL,
  `nombre_pro` varchar(45) NOT NULL,
  `precio_pro` int(11) NOT NULL,
  `descripcion_pro` varchar(100) NOT NULL,
  `stock_actual` int(11) NOT NULL,
  PRIMARY KEY (`id_producto`),
  KEY `PRODUCTOS_FKIndex1` (`PROVEEDORES_id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.productos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`id_producto`, `PROVEEDORES_id_proveedor`, `nombre_pro`, `precio_pro`, `descripcion_pro`, `stock_actual`) VALUES
	(1, 2, 'cera ego', 2000, 'cera ego para peinar (60ml)', 0),
	(2, 1, 'bulbo forte', 22000, 'bulbo forte tonico para el crecimiento (120ml)', 0),
	(3, 1, 'mascarilla prokpil', 17000, 'mascarilla prokpil, tratamiento color (100ml)', 0),
	(4, 1, 'keratina salon in', 35000, 'keratina salon in tratamiento capilar (500ml)', 0);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;

-- Volcando estructura para tabla jodal.proveedores
CREATE TABLE IF NOT EXISTS `proveedores` (
  `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proveedor` varchar(45) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `telefono_proveedor` varchar(10) NOT NULL,
  `correo_proveedor` varchar(45) DEFAULT NULL,
  `estado_proveedor` varchar(10) NOT NULL,
  `estado_visita` varchar(10) NOT NULL,
  `estado_entrega` varchar(10) NOT NULL,
  PRIMARY KEY (`id_proveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.proveedores: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
INSERT INTO `proveedores` (`id_proveedor`, `nombre_proveedor`, `fecha_inicio`, `telefono_proveedor`, `correo_proveedor`, `estado_proveedor`, `estado_visita`, `estado_entrega`) VALUES
	(1, 'brooklyn', '2020-10-01', '5681212', 'barberiabrooklyn@gmail.com', 'activo', 'pendiente', 'realizada'),
	(2, 'ego', '2020-10-01', '5681728', 'ego_colombiasa@gmail.com', 'activo', 'realizada', 'pendiente');
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;

-- Volcando estructura para tabla jodal.reservas
CREATE TABLE IF NOT EXISTS `reservas` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `CLIENTES_id_cliente` varchar(15) NOT NULL,
  `EMPLEADOS_id_empleado` varchar(15) NOT NULL,
  `TIPO_SERVICIO_id_tipo_servicio` int(11) NOT NULL,
  PRIMARY KEY (`id_reserva`,`CLIENTES_id_cliente`,`EMPLEADOS_id_empleado`),
  KEY `RESERVAS_FKIndex1` (`CLIENTES_id_cliente`),
  KEY `RESERVAS_FKIndex2` (`EMPLEADOS_id_empleado`),
  KEY `RESERVAS_FKIndex3` (`TIPO_SERVICIO_id_tipo_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.reservas: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
INSERT INTO `reservas` (`id_reserva`, `CLIENTES_id_cliente`, `EMPLEADOS_id_empleado`, `TIPO_SERVICIO_id_tipo_servicio`) VALUES
	(1, '1702319991', '1237402324', 1),
	(3, '1302323911', '1237402324', 2),
	(4, '1302323911', '1234332490', 3),
	(2, '1302323911', '1234332490', 4);
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;

-- Volcando estructura para procedimiento jodal.reserva_cli
DELIMITER //
CREATE PROCEDURE `reserva_cli`(IN id_cli VARCHAR(15))
BEGIN
    SELECT
        c.nombre_cliente,
        e.nombre,
        t.nombre_tipo_servicio,
        t.valor_min,
        t.duracion_aprox
    FROM
        CLIENTES c,
        RESERVAS r,
        EMPLEADOS e,
        TIPO_SERVICIO t
    WHERE
        r.CLIENTES_id_cliente = c.id_cliente AND R.EMPLEADOS_id_empleado = e.id_empleado AND R.TIPO_SERVICIO_id_tipo_servicio = t.id_tipo_servicio AND c.id_cliente = id_cli;
END//
DELIMITER ;

-- Volcando estructura para procedimiento jodal.reserva_col
DELIMITER //
CREATE PROCEDURE `reserva_col`(IN id_col VARCHAR(15))
BEGIN
    SELECT
        c.nombre_cliente,
        e.nombre,
        t.nombre_tipo_servicio,
        t.valor_min,
        t.duracion_aprox
    FROM
        CLIENTES c,
        RESERVAS r,
        EMPLEADOS e,
        TIPO_SERVICIO t
    WHERE
        r.CLIENTES_id_cliente = c.id_cliente AND R.EMPLEADOS_id_empleado = e.id_empleado AND R.TIPO_SERVICIO_id_tipo_servicio = t.id_tipo_servicio AND e.id_empleado = id_col ;
END//
DELIMITER ;

-- Volcando estructura para tabla jodal.rol
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(20) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.rol: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
	(1, 'colaborador'),
	(2, 'asistente'),
	(3, 'administrador');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

-- Volcando estructura para tabla jodal.servicios
CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `TIPO_SERVICIO_id_tipo_servicio` int(11) NOT NULL,
  `EMPLEADOS_id_empleado` varchar(15) NOT NULL,
  `CLIENTES_id_cliente` varchar(15) NOT NULL,
  `fecha_realizacion` date NOT NULL,
  `valor_final` int(11) NOT NULL,
  PRIMARY KEY (`id_servicio`,`TIPO_SERVICIO_id_tipo_servicio`,`EMPLEADOS_id_empleado`,`CLIENTES_id_cliente`),
  KEY `SERVICIOS_FKIndex1` (`TIPO_SERVICIO_id_tipo_servicio`),
  KEY `SERVICIOS_FKIndex2` (`EMPLEADOS_id_empleado`),
  KEY `SERVICIOS_FKIndex3` (`CLIENTES_id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.servicios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` (`id_servicio`, `TIPO_SERVICIO_id_tipo_servicio`, `EMPLEADOS_id_empleado`, `CLIENTES_id_cliente`, `fecha_realizacion`, `valor_final`) VALUES
	(1, 1, '1237402324', '1702319991', '2020-10-16', 12000),
	(2, 2, '1237402324', '1302323911', '2020-10-16', 50000),
	(3, 3, '1234332490', '1302323911', '2020-10-16', 12000);
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;

-- Volcando estructura para procedimiento jodal.servicio_cli
DELIMITER //
CREATE PROCEDURE `servicio_cli`(IN id_cli VARCHAR(15))
BEGIN
    SELECT
        t.nombre_tipo_servicio,
        e.nombre,
        c.nombre_cliente,
        s.fecha_realizacion,
        t.valor_min,
        s.valor_final
    FROM
        SERVICIOS s,
        EMPLEADOS e,
        CLIENTES c,
        TIPO_SERVICIO t
    WHERE
        e.id_empleado = s.EMPLEADOS_id_empleado AND c.id_cliente = s.CLIENTES_id_cliente AND t.id_tipo_servicio = s.TIPO_SERVICIO_id_tipo_servicio AND c.id_cliente = id_cli;
END//
DELIMITER ;

-- Volcando estructura para procedimiento jodal.servicio_col
DELIMITER //
CREATE PROCEDURE `servicio_col`(IN id_col VARCHAR(15))
BEGIN
    SELECT
        t.nombre_tipo_servicio,
        e.nombre,
        c.nombre_cliente,
        s.fecha_realizacion,
        t.valor_min,
        s.valor_final
    FROM
        SERVICIOS s,
        EMPLEADOS e,
        CLIENTES c,
        TIPO_SERVICIO t
    WHERE
        e.id_empleado = s.EMPLEADOS_id_empleado AND c.id_cliente = s.CLIENTES_id_cliente AND t.id_tipo_servicio = s.TIPO_SERVICIO_id_tipo_servicio AND e.id_empleado = id_col ;
END//
DELIMITER ;

-- Volcando estructura para procedimiento jodal.skills_col
DELIMITER //
CREATE PROCEDURE `skills_col`(IN id_col VARCHAR(15))
BEGIN
SELECT
        e.nombre,
        t.nombre_tipo_servicio,
        t.valor_min,
        t.duracion_aprox
    FROM
        HABILIDADES_COLABORADOR h,
        EMPLEADOS e,
        TIPO_SERVICIO t
    WHERE
        h.EMPLEADOS_id_empleado = e.id_empleado AND h.TIPO_SERVICIO_id_tipo_servicio = t.id_tipo_servicio AND EMPLEADOS_id_empleado = id_col;
END//
DELIMITER ;

-- Volcando estructura para tabla jodal.tipo_movimiento
CREATE TABLE IF NOT EXISTS `tipo_movimiento` (
  `id_tipo_movimiento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_movimiento` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tipo_movimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.tipo_movimiento: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_movimiento` DISABLE KEYS */;
INSERT INTO `tipo_movimiento` (`id_tipo_movimiento`, `nombre_tipo_movimiento`) VALUES
	(1, 'venta'),
	(2, 'consumo'),
	(3, 'proveedor'),
	(4, 'devolucion');
/*!40000 ALTER TABLE `tipo_movimiento` ENABLE KEYS */;

-- Volcando estructura para tabla jodal.tipo_servicio
CREATE TABLE IF NOT EXISTS `tipo_servicio` (
  `id_tipo_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_tipo_servicio` varchar(20) NOT NULL,
  `valor_min` int(11) NOT NULL,
  `duracion_aprox` time NOT NULL,
  PRIMARY KEY (`id_tipo_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla jodal.tipo_servicio: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_servicio` DISABLE KEYS */;
INSERT INTO `tipo_servicio` (`id_tipo_servicio`, `nombre_tipo_servicio`, `valor_min`, `duracion_aprox`) VALUES
	(1, 'corte caballero', 8000, '00:30:00'),
	(2, 'corte dama', 40000, '00:45:00'),
	(3, 'lavado', 12000, '00:35:00'),
	(4, 'maquillaje', 50000, '01:30:00');
/*!40000 ALTER TABLE `tipo_servicio` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
