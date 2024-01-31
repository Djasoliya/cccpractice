<?php
class post{
    public $title;
    public $content;
    public function blogInfo(){
        echo "Title : $this->title <br> Content : $this->content <br>";
    }
}
class blog{
    private $posts = [];
    public function addPost(post $post){
        $this->posts[] = $post;
    }
    public function displayAllPost(){
        foreach($this->posts as $post){
            $post->blogInfo();
        }
    }
}
$post1 = new post();
$post1->title = "Introduction to PHP";
$post1->content = "This is a blog post about PHP.";

$post2 = new post();
$post2->title = "Object-Oriented Programming";
$post2->content = "An overview of OOP principles.";

$blog = new blog();
$blog->addPost($post1);
$blog->addPost($post2);
$blog->displayAllPost();
?>