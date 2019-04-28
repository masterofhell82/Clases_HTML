/* oviamente crear la base de datos con el nombre del archivo*/
CREATE TABLE `gap_datos_tabla` (
  `id` int(50) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `ci` int(50) NOT NULL,
  `nombre_carro` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `modelo_carro` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `placa` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `lugar_estacionamiento` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL
)


