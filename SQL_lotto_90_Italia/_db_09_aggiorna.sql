
drop table if exists `aggiorna`;
CREATE TABLE `aggiorna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `database` varchar(45) DEFAULT NULL,
  `ultimo_aggiornamento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

INSERT INTO `aggiorna` (`database`,`ultimo_aggiornamento`) VALUES ('lotto_90_Italia_1',NOW());
