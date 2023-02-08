<?php

class LoginModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function verificar($datos){
        $username = $datos['username'];
        $password = $datos['password'];
      
        $query = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE username = :username AND password = :password");
        $query->execute(['username' => $username, 'password' => $password]);
      
        if ($query->rowCount() === 1) {
          return true;
        } else {
         return false;
        }
      }
}