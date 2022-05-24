
DROP TABLE IF EXISTS  storico_filtrato_3;
CREATE TABLE storico_filtrato_3 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` varchar(2) DEFAULT NULL,    
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  PRIMARY KEY (`id`));

#123*********************
INSERT INTO storico_filtrato_3(data, ruota, n1, n2, n3) 
SELECT v.data, v.ruota, v.n1, v.n2, v.n3 FROM storico_filtrato_5 as v;
#124*********************
INSERT INTO storico_filtrato_3(data, ruota, n1, n2, n3) 
SELECT v.data, v.ruota, v.n1, v.n2, v.n4 FROM storico_filtrato_5 as v;
#125*********************
INSERT INTO storico_filtrato_3(data, ruota, n1, n2, n3) 
SELECT v.data, v.ruota, v.n1, v.n2, v.n5 FROM storico_filtrato_5 as v;
#134*********************
INSERT INTO storico_filtrato_3(data, ruota, n1, n2, n3) 
SELECT v.data, v.ruota, v.n1, v.n3, v.n4 FROM storico_filtrato_5 as v;
#135*********************
INSERT INTO storico_filtrato_3(data, ruota, n1, n2, n3) 
SELECT v.data, v.ruota, v.n1, v.n3, v.n5 FROM storico_filtrato_5 as v;
#145*********************
INSERT INTO storico_filtrato_3(data, ruota, n1, n2, n3) 
SELECT v.data, v.ruota, v.n1, v.n4, v.n5 FROM storico_filtrato_5 as v;


#234*********************
INSERT INTO storico_filtrato_3(data, ruota, n1, n2, n3) 
SELECT v.data, v.ruota, v.n2, v.n3, v.n4 FROM storico_filtrato_5 as v;
#235*********************
INSERT INTO storico_filtrato_3(data, ruota, n1, n2, n3) 
SELECT v.data, v.ruota, v.n2, v.n3, v.n5 FROM storico_filtrato_5 as v;
#245*********************
INSERT INTO storico_filtrato_3(data, ruota, n1, n2, n3) 
SELECT v.data, v.ruota, v.n2, v.n4, v.n5 FROM storico_filtrato_5 as v;


#345*********************
INSERT INTO storico_filtrato_3(data, ruota, n1, n2, n3) 
SELECT v.data, v.ruota, v.n3, v.n4, v.n5 FROM storico_filtrato_5 as v;
