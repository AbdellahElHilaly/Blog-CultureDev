<?php

    class CategoryController {
        private $category;
        
        public function __construct(){
            $this->category = new Category();
        }
        
        public function getCategories($data=NULL) {
            if($data == NULL)  return $this->category->select();
            return $this->category->select("WHERE id = ". $data['id']);
        }
        
        private function addCategory($name) {
            $this->category->set('name', $name);
            return $this->category->insert();
        }
        
        private function editCategory($data) {
            $this->category->set('name',$data['category-name']);
            return $this->category->update("WHERE id = ". $data['id']);
        }
        
        private function deleteCategory($id) {
            $this->category->set('id', $id);
            return $this->category->delete();
        }

        public function handleFormData($data){
            if(isset($data['submite'])  && $data['submite'] == 'add' ) return $this->addCategory($data['category-name']);
            elseif(isset($data['submite'])  && $data['submite'] == 'edit') return $this->editCategory($data);
            elseif(isset($data['action'])  && $data['action'] == 'edit') return $this->getCategories($data)[0]['name'];

            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";


        }
    }





?>