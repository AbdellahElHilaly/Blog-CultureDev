<?php

    class Admin extends MySQLDatabase {
        private $name;
        private $email;
        private $password;

        public function __construct($name=NULL , $email=NULL , $password=NULL ) {
            parent::__construct();
            $this->table = 'admin';
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;

            $this->data = [
                'admin_name'      =>  $this->name,
                'email'        =>  $this->email,
                'password'  =>  $this->password   
            ];
        }

        public function set($property, $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;

                $this->data = [
                    'admin_name'      =>  $this->name,
                    'email'        =>  $this->email,
                    'password'  =>  $this->password   
                ];
            }
        }

        public function get($property) {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
            return null;
        }
    }



?>

