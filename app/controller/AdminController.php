<?php
    class AdminController {
        private $admin;

        public function __construct(){
            $this->admin = new Admin();
        }
        
        public function validateFormData($data) {
            $valid = true;
            $error_msg = "";

            //Validate name
            if(isset($data['name'])){
                if (!preg_match("/^[a-zA-Z ]*$/", $data['name'])) {
                    $valid = false;
                    $error_msg .= "Invalid name. Only letters and white space allowed. ";
                }
                else if(strlen($data['name']) < 4) {
                    $valid = false;
                    $error_msg .= "Name must have at least 4 characters. ";
                }
            }
            

            //Validate email
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $valid = false;
                $error_msg .= "Invalid email. ";
            }

            //Validate password
            if (!preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/", $data['password'])) {
                $valid = false;
                $error_msg .= "Invalid password. 8+ characters, 1 uppercase, 1 lowercase, 1 digit, 1 special character required. ";
            }
            //confirme password
            if(isset($data['conf-password'])){
                if ($data['password'] != $data['conf-password']) {
                    $valid = false;
                    $error_msg .= "Different Passwords. ";
                }
    
                if (!$valid) {
                    return array("valid" => $valid, "error_msg" => $error_msg);
                }
            }
            

            return array("valid" => $valid);
        }
    
        public function handleFormData($data) {

            if(isset($data['logout'])) return $this->logout();
            
            
            $validation = $this->validateFormData($data);
            if (!$validation['valid']) {
                return 'ERROR : ' . implode($validation) ;
            }
        
            if(isset($data['name'])) $name = $this->filterString($data['name']);
            $email = $this->filterEmail($data['email']);
            $password = $this->filterString($data['password']); // i dont't know this if is good !? :(
            $hashed_password = $this->hashPassword($password);

            if(isset($data['name'])) $this->admin->set('name', $name);
            $this->admin->set('email', $email);
            $this->admin->set('password', $hashed_password);
        
            if($data['submit'] == 'register') return $this->admin->insert();
            elseif($data['submit'] == 'login') return $this->login($data['password']);
        }

        public function insertAdmin() {
            return $this->admin->insert();
        }

        public function updateAdmin($where=NULL) {
            return $this->admin->update($where);
        }

        public function deleteAdmin($where=NULL) {
            return $this->admin->delete($where);
        }

        public function getAdmin($where=NULL) {
            return $this->admin->select($where);
        }


        private function filterString($string){
            $string = trim($string);
            $string =  filter_var($string , FILTER_SANITIZE_SPECIAL_CHARS);
            return $string;
        }
        private function filterEmail($email){
            $email = trim($email);
            $email =  filter_var($email , FILTER_SANITIZE_EMAIL);
            return $email;
        }
        private function hashPassword($password){
            return password_hash($password, PASSWORD_DEFAULT);
        }


        public function login($password) {
            $email = $this->admin->get('email');

        
            if (!$this->admin->isExist('email')) return "Email not found.";
        
            $tempAdmin = $this->admin->select("WHERE email = '" . $email . "'")[0];
        
            if (!password_verify($password, $tempAdmin['password'])) return "Incorrect password.";
            // Start the session
            // if (session_status() == PHP_SESSION_NONE) {
            //     session_start();
            // }

            // Store the admin's id and name in the session
            $_SESSION['admin_id'] = $tempAdmin['id'];
            $_SESSION['admin_name'] = $tempAdmin['admin_name'];


        
            return 1;
        }

        public function logout() {
            session_destroy(); // destroy the current session
            header("Location: home"); // redirect to login page
            exit;
        }
        
        
        

    }

?>


