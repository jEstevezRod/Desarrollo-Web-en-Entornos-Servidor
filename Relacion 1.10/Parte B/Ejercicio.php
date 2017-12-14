<?php
/**
 * Created by PhpStorm.
 * User: Jesus
 * Date: 04/12/2017
 * Time: 8:33
 */

echo "Datos almacenados correctamente:<br><br><br>";


class Modelo
{
    var $username;
    var $comentario;

    function Modelo($username, $comentario)
    {
        $this->nick = $username;
        $this->comentario = $comentario;
    }
}

class ModeloBD
{
    var $query;
    var $servername;
    var $usuario;
    var $pwd;
    var $dbname;
    var $conexion;

    function ModeloBD()
    {
        $this->servername = "localhost:3306";
        $this->usuario = 'root';
        $this->pwd = 'nedflanders';
        $this->query;
        $this->dbname = 'librovisitas';
        $this->conexion;
    }

    function Connect()
    {
        $this->conexion = new PDO ("mysql:dbname=$this->dbname;host=$this->servername", $this->usuario, $this->pwd);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    }

    function insertINTO($username, $comentario)
    {
        $this->query = "INSERT INTO visitas (Usuario, Comentario) VALUES (:nick, :comentario)";
        $sentencia = $this->conexion->prepare($this->query);
        $sentencia->bindParam(':nick', $username);
        $sentencia->bindParam(':comentario', $comentario);
        $sentencia->execute();
    }
}


class Controlador
{
    var $vista;
    var $BD;
    var $visita;

    function Controlador()
    {
        $this->BD = new ModeloBD();
        $this->vista = new Vista($this);
        $this->visita;
        $this->BD->Connect();
    }

    function newContent($username, $comentario)
    {
        $this->visita = new Modelo($username, $comentario);
        $this->BD->insertINTO($this->visita->nick, $this->visita->comentario);
    }

    function showInformation()
    {
        $this->vista->showDate();
    }
}


class Vista
{
    var $Controlador;
    var $Separador;

    function Vista($Controlador)
    {
        $this->Controlador = $Controlador;
        $this->Separador = '--------------------------------------------------';
    }

    function showDate()
    {
        $sql = "SELECT * from visitas";
        $stm = $this->Controlador->BD->conexion->prepare($sql);
        $stm->execute();
        foreach ($stm as $row) {
            echo "----------------------------------------------------------- <br>";
            echo '- Nombre de usuario : ' . $row[0] . '<br> - Comentario : ' . $row[1];
            echo '<br>';
            echo $this->Separador;
            echo '<br>';
        }
    }

}



$username = @$_REQUEST['nombre'];
$comentario = @$_REQUEST['comentario'];

if (($username != '') && ($comentario != '')) {
    $var = new Controlador();
    $var->newContent($username, $comentario);
    $var->showInformation();
}

session_start();

if (isset($_SESSION['contador'])) {
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
    $mensaje = 'Número de visitas: ' . $_SESSION['contador'];
    echo $mensaje;
} else {
    $_SESSION['contador'] = 1;
    $mensaje = 'Bienvenido a nuestra página web';
    echo $mensaje;

}
?>
