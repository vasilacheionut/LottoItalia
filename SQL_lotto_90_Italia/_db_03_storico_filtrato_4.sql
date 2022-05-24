DROP TABLE IF EXISTS  storico_filtrato_4;
CREATE TABLE storico_filtrato_4 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` varchar(2) DEFAULT NULL,  
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  PRIMARY KEY (`id`));

#1 2 3 4*********************
INSERT INTO storico_filtrato_4(data, ruota, n1, n2, n3, n4) 
SELECT v.data, v.ruota, v.n1, v.n2, v.n3, v.n4 FROM storico_filtrato_5 as v;
#1 2 3 5*********************
INSERT INTO storico_filtrato_4(data, ruota, n1, n2, n3, n4) 
SELECT v.data, v.ruota, v.n1, v.n2, v.n3, v.n5 FROM storico_filtrato_5 as v;
#1 2 4 5*********************
INSERT INTO storico_filtrato_4(data, ruota, n1, n2, n3, n4)
SELECT v.data, v.ruota, v.n1, v.n2, v.n4, v.n5 FROM storico_filtrato_5 as v;
#1 3 4 5*********************
INSERT INTO storico_filtrato_4(data, ruota, n1, n2, n3, n4) 
SELECT v.data, v.ruota, v.n1, v.n3, v.n4, v.n5 FROM storico_filtrato_5 as v;
#2 3 4 5*********************
INSERT INTO storico_filtrato_4(data, ruota, n1, n2, n3, n4) 
SELECT v.data, v.ruota, v.n2, v.n3, v.n4, v.n5 FROM storico_filtrato_5 as v;





