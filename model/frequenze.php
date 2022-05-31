<?php

class Frequenze
{
   private $conn;
   private $table;   
   private $orderBy;
      
   public function __construct($db)
   {
      $this->conn = null;
      $this->conn = $db;
   }

   public function setTable($ruota, $frequenza)
   {
       $this->table = "ruota_".$ruota."_frequenze_$frequenza";
   }   

   public function getTable()
   {
       return $this->table;
   }

   public function setOrderBy($orderBy = "")
   {
      if (isset($orderBy)){
         return $this->orderBy = 'order by '.$orderBy;
      } else {
         return $this->orderBy = $orderBy;
      }       
   }   

   public function getOrderBy()
   {
       return $this->orderBy;
   }   

   //Read all
   public function read()
   {
      $sql = "SELECT * FROM ".$this->getTable().' '.$this->getOrderBy();      
      $result = $this->conn->result_array($sql);
      return $result;
   }

}
