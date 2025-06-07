<?php

namespace app\controllers;


use app\models\entities\Notas;

class notasController
{

    public function queryAllNotas()
    {
        $notaas = new Notas();
        $data = $notaas->all();
        return $data;
    }


    public function saveNewNotas($request)
{
    $notaas = new Notas();
    $notaas->set('estudiante',$request['estudiante']);
    $notaas->set('descripcion',$request['descripcion']);
    $notaas->set('nota',$request['nota']);
    return $notaas->save();
}

    }