<?php

class RuoteNomeArchivio
{
   private $conn;
   private $table;   
      
   public function __construct($db)
   {
      $this->conn = null;
      $this->conn = $db;
   }

   public function setTable($ruota)
   {
       $this->table = "ruota_".$ruota."_archivio";
   }   

   public function getTable()
   {
       return $this->table;
   }

   //Read all
   public function read($pages, $lastpage)
   {
      $sql = "SELECT ra.* FROM `".$this->getTable()."` as ra  WHERE ra.id >= $lastpage-$pages and ra.id <= $lastpage";      
      $result = $this->conn->result_array($sql);
      return $result;
   }

   //Read all
   public function count_maxim()
   {
      $sql = "SELECT COUNT(ra.id) as Maxim FROM `".$this->getTable()."` as ra";      
      $result = $this->conn->result_array($sql);
      return $result[0]['Maxim'];
   }   

   public function ruota_selezionata($limit = 0)
   {    
      if($limit == 0){$set_limit = ""; } else {$set_limit = "limit $limit";}
      $sql = "SELECT ra.* FROM `".$this->getTable()."` as ra ORDER BY ra.id DESC $set_limit";      
      echo $sql;
      $result = $this->conn->result_array($sql);
      return $result;    
   }   

   //verifica
   public function verifica($verifica, $min = 0, $max = 5)
   {
      if(strlen($verifica) == 0){
        $verifica = 0;
      }
      $sql = "SELECT ws.*, wl.nome as `nome`,
            IF((select ws.n1 in($verifica) )=1,1,0) +
            IF((select ws.n2 in($verifica) )=1,1,0) +
            IF((select ws.n3 in($verifica) )=1,1,0) +
            IF((select ws.n4 in($verifica) )=1,1,0) +
            IF((select ws.n5 in($verifica) )=1,1,0) as Found
            
        FROM `".$this->getTable()."` as ws INNER JOIN ruote as wl
        WHERE ws.ruota = wl.ruota AND
            IF((select ws.n1 in($verifica) )=1,1,0) +
            IF((select ws.n2 in($verifica) )=1,1,0) +
            IF((select ws.n3 in($verifica) )=1,1,0) +
            IF((select ws.n4 in($verifica) )=1,1,0) +
            IF((select ws.n5 in($verifica) )=1,1,0) 
        BETWEEN $min AND $max;       
      ";
      $result = $this->conn->result_array($sql);      
      return $result;
   }   


   public function create_ruota($id, $ruota){          
      $sql = "
      drop table if exists  ruota_".$ruota."_archivio;
      create table `ruota_".$ruota."_archivio` like ruote_archivio;      

      INSERT INTO ruota_".$ruota."_archivio(data,ruota,n1,n2,n3,n4,n5, vn,vc, d1,d2,d3,d4,d5, dp,di, v1,v2,v3,v4,v5, c1_1,c1_2,c1_3,c1_4,c1_5,c1_6,c1_7,c1_8,c1_9, c2_0,c2_1,c2_2,c2_3,c2_4,c2_5,c2_6,c2_7,c2_8,c2_9)
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
          
          (select nl1.valcifre from numeri_lotto as nl1 where n1=nl1.nr ) as v1, 
          (select nl2.valcifre from numeri_lotto as nl2 where n2=nl2.nr ) as v2,
          (select nl3.valcifre from numeri_lotto as nl3 where n3=nl3.nr ) as v3,
          (select nl4.valcifre from numeri_lotto as nl4 where n4=nl4.nr ) as v4,
          (select nl5.valcifre from numeri_lotto as nl5 where n5=nl5.nr ) as v5,    
          
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
      WHERE ruota IN (SELECT rs.ruota FROM ruote AS rs WHERE id = $id) ORDER BY data ASC;       
      ";
      $result = $this->conn->run_multi_query($sql);
      return $result;      
   }



