<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = "usuario";
    protected $primaryKey = "idUsuario";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nome", "prontuario", "senha", "cpf", "cargo",
                                 "tempoCampus", "tempoExp", 
                                 "tempoProfissional", "tempoInstuicao", 
                                 "nivelCarreira", "idade"];
    protected $returnType = "object";
}
?>