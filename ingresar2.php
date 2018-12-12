<?php
//Monstramos los errores para saber si esta funcionando nuestro código
error_reporting(E_ALL);
INI_SET('display_errors', 1);

class Database
{
	var $host="192.168.2.125";
	var $user="";
	var $pass="";
  var $port="5432";
	var $db="bec13g";

	public function connect($usuario,$pass){
    //Conecto a la base de datos llamada "Bec13g" en el host "192.168.2.158" con el usuario y password 
    $con = pg_connect("host='$this->host' port='$this->port' dbname='$this->db' user=$usuario password=$pass");
    return $con;
	}
	public function saveRecords($ubase,$pbase,$usuario,$pass){
  	$conn=$this->connect($ubase,$pbase);
    //var_dump($conn);
    if ($conn){
      $result = pg_insert($conn,'usuarios', array("usuario" => $usuario, "password"=> hash ("sha256",$pass)));
      if($result){
        echo "Se ingreso la informacion adecuadamente";
      }
      else{
        die("PG Error: " . pg_result_error($result));
      }
    }
    else{
      echo "Error en la Conexión a la base de datos";
    }
  }
}

$obj=new Database();
extract($_POST);
//Conexion con la base de Datos
if(isset($entrar))
{
//$usuario y $pass  son valores introducidos desde el formulario en html
  $conexion = $obj->connect($usuario,$pass);
  if ($conexion){
    echo "Conexion Exitosa";
  }
  else{
    echo "Ocurio un error en la conexión";
  }
}

//Insertar información a la Base de datos
if(isset($insertar))
{
//$usuario and $pass  son introducidos en el formulario html, enviamos el usuario y password ya definidos.
  $obj->saveRecords("becarios","hola123.,",$usuario,$pass);
}
?>
