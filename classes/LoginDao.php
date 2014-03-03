<?php

require_once 'classes/Usuario.php';

class LoginDao {

   private $connDb;

   function __construct($connDb) {
      $this->connDb = $connDb;
   }

function findLogin($usuario, $password) {           
      $id=null;
      $sql="select u.id"
         . " from Usuarios u where u.username='$usuario' and u.password = '".md5($password)."'";                 
      $result = mysqli_query($sql,$this->connDb);              
      while ($row = mysqli_fetch_array($result)){
         $id = $row['id'];
      }  
      return $id;
   }
}