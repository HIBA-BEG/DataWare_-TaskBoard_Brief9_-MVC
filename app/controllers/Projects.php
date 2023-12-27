<?php
class Projects extends Controller{
    private $projectModel;
    private $userModel;

        public function __construct(){
            if(!isset($_SESSION['id_user'])){
                redirect('users/login');
                echo'ana khdam';
            }
      
            $this->projectModel = $this->model('Project');
            $this->userModel = $this->model('User');
          }
    
        
    public function index(){
        $projects = $this->projectModel->getProject();
        $data = [
            'projects'=> $projects,
        ];

        $this->view('projects/index', $data);
    }

    public function add(){
        $projects = $this->projectModel->getProject();
        $data = [
            'project_title'=> '',
            'description'=> '',
            'creation_date'=> '',
            'deadline'=> ''
        ];
    
        $this->view('projects/add', $data);
    }
}