<?php

class RuoteArchivio
{
   private $conn;
   private $table = 'ruote_archivio';
      
   public function __construct($db)
   {
      $this->conn = null;
      $this->conn = $db;
   }

   //Read all ruote
   public function read($pages, $lastpage)
   {
      $sql = "SELECT ra.* FROM $this->table as ra  WHERE ra.id >= $lastpage-$pages and ra.id <= $lastpage";      
      $result = $this->conn->result_array($sql);
      return $result;
   }

   //Read single ruota
   public function read_single($id)
   {
      $sql = "SELECT ra.* FROM $this->table as ra
         WHERE ra.id = $id LIMIT 0,1";
      $result = $this->conn->result_array($sql);
      return $result;
   }

   //Count maxim
   public function count_maxim()
   {
      $sql = "SELECT COUNT(ra.id) as Maxim FROM $this->table as ra";      
      $result = $this->conn->result_array($sql);
      return $result[0]['Maxim'];
   }   

   //Read limit
   public function read_limit($limit = 11)
   {
      $sql = "SELECT ra.* FROM $this->table as ra ORDER BY DATA DESC limit $limit ";      
      $result = $this->conn->result_array($sql);
      return $result;
   }   

}
