<?php

namespace App\Models;

use CodeIgniter\Model;

class ComponentesModel extends Model{
    protected $table = "componentes";
    protected $primaryKey = "idComponentes";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nomeMateria", "horario_idHorario",
                                "cursos_idCurso", "periodo", "horasSemanais"];
    protected $returnType = "object";
}


?>