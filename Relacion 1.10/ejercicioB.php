<?php

  echo "Datos almacenados correctamente:<br>";

  //MODELO ------------------------------------------------

    class Modelo{
        var $username;
        var $comentario;

        function Modelo($username, $comentario) {
          $this->nick = $username;
          $this->comentario = $comentario;
        }
      }

      class ModeloBD {
        var $query;
        var $servername;
        var $usuario;
        var $pwd;
        var $dbname;
        var $conexion;

        function ModeloBD () {
          $this->servername = "localhost";
          $this->usuario = 'root';
          $this->pwd = '1331Ap1331';
          $this->query;
          $this->dbname = 'librovisitas';
          $this->conexion;
        }

        function conexionectar() {
          $this->conexion = new PDO ("mysql:dbname=$this->dbname;host=$this->servername", $this->usuario, $this->pwd);
          $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $this->conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        }

        function modificarBD($username, $comentario) {
          $this->query = "INSERT INTO visitas (Usuario, Comentario) VALUES (:nick, :comentario)";
          $sentencia = $this->conexion->prepare($this->query);
          $sentencia->bindParam(':nick', $username);
          $sentencia->bindParam(':comentario', $comentario);
          $sentencia->execute();
        }
      }


      //conexionTROLADOR -------------------------------------------------------

      class conexiontrolador {
        var $vista;
        var $BD;
        var $visita;

        function conexiontrolador() {
          $this->BD = new ModeloBD();
          $this->vista = new Vista($this);
          $this->visita;
          $this->BD -> conexionectar();
        }

        function nuevavisita ($username, $comentario) {
          $this->visita = new Modelo($username, $comentario);
          $this->BD -> modificarBD($this->visita -> nick, $this->visita -> comentario);
        }

        function mostrarDatos() {
          $this->vista -> nombreYcomentario();
        }
      }

      //VISTA --------------------------------------------------

      class Vista {
        var $conexiontrolador;
        var $linea;

      function Vista($conexiontrolador) {
        $this->conexiontrolador = $conexiontrolador;
        $this->linea = '--------------------------------------------------';
      }

      function nombreYcomentario() {
        $sql = "SELECT * from visitas";
        $stm = $this->conexiontrolador->BD->conexion->prepare($sql);
        $stm->execute();
        foreach ($stm as $row){
          echo 'Nombre: '.$row[0].' - Comentario: '.$row[1];
          echo '<br>';
          echo $this->linea;
          echo '<br>';
        }
      }

    }

  $username = @$_REQUEST['nombre'];
  $comentario = @$_REQUEST['comentario'];

 if (($username != '') && ($comentario != '')) {
   $var = new conexiontrolador();
   $var -> nuevavisita($username, $comentario);
   $var -> mostrarDatos();
 }

  ?>
