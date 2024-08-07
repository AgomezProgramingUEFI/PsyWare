<?php 

session_start();

class Conexion{
    public $host = 'localhost';
    public $usuario = 'root';
    public $contraseña = '';
    public $nombreBasedeDatos = "usuarios";
    public $conexion;

    public function __construct(){
        $this->conexion = mysqli_connect(
            $this->host,
            $this->usuario,
            $this->contraseña,
            $this->nombreBasedeDatos
        );        
    }
}

/**Metodo para iniciar sesión **/

class Inicio_sesion extends Conexion{
    public $id;

    public function InicioSesion($nameUser_email, $clue){
        $consultaSql = mysqli_query($this->conexion, "SELECT * FROM datos_usuario WHERE usuario = '$nameUser_email' OR correo_electronico ='$nameUser_email'");

        $columna = mysqli_fetch_assoc($consultaSql);

        if(mysqli_num_rows($consultaSql) > 0){
            if($contraseña == $columna['clue']) {
                $this->id = $columna['id'];
                return 1;
                /** Registro Exitoso* */
            } else {
                return 10;
                /** Contraseña incorrecta* */
            }
        } else {
            return 100;
            /** Usuario no registrado* */
        }
    }

    public function IdUsuario(){
        return $this->id;
    }
}

class Registration extends Conexion{

    public function registrarse($nombreCompleto, $nombreUsuario, $correoElectronico, $contraseña, $confirmContraseña){
        $usuarioExistente = mysqli_query(
            $this->conexion, "SELECT * FROM datos_usuario WHERE usuario = '$nombreUsuario' OR correo_electronico = '$correoElectronico'"
        );        

        if (mysqli_num_rows($usuarioExistente) > 0) {
            return 1;
        } else {
            if($contraseña == $confirmContraseña) {
                $consultaSqlRegistration = "INSERT INTO datos_usuario VALUES ('','$nombreCompleto','$correoElectronico',' $nombreUsuario','$contraseña')";

                mysqli_query($this->conexion, $consultaSqlRegistration);
                return 10;
            } else {
                return 100;
            }
        }
    }
}

class Select extends Conexion{

    public function SelectuserByUser($id){
        $resultado = mysqli_query($this->conexion, "SELECT * FROM datos_usuario WHERE id = '$id'");

        return mysqli_fetch_assoc($resultado);
    }
}

?>