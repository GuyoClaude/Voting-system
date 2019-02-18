<?php
 class Customer {
     private $db;
     
     public function __construct() {
         $this->db = new Database;
     }
     
     public function addCustomer($data) {
         //prepare Query
         $this->db->query('INSERT INTO user_votes(user_ID, user_name, for_president, for_governor, for_senator, for_mp) VALUES(:user_ID, :user_name, :for_president, :for_governor, :for_senator, :for_mp)');
         
         
         //Bind Values
             $this->db->bind(':user_ID' , $data['user_ID']);
             $this->db->bind(':user_name' , $data['user_name']);
             $this->db->bind(':for_president' , $data['for_president']);
             $this->db->bind(':for_governor' , $data['for_governor']);
             $this->db->bind(':for_senator' , $data['for_senator']);
             $this->db->bind(':for_mp' , $data['for_mp']);
             
         
         //execute
         if($this->db->execute()) {
             return true;
         }else{
             return false;
         }
     }
     public function getCustomers() {
         $this->db->query('SELECT * FROM user_votes ORDER BY created_at DESC');
         
         $results = $this->db->resultset();
         return $results;
     }
 }