   public function frequenze_5($id, $ruota){          
    $sql = "
    DROP TABLE IF EXISTS  ruota_".$ruota."_frequenze_5;
    CREATE TABLE ruota_".$ruota."_frequenze_5 (
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
      
    INSERT INTO  ruota_".$ruota."_frequenze_5(data, ruota, n1, n2, n3, n4, n5, frequenza)
    SELECT data, ruota, n1,n2, n3, n4, n5, count(*) as frequenza FROM storico_filtrato_5
    WHERE ruota IN (select rs.ruota from ruote as rs where id = $id)
    group by data, ruota, n1, n2, n3, n4, n5;       
    ";

    $result = $this->conn->run_multi_query($sql);
    return $result;      
 }


 public function frequenze_4($id, $ruota){          
    $sql = "
    DROP TABLE IF EXISTS  ruota_".$ruota."_frequenze_4;
    CREATE TABLE ruota_".$ruota."_frequenze_4 (
    `id` INT NOT NULL AUTO_INCREMENT,
    `data` date DEFAULT NULL,
    `ruota` VARCHAR(45) NULL,   
    `n1` INT NULL,
    `n2` INT NULL,
    `n3` INT NULL,  
    `n4` INT NULL,  
    
    `frequenza` INT NULL,
    PRIMARY KEY (`id`));
    
    INSERT INTO  ruota_".$ruota."_frequenze_4(data, ruota, n1, n2, n3, n4,  frequenza)
    SELECT data, ruota, n1,n2, n3, n4,  count(*) as frequenza FROM storico_filtrato_4
    WHERE ruota IN (select rs.ruota from ruote as rs where id = $id)
    group by data, ruota, n1,n2,n3,n4;      
    ";

    $result = $this->conn->run_multi_query($sql);
    return $result;      
 }

 public function frequenze_3($id, $ruota){          
    $sql = "
    DROP TABLE IF EXISTS  ruota_".$ruota."_frequenze_3;
    CREATE TABLE ruota_".$ruota."_frequenze_3 (
    `id` INT NOT NULL AUTO_INCREMENT,
    `data` date DEFAULT NULL,
    `ruota` VARCHAR(45) NULL,   
    `n1` INT NULL,
    `n2` INT NULL,
    `n3` INT NULL,  
    
    `frequenza` INT NULL,
    PRIMARY KEY (`id`));
    
    INSERT INTO  ruota_".$ruota."_frequenze_3(data, ruota, n1, n2, n3, frequenza)
    SELECT data, ruota, n1,n2, n3,  count(*) as frequenza FROM storico_filtrato_3
    WHERE ruota IN (select rs.ruota from ruote as rs where id = $id)
    group by data, ruota, n1,n2,n3;      
    ";

    $result = $this->conn->run_multi_query($sql);
    return $result;      
 }

 public function frequenze_2($id, $ruota){          
    $sql = "
    DROP TABLE IF EXISTS  ruota_".$ruota."_frequenze_2;
    CREATE TABLE ruota_".$ruota."_frequenze_2 (
    `id` INT NOT NULL AUTO_INCREMENT,
    `data` date DEFAULT NULL,
    `ruota` VARCHAR(45) NULL,   
    `n1` INT NULL,
    `n2` INT NULL,
    
    `frequenza` INT NULL,
    PRIMARY KEY (`id`));
    
    INSERT INTO  ruota_".$ruota."_frequenze_2(data, ruota, n1, n2, frequenza)
    SELECT data, ruota, n1,n2, count(*) as frequenza FROM storico_filtrato_2
    WHERE ruota IN (select rs.ruota from ruote as rs where id = $id)
    group by data, ruota, n1,n2;      
    ";

    $result = $this->conn->run_multi_query($sql);
    return $result;      
 }


 public function frequenze_1($id, $ruota){          
    $sql = "
    DROP TABLE IF EXISTS  ruota_".$ruota."_frequenze_1;
    CREATE TABLE ruota_".$ruota."_frequenze_1 (
    `id` INT NOT NULL AUTO_INCREMENT,
    `data` date DEFAULT NULL,
    `ruota` VARCHAR(45) NULL,   
    `n1` INT NULL,
    
    `frequenza` INT NULL,
    PRIMARY KEY (`id`));
    
    INSERT INTO  ruota_".$ruota."_frequenze_1(data, ruota, n1, frequenza)
    SELECT data, ruota, n1, count(*) as frequenza FROM storico_filtrato_1
    WHERE ruota IN (select rs.ruota from ruote as rs where id = $id)
    group by data, ruota, n1;      
    ";

    $result = $this->conn->run_multi_query($sql);
    return $result;      
 }

}
