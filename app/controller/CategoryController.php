<?php

    class CategoryController {
        private $category;
        
        public function __construct(){
            $this->category = new Category();
        }
        
        public function getCategories($id=NULL) {
            if($id == NULL)  return $this->category->select();
            return $this->category->select("WHERE id = ". $id);
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
            return $this->category->delete("WHERE id = ".$id);
        }

        public function handleFormData($data){
            if(isset($data['submite'])  && $data['submite'] == 'add' ) return $this->addCategory($data['category-name']);
            elseif(isset($data['submite'])  && $data['submite'] == 'edit') return $this->editCategory($data);
            elseif(isset($data['delete-category'])) return $this->deleteCategory($data['delete-category']);

            // echo "<pre>";
            // print_r($data);
            // echo "</pre>";


        }
    }





?>