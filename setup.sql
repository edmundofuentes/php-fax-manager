-- Ejecutarse antes de usar por primera vez el sistema
CREATE DATABASE fax_manager;
USE fax_manager;

CREATE TABLE archivos (
    id              SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    nombre          VARCHAR(255) NOT NULL,
    fecha           DATE NOT NULL,
    remitente       VARCHAR(255),
    tipo            VARCHAR(255),
    PRIMARY KEY (id)
);
