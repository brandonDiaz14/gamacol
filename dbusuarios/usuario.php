<?php

class usuario{
    private $id;
    private $nombre;
    private $correo;
    private $contraseña;
    private $contraseñados;
    private $correodos;

    public function getid(){
        return $this->id;
    }
    public function setid($id){
        $this->id = $id;
    }

    public function getnombre(){
        return $this->nombre;
    }
    public function setnombre($nombre){
        $this->nombre = $nombre;
    }

    public function getcorreo(){
        return $this->correo;
    }
    public function setcorreo($correo){
        $this->correo = $correo;
    }

    public function getcontraseña(){
        return $this->contraseña;
    }
    public function setcontraseña($contraseña){
        $this->contraseña = $contraseña;
    }

    public function getcontraseñados(){
        return $this->contraseñados;
    }
    public function setcontraseñados($contraseñados){
        $this->contraseñados = $contraseñados;
    }

    public function getcorreodos(){
        return $this->correodos;
    }
    public function setcorreodos($correodos){
        $this->correodos = $correodos;
    }

}