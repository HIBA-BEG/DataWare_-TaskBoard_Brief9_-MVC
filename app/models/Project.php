<?php
  class Project {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getProject(){
      $this->db->query('SELECT * FROM projets 
      INNER JOIN users 
      where users.id_user = projets.user_id 
      ORDER by projets.deadline ASC;
      ');

      $results = $this->db->resultSet();

      return $results;
    }

    public function addProject($data){
      $this->db->query('INSERT INTO projets (project_title, description, creation_date, deadline, user_id) VALUES(:project_title, :description, current_timestamp(), :deadline, :user_id)');
      // Bind values
      $this->db->bind(':project_title', $data['project_title']);
      $this->db->bind(':description', $data['description']);
      $this->db->bind(':creation_date', $data['current_timestamp']);
      $this->db->bind(':deadline', $data['deadline']);
      $this->db->bind(':user_id', $data['user_id']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function updateProject($data){
      $this->db->query('UPDATE projets SET project_title = :project_title, description = :description, deadline = :deadline WHERE id_project = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':project_title', $data['project_title']);
      $this->db->bind(':description', $data['description']);
      $this->db->bind(':deadline', $data['deadline']);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    public function getProjectById($id){
      $this->db->query('SELECT * FROM projets WHERE id_project = :id');
      $this->db->bind(':id', $id);

      $row = $this->db->single();

      return $row;
    }

    public function deleteProject($id){
      $this->db->query('DELETE FROM projets WHERE id_project = :id');
      // Bind values
      $this->db->bind(':id', $id);

      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
  }