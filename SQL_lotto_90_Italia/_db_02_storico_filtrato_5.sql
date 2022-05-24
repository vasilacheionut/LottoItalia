#------------------------------
DROP TABLE IF EXISTS  storico_filtrato_5;
CREATE TABLE IF NOT EXISTS storico_filtrato_5 LIKE storico;

INSERT INTO   storico_filtrato_5(data, ruota, n1, n2, n3, n4, n5) 
SELECT distinct data, ruota, n1, n2, n3, n4, n5 FROM storico ORDER by data, ruota asc;
#************************************************

#Sort n1---------------------
UPDATE storico_filtrato_5 SET  n1=(@temp1:=n1), n1 = n2, n2 = @temp1 WHERE 	n1 > n2;
UPDATE storico_filtrato_5 SET  n1=(@temp1:=n1), n1 = n3, n3 = @temp1 WHERE 	n1 > n3;
UPDATE storico_filtrato_5 SET  n1=(@temp1:=n1), n1 = n4, n4 = @temp1 WHERE 	n1 > n4;
UPDATE storico_filtrato_5 SET  n1=(@temp1:=n1), n1 = n5, n5 = @temp1 WHERE 	n1 > n5;
#Sort n2---------------------
UPDATE storico_filtrato_5 SET  n2=(@temp1:=n2), n2 = n3, n3 = @temp1 WHERE 	n2 > n3;
UPDATE storico_filtrato_5 SET  n2=(@temp1:=n2), n2 = n4, n4 = @temp1 WHERE 	n2 > n4;
UPDATE storico_filtrato_5 SET  n2=(@temp1:=n2), n2 = n5, n5 = @temp1 WHERE 	n2 > n5;
#Sort n3---------------------
UPDATE storico_filtrato_5 SET  n3=(@temp1:=n3), n3 = n4, n4 = @temp1 WHERE 	n3 > n4;
UPDATE storico_filtrato_5 SET  n3=(@temp1:=n3), n3 = n5, n5 = @temp1 WHERE 	n3 > n5;
#Sort n4---------------------
UPDATE storico_filtrato_5 SET  n4=(@temp1:=n4), n4 = n5, n5 = @temp1 WHERE 	n4 > n5;
#----------------------------

