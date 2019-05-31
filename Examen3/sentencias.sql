CREATE DATABASE IF NOT EXISTS vt_bebidas_base_de_datos;    -- crea la base de datos, si no existe
use vt_bebidas_base_de_datos;                              --  base de datos a usar 

CREATE TABLE IF NOT EXISTS vdt_bebidas_tabla (          -- se crea la tabla que guardar las bebidas que 
                                                        -- estas se crearan, mostraran, editaran y eliminaran
  id int(20) NOT NULL auto_increment, 
  nombre_de_bebidas varchar(255) NOT NULL,              -- variables y tipo de datos
  grado_de_alcohol float(12) NOT NULL,
  PRIMARY KEY  (id)
); 