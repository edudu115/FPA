<?php

namespace App\Models;

use CodeIgniter\Model;

class PreferenciaModel extends Model
{
    protected $table = "preferencia";
    protected $primaryKey = "idPreferencia";
    protected $useAutoIncrement = true;
    protected $allowedFields =  [
        "usuario_idUsuario",
        "componentes_idComponentes",
        "prioridade"
    ];
    protected $returnType = "object";

    public function selecPreferencia()
    {
        $query = $this->db->query("SELECT u.nome, c.nomeMateria, p.prioridade
                                   FROM ((preferencia p 
                                   INNER JOIN usuario u ON u.idUsuario = p.usuario_idUsuario)
                                   INNER JOIN componentes c ON c.idComponentes = p.componentes_idComponentes);");
        return $query->getResult('object');
    }

    public function repeticaoPreferencia($materia, $prioridade)
    {
        $query = $this->db->query("SELECT componentes_idComponentes, usuario_idUsuario, prioridade FROM preferencia 
                                   WHERE componentes_idComponentes = '" . $materia . "' 
                                   AND prioridade = '" . $prioridade . "';");
        return $query->getResult('object');
    }

    public function contMateria($idMateria)
    {
        $query = $this->db->query("SELECT COUNT(usuario_idUsuario) AS quantidade_preferem, componentes_idComponentes, prioridade
                                   FROM preferencia
                                   GROUP BY prioridade, componentes_idComponentes;");
        return $query->getResult('object');
    }
}
