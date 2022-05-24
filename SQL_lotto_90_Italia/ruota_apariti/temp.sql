 
drop table if exists  ruota_TT_archivio;

CREATE TABLE ruota_TT_archivio(
  `id` INT NOT NULL AUTO_INCREMENT,
    
  `data` date DEFAULT NULL,
  `ruota` VARCHAR(45) NULL, 
    
  `n1` INT NULL,
  `n2` INT NULL,
  `n3` INT NULL,  
  `n4` INT NULL, 
  `n5` INT NULL,
  
  `vn` INT NULL,
  `vc` INT NULL,    
  
  `d1` INT NULL,
  `d2` INT NULL,
  `d3` INT NULL,  
  `d4` INT NULL, 
  `d5` INT NULL,

  `dp` INT NULL,
  `di` INT NULL,
     
  `c1_1` INT NULL,    
  `c1_2` INT NULL,    
  `c1_3` INT NULL,    
  `c1_4` INT NULL,    
  `c1_5` INT NULL,    
  `c1_6` INT NULL,    
  `c1_7` INT NULL,    
  `c1_8` INT NULL,    
  `c1_9` INT NULL,   
  
  `c2_0` INT NULL,   
  `c2_1` INT NULL,      
  `c2_2` INT NULL,    
  `c2_3` INT NULL,    
  `c2_4` INT NULL,    
  `c2_5` INT NULL,    
  `c2_6` INT NULL,    
  `c2_7` INT NULL,    
  `c2_8` INT NULL,    
  `c2_9` INT NULL,          
  PRIMARY KEY (`id`));



