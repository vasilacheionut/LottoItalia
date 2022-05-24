<?php

class Ruote
{
   private $conn;
   private $table = 'ruote';
      
   public function __construct($db)
   {
      $this->conn = null;
      $this->conn = $db;
   }

   //Read all
   public function read()
   {
      $sql = "SELECT * FROM $this->table ";
      $result = $this->conn->result_array($sql);
      return $result;
   }

   //Read single
   public function read_single($id)
   {
      $sql = "SELECT * FROM $this->table WHERE id = $id LIMIT 0,1";
      $result = $this->conn->result_array($sql);
      return $result;
   }

}
