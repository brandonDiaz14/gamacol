<?php 
class DB{
    private static $conexion=NULL;
    private function __construct(){}

    public static function conectar(){
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        self::$conexion = new PDO('mysql:host=bymjjjsiifinl9liu8pk-mysql.services.clever-cloud.com; dbname=bymjjjsiifinl9liu8pk', 'u3mmhykg2gtuwgy5', 'Oh5jzt2reJDjvn72E4p7', $pdo_options); //Usuario general de XAMPP --> root, $pdo_options envia la información
        return self::$conexion; 
    }
}
?>