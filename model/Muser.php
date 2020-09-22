<?php
   class user{
        public function __construct()
        {
            global $db;
            $this->db=$db;
        }
        public function select_user($username){
            $this->db->exec("select * from user_tbl where username='$username'");
        }

    }