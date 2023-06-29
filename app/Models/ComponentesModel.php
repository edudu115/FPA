<?php

namespace App\Models;

use CodeIgniter\Model;

class ComponentesModel extends Model
{
    protected $table = "componentes";
    protected $primaryKey = "idComponentes";
    protected $useAutoIncrement = false;
    protected $allowedFields = [
        "idComponentes", "nomeMateria",
        "cursos_idCurso", "periodo", "horasSemanais", "usuario_atribuidoPara"
    ];
    protected $returnType = "object";

    public function joinComponente()
    {
        $query = $this->db->query("SELECT componentes.idComponentes, componentes.nomeMateria, componentes.periodo, componentes.cursos_idCurso, componentes.horasSemanais,horario.idHorario, horario.diaSemana, horario.horaInicio, horario.horaFim
                                   FROM (componentes 
                                   INNER JOIN horario ON componentes.idComponentes = horario.componente_idComponentes)
                                   ORDER BY componentes.idComponentes ASC");
        return $query->getResult('object');
    }

    public function deleteComponente($id)
    {
        $query = $this->db->table('componentes')->select('nomeMateria, periodo, horasSemanais, usuario_atribuidoPara')->where('idComponentes', $id);

        $this->db->table('horario')
            ->setQueryAsData($query, 'componentes')
            ->onConstraint($id)
            ->where('componentes.idComponentes = horario.componente_idComponentes')
            ->deleteBatch();
    }

    public function deletarComponentes($id)
    {
        $this->builder->delete(['id' => $id]);
    }

    public function findId($idUsuario)
    {
        $query = $this->db->query("SELECT idComponentes, usuario_atribuidoPara FROM componentes 
                                   WHERE usuario_atribuidoPara = '" . $idUsuario . "'
                                   ORDER BY idCOmponentes ASC;");
        return $query->getResult('object');
    }

    public function selectComponentesNull()
    {
        $query = $this->db->query("SELECT comp.idComponentes AS sigla ,comp.nomeMateria, ifnull(comp.usuario_atribuidoPara, 'SEM ATRIBUIÇÃO') as usuarioNULL, c.nomeCurso
                                   FROM (componentes comp 
                                   INNER JOIN cursos c ON c.idCurso = comp.cursos_idCurso)
                                   WHERE comp.usuario_atribuidoPara IS NULL;");
        return $query->getResult();
    }
}
