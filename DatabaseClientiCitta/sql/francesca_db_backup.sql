
DROP DATABASE IF EXISTS `francesca_db`;
CREATE DATABASE IF NOT EXISTS `francesca_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `francesca_db`;

DROP TABLE IF EXISTS `citta`;
CREATE TABLE IF NOT EXISTS `citta` (
  `citta_id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `regione_id` int(10) NOT NULL,
  PRIMARY KEY (`citta_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

INSERT INTO `citta` (`citta_id`, `nome`, `regione_id`) VALUES
	(1, 'Torino', 1),
	(2, 'Asti', 1),
	(3, 'Roma', 2);


DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cliente_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `cognome` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `citta_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`cliente_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

INSERT INTO `cliente` (`cliente_id`, `nome`, `cognome`, `email`, `citta_id`) VALUES
	(9, 'Mario', 'Rossi', 'a@b.it', 1),
	(11, 'Alessandra', 'Rossi', 'c@b.it', 2),
	(12, 'Mario', 'Verdi', 'd@b.it', 3),
	(19, 'Mario', 'Rossi', 'qw@bw.it', 1),
	(20, 'Gianni', NULL, 'qw@be.it', 1),
	(21, 'Alessandra', 'Rossi', 'qw@br.it', 2),
	(22, 'Mario', 'Verdi', 'qw@bt.it', 3),
	(23, 'Maria', 'Verdi', 'qw@by.it', 3);

CREATE TABLE IF NOT EXISTS `regioni` (
  `regione_id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`regione_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `regioni` (`regione_id`, `nome`) VALUES
	(1, 'Piemonte'),
	(2, 'Lazio');

