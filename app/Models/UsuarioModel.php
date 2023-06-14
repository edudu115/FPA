<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    protected $table = "usuario";
    protected $primaryKey = "idUsuario";
    protected $useAutoIncrement = true;
    protected $allowedFields = ["nome", "prontuario", "senha", "cpf", "cargo",
                                 "tempoCampus", "tempoExp", 
                                 "tempoProfissional", "tempoInstituicao", 
                                 "nivelCarreira", "idade"];
    protected $returnType = "object";

    public function verificar_login($p, $s)
    {
        $query = $this->db->query("SELECT * FROM usuario WHERE prontuario='$p' AND senha='$s'");
        return $query->getResult('object');
    }

    public function desempateUsuario($idUsuario){
        $query = $this->db->query("SELECT idUsuario, tempoCampus, tempoExp, tempoProfissional, tempoInstituicao, nivelCarreira, idade 
                                   FROM usuario WHERE idUsuario = $idUsuario");
        return $query->getResult('object');
    }
}
?>