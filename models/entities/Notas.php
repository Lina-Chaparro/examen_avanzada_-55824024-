<?php

namespace app\models\entities;

use app\models\drivers\ConexDB;
use app\models\entities\Entity;


class Notas extends Entity
{
    protected $id = null;
    protected $estudiante  = "";
    protected $descripcion  = null;
    protected $nota = null;

    protected $notassuma = []; //array de porcentajes

    public function all()
    {
        $sql = "SELECT * FROM `notas`";
        $conex = new ConexDB();
        $resultDb = $conex->execSQL($sql);
        $notass = [];
        if ($resultDb->num_rows > 0) {
            while ($rowDb = $resultDb->fetch_assoc()) {
                $NotasArray = new Notas();
                $NotasArray->set('estudiante', $rowDb['estudiante']);
                $NotasArray->set('descripcion', $rowDb['descripcion']);
                $NotasArray->set('nota', $rowDb['nota']);
                array_push($notass, $NotasArray);
            }
        }
        $conex->close();
        return $notass;
    }

        public function save()
    {
        $sql = "INSERT INTO notas (estudiante, descripcion, nota) VALUES ('" . $this->estudiante . "', '" . $this->descripcion . "'," . $this->nota . ")";
        
        $conex = new ConexDB();
        $result = $conex->execSQL($sql);
        return $result;
    }
    



}


