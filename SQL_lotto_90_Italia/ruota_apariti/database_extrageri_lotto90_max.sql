
use lotto90all;
#Start Creaza extrageri Lotto 5 din 90 
drop table if exists  lotto90_max;
CREATE TABLE lotto90_max(
  `id` INT NOT NULL AUTO_INCREMENT,
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
       
  PRIMARY KEY (`id`));
  
INSERT INTO lotto90_max(
n1,n2,n3,n4,n5,
vn,vc, d1,d2,d3,d4,d5, dp,di)
select 
    n1.nr,
    n2.nr,
    n3.nr,
    n4.nr,
    n5.nr,
    (
    n1.nr+
    n2.nr+
    n3.nr+
    n4.nr+
    n5.nr
	) as vn,
    (
        (select n1.nr_c1 + n1.nr_c2) + 
        (select n2.nr_c1 + n2.nr_c2) + 
        (select n3.nr_c1 + n3.nr_c2) + 
        (select n4.nr_c1 + n4.nr_c2) +         
        (select n5.nr_c1 + n5.nr_c2)         
    ) as vc,
    (n1.distanza ) as d1, 
    (n2.distanza ) as d2,
    (n3.distanza ) as d3,
    (n4.distanza ) as d4,
    (n5.distanza ) as d5,   
    (
     	(n1.dp ) + 
     	(n2.dp ) +
     	(n3.dp ) +
     	(n4.dp ) +
     	(n5.dp )
    ) as dp, 
    (
     	(n1.di ) + 
     	(n2.di ) +
     	(n3.di ) +
     	(n4.di ) +
     	(n5.di )
    ) as di                 

    
from 
    numere_lotto as n1, 
    numere_lotto as n2,
    numere_lotto as n3,
    numere_lotto as n4,
    numere_lotto as n5    
where 
	n5.nr >  n4.nr and
	n4.nr >  n3.nr and
	n3.nr >  n2.nr and
	n2.nr >  n1.nr
order by n1.nr, n2.nr, n3.nr, n4.nr, n5.nr;
