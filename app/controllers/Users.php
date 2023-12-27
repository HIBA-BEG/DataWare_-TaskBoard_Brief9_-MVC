<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
class Users extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function register()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST data

            // Init data
            $data = [
                'first_name' => trim($_POST['first_name']),
                'last_name' => trim($_POST['last_name']),
                'email' => trim($_POST['email']),
                'password' => $_POST['password'],
                'confirm_password' => $_POST['confirm_password'],
                'phone' => trim($_POST['phone']),
                'first_name_err' => '',
                'last_name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
                'phone_err' => '',
            ];

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Pleae enter email';
            } else {
                // Check email
                if ($this->userModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

            // Validate First Name
            if (empty($data['first_name'])) {
                $data['first_name_err'] = 'Please enter name';
            }

            // Validate Last Name
            if (empty($data['last_name'])) {
                $data['last_name_err'] = 'Please enter name';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 characters';
            }

            // Validate Confirm Password
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please confirm password';
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Passwords do not match';
                }
            }

            // Validate Phone
            if (empty($data['phone'])) {
                $data['phone_err'] = 'Please enter phone number';
            } elseif (strlen($data['phone']) != 12) {
                $data['phone_err'] = 'Phone number must start with 212 & contain 9 other numbers ';
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['first_name_err']) && empty($data['last_name_err']) && empty($data['password_err']) && empty($data['confirm_password_err']) && empty($data['phone_err'])) {
                // Validated

                // Hash Password
                $data['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

                // Register User
                if ($this->userModel->register($data)) {
                    flash('register_success', 'You are registered and can log in');
                    redirect('users/login');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('users/register', $data);
            }
        } else {
            // Init data
            $data = [
                'first_name' => '',
                'last_name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'phone' => '',
                'first_name_err' => '',
                'last_name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => '',
                'phone_err' => ''
            ];

            // Load view
            $this->view('users/register', $data);
        }
    }

    public function login()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
    
            // Init data
            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'email_err' => '',
                'password_err' => '',
            ];
    
            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }
    
            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }
    
            // Check for user/email
            $user = $this->userModel->findUserByEmail($data['email']);
    
            if ($user) {
                echo $_POST['password'];
                echo $user['password'];
                // User found, check password
                if (password_verify($_POST['password'], $user['password'])) {
                    // Password is correct, set up the session
                    echo "this is correct :)";
                    $this->createUserSession($user);
                } else {
                    echo "this aint correct";
                    // Password incorrect
                    echo $_SESSION["id_user"];
                    $data['password_err'] = 'Password incorrect';
                }
            } else {
                // User not found
                $data['email_err'] = 'No user found';
            }
    
            // Check for errors
            if (empty($data['email_err']) && empty($data['password_err'])) {
                // Validated, login successful
                // Redirect or do other actions as needed
                // echo 'Login successful';
            } else {
                // Load view with errors
                $this->view('users/login', $data);
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];
    
            // Load view
            $this->view('users/login', $data);
        }
    }

    public function createUserSession($user){
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['last_name'] = $user['last_name'];
        $_SESSION['first_name'] = $user['first_name'];
        redirect('projects');
      }
      
      public function logout(){
        unset($_SESSION['id_user']);
        unset($_SESSION['email']);
        unset($_SESSION['last_name']);
        session_destroy();
        redirect('users/login');
      }
}
