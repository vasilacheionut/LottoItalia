
DROP TABLE IF EXISTS `ruote`;
CREATE TABLE `ruote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ruota` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO `ruote` VALUES 
(1,'BA','Bari'),
(2,'CA','Cagliari'),
(3,'FI','Firenze'),
(4,'GE','Genova'),
(5,'MI','Milano'),
(6,'NA','Napoli'),
(7,'RN','Nazionale'),
(8,'PA','Palermo'),
(9,'RM','Roma'),
(10,'TO','Torino'),
(11,'VE','Venezia');
