<?php
require_once "../../dll/config.php";
require_once "../../dll/class_mysqli.php";

class UserModel 
{
  private $idUser;
  private $nombres;
  private $apellidos;
  private $correo;
 

  #region Set y Get
  public function getIdUser(){
    return $this->idUser;
  }
  public function setNombres($nombres){
    $this->nombres = $nombres;
  }
  public function setApellidos($apellidos){
    $this->apellidos = $apellidos;
  }
  public function setCorreo($correo){
    $this->correo = $correo;
  }


  public function ListUser() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$miconexion->consulta("select id, nombres, apellidos, correo from usuarios");
    $resSQL=$miconexion->verconsulta();
    //$this->Disconnect();
    return $resSQL;
  }
  public function CreateUser() {
    $miconexion = new clase_mysqli;
    $miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
    $resSQL=$conexion->consulta("insert into usuarios values('','$this->nombres','$this->apellidos','$this->correo','111','22')");

    //$this->Disconnect();
    return $resSQL;
  }

}
