<?php
require_once "../models/Posts.php";
require_once "../models/Post.php";
class Controller
{
    private Post $postObj;
    private Posts $postsObj;

    public function __construct()
    {
        $this->postObj = new Post();
        $this->postsObj = new Posts();
    }

    public function listPosts()
    {
        $posts = $this->postsObj->posted();
        require_once '../views/posts-list.php';
    }

    public function linkOnePost()
    {
        $post = null;
        if (isset($_GET['id']) && is_numeric($_GET['id'])){
            $post = $this->postObj->post($_GET['id']);
        }
        require_once '../views/post-show.php';
    }
}