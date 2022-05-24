
DROP TABLE IF EXISTS  storico_filtrato_2;
CREATE TABLE storico_filtrato_2 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` varchar(2) DEFAULT NULL,      
  `n1` INT NULL,
  `n2` INT NULL,
  PRIMARY KEY (`id`));


#12*********************
INSERT INTO storico_filtrato_2(data, ruota, n1, n2) 
SELECT v.data, v.ruota, v.n1, v.n2 FROM storico_filtrato_5 as v;
#13*********************
INSERT INTO storico_filtrato_2(data, ruota, n1, n2) 
SELECT v.data, v.ruota, v.n1, v.n3 FROM storico_filtrato_5 as v;
#14*********************
INSERT INTO storico_filtrato_2(data, ruota, n1, n2) 
SELECT v.data, v.ruota, v.n1, v.n4 FROM storico_filtrato_5 as v;
#15*********************
INSERT INTO storico_filtrato_2(data, ruota, n1, n2) 
SELECT v.data, v.ruota, v.n1, v.n5 FROM storico_filtrato_5 as v;


#23*********************
INSERT INTO storico_filtrato_2(data, ruota, n1, n2) 
SELECT v.data, v.ruota, v.n2, v.n3 FROM storico_filtrato_5 as v;
#24*********************
INSERT INTO storico_filtrato_2(data, ruota, n1, n2) 
SELECT v.data, v.ruota, v.n2, v.n4 FROM storico_filtrato_5 as v;
#25*********************
INSERT INTO storico_filtrato_2(data, ruota, n1, n2) 
SELECT v.data, v.ruota, v.n2, v.n5 FROM storico_filtrato_5 as v;



#34*********************
INSERT INTO storico_filtrato_2(data, ruota, n1, n2) 
SELECT v.data, v.ruota, v.n3, v.n4 FROM storico_filtrato_5 as v;
#35*********************
INSERT INTO storico_filtrato_2(data, ruota, n1, n2) 
SELECT v.data, v.ruota, v.n3, v.n5 FROM storico_filtrato_5 as v;


#45*********************
INSERT INTO storico_filtrato_2(data, ruota, n1, n2) 
SELECT v.data, v.ruota, v.n4, v.n5 FROM storico_filtrato_5 as v;


