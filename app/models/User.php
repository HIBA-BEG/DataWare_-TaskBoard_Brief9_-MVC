<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Regsiter user
    public function register($data)
    {
        //   hashing the password

        $this->db->query('INSERT INTO users (first_name, last_name, email, password, phone) VALUES(:first_name, :last_name, :email, :password, :phone)');
        // Bind values
        $this->db->bind(':first_name', $data['first_name']);
        $this->db->bind(':last_name', $data['last_name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':phone', $data['phone']);
        try {
            // Execute
            $this->db->execute();
            return true; //successful registration
        } catch (PDOException $e) {
            // Log or handle the database error
            error_log('User registration failed: ' . $e->getMessage());
            return false; //failed registration
        }
    }

    // Login User
    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        $this->db->bind(':email', $email);
        // echo $email;
    
        $this->db->execute();
        $row = $this->db->single(); // Assuming you have a single method in your database class
    
        if ($row) {
            $hashed_password = $row['password'];
            if (password_verify($password, $hashed_password)) {
                // Password is correct, return user data
                unset($row['password']); // Remove the hashed password from the returned user data
                return $row;
            } else {
                // Password is incorrect
                return false;
            }
        } else {
            // User not found
            return false;
        }
    }

    // Find user by email
    public function findUserByEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Check row
        if ($this->db->rowCount() > 0) {
            echo "loool foudn";
            return $row;
        } else {
            echo "nope not found";
            return false;
        }
    }

    // Get User by ID
    public function getUserById($id){
        $this->db->query('SELECT * FROM users WHERE id_user = :id');
        // Bind value
        $this->db->bind(':id', $id);
  
        $row = $this->db->single();
  
        return $row;
      }




    
}
