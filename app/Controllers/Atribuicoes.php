<?php

    namespace App\Controllers;

    class Atribuicoes extends BaseController
    {

        private $componenteModel;
        private $preferenciaModel;
        private $usuarioModel;

        public function __construct()
        {
            $this->componenteModel = new \App\Models\ComponentesModel();
            $this->preferenciaModel = new \App\Models\PreferenciaModel();
            $this->usuarioModel = new \App\Models\UsuarioModel();
        }

//=======================================================================
//ATRIBUIR MATERIA PRO USUARIO
        private function atribuidoPara($idComponente, $idUsuario)
        {
            $dados = ['idComponentes' => $idComponente,
                      'usuario_atribuidoPara' => $idUsuario];

            $this->componenteModel->save($dados);
        }
//=======================================================================
 

//=======================================================================
//VERIFICAR SE ALGUÉM MARCOU O COMPONENTE COMO PREFERENCIAL
        private function componentePreferencial($idComponente)
        {
            $preferencias = $this->preferenciaModel->find();
            
            $teste = false;
            $i = 0;
            foreach($preferencias as $preferencia)
            {
                $preferencia = $preferencia->componentes_idComponentes;
                $i++;

                if($preferencia == $idComponente)        
                    $teste = true;
            }
            if($teste)
                return true;
            else
                return false;
        }

//=======================================================================
    
//=======================================================================
//COMPARANDO E DECIDINDO QUAL USUARIO FICARÁ COM O COMPONENTE
        public function comparacoes()
        {
            $componente = $this->componenteModel->find();
            $preferencias = $this->preferenciaModel->find();
            $i = 0;
            foreach($preferencias as $preferencia)//percorrendo a tabela de preferencias
            {
                $idPreferencia = $preferencia->componentes_idComponentes;
                $idUsuario = $preferencia->usuario_idUsuario;
                if($this->componentePreferencial($idPreferencia)) //existe alguem usuario com preferencia nessa materia
                {

                    if(sizeof($this->preferenciaModel->repeticaoPreferencia($idPreferencia)) > 1) //existe mais de um usuario com preferencias na mesma materia
                    {

                        $materias = $this->preferenciaModel->repeticaoPreferencia($idPreferencia);
                        foreach($materias as $materia)
                        {
                            var_dump($materia);
                            echo "<br><br>";
                            // if($materia->prioridade == 1)
                            // {
                            //     echo "$idUsuario marcou a materia $idPreferencia como $materia->prioridade <br>";
                            // }
                        }

                    }

                }
            }
        }
//=======================================================================

    }
?>