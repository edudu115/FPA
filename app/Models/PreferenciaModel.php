<?php

namespace App\Models;

use CodeIgniter\Model;

class PreferenciaModel extends Model{
    protected $table = "preferencia";
    protected $primaryKey = "idPreferencia";
    protected $useAutoIncrement = true;
    protected $allowedFields =  ["professor_idProfessor", 
                                "componentes_idComponentes",
                                "prioridade"];
    protected $returnType = "object";
}

?>