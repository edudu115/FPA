<?php

namespace App\Models;

use CodeIgniter\Model;

class AtribuidoModel extends Model{
    protected $table = "atribuido";
    protected $primaryKey = "idAtribuido";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["componentes_idComponentes", "user_idUsuario"];
    protected $returnType = "object";
}


?>