INSERT INTO ruota_TT_archivio(data,ruota,n1,n2,n3,n4,n5, vn,vc, d1,d2,d3,d4,d5, dp,di, c1_1,c1_2,c1_3,c1_4,c1_5,c1_6,c1_7,c1_8,c1_9, c2_0,c2_1,c2_2,c2_3,c2_4,c2_5,c2_6,c2_7,c2_8,c2_9)
SELECT  
    data,
    ruota,
    n1,
    n2,
    n3,
    n4,
    n5,
    (n1+n2+n3+n4+n5) as vn, 
    (
    	(select nl1.nr_c1 + nl1.nr_c2 from numeri_lotto as nl1 where n1=nl1.nr) + 
    	(select nl2.nr_c1 + nl2.nr_c2 from numeri_lotto as nl2 where n2=nl2.nr) + 
    	(select nl3.nr_c1 + nl3.nr_c2 from numeri_lotto as nl3 where n3=nl3.nr) + 
	(select nl4.nr_c1 + nl4.nr_c2 from numeri_lotto as nl4 where n4=nl4.nr) +         
	(select nl5.nr_c1 + nl5.nr_c2 from numeri_lotto as nl5 where n5=nl5.nr)         
    ) as vc,
    (select nl1.distanza from numeri_lotto as nl1 where n1=nl1.nr ) as d1, 
    (select nl2.distanza from numeri_lotto as nl2 where n2=nl2.nr ) as d2,
    (select nl3.distanza from numeri_lotto as nl3 where n3=nl3.nr ) as d3,
    (select nl4.distanza from numeri_lotto as nl4 where n4=nl4.nr ) as d4,
    (select nl5.distanza from numeri_lotto as nl5 where n5=nl5.nr ) as d5,
    
    (
        (select nl1.dp from numeri_lotto as nl1 where n1=nl1.nr )+
        (select nl2.dp from numeri_lotto as nl2 where n2=nl2.nr )+
        (select nl3.dp from numeri_lotto as nl3 where n3=nl3.nr )+
        (select nl4.dp from numeri_lotto as nl4 where n4=nl4.nr )+
        (select nl5.dp from numeri_lotto as nl5 where n5=nl5.nr )
    ) as dp, 
    (
        (select nl1.di from numeri_lotto as nl1 where n1=nl1.nr )+
        (select nl2.di from numeri_lotto as nl2 where n2=nl2.nr )+
        (select nl3.di from numeri_lotto as nl3 where n3=nl3.nr )+
        (select nl4.di from numeri_lotto as nl4 where n4=nl4.nr )+
        (select nl5.di from numeri_lotto as nl5 where n5=nl5.nr )
    ) as di, 
    
    (
        (select count(nl1.nr_c1) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c1 = 1) +
        (select count(nl2.nr_c1) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c1 = 1) +
        (select count(nl3.nr_c1) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c1 = 1) +
        (select count(nl4.nr_c1) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c1 = 1) +
        (select count(nl5.nr_c1) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c1 = 1) 
    ) c1_1, 
    (
        (select count(nl1.nr_c1) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c1 = 2) +
        (select count(nl2.nr_c1) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c1 = 2) +
        (select count(nl3.nr_c1) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c1 = 2) +
        (select count(nl4.nr_c1) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c1 = 2) +
        (select count(nl5.nr_c1) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c1 = 2) 
    ) c1_2,    
    (
        (select count(nl1.nr_c1) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c1 = 3) +
        (select count(nl2.nr_c1) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c1 = 3) +
        (select count(nl3.nr_c1) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c1 = 3) +
        (select count(nl4.nr_c1) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c1 = 3) +
        (select count(nl5.nr_c1) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c1 = 3) 
    ) c1_3,   
    (
        (select count(nl1.nr_c1) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c1 = 4) +
        (select count(nl2.nr_c1) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c1 = 4) +
        (select count(nl3.nr_c1) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c1 = 4) +
        (select count(nl4.nr_c1) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c1 = 4) +
        (select count(nl5.nr_c1) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c1 = 4) 
    ) c1_4, 
    (
        (select count(nl1.nr_c1) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c1 = 5) +
        (select count(nl2.nr_c1) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c1 = 5) +
        (select count(nl3.nr_c1) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c1 = 5) +
        (select count(nl4.nr_c1) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c1 = 5) +
        (select count(nl5.nr_c1) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c1 = 5) 
    ) c1_5, 
    (
        (select count(nl1.nr_c1) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c1 = 6) +
        (select count(nl2.nr_c1) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c1 = 6) +
        (select count(nl3.nr_c1) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c1 = 6) +
        (select count(nl4.nr_c1) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c1 = 6) +
        (select count(nl5.nr_c1) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c1 = 6) 
    ) c1_6, 
    (
        (select count(nl1.nr_c1) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c1 = 7) +
        (select count(nl2.nr_c1) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c1 = 7) +
        (select count(nl3.nr_c1) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c1 = 7) +
        (select count(nl4.nr_c1) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c1 = 7) +
        (select count(nl5.nr_c1) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c1 = 7) 
    ) c1_7, 
    (
        (select count(nl1.nr_c1) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c1 = 8) +
        (select count(nl2.nr_c1) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c1 = 8) +
        (select count(nl3.nr_c1) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c1 = 8) +
        (select count(nl4.nr_c1) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c1 = 8) +
        (select count(nl5.nr_c1) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c1 = 8) 
    ) c1_8, 
    (
        (select count(nl1.nr_c1) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c1 = 9) +
        (select count(nl2.nr_c1) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c1 = 9) +
        (select count(nl3.nr_c1) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c1 = 9) +
        (select count(nl4.nr_c1) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c1 = 9) +
        (select count(nl5.nr_c1) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c1 = 9) 
    ) c1_9,
    
    
   (
        (select count(nl1.nr_c2) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c2 = 1) +
        (select count(nl2.nr_c2) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c2 = 1) +
        (select count(nl3.nr_c2) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c2 = 1) +
        (select count(nl4.nr_c2) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c2 = 1) +
        (select count(nl5.nr_c2) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c2 = 1) 
    ) c2_0, 
   (
        (select count(nl1.nr_c2) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c2 = 1) +
        (select count(nl2.nr_c2) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c2 = 1) +
        (select count(nl3.nr_c2) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c2 = 1) +
        (select count(nl4.nr_c2) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c2 = 1) +
        (select count(nl5.nr_c2) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c2 = 1) 
    ) c2_1,     
    (
        (select count(nl1.nr_c2) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c2 = 2) +
        (select count(nl2.nr_c2) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c2 = 2) +
        (select count(nl3.nr_c2) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c2 = 2) +
        (select count(nl4.nr_c2) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c2 = 2) +
        (select count(nl5.nr_c2) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c2 = 2) 
    ) c2_2,    
    (
        (select count(nl1.nr_c2) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c2 = 3) +
        (select count(nl2.nr_c2) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c2 = 3) +
        (select count(nl3.nr_c2) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c2 = 3) +
        (select count(nl4.nr_c2) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c2 = 3) +
        (select count(nl5.nr_c2) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c2 = 3) 
    ) c2_3,   
    (
        (select count(nl1.nr_c2) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c2 = 4) +
        (select count(nl2.nr_c2) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c2 = 4) +
        (select count(nl3.nr_c2) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c2 = 4) +
        (select count(nl4.nr_c2) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c2 = 4) +
        (select count(nl5.nr_c2) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c2 = 4) 
    ) c2_4, 
    (
        (select count(nl1.nr_c2) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c2 = 5) +
        (select count(nl2.nr_c2) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c2 = 5) +
        (select count(nl3.nr_c2) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c2 = 5) +
        (select count(nl4.nr_c2) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c2 = 5) +
        (select count(nl5.nr_c2) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c2 = 5) 
    ) c2_5, 
    (
        (select count(nl1.nr_c2) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c2 = 6) +
        (select count(nl2.nr_c2) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c2 = 6) +
        (select count(nl3.nr_c2) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c2 = 6) +
        (select count(nl4.nr_c2) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c2 = 6) +
        (select count(nl5.nr_c2) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c2 = 6) 
    ) c2_6, 
    (
        (select count(nl1.nr_c2) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c2 = 7) +
        (select count(nl2.nr_c2) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c2 = 7) +
        (select count(nl3.nr_c2) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c2 = 7) +
        (select count(nl4.nr_c2) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c2 = 7) +
        (select count(nl5.nr_c2) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c2 = 7) 
    ) c2_7, 
    (
        (select count(nl1.nr_c2) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c2 = 8) +
        (select count(nl2.nr_c2) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c2 = 8) +
        (select count(nl3.nr_c2) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c2 = 8) +
        (select count(nl4.nr_c2) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c2 = 8) +
        (select count(nl5.nr_c2) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c2 = 8) 
    ) c2_8, 
    (
        (select count(nl1.nr_c2) from numeri_lotto as nl1 where n1=nl1.nr and nl1.nr_c2 = 9) +
        (select count(nl2.nr_c2) from numeri_lotto as nl2 where n2=nl2.nr and nl2.nr_c2 = 9) +
        (select count(nl3.nr_c2) from numeri_lotto as nl3 where n3=nl3.nr and nl3.nr_c2 = 9) +
        (select count(nl4.nr_c2) from numeri_lotto as nl4 where n4=nl4.nr and nl4.nr_c2 = 9) +
        (select count(nl5.nr_c2) from numeri_lotto as nl5 where n5=nl5.nr and nl5.nr_c2 = 9) 
    ) c2_9    
    
FROM
    `storico_filtrato_5`
WHERE ruota IN (SELECT rs.ruota FROM ruote AS rs WHERE id = 12) ORDER BY data ASC;    
        
   