
DROP TABLE IF EXISTS  storico_filtrato_1;
CREATE TABLE storico_filtrato_1 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` varchar(2) DEFAULT NULL,      
  `n1` INT NULL,
  PRIMARY KEY (`id`));


#1*********************
INSERT INTO storico_filtrato_1(data, ruota, n1) 
SELECT v.data, v.ruota, v.n1 FROM storico_filtrato_5 as v;
#2*********************
INSERT INTO storico_filtrato_1(data, ruota, n1) 
SELECT v.data, v.ruota, v.n2 FROM storico_filtrato_5 as v;
#3*********************
INSERT INTO storico_filtrato_1(data, ruota, n1) 
SELECT v.data, v.ruota, v.n3 FROM storico_filtrato_5 as v;
#4*********************
INSERT INTO storico_filtrato_1(data, ruota, n1) 
SELECT v.data, v.ruota, v.n4 FROM storico_filtrato_5 as v;
#5*********************
INSERT INTO storico_filtrato_1(data, ruota, n1) 
SELECT v.data, v.ruota, v.n5 FROM storico_filtrato_5 as v;

