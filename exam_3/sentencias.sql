CREATE DATABASE da_examen3;

USE da_examen3;

CREATE TABLE `da_examen3`.`dja_prueba` ( `id` INT NOT NULL , `Nombre` VARCHAR(20) NOT NULL ,
 `Apellido` VARCHAR(20) NOT NULL , `CI` INT(11) NOT NULL ) ENGINE = InnoDB;

ALTER TABLE `dja_prueba` ADD PRIMARY KEY( `id`);

ALTER TABLE `dja_prueba` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `dja_prueba` (`id`, `Nombre`, `Apellido`, `CI`) 
    VALUES ('1', 'David', 'Avila', '23634228');

SELECT * FROM dja_prueba

SELECT * FROM dja_prueba WHERE id=?

UPDATE dja_prueba SET Nombre=?,Apellido=?,CI=? WHERE id=?

DELETE FROM dja_prueba WHERE id=?