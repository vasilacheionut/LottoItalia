<?php

class RuotaSelezionata
{
   private $conn;
   private $table = 'ruota_selezionata';
      
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
   public function read_single($user_id)
   {
      $sql = "SELECT * FROM $this->table WHERE user_id = $user_id LIMIT 0,1";
      $result = $this->conn->result_array($sql);
      return $result;
   }

   //Update single
   public function update($ruote_id, $id)
   {
      $sql = "UPDATE $this->table SET `ruote_id` = '$ruote_id' WHERE `id` = $id";   
      $result = $this->conn->run_multi_query($sql);
   }

   public function insert($user_id, $ruote_id)
   {      
      $sql = "INSERT INTO $this->table (`id`, `user_id`, `ruote_id`, `ultimo_aggiornamento`) VALUES (NULL, '$user_id', $ruote_id, current_timestamp());";      
      $result = $this->conn->run_multi_query($sql);
   }      

}
