<?php

namespace App\Models;

use CodeIgniter\Model;

class HorarioModel extends Model{
    protected $table = "horario";
    protected $primaryKey = "idHorario";
    protected $useAutoIncrement = true;
    protected $allowedFields =  ["idHorario", 
                                "diaSemana",
                                "horaInicio",
                                "horaFim"];
    protected $returnType = "object";
}

?>