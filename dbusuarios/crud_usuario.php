<?php
require_once('conexion.php');
require_once('usuario.php');

class CrudUsuario{

    public function __construct(){}

    //insertar los datos del usuario
    public function insertar($usuario){
        $db=DB::conectar();
        $insert=$db->prepare('INSERT INTO usuarios VALUES(NULL, :nombre, :correo, :contraseña :contraseñados, :correodos,)');
        $insert->bindValue('nombre', $nombre->getnombre());
        $insert->bindValue('correo', $correo->getcorreo());
        $insert->bindValue('contraseñados', $contraseñados->getcontraseñados());
        $insert->bindValue('correodos', $correodos->getcorreodos());
        //encripta contraseña
        $pass=password_hash($usuario->getcontraseña(), PASSWORD_DEFAULT);
        $insert->bindValue('contraseña', $contraseña);
        $insert->execute();
        echo "<font color='red'>Data added successfully.";
    }

    //obtiene el usuario para el login
    public function obtenerUsuario($nombre, $contraseña){
        $db=DB::conectar();
        //$select=$db->prepare("SELECT * FROM usuarios WHERE nombre='$nombre'");//AND clave=:clave //primero es el campo de la tabla, el segundo es el del formulario ":" valide que sea el mismo
        $select=$db->prepare('SELECT * FROM usuarios WHERE usuario=:nombre');
        $select->bindValue('nombre', $nombre);
        $select->execute();
        $registro = $select->fetch();
        $usuario = new usuario();
        //verificar si la clave es correcta
        if (password_verify($contraseña, $registro['contraseña'])){
            //si es correcta, asigna los valores que trae desde la base de datos
            $usuario->setid($registro['id']);
            $usuario->setnombre($registro['nombre']);
            $usuario->setcorreo($registro['correo']);
            $usuario->setcontraseña($registro['contraseña']);
            $usuario->setcontraseñados($registro['contraseñados']);
            $usuario->setcorreodos($registro['correodos']);
        }
        return $usuario;
    }

    //busca el nombre del usuario si existe
    public function buscarusuario($usuario){
        $db=DB::conectar();
        //$select=$db->prepare('SELECT * FROM usuarios WHERE nombre=:nombre');
        $select=$db->prepare('SELECT * FROM usuarios WHERE nombre=:nombre');
        $select->bindValue('nombre', $nombre);
        $select->execute();
        $registro=$select->fetch();
        if($registro['id']!=NULL){
            $usado=False;
        }else{
            $usado=True;
        }
        return $usado;
    }
}