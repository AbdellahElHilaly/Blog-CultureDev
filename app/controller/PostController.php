<?php

class PostController {
    private $post;

    public function __construct() {
        $this->post = new Post();
    }

    public function handleFormData($data) {
        if (isset($data['add-posts'])) {
            return $this->addPosts($data);
        } else if (isset($data['add-post'])) {
            return $this->addPost($data  , 0);
        }else if (isset($data['edit-post'])) {
            return $this->updatePost($data  , $data['edit-post']);
        }else if (isset($data['delete-post'])) {
            return $this->deletePost($data['delete-post']);
        }else if(isset($data['viwe-post'])) return $this->getJoinPosts($data['viwe-post']);
    }


    public function handleFormImage($image , $index) {
        if (!empty($image)) {
            $fileName = $image['name'][$index];
            $fileTmpName = $image['tmp_name'][$index];
            $fileSize = $image['size'][$index];
            $fileError = $image['error'][$index];
            $fileType = $image['type'][$index];

            
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            
            $allowed = array('jpg', 'jpeg', 'png');
            
            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 1000000) {
                        $fileNameNew = uniqid('', true).".".$fileActualExt;
                        $fileDestination = __DIR__ . '/../../public/asset/image/'.$fileNameNew;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        return ["success" , $fileNameNew];
                    } else {
                        return ["error" , "Your file is too big!"];
                    }
                } else {
                    return ["error" , "There was an error uploading your file!"];
                }
            } else {
                return  ["error" ,"You cannot upload files of this type!"];
            }
        }
    }


    private function addPosts($data) {
        for ($i = 0; $i < count($data['post-title']); $i++) {
            $result = $this->addPost($data , $i);
            if($result !=1)  return $result;
        }
        return 1;
    }


    private function addPost($data , $index) {
        $imageResult = $this->handleFormImage($_FILES["post-image"] , $index);
        
        if($imageResult[0] == 'error'){
            return $imageResult[1];
        }
        $this->post->set('title', $data['post-title'][ $index]);
        $this->post->set('image' , $imageResult[1]);
        $this->post->set('article', $data['post-article'][ $index]);
        $this->post->set('admin_id', 84);
        $this->post->set('category_id', $data['post-categorie_id'][ $index]);
        $this->post->set('datetime',  date("Y-m-d H:i:s"));
        return $this->post->insert();
    }
    private function updatePost($data , $id) {
        $imageResult = $this->handleFormImage($_FILES["post-image"] , 0);
        
        if($imageResult[0] == 'error'){
            return $imageResult[1];
        }
        $this->post->set('title', $data['post-title'][0]);
        $this->post->set('image' , $imageResult[1]);
        $this->post->set('article', $data['post-article'][0]);
        $this->post->set('admin_id', 84);
        $this->post->set('category_id', $data['post-categorie_id'][0]);
        $this->post->set('datetime',  date("Y-m-d H:i:s"));
        
        return $this->post->update("WHERE id = ".$id);
    }


    public function getPosts(){
        return $this->post->select();    
    }
    public function getJoinPosts($id = NULL){
        if($id) return $this->post->join(" WHERE post.id = ". $id)[0];
        else return $this->post->join();
    }

    public function getPost($id){
        return $this->post->select("WHERE id = ".$id)[0];
    }
    public function deletePost($id){
        return $this->post->delete("WHERE id = ".$id);
    }





    
    


}



?>