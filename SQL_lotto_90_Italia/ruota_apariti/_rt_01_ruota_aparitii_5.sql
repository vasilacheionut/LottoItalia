
DROP TABLE IF EXISTS  ruota_BA_frequenze_5;
CREATE TABLE ruota_BA_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_BA_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 1)
group by n1,n2,n3,n4,n5;


DROP TABLE IF EXISTS  ruota_CA_frequenze_5;
CREATE TABLE ruota_CA_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_CA_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 2)
group by n1,n2,n3,n4,n5;



DROP TABLE IF EXISTS  ruota_FI_frequenze_5;
CREATE TABLE ruota_FI_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_FI_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 3)
group by n1,n2,n3,n4,n5;



DROP TABLE IF EXISTS  ruota_GE_frequenze_5;
CREATE TABLE ruota_GE_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_GE_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 4)
group by n1,n2,n3,n4,n5;



DROP TABLE IF EXISTS  ruota_MI_frequenze_5;
CREATE TABLE ruota_MI_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_MI_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 5)
group by n1,n2,n3,n4,n5;



DROP TABLE IF EXISTS  ruota_NA_frequenze_5;
CREATE TABLE ruota_NA_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_NA_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 6)
group by n1,n2,n3,n4,n5;



DROP TABLE IF EXISTS  ruota_RN_frequenze_5;
CREATE TABLE ruota_RN_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_RN_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 7)
group by n1,n2,n3,n4,n5;


DROP TABLE IF EXISTS  ruota_PA_frequenze_5;
CREATE TABLE ruota_PA_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_PA_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 8)
group by n1,n2,n3,n4,n5;


DROP TABLE IF EXISTS  ruota_RM_frequenze_5;
CREATE TABLE ruota_RM_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_RM_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 9)
group by n1,n2,n3,n4,n5;



DROP TABLE IF EXISTS  ruota_TO_frequenze_5;
CREATE TABLE ruota_TO_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_TO_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 10)
group by n1,n2,n3,n4,n5;


DROP TABLE IF EXISTS  ruota_VE_frequenze_5;
CREATE TABLE ruota_VE_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_VE_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 11)
group by n1,n2,n3,n4,n5;


DROP TABLE IF EXISTS  ruota_TT_frequenze_5;
CREATE TABLE ruota_TT_frequenze_5 (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL,   
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL,  
  `n5` INT NULL,  
  `frequenza` INT NULL,
  PRIMARY KEY (`id`));
  
INSERT INTO  ruota_TT_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
WHERE ruota IN (select rs.ruota from ruote as rs where id = 12)
group by n1,n2,n3,n4,n5;
