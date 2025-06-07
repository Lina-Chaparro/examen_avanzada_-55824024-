<?php
//define clases, es necesario importar la ruta del namespace para usarlo
namespace app\models\drivers;

use mysqli; //importacion de libreria

class ConexDB{
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $nameDB = 'notas_db';

    private $conex = null;

    public function __construct() //abre conexion, inicializa valores
    {
        $this->conex = new mysqli(
        $this->host,
        $this->user,
        $this->pwd,
        $this->nameDB
        );
    }

    public function execSQL($sql) //ejecutar sentencias sql
    {
        return $this->conex->query($sql);
    }

    public function close() //cerrar la conexión
    {
        $this->conex->close();
    }
}