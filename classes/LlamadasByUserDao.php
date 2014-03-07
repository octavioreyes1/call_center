<?php
/**
 * Description of LlamadaDao
 *
 * @author octreyes
 */
require_once 'classes/Usuario.php';

class LlamadasByUserDao {

   private $connDb;

   function __construct($connDb) {
      $this->connDb = $connDb;
   }

function findLlamadasByUser($idUsuario) {           
      
      $sql="select extensiones.numero as numero, llamadas.fecha fecha, dependencias.nombre dependencia from
        llamadas inner join extensiones on llamadas.idExtension=extensiones.id
                 inner join dependencias on dependencias.id=extensiones.idDependencia
where llamadas.idUsuario=$idUsuario limit 0, 10";                 
      $result = mysqli_query($this->connDb, $sql);              
      
      return $result;
   } 
   
   
}

