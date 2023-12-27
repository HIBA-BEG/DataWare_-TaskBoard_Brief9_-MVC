<?php
class Tasks extends Controller{
    public function index(){
        $data = [];

        $this->view('tasks/index', $data);
    }
}