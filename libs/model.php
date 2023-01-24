<?php
    class Model{
        public $db;
        public $url;
        function __construct()
        {
            $this->db = new Database();
        }
    }

?>