<?php

namespace App\Models;

use CodeIgniter\Model;

class CursosModel extends Model{
    protected $table = "cursos";
    protected $primaryKey = "idCurso";
    protected $useAutoIncrement = true;
    protected $allowedFields =  ["idCurso", 
                                "nomeCurso"];
    protected $returnType = "object";
}

?>