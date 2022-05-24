<?php

class Frequenze
{
   private $conn;
   private $table;   
      
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

   //Read all
   public function read()
   {
      $sql = "SELECT * FROM `".$this->getTable()."`";      
      $result = $this->conn->result_array($sql);
      return $result;
   }

}
