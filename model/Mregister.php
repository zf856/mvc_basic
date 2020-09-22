<?php
   class register{
        public function __construct()
        {
            global $db;
            $this->db=$db;
        }
        public function register_add($data){
           $this->db->exec("insert into user_tbl (username) VALUES ('$data[username]')");
            
        }
    }