<?php
class BlogModel {
    private $posts = [];

    public function __construct(){
        $this->posts = [
            ['id' => 1, 'title' => 'post1'],
            ['id' => 2, 'title' => 'post2'],
            ['id' => 3, 'title' => 'post3'],
            ['id' => 4, 'title' => 'post4'],
        ];
    }
    public function getPosts(){
        return $this->posts;
    }
    public function getPost($id){
        foreach($this->posts as $post) {
            if($post['id'] === (+$id)) {
                return $post;
            }
        }
    }
}