<?php

class Post extends MySQLDatabase {
    private $title;
    private $image;
    private $article;
    private $admin_id;
    private $category_id;
    private $datetime;

    public function __construct($title=NULL, $image=NULL, $article=NULL, $admin_id=NULL, $category_id=NULL , $datetime=NULL) {
        parent::__construct();
        $this->table = 'post';
        $this->title = $title;
        $this->image = $image;
        $this->article = $article;
        $this->admin_id = $admin_id;
        $this->category_id = $category_id;

        $this->data = [
            'title' => $this->title,
            'image' => $this->image,
            'article' => $this->article,
            'admin_id' => $this->admin_id,
            'category_id' => $this->category_id,
            'datetime' => $this->datetime
        ];
    }

    public function set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;

            $this->data = [
                'title' => $this->title,
                'image' => $this->image,
                'article' => $this->article,
                'admin_id' => $this->admin_id,
                'category_id' => $this->category_id
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