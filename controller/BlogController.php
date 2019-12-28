<?php

class BlogController implements InterfaceController {
    private $model;

    public function __construct() {
        include './model/BlogModel.php';
        $this->model = new BlogModel;
    }

    public function render(){
    }

    public function getPost(){

        include './view/post.php';
        
    }
    public function getPosts(){
        $posts = $this->model->getPosts();
        var_dump($posts);
        include './view/posts.php';
    }
}

