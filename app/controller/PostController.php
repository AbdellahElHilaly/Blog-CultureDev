<?php

class PostController {
    private $post;

    public function __construct() {
        $this->post = new Post();
    }

    public function handleFormData($data) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
        die();
        if (isset($data['add-posts'])) {
            return $this->addPosts($data);
        } else if (isset($data['add-post'])) {
            return $this->addPost($data  , $data['add-post']);
        }
    }

    public function handleFormImage($image) {
        die($image);
        if (!empty($image)) {
            $fileName = $image['name'];
            $fileTmpName = $image['tmp_name'];
            $fileSize = $image['size'];
            $fileError = $image['error'];
            $fileType = $image['type'];
            
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            
            $allowed = array('jpg', 'jpeg', 'png');
            
            if (in_array($fileActualExt, $allowed)) {
                if ($fileError === 0) {
                    if ($fileSize < 1000000) {
                        $fileNameNew = uniqid('', true).".".$fileActualExt;
                        $fileDestination = './../../public/asset/image'.$fileNameNew;
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
        $imageResult = $this->handleFormImage($data['post-image'][$index]);
        if($imageResult[0] == 'error'){
            return $imageResult[1];
        }
        $this->post->set('title', $data['post-title'][ $index]);
        $this->post->set('image' , $imageResult[1]);
        $this->post->set('article', $data['post-article'][ $index]);
        $this->post->set('admin_id', 11);
        $this->post->set('category_id', $data['post-categorie_id'][ $index]);
        return $this->post->insert();
    }
    
}



?>