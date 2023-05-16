<?php

    namespace App\Controllers;
    class Componentes extends BaseController
    {
        private $componenteModel;
        private $cursoModel;
        private $horarioModel;
        public $session;
        public function __construct(){
            $this->componenteModel = new \App\Models\ComponentesModel();
            $this->cursoModel = new \App\Models\CursosModel();
            $this->horarioModel = new \App\Models\HorarioModel();
            $this->session = \Config\Services::session();
        }
        
        public function viewComponente(){
            $dados = ['retorna'=>$this->componenteModel->joinComponente(),
                        'cargo' => $this->session->cargo];
            //echo $retorna[0]->nomeMateria;
            return view('componentesView', $dados);
        }

        public function viewFormComponente(){
            return view('formComponentesView');
        }

        public function saveComponente(){

            $this->componenteModel->save([
                                            'nomeMateria'=>$this->request->getPost('nomeMateria'),
                                            'periodo'=>$this->request->getPost('periodo'),
                                            'horasSemanais'=>$this->request->getPost('horasSemanais')
                                        ]);
            $this->cursoModel->save([
                                        'nomeCurso'=>$this->request->getPost('nomeCurso')
                                    ]);
            $this->horarioModel->save([
                                        'diaSemana'=>$this->request->getPost('diaSemana'),
                                        'horaInicio'=>$this->request->getPost('horaInicio'),
                                        'horaFim'=>$this->request->getPost('horaFim')
                                      ]);
            
            $this->response->redirect(base_url('Componentes/viewComponente'));
            }

        public function deleteComponente($idComponentes){
            $this->componenteModel->delete(($idComponentes));
            $this->response->redirect(base_url('Componentes/viewComponente'));
        }
    }

?>