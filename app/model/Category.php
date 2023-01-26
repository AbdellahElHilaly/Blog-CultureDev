<?php

    class Category extends MySQLDatabase {
        private $name;

        public function __construct($name=NULL) {
            parent::__construct();
            $this->table = 'category';
            $this->name = $name;

            $this->data = [
                'category_name' => $this->name
            ];
        }

        public function set($property, $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;

                $this->data = [
                    'category_name' => $this->name
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