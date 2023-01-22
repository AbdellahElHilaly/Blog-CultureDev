<?php

    class PostController{
        private $post;
        public function __construct(){
            $this->post = new Post();
        }

        public function addPosts(){
            $this->post->insert();
        }

        public function handleFormData($data){

            echo "<pre>";
            print_r($data);
            echo "</pre>";

            $this->post->set('title' , $data[0]['post-title']);
            $this->post->set('image' , $data[0]['post-categoriese']);
            $this->post->set('article' , $data[0]['title']);
            $this->post->set('admin_id' , $data[0]['title']);
            $this->post->set('category_id' , $data[0]['title']);

            if($data['submit'] == 'register') return $this->addPosts();

        }
    }



    






?>