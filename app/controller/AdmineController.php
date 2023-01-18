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
            if (!preg_match("/^[a-zA-Z ]*$/", $data['name'])) {
                $valid = false;
                $error_msg .= "Invalid name. Only letters and white space allowed. ";
            }
            else if(strlen($data['name']) < 4) {
                $valid = false;
                $error_msg .= "Name must have at least 4 characters. ";
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
            if ($data['password'] != $data['conf-password']) {
                $valid = false;
                $error_msg .= "Different Passwords. ";
            }

            if (!$valid) {
                return array("valid" => $valid, "error_msg" => $error_msg);
            }

            return array("valid" => $valid);
        }
    




        public function handleFormData($data) {
            $validation = $this->validateFormData($data);
            if (!$validation['valid']) {
                return 'ERROR : ' . implode($validation) ;
            }
        
            $name = $this->filterString($data['name']);
            $email = $this->filterEmail($data['email']);
            $password = $this->filterString($data['password']); // i dont't this if this is good !? :(
            $hashed_password = $this->hashPassword($password);

        
            $this->admin->set('name', $name);
            $this->admin->set('email', $email);
            $this->admin->set('password', $hashed_password);
        
            if($data['submit'] == 'register') return $this->admin->insert();
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

    }

?>


