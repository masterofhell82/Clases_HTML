-- creamos la base de datos en caso de que no exista-*/
CREATE DATABASE IF NOT EXISTS lg_crud;

-- le indicamos a mysql la base datos a utilizar en este script
use lg_crud;

-- creamos la tabla ldg_users la cual almacena los usuarios que vamos a crear,mostrar,modificar y eliminar
CREATE TABLE IF NOT EXISTS ldg_users (
  id int(11) NOT NULL auto_increment, --creamos el id el cual identifica a cada usuario y lo hacemos autoincrementable
  name varchar(100) NOT NULL, --nombre de los usuarios
  age int(3) NOT NULL, --edad
  email varchar(100) NOT NULL, --correo
  PRIMARY KEY  (id) --volvemos el id la llave primaria de nuesta tabla
);