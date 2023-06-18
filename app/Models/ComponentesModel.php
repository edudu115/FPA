<?php

namespace App\Models;

use CodeIgniter\Model;

class ComponentesModel extends Model{
    protected $table = "componentes";
    protected $primaryKey = "idComponentes";
    protected $useAutoIncrement = false;
    protected $allowedFields = ["idComponentes", "nomeMateria",
                                "cursos_idCurso", "periodo", "horasSemanais", "usuario_atribuidoPara"];
    protected $returnType = "object";

    

    public function joinComponente()
    {
        $query = $this->db->query("SELECT componentes.idComponentes, componentes.nomeMateria, componentes.periodo, componentes.cursos_idCurso, componentes.horasSemanais,horario.idHorario, horario.diaSemana, horario.horaInicio, horario.horaFim
                                   FROM (componentes 
                                   INNER JOIN horario ON componentes.idComponentes = horario.componente_idComponentes)");
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
                                   WHERE usuario_atribuidoPara = '".$idUsuario."'
                                   ORDER BY idCOmponentes ASC;");
        return $query->getResult('object');
    }
}


?>