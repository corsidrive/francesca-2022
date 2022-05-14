
DROP DATABASE IF EXISTS `francesca_db`;
CREATE DATABASE IF NOT EXISTS `francesca_db`
USE `francesca_db`;

DROP TABLE IF EXISTS `citta`;
CREATE TABLE IF NOT EXISTS `citta` (
  `citta_id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `regione_id` int(10) NOT NULL,
  PRIMARY KEY (`citta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cliente_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cognome` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `citta_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cliente_id`),
  UNIQUE KEY `email` (`email`)
);

CREATE TABLE IF NOT EXISTS `regioni` (
  `regione_id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`regione_id`)
) ;


