-- Se crea la base de datos en caso de que ésta no exista
CREATE DATABASE IF NOT EXISTS mg_libros_base_datos;

-- dejamos indicado la base de datos a usar en este script
use mg_libros_base_datos;

-- creamos la tabla mag_libros_tabla la cual almacena los libros que se van a crear, mostrar, editar y eliminar
CREATE TABLE IF NOT EXISTS mag_libros_tabla (
  id int(11) NOT NULL auto_increment, 
  titulo varchar(255) NOT NULL,
  sinopsis text(450) NOT NULL,
  PRIMARY KEY  (id)
); 
