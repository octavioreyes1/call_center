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
      $sql="select Llamadas.fecha, Extensiones.numero from Llamadas inner join Extensiones on Llamadas.idExtension=Extensiones.id 
            where Llamadas.idUsuario=1";                 
      $result = mysqli_query($this->connDb, $sql);
      
      if ($result){
      $resultado = array();
      while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
              $resultado[] = array ( 'numero' => $row['numero'],
                                     'fecha' => $row['fecha'],
                                     'dependencia' => $row['dependencia']);
       }      
      }

      if (false===$result) {
            $resultado="Fallo";
      }
      return $resultado;
   }
   
  
   
   
}

